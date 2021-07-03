<?php 
include 'database.php';
session_start();

    //for ADD to ADMIN database//

if(isset($_POST['insert'])){

    $a_sn = $_POST['a_sn'];
    $a_id = $_POST['a_id'];
    $a_pcode = $_POST['a_pcode'];
    $a_status = $_POST['a_status'];

        $query =" INSERT INTO `state`(`SN`, `userid`, `passcode`, `status`) VALUES ('$a_sn','$a_id','$a_pcode','$a_status') ";
        $query_run = mysqli_query($dbinsert,$query);
        
                if($query_run){
                $_SESSION['success'] = 'Profile Added';
                header('location:register.php');
                }
                else{
                    $_SESSION['status'] = 'Profile has not been Added';
                    header('location:register.php');
                }
    
            }

       
        //for UPDATE ADMIN Data 

if(isset($_POST['up_btn'])){
    
    $sn = $_POST['e_sn'];
    $k = $_POST['e_id'];
    $l = $_POST['e_pcode'];
    $m = $_POST['e_status'];

    $query = " UPDATE `state` SET `SN`='$sn',`userid`='$k',`passcode`='$l',`status`='$m' WHERE `SN` = '$sn' ";
    $query_run = mysqli_query($dbinsert,$query);
    
    if($query_run){

        $_SESSION['msd4'] = 'List has successfully <span style="color:red"> Updated </span> ';
        header('location:register.php');
        }else{
            $_SESSION['ms4'] = 'Not Updated' ;
            header('location:register.php');
        }
}


        //for UPDATE Student Data 

        if(isset($_POST['up_std_btn'])){
    
            $sn = $_POST['e_sn'];
            $k = $_POST['e_id'];
            $l = $_POST['e_pcode'];
            $m = $_POST['e_status'];
        
            $query = " UPDATE `state` SET `SN`='$sn',`userid`='$k',`passcode`='$l',`status`='$m' WHERE `SN` = '$sn' ";
            $query_run = mysqli_query($dbinsert,$query);
            
            if($query_run){
                $_SESSION['msd4'] = 'List has successfully'.'<span style="font-color:red">'. 'Updated'.' </span>' ;
                header('location:register2.php');
                }else{
                    $_SESSION['ms4'] = 'Not Updated' ;
                    header('location:register2.php');
                }
        }

     //for DELETE the data //

     if(isset($_POST['del_btn'])){

        $bin = $_POST['delt_value'];

        $query= " DELETE FROM `state` WHERE `SN`='$bin' ";
        $query_run = mysqli_query($dbinsert,$query);
        if($query_run){
            $_SESSION['msd1'] = 'Deleted' ;
            header('location:register.php');
            }else{
                $_SESSION['ms1'] = 'Delete Failed' ;
                header('location:register.php');
            }
     }
           
        //for LOGIN page //
    

    if(isset($_POST['btn_login'])){
            
            $unq = $_POST['log_unq'];
            $uname = $_POST['log_user'];
            $pcode = $_POST['log_pass'];
        
        $query = " SELECT * FROM `state` WHERE `userid`='$uname' AND `passcode`='$pcode' ";
        $query_run = mysqli_query($dbinsert,$query);
        
        if(mysqli_fetch_array($query_run)){

            $_SESSION['userid'] = $uname ;
            header('location:index.php');
        }else{

            $_SESSION['status'] = '<i class="fa fa-info-circle text-danger"></i>
            '.'User ID or Password doesnot match!' ;
            header('location:signin.php');
        
        }


    }
         
      

?>
