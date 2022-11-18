<?php
session_start();

require_once '../../global.php';

$objet = $_POST['objet'];
$msg = $_POST['message'];
$urg = $_POST['urgence'];
$date = date('d-m-y');

if (!empty($objet) && !empty($msg) && !empty($urg)) {

    $reponse = $bdd->prepare("INSERT INTO notifications(user_id,objet,message,urgence,send_date) VALUES (?,?,?,?,?)");

    $reponse->execute(array($id_encours, $objet, $msg, $urg, $date));

    //echo "<script type='script'> alert('Notification envoyée'); </script>";
    header ('Location: ../../accueil.php?action=success');
} 
else 
{
   // echo "<script> alert('Merci de remplir tous les champs'); </script>";
    Header('location: ../../form_notification.php?action=erreur');
}



?>
	<!-- Modal box erreurs -->
    <div class="modal fade" id="erreur" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="tbmodal">
			<h3 style="color:white;">Une erreur est survenue, veuillez vérifier que tous les champs aient bien été remplis.</h3>
		</div>
	</div>
</div>
<?php
	if(isset($_GET['action'])) 
	{
		$errlogin = htmlspecialchars($_GET['action']);
		
		switch($errlogin)
		{
			case 'erreur':
?>
<script>
    $(document).ready(function()
    {
        $("#erreur").modal('show');
    });
</script>
<?php break; } } ?>	
