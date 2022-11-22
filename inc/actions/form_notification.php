<?php
session_start();

require_once '../../global.php';

$objet = $_POST['objet'];
$msg = $_POST['message'];
$urg = $_POST['urgence'];
$date = date('d-m-y');

if (!empty($objet) && !empty($msg) && !empty($urg)) {

    $reponse = $bdd->prepare("INSERT INTO notifications(user_id,objet,message,urgence,send_date) VALUES (?,?,?,?,?)");

    $reponse->execute(array($id_encours, $objet, $msg, $urg, $date));

    header ('Location: ../../accueil.php?actionno=successno');
} 
else 
{
    Header('location: ../../notifications.php?action=erreur');
}
?>
