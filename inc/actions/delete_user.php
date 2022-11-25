<?php
include("./inc/sql.php"); 

$del_user = $bdd->query("DELETE * FROM utilisateurs WHERE id = '$id'");
    
?>