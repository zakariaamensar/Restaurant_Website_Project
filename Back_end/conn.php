<?php
try{
    $con = mysqli_connect("localhost", "root", "", "table_reservation");
}catch(Exception $e){
    "Something went Wrong!";
}
?>