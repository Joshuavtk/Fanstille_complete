<div class="wrap">
    <form>
        <label for="search-input">Search</label>
        <input type="text" id="search-input" onkeyup="searchFunction(this.value)">
    </form>
    <p>Suggestions: <span id="results"></span></p>
</div>
<script src="{$filePath}scripts/searchHandler.js"></script>