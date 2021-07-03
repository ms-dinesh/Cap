<?php

session_start();
include 'database.php';
 
include 'includefiles/header.php';
include 'includefiles/navbar.php';

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">



<div class="container">
  <div class="card">
        <div class="card-header">
            <h6>Student Data     
                <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                Add Student
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
            if(isset($_SESSION['msd'])){
              echo '<h6>'.$_SESSION['msd'].'</h6>';
              unset($_SESSION['msd']);
              }
              if(isset($_SESSION['ms'])){
                echo '<h6>'.$_SESSION['ms'].'</h6>';
                unset($_SESSION['ms']);
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
                  $query = " SELECT * FROM `students` ";
                  
                  $query_run = mysqli_query($dbinsert,$query);
                  ?>
                    <table class=" table table-bordered">
                            <thead>
                               <!-- <th>S.No</th> -->
                                <th>Profile</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>User ID</th>
                                <th>Password</th>
                                <th>Update</th>
                                <th>Delete</th>                              
                             </thead>
                            <tbody>

                            <?php
                            if(mysqli_num_rows($query_run) > 0){
                              while($re = mysqli_fetch_assoc($query_run)){
                              
                            ?>
                            
                            <tr>
                                <td> 

                                <?php
                                
                                echo '<img src="pics/'.$re['Profile'].'" width="50px;" height="50px;" >';
                                ?>
                                </td>

                                <td> <?php echo $re['Firstname']; ?></td>
                                <td> <?php echo $re['Lastname']; ?> </td>
                                <td> <?php echo $re['userid']; ?> </td>
                                <td> <?php echo $re['passcode']; ?> </td>
                              
                                <td>
                                  <form action="editregister2.php" method="POST">
                                  <input type="hidden" name="edit_std_value" value="<?php echo $re['SN'] ?> ">
                                  <button type="submit" class="btn btn-success" name="edit_std" >Update</button>
                                </form>
                                </td>
                                <td>
                                  <form action="code2.php" method="post">
                                  <input type="hidden" name="del_std_value" value="<?php echo $re['SN'] ?> " >
                                  <button class="btn btn-danger" name="del_std" type="submit" >Delete</button>
                                  </form>
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
        <h5 class="modal-title" id="exampleModalLongTitle">Enter Student Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="code2.php" method="POST" enctype="multipart/form-data" >
              <div class="form-group">
              <?php
                 if(isset($_SESSION['hack'])){
                  echo '<h6>'.$_SESSION['hack'].'</h6>';
                  unset($_SESSION['hack']);
                  }
              ?>
                <input class="form-control" type="hidden" name="a_sn2"  placeholder="S.No">
              </div>
              <div class="form-group">
                <input class="form-control" type="file" name="a_profile" id="pf_img" placeholder="">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" name="a_fname"  placeholder="First Name">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" name="a_lname"  placeholder="Last Name">
              </div>
              
              <div class="form-group">
                <input class="form-control" type="text" name="a_user"  placeholder="User ID">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" name="a_passcode" placeholder="Password">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="add" class="btn btn-primary">Insert</button>
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
