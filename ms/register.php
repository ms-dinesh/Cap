<?php
include 'database.php';
session_start();
 
include 'includefiles/header.php';
include 'includefiles/navbar.php';

?>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<style>
#ab{
    font-size: 20px;
      height: 5opx;
      width: 50px;
    display: inline;
    border-radius: 50%;
    float: left;
    align-item: center;
    justify-content: space-between;
  }

</style>




<div class="container">
  <div class="card">
        <div class="card-header">
            <h6>Admin profiles     
                <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                Add Admin
            </button>
            </h6>   
        </div>    

          <div class="card-body">
          <!-- session part -->
          <div class='container'>
          <?php 
          if(isset($_SESSION['success'])){
          echo '<h6>'.$_SESSION['success'].'</h6>';
          unset($_SESSION['success']);
          }
          if(isset($_SESSION['status'])){
            echo '<h6>'.$_SESSION['status'].'</h6>';
            unset($_SESSION['status']);
            }
          ?>
          <?php
            if(isset($_SESSION['msd4'])){
              echo '<h6>'.$_SESSION['msd4'].'</h6>';
              unset($_SESSION['msd4']);
              }
              if(isset($_SESSION['ms4'])){
                echo '<h6>'.$_SESSION['ms4'].'</h6>';
                unset($_SESSION['ms4']);
                }
            ?>
            
          <?php
            if(isset($_SESSION['msd1'])){
              echo '<h6>'.$_SESSION['msd1'].'</h6>';
              unset($_SESSION['msd1']);
              }
              if(isset($_SESSION['ms1'])){
                echo '<h6>'.$_SESSION['ms1'].'</h6>';
                unset($_SESSION['ms1']);
                }
            ?>
            </div>

             <!-- Table -->
                <div class="table-responsive">
                  <!-- retrieve -->
                  <?php
                  $query = " SELECT * FROM `state` WHERE `SN` ";
                  
                  $query_run = mysqli_query($dbinsert,$query);
                  ?>
                    <table class=" table table-bordered">
                            <thead>
                               <!-- <th>S.No</th> -->
                                <th>User ID</th>
                                <th>Password</th>
                                <th>Actions</th>
                                
                                <th>Status</th>
                              
                             </thead>
                            <tbody>


                            <?php
                            if(mysqli_num_rows($query_run) > 0){
                              while($row = mysqli_fetch_assoc($query_run)){
                              
                            ?>
                            
                            <tr>
                                <td> <?php echo $row['userid']; ?></td>
                                <td> <?php echo $row['passcode']; ?> </td>
                              
                                <td>
                                  <form action="editregister.php" method="POST">
                                  <input type="hidden" name="edit_value" value="<?php echo $row['SN'] ?> ">
                                  <button type="submit" id="ab" class="btn btn-outline-dark" name="edit_btn" ><i class="fa fa-pencil text-success"></i></button>
                                </form>
              
                                <form action="code.php" method="post">
                                  <input type="hidden" name="delt_value" value="<?php echo $row['SN'] ?> " >
                                  <button class="btn btn-outline-dark" id="ab" name="del_btn" type="submit" ><i class="fa fa-trash text-danger"></i></button>
                                  </form>
                                </td>
                                  
                                <td>
                                  
                                    <input type="text" name="status" value="<?php echo $row['status'] ?> ">
                                    <button class="btn btn-dark act" name="btn_status">activate</button>
                                </td>
                            </tr>
                            </tbody>
                           
                            <?php
                            }
                            }
 
                            ?>
                    </table>
                </div>
          </div>
  </div>
</div>


<!-- Modal -->

<div class="modal fade" id="exampleModalLong" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Enter Admin Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="code.php" method="POST" >
        <div class="form-group">
              <?php
                 if(isset($_SESSION['hack'])){
                  echo '<h6>'.$_SESSION['hack'].'</h6>';
                  unset($_SESSION['hack']);
                  }

              ?>
          <input class="form-control" type="hidden" name="a_sn" placeholder="SN">
        </div>
        <div class="form-group">
          <input class="form-control" type="text" name="a_id" placeholder="User ID">
        </div>
        <div class="form-group">
          <input class="form-control" type="text" name="a_pcode" placeholder="Password">
        </div>
        
        <div class="form-group">
          <input class="form-control" type="text" name="a_status" placeholder="status">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="insert" class="btn btn-primary">Insert</button>
        </div>
        
        </form>
      </div>
      
    </div>
    

  </div>

</div>

</div>


<?php
include ('includefiles/script.php');
include ('includefiles/footer.php');
?>
