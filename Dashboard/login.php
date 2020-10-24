<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
  <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!--Custom styles-->
<?php
include("connection.php");


?>


  <link rel="stylesheet" type="text/css" href="vip/sheraz.css">
</head>
<body style="background-image: url(pic/a1.jpg)";>
<div class="container">
  <div class="d-flex justify-content-center h-100" style="height: 1000px;">
    <div class="card">
      <div class="card-header">
        
        <div class="d-flex justify-content-end social_icon">
          <span><i class="fab fa-facebook-square"></i></span>
          <span><i class="fab fa-google-plus-square"></i></span>
          <span><i class="fab fa-twitter-square"></i></span>
        </div>
      </div>
      <div class="card-body">
          <?php  
                if(isset($_GET["action"]) == "login")  
                {  
                ?>  
                <h3 align="center" style="color:white">Log-in</h3>  
                <br />  
                <form method="post">  
                     <label style="color:white">Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label style="color:white">Enter Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" value="Login" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="login.php">Register</a></p>  
                </form>  
                <?php       
                }  
                else  
                {  
                ?>  
                <h3 align="center" style="color:white">Register</h3>  
                <br />  
                <form method="post">  
                     <label style="color:white">Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label  style="color:white">Enter Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="register" value="Register" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="login.php?action=login">Login</a></p>  
                     
      </div>
      <div class="card-footer">
        <div class="d-flex justify-content-center links">
                </form>  
                <?php  
                }  
                ?>  

      </div>
      <div class="card-footer">
        <div class="d-flex justify-content-center links">
          
              <?php  
 $connect = mysqli_connect("localhost", "root", "", "study");  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
      header("location:home.php");  
 }  
 if(isset($_POST["register"]))  
 {  
      if(empty($_POST["username"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = md5($password);  
           $query = "INSERT INTO users (username, password) VALUES('$username', '$password')";  
           if(mysqli_query($connect, $query))  
           {  
                echo '<script>alert("Registration Done")</script>';
                   
           }  
      }  
 }  
 if(isset($_POST["login"]))  
 {  
      if(empty($_POST["username"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = md5($password);  
           $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                $_SESSION['username'] = $username;  
                header("location:index.php");  
           }  
           else  
           {  
                echo '<script>alert("Wrong Password")</script>';  
           }  
      }  
 }  
 ?>  




</body>
</html>

 





