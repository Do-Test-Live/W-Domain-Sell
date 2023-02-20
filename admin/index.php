<?php
session_start();
include ('../config/db_config.php');
if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    header('Location: login.php');
}
$result = 0;
if(isset($_POST['submit_domain'])){
    $domain_name = mysqli_real_escape_string($con, $_POST['domain']);
    $insert_domain = $con->query("INSERT INTO `domain_list`(`domain_name`) VALUES ('$domain_name')");
    if($insert_domain){
        $result = 1;
    }else{
        $result = 2;
    }
}

?>


<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8"/>
    <title>NGT-Domain | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="NGT Domain Admin" name="description"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png">

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- preloader css -->
    <link rel="stylesheet" href="assets/css/preloader.min.css" type="text/css"/>

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css"/>

</head>

<body>

<!-- <body data-layout="horizontal"> -->

<!-- Begin page -->
<div id="layout-wrapper">


    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                        <h4 class="mb-sm-0 font-size-18 mt-3">NGT Domain</h4>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <h4 class="mb-sm-0 font-size-18 mt-3">NGT Domain</h4>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

            </div>

            <div class="d-flex">

                <div class="dropdown d-inline-block d-lg-none ms-2">
                    <button type="button" class="btn header-item" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="search" class="icon-lg"></i>
                    </button>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item bg-soft-light border-start border-end"
                            id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                             alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ms-1 fw-medium">Admin</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="logout.php"><i
                                class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <div data-simplebar class="h-100">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title" data-key="t-menu">Menu</li>

                    <li>
                        <a href="index.html">
                            <i data-feather="home"></i>
                            <span data-key="t-dashboard">Dashboard</span>
                        </a>
                    </li>

                </ul>


            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Admin</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">No of Requests</span>
                                        <h4 class="mb-3">
                                            <?php
                                            $select_data = $con->query("select count('id') as number from sell_data");
                                            if($select_data){
                                                while ($row=mysqli_fetch_assoc($select_data)){
                                                    $no_of_data = $row['number'];
                                                }
                                            }
                                            ?>
                                            <span class="counter-value" data-target="<?php echo $no_of_data?>">0</span>
                                        </h4>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                </div><!-- end row-->


                <div class="row mt-5">
                    <div class="col-lg-6">
                        <?php
                        if($result == 1){
                            ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Domain has been added successfully
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php
                        } elseif ($result == 2){
                            ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Something went wrong
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php
                        }
                        ?>

                        <h5>Register Domain For Sell</h5>
                        <form action="#" method="post">
                            <div>
                                <div class="mb-3">
                                    <label for="example-text-input" class="form-label">Domain Name</label>
                                    <input class="form-control" name="domain" type="email" id="example-text-input"
                                           placeholder="Domain for sale">
                                </div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light" name="submit_domain">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <h5>Listed Domains for Sell</h5>
                        <div class="table-responsive">
                            <table class="table mb-0">

                                <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Domain Name</th>
                                    <th>Change Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $select_domain_data = $con->query("select * from domain_list");
                                if ($select_domain_data){
                                    $sl = 0;
                                    while($domain_data = mysqli_fetch_assoc($select_domain_data)){
                                        $sl++;
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $sl;?></th>
                                            <td><?php echo $domain_data['domain_name'];?></td>
                                            <?php
                                            if($domain_data['status'] == 0){
                                                ?>
                                                <td><a href="change_domain_status.php?id=<?php echo $domain_data['id'];?>"><button type="button" class="btn btn-success waves-effect waves-light">Live</button></a></td>
                                                <?php
                                            }else{
                                                ?>
                                                <td><a href="change_domain_status.php?id=<?php echo $domain_data['id'];?>"><button type="button" class="btn btn-danger waves-effect waves-light">Sold</button></a></td>
                                                <?php
                                            }
                                            ?>

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

                <div class="row mt-5">
                    <div class="col-12">
                        <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="datatable"
                                           class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline"
                                           role="grid" aria-describedby="datatable_info" style="width: 1216px;">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1" style="width: 70px;"
                                                aria-label="Age: activate to sort column ascending">Sl No
                                            </th>
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="datatable"
                                                rowspan="1" colspan="1" style="width: 195px;" aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending">Email
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1" style="width: 291px;"
                                                aria-label="Position: activate to sort column ascending">Price
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1" style="width: 143px;"
                                                aria-label="Office: activate to sort column ascending">Domain Name
                                            </th>

                                        </tr>
                                        </thead>


                                        <tbody>
                                        <?php
                                        $fetch_sell_data = $con->query("select * from sell_data");
                                        if($fetch_sell_data){
                                            $sl = 0;
                                            while ($sell_data = mysqli_fetch_assoc($fetch_sell_data)){
                                                $sl++;
                                                ?>
                                                <tr class="odd">
                                                    <td class="dtr-control sorting_1" tabindex="0"><?php echo $sl;?></td>
                                                    <td><?php echo $sell_data['email'];?></td>
                                                    <td><?php echo $sell_data['amount'];?></td>
                                                    <td><?php echo $sell_data['domain_name'];?></td>
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
                </div>

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script>
                        © NGT.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by <a href="#" class="text-decoration-underline">NGT</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
<!-- pace js -->
<script src="assets/libs/pace-js/pace.min.js"></script>

<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="assets/js/pages/datatables.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

<!-- Mirrored from themesbrand.com/minia/layouts/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Nov 2021 08:19:15 GMT -->
</html>
