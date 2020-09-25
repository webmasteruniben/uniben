<?php
session_start();


if(isset($_SESSION['admin_loggedin'])){
unset($_SESSION['admin_loggedin']);  //Destroy This Session

//redirect to login page
header("location: usermsg.php");
exit;}
?>