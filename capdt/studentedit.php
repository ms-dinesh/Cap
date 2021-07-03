
<?php
include ('includefiles/header.php');
include ('includefiles/navbar.php');

include ('includefiles/script.php');

include 'databasecourse.php';
?>

<div class="container">
<div class="bg-dark text-center py-3 my-2">
<b><h2 class="text-white ">Edit Student Profile <i class="fa fa-user-circle fa-1x" aria-hidden="true"></i></h2></b>
</div>

<div class="container">
<div class="card mb-4">

<div class="card-body">

<?php
if(isset($_POST['edit_btn'])){
    $id=$_POST['edit_id']; 
    // echo ($id); 
    $sel="SELECT * FROM `studenttable` WHERE ID='$id'";
    $res=mysqli_query($dbinsert,$sel);
    if(mysqli_num_rows($res)>0){
    while($r1=mysqli_fetch_assoc($res)){
        
?>

<form action="studentcode.php" method="POST" enctype="multipart/form-data">
    <div class="form-group"> 
    
     <input class="form-control" type="hidden" name="edit_id" placeholder="Enter Student ID " value="<?php  echo $r1['ID'];  ?>">  
     </div>

     <div class="form-group">
     <label><h5>Upload Image</h5></label>    
     <input class="form-control" type="file" name="edit_img" id="img"  value="<?php  echo $r1['Img']; ?>">
    </div>

    <div class="form-group">
    <label for=""><h5>First Name</h5></label> 
     <input class="form-control" type="text" name="edit_first" id="" placeholder="Enter First Name" value="<?php echo $r1['Firstname']; ?>">
    </div>

    <div class="form-group">
    <label for=""><h5>Last Name</h5></label> 
     <input class="form-control" type="text" name="edit_last" id="" placeholder="Enter Last Name" value="<?php  echo $r1['Lastname']; ?>">
    </div>

    <div class="form-group">
    <label for=""><h5>Date of Birth</h5></label> 
     <input class="form-control" type="date" name="edit_dob" id="" placeholder="Enter DOB" value="<?php  echo $r1['DOB']; ?>">
    </div>

    <div class="form-group">
    <label for=""><h5>Gender</h5></label> 
     <input class="form-control" type="text" name="edit_gender" id="" placeholder="Enter Gender" value="<?php  echo $r1['Gender']; ?>">
    </div>

    <div class="form-group">
    <label for=""><h5>Email ID</h5></label> 
     <input class="form-control" type="email" name="edit_email" id="" placeholder="Enter Email ID" value="<?php  echo $r1['Email']; ?>">
    </div>

    <div class="form-group">
    <label for=""><h5>Mobile Number</h5></label> 
     <input class="form-control" type="text" name="edit_no" id="" placeholder="Enter Mobile No" value="<?php  echo $r1['Mobile_no']; ?>">
    </div>
    

<button type="submit" name="upbtn" class="btn btn-success">Update</button>
<!-- <button class="btn btn-danger">Cancle</button> -->
<a href="studentlist.php" class="btn btn-danger">Cancle </a>
</form>
<?php
}
}
}
?>

</div>
</div>
</div>
