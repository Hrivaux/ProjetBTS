<?php 

require_once('../../global.php');


$id_medecin = $_POST["id_medecin"];
$id_echantillon = $_POST["id_echantillon"];
$date = $_POST["date"];
$compterendu = $_POST["compterendu"];
$avis = $_POST['avis'];


if (!empty($id_medecin) && !empty($id_echantillon) && !empty($date) && !empty($compterendu) && !empty($avis)) {

   $reponse = $bdd->prepare("INSERT INTO comptesrendus(id_visiteur, id_medecin, date, id_echantillon, nouvelle_visite, compterendu, avis) VALUES (?,?,?,?,?, ?, ?)");

   $reponse->execute(array($id_encours, $id_medecin, $date, $id_echantillon, '0', $compterendu, $avis));
   Header('location: ../../accueil.php?action=successcomptesrendus');
} 
else
{
   Header('location: ../../form_compterendu.php');
}
?>