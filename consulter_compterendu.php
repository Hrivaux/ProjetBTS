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
        
    if (!$compterendu) {
        header('location: liste_cr.php');
         exit; }     
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

                                    <?php 
                                                	$requete = ("SELECT CR.id               as 'id_compterendu',
                                                                        CR.id_visiteur      as 'id_visiteur',
                                                                        CR.id_medecin       as 'id_medecin',
                                                                        CR.date             as 'date',
                                                                        CR.id_echantillon   as 'id_echantillon',
                                                                        CR.avis             as 'avis',
                                                                        M.id                as 'Mid_medecin',
                                                                        M.nom               as 'nom_medecin',
                                                                        M.prenom            as 'prenom_medecin'
                                                    FROM comptesrendus  CR
                                                    LEFT JOIN medecins  M ON M.id = id_medecin
                                                    WHERE CR.id = $idCR
                                                    ORDER BY id_compterendu DESC");

                                                    $reqcr = $bdd->prepare($requete);
                                                    $reqcr->execute();
                                                        
                                                    $resultat = $reqcr->fetchAll();
                                                        if (!empty($resultat)) 
                                                        {
                                                            foreach($resultat as $cr)  { 
                                                    ?>


                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="accueil.php"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a>SAISIES & CONSULTATIONS</a></li>
                                        <li class="breadcrumb-item"><a href="liste_cr.php">Listes des comptes rendus</a></li>
                                        <li class="breadcrumb-item"><a>Consulter le compte rendue du médecin <?php echo $cr['prenom_medecin']." ".$cr['nom_medecin']; ?> datant du  <?php echo $compterendu['date']; ?></a></li>
                                    </ul>

                                    <?php
                                                                        } 
                                                 } 
                                                else
                                                {
                                                    echo "Aucn compte-rendu ne vous a été rattaché";
                                                }
                                               ?>


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
                                                      <br>  
                                                      <?php 
                                                	$requete = ("SELECT CR.id               as 'id_compterendu',
                                                                        CR.id_visiteur      as 'id_visiteur',
                                                                        CR.id_medecin       as 'id_medecin',
                                                                        CR.date             as 'date',
                                                                        CR.id_echantillon   as 'id_echantillon',
                                                                        CR.avis             as 'avis',
                                                                        M.id                as 'Mid_medecin',
                                                                        M.nom               as 'nom_medecin',
                                                                        M.prenom            as 'prenom_medecin'
                                                    FROM comptesrendus  CR
                                                    LEFT JOIN medecins  M ON M.id = id_medecin
                                                    WHERE CR.id = $idCR
                                                    ORDER BY id_compterendu DESC");

                                                    $reqcr = $bdd->prepare($requete);
                                                    $reqcr->execute();
                                                        
                                                    $resultat = $reqcr->fetchAll();
                                                        if (!empty($resultat)) 
                                                        {
                                                            foreach($resultat as $cr)  { 
                                                    ?>
                                                            <?php echo $cr['prenom_medecin']." ".$cr['nom_medecin']; ?></a>
                                                            
                                                            <?php
                                                                        } 
                                                 } 
                                                else
                                                {
                                                    echo "Aucn compte-rendu ne vous a été rattaché";
                                                }
                                               ?>
                                                        <div class="form-group">
                                                        <h5 class="mt-5">Date</h5>
                                                        <hr>   
                                                        <br> 
                                                        <?php echo $compterendu['date']; ?> 
                                                        </div>
                                                        <div class="form-group">
                                                        <h5 class="text-center">Échantillon testé</h5>
                                                      <hr>  
                                                      <br> 
                                                      <?php 
                                                	$requete_echantillon = ("SELECT CR.id   as 'id_compterendu',
                                                                        CR.id_echantillon   as 'id_echantillon',
                                                                        M.id                as 'echantillon',
                                                                        M.nom_medicament    as 'nom_medicament'
                                                    FROM comptesrendus      CR
                                                    LEFT JOIN echantillons  M ON M.id = CR.id_echantillon
                                                    WHERE CR.id = $idCR ");

                                                    $reqechantillon = $bdd->prepare($requete_echantillon);
                                                    $reqechantillon->execute();
                                                        
                                                    $echanti = $reqechantillon->fetchAll();
                                                        if (!empty($echanti)) 
                                                        {
                                                            foreach($echanti as $e)  { 
                                                    ?>
                                                            <?php echo $e['nom_medicament']?></a>
                                                            
                                                            <?php
                                                                        } 
                                                 } 
                                                else
                                                {
                                                    echo "Il n'y a pas d'échantillon rattaché";
                                                }
                                               ?>
                                               <div class="text-center">
                                                    <h5 class="mt-5">Motif de la visite</h5>
                                                    <hr>
                                                    <br>
                                                    <?php if ($compterendu['id_motif'] == 1) { echo "Périodicité"; } else if ($compterendu['id_motif'] == 2) { echo "Nouveautés ou Actualisations"; } else if ($compterendu['id_motif'] == 3) { echo "Remontage"; } else if ($compterendu['id_motif'] == 4) { echo "Autres"; }else { echo "Pas de motif";} ; ?> 
                                                    </div>
                                                <div class="text-center">
                                                    <h5 class="mt-5">Avis</h5>
                                                    <hr>
                                                    <br>
                                                    <?php if ($compterendu['avis'] == 1) { echo "Favorable"; } else { echo "Défavorable"; }; ?> 
                                                    </div>
                                                    <div class="text-center">
                                                    <h5 class="mt-5">Etat</h5>
                                                    <hr>
                                                    <br>
                                                    <?php if ($compterendu['etat'] == 1) { echo "Terminer"; } else { echo "A terminer"; }; ?> 
                                                    </div>
                                                    

                                                    <div class="form-group">
                                                        <h5 class="mt-5">Nouvelle visite</h5>
                                                        <hr>   
                                                        <br> 
                                                        <?php if ($compterendu['nouvelle_visite'] == NULL) { echo "Pas de nouvelle visite"; } else {echo $compterendu['nouvelle_visite'];}; ?>
                                                        </div>


                                                    <div>
                                                        <h5 class="mt-5">Commentaire</h5>                                      
                                                       <hr> 
                                                       <br>
                                                       <?php echo $compterendu['compterendu']; ?> 
                                                    </div>
                                                </form>
                                                </div>
    <script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>