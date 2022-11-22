<?php

// On récupère les valeurs du formulaire:

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$image = $_POST['get_image'];
$siret = $_POST['siret'];
$email = $_POST['email'];
$adresse = $_POST['adresse'];
$ville = $_POST['ville'];
$codepostal = $_POST['codepostal'];
$echantillon = $_POST['echantillon'];
$quantiteechantillon = $_POST['quantiteechantillon'];

if(isset($_POST['get_image'])) // $_POST['get_image'] - l'url de fichier source
{
$url=$_POST['get_image'];
$nomfichier = basename($_POST['get_image']);
$data = file_get_contents($url);
$new = '../../img/'.$nomfichier.''; //nom de fichier
file_put_contents($new, $data);
}

?>