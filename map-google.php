<?php
@session_start();
require ('global.php');

connected_only();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Datta Able Free Bootstrap 4 Admin Template</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

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
    <section class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">Google Map</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="#!">Maps</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Google Maps</a></li>
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
                                <!-- [ basic-map ] start -->
                                <div class="col-lg-12 col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Basic</h5>
                                            <span class="d-block m-t-5">Map shows places around the world</span>
                                        </div>
                                        <div class="card-block">
                                            <div id="basic-map" class="set-map" style="height:400px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ basic-map ] end -->

                                <!-- [ Markers-map ] start -->
                                <div class="col-lg-12 col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Markers</h5>
                                            <span class="d-block m-t-5">Maps shows <code>location</code> of the place</span>
                                        </div>
                                        <div class="card-block">
                                            <div id="markers-map" class="set-map" style="height:400px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ Markers-map ] end -->

                                <!-- [ Geo-Coding-map ] start -->
                                <div class="col-lg-12 col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Geo-Coding</h5>
                                            <span class="d-block m-t-5">Search your location</span>
                                        </div>
                                        <div class="card-block">
                                            <form method="post" id="geocoding_form1">
                                                <div class="input-group input-group-button mb-3">
                                                    <input type="text" id="address" class="form-control" placeholder="Write your place">
                                                    <span class="input-group-addon" id="basic-addon1">
                                                  <button class="btn btn-primary m-0">Search Location</button>
                                                  </span>
                                                </div>
                                            </form>
                                            <div id="mapGeo" class="set-map" style="height:400px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ Geo-Coding-map ] end -->

                                <!-- [ Overlay-map ] start -->
                                <div class="col-lg-12 col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Overlay</h5>
                                            <span class="d-block m-t-5">Map shows places around the world</span>
                                        </div>
                                        <div class="card-block">
                                            <form method="post" id="geocoding_form2">
                                                <div id="mapOverlay" class="set-map" style="height:400px;"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ Overlay-map ] end -->

                                <!-- [ Street-View-map ] start -->
                                <div class="col-lg-12 col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Street View</h5>
                                            <span class="d-block m-t-5">Map shows view of street</span>
                                        </div>
                                        <div class="card-block">
                                            <form method="post" id="geocoding_form3">
                                                <div id="mapStreet" class="set-map" style="height:400px;"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ Street-View-map ] end -->

                                <!-- [ Map-Types-map ] start -->
                                <div class="col-lg-12 col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Map Types</h5>
                                            <span class="d-block m-t-5">Select your <code>map-types</code> to see differant views</span>
                                        </div>
                                        <div class="card-block">
                                            <form method="post" id="geocoding_form4">
                                                <div id="mapTypes" class="set-map" style="height:400px;"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ Map-Types-map ] end -->

                                <!-- [ GeoRSS-Layers ] start -->
                                <div class="col-lg-12 col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>GeoRSS Layers</h5>
                                            <span class="d-block m-t-5">Shows <code>RSS</code> location</span>
                                        </div>
                                        <div class="card-block">
                                            <form method="post" id="geocoding_form5">
                                                <div id="georssmap" class="set-map" style="height:400px;"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ GeoRSS-Layers ] end -->

                                <!-- [ Marker-Clustering ] start -->
                                <div class="col-lg-12 col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Marker Clustering</h5>
                                            <span class="d-block m-t-5">Multiple markers show differant location</span>
                                        </div>
                                        <div class="card-block">
                                            <form method="post" id="geocoding_form6">
                                                <div id="map" class="set-map" style="height:400px;"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ Marker-Clustering ] end -->
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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


    <!-- google-map Js -->
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="assets/plugins/google-maps/js/gmaps.js"></script>
    <script src="assets/js/pages/google-maps.js"></script>

</body>
</html>
