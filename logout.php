<?php
require_once "global.php";

connected_only();
// $bdd->query("UPDATE utilisateurs SET online = '0' WHERE id = '".$user['id']."'");
session_destroy();
Header("Location: index.php");
exit();
?>