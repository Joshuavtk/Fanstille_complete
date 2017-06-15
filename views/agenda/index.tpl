<div class="wrap">
    <div id="agenda-wrap">
        <h1>Upcoming events</h1>
        <div id="currentPage">Page {$page}</div>
        {if $page gt 1}
            <a href="{$filePath}articles/{$page-1}">Previous article</a>
        {/if}
        {if $page lt $number_of_pages}
            <a href="{$filePath}articles/{$page+1}">Next article</a>
        {/if}
    </div>
    {foreach from=$articles_list item=one_article}
        <article>
            <h1> {$one_article.title} </h1>
            <h3>{$one_article.date_created|date_format:"%e %B %Y"}</h3>
            <div class="imageDiv">
                <img src="{$filePath}{$one_article.image}" class="articleImage">
            </div>
            <div> {$one_article.content} </div>
        </article>
    {/foreach}
</div>
</div>