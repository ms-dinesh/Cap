
<?php
include ('includefiles/header.php');
include ('includefiles/navbar.php');

include 'databasecourse.php';
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800" style="font-size:28px">Dashboard</h1>
                      </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- No of students Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Number of Students </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            
                                            <?php
                                             $query = " SELECT `ID` FROM `studenttable` ORDER BY `ID` ";
                                             $query_run = mysqli_query($dbinsert,$query);

                                             $row = mysqli_num_rows($query_run);
                                             echo '<h4>'. $row .'</h4>';
                                            ?>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa fa-users fa-2x text-gray-400"></i>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Courses list Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Course offered</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                             $query = " SELECT `ID` FROM `coursetable` ORDER BY `ID` ";
                                             $query_run = mysqli_query($dbinsert,$query);

                                             $row = mysqli_num_rows($query_run);
                                             echo '<h4>'. $row .'</h4>';
                                            ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-leanpub fa-2x text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- batches Card-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Number of Batchs
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                    <?php
                                                        $query = " SELECT `ID` FROM `tablebatch` ORDER BY `ID` ";
                                                        $query_run = mysqli_query($dbinsert,$query);

                                                        $row = mysqli_num_rows($query_run);
                                                        echo '<h4>'. $row .'</h4>';
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <!-- <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 74%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-modx fa-2x text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- placed students Card  -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Centers </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                             $query = " SELECT `NAME` FROM `addcenter` ORDER BY `NAME` ";
                                             $query_run = mysqli_query($dbinsert,$query);

                                             $row = mysqli_num_rows($query_run);
                                             echo '<h4>'. $row .'</h4>';
                                            ?>
                                            
                                            
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-graduation-cap fa-2x text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Course Progress</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Batch-05 <span
                                            class="float-right">20%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Batch-04 <span
                                            class="float-right">40%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Batch-03 <span
                                            class="float-right">60%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Batch-02 <span
                                            class="float-right">80%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Batch-01 <span
                                            class="float-right">Complete!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Upcoming Events Notepad</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="img/undraw_posting_photo.svg" alt="...">
                                    </div>
                                    <p>1.Add some quality, svg illustrations to your project courtesy of unDraw 
                                    
                                       2. a constantly updated collection of beautiful svg images that you can use

                                       3. completely free and without attribution!</p>
                                    <!-- <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
                                        unDraw &rarr;</a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php

include ('includefiles/script.php');

include ('includefiles/footer.php');
?>