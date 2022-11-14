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


<HTML>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profils de votre médecin</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="content-start">

<center>

<img class="my-2 shadow rounded-full h-48 w-96 align-middle border-none" src="img/cyril.jpg">


<?php 

//include "inc/sql.php";

//$sql = "SELECT * FROM medecins";

  //  $reponse = $bdd->query($sql);


    //while ($medecin = $reponse->fetch()) {

      //  echo $medecin['nom']." "; 
       // echo $medecin['prenom']."<br>";
	//	echo 'Numéro de siret : '. $medecin['siret']."<br>";
	//	echo 'Type de médicaments : '.$medecin['type_medicament'];
    //}
// ?>

<div class="overflow-x-auto relative">
    <table class="border-2 text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Nom / Prénom
                </th>
                <th scope="col" class="py-3 px-6">
                    Siret
                </th>
                <th scope="col" class="py-3 px-6">
                    Type Médicament
                </th>
                <th scope="col" class="py-3 px-6">
                    Stock Médicament
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Cyril Hanouna
                </th>
                <td class="py-4 px-6">
                    09876543234567890
                </td>
                <td class="py-4 px-6">
                    X
                </td>
                <td class="py-4 px-6">
                    X
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<div class="overflow-x-auto relative">
    <table class="border-2 text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Adresse
                </th>
                <th scope="col" class="py-3 px-6">
                    Code Postal
                </th>
                <th scope="col" class="py-3 px-6">
                    Nom d'utilisateur
                </th>
                <th scope="col" class="py-3 px-6">
                    Password
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Lyon
                </th>
                <td class="py-4 px-6">
                    69001
                </td>
                <td class="py-4 px-6">
                    CyrilLeBgDu69
                </td>
                <td class="py-4 px-6 text-red-500">
                    Accès restreint
                </td>
            </tr>
        </tbody>
    </table>
</div>

    </center>


    <!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>


</body>
</html>
