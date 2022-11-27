<?php
@session_start();
require ('global.php');

connected_only();

$pageinfo = "Logs des utilisateurs";

include('templates/meta.php');

if ($grade_encours <= 2) 
{
    Header('location: accueil.php');
}
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
										<h5 class="m-b-10">
											Logs
										</h5>
									</div>
									<ul class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html"><i class="feather icon-home"></i></a>
										</li>
										<li class="breadcrumb-item"><a href="#!">Administration</a></li>
										<li class="breadcrumb-item"><a href="javascript:">Logs</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="main-body">
						<div class="page-wrapper">
							<div class="row">
								<div class="col-xl-12">
									<div class="card">
										<div class="card-header">
											<h5>
												Liste des médecins
											</h5>
										</div>
										<div class="card-block table-border-style">
											<div class="table-responsive">
												<table class="table table-hover">
													<thead>
														<tr>
															<th>
																Utilisateur
															</th>
															<th>
																Type d'action
															</th>
															<th>
																Logs
															</th>
															<th>
																Date
															</th>
														</tr>
													</thead>
													<tbody>

<?php
$requete = ("SELECT 
				L.id	as 'log_id',
				L.type_log	as 'type',
				L.action	as 'action',
				L.date	as 'date',
				U.id,
				U.nom	as 'nom',
				U.prenom as 'prenom'
			FROM 
				logs 				L
			INNER JOIN utilisateurs U ON L.user_id = U.id
			ORDER BY L.id DESC");

$reqlogs = $bdd->prepare($requete);
$reqlogs->execute();

$resultat = $reqlogs->fetchAll();
if (!empty($resultat))
{
    foreach ($resultat as $logs)
    {
?>

<tr>
	<td>
		<h6 class="m-0">
			<b><?php echo $logs['nom']." ".$logs['prenom']; ?></b>
		</h6>
		<td>
			<h6 class="m-0">
				<?php echo $logs['type']; ?>
			</h6>
		</td>
		<td>
			<h6 class="m-0">
				<?php echo $logs['action']; ?>
			</h6>
		</td>
		<td>
			<h6 class="m-0">
				<?php echo strftime('%d-%m-%Y',strtotime($logs['date'])); ?>
			</h6>
		</td>
	</tr>

    <?php
}
}
else
{
    echo "Aucun médecin n'a été créé";
}
?>

                                                    </tbody>
                                                </table>
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

</body>
</html>
