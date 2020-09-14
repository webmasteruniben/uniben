<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messagedb</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        /*.container{
        background-image: url("asset/images/gate2.png");
        background-repeat: no-repeat;
        height: 100%;
        width: 100%;
        }*/
        h1{
            color:purple;
        }
        
        
        .contactForm{
            border: 1px solid #9C0C84;
            margin-top: 50px;
            border-radius: 15px;
            margin: 40px auto auto auto;
            /*width: 60%;
            padding: 20px*/
        }
    </style>
</head>
<body>
   
    <div class="container">
        <div class="row">
            <div class="col-sm-offset-1 col-12 contactForm">
                <h1>Message Database</h1>
            <?php
            //connect to our database.
            $link = @mysqli_connect("localhost", "root", "", "contact");

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
                    echo "<table class='table table-stripped table-hover table-bordered table-condenced'>
                    <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Action</th>
                    </tr>";

                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                   echo "<tr>";
                   echo "<td>" . $row["id"] . "</td>";
                   echo "<td>" . $row["names"] . "</td>";
                   echo "<td>" . $row["email"] . "</td>";
                   echo "<td>" . $row["messages"] . "</td>";
                   echo "<td>" . $row["date"] . "</td>";
                   echo "<td> <a href='delete.php?button=" . $row["id"] . "'><button type='button' class='btn btn-danger'>Delete</button></a> </td>";
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
    
    <script>
       src =  "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>