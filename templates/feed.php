<?php
if (count(get_included_files()) == 1)
    exit("Direct access not permitted.");
?>
<main>
    <br />
    <form action="./logic/submitPost.php" method="POST" style="text-align:center;">
        Create a Post
        <hr />
        <textarea name="text" class="post-textarea"
            placeholder="Make a post, share your thoughts or feelings!"></textarea>
        <input name="hideAuthor" type="checkbox" class="hide-author-input" />Anonymous Post<br /><br />
        <button type="submit" class="post-submit">Post</button>
    </form>
</main>
<style>
    .post-textarea {
        width: calc(100% - 6px);
        resize: none;
        height: 96px;
        color: black;
    }

    .hide-author-input {}

    .post-submit {
        width: 100%;
    }
</style>