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

<body>
    <?php
    include "./components/NavMenu.php";
    if (isset($_GET["content"])) {
        switch (true) { //this switch statement is a litte hack I found at https://stackoverflow.com/questions/4175910/how-to-use-a-php-switch-statement-to-check-if-a-string-contains-a-word-but-can
            default:
                include "./templates/splash.php";
                break;
            case stripos($_GET["content"], "feed") !== false:
                include "./templates/feed.php";
                break;
            case stripos($_GET["content"], "journal") !== false:
                include "./templates/journal.php";
                break;
            case stripos($_GET["content"], "moodCalendar") !== false:
                include "./templates/moodCalendar.php";
                break;
            case stripos($_GET["content"], "profile") !== false:
                include "./templates/profile.php";
                break;
            case stripos($_GET["content"], "resources") !== false:
                include "./templates/resources.php";
                break;
            case stripos($_GET["content"], "splash") !== false:
                include "./templates/splash.php";
                break;
            case stripos($_GET["content"], "register") !== false:
                include "./templates/register.php";
                break;
            case stripos($_GET["content"], "logIn") !== false:
                include "./templates/logIn.php";
                break;
        }
    } else {
        include "./templates/splash.php";
    }
    ?>
</body>

</html>