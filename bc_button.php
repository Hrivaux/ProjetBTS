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
                                        <h5 class="m-b-10">Button</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Basic Componants</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Button</a></li>
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
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Default</h5>
                                        </div>
                                        <div class="card-block">
                                            <button type="button" class="btn btn-primary" title="btn btn-primary" data-toggle="tooltip">Primary</button>
                                            <button type="button" class="btn btn-secondary" title="btn btn-secondary" data-toggle="tooltip">Secondary</button>
                                            <button type="button" class="btn btn-success" title="btn btn-success" data-toggle="tooltip">Success</button>
                                            <button type="button" class="btn btn-danger" title="btn btn-danger" data-toggle="tooltip">Danger</button>
                                            <button type="button" class="btn btn-warning" title="btn btn-warning" data-toggle="tooltip">Warning</button>
                                            <button type="button" class="btn btn-info" title="btn btn-info" data-toggle="tooltip">Info</button>
                                            <button type="button" class="btn btn-light" title="btn btn-light" data-toggle="tooltip">Light</button>
                                            <button type="button" class="btn btn-dark" title="btn btn-dark" data-toggle="tooltip">Dark</button>
                                            <button type="button" class="btn btn-link" title="btn btn-link" data-toggle="tooltip">Link</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Outline</h5>
                                        </div>
                                        <div class="card-block">
                                            <button type="button" class="btn btn-outline-primary" title="btn btn-outline-primary" data-toggle="tooltip">Primary</button>
                                            <button type="button" class="btn btn-outline-secondary" title="btn btn-outline-secondary" data-toggle="tooltip">Secondary</button>
                                            <button type="button" class="btn btn-outline-success" title="btn btn-outline-success" data-toggle="tooltip">Success</button>
                                            <button type="button" class="btn btn-outline-danger" title="btn btn-outline-danger" data-toggle="tooltip">Danger</button>
                                            <button type="button" class="btn btn-outline-warning" title="btn btn-outline-warning" data-toggle="tooltip">Warning</button>
                                            <button type="button" class="btn btn-outline-info" title="btn btn-outline-info" data-toggle="tooltip">Info</button>
                                            <button type="button" class="btn btn-outline-light" title="btn btn-outline-light" data-toggle="tooltip">Light</button>
                                            <button type="button" class="btn btn-outline-dark" title="btn btn-outline-dark" data-toggle="tooltip">Dark</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Square Button</h5>
                                        </div>
                                        <div class="card-block">
                                            <p>use <code>.btn-square</code> in class <code>.btn</code> class to get square button</p>
                                            <button type="button" class="btn btn-square btn-primary">Primary</button>
                                            <button type="button" class="btn btn-square btn-secondary">Secondary</button>
                                            <button type="button" class="btn btn-square btn-success">Success</button>
                                            <button type="button" class="btn btn-square btn-danger">Danger</button>
                                            <button type="button" class="btn btn-square btn-warning">Warning</button>
                                            <button type="button" class="btn btn-square btn-info">Info</button>
                                            <button type="button" class="btn btn-square btn-light">Light</button>
                                            <button type="button" class="btn btn-square btn-dark">Dark</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Basic Dropdown Button</h5>
                                        </div>
                                        <div class="card-block">
                                            <div class="btn-group mb-2 mr-2">
                                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#!">Action</a>
                                                    <a class="dropdown-item" href="#!">Another action</a>
                                                    <a class="dropdown-item" href="#!">Something else here</a>
                                                </div>
                                            </div>
                                            <div class="btn-group mb-2 mr-2">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Secondary</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#!">Action</a>
                                                    <a class="dropdown-item" href="#!">Another action</a>
                                                    <a class="dropdown-item" href="#!">Something else here</a>
                                                </div>
                                            </div>
                                            <div class="btn-group mb-2 mr-2">
                                                <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#!">Action</a>
                                                    <a class="dropdown-item" href="#!">Another action</a>
                                                    <a class="dropdown-item" href="#!">Something else here</a>
                                                </div>
                                            </div>
                                            <div class="btn-group mb-2 mr-2">
                                                <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#!">Action</a>
                                                    <a class="dropdown-item" href="#!">Another action</a>
                                                    <a class="dropdown-item" href="#!">Something else here</a>
                                                </div>
                                            </div>
                                            <div class="btn-group mb-2 mr-2">
                                                <button class="btn btn-warning dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warning</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#!">Action</a>
                                                    <a class="dropdown-item" href="#!">Another action</a>
                                                    <a class="dropdown-item" href="#!">Something else here</a>
                                                </div>
                                            </div>
                                            <div class="btn-group mb-2 mr-2">
                                                <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#!">Action</a>
                                                    <a class="dropdown-item" href="#!">Another action</a>
                                                    <a class="dropdown-item" href="#!">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Split Dropdown Button</h5>
                                        </div>
                                        <div class="card-block">
                                            <!-- Example split danger button -->
                                            <div class="btn-group mb-2 mr-2">
                                                <button type="button" class="btn btn-primary">Primary</button>
                                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#!">Action</a>
                                                    <a class="dropdown-item" href="#!">Another action</a>
                                                    <a class="dropdown-item" href="#!">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#!">Separated link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group mb-2 mr-2">
                                                <button type="button" class="btn btn-secondary">Secondary</button>
                                                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#!">Action</a>
                                                    <a class="dropdown-item" href="#!">Another action</a>
                                                    <a class="dropdown-item" href="#!">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#!">Separated link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group mb-2 mr-2">
                                                <button type="button" class="btn btn-success">Success</button>
                                                <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#!">Action</a>
                                                    <a class="dropdown-item" href="#!">Another action</a>
                                                    <a class="dropdown-item" href="#!">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#!">Separated link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group mb-2 mr-2">
                                                <button type="button" class="btn btn-danger">Danger</button>
                                                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#!">Action</a>
                                                    <a class="dropdown-item" href="#!">Another action</a>
                                                    <a class="dropdown-item" href="#!">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#!">Separated link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group mb-2 mr-2">
                                                <button type="button" class="btn btn-warning">Warning</button>
                                                <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#!">Action</a>
                                                    <a class="dropdown-item" href="#!">Another action</a>
                                                    <a class="dropdown-item" href="#!">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#!">Separated link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group mb-2 mr-2">
                                                <button type="button" class="btn btn-info">Info</button>
                                                <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#!">Action</a>
                                                    <a class="dropdown-item" href="#!">Another action</a>
                                                    <a class="dropdown-item" href="#!">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#!">Separated link</a>
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
