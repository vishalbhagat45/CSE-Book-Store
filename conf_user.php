<?php
session_start();
require_once "./functions/database_functions.php";
$conn = db_connect();

$email = $_POST["email"];
$password = $_POST["password"];

if(!empty($email) && !empty($password) && !is_numeric($email))
{
    $query = "select * from users where email = '$email' limit 1";
    $result = mysqli_query($conn, $query);
    
    if($result)
    {
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['password'] == $password)
            {
                header("location: home.php");
                die;
            }
        }
        // echo "<script type='text/javascript'> alert('Login failed: Invalid credentials')</script>";
        header("location: index.php");
    }
    else{
        // echo "<script type='text/javascript'> alert('Login failed: Invalid credentials')</script>";
        header("location: index.php");
    }
}
?>