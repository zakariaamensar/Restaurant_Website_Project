<?php
include "conn.php";
include "signup.php";
session_start();
if (isset($_POST['submit'])) {
    if (isset($_POST['username'], $_POST['phone'], $_POST['email'], $_POST['password'])) {
        $user = $_POST['username'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];


        $password = $_POST['password'];
        $pass_hashed = password_hash($password, PASSWORD_DEFAULT);

        
        $sql = "INSERT INTO users(name, phone, email, password) VALUES ('$user', '$phone', '$email', '$pass_hashed')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $_SESSION["state"] = "Sing up successfully";
            header("location: majestic_signUp.php");
        } else {
            $_SESSION['state'] = "Username Already used!";
        }
    }
}




?>