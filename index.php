<?php
//start of session
session_start();

//configuration settings
//require_once 'libs/Autoloader.php';
require_once 'includes/config.php';
require_once 'includes/bootstrap.php';
include_once 'includes/paths.php';

//initialisation
$templateParser->assign('filePath', URL);

$url = isset($_GET['url']) ? $_GET['url'] : 'index';
$url = rtrim($url, '/');
$url = explode('/', $url);
//print_r($url);

// head
$title = ucfirst($url[0]);
$templateParser->assign('myTitle', $title);
$templateParser->display('head.tpl');

// header
$templateParser->display('header.tpl');

// menu
if ($_SESSION['isAdmin']) {
    $templateParser->display('menu/admin.tpl');
} else {
    !isset($_SESSION['loggedIn']) ? $templateParser->display('menu/loggedOut.tpl') : $templateParser->display('menu/loggedIn.tpl');
}

//body
switch ($url[0]) {
    case 'index':
        require_once 'model/index_page.php';
        $templateParser->assign('index_list', $index_list);
        $templateParser->display('index.tpl');
        break;
    case 'articles':
        if (!isset($url[1])) {
            $page = 1;
        } else if ($url[1] == 'page') {
            $page = $url[2];
        }
        if (isset($page)) {
            include_once 'model/getarticles.php';
            $templateParser->assign('page', $page);
            include_once 'model/getarticle_data.php';
            $templateParser->assign('number_of_pages', $number_of_pages);
            $templateParser->assign('articles_list', $result_list);
            $templateParser->display('articles/index.tpl');
        } else {
            $selectedArticle = $url[1];
            require_once 'model/getarticle_post.php';
            $templateParser->assign('articles_list', $result_list);
            require_once 'model/comment_process.php';
            require_once 'model/getcomments.php';
            $templateParser->assign('comments_list', $comments_list);
            $templateParser->display('articles/expand.tpl');
        }
        break;
    case 'about':
        include_once 'model/getabout.php';
        $templateParser->assign('about_list', $about_result_list);
        $templateParser->display('about.tpl');
        break;
    case 'contact':
        $templateParser->display('contact.tpl');
        break;
    case 'help':
        $templateParser->display('views/help/index.tpl');
        if (isset($url[1]) == "other") {
            $templateParser->display('views/help/other.tpl');
        }
        break;
    case 'agenda':
        echo 'Working on this one';
        /*
        !isset($url[1]) ? $page = time() : $page = $url[1];
        include_once 'model/getevents.php';
        $templateParser->assign('page', $page);
        include_once 'model/getevents_data.php';
        $templateParser->assign('number_of_pages', $number_of_pages);
        $templateParser->assign('events_list', $events_list);
        $templateParser->display('agenda/index.tpl'); */
        break;
    case 'discover':
        $templateParser->display('discover.tpl');
        break;
    case 'register':
        require_once 'model/registration_process.php';
        isset($registration_succes) ? $templateParser->display('register/finished.tpl') : $templateParser->display('register/index.tpl');
        break;
    case 'verify':
        require_once 'model/verify_process.php';
        isset($verifySucces) ? $templateParser->display('verify/index.tpl') : $templateParser->display('verify/failure.tpl');
        break;
    case 'login':
        require_once 'model/login_process.php';
        isset($_SESSION['loggedIn']) ? $templateParser->display('login/finished.tpl') : $templateParser->display('login/index.tpl');
        break;
    case 'logout':
        if (isset($_SESSION['loggedIn'])) {
            require_once 'model/logout_process.php';
            $templateParser->display('logout/index.tpl');
        } else {
            $templateParser->display('logout/error.tpl');
        }
        break;
    case 'admin':
        if (isset($_SESSION['isAdmin'])) {
            if (isset($url[1])) {
                $templateParser->display('admin/admin_header.tpl');
                switch ($url[1]) {
                    case 'new-article':
                        require_once 'model/admin/article_create.php';
                        $templateParser->display('admin/article_create.tpl');
                        break;
                    case 'show-articles':
                        require_once 'model/admin/articles_show.php';
                        $templateParser->display('admin/articles_show.tpl');
                        break;
                    default:
                        $templateParser->display('admin/index.tpl');
                        break;
                }
            } else {
                $templateParser->display('admin/index.tpl');
            }
        } else {
            $templateParser->display('admin/no_admin.tpl');
        }
        break;
    default:
        $templateParser->display('error.tpl');
        break;
}

//include_once 'libs/debug.tpl';
//$templateParser->display('debug.tpl');

// footer
$templateParser->assign('myFooter', $footer);
$templateParser->display('footer.tpl');