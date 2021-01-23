<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Access Denied</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/UserLogin.css" type="text/css">
</head>
<body>
<div class="container-fluid con">

<div class="jumbotron">

<h1 class="display-3">Online Voting System</h1>

</div>

</div>    
<div id="page">
<div id="header">
<h1>Invalid Credentials Provided </h1>
<p align="center">&nbsp;</p>
</div>
<div id="container">
<?php
ini_set ("display_errors", "1");
error_reporting(E_ALL);

ob_start();
session_start();
require('connection.php');


// Defining your login details into variables
$adharnumber=$_POST['adharnumber'];
$dob=$_POST['dateofbirth'];
$email=$_POST['emailid'];

$encrypted_mypassword=md5($mypassword); //MD5 Hash for security
// MySQL injection protections
//$myusername = stripslashes($myusername);
//echo $mypassword = stripslashes($mypassword);
//$myusername = mysqli_real_escape_string($myusername);
//$mypassword = mysqli_real_escape_string($mypassword);

$to = $email ;
$subject = "OTP for online voting system ";

$message = "<b>test for otp sending </b>";
$message .= "<h1>lolololololol</h1>";

$header = "From:abc@somedomain.com \r\n";
$header .= "Cc:afgh@somedomain.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail ($to,$subject,$message,$header);

$sql=mysqli_query($con, "SELECT * FROM adhardatabase WHERE adharnumber='$adharnumber' and email='$email' and dob='$dob' ");

// Checking table row
$count=mysqli_num_rows($sql);
// If username and password is a match, the count will be 1

if($count==1){
$user = mysqli_fetch_assoc($sql);
$_SESSION['id'] = $user['id'];
$_SESSION['Name'] = $user['name'];
$_SESSION['fathername']= $user['fatherName'];
$_SESSION['district']=$user['district'];
$_SESSION['state']=$user['state'];
$_SESSION['voted']=$user['voted'];
header("location:student.php");
}
//If the username or password is wrong, you will receive this message below.
else {
echo "<b><center>Wrong credential submitted please try again <br><br>Return to <a href=\"index.php\">login</b></center></a>";
}

ob_end_flush();

?> 
</div>

</div>
</body>
</html>