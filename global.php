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
$grade_encours = $user['grade'];
}

//date du jour en PHP
$month = date('m');
$day = date('d');
$year = date('Y');
$today = $year . '-' . $month . '-' . $day;
?>