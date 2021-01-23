<?php
session_start();
require('../connection.php');
//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['admin_id'])){
 header("location:access-denied.php");
}
$adharnumber = $_POST['adharnumber'];
$dob = $_POST['dob'];
$district = $_POST['district'];
$email = $_POST['email'];
$state = $_POST['state'];
$fname = $_POST['fname'];
$name = $_POST['name'];
$sql = mysqli_query($con, "INSERT INTO `adhardatabase`(`adharnumber`, `dob`, `email`, `name`, `district`, `state`, `fatherName`) VALUES ('$adharnumber' , '$dob', '$email','$state','$name','$district','$fname')");
?>