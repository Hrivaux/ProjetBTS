<?php
@session_start();

@include('./inc/sql.php');
@include('../inc/sql.php');
@include('./inc/functions.php');
@include('../inc/functions.php');
@include('../../inc/sql.php');
@include('../../inc/functions.php');

if(isset($_SESSION['user']))
{
$email = $_SESSION['user'];
$sql = $bdd->query("SELECT * FROM utilisateurs WHERE email= '$email' LIMIT 1");
$user = $sql->fetch(PDO::FETCH_ASSOC);
// $bdd->query("UPDATE utilisateurs SET online = '1' WHERE id = '".$user['id']."'");

$prenomnom = $user['prenom']." ".$user['nom'];
$nomprenom = $user['nom']." ".$user['prenom'];
$id_encours = $user['id'];
}

//date du jour en PHP
$month = date('m');
$day = date('d');
$year = date('Y');
$hour = date('h');
$minute = date('m');

$today = $year . '-' . $month . '-' . $day . ':' . $hour . ':' . $minute;
/* Gérer les utilisateurs BANNIS

$query = $bdd->prepare("SELECT * FROM bans WHERE value = ?"); 
$query->execute(array($ip));
//DEBAN SI TEMPS EXPIRÉ
$d = $bdd->prepare('DELETE FROM bans WHERE ? >= expire');
$d->execute(array(time()));
if($query->rowcount() != 0){
	header('location: banip.php');
	exit();
} */
?>