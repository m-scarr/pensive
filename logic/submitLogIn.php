<?php
require("../connection.php");
function logInUser($username, $password)
{
    // Create a database connection
    $conn = new mysqli(ConnectionData::$hostname, ConnectionData::$username, ConnectionData::$password, ConnectionData::$database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve the user's hashed password from the database
    $sql = "SELECT password FROM user WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    if (password_verify($password, $hashed_password)) {
        session_set_cookie_params(259200); //3 days
        session_start();
        $_SESSION["username"] = $username;
        $conn->close();
        header("Location: /~ics325fa2313/group_project/index.php?content=profile");
        exit;
    } else {
        $conn->close();
        header("Location: /~ics325fa2313/group_project/index.php?content=logIn&message=Incorrect Username or Password.");
        exit;
    }
}

logInUser($_POST["username"], $_POST["password"]);
?>