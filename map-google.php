<?php
@session_start();
require('global.php');

connected_only();

$pageinfo = "MAP";

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


    <section class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
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
                    <div class="main-body">
                        <div class="page-wrapper">
                            <div class="row">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="assets/plugins/google-maps/js/gmaps.js"></script>
    <script src="assets/js/pages/google-maps.js"></script>

</body>
</html>
