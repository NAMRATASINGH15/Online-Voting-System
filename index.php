<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/UserLogin.css" type="text/css">
<script language="JavaScript" src="js/user.js"> </script>
  <title>Online Voting | User Login</title>
</head>

<body>
    <div class="container-fluid con">

         <div class="jumbotron">

         <h1 class="display-3">Online Voting System</h1>

         </div>

    </div>
    <div class="container">
    <div class="form-box">
      <div class="form-header">
        <h1>
          <center>User Login</center>
        </h1>
      </div>
      <form name="form1" method="post" action="checklogin.php" onSubmit="return loginValidate(this)">
        <div class="form-group">
          <input type="text" class="form-control" name="adharnumber" id="InputEmail1" placeholder="Enter your Aadhar Number or Vitual Id" required>
        </div>
        <div class="form-group">
          <input type="date" id="myInput" class="form-control" name="dateofbirth" placeholder="Enter your date of birth" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="InputEmail1" name="emailid" placeholder="Enter your email address" required>
        </div>
        <div class="checkbox">
          <label for="">
            <input type="checkbox"> Remember me
          </label>
        </div>
        <button  type="submit" name="Submit" value="Login" class="btn btn-md btn-block">Continue</button>
      </form>
    </div>
  </div>


</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</html>