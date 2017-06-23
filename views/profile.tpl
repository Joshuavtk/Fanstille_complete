<div class="wrap">
    <div id="comments">
        <h2>{$username}'s comments</h2>
        {foreach from=$comments_list item=comment}
            <div class="comment">
                <div class="container">
                    <div class="comment-title">
                        <h3>{$comment.username}</h3>
                        <h5> {$comment.date_posted|date_format:"%e %B %Y %H:%M"}</h5>
                    </div>
                    <p>{$comment.content}</p>
                </div>
            </div>
        {/foreach}
    </div>
</div>