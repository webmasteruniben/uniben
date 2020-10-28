<?php
//Initializing the session
session_start();

if (!isset($_SESSION['admin_loggedin'])) {
    
    //redirect to login page
header("location: login.php");
   
}
else {
    $now = time(); // Checking the time now when home page starts.

    if ($now > $_SESSION['expire']) {
        session_destroy();
       header("location: login.php");
       exit;
    }}

?>


<?php
if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	$page_no = $_GET['page_no'];
	} else {
		$page_no = 1;
        }

$id = $_GET['button'];
//connecting to our database.
$link = @mysqli_connect("localhost:3306", "root", "Pa55w0rd@1", "admin_uniben_contact");

//$link = @mysqli_connect("localhost", "root", "", "contact");

//checking connection
if(mysqli_connect_errno() > 0){
die("Error: unable to connect: ". mysqli_connect_errno());
}else{
    //echo "<p>Connection to database is successful</p>";

        $sql = "DELETE FROM contact_us WHERE id = $id";

        if(mysqli_query($link, $sql)) {
            mysqli_close($link);
            header('Location: messagedb.php?page_no=' . $page_no);
            exit;
            }else{
                echo "<p>Unable to delete record</p>";
            }
            }
    
?>