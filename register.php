<?php
require_once "config.php"; 
if(isset($_SESSION["username"]))  
 { 
//    //name can contain only alpha characters and space
//    if (!preg_match("/^[a-zA-Z ]+$/",$username)) {
//     $error = true;
//     $username_error = "Name must contain only alphabets and space";
// }

// if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
//   $error = true;
//   $email_error = "Invalid email formate";
// }

// if(strlen($password) <= 6 ) {
//     $error = true;
//     $password_error = "Password must be minimum of 6 characters";
// } 
      // header("location:login.php");  
 }  

 //set validation error flag as false
$error = false;

if(empty($_POST["username"]) && empty($_POST["email"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("All Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($conn, $_POST["username"]); 
           $email = mysqli_real_escape_string($conn, $_POST["email"]); 
           $password = mysqli_real_escape_string($conn, $_POST["password"]);  
           $password = md5($password);  
   
    
    
	

 if(isset($_SESSION["username"]))  
 {  
      header("location:login.php");  
 }  
 if(isset($_POST["signup"]))  
 {  
      
           $query = "INSERT INTO users (username,email, password) VALUES('$username', '$email', '$password')";  
           if(mysqli_query($conn, $query))  
           {  
                echo '<script>alert("Registration Done")</script>';  
               
           }  
      }  
 }  
 ?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form action="<?= $_SERVER['PHP_SELF']; ?>"  method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="username" name="username" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
                  <label for="username">username</label>
                </div>
              </div>
              
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="required">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
                  <label for="inputPassword">Password</label>
                </div>
              </div>
              
            </div>
          </div>
          <input type="submit" name="signup" value="signup" a class="btn btn-primary btn-block" href="login.php"></a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
