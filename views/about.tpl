<div class="wrap">
    <section>

        {foreach from=$about_list item=x}
            <article>
                <h1> {$x.title} </h1>
                <content> {$x.content} </content>
            </article>
        {/foreach}
    </section>
</div>

