<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHPMailer</title>
</head>
<body>
    <h2>Using PHPMailer</h2>
    <div>
    <?php
//Include required phpmailer files
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Create instance of phpmailer
$mail = new PHPMailer();
//Set mailer to use smtp
$mail -> isSMTP();
//Define smtp host
$mail -> Host = "smtp.gmail.com";
//Enable smtp authentication
$mail -> SMTPAuth = "true";
//Set type of encription (ssl/tls)
$mail -> SMTPSecure = "tls";
//Set port to connect smtp
$mail -> Port = "587";
//Set gmail username
$mail -> Username = "kingshome40@gmail.com";
//Set gmail password
$mail -> Password = "Mylove5393";
//Set email subject
$mail -> Subject = "Sending email using PHPMailer";
//Set sender email
$mail -> setFrom("noreply@visions.com");
//Set email body
$mail -> Body = "This my first try!";
//Add recipient
$mail -> addAddress("ogbemudia.edoseghe@uniben.edu");
//Send email
if($mail -> Send()){
    echo "Email sent!";
}else{
    echo "Error!<br />Email not sent!";
}
//Close smtp connection
$mail -> smtpClose();
?>
    </div>
</body>
</html>