<?php 

require_once('../../global.php');


$id_medecin = $_POST["id_medecin"];
$id_echantillon = $_POST["id_echantillon"];
$date = $_POST["date"];
$compterendu = $_POST["compterendu"];
$avis = $_POST['avis'];
$etat = $_POST['etat'];




if (!empty($id_medecin) || !empty($id_echantillon) || !empty($date) || !empty($compterendu) || !empty($avis) || !empty($etat)) {

   $reponse = $bdd->prepare("INSERT INTO comptesrendus(id_visiteur, id_medecin, date, id_echantillon, compterendu, avis, etat) VALUES (?,?,?,?,?,?,?)");

   $reponse->execute(array($id_encours, $id_medecin, $date, $id_echantillon, $compterendu, $avis, $etat));
   Header('location: ../../accueil.php?actioncr=successcr');

   //Logs
   $req_logs = ("INSERT INTO logs(user_id,type_log,action, date) VALUES ($id_encours, 'Insertion', 'A rédigé un compte rendu.', '$date')");
   $bdd->exec($req_logs);
} 
else
{
   Header('location: ../../form_elements.php?action=erreur');
}
?>