<?php
@session_start();
require ('global.php');

connected_only();


$idCR = htmlentities(trim($_GET['id']));
$idCR = (int) $idCR;

if (is_int($idCR))
{
	$requete = $bdd->prepare("SELECT * FROM comptesrendus WHERE id = '$idCR'"); 
        $requete->execute();
        $compterendu = $requete->fetch();

    }
    else
    {
    Header('location: accueil.php');
    }
?>
<h1>
    <?php echo $compterendu['compterendu'];?>
</h1>