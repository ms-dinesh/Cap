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
                if(isset($_POST['edit_btn'])){
                    
                    $e_sn = $_POST['edit_value'];
                    $query = " SELECT * FROM `state` WHERE  `SN`='$e_sn' ";
                    $query_get = mysqli_query($dbinsert,$query);
                    foreach($query_get as $row){
                ?> 
                
                <form action="code.php" method="POST">
                <div class="form-group">
                <input class="form-control" type="hidden" name="e_sn" placeholder="S.No" value="<?php echo $row['SN'] ?>">
                </div>
        
                <div class="form-group">
                <input class="form-control" type="text" name="e_id"  placeholder="User ID" value="<?php echo $row['userid'] ?>">
                </div>
                <div class="form-group">
                <input class="form-control" type="text" name="e_pcode" placeholder="Password" value="<?php echo $row['passcode'] ?>">
                </div>
                <div class="form-group">
                <input class="form-control" type="text" name="e_status" placeholder="Password" value="<?php echo $row['status'] ?>">
                </div>
                <div class="modal-footer">
                <a href="addtodb.php" class="btn btn-dark">Cancel</a>
                <button type="submit" name="up_btn" class="btn btn-primary">Update</button>
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