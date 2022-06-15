<!DOCTYPE html>
<html <?php language_attributes( 'fr_FR' ); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' )?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>



</head>
<body <?php body_class() ?>> 

<div class="container-fluid">
        <div class="row">
            <!-- Leftside bar -->
            <div id="tm-sidebar" class="tm-sidebar"> 
                <nav class="tm-nav">
                    <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div>
                        <div class="tm-brand-box">
                            <div class="tm-brand">
                            <a href="<?php echo site_url(); ?>">  
                            <img src="<?php echo get_theme_file_uri( '/img/logo.png' ) ?>" alt="logo"></a>
                            </div>
                        </div>                
                        <ul id="tm-main-nav">
                            <li class="nav-item">                                
                                <a href="<?php echo site_url(); ?>" class="nav-link current">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-home nav-icon"></i>
                                    Accueil
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo site_url( '/events/rallye-du-risoud-2022' ); ?>" class="nav-link">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-user-friends nav-icon"></i>
                                    Rallye du Risoud
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#about" class="nav-link external" target="_parent" rel="sponsored">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-calendar-alt nav-icon"></i>
                                    About
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#contact" class="nav-link">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-envelope nav-icon"></i>
                                    Contact
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="#gallery" class="nav-link">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-images nav-icon"></i>
                                    Galerie Photos
                                </a>
                            </li> -->
                        </ul>
                    </div>
                    <footer id="sidebar-footer" class="mb-3 tm-mt-100">
                        <p>Votre publicité ici ?</p>
                    </footer>
                </nav>
            </div>

            <div class="tm-main">
            
