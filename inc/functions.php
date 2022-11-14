<?php
include("./inc/sql.php"); 

/* Paramétrage du site
$url = "http://localhost/ProjetBTS/";
*/

$req_user = $bdd->query("SELECT * FROM utilisateurs WHERE email = '$email'");
while ($usersession = $req_user->fetch()) {
	
	$prenomnom = $usersession['prenom']." ".$usersession['nom'];
	$nomprenom = $usersession['nom']." ".$usersession['prenom'];
}

function connected_only()
{
	if(!isset($_SESSION['user'])) {
		Header("Location: index.php");
		exit();
									}
}

function already_connected()
{
	if(isset($_SESSION['user'])) {
		Header("Location: index.php");
		exit();
								}
}

?>