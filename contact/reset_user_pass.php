<?php
//Initializing the session
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



//processing data when form is submited
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
        if(strlen(trim($_POST["password"])) < 6){
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
    }
    //Validating inputs
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
                
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
                            //if password is the old password.

                            $password_err = "You cannot use the old password.";

                            
                        }else{
                            //update password in database
                            $password =password_hash($password, PASSWORD_DEFAULT);
                            //$sql = "SELECT id FROM userlogin WHERE username = $username";
                            mysqli_query($link, "UPDATE userlogin SET pass='$password' WHERE username='$username'");
                           //$sql = "INSERT INTO userlogin (pass) VALUES (?) WHERE username = $username";
                            if($stmt = mysqli_prepare($link, $sql)){
                                //bind variables to the prepared statement as parameters.
                                mysqli_stmt_bind_param($stmt, "s", $param_password);
                                
                                if(mysqli_stmt_execute($stmt)){
                                    //$registration_succ = "Registration successful.";
                                    //redirecting to login page
                                    header("location: users.php");
                                }
                            }
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | UniBEN</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/2ff0eac90c.js"></script>



    <style>
        #site-logo {
            width: 140px;
            height: 100px;
        }

        .site-logo-image {
            width: 100%;
            height: 100%;
        }
        

        

        footer{
            
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }

        .sub-footer {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-evenly;
            background-color: rgb(77, 7, 65);
            /*margin-top: -26px;*/
            padding-top: 6px;
            padding-bottom: 8px;
            color: #F3F3F3;
            width: 100%;
        }

        .sub-footer-left {
            padding-left: 15px; text-align: left; width:48%;
        }

        .sub-footer-right {
            text-align: right; width:48%;
        }
    </style>

</head>
<body>
    <div class="page">
        <header>
            <div id="site-logo">
                <a href="../index.html" target="_blank" title="Uniben Home Page"><img src="assets/img/logo2.png" alt="Uniben Logo" class="site-logo-image" /></a>
            </div>
            

            <nav class="navbar navbar-default" style="background-color:#9C0C84;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../index.html" target="blank" style="color: #fff; font-size: 40px;">Uniben</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active">  </li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <li><a href="administrators.php" style="color: #fff;"><i class="fa fa-undo" aria-hidden="true"></i>Back to users</a></li>
      <li><a href="adminlogout.php" style="color: #fff;"><span class="glyphicon glyphicon-log-in"></span> Sign out</a></li>
    </ul>
  </div>
</nav>
  </div>
</nav>
        </header>
        <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; 
            display: block; 
            margin-left: auto;
            margin-right: auto;
        }
        
    </style>
        <div class="wrapper">
        <h2>Reset User Password</h2>
        <!--<p>Please fill in your credentials to login.</p>-->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                
            </div>
            
        </form>
        </div>

        <footer>
        <div class="sub-footer">
            <div class="sub-footer-left">Copyright &copy; 2020, University of Benin</div>
            <div class="sub-footer-right">Designed by University of Benin, Web Unit, ICTU</div>
        </div>
            
        </footer>
        
    </div>
    
</body>
</html>