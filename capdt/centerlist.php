
<?php
include ('includefiles/header.php');
include ('includefiles/navbar.php');
include ('includefiles/script.php');

include 'databasecourse.php';
?>

 <style>
 #ab{
 font-size: 20px;
 height: 50px;
 width: 50px;
 display : inline;
 border-radius: 50%;
 float: left;
 margin-left: 10px;
 }
 h4{
    color: black;
    text-align: center;
 }
 th{
     color: white;
 }
 </style>

<div class="container">
     
     <h4>Branch Details</h4>
    <br><br>
    <div class="table-responsive">
        <?php
        $query=" SELECT * FROM `addcenter` ";
        $res=mysqli_query($dbinsert,$query);

        ?>

        <table class="table table-bordered text-center" width="100%" cellspacing="0">
        <thead class="bg-dark">
        <th>Name</th>
        <th>Year of Inspection</th>
        <th>Status</th>
        <th>Address</th>
        <th>Donar</th>
        <th>Action</th>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($res)>0){
        while($centerlist=mysqli_fetch_assoc($res)){

        ?>
        <tr>
        <td>
        <?php
        echo $centerlist['Name'];
        ?>
        </td>

        <td>
        <?php
        echo $centerlist['Year of inspection'];
        ?>
        </td>

        <td>
        <?php
        echo $centerlist['Status'];
        ?>
        </td>

        <td>
        <?php
        echo $centerlist['Address'];
        ?>
        </td>

        <td>
        <?php
        echo $centerlist['Donar'];
        ?>
        </td>

        <td>

        <div class="btn-group p-auto mx-auto">
        <form action="centerview.php" method="post"> 
        <input type="hidden" name="view" value="<?php echo $centerlist['Name']?>"> 
        <button type="submit" id="ab" name="view_btn" class="btn btn-outline-primary">
        <i class="fa fa-eye" aria-hidden="true" ></i></button>
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
