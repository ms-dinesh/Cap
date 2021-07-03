<?php 
include 'databasecourse.php';
session_start();
           
        //for LOGIN page //
    

    if(isset($_POST['btn_login'])){
            
            $unq = $_POST['log_unq'];
            $uname = $_POST['log_user'];
            $pcode = $_POST['log_pass'];
        
        $query = " SELECT * FROM `admin` WHERE `userid`='$uname' AND `passcode`='$pcode' ";
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
