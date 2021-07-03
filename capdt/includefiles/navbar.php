<?php
session_start();

?>

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon"> 

                    <img src="msd.jpg" style="height: 60px; width: 180px;">
                
                </div>
                <!-- <div class="sidebar-brand-text mx-3">CapitaLand <sub>Foundation</sub></div> -->
            
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fa fa-table"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Student Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#hack1"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>Student Portal</span>
                </a>
                <div id="hack1" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Student:</h6>
                        <a class="collapse-item" href="studentform.php"><i class="fa fa-user-plus"></i><span> Add Student </span></a>
                        <a class="collapse-item" href="studentlist.php"><i class="fa fa-list-ul"></i><span> Student List</span></a>
                    </div>
                </div>
            </li>

           <!-- Nav Item - Center Collapse Menu -->
           <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#hack2"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa fa-map"></i>

                    <span>Center</span>
                </a>
                <div id="hack2" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Center:</h6>
                        <a class="collapse-item" href="addcenter.php"><i class="fas fa-location-arrow"></i> <span>  Add Center </span></a>
                        <a class="collapse-item" href="centerlist.php"><i class="fas fa-map-signs"></i><span> Center List</span></a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - BATCH Collapse Menu -->
           <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#hack3"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa fa-modx"></i>

                    <span>Batch</span>
                </a>
                <div id="hack3" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Batches:</h6>
                        <a class="collapse-item" href="addbatch.php"><i class="fa fa-pencil-square"></i><span> Create Batch </span></a>
                        <a class="collapse-item" href="batchlist.php"><i class="fa fa-list-ul"></i><span> Batch List</span></a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - COURSE Collapse Menu -->
           <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#hack4"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa fa-leanpub"></i>

                    <span>Course</span>
                </a>
                <div id="hack4" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Course:</h6>
                        <a class="collapse-item" href="Course.php"><i class="fa fa-pencil-square"></i><span> Add Course </span></a>
                        <a class="collapse-item" href="Course list.php"><i class="fa fa-list-ul"></i><span> Course Details</span></a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - REPORT Collapse Menu -->
           <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#hack5"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa fa-shirtsinbulk"></i>

                    <span>New Joinee</span>
                </a>
                <div id="hack5" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Student:</h6>
                        <a class="collapse-item" href="report.php"><i class="fa fa-pencil-square"></i><span>New Reports</span></a>
                        <a class="collapse-item" href="view.php"><i class="fa fa-list-ul"></i><span> Report List</span></a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - STAFF Collapse Menu -->
           <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#hack6"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa fa-slideshare"></i>

                    <span>Staff</span>
                </a>
                <div id="hack6" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Student:</h6>
                        <a class="collapse-item" href="insert.php"><i class="fa fa-pencil-square"></i><span> Add Staff </span></a>
                        <a class="collapse-item" href="userlist.php"><i class="fa fa-list-ul"></i><span> Staff Details</span></a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                About
            </div>

            
            <!-- Nav Item - gallery -->
            <li class="nav-item">
                <a class="nav-link" href="gallary.php">
                    <i class="fas fa-picture-o"></i>
                    <span>Gallery</span></a>
            </li>

          
            <!-- Nav Item - Tables
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

       
        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                    aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search"
                                aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
            
            <div>
            <img src="nirman.png" style="height:60px">
            
            </div>
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                    
                    Hello, <?=

                    $_SESSION['userid'];

                    ?>
                
                    </span>
                    <img class="img-profile rounded-circle"
                        src="img/undraw_profile.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <!-- <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Activity Log
                    </a> -->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="signin.php">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-600"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->

