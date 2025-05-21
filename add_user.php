<?php
session_start();
require_once "./functions/database_functions.php";
$conn = db_connect();

$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];

$sql = "INSERT INTO users (name, email, mobile, password, cpassword) VALUES ('$name', '$email','$mobile','$password','$cpassword')";

if ($conn->query($sql) === TRUE) {
    // echo "Data inserted successfully!";
    echo "<script type='text/javascript'> alert('Successful')</script>";
    header("location: index.php");
    // $arr = array ('code'=>"1",'msg'=>"Congratulations, Your Account is Created!");
    // echo json_encode($arr);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>