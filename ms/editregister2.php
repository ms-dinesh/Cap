<?php
include 'database.php';
include 'includefiles/header.php';
include 'includefiles/navbar.php';

?>

 
<div class="container">
  <div class="card">
    <div class="card-header">
        <h6>Edit Admin profile</h6>   
    </div>    

          <div class="card-body">
                <?php             
                if(isset($_POST['edit_std'])){
                    
                    $e_sn2 = $_POST['edit_std_value'];
                    $query = " SELECT * FROM `students` WHERE SN='$e_sn2' ";
                    $query_get = mysqli_query($dbinsert,$query);
                    foreach($query_get as $row){
                ?> 
                
                <form action="code2.php" method="POST">
                <div class="form-group">
                <input class="form-control" type="hidden" name="e_sn2" placeholder="S.No" value="<?php echo $row['SN'] ?>">
                </div>
                <div class="form-group">
                <input class="form-control" type="file" name="e_profile" placeholder="Image" value="<?php echo $row['Profile'] ?>">
                </div>
        
                <div class="form-group">
                <input class="form-control" type="text" name="e_fname"  placeholder="First Name" value="<?php echo $row['Firstname'] ?>">
                </div>
                <div class="form-group">
                <input class="form-control" type="text" name="e_lname" placeholder="Last Name" value="<?php echo $row['Lastname'] ?>">
                </div>
                
                <div class="form-group">
                <input class="form-control" type="text" name="e_user" placeholder="User ID" value="<?php echo $row['userid'] ?>">
                </div>
                <div class="form-group">
                <input class="form-control" type="text" name="e_pass" placeholder="Password" value="<?php echo $row['passcode'] ?>">
                </div>
                <div class="modal-footer">
                <a href="register.php" class="btn btn-dark">Cancel</a>
                <button type="submit" name="up_std" class="btn btn-primary">Update</button>
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
<?php
include  'includefiles/script.php';
include  'includefiles/footer.php';
?>