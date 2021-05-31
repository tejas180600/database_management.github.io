<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">

    <title> Menu </title>

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
        <h3>MENU</h3>
        <p>Select Operations U want to perform </p>
</div>

<div class="container-fluid" style="background-color: rgb(231, 253, 131);">
    <div class="row">
      <div class="col">
        <div class="text-center">
          
        <a class='btn btn-info' href="U_D_teacher.php">Update/Delete teacher's data  </a>
        <br>
        <br>
        <a class='btn btn-info' href="display.php">Display teacher's data  </a>
        </div>
      </div>
      <div class="col">
        <div class="text-center">
        <a class='btn btn-info' href="U_D_student.php">Update/Delete student's data  </a>
        <br>
        <br>
        <a class='btn btn-info' href="student_display.php">Display student's data  </a>
        </div>
      </div>
    </div>
  </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous">
</script>

</body>

</html>