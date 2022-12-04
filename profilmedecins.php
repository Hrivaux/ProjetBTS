<?php 

@session_start();
require ('global.php');

connected_only();

$requete = $bdd->prepare("SELECT M.id as 'm_id', M.img as 'm_img', M.nom as 'm_nom', M.email as 'm_mail', M.prenom as 'm_prenom', M.siret as 'm_siret', M.adresse as 'm_adresse', M.ville as 'm_ville', M.code_postal as 'm_code_postal', M.type_medicament as 'm_typemed', M.quantite_echantillon as 'm_qtt', E.id as 'e_id', E.nom_medicament as 'e_nom'
FROM medecins 			M
INNER JOIN echantillons E on M.type_medicament = E.id
WHERE M.id = :id");

$requete->bindValue('id', $_GET['id']);
$requete->execute();
$profilmedecin = $requete->fetch();

$idmedecin = $_GET['id'];


// Nombre de médicaments
$nbMEDOC = $bdd->query("SELECT count(*) as nb from comptesrendus WHERE id_medecin = $idmedecin");
$data = $nbMEDOC->fetch();
$nbmedocs = $data['nb'];

if (!$profilmedecin) {
	header('location: tb_medecin.php');
    exit;
}

$prenomnomprofil = $profilmedecin['m_prenom'] ." " . $profilmedecin['m_nom'];

$pageinfo = "Profil médecin - $prenomnomprofil";
$pageactive = "";

include ("templates/meta.php");
?>
<style>th, td { border-left: 1px solid #e2e8f0; width: 300px; text-align: center; }</style>
	<body class="content-center">
		<div class="loader-bg">
			<div class="loader-track">
				<div class="loader-fill"></div>
			</div>
		</div>
		<?php include('templates/menu.php'); ?>
		<?php include('templates/header.php'); ?>
					<center>
						<img class="shadow rounded-full h-48 w-96 align-middle border-none" src="img/<?php echo $profilmedecin['m_img']; ?>">
						<div class="overflow-x-auto relative">
							<table class="border-2 my-3 text-sm text-left text-gray-500 dark:text-gray-400">
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
									</tr>
								</thead>
								
								<tbody>
									<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
										<th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
											<?php echo $prenomnomprofil; ?>
										</th>
										<td class="py-4 px-6">
											<?php echo $profilmedecin['m_siret']; ?>
										</td>
										<td class="py-4 px-6">
											<?php echo $profilmedecin['m_mail']; ?>
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
										<th scope="col" class="py-3 px-6" style="text-align: center;">
											Adresse
										</th>
										<th scope="col" class="py-3 px-6">
											Type médicaments
										</th>
										<th scope="col" class="py-3 px-6">
											Nombre de compte<?php if ($nbmedocs > 1) { ?>s <?php } ?> rendu<?php if ($nbmedocs > 1) { ?>s <?php } ?>
										</th>
									</tr>
								</thead>
							<tbody>
									<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
										<th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
											<?php echo $profilmedecin['m_adresse'].", ".$profilmedecin['m_ville']." - ".$profilmedecin['m_code_postal']; ?>
										</th>
										<td class="py-4 px-6">
										<?php echo $profilmedecin['e_nom']; ?>
										</td>
										<td class="py-4 px-6">
											<?php echo $nbmedocs; ?>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<a class="btn btn-primary m-2" href="tb_medecin.php">Retour</a>
</center>

<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>


</body>
</html>
