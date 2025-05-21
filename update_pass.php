<?php
    session_start();
    require_once "./functions/database_functions.php";
    $conn = db_connect();
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $sql = "UPDATE users SET password='$password', cpassword='$cpassword' WHERE id=5";

    if ($conn->query($sql) === TRUE) {
        header("location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>