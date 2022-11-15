<?php
@session_start();
require ('global.php');

connected_only();

$idmedecin = htmlentities(trim($_GET['id']));
$idmedecin = (int) $idmedecin;

if (is_int($idmedecin))
{
	$requete = $bdd->prepare("SELECT * FROM medecins WHERE id = '$idmedecin'"); 
        $requete->execute();
        $profilmedecin = $requete->fetch();
        $prenomnomprofil = $profilmedecin['prenom']." ".$profilmedecin['nom'];

    }
    else
    {
    Header('location: accueil.php');
    }

?>

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>GSB - Consultation du profil d'un médecin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>

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

<img class="my-2 shadow rounded-full h-48 w-96 align-middle border-none" src="img/<?php echo $profilmedecin['img']; ?>">


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
                    Email
                </th>
                <th scope="col" class="py-3 px-6">
                    Mot de passe
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo $prenomnomprofil; ?>
                </th>
                <td class="py-4 px-6">
                    <?php echo $profilmedecin['siret']; ?>
                </td>
                <td class="py-4 px-6">
                <?php echo $profilmedecin['email']; ?>
                </td>
                <td class="py-4 px-6 text-red-500">
                Accès restreint
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
                    Type médicaments
                </th>
                <th scope="col" class="py-3 px-6">
                    Quantité médicaments
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo $profilmedecin['ville']; ?>
                </th>
                <td class="py-4 px-6">
                <?php echo $profilmedecin['code_postal']; ?>
                </td>
                <td class="py-4 px-6">
                <?php echo $profilmedecin['type_medicament']; ?>
                </td>
                <td class="py-4 px-6">
                <?php echo $profilmedecin['quantite_echantillon']; ?>
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