<?php
if (count(get_included_files()) == 1)
    exit("Direct access not permitted.");
?>
<main style="text-align: center;">
    <br />
    Welcome to Pensive!<br />
    A place to journal<br />
    A place to share<br />
    A place to learn<br />
    <a href="./index.php?content=register">Create an account</a><br />
    <a href="./index.php?content=logIn">I already have an account...</a>
</main>