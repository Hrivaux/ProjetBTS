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
    <!-- [ Pre-loader ] End -->

    <?php include('templates/menu.php'); ?>

    <?php include('templates/header.php'); ?>


    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">Breadcrumbs & Pagination</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Basic Componants</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Breadcrumbs & Pagination</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-body">
                        <div class="page-wrapper">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Breadcrumb</h5>
                                        </div>
                                        <div class="card-body">
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                                                </ol>
                                            </nav>
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="#!">Home</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                                </ol>
                                            </nav>
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="#!">Home</a></li>
                                                    <li class="breadcrumb-item"><a href="#!">Library</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                                                </ol>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Breadcrumb Icon</h5>
                                        </div>
                                        <div class="card-body">
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item active" aria-current="page"><i class="feather icon-home"></i></li>
                                                </ol>
                                            </nav>
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="#!"><i class="feather icon-home"></i></a></li>
                                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                                </ol>
                                            </nav>
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="#!"><i class="feather icon-home"></i></a></li>
                                                    <li class="breadcrumb-item"><a href="#!">Library</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                                                </ol>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Pagination</h5>
                                        </div>
                                        <div class="card-body">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item"><a class="page-link" href="#!">Previous</a></li>
                                                    <li class="page-item"><a class="page-link" href="#!">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                                                </ul>
                                            </nav>
                                            <h5 class="mt-5">Working With Icons</h5>
                                            <hr>
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item"><a class="page-link" href="#!" aria-label="Previous"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
                                                    <li class="page-item"><a class="page-link" href="#!">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#!" aria-label="Next"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
                                                </ul>
                                            </nav>
                                            <h5 class="mt-5">Disabled and Active States</h5>
                                            <hr>
                                            <nav aria-label="...">
                                                <ul class="pagination">
                                                    <li class="page-item disabled"><span class="page-link">Previous</span></li>
                                                    <li class="page-item"><a class="page-link" href="#!">1</a></li>
                                                    <li class="page-item active"><span class="page-link">2<span class="sr-only">(current)</span></span>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                                                </ul>
                                            </nav>
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
