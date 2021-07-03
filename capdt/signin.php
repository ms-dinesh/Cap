<?php
session_start();
include 'includefiles/header.php';

?>


<body class="bg-gradient-DARK">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-8  col-lg-8 col-md-8">

                <div class="card o-hidden border-0 shadow-lg my-5  mx-5">
                    <div class="card-body py-2">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome to CapitaLand </h1>
                                    </div>
                                    <hr>
                                    <form class="user" action="codemain.php" method="POST">
                                        <div class="form-group">
                                            <input type="hidden" name="log_unq" class="form-control form-control-user"
                                                placeholder="SNo">
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" name="log_user" class="form-control form-control-user"
                                                placeholder="Enter User ID" required>
                                        </div>
                                        <div class='container'>
                                        <?php
                                        
                                        if(isset($_SESSION['status'])){

                                            echo '<h6>'.$_SESSION['status'].'</h6>';
                                            unset($_SESSION['status']);
                                        }
                                        ?>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" name="log_pass" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" required>
                                        <br>
                                        <button name="btn_login" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        
                                        
                                    </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


<?php
include  'includefiles/script.php';
?>