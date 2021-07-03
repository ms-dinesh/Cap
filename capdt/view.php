<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<?php
include 'databasecourse.php';


include ('includefiles/header.php');
include ('includefiles/navbar.php');

include ('includefiles/script.php');

?>
<style>

th{
  color: white;

}

td,h4{
  color:black;

}

</style>


<div class="container">
<div class="card md-4">


<div class="card-header">

<h4 style="text-align:center">New Joining Report</h4>

</div>

<div class="card-body">
<?php
if(isset($_SESSION['hef12'])){
    echo '<h2>'.$_SESSION['hef12'].'</h2>';
    unset($_SESSION['hef12']);
}
if(isset($_SESSION['md2'])){
    echo '<h2>'.$_SESSION['md2'].'</h2>';
    unset($_SESSION['md2']);
}
?>


<div class="table-responsive">

                             
</div>
<?php
$query="SELECT * FROM `viewtable1`";

$res=mysqli_query($dbinsert,$query);

?>
<table class="table table-bordered">
    
  <thead class="bg-dark">
                                <th>ID</th>
                               <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Registered</th>
                                <th>status</th>
                               
                             </thead>
                            <tbody>
                            
                            <?php
if(mysqli_num_rows($res)>0){
  while($r1=mysqli_fetch_assoc($res)){
  
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
echo $r1['Email'];
?>
</td>
<td>
<?php
echo $r1['Mobile'];
?>
</td>
<td>
<?php
echo $r1['Registered'];
?>
</td>
<td>
<?php
echo $r1['Status'];
?>
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
