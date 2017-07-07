<div id="primary" class="home-page">
    <div class="wrap">
        <div class="article-wrap">
            <div id="page-switcher">
                {if $page gt 1}
                    <a href="{$filePath}articles/page/{$page-1}"><- Previous page</a>
                {/if}
                <select style="font-weight: 600; font-size: 19px; padding: 0.1em;">
                    {foreach from=$all_pages item=pages}
                        {if $pages lt $page}
                            <option onclick="location.assign('{$filePath}articles/page/{$pages}')">
                                Page {$pages} </option>
                        {/if}
                    {/foreach}
                    <option selected>Page {$page}</option>
                    {foreach from=$all_pages item=pages}
                        {if $pages gt $page}
                            <option onclick="location.assign('{$filePath}articles/page/{$pages}')">
                                Page {$pages} </option>
                        {/if}
                    {/foreach}
                </select>
                {if $page lt $number_of_pages}
                    <a href="{$filePath}articles/page/{$page+1}">Next page -></a>
                {/if}
            </div>
            {foreach from=$articles_list item=article}
                <article>
                    <a href="{$filePath}articles/{$article.post}">
                        <h1>{$article.title}</h1>
                        <h4 style="margin: 0;">{$article.date_created|date_format:"%e %B %Y"}</h4>
                        <div class="imageDiv">
                            <img src="{$filePath}{$article.image}" class="articleImage" alt="Article Image">
                        </div>
                        <div> {$article.content} </div>
                    </a>
                    <a href="{$filePath}articles/{$article.post}#comments" class="dark-button">Comments</a>
                </article>
            {/foreach}
        </div>
    </div>
</div>
<div id="secondary" class="home-page">
    <div class="wrap">
        <h3>Network sites</h3>
        <a href="https://www.facebook.com/bastilleuk/?fref=nf" class="dark-button">Bastille on facebook</a>
        <a href="https://twitter.com/bastilledan" class="dark-button">Bastille on Twitter</a>
        <a href="https://www.reddit.com/r/bastille" class="dark-button">Bastille on Reddit</a>
    </div>
</div>

