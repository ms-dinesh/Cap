
 <style>
 #ab{
     font-size:20px;
     height:50px;
     width:50px;
     display:inline;
     border-radius:50%;
     float:left;
     margin-left: 4px;
 }
 th{
  color: white;
 }
 h4,td{
   color: black;
 }
 
 </style>
<?php 

include 'databasecourse.php'; 
include 'includefiles/header.php'; 
include 'includefiles/navbar.php';
include 'includefiles/script.php';


?> 
<div class="container"> 
<div class="card mb-4"> 
      
 <div class="card-header">

  <h4 style="text-align:center" class="font-weight: 700 ">Course List</h4>

 </div>
 <div class="card-body"> 

 <!-- session part -->
 <div class="container">

 <?php if(isset($_SESSION['success']) ){
        echo '<h2>'.$_SESSION['success'].'</h2>'; 
          unset($_SESSION['success']); 
        }
         if(isset($_SESSION['status']) ){
                echo '<h2>'.$_SESSION['status'].'</h2>';
                   unset($_SESSION['status']);
                 } 
                 ?>
 
 <?php
    if(isset($_SESSION['success']) ){
        echo '<h2>'.$_SESSION['success'].'</h2>'; 
          unset($_SESSION['success']); 
        }
         if(isset($_SESSION['status']) ){
                echo '<h2>'.$_SESSION['status'].'</h2>';
                   unset($_SESSION['status']);
                 } 
 
?> 
<?php if(isset($_SESSION['success']) ){
        echo '<h2>'.$_SESSION['success'].'</h2>'; 
          unset($_SESSION['success']); 
        }
         if(isset($_SESSION['status']) ){
                echo '<h2>'.$_SESSION['status'].'</h2>';
                   unset($_SESSION['status']);
                 } 
                 ?>
</div>
 
 
<div class="table-responsive"> 
<?php 
 
$query="SELECT * FROM `coursetable` ";
 $res=mysqli_query($dbinsert,$query);
//   print_r($res); 
 
?> 
<table class="table table-bordered"> 
<thead class="bg-dark"> 

<th>ID</th> 
<th>Course Name</th> 
<th>Actions</th> 

 </thead > 
 <tbody>
  <?php
   if(mysqli_num_rows($res)>0){
        while($r1=mysqli_fetch_assoc($res)){
            
 
?> 
<tr> 
 <td> <?php echo $r1['ID']; ?> </td>
 <td> <?php echo $r1['Course Name']; ?> </td> 
 
 
 <td> 

 <div class="btn-group p-auto mx-auto">
 <form action="courseview.php" method="post"> 
 <input type="hidden" name="view_id" value="<?php echo $r1['ID']?>"> 
 <button type="submit" id="ab" name="view_btn" class="btn btn-outline-primary">
 <i class="fa fa-eye" aria-hidden="true" ></i></button>
</form> 
</div>

 <div class="btn-group p-auto mx-auto">
 <form action="editcourse.php" method="post"> 
 <input type="hidden" name="edit_id" value="<?php echo $r1['ID']?>"> 
 <button type="submit" id="ab" name="edit_btn" class="btn btn-outline-success">
 <i class="fa fa-pencil-square-o" aria-hidden="true" ></i></button>
</form> 
</div>

<div class="btn-group p-auto mx-auto">
<form action="Course logic.php" method="POST"> 
<input type="hidden" name="del_id" value="<?php  echo $r1['ID'];  ?>"> 
<button class="btn btn-outline-danger " id="ab" name="del" type="submit">
<i class="fa fa-trash" aria-hidden="true" ></i>
</button> 
</form> 
</div>
</td>
 
 </tr> 
 <?php
  }
 } 
 
?>
 </tbody> 
 </table> 
 </div> 
 </div> 
 </div> 
 </div> 
