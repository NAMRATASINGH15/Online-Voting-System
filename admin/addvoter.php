<?php
session_start();
require('../connection.php');
//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['admin_id'])){
 header("location:access-denied.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Online Voting System | Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/AdminDashboard.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300;400&display=swap" rel="stylesheet">


</head>

<body>
    <!--   navbar starts here-->

    <nav class="navbar navbar-expand-lg" style="background-color: #7952b3;">
        <a class="navbar-brand" href="#">Admin dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </nav>

    <!--    navbar ends here-->

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item pink">
                            <a class="nav-link active side" href="admin.php">
                                <span data-feather="home"></span>
                                <i class="fa fa-file" aria-hidden="true"></i> Home <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item pink">
                            <a class="nav-link side" href="addvoter.php">
                                <span data-feather="file"></span>
                                <i class="fa fa-user" aria-hidden="true"></i> Add Voter
                            </a>
                        </li>
                        <li class="nav-item pink">
                            <a class="nav-link side" href="addcandidate.php">
                                <span data-feather="shopping-cart"></span>
                                <i class="fa fa-user" aria-hidden="true"></i> Add Candidate
                            </a>
                        </li>
                        <li class="nav-item pink">
                            <a class="nav-link side" href="refresh.php">
                                <span data-feather="users"></span>
                                <i class="fa fa-bar-chart" aria-hidden="true"></i> Result
                            </a>
                        </li>
                        <li class="nav-item pink">
                            <a class="nav-link side" href="logout.php">
                                <span data-feather="bar-chart-2"></span>
                                <i class="fa fa-sign-out-alt" aria-hidden="true"></i> Logout
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
            <div class="col-md-10 main">
                <center>
                <h1 class="page-header"><i class="fa fa-tachometer" aria-hidden="true"></i> Add Voter</h1>
                </center>
                <div class="row">
                    <div class = "col-md-3"></div>

                    <div class = "col-md-6">
                <form name="form1" method="post" action="addvo.php" onsubmit="return loginValidate(this)">
                <input class="form-control" type="text" placeholder="Aadhar Number" name="adharnumber">
                <input class="form-control" type="date" placeholder="Date of Birth" name="dob">
                <input class="form-control" type="text" placeholder="District" name="district">
                <input class="form-control" type="text" placeholder="email" name="email">
                <input class="form-control" type="text" placeholder="State" name="state">
                <input class="form-control" type="text" placeholder="Father Name" name="fname">
                <input class="form-control" type="text" placeholder="Name" name="name">

                <br>

                <button type="submit" id="submit" value="Login"class="btn btn-md btn-block" style="background-color: #7952b3; color: #fff;">Submit</button><br>
     

                </form>
</div>
                </div>
            </div>
        </div>
    </div>
    <footer class="fixed-bottom">&#169 2020 By Namrata Singh <a href="https://www.facebook.com/NamrataSingh1511/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
    </footer>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script></html>


