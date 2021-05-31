<?php
 $server="localhost";
 $username="root";
 $password="";
 $db="newyear";
 $con = mysqli_connect($server,$username,$password,$db);

if(isset($_GET['id']))
{
    $id= $_GET['id'];
    $sql="DELETE FROM `teacher` WHERE id=$id";

    if($con->query($sql)== TRUE){
        header("location:U_D_teacher.php?del=true");
    }
    else{
        echo"Not deleted";
    }
}
else{
    die('ERROR !!!  id not provided');
}

$con->close();
?>