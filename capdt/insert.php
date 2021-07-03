
<?php
include ('includefiles/header.php');
include ('includefiles/navbar.php');

include ('includefiles/script.php');
include 'databasecourse.php';
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

    <title>Register</title>
  </head>
  <body>
  <div class="jumbotron">
  <form action="code1.php" method="POST" >
         <h5 style="text-align:center">Add New Staff Details </h5><br>
         <div class="form-group">
         <div class="row">
                 <div class="col">
                 <label for="id" class="form-label">ID:</label>
                  <input type="text" id="id" class="form-control" name="id" placeholder="Enter Your ID" >  
              </div>
              <div class="col">
                 <label for="name" class="form-label">Name:</label>
                  <input type="text" id="id" class="form-control" name="name" placeholder="Enter Your Name" required>  
              </div>
              </div>
             <br>
             <div class="row">
                 <div class="col">
                 <label for="mobile" class="form-label">Mobile:</label>
                  <input type="text" id="fname" class="form-control" name="mobile" placeholder="Enter Your Mobile No" required>  
              </div>
              <div class="col">
                 <label for="email" class="form-label">Email ID:</label>
                  <input type="email" id="email" class="form-control" name="email" placeholder="Enter Your Email" required>  
              </div>
              </div>
             </div>
             
             <div class="row">
                 <div class="col">
                 <label for="role" class="form-label">Role:</label>
                  <input type="text" id="role" class="form-control" name="role" placeholder="Enter Role" required>
                
              </div>

              <div class="col">
                <label for="type" class="form-label">Type:</label>
                  <input type="text" id="type" class="form-control" name="type" placeholder="Enter Type" required>
              </div>
              
              </div>
             <br>
              <div >
               <h5> Do you want to Edit the profile? 
                <a href="userlist.php" class="btn btn-dark">No</a>
                <button type="submit" name="userlist" class="btn btn-primary">Yes</button></h5>
              </div> 
             
                 
            </form>
            </div>
            <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
