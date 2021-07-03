
<?php
include ('includefiles/header.php');
include ('includefiles/navbar.php');

include ('includefiles/script.php');

include 'databasecourse.php';
?>
<style>
img{
  width: 70px;
  height: 70px;
}
#img img{
  width: 150px;
  height: 150px;
}
#ab{
  font-size: 20px;
  height: 50px;
  width:50px;
  display: inline;
  border-radius: 50%;
  float: left;
  align-item: center;
  justify-content: space-between;

}
</style>



<?php
if(isset($_SESSION['abc'])){
  echo '<h2>'.$_SESSION['abc'].'</h2>';
  unset($_SESSION['abc']);
}
if(isset($_SESSION['abc2'])){
  echo '<h2>'.$_SESSION['abc2'].'</h2>';
  unset($_SESSION['abc2']);
}
?>

<div class="table table-responsive">
<?php
$sel="SELECT * FROM `studenttable`";
$res=mysqli_query($dbinsert,$sel);
?>
<div class="container">
<div class="bg-dark text-center py-3 my-2">
<b><h2 class="text-white ">Student Details List <i class="fa fa-user-circle fa-1x" aria-hidden="true"></i></h2></b>
</div>


<table class="table table-bordered" width="100%" cellspacing="0">
<thead>

<th>Photo</th>
<th>First_Name</th>
<th>Last_Name</th> 
<!-- <th>Father_Name</th>
<th>Mother_Name</th> -->

<th>DOB</th> 
<th>Gender</th>
<th>Email</th>
<th>Mobile No</th>
<!-- <th>Password</th> -->
<th>View Edit Delete Actions </th>

</thead>
<tbody> 

<?php
if(mysqli_num_rows($res)>0){
  while($r1=mysqli_fetch_assoc($res)){
    
  ?>

<tr>
<td>
  <?php 
  echo '<img src="pictures/'.$r1['Img'].'" alt="">'
  ?>
</td>
<td>
  <?php echo $r1['Firstname']; ?>
</td>
<td>
  <?php echo $r1['Lastname']; ?>
</td> 
<!-- <td>
  <?php echo $r1['fathername']; ?>
</td>
<td>
  <?php echo $r1['mothername']; ?>
</td> -->
<td>
  <?php echo $r1['DOB']; ?>
</td> 
<td>
  <?php echo $r1['Gender']; ?>
</td> 
<td>
  <?php echo $r1['Email']; ?>
</td>
<td>
  <?php echo $r1['Mobile_no']; ?>
</td>
 <!-- <td>
   <?php echo $r1['Password']; ?> 
</td> -->

<td>

<form action="studentview.php" method="POST">
<input type="hidden" name="view_id" value="<?php echo $r1['ID']; ?>">
<button type="submit" name="view_btn" id="ab" class="btn btn-outline-dark"><i class="fa fa-eye fa-1x text-success" aria-hidden="true"></i></button>
</form>

<form action="studentedit.php" method="POST">
<input type="hidden" name="edit_id" value="<?php echo $r1['ID']; ?>">
<button type="submit" name="edit_btn" id="ab" class="btn btn-outline-dark"><i class="fa fa-pencil fa-1x text-primary" aria-hidden="true"></i></button>
</form>

<form action="studentcode.php" method="POST">
<input type="hidden" name="del_id" value="<?php echo $r1['ID']; ?>">
<button type="submit" name="del" id="ab" class="btn btn-outline-dark"><i class="fa fa-trash fa-1x text-danger" aria-hidden="true"></i></button>
</form>
</td>

</tr>
<?php
}
}

?>
</tbody>

</table>

 <!-- Button trigger modal -->
</div>
