<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/AdminLogin.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
  <title>Online Voting | Admin Login</title>
  <link rel="stylesheet" href="css/AdminLogin.css" type="text/css">

</head>

<body>
  <div class="container-fluid con">

    <div class="jumbotron">

      <h1 class="display-3">
        <center>Online Voting System</center>
      </h1>

    </div>

  </div>
  <div class="container">
    <div class="form-box">
      <div class="form-header">
        <h1>
          <center>Admin Login</center>
        </h1>
      </div>
      <form name="form1" method="post" action="checklogin.php" onsubmit="return loginValidate(this)">
        <div class="form-group">
          <input type="email" name="myusername" class="form-control" id="InputEmail1" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <div class="input-group mb-3">
            <input type="password" name="mypassword" class="form-control" id="myInput" placeholder="Enter your password" required>
            <div class="input-group-append">
              <span class="input-group-text" onclick="myFunction()"><i id="hide1" class="fa fa-eye"></i>
                <i id="hide2" class="fa fa-eye-slash"></i></span>
            </div>
          </div>
          <div class="checkbox">
            <label for="">
              <input type="checkbox"> Remember me
            </label>
          </div>
          <button type="submit" id="submit" value="Login"class="btn btn-md btn-block" style="background-color: #7952b3; color: #fff;">SIGN IN</button><br>
          <span class="pwd"><a class="red" href="ForgotPassword.html" target="_blank">
              <center>Forgot password?</center>
            </a></span>
        </div>
      </form>
    </div>
  </div>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</html>











