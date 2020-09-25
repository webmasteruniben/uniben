<?php
session_start();

if(isset($_SESSION['loggedin'])){
    unset($_SESSION['loggedin']);  //Destroy This Session
    
//redirect to login page
header("location: login.php");
exit;}
?>