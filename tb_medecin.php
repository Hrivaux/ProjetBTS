<?php
@session_start();
require ('global.php');

connected_only();

$pageinfo = "Listes des médecins";
$pageactive = "LM";

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
											Tables Médecin
										</h5>
									</div>
									<ul class="breadcrumb">
										<li class="breadcrumb-item">
										<a href="accueil.php"><i class="feather icon-home"></i></a></li>
										<li class="breadcrumb-item"><a>SAISIES & CONSULTATIONS</a></li>
                                        <li class="breadcrumb-item"><a href="liste_cr.php">Liste des médecins</a></li>
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
																#
															</th>
															<th>
																Photo
															</th>
															<th>
																Nom
															</th>
															<th>
																N°siret
															</th>
															<th>
																Adresse
															</th>
															<th>
																Type de médicaments
															</th>
															<th>
																Quantité des échantillons
															</th>
														</tr>
													</thead>
													<tbody>

<?php
$requete = ("SELECT M.id as 'm_id', M.img as 'm_img', M.nom as 'm_nom', M.prenom as 'm_prenom', M.siret as 'm_siret', M.adresse as 'm_adresse', M.ville as 'm_ville', M.code_postal as 'm_code_postal', M.type_medicament as 'm_typemed', M.quantite_echantillon as 'm_qtt', E.id as 'e_id', E.nom_medicament as 'e_nom'
FROM medecins 			M
INNER JOIN echantillons E on M.type_medicament = E.id
 ORDER BY M.id DESC");

$reqmedecins = $bdd->prepare($requete);
$reqmedecins->execute();

$resultat = $reqmedecins->fetchAll();
if (!empty($resultat))
{
    foreach ($resultat as $medecins)
    {
?>

<tr>
	<td>
		<a href="profilmedecins.php?id=<?php echo $medecins['m_id'];?>"><?php echo $medecins['m_id']; ?></a>
	</td>

	<td>
		<h6 class="m-0">
		<img class="rounded-circle  m-r-10" style=" height:40px; width:40px;" src="img/<?php echo $medecins['m_img'];?>" alt="Photo de profil">
		</h6>
	</td>

	<td>
		<h6 class="m-0">
		<?php echo $medecins['m_nom']." ".$medecins['m_prenom']; ?>
		</h6>		
	</td>

	<td>
			<h6 class="m-0">
			<?php echo $medecins['m_siret']; ?>
			</h6>
		</td>

		<td>
			<h6 class="m-0 text-c-purple">
			<?php echo $medecins['m_adresse']." ".$medecins['m_ville']." - ".$medecins['m_code_postal'];?>
			</h6>
		</td>

		<td>
			<h6 class="m-0">
			<?php echo $medecins['e_nom']; ?>
			</h6>
		</td>
		
		<td>
			<h6 class="m-0">
			<?php echo $medecins['m_qtt']; ?>
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
<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

</body>
</html>
