<?php
if (count(get_included_files()) == 1)
    exit("Direct access not permitted."); //this hack found at https://stackoverflow.com/questions/409496/prevent-direct-access-to-a-php-include-file
?>

<script>
    const onNavButtonClick = (content) => {
        window.location.href = "./index.php?content=" + content;
    }
</script>

<div>
    <div class="logo-header">
        Pensive
    </div>
    <?php
    if (isset($_GET["content"]) && $_GET["content"] !== "register" && $_GET["content"] !== "logIn" && $_GET["content"] !== "splash") {
        ?>
        <nav>
            <div onclick="onNavButtonClick('profile');">Profile</div>
            <div onclick="onNavButtonClick('feed');">Feed</div>
            <div onclick="onNavButtonClick('journal');">Journal</div>
            <div onclick="onNavButtonClick('moodCalendar');">Mood Calendar</div>
            <div onclick="onNavButtonClick('resources');">Resources</div>
        </nav>
        <?php
    } else {
        ?>
        <nav>
            <div onclick="onNavButtonClick('logIn');">Log In</div>
            <div onclick="onNavButtonClick('register');">Register</div>
        </nav>
        <?php
    }
    ?>
</div>

<style>
    nav {
        display: flex;
        flex-direction: row;
    }

    nav div {
        background-color: deepskyblue;
        color: white;
        width: 100%;
        margin: 0;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .logo-header {
        width: 100%;
        text-align: center;
        font-size: 24px;
    }
</style>