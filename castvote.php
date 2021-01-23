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
    <title>Voting Management System </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/PollingForm.css" type="text/css">
</head>

<body>
    <div class="container-fluid con">

        <div class="jumbotron">

            <h1 class="display-3">Online Voting System</h1>

        </div>
    </div>
    <div class="container">

        <div id="form">

            <center>
                <img src="images/vote.jpg"><br>
                
            </center>
            
            
            
            <div class="somerandom">
            <form method="post" action="newvote.php">     
            <h4> Hi <?php echo $_SESSION['Name']; ?>, please select a party to vote </h4>
                <label class="margin-top-top">Party Name:</label>&nbsp &nbsp
                <select name="political">
                    <?php
                    $district=$_SESSION['district'];
                    $state=$_SESSION['state'];
                    echo $state;
                    echo $district;
                    $sql=mysqli_query($con, "SELECT partyname FROM partystatedatabase WHERE district='$district' and statename= '$state' ");

                    while($row=mysqli_fetch_assoc($sql))
                        {
                            $rowval= $row['partyname'];
                         echo "<option value='$rowval'>$rowval</option>";
                         }
            

                    ?>
                </select>
            </div>
            <div class="somerandom">
            <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
  
     </form>
    </div>
</body>

</html>
