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
<button class="btn btn-primary my-2"> <a href="insert.php" class="text-light text-decoration-none"> Add Employee</a></button>
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
$query=" SELECT * FROM `details` ";
$res=mysqli_query($dbinsert,$query);
// print_r($res);
?>

<table class="table table-bordered text-center" width="100%" cellspacing="0">
<h3 class="text-center">Lists of Employees</h3>
<br>
<thead class="bg-dark ">
<th>ID</th>
<th>Name</th>
<th>Mobile</th>
<th>Email</th>
<th>Role</th>
<th>Type</th>
<th>Actions</th>
</thead>
<tbody>
<?php
if(mysqli_num_rows($res)>0){
while($userlist=mysqli_fetch_assoc($res)){

?>
<tr>
<td>

<?php
echo $userlist['ID'];
?>
</td>
<td>
<?php
echo $userlist['Name'];
?>
</td>
<td>
<?php
echo $userlist['Mobile'];
?>
</td>
<td>
<?php
echo $userlist['Email'];
?>
</td>
<td>
<?php
echo $userlist['Role'];
?>
</td>
<td>
<?php
echo $userlist['Type'];
?>
</td>
<td>

<form action="edit1.php" method="POST">
<input type="hidden" name="e_id" value="<?php echo $userlist['ID']?>">
<button type="submit" id="ab" name="e_btn" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></button>
</form>

<form action="code1.php" method="POST">
<input type="hidden" name="delete_id" value="<?php echo $userlist['ID'] ?> " >
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

