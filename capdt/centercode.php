<?php
session_start();
include 'databasecourse.php';
if (isset($_POST['centerlist'])){

 $name=$_POST['name'];
 
 $yoi=$_POST['yoi'];
 $status=$_POST['status'];
 $address=$_POST['address'];
 $donar=$_POST['donar'];

 $query="INSERT INTO `addcenter` (`Name`, `Year of inspection`, `Status`, `Address`, `Donar`) VALUES ('$name', '$yoi', '$status', '$address', '$donar')";
 $res=mysqli_query($dbinsert,$query);

 if(res){

    $_SESSION['success']='data has been added';
    header('Location:addcenter.php');
 }
}

?>