<div id="primary" class="home-page">
    <div class="wrap">
        <div id="site-info">
            Welcome to Fanstille! This website was made for fans of Bastille and for people who want to know more about Bastille.
            I hope you have a wonderful time on my website.
        </div>
        <br>
        <div id="thumbnails">
            <div id="index-article-title">Latest articles</div>
            {foreach from=$index_list item=article}
                <div class="thumb-wrap">
                    <a href="{$filePath}articles/{$article.post}">
                        <h1> {$article.title} </h1>
                        <div class="small-image">
                            <img src="{$filePath}{$article.image}" class="articleImage" alt="Article Image">
                        </div>
                    </a>
                </div>
            {/foreach}
        </div>

    </div>
</div>
<div id="secondary" class="home-page">
    <div class="wrap">
        <h3>Network sites</h3>
        <a href="https://www.facebook.com/bastilleuk/?fref=nf" class="dark-button">Bastille on facebook</a>
        <a href="https://twitter.com/bastilledan" class="dark-button">Bastille on Twitter</a>
        <a href="https://www.reddit.com/r/bastille" class="dark-button">Bastille's subreddit</a>
    </div>
</div>