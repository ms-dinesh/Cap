<style>
.flex-parent{
    display:flex;
}
.jc-center{
    justify-content:center;
    
}
</style>
<?php

include "databasecourse.php";
include "includefiles/header.php";
include "includefiles/navbar.php";
include "includefiles/script.php";



?>

<div class="container">
    <div class="card mb-4">
        <div class="card-head text-center text-primary p-3"><b>Edit Course Details</b></div>
<div class="card_body">
<?php
if(isset($_POST['edit_btn'])){
    $id=$_POST['edit_id'];
   
    $query="SELECT * FROM `coursetable` WHERE ID='$id'";
    $res=mysqli_query($dbinsert,$query);
    foreach($res as $r1){

          
    
?>
<div class="container">
<form action="Course logic.php" method="POST">
<div class="form-group">
            <input class="form-control" type="hidden" name="edit_id2" placeholder="Enter ID value" value="<?php echo $r1['ID']; ?>">
        </div>
    <div class="form-group">
            <input class="form-control" type="text" name="edit_course" placeholder="course-name" value="<?php echo $r1['Course Name']; ?>">
        </div>
                 <div class="flex-parent jc-center py-3">
                 
                <button type="submit" name="upbtn" class="btn btn-success px-4">Update</button>
                </div>
                <div class="flex-parent jc-center">
                <a href="Course list.php" class="btn btn-info px-4">Cancel</a>
               
                </div>
                
                </form>
      
<?php
}
}
?>
</div>
</div>
</div> 
</div>