<?php 

require_once 'sql.php';


    $id_medecin = $_POST["id_medecin"];
    $id_echantillon = $_POST["id_echantillon"];
    $date = $_POST["date"];
    $autre_infos = $_POST["autre_infos"];
    



 $req="INSERT INTO compterendus (id_medecin, id_echantillon, date, autre_infos) VALUES ('$id_medecin','$id_echantillon','$date','$autre_infos')";

 if ($bdd->exec($req))

 {
    echo "Insertion réusie";

 }
 else 
 {

    echo "Insertion ratée";
 }


    
    
    
    
    ?>