
<?php
session_start();
include 'databasecourse.php';
if(isset($_POST['log'])){
$n1=$_POST['name'];
$c1=$_POST['contact'];
$c2=$_POST['course'];
$s1=$_POST['startdate'];
$e1=$_POST["enddate"];

$q1=" INSERT INTO `batchtable`(`name`, `contact`, `course`,`startdate`, 'enddate') VALUES ('$n1','$c1','$c2','$s1' '$e1')";
$res=mysqli_query($dbinsert,$q1);

if($res){
$_SESSION['success']='Admin Profile has been added';
header('loaction:retrive.php');
}
else{
$_SESSION['status']='Admin Profile has not been added';
header('loaction:retrive.php');
}
}
?>