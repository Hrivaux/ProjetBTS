<?php
@session_start();
require ('global.php');

connected_only();


$idCR = htmlentities(trim($_GET['id']));
$idCR = (int) $idCR;

if (is_int($idCR))
{
	$requete = $bdd->prepare("SELECT * FROM comptesrendus WHERE id = '$idCR'"); 
        $requete->execute();
        $compterendu = $requete->fetch();
        
       

    }
    else
    {
    Header('location: accueil.php');
    }

    $pageinfo = "Saisie des comptes rendus";

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
                <section class="form-compter card-body"> 
                    <div class="card-body">
                        <div class="page-wrapper">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header text-center">
                                            <h5>Consultez votre compte rendu</h5>
                                        </div>
                                        <div class="card-body">
                                            <h4>Compte rendu de M. <?php echo $prenomnom; ?></h4>
                                            <hr>
                                            <div class="card-body">
                                                <div class="">
                                                
                                                        <div class="text-center">
                                                        <h5 class="text-center">Nom du médecin</h5>
                                                            <hr>
                                                            <?php echo $compterendu['id_medecin']; ?>
                                                                                      
                                                        </div>
                                                        <div class="form-group">
                                                        <h5 class="mt-5">Date</h5>
                                                        <hr>    
                                                        <?php echo $compterendu['date']; ?> 
                                                        </div>
                                                        <div class="form-group">
                                                            <h5 class="mt-5">Echantillon tester</h5>
                                                            <hr>
                                                            <?php echo $compterendu['id_echantillon']; ?> 
                                                        <div class="">
                                                <div class="text-center">
                                                    <h5 class="mt-5">Avis</h5>
                                                    <hr>
                                                    <?php if ($compterendu['avis'] == 1) { echo "Favorable"; } else { echo "Défavorable"; }; ?> 
                                                    </div>
                                                     
                                                    
                                                    </div>
                                                    </div>
                                                        <h5 class="mt-5">Commentaire</h5>                                      
                                                       <hr> 
                                                            <<?php echo $compterendu['compterendu']; ?>  
                                                    </div>
                                                </form>
                                                </div>