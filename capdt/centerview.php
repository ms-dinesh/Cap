
<?php
include ('includefiles/header.php');
include ('includefiles/navbar.php');
include ('includefiles/script.php');

include 'databasecourse.php';
?>
<style>
thead{
    color: skyblue;
}
th{
     color: white;
 }
h4{
    color: black;
    text-align: center;
}


</style>

 <h4>Office Staff Details</h4>
 <br>
<div class="container">
<div class="container">
<div class="table-responsive">
<?php

if(isset($_POST['view_btn'])){
    $id=$_POST['view']; 

$query="SELECT * FROM `centerdetails` ";
$res=mysqli_query($dbinsert,$query);
}
?>
<table class=" table table-bordered text-center" width="100%" cellspacing="0">
<thead class="bg-dark">
    <th>Name</th>
    <th>Mobile Number</th>
    <th>Email</th>
    <th>Department</th>
    <th>Role </th>
</thead>
<tbody>
    <?php
    if(mysqli_num_rows($res)>0){
    while($center=mysqli_fetch_assoc($res)){
    ?>
    <tr>

    <td>
    <?php
    echo $center['Name'];
    ?>
    </td>
    <td>
    <?php
    echo $center['Mobile Number'];
    ?>
    </td>
    <td>
    <?php
    echo $center['Email id'];
    ?>
    </td>

    <td>
    <?php
    echo $center['Department'];
    ?>
    </td>
    <td>
    <?php
    echo $center['Role'];
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