<?php
@session_start();
require ('global.php');

connected_only();

if ($grade_encours <= 2) 
{
    Header('location: accueil.php');
}
else {
    
$pageinfo = "Saisie de compte rendu";

include('templates/meta.php');
?>
<body>
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>

    <?php include('templates/menu.php'); ?>

    <?php include('templates/header.php'); ?>


    <div class="pcoded-main-container">
        
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">Compte rendue</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Form Componants</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Form Elements</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <section class="form-compter card-body"> 
                    <div class="card-body">
                        <div class="page-wrapper">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header text-center">
                                            <h5>Ecrivez votre compte rendu</h5>
                                        </div>
                                        <div class="card-body">
                                            <h5>Compte rendu de M. <?php echo $prenomnom; ?></h5>
                                            <hr>
                                            <div class="card-body">
                                                <div class="">
                                                <form action="inc/actions/form_compterendu.php" method="POST" class="text-center">
                                                        <div class="text-center">
                                                        <h5 class="text-center">Nom du médecin</h5>
                                                            <hr>
                                                              <select name="id_medecin"  id="id_medecin" class="form-control text-center" required>
		                                                    	<?php $reponse = $bdd->query('SELECT id, nom, prenom FROM medecins');
                                                                     while ($donnees = $reponse->fetch())
									                                        {
									                                            ?>
				        	                                                <option value="<?php echo $donnees['id']; ?>"> 
					                                                        <?php echo $donnees['prenom']." ".$donnees['nom']; ?>
					                                                        </option>
				                                                        	<?php } ?>
	                                                                    	</select>
                                                        </div>
                                                        
                                                        <div class="">
                                                
                                                        <div class="form-group">
                                                        <h5 class="mt-5">Date</h5>
                                                        <hr>    
                                                            <input name="date" type="date" class="form-control text-center" placeholder="Date">
                                                        </div>
                                                        <div class="form-group">
                                                            <h5 class="mt-5">Echantillon tester</h5>
                                                            <hr>
                                                              <select name="id_echantillon"  id="id_echantillon" class="form-control text-center" required>
		                                                    	<?php $reponse = $bdd->query('SELECT id, nom_medicament, fournisseur FROM echantillons');
                                                                     while ($donnees = $reponse->fetch())
									                                        { ?>
				        	                                                <option value="<?php echo $donnees['id']; ?>"> 
					                                                            <?php echo $donnees['nom_medicament']; ?>
					                                                        </option>
				                                                        	<?php } ?>
	                                                                    	</select>
                                                        </div>
                                                        <div class="">
                                                <div class="text-center">
                                                    <h5 class="mt-5">Avis</h5>
                                                    <hr>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="bien_passer" name="avis" class="custom-control-input" value="bien_passer">
                                                        <label class="custom-control-label" for="bien_passer">Bien passer </label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="mal_passer" name="avis" class="custom-control-input" value="mal_passer">
                                                        <label class="custom-control-label" for="mal_passer">Mal passer</label>
                                                    </div>
                                                    <div class="text-center">
                                                    <h5 class="mt-5">Etat</h5>
                                                    <hr>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="1" name="etat" class="custom-control-input" value="terminer" type="enum">
                                                        <label class="custom-control-label" for="1">Terminer </label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="0" name="etat" class="custom-control-input" value="a_terminer" type="enum">
                                                        <label class="custom-control-label" for="0">A terminer</label>
                                                    </div>
                                                    
                                                    
                                                    </div>
                                                    </div>
                                                        <h5 class="mt-5">Commentaire </h5>                                      
                                                       <hr> 
                                                            <input type="text" name="compterendu" class="form-control height: 300px;"  size="50" id="compterendu" rows="5"></input>
                                                            <br><br>
                                                      <input type="submit" value="Envoyer"class="btn btn-primary"/>  
                                                    </div>
                                                </form>
                                                </div>
                                            
                                          <!-- <h5 class="mt-5">Sizing</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input class="mb-3 form-control form-control-lg" type="text" placeholder=".form-control-lg">
                                                    <input class="mb-3 form-control" type="text" placeholder="Default input">
                                                    <input class="mb-3 form-control form-control-sm" type="text" placeholder=".form-control-sm">
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="mb-3 form-control form-control-lg">
                                                        <option>Large select</option>
                                                    </select>
                                                    <select class="mb-3 form-control">
                                                        <option>Default select</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h5 class="mt-5">Inline</h5>
                                            <hr>
                                            <form class="form-inline">
                                                <div class="form-group mb-2">
                                                    <label for="staticEmail2" class="sr-only">Email</label>
                                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
                                                </div>
                                                <div class="form-group mx-sm-3 mb-2">
                                                    <label for="inputPassword2" class="sr-only">Password</label>
                                                    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                                                </div>
                                                <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
                                            </form>
                                            <h3 class="mt-5">Checkboxes and Radios</h3>
                                            <h5 class="mt-3">Checkboxes</h5>
                                            <hr>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                            </div> -->
                                            
                                                   <!-- <h5 class="mt-5">Inline</h5>
                                                    <hr>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadioInline1">Toggle this custom radio</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadioInline2">Or toggle this other custom radio</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="mt-5">Range</h5>
                                                    <hr>
                                                    <label for="customRange1">Example range</label>
                                                    <input type="range" class="custom-range" id="customRange1">
                                                    <label for="customRange2">Example range</label>
                                                    <input type="range" class="custom-range" min="0" max="5" id="customRange2">
                                                    <label for="customRange3">Example range</label>
                                                    <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     Input group 
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Input Group</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">@</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                                                </div>
                                            </div>
                                            <label for="basic-url">Your vanity URL</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                                </div>
                                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                            <h5 class="mt-5">Sizing</h5>
                                            <hr>
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                            </div>
                                            <div class="input-group input-group-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                            <h5 class="mt-5">Button Addons</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <button class="btn btn-primary" type="button">Button</button>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary" type="button">Button</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <button class="btn btn-primary" type="button">Button</button>
                                                            <button class="btn btn-secondary" type="button">Button</button>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-secondary" type="button">Button</button>
                                                            <button class="btn btn-primary" type="button">Button</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5 class="mt-5">Buttons With Dropdowns</h5>
                                                    <hr>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#!">Action</a>
                                                                <a class="dropdown-item" href="#!">Another action</a>
                                                                <a class="dropdown-item" href="#!">Something else here</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#!">Separated link</a>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#!">Action</a>
                                                                <a class="dropdown-item" href="#!">Another action</a>
                                                                <a class="dropdown-item" href="#!">Something else here</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#!">Separated link</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5 class="mt-5">Segmented Buttons</h5>
                                                    <hr>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <button type="button" class="btn btn-secondary">Action</button>
                                                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#!">Action</a>
                                                                <a class="dropdown-item" href="#!">Another action</a>
                                                                <a class="dropdown-item" href="#!">Something else here</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#!">Separated link</a>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-secondary">Action</button>
                                                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#!">Action</a>
                                                                <a class="dropdown-item" href="#!">Another action</a>
                                                                <a class="dropdown-item" href="#!">Something else here</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#!">Separated link</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          [ Main Content ] end -->
                        </div>
                    </div>
                </div>
                                                                            </section>
            </div>
        </div>
    </div>
    
    <!-- [ Main Content ] end -->

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

 <!-- Modal box erreurs -->
<div class="modal fade" id="erreur" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="tbmodal">
			<h3 style="color:white;">Une erreur est survenue, veuillez vérifier que tous les champs aient bien été remplis.</h3>
		</div>
	</div>
</div>
<?php
	if(isset($_GET['action1'])) 
	{
		$errlogin = htmlspecialchars($_GET['action1']);
		
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
