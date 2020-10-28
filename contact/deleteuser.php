<?php
$id = $_GET['button'];
//connecting to our database.
//$link = @mysqli_connect("localhost", "root", "", "contact");
define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Pa55w0rd@1');
define('DB_NAME', 'admin_uniben_contact');
$link = @mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//checking connection
if(mysqli_connect_errno() > 0){
die("Error: unable to connect: ". mysqli_connect_errno());
}else{
    //echo "<p>Connection to database is successful</p>";

        $sql = "DELETE FROM userlogin WHERE id = $id";

        if(mysqli_query($link, $sql)) {
            mysqli_close($link);
            header('Location: users.php');
            exit;
            }else{
                echo "<p>Unable to delete record</p>";
            }
            }
    
?>