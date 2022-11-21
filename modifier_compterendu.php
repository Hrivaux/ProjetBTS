<?php
@session_start();
require('global.php');

connected_only();

$idCR = htmlentities(trim($_GET['id']));
$idCR = (int) $idCR;

if (is_int($idCR)) {
    $requete = $bdd->prepare("SELECT * FROM comptesrendus WHERE (id = '$idCR') AND (etat = 1)");
    $requete->execute();
    $compterendu = $requete->fetch();
} else {
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
                                                <h5>Modifer votre compte rendu</h5>
                                            </div>
                                            <div class="card-body">
                                                <h4>Compte rendu de M. <?php echo $prenomnom; ?></h4>
                                                <hr>
                                                <div class="card-body">
                                                    <div class="">
                                                        <form action="inc/actions/form_compterendu_modif.php" method="POST" class="text-center">
                                                            <div class="text-center">
                                                                <h5 class="text-center">Nom du médecin</h5>
                                                                <hr>

                                                                <?php echo $compterendu['id_medecin']; ?>
                                                                <br><br>
                                                                <h6><mark> Votre changement si besoin</mark></h6>
                                                                <br>
                                                                <select name="id_medecin" id="id_medecin" class="form-control text-center" required>
                                                                    <?php $reponse = $bdd->query('SELECT id, nom, prenom FROM medecins');
                                                                    while ($donnees = $reponse->fetch()) {
                                                                    ?>
                                                                        <option value="<?php echo $donnees['id']; ?>">
                                                                            <?php echo $donnees['prenom'] . " " . $donnees['nom']; ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>

                                                            </div>
                                                            <div class="form-group">

                                                                <h5 class="mt-5">Date</h5>
                                                                <hr>

                                                                <?php echo $compterendu['date']; ?>
                                                                <br><br>
                                                                <h6><mark> Votre changement si besoin</mark></h6>
                                                                <br>
                                                                <input name="date" type="date" class="form-control text-center" placeholder="Date">
                                                            </div>

                                                            <div class="form-group">
                                                                <h5 class="mt-5">Echantillon tester</h5>
                                                                <hr>

                                                                <?php echo $compterendu['id_echantillon']; ?>
                                                                <br><br>
                                                                <h6><mark> Votre changement si besoin</mark></h6>
                                                                <br>
                                                                <select name="id_echantillon" id="id_echantillon" class="form-control text-center" required>
                                                                    <?php $reponse = $bdd->query('SELECT id, nom_medicament, fournisseur FROM echantillons');
                                                                    while ($donnees = $reponse->fetch()) { ?>
                                                                        <option value="<?php echo $donnees['id']; ?>">
                                                                            <?php echo $donnees['nom_medicament']; ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                                <br>
                                                                <div class="text-center">

                                                                    <h5 class="mt-5">Avis</h5>
                                                                    <hr>

                                                                    <?php if ($compterendu['avis'] == 1) {
                                                                        echo "Favorable";
                                                                    } else {
                                                                        echo "Défavorable";
                                                                    }; ?>
                                                                    <br><br>
                                                                    <h6><mark> Votre changement si besoin</mark></h6>
                                                                    <br>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" id="avis" name="avis" class="custom-control-input">
                                                                        <label class="custom-control-label" for="avis">Bien passer </label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" id="avis1" name="avis" class="custom-control-input">
                                                                        <label class="custom-control-label" for="avis1">Mal passer</label>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">

                                                                    <h5 class="mt-5">Etat</h5>
                                                                    <hr>

                                                                    <?php echo $compterendu['etat']; ?>
                                                                    <br><br>
                                                                    <h6><mark> Votre changement si besoin</mark></h6>
                                                                    <br>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" id="etat" name="etat" class="custom-control-input">
                                                                        <label class="custom-control-label" for="etat">Terminer </label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" id="etat1" name="etat" class="custom-control-input">
                                                                        <label class="custom-control-label" for="etat1">A terminer</label>
                                                                    </div>
                                                                </div>

                                                                <h5 class="mt-5">Commentaire</h5>
                                                                <hr>

                                                                <?php echo $compterendu['compterendu']; ?>
                                                                <br><br>
                                                                <h6><mark> Votre changement si besoin</mark></h6>
                                                                <br>
                                                                <input type="text" name="compterendu" class="form-control height: 300px;" size="50" id="compterendu" rows="5"></input>
                                                                <br><br>
                                                                <input type="submit" value="Envoyer" class="btn btn-primary" />
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <script src="assets/js/vendor-all.min.js"></script>
                                                    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
                                                    <script src="assets/js/pcoded.min.js"></script>

                                                    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
                                                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
                                                    <script src="assets/plugins/google-maps/js/gmaps.js"></script>
                                                    <script src="assets/js/pages/google-maps.js"></script>

</body>

</html