<?php
require_once "../../global.php";

$nom = $_POST['nomsite'];
$url = $_POST['urlsite'];
$version = $_POST['versionsite'];

$requete_update = "UPDATE site_settings SET ";
	
	if (!empty ($nom)) 
	{
		$requete_update=$requete_update."site_name = '$nom',";
	}
	if (!empty ($url)) 
	{
		$requete_update=$requete_update."url = '$url',";
	}
	if (!empty ($version)) 
	{
		$requete_update=$requete_update."version = '$version',";
	}
	
	$requete_update = substr($requete_update, 0, -1)." WHERE id = 1";
	
	if ($bdd->exec($requete_update))
	{
		Header('Location: '.$url.'/site_settings.php?action=success_update_site');
	}
	else 
	{
		Header('Location: '.$url.'/site_settings.php?action=error_update_site');
	}
?>