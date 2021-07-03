<?php
session_start();
include 'databasecourse.php';
?>
<?php

if (isset($_POST['btn_batch'])){

    $a=$_POST['a_id'];
    $b=$_POST['a_name'];
    $c=$_POST['a_student'];
    $d=$_POST['a_center'];
    $e=$_POST['a_course'];
    

    $query =" INSERT INTO `tablebatch`(`ID`, `Name`, `No_of_students`, `Center`, `Course`) VALUES ('$a','$b','$c','$d','$e') " ;
    $query_run=mysqli_query($dbinsert,$query);

    if ($query_run){
        $_SESSION['success']="New Batch details Added";
        header('location:batchlist.php');
    }
    else{
        $_SESSION['status']="Batch details not Added";
        header('location:batchlist.php');
    }
}
?>
<?php
if(isset($_POST['up_btn'])){

    $f=$_POST['e_id'];
    $g=$_POST['e_name'];
    $h=$_POST['e_student'];
    $i=$_POST['e_center'];
    $j=$_POST['e_course'];

    $query="  UPDATE `tablebatch` SET `ID`='$f',`Name`='$g',`No_of_students`='$h',`Center`='$i',`Course`='$j' WHERE `ID` = '$f'  ";
    $res=mysqli_query($dbinsert,$query);
    if($res){

        $_SESSION['pp']='Your Data has been updated';
        header('Location:batchlist.php');
    }
    else{
        $_SESSION['pp2']='Your Data has not been updated';
        header('Location:batchlist.php');
    }
}

if(isset($_POST['delete'])){

    $del = $_POST['delete_id'];

    $query= " DELETE FROM `tablebatch` WHERE `ID`='$del'";
    $res= mysqli_query($dbinsert,$query);
    if($res){
        $_SESSION['ps'] = 'Deleted' ;
        header('location:batchlist.php');
        }else{
            $_SESSION['ps2'] = 'Delete Failed' ;
            header('location:batchlist.php');
        }
 }




?>