<?php
if (isset($_POST["author"])) {
    echo "author: " . $_POST["author"] . "<br/>";
}
if (isset($_POST["hideAuthor"])) {
    echo "hideAuthor: " . $_POST["hideAuthor"] . "<br/>";
} else {
    echo "hideAuthor: off<br/>";
}
if (isset($_POST["text"])) {
    echo "text: " . $_POST["text"] . "<br/>";
}
echo "createdAt: " . date("m-d-y h:i:sa") . "<br/>";
?>