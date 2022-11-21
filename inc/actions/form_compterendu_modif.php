<?php 

require_once('../../global.php');

$id = $_POST['id'];
$id_medecin = $_POST["id_medecin"];
$id_echantillon = $_POST["id_echantillon"];
$date = $_POST["date"];
$compterendu = $_POST["compterendu"];
$avis = $_POST['avis'];
$etat = $_POST['etat'];


$req="UPDATE comptesrendus SET ";

   if (!empty($id_medecin))
{
   $req=$req."id_medecin='$id_medecin',";
}

   if (!empty($id_echantillon))
{
   $req=$req."id_echantillon='$id_echantillon',";
}

   if (!empty($date))
{
   $req=$req."date='$date',";
}

   if (!empty($compterendu))
{
   $req=$req."compterendu='$compterendu',";
}

   if (!empty($avis))
{
   $req=$req."avis='$avis',";
}

   if (!empty($etat))
{
   $req=$req."etat='$etat',";
}

$req=substr($req,0, -1)." WHERE id = $id";



if ($bdd -> exec($req))
{
   echo "Update réussie";
}
else 
{
   echo "Update raté";
}



?>