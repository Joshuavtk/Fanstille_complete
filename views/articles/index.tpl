<div class="wrap">
    <div class="article-wrap">
        <div id="page-switcher">
            {if $page gt 1}
                <a href="{$filePath}articles/page/{$page-1}"><- Previous page</a>
            {/if}
            <span style="font-weight: 600; font-size: 19px; padding: 0.1em;">Page {$page}</span>
            {if $page lt $number_of_pages}
                <a href="{$filePath}articles/page/{$page+1}">Next page -></a>
            {/if}
        </div>
        {foreach from=$articles_list item=article}
            <a href="{$filePath}articles/{$article.post}">
                <article>
                    <h1>{$article.title}</h1>
                    <h3>{$article.date_created|date_format:"%e %B %Y"}</h3>
                    <div class="imageDiv">
                        <img src="{$filePath}{$article.image}" class="articleImage" alt="Article Image">
                    </div>
                    <div> {$article.content} </div>
                </article>
            </a>
        {/foreach}
    </div>
</div>

