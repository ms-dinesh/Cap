<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<?php

include 'databasecourse.php'; 
include 'includefiles/header.php'; 
include 'includefiles/navbar.php';
?>

<style>
.input:focus {
    outline: none !important;
    border:1px solid red;
    box-shadow: 0 0 10px #719ECE;
    cursor: pointer;

}
h4{
    color: black;
}
</style>
<div class="container">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col text-center p-3">
<form action="Course logic.php" method="POST">
<div class="form-group p-auto m-auto">
        <div class="lable p-3 m-auto">

        <h4>Adding a New Course</h4></div>
        
        <input class="form-control" type="text" name="id" id="" placeholder="Enter ID value">
              <div>
        <br>
        <div class="form-group">
        <input class="form-control" type="text" name="course" id="" placeholder="Name" required >
       
        </div>

<button type="submit" name="r1" class="btn btn-success" >Save</button>

<a href="Course list.php" class="btn btn-info">Cancel</a>
                                        
</form>

</div>

</div>
</div>

</div>
</div>



</div>
</div>







    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="an onymous"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.m in.js" integrity="sha384ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="an onymous"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="an onymous"></script> 
 
    
                                       