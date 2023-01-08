<?php
session_start();
include "login_dash.php";
$con = mysqli_connect("localhost", "root", "", "table_reservation");
//$con = mysqli_connect("localhost", "id20052388_root", "_0n~q+U9QXHfnk9)", "id20052388_restaurant");
if (isset($_POST['submit'])) {
    if (isset($_POST["username"]) && isset($_POST["pass"])) {
        $user = $_REQUEST["username"];
        $pass = $_REQUEST["pass"];
        $sql = "SELECT * FROM user_admin where username = '$user' limit 1";
        $result = mysqli_query($con, $sql);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $data = mysqli_fetch_assoc($result);
                if ($data["password"] == $pass) {
                    $_SESSION['username'] = $data['username'];
                    header("location: dashboard.php");
                    exit();
                }
                header("location: login_php.php?error=Incorect Username or  Password");

            }
            header("location: login_php.php?error=Incorect Username or Password");

        }
    }
}






?>