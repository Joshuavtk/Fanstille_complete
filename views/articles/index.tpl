<div class="wrap">
    <div class="article-wrap">
        <div id="page-switcher">
            <div id="current-page">Page {$page}</div>
            {if $page gt 1}
                <a href="{$filePath}articles/page/{$page-1}">Previous page</a>
            {/if}
            {if $page lt $number_of_pages}
                <a href="{$filePath}articles/page/{$page+1}">Next page</a>
            {/if}
        </div>
        {foreach from=$articles_list item=article}
            <article>
                <h1><a href="{$filePath}articles/{$article.post}"> {$article.title} </a></h1>
                <h3>{$article.date_created|date_format:"%e %B %Y"}</h3>
                <div class="imageDiv">
                    <img src="{$filePath}{$article.image}" class="articleImage" alt="Article Image">
                </div>
                <div> {$article.content} </div>
            </article>
        {/foreach}
    </div>
</div>

