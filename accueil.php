<?php
@session_start();
require('global.php');

connected_only();

require_once('inc/calculateur.php');

$pageinfo = "Gestion des comptes rendus";

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

                    <div class="main-body">
                        <div class="page-wrapper">
                            <div class="row">
                                <div class="col-md-6 col-xl-4">
                                    <div class="card daily-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4">Utilisateurs totaux</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i><?php echo $nbutilisateurs; ?></h3>
                                                </div>
                                            </div>
                                            <div class="progress m-t-30" style="height: 7px;">
                                                <div class="progress-bar progress-c-theme" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-4">
                                    <div class="card Monthly-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4"><?php echo $nomgrade; ?></h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i><?php echo $nbutilisateursgrade; ?></h3>
                                                </div>
                                                <div class="col-3 text-right">
                                                </div>
                                            </div>
                                            <div class="progress m-t-30" style="height: 7px;">
                                                <div class="progress-bar progress-c-theme2" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-xl-4">
                                    <div class="card yearly-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4">Médecin<?php if ($nbmedecins > 1) {  echo 's'; } ?> rattaché<?php if ($nbmedecins > 1) { echo 's'; } ?>
                                            </h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-down text-c-red f-30 m-r-10"></i><?php echo $nbmedecins; ?></h3>
                                                </div>
                                            </div>
                                            <div class="progress m-t-30" style="height: 7px;">
                                                <div class="progress-bar progress-c-theme" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-8 col-md-6">
                                    <div class="card Recent-Users">
                                        <div class="card-header">
                                            <h5>Utilisateurs récents</h5>
                                        </div>
                                        <div class="card-block px-0 py-3">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <tr class="unread">
                                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td>
                                                            <td>
                                                                <h6 class="mb-1">Isabella Christensen</h6>
                                                                <p class="m-0">Lorem Ipsum is simply…</p>
                                                            </td>
                                                            <td>
                                                                <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i>11 MAY 12:56</h6>
                                                            </td>
                                                            <td><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                                                        </tr>
                                                        <tr class="unread">
                                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-2.jpg" alt="activity-user"></td>
                                                            <td>
                                                                <h6 class="mb-1">Mathilde Andersen</h6>
                                                                <p class="m-0">Lorem Ipsum is simply text of…</p>
                                                            </td>
                                                            <td>
                                                                <h6 class="text-muted"><i class="fas fa-circle text-c-red f-10 m-r-15"></i>11 MAY 10:35</h6>
                                                            </td>
                                                            <td><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                                                        </tr>
                                                        <tr class="unread">
                                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-3.jpg" alt="activity-user"></td>
                                                            <td>
                                                                <h6 class="mb-1">Karla Sorensen</h6>
                                                                <p class="m-0">Lorem Ipsum is simply…</p>
                                                            </td>
                                                            <td>
                                                                <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i>9 MAY 17:38</h6>
                                                            </td>
                                                            <td><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                                                        </tr>
                                                        <tr class="unread">
                                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td>
                                                            <td>
                                                                <h6 class="mb-1">Ida Jorgensen</h6>
                                                                <p class="m-0">Lorem Ipsum is simply text of…</p>
                                                            </td>
                                                            <td>
                                                                <h6 class="text-muted f-w-300"><i class="fas fa-circle text-c-red f-10 m-r-15"></i>19 MAY 12:56</h6>
                                                            </td>
                                                            <td><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                                                        </tr>
                                                        <tr class="unread">
                                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-2.jpg" alt="activity-user"></td>
                                                            <td>
                                                                <h6 class="mb-1">Albert Andersen</h6>
                                                                <p class="m-0">Lorem Ipsum is simply dummy…</p>
                                                            </td>
                                                            <td>
                                                                <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i>21 July 12:56</h6>
                                                            </td>
                                                            <td><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="card card-event">
                                        <div class="card-block">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col">
                                                    <h5 class="m-0">Rendez-Vous quotidien</h5>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="label theme-bg2 text-white f-14 f-w-400 float-right">65%</label>
                                                </div>
                                            </div>
                                            <h2 class="mt-3 f-w-300">45<sub class="text-muted f-14">Rendez-vous</sub></h2>
                                            <h6 class="text-muted mt-4 mb-0">Prévu à ce jour</h6>
                                            <i class="fab fa-angellist text-c-red f-50"></i>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-block border-bottom">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-auto">
                                                    <i class="feather icon-zap f-30 text-c-red"></i>
                                                </div>
                                                <div class="col">
                                                    <h3 class="f-w-300"><?php echo $nbcomptesrendusencours; ?></h3>
                                                    <span class="d-block text-uppercase">Comptes rendus à rédiger</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-auto">
                                                    <i class="feather icon-zap f-30 text-c-green"></i>
                                                </div>
                                                <div class="col">
                                                    <h3 class="f-w-300"><?php echo $nbcomptesrendustermines; ?></h3>
                                                    <span class="d-block text-uppercase">Comptes rendus terminés</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-xl-4 col-md-6">
                                    <div class="card user-list">
                                        <div class="card-header">
                                            <h5>Rating</h5>
                                        </div>
                                        <div class="card-block">
                                            <div class="row align-items-center justify-content-center m-b-20">
                                                <div class="col-6">
                                                    <h2 class="f-w-300 d-flex align-items-center float-left m-0">4.7 <i class="fas fa-star f-10 m-l-10 text-c-yellow"></i></h2>
                                                </div>
                                                <div class="col-6">
                                                    <h6 class="d-flex  align-items-center float-right m-0">0.4 <i class="fas fa-caret-up text-c-green f-22 m-l-10"></i></h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <h6 class="align-items-center float-left"><i class="fas fa-star f-10 m-r-10 text-c-yellow"></i>5</h6>
                                                    <h6 class="align-items-center float-right">384</h6>
                                                    <div class="progress m-t-30 m-b-20" style="height: 6px;">
                                                        <div class="progress-bar progress-c-theme" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <h6 class="align-items-center float-left"><i class="fas fa-star f-10 m-r-10 text-c-yellow"></i>4</h6>
                                                    <h6 class="align-items-center float-right">145</h6>
                                                    <div class="progress m-t-30  m-b-20" style="height: 6px;">
                                                        <div class="progress-bar progress-c-theme" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <h6 class="align-items-center float-left"><i class="fas fa-star f-10 m-r-10 text-c-yellow"></i>3</h6>
                                                    <h6 class="align-items-center float-right">24</h6>
                                                    <div class="progress m-t-30  m-b-20" style="height: 6px;">
                                                        <div class="progress-bar progress-c-theme" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <h6 class="align-items-center float-left"><i class="fas fa-star f-10 m-r-10 text-c-yellow"></i>2</h6>
                                                    <h6 class="align-items-center float-right">1</h6>
                                                    <div class="progress m-t-30  m-b-20" style="height: 6px;">
                                                        <div class="progress-bar progress-c-theme" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <h6 class="align-items-center float-left"><i class="fas fa-star f-10 m-r-10 text-c-yellow"></i>1</h6>
                                                    <h6 class="align-items-center float-right">0</h6>
                                                    <div class="progress m-t-30  m-b-20" style="height: 6px;">
                                                        <div class="progress-bar" role="progressbar" style="width:0;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-8 col-md-12 m-b-30">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active show" id="semaine-tab" data-toggle="tab" href="#semaine" role="tab" aria-controls="semaine" aria-selected="true">Cette semaine</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tous-tab" data-toggle="tab" href="#tous" role="tab" aria-controls="tous" aria-selected="false">Tous</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade active show" id="semaine" role="tabpanel" aria-labelledby="semaine-tab">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Utilisateur</th>
                                                        <th>Adresse mail</th>
                                                        <th>Embauche</th>
                                                        <th>Adresse</th>
                                                        <th class="text-right"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $requete = ("SELECT * FROM utilisateurs WHERE date_embauche BETWEEN DATE_SUB( CURDATE( ) ,INTERVAL 10 DAY ) AND CURDATE( )");

                                                    $requser = $bdd->prepare($requete);
                                                    $requser->execute();

                                                    $resultat = $requser->fetchAll();
                                                    if (!empty($resultat)) {
                                                        foreach ($resultat as $users) {
                                                    ?>
                                                            <tr>
                                                                <td>
                                                                    <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="assets/images/user/avatar-3.jpg" alt="activity-user"><?php echo $users['nom'] . " " . $users['prenom']; ?></h6>
                                                                </td>
                                                                <td>
                                                                    <h6 class="m-0"><?php echo $users['email']; ?></h6>
                                                                </td>
                                                                <td>
                                                                    <h6 class="m-0"><?php echo $users['date_embauche']; ?></h6>
                                                                </td>
                                                                <td>
                                                                    <h6 class="m-0 text-c-purple"><?php echo $users['adresse'] . " " . $users['ville'] . " - " . $users['code_postal']; ?></h6>
                                                                </td>
                                                            </tr>
                                                    <?php
                                                        }
                                                    } else {
                                                        echo "Aucun utilisateur n'a été créé";
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>

                                        </div>
                                        <div class="tab-pane fade" id="tous" role="tabpanel" aria-labelledby="tous-tab">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Utilisateur</th>
                                                        <th>Adresse mail</th>
                                                        <th>Date de création</th>
                                                        <th>Adresse</th>
                                                        <th class="text-right"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $requete = ("SELECT * FROM utilisateurs");

                                                    $requser = $bdd->prepare($requete);
                                                    $requser->execute();


                                                    $resultat = $requser->fetchAll();


                                                    if (!empty($resultat)) {
                                                        foreach ($resultat as $users) {
                                                    ?>
                                                            <tr>
                                                                <td>
                                                                    <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="assets/images/user/avatar-3.jpg" alt="activity-user"><?php echo $users['nom'] . " " . $users['prenom']; ?></h6>
                                                                </td>
                                                                <td>
                                                                    <h6 class="m-0"><?php echo $users['email']; ?></h6>
                                                                </td>
                                                                <td>
                                                                    <h6 class="m-0"><?php echo $users['date_embauche']; ?></h6>
                                                                </td>
                                                                <td>
                                                                    <h6 class="m-0 text-c-purple"><?php echo $users['adresse'] . " " . $users['ville'] . " - " . $users['code_postal']; ?></h6>
                                                                </td>
                                                            </tr>
                                                    <?php }
                                                    } else {
                                                        echo "Aucun utilisateur n'a été créé";
                                                    } ?>
                                                </tbody>
                                            </table>
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
    <script src="<?php echo $url; ?>/assets/js/vendor-all.min.js"></script>
    <script src="<?php echo $url; ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo $url; ?>/assets/js/pcoded.min.js"></script>

<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="tbmodal">
			<h3 style="color:white;">Le compte a bien été créé.</h3>
		</div>
	</div>
</div>
<?php
	if(isset($_GET['action'])) {
		$errlogin = htmlspecialchars($_GET['action']);
		
		switch($errlogin)
		{
			case 'success':
?>
<script>
$(document).ready(function(){
    $("#success").modal('show');
});
</script>
<?php break; } } ?>	


	




<div class="modal fade" id="successcr" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="tbmodal">
			<h3 style="color:white;">Le compte rendu a bien été créé.</h3>
		</div>
	</div>
</div>
<?php
	if(isset($_GET['actioncr'])) {
		$errlogin = htmlspecialchars($_GET['actioncr']);
		
		switch($errlogin)
		{
			case 'successcr':
?>
<script>
$(document).ready(function(){
    $("#successcr").modal('show');
});
</script>
<?php break; } } ?>	


</body>

</html>