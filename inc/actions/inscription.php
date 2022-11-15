<?php
require_once('../../global.php');
// Récupération des champs du formulaire

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$grade = $_POST['grade'];
$email = $_POST['email'];
$password = $_POST['password'];
$ville = $_POST['ville'];
$adresse = $_POST['adresse'];
$codepostal = $_POST['codepostal'];


if (!empty($nom) && !empty($prenom) && !empty($grade) && !empty($email) && !empty($password) && !empty($ville) && !empty($adresse) && !empty($codepostal)) {

    $reponse = $bdd->prepare("INSERT INTO utilisateurs(grade, nom, prenom, email, mot_de_passe, adresse, ville, code_postal, date_embauche, region, created_by) VALUES (?,?,?,?,?,?,?,?,?,?,?)");

    $reponse->execute(array($grade, $nom, $prenom, $email, $password, $adresse, $ville, $codepostal, $today, 'X', $id_encours));
    Header('location: ../../accueil.php?action=success');
} 
else
{
    Header('location: ../../inscription.php?action=erreur');
}