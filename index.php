<?php
session_start();
if (isset($_SESSION["username"])) {
    echo '<script>';
    echo 'console.log(' . json_encode($_SESSION) . ');';
    echo '</script>';
} else {
    echo "<script>console.log('not logged in');</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pensive</title>
</head>
<style>
    body {
        font-family: helvetica;
    }
</style>

<body style="width: calc(100% - 8px);">
    <div style="max-width: 960px; margin:auto;">
        <?php
        include "./components/NavMenu.php"; ?>
        <?php
        if (isset($_GET["content"])) {
            switch (true) { //this switch statement is a litte hack I found at https://stackoverflow.com/questions/4175910/how-to-use-a-php-switch-statement-to-check-if-a-string-contains-a-word-but-can
                default:
                    if (isset($_SESSION["username"])) {
                        header("Location: /~ics325fa2313/group_project/index.php?content=profile");
                    } else {
                        include "./templates/splash.php";
                    }
                    break;
                case stripos($_GET["content"], "feed") !== false:
                    if (isset($_SESSION["username"])) {
                        include "./templates/feed.php";
                    } else {
                        header("Location: /~ics325fa2313/group_project/index.php?content=logIn&message=You are not logged in!");
                    }
                    break;
                case stripos($_GET["content"], "journal") !== false:
                    if (isset($_SESSION["username"])) {
                        include "./templates/journal.php";
                    } else {
                        header("Location: /~ics325fa2313/group_project/index.php?content=logIn&message=You are not logged in!");
                    }
                    break;
                case stripos($_GET["content"], "moodCalendar") !== false:
                    if (isset($_SESSION["username"])) {
                        include "./templates/moodCalendar.php";
                    } else {
                        header("Location: /~ics325fa2313/group_project/index.php?content=logIn&message=You are not logged in!");
                    }
                    break;
                case stripos($_GET["content"], "profile") !== false:
                    if (isset($_SESSION["username"])) {
                        include "./templates/profile.php";
                    } else {
                        header("Location: /~ics325fa2313/group_project/index.php?content=logIn&message=You are not logged in!");
                    }
                    break;
                case stripos($_GET["content"], "resources") !== false:
                    if (isset($_SESSION["username"])) {
                        include "./templates/resources.php";
                    } else {
                        header("Location: /~ics325fa2313/group_project/index.php?content=logIn&message=You are not logged in!");
                    }
                    break;
                case stripos($_GET["content"], "splash") !== false:
                    if (isset($_SESSION["username"])) {
                        header("Location: /~ics325fa2313/group_project/index.php?content=profile");
                    } else {
                        include "./templates/splash.php";
                    }
                    break;
                case stripos($_GET["content"], "register") !== false:
                    if (isset($_SESSION["username"])) {
                        header("Location: /~ics325fa2313/group_project/index.php?content=profile");
                    } else {
                        include "./templates/register.php";
                    }
                    break;
                case stripos($_GET["content"], "logIn") !== false:
                    if (isset($_SESSION["username"])) {
                        header("Location: /~ics325fa2313/group_project/index.php?content=profile");
                    } else {
                        include "./templates/logIn.php";
                    }
                    break;
            }
        } else {
            if (isset($_SESSION["username"])) {
                header("Location: /~ics325fa2313/group_project/index.php?content=profile");
            } else {
                include "./templates/splash.php";
            }
        }
        ?>
    </div>
</body>

</html>