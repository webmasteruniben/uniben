<?php
session_start();

if(isset($_SESSION['userlogin'])){
    unset($_SESSION['userlogin']);  //Destroy This Session
    
//redirect to login page
header("location: login.php");
exit;}
?>