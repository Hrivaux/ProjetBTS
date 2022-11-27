<?php
include("../../global.php"); 

$requete = $bdd->prepare('DELETE FROM utilisateurs WHERE id = :id');
$requete->bindValue('id', $_GET['id']);

if (!$_GET['id']) {
	header('location: ../../accueil.php');
    exit;
}

if ($requete->execute()) {
    Header('Location: ../../accueil.php?delete=successd');
}

?>