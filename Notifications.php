<?php
@session_start();
require ('global.php');

connected_only();
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>GSB - Envoyer une notification</title>
		<meta charset="utf-8">
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
		<div class="pcoded-main-container">
			<div class="pcoded-wrapper">
				<div class="pcoded-content">
					<div class="pcoded-inner-content">
						<div class="page-header">
							<div class="page-block">
								<div class="row align-items-center">
									<div class="col-md-12">
										<div class="page-header-title">
											<h5 class="m-b-10">
												Notifications
											</h5>
										</div>
										<ul class="breadcrumb">
											<li class="breadcrumb-item">
												<a href="index.html"><i class="feather icon-home"></i></a>
											</li>
											<li class="breadcrumb-item"><a href="javascript:">Administratif</a></li>
											<li class="breadcrumb-item"><a href="javascript:">Envoie notification</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="main-body">
							<div class="page-wrapper">
								<div class="row">
									<div class="col-sm-12">
										<div class="card">
											<div class="card-body">
												<h5>
													Envoyer une notification
												</h5>
												<hr>
												<div class="row">
													<div class="col-md-6">
														<form method="post" action="inc/actions/form_notification.php">
															<div class="form-group">
																<label for="exampleInputEmail1">Objet</label>
																<input type="text" class="form-control" name="objet" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Objet de votre notification">
															</div>
															<label for="pet-select" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Le niveau d'urgence :</label>
															<select id="urgence" name="urgence" class="form-control">
																<option selected>Veuillez choisir une option</option>
																<option value="1">Ne pas faire </option>
																<option value="2">Est-ce vraiment à faire ? </option>
																<option value="3">À faire bientôt </option>
																<option value="4">À faire immédiatement </option>
																<option value="5">À faire dans l'extrême urgence</option>
															</select>
															<br>
															<br>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label>Message</label>
																<textarea name="message" class="form-control" placeholder="Quelle notification voulez-vous envoyer?"rows="4" cols="33"></textarea>
															</div>
													</div>
												</div>
												<center>
													<input type="submit" value="Envoyer" class="btn btn-primary"/>
												</center>
                                                </form>
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
    <!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

</body>
</html>
