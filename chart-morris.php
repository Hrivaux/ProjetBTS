<?php
@session_start();
require('global.php');

connected_only();

$pageinfo = "xxx";

include('templates/meta.php');
?>

<body>
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
                                        <h5 class="m-b-10">Morris Chart</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Chart</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Morris Chart</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-body">
                        <div class="page-wrapper">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Bar [ Simple ] Chart</h5>
                                        </div>
                                        <div class="card-block">
                                            <div id="morris-bar-chart" style="height:300px"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Bar [ Stacked ] Chart</h5>
                                        </div>
                                        <div class="card-block">
                                            <div id="morris-bar-stacked-chart" style="height:300px"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Line [ Angle ] Chart</h5>
                                        </div>
                                        <div class="card-block">
                                            <div id="morris-area-chart" style="height:300px"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Area [ Smooth ] Chart</h5>
                                        </div>
                                        <div class="card-block">
                                            <div id="morris-area-curved-chart" style="height:300px"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Line [ Angle ] Chart</h5>
                                        </div>
                                        <div class="card-block">
                                            <div id="morris-line-chart" class="ChartShadow" style="height:300px"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Line [ Smooth ] Chart</h5>
                                        </div>
                                        <div class="card-block">
                                            <div id="morris-line-smooth-chart" class="ChartShadow" style="height:300px"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Donut Chart</h5>
                                        </div>
                                        <div class="card-block">
                                            <div id="morris-donut-chart" style="height:300px"></div>
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


    <script src="assets/plugins/chart-morris/js/raphael.min.js"></script>
    <script src="assets/plugins/chart-morris/js/morris.min.js"></script>
    <script src="assets/js/pages/chart-morris-custom.js"></script>

</body>
</html>
