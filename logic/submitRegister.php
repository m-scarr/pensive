<?php
require("../connection.php");

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
    echo "administrator: off<br/>";
}

function registerUser($username, $password, $email)
{

    // Create a database connection
    $conn = new mysqli(ConnectionData::$hostname, ConnectionData::$username, ConnectionData::$password, ConnectionData::$database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Hash the user's password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user information into the database
    $sql = "INSERT INTO user (username, password, email) VALUES ('$username', '$hashed_password', '$email')";
    $stmt = $conn->prepare($sql);
    //$stmt->bind_param("sss", $username, $hashed_password, $email);

    if ($stmt->execute()) {
        echo "User registered successfully.";
        $conn->close();
        header("Location: /~ics325fa2313/group_project/index.php?content=logIn");

    } else {
        echo "Error: " . $conn->error;
        $conn->close();
        header("Location: /~ics325fa2313/group_project/index.php?content=register&message=Something went wrong!");
    }
}

registerUser($_POST["username"], $_POST["password"], $_POST["email"]);
?>