<?php
require('connection.php');

session_start();
//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['id'])){
 header("location:access-denied.php");
}
?>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/UserLogin.css" type="text/css">
    <style>
        a {
            color: Black;
        }
    </style>

</head>

<body>
    <div class="container-fluid con">

        <div class="jumbotron">

            <h1 class="display-3">Online Voting System</h1>

        </div>

    </div>
    <div id="page">
        <div id="header">
            <center>
                <a href="student.php">Home</a> | <a href="logout.php">Logout</a>
            </center>
        </div>
        <div id="container">
            <center>
                <h2>Voter's Details </h2>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <table class="table table-sm table-dark">
                            <tr class=" blackBold">
                                <td class="blackBold"><b>
                                        <h4> Name</h4>
                                    </b></td>
                                <td class="blackBold"><?php echo $_SESSION['Name'];?></td>
                            </tr>
                            <tr class=" blackBold">
                                <td class="blackBold"> <b>
                                        <h4>Father Name</h4>
                                    </b></td>
                                <td class="blackBold"><?php echo $_SESSION['fathername'];?></td>
                            </tr>
                            <tr class="blackBold">
                                <td class="blackBold"> <b>
                                        <h4>District</h4>
                                    </b></td>
                                <td class="blackBold"><?php echo $_SESSION['district'];?></td>
                            </tr>
                            <tr class="blackBold">
                                <td class="blackBold"> <b>
                                        <h4>State</h4>
                                    </b></td>
                                <td class="blackBold"><?php echo $_SESSION['state'];?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-3"></div>


                </div>
<?php 
if($_SESSION['voted'] == 0 ){
echo '<button type="button" class="btn btn-primary" ><a class="whitese" href = "./castvote.php">Click to cast the Vote </a> </button>';}
else{
    echo'<b>Hi There You have Alredy Voted </b>';
}
?>
            </center>
        </div>
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</html>
