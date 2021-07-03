
<?php
include ('includefiles/header.php');
include ('includefiles/navbar.php');
include ('includefiles/script.php');

include 'databasecourse.php';
?>
<style>
h4{
  color: black;
  font-weight: 600;
  text-align: center;


}

</style>

<h4>Add Center Details</h4>
<div class="jumbotron">

<div class="container">
<?php

if(isset($_SESSION['success']) ){
echo '<h2>'.$_SESSION['success'].'</h2>';
unset($_SESSION['success']);
}
?>
<form action="centercode.php" method="POST">
 <div class="form-group mb-4">
    <div class="row">

        <div class="col-sm-4">
        <label for="name" class="form-label"> Name</label>
        <input type="text" id="name" class="form-control" name="name" placeholder="Enter Name" required>
        </div>

        <div class="col-sm-4">
        <label for="yoi" class="form-label">year of inspection</label>
        <input type="date" id="yoi" class="form-control" name="yoi" placeholder="year of inspection" required>
        </div>

        <div class="col-sm-4">
        <label for="status" class="form-label">Status</label>
        <input type="text" id="status" class="form-control" name="status" placeholder="type of status" required>
        </div>

        <div class="col-sm-4">
        <label for="address" class="form-label">Address</label>
        <input type="text" id="add" class="form-control" name="address" placeholder="Enter address" required>
        </div>

        <div class="col-sm-4">
        <label for="donar" class="form-label">Donar</label>
        <input type="text" id="donar" class="form-control" name="donar" placeholder="Enter donar name" required>
        </div>
    </div>
 </div>
      <div>
         <a href="centerlist.php" class="btn btn-dark">cancel</a>
        <button type="submit" name="centerlist" class="btn btn-primary">save</button>
      </div>
 </form>
 </div>
 </div>