<?php

//connecting to our database.
$link = @mysqli_connect("localhost:3306", "root", "Pa55w0rd@1", "admin_uniben_contact");

//checking connection
if(mysqli_connect_errno() > 0){
die("Error: unable to connect: ". mysqli_connect_errno());
}else{
    echo "<p>Connection to database is successful</p>";

        if(isset($_GET['button'])){
        //$replied = "Replied.";
        $id = $_GET['button'];
        //$sql = "INSERT INTO contact_us `comments` VALUE ('Replied') WHERE id = $id";//(comment) VALUES ('$Treated')";
        $sql = "UPDATE contact_us SET comments = 'Replied' WHERE id = $id";
        if(mysqli_query($link, $sql)) {
            mysqli_close($link);
            header('Location: usermsg.php');
            exit;
            }else{
                echo "<p>Unable to add comment</p>";
            }
            }
        }
?>