<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
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
if(!isset($_GET['rollno']))
{
  die('rollno not provied');
}
$rollno=$_GET['rollno'];
$sql="SELECT * FROM `student` where rollno=$rollno";
$result=$con->query($sql);
if($result->num_rows != 1){
  die('rollno is not in db');
}
$data= $result->fetch_assoc();

    if(isset($_GET['rollno']) && isset($_POST['editform'])){
        $rollno=$_GET['rollno'];
        $firstname = $_POST['firstname'];
        $lastname=$_POST['lastname'];
        $password=$_POST['password']; 
        $gender=$_POST['gender'];
        $mob_num=$_POST['mob_num'];
        $branch=$_POST['branch'];
        $city= $_POST['city'];
        $state=$_POST['state']; 
        $pincode=$_POST['pincode'];


       $sql=" UPDATE `student` SET
        `firstname` = '$firstname',
         `lastname`='$lastname',
         `password`='$password', 
         `gender`='$gender',
          `mob_num`='$mob_num',
           `branch`='$branch',
           `city` = '$city', 
            `state`='$state', 
            `pincode`='$pincode'
         
         WHERE `student`.`rollno` = '$rollno'";
         if($con->query($sql)==TRUE){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>SUCCESS</strong>     DATA UPDATED .
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
         }
         else{
             echo " Something went wrong";
         }

    }

   
   


$con->close();

?>



<div class="form_heading">
        <h3>Welcome to Registration form</h3>
        <p>Plz update your data</p>
</div>

<div class= "form">
    <form class="row g-3 needs-validation"  action="S_edit.php ?rollno=<?= $rollno ?>" method="POST">

            <div class="col-md-4 position-relative">
              <label for="validationTooltip01" class="form-label">First name</label>
              <input type="text" class="form-control" id="validationTooltip01" name="firstname" value="<?= $data['firstname']?>" required>
              <div class="valid-tooltip">
                Looks good!
              </div>
            </div>
            <div class="col-md-4 position-relative">
              <label for="validationTooltip02" class="form-label">Last name</label>
              <input type="text" class="form-control" id="validationTooltip02" name="lastname" value="<?= $data['lastname']?>" required>
              <div class="valid-tooltip">
                Looks good!
              </div>
            </div>
           
            <div class="col-md-6 position-relative">
                <label for="validationTooltip03" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="validationTooltip03" value="<?= $data['password']?>"required>
                <div class="invalid-tooltip">
                  Please provide a valid Password.
                </div>
              </div>
              <div class="col-md-3 position-relative">
                <label for="validationTooltip04" class="form-label">Gender</label>
                <select class="form-select" id="validationTooltip04" name="gender" value="<?= $data['gender']?>" required>
                  <option selected disabled value="">Choose...</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Other</option>
                </select>
                <div class="invalid-tooltip">
                  Please select a valid Gender.
                </div>
              </div>
              <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label">Contact Number</label>
                <input type="text" class="form-control" name="mob_num" id="validationTooltip01" value="<?= $data['mob_num']?>" required>
                <div class="valid-tooltip">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label">Branch</label>
                <input type="text" class="form-control" name="branch" id="validationTooltip01" value="<?= $data['branch']?>" required>
                <div class="valid-tooltip">
                  Looks good!
                </div>
              </div>
            <div class="col-md-6 position-relative">
              <label for="validationTooltip03" class="form-label">City</label>
              <input type="text" class="form-control" name="city" id="validationTooltip03" value="<?= $data['city']?>"required>
              <div class="invalid-tooltip">
                Please provide a valid city.
              </div>
            </div>
            <div class="col-md-3 position-relative">
              <label for="validationTooltip04" class="form-label">State</label>
              <select class="form-select" id="validationTooltip04" name="state" value="<?= $data['state']?>"required>
                <option selected disabled value="">Choose...</option>
                <option>Maharashtra</option>
                <option>Bihar</option>
                <option>UP</option>
                <option>Delhi</option>
              </select>
              <div class="invalid-tooltip">
                Please select a valid state.
              </div>
            </div>
            <div class="col-md-3 position-relative">
              <label for="validationTooltip05" class="form-label">pincode</label>
              <input type="text" class="form-control" name="pincode" id="validationTooltip05" value="<?= $data['pincode']?>" required>
              <div class="invalid-tooltip">
                Please provide a valid zip.
              </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            
            <div class="col-12">
              <button class="btn btn-primary" name="editform" type="submit">UPDATE</button>
            </div>
          </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
</body>
</html>

