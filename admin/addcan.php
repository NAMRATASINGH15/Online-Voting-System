<?php
session_start();
require('../connection.php');
//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['admin_id'])){
 header("location:access-denied.php");
}
$partyname = $_POST['partyname'];
$district = $_POST['district'];
$state = $_POST['state'];
$name = $_POST['cname'];
echo $partyname;
echo '<br>';
echo $district;
echo '<br>';
echo $name;
echo '<br>';
echo $state;
$sql = mysqli_query($con, "INSERT INTO partystatedatabase ( partyname, district, statename, candidatename) VALUES ('$partyname','$district','$state','$name')");
?>