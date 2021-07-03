<?php
include 'databasecourse.php';
include ('includefiles/header.php');
include ('includefiles/navbar.php');
include ('includefiles/script.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Details</title>
  </head>
  <body>
    

    
<div class="container">
<div class="card">
    <div class="card-header">
        <div class="header  bg-dark text-center text-light mb-2 py-2"><h2 style="font-size:25px">Edit Employee Details</h2></div>
        <div class="card-body">
            <?php             
              if(isset($_POST['e_btn'])){
                      
              $id = $_POST['e_id'];
              $query = "SELECT * FROM `details` WHERE ID='$id' ";
              $query_get = mysqli_query($dbinsert,$query);
              foreach($query_get as $userlist){
                  
            ?> 
<form action="code1.php" method="POST">
         <div class="form-group mb-4 ">
         <div class="row">
              <div class="col-sm-4">
                 <!-- <label for="e_id" class="form-label">ID</label> -->
                  <input type="hidden" id="e_id" class="form-control" name="e_id" placeholder="Enter Your ID" value="<?php echo $userlist['ID'] ?>">  
              </div>
              <!-- </div> -->
             
             <div class="row mb-4">
                 <div class="col-sm-4">
                 <label for="e_name" class="form-label">Name</label>
                  <input type="text" id="e_name" class="form-control" name="e_name" placeholder="Enter Your Name" value="<?php echo $userlist['Name'] ?>">  
              </div>
              <div class="col-sm-4">
                 <label for="e_mobile" class="form-label">Mobile No</label>
                  <input type="text" id="e_mobile" class="form-control" name="e_mobile" placeholder="Enter Your Mobile No" value="<?php echo $userlist['Mobile'] ?>" >  
              </div>
              </div>
             </div>
             
             <div class="row mb-4">
                 <div class="col-sm-4">
                 <label for="e_email" class="form-label">Email</label>
                  <input type="email" id="e_email" class="form-control" name="e_email" placeholder="Enter Your Email" value="<?php echo $userlist['Email'] ?>">
                
              </div>

              <div class="col-sm-4">
                <label for="e_role" class="form-label">Role</label>
                  <input type="text" id="e_role" class="form-control" name="e_role" placeholder="Enter Your Role" value="<?php echo $userlist['Role'] ?>">
              </div>
              
              </div>
             
            
             <div class="row mb-4">
              <div class="col-sm-4">
                    <label for="e_type" class="form-label">Type</label>
                    <input type="text" id="e_type" class="form-control" name="e_type" placeholder="Enter Type" value="<?php echo $userlist['Type'] ?>">                   
              </div>
              
              </div>
              <br>
             
             Do you want to Edit the profile?
             <a href="userlist.php" class="btn btn-dark">No</a>
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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>
