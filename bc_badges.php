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

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
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
                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!-- [ badge ] start -->
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
                                <!-- [ badge ] end -->
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>


</body>
</html>
