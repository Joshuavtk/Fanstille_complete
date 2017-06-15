<?php

require 'libs/Smarty.class.php';

//set up database connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($mysqli->errno) {
    echo 'Error : ' . $mysqli->connect_error();
}

//set up template engine

$templateParser = new Smarty();
$templateParser->template_dir = "views";
$templateParser->compile_dir = "views/compiled";
