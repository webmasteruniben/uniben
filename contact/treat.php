<?php
//Initializing the session
session_start();

if (!isset($_SESSION['userlogin'])) {
    
    //redirect to login page
header("location: login.php");
   
}
else {
    $now = time(); // Checking the time now when home page starts.

    if ($now > $_SESSION['expire1']) {
        session_destroy();
       header("location: login.php");
       exit;
    }}
$username = $_SESSION["userlogin"];
?>

<?php

if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	$page_no = $_GET['page_no'];
	} else {
		$page_no = 1;
        }

//connecting to our database.
$link = @mysqli_connect("localhost:3306", "root", "Pa55w0rd@1", "admin_uniben_contact");

//$link = @mysqli_connect("localhost", "root", "", "contact");

//checking connection
if(mysqli_connect_errno() > 0){
die("Error: unable to connect: ". mysqli_connect_errno());
}else{
    //echo "<p>Connection to database is successful</p>";

        if(isset($_GET['button'])){
        //$replied = "Replied.";
        $reply_date = date('Y/m/d H:i:s');
        $id = $_GET['button'];
        //$sql = "INSERT INTO contact_us `comments` VALUE ('Replied') WHERE id = $id";//(comment) VALUES ('$Treated')";
        $sql = "UPDATE contact_us SET comments = 'Replied by $username on: $reply_date' WHERE id = $id";
        if(mysqli_query($link, $sql)) {
            mysqli_close($link);
            header('Location: usermsg.php?page_no=' . $page_no);
            exit;
            }else{
                echo "<p>Unable to add comment</p>";
            }
            }
        }
?>