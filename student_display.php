<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <link rel="stylesheet" href="index.css">

    
  
    </style>
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


<div class="form_heading">
        <h3>Welcome to DATABASE</h3>  
        <br>
        <p>Students Data</p>
</div>

<table class="table table-success table-striped">
 

        <tr>
            <th>Roll NO.</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Gender</th>
            <th>Mobile NO.</th>
            <th>Branch</th>
            <th>City</th>
            <th>State</th>
            <th>Pincode</th>
        </tr>
   


    <?php

    $server="localhost";
    $username="root";
    $password="";
    $db="newyear";
    $con = mysqli_connect($server,$username,$password,$db);

    $sql="SELECT * FROM `student`";
    $result=mysqli_query($con,$sql);


    $num=mysqli_num_rows($result);
    
    if($num>0)
    {
        $flag=0;
        while($flag<$num)
        {
        $row=mysqli_fetch_assoc($result);
        
        echo "<tr><td>". $row['rollno'] . "</td><td>" . $row['firstname'] ."</td><td>" .  $row['lastname']. "</td><td>" . $row['gender']. "</td><td>" . $row['mob_num'] . "</td><td>" . $row['branch'] . "</td><td>" . $row['city'] . "</td><td>" .$row['state']. "</td><td>" . $row['pincode']. "</td></tr>";
       
        $flag++;
        }
        echo "</table>";
    }
    else{
        echo " No data found";
    }

    $con->close();
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
</body>
</html>