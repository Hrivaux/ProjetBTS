<?php
@session_start();
require ('global.php');

connected_only();

//On insère les données reçues
$sth = $bdd->prepare("
INSERT INTO notifications(id,user_id,message,send_date,urgence)
VALUES(:id, :user_id, :objet, :message, :urgence, :send_date)");
$sth->bindParam(':id',$id);
$sth->bindParam(':user_id',$user_id);
$sth->bindParam(':objet',$objet);
$sth->bindParam(':message',$message);    
$sth->bindParam(':urgence',$urgence);
$sth->bindParam(':send_date',$send_date);
$sth->execute();
            

?>