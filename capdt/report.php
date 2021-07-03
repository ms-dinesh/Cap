
<?php
include ('includefiles/header.php');
include ('includefiles/navbar.php');

include ('includefiles/script.php');
include 'databasecourse.php';
?>   

<style>
#ab{
    font-size: 20px;
    height:40px;
    width:60px;
    display:inline;
    border-radius:20%;
    float:left;
    justify-content:space-between;
}
th{
  color:white  ;
}
td,h6{
  color: black  ;
}
</style>

<?php
include 'databasecourse.php';

?>
<div class="container">
<div class="card md-4">
<div class="card-header">
<h6>
Add a new report here:
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Click to Add
</h6>
</button>
</div>
</div>
<div class="card-body">
<?php
if(isset($_SESSION['success1'])){
    echo '<h2>'.$_SESSION['success1'].'</h2>';
    unset($_SESSION['success1']);
}
if(isset($_SESSION['status2'])){
    echo '<h2>'.$_SESSION['status2'].'</h2>';
    unset($_SESSION['status2']);
}
?>


<div class="table-responsive">
<?php
$query="SELECT * FROM `reporttable`";
$res=mysqli_query($dbinsert,$query);

?>

<table class="table table-bordered">
<thead class="bg-dark" >
<th>ID</th>
<th>Name</th>
<th>Actions</th>
</thead>
<tbody>


<?php
if(mysqli_num_rows($res)>0){
  while($r1=mysqli_fetch_assoc($res)){
   // echo $r1['ID'],"<br>";
   // echo $r1['Username'],"<br>";
    //echo $r1['Password'],"<br>";
?>
<tr>
<td>
<?php
echo $r1['ID'];
?>
</td>
<td>
<?php
echo $r1['Name'];
?>
</td>
<td>
<?php
echo $r1['Actions'];
?>

<form action="view.php" method="post">
<input type="hidden" name="edit_id" value="<?php echo $r1['ID']?>">
<button type="submit" name="edit_btn"id="ab" class="btn btn-outline-primary"><i class="fa fa-pencil "></i></button>

</form>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Student details Form:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=" code.php" method="POST">
        <div class="form-group">
        <input class="form-control" type="text" name="id" placeholder="Enter Id">
        </div>
        <div class="form-group">
        <input class="form-control" type="text" name="user1" id=""  placeholder="Enter user name">
        </div>
        <div class="form-group">
        <input class="form-control" type="text" name="user2" id="" placeholder="Enter Email">
      </div>
     

      <div class="form-group">
        <input class="form-control" type="text" name="user3" id="" placeholder="Enter  Mobile Number">
      </div>

      <div class="form-group">
        <input class="form-control" type="text" name="user4" id="" placeholder="Enter Registered date">
      </div>

      <div class="form-group">
        <input class="form-control" type="text" name="user5" id="" placeholder="Enter Status">
      </div>
      </div>    
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit"  name="r1" class="btn btn-primary">Save changes</button>
      </div>
        </div>

    
    
      </form>
    </div>
  </div>
</div>




