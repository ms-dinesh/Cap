<?php
session_start();
include "databasecourse.php";
if(isset($_POST['create'])){
    $a1=$_POST['id'];
    $b1=$_FILES['img']['name'];
    $c1=$_POST['first'];
    $d1=$_POST['last'];
    $n1=$_POST['fathername'];
    $m1=$_POST['mothername'];
    $e1=$_POST['dob'];
    $f1=$_POST['gender'];
    $g1=$_POST['email'];
    $h1=$_POST['no'];
    // $i1=$_POST['pwd'];

    // if($s1){
   
    $insert="INSERT INTO `studenttable`(`ID`, `Img`, `Firstname`, `Lastname`, `Fathername`, `Mothername`, `DOB`, `Gender`, `Email`, `Mobile_no`) VALUES ('$a1','$b1','$c1','$d1','$n1','$m1','$e1','$f1','$g1','$h1')";
    $res=mysqli_query($dbinsert,$insert);
    print_r($res);
    if($res){

        move_uploaded_file(($_FILES['img']["tmp_name"]),"pictures/".$_FILES['img']["name"]);
        // echo "Student form submitted.";
        $_SESSION['success']="Student form submitted";
        header('location:studentform.php');
           }
           else{
        //    echo "Student form  did not submitted.";
           $_SESSION['status']="Student form  did not submitted";
        header('location:studentform.php');
           }
        }
    
        
if(isset($_POST['upbtn'])){
    $a2=$_POST['edit_id'];
    $b2=$_FILES['edit_img']['name'];
    $c2=$_POST['edit_first'];
    $d2=$_POST['edit_last'];
    $e2=$_POST['edit_dob'];
    $f2=$_POST['edit_gender'];
    $g2=$_POST['edit_email'];
    $h2=$_POST['edit_no'];
    

    $query1="UPDATE `studenttable` SET `ID`='$a2',`Img`='$b2',`Firstname`='$c2',`Lastname`='$d2',`DOB`='$e2',`Gender`='$f2',`Email`='$g2',`Mobile_no`='$h2' WHERE `ID`='$a2'";
    $res=mysqli_query($dbinsert,$query1);
    // echo "Updated";

    if($res){
        move_uploaded_file(($_FILES['edit_img']["tmp_name"]),"pictures/".$_FILES['edit_img']['name']);

        $_SESSION['abc']="Profile updated";
        header('location:studentlist.php');
    }else{
        $_SESSION['abc2']="Profile not updated";
        header('location:studentlist.php');
    }
}

if(isset($_POST['del'])){
    $b=$_POST['del_id'];
    $query="DELETE FROM `studenttable` WHERE ID='$b'";
    $res=mysqli_query($dbinsert,$query);
    echo "Deleted";
}


?>

