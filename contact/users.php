
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
/*.navbar{
            width: 100%;
            height: 40px;
            background-color: #9C0C84;
            margin-top: 15px;
            margin-bottom: 15px;
            padding-top: 15px;            
        }
        .btn{
            float: right;
            margin-right: 20px;
        }
        .btn a{
            text-decoration: none;
        }*/

        

        h1{
            color:purple;
        }
        
        
        .contactForm{
            /*border: 1px solid #9C0C84;*/
            margin-top: 50px;
            border-radius: 15px;
            margin-bottom: 60px;
            /*width: 60%;
            padding: 20px*/
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
                <a href="../index.html" title="Uniben Home Page"><img src="assets/img/logo2.png" alt="Uniben Logo" class="site-logo-image" /></a>
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
      <li><a href="usermsg.php" style="color: #fff;"><i class="fa fa-undo" aria-hidden="true"></i> Back to messages</a></li>
      <li><a href="messagedb.php" style="color: #fff;"><i class="fa fa-undo" aria-hidden="true"></i> Delete messages</a></li>
      <li><a href="register_users.php" style="color: #fff;"><i class="fa fa-user-plus" aria-hidden="true"></i> Register users</a></li>
      <li><a href="register_admin.php" style="color: #fff;"><i class="fa fa-user-plus" aria-hidden="true"></i> Register admin</a></li>
      <li><a href="adminlogout.php" style="color: #fff;"><span class="glyphicon glyphicon-log-out"></span> Sign out</a></li>
    </ul>
  </div>
</nav>
  </div>
</nav>
        </header>

        
        
        <div class="container">
        <div class="row">
            <div class="col-sm-offset-1 col-12 contactForm">
            
                
                

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
   // echo "<p>Connection to database is successful</p>";
}
?>
<h1>User Login</h1>
<div style="overflow-x: auto;">
<?php
    //setup message rietrival
    $sql = "SELECT * FROM userlogin ORDER BY id DESC";
    if($result = mysqli_query($link, $sql)){
    //print_r($result);
    if(mysqli_num_rows($result)>0){
        $count = 0;
        // creating table for db
        echo "<table class='table table-stripped table-hover table-responsive table-bordered table-condenced'>
        <tr>
        <th>ID</th>
        <th>Userame</th>
        <th>Date</th>
        <th>Action</th>
        </tr>";

        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
       echo "<tr>";
       echo "<td>" . $row["id"] . "</td>";
       echo "<td>" . $row["username"] . "</td>";
       echo "<td>" . $row["date"] . "</td>";
       echo "<td> <a href='deleteuser.php?button=" . $row["id"] . "'><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></button></a> 
      <a href= 'reset_user_pass.php?button=" . $row["id"] . "'><button type='button' name='button1' class='btn btn-info'><span class='glyphicon glyphicon-repeat'></span>Reset Password</button></a> </td>";
       echo "<tr>";
        
        }
        
        echo "</table>";
        //close result set
        mysqli_free_result($result);
    }else{
        echo "<p>Message database is empty.</p>";
    }
    
   
        ?>

    

<h1>Admin Login</h1>
<div style="overflow-x: auto;">
<?php
    //setup message rietrival
    $sql = "SELECT * FROM adminlogin ORDER BY id DESC";
    if($result = mysqli_query($link, $sql)){
    //print_r($result);
    if(mysqli_num_rows($result)>0){
        $count = 0;
        // creating table for db
        echo "<table class='table table-stripped table-hover table-responsive table-bordered table-condenced'>
        <tr>
        <th>ID</th>
        <th>Userame</th>
        <th>Date</th>
        <th>Action</th>
        </tr>";

        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
       echo "<tr>";
       echo "<td>" . $row["id"] . "</td>";
       echo "<td>" . $row["username"] . "</td>";
       echo "<td>" . $row["date"] . "</td>";
       echo "<td> <a href='deleteadmin.php?button=" . $row["id"] . "'><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></button></a> 
       <a href='reset_admin_pass.php?button2=" . $row["id"] . "'><button type='button' id='button2' class='btn btn-info'><span class='glyphicon glyphicon-repeat'></span>Reset Password</button></a> </td>";       echo "<tr>";
        
        }
        echo "</table>";
        //close result set
        mysqli_free_result($result);
    }else{
        echo "<p>Message database is empty.</p>";
    }
}else{
    echo "<p>Unable to get data from message database: $sql. ". mysqli_error($link) . "</p>";
}
    }


?>

            
        </div>
    </div>
    
    
        </div>
            
        </main>
        
        <script>
            document.getElementById(button1).addEventListener('click', function(){
                document.querySelector('.bg-modal').style.display = 'flex';
            });

            document.getElementById(close).addEventListener('click', function(){
                document.querySelector('.bg-modal').style.display = 'none';
            });
        </script>
        <footer>
        <div class="sub-footer">
            <div class="sub-footer-left">Copyright &copy; 2020, University of Benin</div>
            <div class="sub-footer-right">Designed by University of Benin, Web Unit, ICTU</div>
        </div>
            
        </footer>
        
    </div>
    
</body>
</html>