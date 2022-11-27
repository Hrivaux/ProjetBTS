<?php

require_once ('../../global.php');

$idCR = htmlentities(trim($_GET['id']));
$idCR = (int)$idCR;

$id_medecin = $_POST["id_medecin"];
$id_echantillon = $_POST["id_echantillon"];
$date = $_POST["date"];
$compterendu = $_POST["compterendu"];
$avis = $_POST['avis'];
$etat = $_POST['etat'];

$req = "UPDATE comptesrendus SET ";

if (!empty($id_medecin))
{
    $req = $req . "id_medecin='$id_medecin',";
}

if (!empty($id_echantillon))
{
    $req = $req . "id_echantillon='$id_echantillon',";
}

if (!empty($date))
{
    $req = $req . "date='$date',";
}

if (!empty($compterendu))
{
    $req = $req . "compterendu='$compterendu',";
}

if (!empty($avis))
{
    $req = $req . "avis='$avis',";
}

if (!empty($etat))
{
    $req = $req . "etat='$etat',";
}

$req = substr($req, 0, -1) . " WHERE id = $idCR";

if ($bdd->exec($req))
{    //Logs
    $req_logs = ("INSERT INTO logs(user_id,type_log,action, date) VALUES ($id_encours, 'Insertion', 'A modifié le compte rendu ($idCR)', '$today')");
    $bdd->exec($req_logs);
    echo "Update réussie";
}
else
{
    echo "Update raté";
}



?>
