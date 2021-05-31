<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>login</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(20, 20, 20);">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">DYP</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link active" href="#">Contacts us</a>
              </li>
    
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Admin</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
</nav>

<?php

$server="localhost";
$username="root";
$password="";
$db="newyear";
$con = mysqli_connect($server,$username,$password,$db);
if(isset($_POST['student_login'])=='POST')
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM `student` WHERE `username`= '$username' AND `password`='$password' ";

    $result=mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);

    if($num==1)
    {
       
           
              session_start();
              header('location:S_menu.php');
           
        
    }
    else{
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>ERROR</strong> Invalid username and password.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
  }
  


$con->close();

?>
   
    <div class="loginbox">
        <h1>Login Here</h1>
        <img src="student_login.png" class="logo">
        <form role="form" action="<?php
            echo $_SERVER['PHP_SELF'];
        ?>" method="POST">
          
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter password">
            <input type="submit" name="student_login" value="login">
            <a href="student_form.php">New to the database ?</a>

        </form>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>

</body>
</html>
