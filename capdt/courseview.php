
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
h3{
  color:black;
  text-align:center;
}
</style>


<div class="jumbotran">
    <?php
    if(isset($_POST['view_btn'])){
        $id=$_POST['view_id']; 

        $sel1="SELECT * FROM `coursetable` WHERE ID='$id'";
        $res=mysqli_query($dbinsert,$sel1);

    ?>
    <div class="container">
          <div class="card">
            <div class="card-header bg-dark">
            <h3  style="color:white;">Course Description</h3>
            </div>
              <?php
                if(mysqli_num_rows($res)>0){
                while($r1=mysqli_fetch_assoc($res)){
                  
              ?>

        <div class="card-body">
            <table class="table table-bordered" width="100%" cellspacing="0">
            <thead class="text-center">
            <div class="text-center">
            </thead>
            <br>
            <thead>
            <th>Course Name</th>
            <th> <?php echo $r1['Course Name']; ?> </th>
            </thead>

            <tbody> 


            <tr>
            <td>
            Course Duration
            </td>
            <td>
            03-Months (90 days)
            </td>
            </tr>

            <tr>
            <th>
            Course
            </th>
            <th>
             Course Schematic
            </th>
            </tr>
             
            <tr>
            <td>
             Soft-Skills
            </td>
            <td>
              1. Basic Grammer part <br>
              2. Interpersonal Skillsbr <br>
              3. Mock Interviews
            </td>
            </tr>

            <tr>
            <td>
             Web Designing
            </td>
            <td>
              1. Concepts of Web Technologies <br>
              2. Classes on PHP, Javascript ,Angular Course <br>
              3. Projects on every technology
            </td>
            </tr>
            
            <tr>
            <td>
             ITES-BPO
            </td>
            <td>
              1. Basic Knowledge of Computer <br>
              2. Typing Skills <br>
              3. Spoken English
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
    </div>
</div>