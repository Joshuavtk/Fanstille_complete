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
    {foreach from=$events_list item=event}
        <article>
            <h1> {$event.title} </h1>
            <h3>{$event.date}</h3>
            <div> {$event.content} </div>
        </article>
    {/foreach}
</div>
</div>