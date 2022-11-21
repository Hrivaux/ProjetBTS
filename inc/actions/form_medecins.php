<?php

// On récupère les valeurs du formulaire:

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$image = $_POST['image'];
$siret = $_POST['siret'];
$email = $_POST['email'];
$adresse = $_POST['adresse'];
$ville = $_POST['ville'];
$codepostal = $_POST['codepostal'];
$echantillon = $_POST['echantillon'];
$quantiteechantillon = $_POST['quantiteechantillon'];

$dossier = 'img/';
$dossier=$dossier.$nom_du_fichier.'.jpg';
if(move_uploaded_file($_FILES['img']['tmp_name'], $chemin)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
 {
	echo 'Upload effectué avec succès !';
}
 else //Sinon (la fonction renvoie FALSE).
 {
	 echo 'Echec de l\'upload  !';
}
