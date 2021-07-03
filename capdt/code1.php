<?php
session_start();
include 'databasecourse.php';
if (isset($_POST['userlist'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $role=$_POST['role'];
    $type=$_POST['type'];


    $query="INSERT INTO `details`(`ID`, `Name`, `Mobile`, `Email`, `Role`, `Type`) VALUES ('$id','$name','$mobile','$email','$role','$type')";
    $res=mysqli_query($dbinsert,$query);

    print_r($res);
    if ($res){
        $_SESSION['success']="Profile Added";
        header('location:userlist.php');
    }
    else{
        $_SESSION['status']="Profile not Added";
        header('location:userlist.php');
    }


}
if(isset($_POST['up_btn'])){
    $e_id=$_POST['e_id'];
    $e_name=$_POST['e_name'];
    $e_mobile=$_POST['e_mobile'];
    $e_email=$_POST['e_email'];
    $e_role=$_POST['e_role'];
    $e_type=$_POST['e_type'];
    $query="UPDATE `details` SET `ID`='$e_id',`Name`='$e_name',`Mobile`='$e_mobile',`Email`='$e_email',`Role`='$e_role',`Type`='$e_type' WHERE `ID`='$e_id'";
    $res=mysqli_query($dbinsert,$query);
    if($res){

        $_SESSION['pp']='Your Data has been updated';
        header('Location:userlist.php');
    }
    else{
        $_SESSION['pp2']='Your Data has not been updated';
        header('Location:userlist.php');
    }
}

if(isset($_POST['delete'])){

    $del = $_POST['delete_id'];

    $query= " DELETE FROM `details` WHERE `ID`='$del'";
    $res= mysqli_query($dbinsert,$query);
    if($res){
        $_SESSION['ps'] = 'Deleted' ;
        header('location:userlist.php');
        }else{
            $_SESSION['ps2'] = 'Delete Failed' ;
            header('location:userlist.php');
        }
 }




?>