<?php
$id = $_GET['button'];
//connecting to our database.
$link = @mysqli_connect("localhost:3306", "root", "Pa55w0rd@1", "admin_uniben_contact");

//checking connection
if(mysqli_connect_errno() > 0){
die("Error: unable to connect: ". mysqli_connect_errno());
}else{
    echo "<p>Connection to database is successful</p>";

        $sql = "DELETE FROM contact_us WHERE id = $id";

        if(mysqli_query($link, $sql)) {
            mysqli_close($link);
            header('Location: messagedb.php');
            exit;
            }else{
                echo "<p>Unable to delete record</p>";
            }
            }
    
?>