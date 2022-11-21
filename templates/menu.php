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
                        <label>Elements</label>
                    </li>
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Composants</span></a>
                        <ul class="pcoded-submenu">
                            <li  <?php if($page == "bc_button.php"){echo 'class="nav-item active"';} ?>><a href="<?php echo $url; ?>/bc_button.php" class="">Boutton</a></li>
                            <li  <?php if($page == "bc_badges.php"){echo 'class="nav-item active"';} ?>><a href="<?php echo $url; ?>/bc_badges.php" class="">Badges</a></li>
                            <li  <?php if($page == "bc_breadcrumb-pagination.php"){echo 'class="nav-item active"';} ?>><a href="<?php echo $url; ?>/bc_breadcrumb-pagination.php" class="">Breadcrumb & paggination</a></li>
                            <li  <?php if($page == "bc_collapse.php"){echo 'class="nav-item active"';} ?>><a href="<?php echo $url; ?>/bc_collapse.php" class="">Collapse</a></li>
                            <li  <?php if($page == "bc_tabs.php"){echo 'class="nav-item active"';} ?>><a href="<?php echo $url; ?>/bc_tabs.php" class="">Tabs & pills</a></li>
                            <li  <?php if($page == "bc_typography.php"){echo 'class="nav-item active"';} ?>><a href="<?php echo $url; ?>/bc_typography.php" class="">Typography</a></li>


                            <li class=""><a href="<?php echo $url; ?>/icon-feather.php" class="">Plume<span class="pcoded-badge label label-danger">Nouveau</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Saisies & consultations</label>
                    </li>
                    <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                        <a href="<?php echo $url; ?>/form_elements.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Rédiger CR</span></a>
                    </li>
                    <li data-username="Table bootstrap datatable footable" class="nav-item">
                        <a href="<?php echo $url; ?>/tbl_bootstrap.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-server"></i></span><span class="pcoded-mtext">Liste des comptes rendus</span></a>
                    </li>
                    <li data-username="Liste des médecins" class="nav-item">
                        <a href="<?php echo $url; ?>/tb_medecin.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-server"></i></span><span class="pcoded-mtext">Liste des médecins</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Chart & Maps</label>
                    </li>
                    <li data-username="Charts Morris" class="nav-item"><a href="<?php echo $url; ?>/chart-morris.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Chart</span></a></li>
                    <li data-username="Maps Google" class="nav-item"><a href="<?php echo $url; ?>/map-google.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Maps</span></a></li>
                    <?php if ($user['grade'] >= 3) { ?>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Administration</label>
                    </li>
                    <li data-username="Paramètres du site" class="nav-item"><a href="<?php echo $url; ?>/site_settings.php" class="nav-link"><span class="pcoded-micon"><i class="feather icon-settings"></i></span><span class="pcoded-mtext">Paramètres du site</span></a></li>
                    <li data-username="Notifications" class="nav-item"><a href="<?php echo $url; ?>/notifications.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Notifications</span></a></li>
                    <li data-username="Création de compte" class="nav-item"><a href="<?php echo $url; ?>/inscription.php" class="nav-link"><span class="pcoded-micon"><i class="feather icon-plus-circle"></i></span><span class="pcoded-mtext">Création de compte</span></a></li>
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