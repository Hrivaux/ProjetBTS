<!DOCTYPE html>
<html lang="fr">
<?php
@session_start();
require ('global.php');

connected_only();
?>
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
                                        <h5 class="m-b-10">Compte rendue</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Form Componants</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Form Elements</a></li>
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
                                            <h5>Ecrivez votre compte rendu</h5>
                                        </div>
                                        <div class="card-body">
                                            <h5>Compte rendu de M.</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Nom du médecin</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sélectionnez le médecin">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Echantillon tester</label>
                                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Selectionner l'échantillon souhaiter">
                                                        </div>
                                                        
                                                        <button type="submit" class="btn btn-primary">Envoyer</button>
                                                    </form>
                                                </div>
                                                <div class="col-md-6">
                                                    <form>
                                                        <div class="form-group">
                                                            <label>Text</label>
                                                            <input type="text" class="form-control" placeholder="Text">
                                                        </div>
                                                        
                                                        <div class="1">Commentaire</label>
                                                            <textarea class="form-control comentairecomprendu" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        <!--    <h5 class="mt-5">Sizing</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input class="mb-3 form-control form-control-lg" type="text" placeholder=".form-control-lg">
                                                    <input class="mb-3 form-control" type="text" placeholder="Default input">
                                                    <input class="mb-3 form-control form-control-sm" type="text" placeholder=".form-control-sm">
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="mb-3 form-control form-control-lg">
                                                        <option>Large select</option>
                                                    </select>
                                                    <select class="mb-3 form-control">
                                                        <option>Default select</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h5 class="mt-5">Inline</h5>
                                            <hr>
                                            <form class="form-inline">
                                                <div class="form-group mb-2">
                                                    <label for="staticEmail2" class="sr-only">Email</label>
                                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
                                                </div>
                                                <div class="form-group mx-sm-3 mb-2">
                                                    <label for="inputPassword2" class="sr-only">Password</label>
                                                    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                                                </div>
                                                <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
                                            </form>
                                            <h3 class="mt-5">Checkboxes and Radios</h3>
                                            <h5 class="mt-3">Checkboxes</h5>
                                            <hr>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="mt-5">Radios</h5>
                                                    <hr>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                                                    </div>
                                                    <h5 class="mt-5">Inline</h5>
                                                    <hr>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadioInline1">Toggle this custom radio</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadioInline2">Or toggle this other custom radio</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5 class="mt-5">Range</h5>
                                                    <hr>
                                                    <label for="customRange1">Example range</label>
                                                    <input type="range" class="custom-range" id="customRange1">
                                                    <label for="customRange2">Example range</label>
                                                    <input type="range" class="custom-range" min="0" max="5" id="customRange2">
                                                    <label for="customRange3">Example range</label>
                                                    <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Input group 
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Input Group</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">@</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                                                </div>
                                            </div>
                                            <label for="basic-url">Your vanity URL</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                                </div>
                                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                            <h5 class="mt-5">Sizing</h5>
                                            <hr>
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                            </div>
                                            <div class="input-group input-group-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                            <h5 class="mt-5">Button Addons</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <button class="btn btn-primary" type="button">Button</button>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary" type="button">Button</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <button class="btn btn-primary" type="button">Button</button>
                                                            <button class="btn btn-secondary" type="button">Button</button>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-secondary" type="button">Button</button>
                                                            <button class="btn btn-primary" type="button">Button</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5 class="mt-5">Buttons With Dropdowns</h5>
                                                    <hr>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#!">Action</a>
                                                                <a class="dropdown-item" href="#!">Another action</a>
                                                                <a class="dropdown-item" href="#!">Something else here</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#!">Separated link</a>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#!">Action</a>
                                                                <a class="dropdown-item" href="#!">Another action</a>
                                                                <a class="dropdown-item" href="#!">Something else here</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#!">Separated link</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5 class="mt-5">Segmented Buttons</h5>
                                                    <hr>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <button type="button" class="btn btn-secondary">Action</button>
                                                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#!">Action</a>
                                                                <a class="dropdown-item" href="#!">Another action</a>
                                                                <a class="dropdown-item" href="#!">Something else here</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#!">Separated link</a>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-secondary">Action</button>
                                                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#!">Action</a>
                                                                <a class="dropdown-item" href="#!">Another action</a>
                                                                <a class="dropdown-item" href="#!">Something else here</a>
                                                                <div role="separator" class="dropdown-divider"></div>
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
