<?php 
session_start(); 
include 'databasecourse.php'; 

if(isset($_POST['r1'])){ 
    $a1=$_POST['id']; 
    $b1=$_POST['course'];   
    $q1="INSERT INTO `coursetable`(`ID`, `Course Name`) VALUES ('$a1','$b1')";

    $res=mysqli_query($dbinsert,$q1); 
    if($res){  
   $_SESSION['success']='Course has been added'; 
    header('Location:Course list.php'); 
    } 
     else{   
    $_SESSION['status']='Course has not been added'; 
   header('Location:Course list.php'); 
    } 
    }


    
if(isset($_POST['upbtn'])){
    
    $i = $_POST['edit_id2'];
    $v1 = $_POST['edit_course'];
    

    $query="UPDATE `coursetable` SET `ID`='$i',`Course Name`='$v1' WHERE ID='$i'";

    $res = mysqli_query($dbinsert,$query);
    // echo "Updated";

    if($res){
        $_SESSION['success'] = 'Course Updated' ;
        header('location:Course list.php');
        }else{
            $_SESSION['status'] = 'Course Not Updated' ;
            header('location:Course list.php');
        }
}


//for DELETE the data //

if(isset($_POST['del'])){

    $b = $_POST['del_id'];

    $query="DELETE FROM `coursetable` WHERE `ID`='$b'";

    $res = mysqli_query($dbinsert,$query);
    if($res){
        $_SESSION['success'] = 'Deleted' ;
        header('location:Course list.php');
        }else{
            $_SESSION['status'] = 'Delete Failed' ;
            header('location:Course list.php');
        }
 }








?>