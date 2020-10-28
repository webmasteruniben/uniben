<?php
session_start();

if (!isset($_SESSION['admin_loggedin'])) {
    
    //redirect to login page
header("location: admin.php");
   
}
else {
    $now = time(); // Checking the time now when home page starts.

    if ($now > $_SESSION['expire']) {
        session_destroy();
       header("location: admin.php");
       exit;
    }}
?>

<?php

//connect to our database.
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
}
//defining and initializing variables
$username = "";
$password = "";
$confirm_password = "";
$username_err = "";
$password_err = "";
$confirm_password_err = "";
$registration_succ = "";

//processing data when form is submited
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter your username.";
    }else{
        //prepare a select statement
        
        $sql = "SELECT id FROM adminlogin WHERE username = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            //bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            //Set parameters
            $param_username = trim($_POST["username"]);

            //executing the prepared statement
            if(mysqli_stmt_execute($stmt)){
                //store the result                
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                }else{
                    $username = trim($_POST["username"]);
                }
            }else{
                echo "Error! Please try agin later. ";
            }
                //close statement
                mysqli_stmt_close($stmt);
             }
                        $sql1 = "SELECT id FROM userlogin WHERE username = ?";
        if($stmt1 = mysqli_prepare($link, $sql1)){
            //bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt1, "s", $param_username1);

            //Set parameters
            $param_username1 = trim($_POST["username"]);

            //executing the prepared statement
            if(mysqli_stmt_execute($stmt1)){
                //store the result                
                mysqli_stmt_store_result($stmt1);
                if(mysqli_stmt_num_rows($stmt1) == 1){
                    $username_err = "This username is already taken.";
                }else{
                    $username = trim($_POST["username"]);
                }
            }else{
                echo "Error! Please try agin later. ";
            }
                //close statement
                mysqli_stmt_close($stmt1);
            
        
        }

        //Validate password
        if(empty(trim($_POST["password"]))){
            $password_err = "Please enter your password";
            }elseif(strlen(trim($_POST["password"])) < 6){
                $password_err = "Password must be atleast 6 characters.";
            }else{
                $password = trim($_POST["password"]);
            }
            //validate confirm_password.
            if(empty(trim($_POST["confirm_password"]))){
            $confirm_password_err = "Please confirm your password.";
            }else{
                $confirm_password = trim($_POST["confirm_password"]);
                if(empty($password_err) && ($password != $confirm_password)){
                    $confirm_password_err = "Password did not match.";
                }
            }
            // checking input errors before inserting in database
            if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
                //insert in database
                $sql = "INSERT INTO adminlogin (username, pass) VALUES (?, ?)";
                $sql1 = "INSERT INTO userlogin (username, pass) VALUES (?, ?)";
                if($stmt = mysqli_prepare($link, $sql)){
                    //bind variables to the prepared statement as parameters.
                    mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

                    //set parameters
                    $param_username = $username;
                    $param_password = password_hash($password, PASSWORD_DEFAULT); //this creates a hash password.
                    
                    //executing the above statements.
                    if(mysqli_stmt_execute($stmt)){
                        //$registration_succ = "Registration successful.";
                        //redirecting to login page
                        $sql1 = "INSERT INTO userlogin (username, pass) VALUES (?, ?)";
                if($stmt1 = mysqli_prepare($link, $sql1)){
                    //bind variables to the prepared statement as parameters.
                    mysqli_stmt_bind_param($stmt1, "ss", $param_username1, $param_password1);

                    //set parameters
                    $param_username1 = $username;
                    $param_password1 = password_hash($password, PASSWORD_DEFAULT); //this creates a hash password.
                    
                    //executing the above statements.
                    if(mysqli_stmt_execute($stmt1)){
                        //$registration_succ = "Registration successful.";
                        //redirecting to login page
                        header("location: users.php");
                       // header("location: admin.php");
                }}
                    }else{
                        echo "Something went wrong. Please try agian later.";
                    }
                    //close statement
                    mysqli_stmt_close($stmt);
                    mysqli_stmt_close($stmt1);
                    }
                    //close connection
                    mysqli_close($link);
            }
    }
}
?>
