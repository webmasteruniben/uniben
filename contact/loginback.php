<?php
//Initializing the session
session_start();

if (isset($_SESSION['userlogin'])) {
    $now = time(); // Checking the time now when home page starts.

    if ($now > $_SESSION['expire1']) {
        session_destroy();
       header("location: login.php");
    }
    else {
    
    //redirect to login page
    header("location: usermsg.php");
   
    }
    exit;
}


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

//initializng variables
$username = "";
$password = "";
$username_err = "";
$password_err = "";

//processing data from login form
if($_SERVER["REQUEST_METHOD"] == "POST"){
   
    //Checking if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter your username.";
    }else{
        $username = trim($_POST["username"]);
    }

    //checking if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    }else{
        $password = trim($_POST["password"]);
    }

    //Validating inputs
    if(empty($username_err) && empty($password_err)){
        
        //Select statement
        $sql = "SELECT id, username, pass FROM userlogin WHERE username = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            //bind the variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

           //set parameters
           $param_username = $username;
            //executing the statement
            if(mysqli_stmt_execute($stmt)){
                //store result
                mysqli_stmt_store_result($stmt);

                //checking if username exits, if yes verified password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    
                    //Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            //if password is correct, start new session

                            $_SESSION['userlogin'] = $username;
                            $_SESSION["id"] = $id;
            $_SESSION['loggedin'] = time(); // Taking now logged in time.
            // Ending a session in 4 hours from the starting time.
            $_SESSION['expire1'] = $_SESSION['loggedin'] + (240 * 60);
            header('Location: usermsg.php');
                            
                        }else{
                            $password_err = "The password you entered is not valid.";

                        }
                    }
                }else{
                    $username_err = "No account found with that username.";
                }
            }else{
                echo "Error! Please try again later.";
            }
            //close statement
            mysqli_stmt_close($stmt);
        }
    }
    //close connection
    mysqli_close($link);
}
?>