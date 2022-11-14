<?php

//On insère les données reçues
$sth = $bdd->prepare("
INSERT INTO notifications(id,user_id,message,send_date,urgence)
VALUES(:prenom, :mail, :age, :sexe, :pays)");
$sth->bindParam(':prenom',$id);
$sth->bindParam(':mail',$user_id);
$sth->bindParam(':age',$message);
$sth->bindParam(':sexe',$send_date);    
$sth->bindParam(':pays',$urgence);
$sth->execute();
            

?>