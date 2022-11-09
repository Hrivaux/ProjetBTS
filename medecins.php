<?php
// on se connecte à notre base
@session_start();
require ('global.php');
include('templates/menu.php');

connected_only(); 

// lancement de la requete
$query=$bdd->prepare('SELECT * FROM medecins');
$query->execute();
echo'<table><><td>Id</td><td>N°siret</td><td>Nom</td><td>Prenom</td><td>Lieu</td><td>Type medicament</td><td>Quantite_echantillon</td>';
while($data=$query->fetch())
{
echo'<tr><td>'.$data['id'].'</td><td>'.$data['siret'].'</td><td>'.$data['nom'].'</td><td>'.$data['prenom'].'</td></tr>'.$data['ville'].'</td></tr>'.$data['type_medicament'].'</td><td>'.$data['quantite_echantillon'].'</td></tr>';
}
echo'</table>';
?>


