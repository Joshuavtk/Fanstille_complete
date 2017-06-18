<h2>Create a new article</h2>
<form method="post" action="" enctype="multipart/form-data">
    <label for="article-title-input">Title</label><br>
    <input type="text" name="new_article_title" id="article-title-input" required><br>
    <label for="article-post-input">Title without spaces and capital letters</label><br>
    <input type="text" id="article-post-input" name="new_article_post" required><br>
    <label for="article-content-input">Content</label><br>
    <textarea id="article-content-input" name="new_article_content" required></textarea><br>
    <label for="article-image-input" id="article-image-label">Image<br><img src="{$filePath}images/main/image_upload.svg" id="image-upload-button"></label><br>
    <input type="file" id="article-image-input" name="image" hidden required>
    <input type="submit" value="Create article" name="new_article_submit">
</form>
</div>