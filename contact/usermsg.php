
<?php
//Initializing the session
session_start();

//If user is already logged in redirect him to the message page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages | UniBEN</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <style>
        #site-logo {
            width: 140px;
            height: 100px;
        }

        .site-logo-image {
            width: 100%;
            height: 100%;
        }
        

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
                <a href="../index.html" target="blank" title="Uniben Home Page"><img src="assets/img/logo2.png" alt="Uniben Logo" class="site-logo-image" /></a>
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
      <li><a href="messagedb.php" target="blank" style="color: #fff;"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
      <li><a href="logout.php" style="color: #fff;"><span class="glyphicon glyphicon-log-in"></span> Sign out</a></li>
    </ul>
  </div>
</nav>
  </div>
</nav>
        </header>
        
        
        <div class="container">
        <div class="row">
            <div class="col-sm-offset-1 col-12 contactForm">
                <h1>Message Database</h1>
            <?php
            //connect to our database.
            $link = @mysqli_connect("localhost:3306", "root", "Pa55w0rd@1", "admin_uniben_contact");

            //checking connection
            if(mysqli_connect_errno() > 0){
            die("Error: unable to connect: ". mysqli_connect_errno());
            
            }else{
                //setup message rietrival
                $sql = "SELECT * FROM contact_us ORDER BY id DESC";
                if($result = mysqli_query($link, $sql)){
                //print_r($result);
                if(mysqli_num_rows($result)>0){
                    $count = 0;
                    // creating table for db
                    echo "<table class='table table-stripped table-hover table-responsive table-bordered table-condenced'>
                    <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Comments</th>
                    <th>Action</th>
                    </tr>";

                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                   echo "<tr>";
                   echo "<td>" . $row["id"] . "</td>";
                   echo "<td>" . $row["name"] . "</td>";
                   echo "<td><a href='mailto:" . $row["email"] . "'>" . $row["email"] . "</a></td>";
                   echo "<td>" . $row["message"] . "</td>";
                   echo "<td>" . $row["date"] . "</td>";
                   echo "<td>" . $row["comments"] . "</td>";
                   echo "<td> <a href='treat.php?button=" . $row["id"] . "'><button type='button' class='btn btn-success'>Message replied</button></a> </td>";
                   echo "<tr>";
                    // $count++;
                   // echo "<br />";
                   // echo $count;
                   // echo "<br />";
                   // echo $row;
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
        <footer>
        <div class="sub-footer">
            <div class="sub-footer-left">Copyright &copy; 2020, University of Benin</div>
            <div class="sub-footer-right">Designed by University of Benin, Web Unit, ICTU</div>
        </div>
            
        </footer>
        
    </div>
    
</body>
</html>