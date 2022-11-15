<?php 
// Nombre de médecins rattachés
$nbmed = $bdd->query("select count(*) as nb from medecins WHERE visiteur_id = $id_encours");
$data = $nbmed->fetch();
$nbmedecins = $data['nb'];

// Nombre d'utilisateurs totaux
$nbusers = $bdd->query("select count(*) as nb from utilisateurs");
$data = $nbusers->fetch();
$nbutilisateurs = $data['nb'];

// Nombre de personnes qui ont mon grade
$nbgrade = $bdd->query("select count(*) as nb, G.libelle_grade as 'nom_grade'
from utilisateurs   U
LEFT JOIN grade     G ON U.grade = G.id_grade
WHERE U.grade = $grade_encours");
$data = $nbgrade->fetch();
$nbutilisateursgrade = $data['nb'];
$nomgrade = $data['nom_grade'];
if ($nbutilisateursgrade > 1) { $nomgrade = $nomgrade."s"; }
?>