
<?php
include ('includefiles/header.php');
include ('includefiles/navbar.php');

include ('includefiles/script.php');

include 'databasecourse.php';
?>

<style>

#ab{
  /* font-size: 20px; */
  height: 200px;
  width:200px;
  display: inline;
  border-radius: 50%;
  float: center;
  align-item: center;
  justify-content: space-between;

}
</style>


<div class="table table-responsive">
<?php
if(isset($_POST['view_btn'])){
    $id=$_POST['view_id']; 
    // echo ($id); 
  
$sel1="SELECT * FROM `studenttable` WHERE ID='$id'";
$res=mysqli_query($dbinsert,$sel1);

?>
<div class="container">
<div class="bg-dark text-center py-3 my-2">
<b><h2 class="text-white "> View the Student Personal Details <i class="fa fa-user-circle fa-1x" aria-hidden="true"></i></h2></b>
</div>
<?php
if(mysqli_num_rows($res)>0){
  while($r1=mysqli_fetch_assoc($res)){
    
  ?>

<div class="jumbotron">
<table class="table table-bordered" width="100%" cellspacing="0">
<thead class="text-center">
<div class="text-center">
<?php 
  echo '<img id="ab" src="pictures/'.$r1['Img'].'" alt="">'
  ?></div>
</thead>
<br>
<thead>
<th>Student First Name</th>
<th> <?php echo $r1['Firstname']; ?> </th>
</thead>
<thead>
<th>Student Last Name</th>
<th> <?php echo $r1['Lastname']; ?> </th>
</thead>
<tbody> 

<tr>
<td>
 Father Name
</td>
<td>
<?php echo $r1['Fathername']; ?>
</td>
</tr>

<tr>
<td>
 Mother Name
</td>
<td>
<?php echo $r1['Mothername']; ?>
</td>
</tr>

<tr>
<td>
 Date of Birth
</td>
<td>
<?php echo $r1['DOB']; ?>
</td>
</tr>

<tr>
<td>
 Gender
</td>
<td>
<?php echo $r1['Gender']; ?>
</td>
</tr>

<tr>
<td>
 Email ID
</td>
<td>
<?php echo $r1['Email']; ?>
</td>
</tr>

<tr>
<td>
 Mobile Number
</td>
<td>
<?php echo $r1['Mobile_no']; ?>
</td>
</tr>


<?php
}
}
}
?>
</tbody>


</table>

<hr>
<div class="text-center">
<a href="Course list.php" class="btn btn-dark">Close </a>
</div>

</div>
