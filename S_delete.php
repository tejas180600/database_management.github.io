<?php
 $server="localhost";
 $username="root";
 $password="";
 $db="newyear";
 $con = mysqli_connect($server,$username,$password,$db);

if(isset($_GET['rollno']))
{
    $rollno= $_GET['rollno'];
    $sql="DELETE FROM `student` WHERE rollno=$rollno";

    if($con->query($sql)== TRUE){
        header("location:U_D_student.php?del=true");
    }
    else{
        echo"Not deleted";
    }
}
else{
    die('ERROR !!!  rollno not provided');
}

$con->close();
?>