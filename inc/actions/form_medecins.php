<?php
session_start();

require_once '../../global.php';

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
$personne_rattachee = $_POST['p_rattache'];

if(isset($_POST['get_image'])) // $_POST['get_image'] - l'url de fichier source
{
$url=$_POST['get_image'];
$nomfichier = basename($_POST['get_image']);
$data = file_get_contents($url);
$new = '../../img/'.$nomfichier.''; //nom de fichier
file_put_contents($new, $data);
}

if (isset($nom) && isset($prenom) && isset($siret) && isset($email) && isset($adresse) && isset($ville) && isset($codepostal) && isset($echantillon) && isset($quantiteechantillon) && isset($personne_rattachee)) {

    $reponse = $bdd->prepare("INSERT INTO medecins(visiteur_id,img,siret,nom,prenom,email,ville,code_postal,type_medicament,quantite_echantillon) VALUES (?,?,?,?,?,?,?,?,?,?)");

    $reponse->execute(array($personne_rattachee, $nomfichier, $siret, $nom, $prenom, $email, $ville, $codepostal, $echantillon, $quantiteechantillon));

    header ('Location: ../../accueil.php?actionno=successmed');
} 
else 
{
    Header('location: ../../add_medecins.php?action=erreur');
}

?>