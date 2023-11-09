<?php
session_start();
session_destroy();
header("Location: /~ics325fa2313/group_project/index.php?content=logIn");
?>