<?php
@session_start();
require('global.php');

connected_only();

$pageinfo = "xxx";

include('templates/meta.php');
?>
<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>

<?php include('templates/menu.php'); ?>

<?php include('templates/header.php'); ?>

    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">Badges</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Basic Composants</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Badges</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-body">
                        <div class="page-wrapper">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Basic Badges</h5>
                                        </div>
                                        <div class="card-body">
                                            <h1>Example heading <span class="badge badge-secondary">New</span></h1>
                                            <h2>Example heading <span class="badge badge-secondary">New</span></h2>
                                            <h3>Example heading <span class="badge badge-secondary">New</span></h3>
                                            <h4>Example heading <span class="badge badge-secondary">New</span></h4>
                                            <h5>Example heading <span class="badge badge-secondary">New</span></h5>
                                            <h6>Example heading <span class="badge badge-secondary">New</span></h6>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Button Badges</h5>
                                        </div>
                                        <div class="card-body">
                                            <button type="button" class="btn btn-primary">primary <span class="badge badge-light">4</span></button>
                                            <button type="button" class="btn btn-secondary">secondary <span class="badge badge-light">4</span></button>
                                            <button type="button" class="btn btn-success">success <span class="badge badge-light">4</span></button>
                                            <button type="button" class="btn btn-danger">danger <span class="badge badge-light">4</span></button>
                                            <button type="button" class="btn btn-warning">warning <span class="badge badge-light">4</span></button>
                                            <button type="button" class="btn btn-info">info <span class="badge badge-light">4</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>


</body>
</html>
