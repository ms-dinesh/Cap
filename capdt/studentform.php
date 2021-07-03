
<?php
include ('includefiles/header.php');
include ('includefiles/navbar.php');

include ('includefiles/script.php');

include 'databasecourse.php';
?>
<div class="container">
<div class="bg-dark text-center py-3">
<b><h2 class="text-white ">Student Registration Form<i class="fa fa-user-circle fa-1x" aria-hidden="true"></i></h2></b>
</div></div>

<?php
if(isset($_SESSION['success'])){
  echo '<h2>'.$_SESSION['success'].'</h2>';
  unset($_SESSION['success']);
}
if(isset($_SESSION['status'])){
  echo '<h2>'.$_SESSION['status'].'</h2>';
  unset($_SESSION['status']);
}
?>

<div class="container">
<form action="studentcode.php" method="POST" enctype="multipart/form-data">
  <div class="container ">

<div class="row">
<div class="col-sm-6">
<br>
 <p>fill up the form with correct values</p>

  <hr class="mb-3">
  <label for="userid"><b>Student ID</b></label>
  <input class="form-control" placeholder="Enter Student ID" type="hidden" name="id" >

  <label for="img"><b>Uploadimage</b></label>
  <input class="form-control" placeholder="Select Image" type="file" name="img" required >
  
  
  <label for="firstname"><b>First name</b></label>
  <input class="form-control" placeholder="Enter First Name" type="text" name="first" required >
  
  <label for="lirstname"><b>Last name</b></label>
  <input class="form-control" placeholder="Enter Last Name" type="text" name="last" required >

  <label for="lirstname"><b>Father name</b></label>
  <input class="form-control" placeholder="Enter Father Name" type="text" name="fathername" >

  <label for="lirstname"><b>Mother name</b></label>
  <input class="form-control" placeholder="Enter Mother Name" type="text" name="mothername" >
  
  <label for="dob"><b>DOB</b></label>
  <input class="form-control" placeholder="Select DOB" type="date" name="dob" required>
  
  <label for="gender"><b>Gender</b></label>
  <input class="form-control" placeholder="Enter Gender" type="type" name="gender" required>

<label for="email address"><b>Email</b></label>
  <input class="form-control" placeholder="Enter Email ID" type="email" name="email" required>

  <label for="mobile no"><b>Mobile no</b></label>
  <input class="form-control" placeholder="Enter Mobile No" type="text" name="no" required>

  

<br>
        <button type="submit" class="btn btn-success" name="create">Submit</button>
        
       
        <form action="studentform.php" method="POST">
<button type="submit" name="del" id="ab" class="btn btn-dark">close</button>
</form>
</div>
</hr>
  
  </form>
 </div>
