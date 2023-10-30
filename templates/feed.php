<?php
if (count(get_included_files()) == 1)
    exit("Direct access not permitted.");
?>
<main>
    <br />
    <form id="post-form" action="./logic/submitPost.php" method="POST" style="text-align: center;">
        Create a Post
        <hr />
        <textarea id="post-text" name="text" class="post-textarea"
            placeholder="Make a post, share your thoughts or feelings!"></textarea>
        <input name="hideAuthor" type="checkbox" class="hide-author-input" />Anonymous Post<br /><br />
        <button type="button" id="post-submit-button" disabled>Post</button>
    </form>
</main>
<script>
    const postSubmitButton = document.getElementById("post-submit-button");
    const postTextArea = document.getElementById("post-text");

    postTextArea.oninput = (e) => {
        if (e.target.value.length > 0) {
            postSubmitButton.disabled = false;
        } else {
            postSubmitButton.disabled = true;
        }
    }
</script>
<style>
    .post-textarea {
        width: calc(100% - 6px);
        resize: none;
        height: 96px;
        color: black;
    }

    .hide-author-input {}

    #post-submit-button {
        width: 100%;
    }
</style>