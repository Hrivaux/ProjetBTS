<?php
@session_start();
require ('global.php');

connected_only();

if ($grade_encours <= 2) 
{
    Header('location: accueil.php');
}
else {
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>GSB - Ouverture d'un compte</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <form method="post" action="inc/actions/inscription.php">
                        <div class="mb-4">
                            <i class="feather icon-user-plus auth-icon"></i>
                        </div>
                        <h3 class="mb-4">S'enregistrer</h3>
                        <div class="input-group mb-3">
                            <input type="text" name="nom" class="form-control" placeholder="Nom">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="prenom" class="form-control" placeholder="Prenom">
                        </div>
                        <div class="input-group mb-3">
                            <select name="grade" class="form-control" id="grade">
                                <option value="1">Visiteur</option>
                                <option value="2">Délégué</option>
                                <option value="3">Responsable</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Adresse mail">
                        </div>
                        <div class="input-group mb-4">
                            <input type="password" name="password" class="form-control" placeholder="Mot de passe à définir">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="ville" class="form-control" placeholder="Ville">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="adresse" class="form-control" placeholder="Adresse">
                        </div>
                        <div class="input-group mb-3">
                            <input id="zip" name="codepostal" type="text" pattern="[0-9]*" class="form-control"placeholder="Code postal">
                        </div>
                        <input type="submit" value="Ouvrir le compte" class="btn btn-primary shadow-2 mb-4"/>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

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
</body>
</html>
<?php 
} 
?>