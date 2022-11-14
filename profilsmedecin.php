<HTML>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profils de votre médecin</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="content-start">

<center>

<?php 

include "inc/sql.php";

$sql = "SELECT * FROM medecins";

    $reponse = $bdd->query($sql);


    while ($medecin = $reponse->fetch()) {

        echo $medecin['nom']; 
        echo $medecin['prenom'];
    }
?>

<img class="shadow rounded-full h-48 w-96 align-middle border-none" src="img/cyril.jpg">


</center>




</body>
</html>