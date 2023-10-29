<?php
if (isset($_POST["username"])) {
    echo "uesrname: " . $_POST["username"] . "<br/>";
}
if (isset($_POST["password"])) {
    echo "password: " . $_POST["password"] . "<br/>";
}
if (isset($_POST["email"])) {
    echo "email: " . $_POST["email"] . "<br/>";
}
if (isset($_POST["administrator"])) {
    echo "administrator: " . $_POST["administrator"] . "<br/>";
} else {
    echo "administratorr: off<br/>";
}
?>