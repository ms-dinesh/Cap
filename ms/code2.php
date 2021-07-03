<?php 
include 'database.php';
session_start();

//for ADD to Student database//

if(isset($_POST['add'])){

    $a = $_POST['a_sn2'];
    $b = $_FILES['a_profile']['name'];
    $c = $_POST['a_fname'];
    $d = $_POST['a_lname'];
    $e = $_POST['a_user'];
    $f = $_POST['a_passcode'];

        $query =" INSERT INTO `students`(`SN`,`Profile`, `Firstname`, `Lastname`, `userid`, `passcode`) VALUES ('$a','$b','$c','$d','$e','$f') ";
        $query_run = mysqli_query($dbinsert,$query);
        
                if($query_run){
                    move_uploaded_file(($_FILES['a_profile']['tmp_name']),"pics/".$_FILES['a_profile']['name']);
                $_SESSION['success'] = 'Profile Added';
                header('location:register2.php');
                }
                 else{
                    $_SESSION['status'] = 'Profile has not been Added';
                    header('location:register2.php');
                }
}

        //for UPDATE Student Data 

        if(isset($_POST['up_std'])){
    
            $sn2 = $_POST['e_sn2'];
            $j = $_POST['e_profile'];
            $k = $_POST['e_fname'];
            $l = $_POST['e_lname'];
            $m = $_POST['e_user'];
            $n = $_POST['e_pass'];
        
            $query = " UPDATE `students` SET `SN`='$sn2',`Profile`='$j',`Firstname`='$k',`Lastname`='$l',`userid`='$m',`passcode`='$n' WHERE SN='$sn2' ";
            $query_run = mysqli_query($dbinsert,$query);
            
            if($query_run){
                $_SESSION['msd'] = 'Updated' ;
                header('location:register2.php');
                }else{
                    $_SESSION['ms'] = 'Not Updated' ;
                    header('location:register2.php'); 
                }
        }

     //for DELETE student data //

     if(isset($_POST['del_std'])){

        $bin = $_POST['del_std_value'];

        $query= " DELETE FROM `students` WHERE SN='$bin' ";
        $query_run = mysqli_query($dbinsert,$query);
        if($query_run){
            $_SESSION['msd1'] = 'Deleted' ;
            header('location:register2.php');
            }else{
                $_SESSION['ms1'] = 'Delete Failed' ;
                header('location:register2.php');
            }
     }

?>
