<?php
      // On recupere l'URL de la page pour ensuite affecter class = "active" aux liens de nav
      $page = $_SERVER['REQUEST_URI'];
      $page = str_replace("/siteyetistudio/", "",$page);
?>
    
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="<?php echo $url; ?>/accueil.php" class="b-brand">
                    <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div>
                    <span class="b-title">GSB</span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item active">
                        <a href="<?php echo $url; ?>/accueil.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Tableau de bord</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>RDV DE SES MORTS</label>
                    </li>
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds">
                        <a href="prendre_rdv.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-calendar"></i></span><span class="pcoded-mtext">Prise de rendez-vous</span></a>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Saisies & consultations</label>
                    </li>
                    <li data-username="rediger CR" class="nav-item">
                        <a href="<?php echo $url; ?>/redact_cr.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Rédiger CR</span></a>
                    </li>
                    <li data-username="Liste des comptes-rendus" class="nav-item">
                        <a href="<?php echo $url; ?>/liste_cr.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-server"></i></span><span class="pcoded-mtext">Liste des comptes rendus</span></a>
                    </li>
                    <li data-username="Liste des médecins" class="nav-item">
                        <a href="<?php echo $url; ?>/tb_medecin.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-server"></i></span><span class="pcoded-mtext">Liste des médecins</span></a>
                    </li>
                    <li data-username="Ajouter un médecin" class="nav-item">
                        <a href="<?php echo $url; ?>/add_medecins.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-server"></i></span><span class="pcoded-mtext">Ajouter un médecin</span></a>
                    </li>
                    <!--<li class="nav-item pcoded-menu-caption">
                        <label>Chart & Maps</label>
                    </li>
                     <li data-username="Charts Morris" class="nav-item"><a href="<?php echo $url; ?>/chart-morris.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Chart</span></a></li> -->
                     <?php if ($user['grade'] >= 3) { ?>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Administration</label>
                    </li>
                    <li data-username="Paramètres du site" class="nav-item"><a href="<?php echo $url; ?>/site_settings.php" class="nav-link"><span class="pcoded-micon"><i class="feather icon-settings"></i></span><span class="pcoded-mtext">Paramètres du site</span></a></li>
                    <li data-username="Notifications" class="nav-item"><a href="<?php echo $url; ?>/notifications.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-bell"></i></span><span class="pcoded-mtext">Notifications</span></a></li>
                    <li data-username="Création de compte" class="nav-item"><a href="<?php echo $url; ?>/inscription.php" class="nav-link"><span class="pcoded-micon"><i class="feather icon-plus-circle"></i></span><span class="pcoded-mtext">Création de compte</span></a></li>
                    <li data-username="Historique (logs)" class="nav-item"><a href="<?php echo $url; ?>/logs.php" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Historique (logs)</span></a></li>
                    <?php } ?>

                    <li class="nav-item pcoded-menu-caption">
                        <label>Mon compte</label>
                    </li>
                    <!-- <li data-username="" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="auth-signup.html" class="" target="_blank">S'enregistrer</a></li>
                            <li class=""><a href="auth-signin.html" class="" target="_blank">Connexion</a></li>
                        </ul>
                    </li>
                    <li data-username="Sample Page" class="nav-item"><a href="sample-page.php" class="nav-link"><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample page</span></a></li> -->
                    <li data-username="Déconnexion" class="nav-item"><a href="<?php echo $url; ?>/logout.php" class="nav-link"><span class="pcoded-micon"><i class="feather icon-power"></i></span><span class="pcoded-mtext">Déconnexion</span></a></li>
                </ul>
            </div>
        </div>
    </nav>