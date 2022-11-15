<?php
session_start();

require_once '../../global.php';

$objet = $_POST['objet'];
$msg = $_POST['message'];
// Rajouter le champ urgence + rajouter dans la requête la colonne urgence + la valeur récupérée

// Date courante
$date = date('d-m-y');

if (!empty($objet) && !empty($msg)) {

    $reponse = $bdd->prepare("INSERT INTO notifications(user_id,objet,message,send_date) VALUES (?,?,?,?)");

    $reponse->execute(array($id_encours, $objet, $msg, $date));

    echo "<script type='script'> alert('Notification envoyée'); </script>";
    header ('Location: ../../accueil.php');
} 
else 
{
    echo "<script type='script'> alert('Merci de remplir tous les champs'); </script>";
}

?>