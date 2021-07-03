<?php
include 'databasecourse.php';
include ('includefiles/header.php');
include ('includefiles/navbar.php');
include ('includefiles/script.php');
?>

    
<div class="container">
<div class="card">
    <div class="card-header">
        <div class="header  bg-dark mb-2 py-2"><h2 style="font-size:25px; text-align:center; color:white; font-weight:600;" >Edit Batch Details</h2></div>
        <div class="card-body">
            <?php             
              if(isset($_POST['edit'])){
                      
              $m = $_POST['edit_id'];
              
              $query = " SELECT * FROM `tablebatch` WHERE `ID`='$m' ";

              $query_get = mysqli_query($dbinsert,$query);
              foreach($query_get as $row){
                  
            ?> 
<form action="batchcode.php" method="POST">
         <div class="form-group mb-4 ">
            <div class="row">
                <div class="col-sm-4">

                    <input type="hidden" class="form-control" name="e_id" placeholder="Enter Your ID" value="<?php echo $row['ID'] ?>">  
                </div>
            </div>
             
             <div class="row mb-4">
                 <div class="col-sm-4">
                 <label for="e_name" class="form-label">Batch Name</label>
                  <input type="text" class="form-control" name="e_name" placeholder="Enter Your Name" value="<?php echo $row['Name'] ?>">  
                 </div>
                <div class="col-sm-4">
                    <label for="e_mobile" class="form-label">No of Students  </label>
                    <input type="text"  class="form-control" name="e_student" placeholder="Enter Your Mobile No" value="<?php echo $row['No_of_students'] ?>" >  
                </div>
             </div>
             
             <div class="row mb-4">
                 <div class="col-sm-4">
                 <label for="e_email" class="form-label">Center Name</label>
                  <input type="text" class="form-control" name="e_center" placeholder="Enter Your Email" value="<?php echo $row['Center'] ?>">
                
                 </div>

              <div class="col-sm-4">
                <label for="e_role" class="form-label">Course</label>
                  <input type="text"  class="form-control" name="e_course" placeholder="Enter Your Role" value="<?php echo $row['Course'] ?>">
              </div>
              
             </div>
         </div>
              <br>
             
             Do you want to Edit the profile?
             <a href="batchlist.php" class="btn btn-dark">No</a>
                <button type="submit" name="up_btn" class="btn btn-primary">Yes</button>
                </div> 
                </div>
            </form>

            <?php
            
                }
                }
            ?>
</div>
</div>
</div>

  