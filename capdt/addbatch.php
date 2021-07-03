
<?php
include ('includefiles/header.php');
include ('includefiles/navbar.php');
include ('includefiles/script.php');

include 'databasecourse.php';
?>

  <div class="jumbotron">
  <form action="batchcode.php" method="POST" >
         <h5 style="text-align:center">Add New Batch Details </h5><br>
         <div class="container">
         <div class="form-group">
         <div class="row">
                 
                 <!-- <label for="id" class="form-label">ID:</label> -->
                  <input type="HIDDEN" class="form-control" name="a_id" placeholder="Enter Your ID" >  
              </div>
              <div class="row">
              <div class="col">
                 <label for="name" class="form-label">Batch Name:</label>
                  <input type="text"  class="form-control" name="a_name" placeholder="Enter Batch Name" required>  
              </div>
              </div>
             <br>
             <div class="row">
                 <div class="col">
                 <label for="mobile" class="form-label">Number of Students:</label>
                  <input type="text"  class="form-control" name="a_student" placeholder="Enter Count" required>  
              </div>
              <div class="col">
                 <label for="email" class="form-label">Center:</label>
                  <input type="text"  class="form-control" name="a_center" placeholder="Enter Center Name" required>  
              </div>
              </div>
             </div>
             
             <div class="row">
                 <div class="col">
                 <label for="role" class="form-label">Course Alloted for Batch:</label>
                  <input type="text" class="form-control" name="a_course" placeholder="Enter Course Name" required>
                
                 </div>
              
              </div>
             <br>
              <div >
               <h5> Click Here to add new Batch
                <a href="addbatch.php" class="btn btn-dark">No</a>
                <button type="submit" name="btn_batch" class="btn btn-primary">Add</button></h5>
              </div> 
             
                 
            </form>
            </div>
            </div>
