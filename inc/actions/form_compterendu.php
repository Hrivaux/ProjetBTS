<?php 

require_once('../../global.php');


$id_medecin = $_POST["id_medecin"];
$id_echantillon = $_POST["id_echantillon"];
$date = $_POST["date"];
$compterendu = $_POST["compterendu"];
$avis = $_POST['avis'];
$etat = $_POST['etat'];
$nouvelle_visite = $_POST["nouvelle_visite"];




if (!empty($id_medecin) || !empty($id_echantillon) || !empty($date) || !empty($compterendu) || !empty($avis) || !empty($etat) || !empty($nouvelle_visite)) {

   $reponse = $bdd->prepare("INSERT INTO comptesrendus(id_visiteur, id_medecin, date, id_echantillon, compterendu, avis, etat, nouvelle_visite) VALUES (?,?,?,?,?,?,?,?)");

   $reponse->execute(array($id_encours, $id_medecin, $date, $id_echantillon, $compterendu, $avis, $etat, $nouvelle_visite));
   Header('location: ../../liste_cr.php?actioncr=successcr');

   //Logs
   $req_logs = ("INSERT INTO logs(user_id,type_log,action, date) VALUES ($id_encours, 'Insertion', 'A rédigé un compte rendu.', '$date')");
   $bdd->exec($req_logs);
} 
else
{
   Header('location: ../../redact_cr.php?action=erreur');
}
?>