
<?php

include ('includefiles/header.php');
include ('includefiles/navbar.php');

include ('includefiles/script.php');
include 'databasecourse.php';

?>

  <style>
    #ab{
        font-size: 20px;
        height: 40px;
        width: 40px;
        display : inline;
        border-radius: 50%;
        float: left;
        margin-left: 6px; 
    }
    tr { 
      color: black;
    }
    th{
      color: white;
    }
        
    </style>
</head>
<body>

<div class="container">
<button class="btn btn-primary my-2"> <a href="addbatch.php" class="text-light text-decoration-none"> Add New Batch</a></button>
<?php
if(isset($_SESSION['success']) ){
 echo '<h6>'.$_SESSION['success'].'</h6>';
 unset($_SESSION['success']);
}
if(isset($_SESSION['status']) ){
 echo '<h6>'.$_SESSION['status'].'</h6>';
 unset($_SESSION['status']);
}

?>
<?php
            if(isset($_SESSION['pp'])){
              echo '<h6>'.$_SESSION['pp'].'</h6>';
              unset($_SESSION['pp']);
              }
              if(isset($_SESSION['pp2'])){
                echo '<h6>'.$_SESSION['pp2'].'</h6>';
                unset($_SESSION['pp2']);
                }
            ?>

<?php
            if(isset($_SESSION['ps'])){
              echo '<h6>'.$_SESSION['ps'].'</h6>';
              unset($_SESSION['ps']);
              }
              if(isset($_SESSION['ps2'])){
                echo '<h6>'.$_SESSION['ps2'].'</h6>';
                unset($_SESSION['ps2']);
                }
            ?>

<div class="table-responsive">
<?php
$query=" SELECT * FROM `tablebatch` WHERE `ID`";
$res=mysqli_query($dbinsert,$query);

?>

<table class="table table-bordered text-center" width="100%" cellspacing="0">
<h3 class="text-center">Lists of Batches</h3>
<br>
<thead class="bg-dark ">
<!-- <th>ID</th> -->
<th>Batch Name</th>
<th>No of Students</th>
<th>Center Name</th>
<th>Course for Batch</th>
<th>Actions</th>
</thead>
<tbody>
<?php
if(mysqli_num_rows($res)>0){
while($row=mysqli_fetch_assoc($res)){

?>
<tr>

<td>
<?php
echo $row['Name'];
?>
</td>
<td>
<?php
echo $row['No_of_students'];
?>
</td>
<td>
<?php
echo $row['Center'];
?>
</td>
<td>
<?php
echo $row['Course'];
?>
</td>

<td>
<form action="batchedit.php" method="POST">
<input type="hidden" name="edit_id" value="<?php echo $row['ID']?>">
<button type="submit" id="ab" name="edit" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></button>
</form>

<form action="batchcode.php" method="POST">
<input type="hidden" name="delete_id" value="<?php echo $row['ID'] ?> " >
<button class="btn btn-danger" id="ab" name="delete" type="submit" ><i class="fa fa-trash" aria-hidden="true"></i></button>
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
    
