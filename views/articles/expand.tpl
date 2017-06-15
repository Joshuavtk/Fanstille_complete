<div class="wrap">
    <div class="article-wrap">
        <a href="{$filePath}articles">Go back</a>
        {foreach from=$articles_list item=article}
            <article>
                <h1>{$article.title}</h1>
                <h3>{$article.date_created|date_format:"%e %B %Y"}</h3>
                <div class="imageDiv">
                    <img src="{$filePath}{$article.image}" class="articleImage" alt="Article Image">
                </div>
                <div> {$article.content} </div>
            </article>
            <div id="comments">
                <h2>Thoughts on "{$article.title}"</h2>
                {foreach from=$comments_list item=comment}
                    <div class="comment">
                        <div class="container">
                            <h3>{$comment.username} | {$comment.date_posted|date_format:"%e %B %Y %H:%M"}</h3>
                            <p>{$comment.content}</p>
                        </div>
                    </div>
                {/foreach}
                <form method="post" action="" id="comment-form">
                    <label for="comment">Your comment</label><br>
                    <textarea id="comment" name="article_comment" required></textarea><br>
                    <input type="hidden" name="article" value="{$article.post}">
                    <input type="submit" value="Post comment" name="comment_submit">
                </form>
            </div>
        {/foreach}
    </div>
</div>