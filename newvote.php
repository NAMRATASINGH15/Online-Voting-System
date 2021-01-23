<?php
require('connection.php');

session_start();

if(empty($_SESSION['id'])){
 header("location:access-denied.php");
}



?>

<html>

<head>
    <title>Voting Management System </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/PollingForm.css" type="text/css">
    <style>
        button {
            background-color: #7952b3;
            border: none;
            padding: 10px;
            margin-top: 30px;
            border-radius: 4px;
        }
        a {
            color: #fff;
            font-size: 25px;
        }
    </style>    
</head>

<body>
    <div class="container-fluid con">

        <div class="jumbotron">

            <h1 class="display-3">Online Voting System</h1>

        </div>
    </div>
    <center>

    <h1> Hi <?php echo $_SESSION['Name']; ?> thak you for voting </h1> <br>


<?php


        
            if(!empty($_POST['political'])) {
                $selected = $_POST['political'];
                $id =$_SESSION['id'];
                $district=$_SESSION['district'];
                $state=$_SESSION['state'];

                if ($_SESSION['voted'] == 0){

                
                echo '<h1> You have chosen: ' . $selected.'</h1>';
            mysqli_query($con,"UPDATE adhardatabase SET voted='1' WHERE id = '$id'" );


                $sql = mysqli_query($con, "INSERT INTO votedetails(voterid, partyname, district, statename) 
                 VALUES ('$id','$selected', '$district', '$state') ");
                 }

                 else{
                     echo "you have alredy voted";
                 }

            } else {
                echo 'Please select the value.';
            }
            
        ?>
<button>
    <a href="logout.php">Logout</a>
</button>

</center>

</body>

</html>