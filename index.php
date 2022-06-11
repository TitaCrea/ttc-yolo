<?php
get_header(); ?>




            
            <div class="tm-main">
                <!-- Home/Header section -->
                <div class="tm-section-wrap">
                    <div class="tm-parallax" data-parallax="scroll" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/img/img-01.png"></div>                   

                    <section id="home" class="tm-section">
                        <h2 class="tm-heading-primary"><?php bloginfo( 'title' ); ?></h2>
                        <hr class="mb-4">
                    
                        <div id="single-thumbnail" class="col-lg-12">
                            <?php the_post_thumbnail(  ); ?>
                        </div>
                                                
                        <h1 class="tm-heading-secondary"><?php the_title(); ?></h1>
                        <h3 class="tm-heading-secondary" style="margin-left:-15px;">Sous-titre</h3>
                        <hr class="mb-2">
                        <div class="row tm-row-home">                            
                            <div class="">
                                <div class="media mb-4">
                                    <img class="tm-post-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/svg/meeting-icon.svg" >
                                    <!-- <i class="fas fa-dove fa-2x tm-post-icon tm-text-primary"></i> -->
                                    <div class="media-body">
                                        <h3><a href="#post3" class="d-block mb-2 tm-text-secondary tm-post-link">Centre Marcel Barbey, 1346 Le Lieu</a></h3>  
                                        <p>
                                            Rendez-vous est donné aux participant.e.s au lieu-dit "L'Allemagne" sur la commune du Lieu. <br>
                                            Premier départ à 10h00 tapantes !
                                        </p>
                                    </div>                                    
                                </div>
                                <div class="media mb-4">
                                    <img class="tm-post-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/svg/info-icon.svg" >
                                    <!-- <i class="fas fa-dove fa-2x tm-post-icon tm-text-primary"></i> -->
                                    <div class="media-body">
                                        <h3><a href="#post3" class="d-block mb-2 tm-text-secondary tm-post-link">Samedi 15 octobre 2022</a></h3>  
                                        <p>
                                            Le programme est encore à définir plus précisément, mais vous êtes tous attendus
                                            D&Eacute;GUIS&Eacute;S ! <br>
                                            Thème du Rallye : la <strong>Bande Dessinée</strong>
                                        </p>
                                    </div>                                    
                                </div>
                                <div class="media mb-4">
                                    <img class="tm-post-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/svg/map-icon.svg" >
                                    <!-- <i class="fas fa-scroll fa-2x tm-post-icon tm-text-primary"></i> -->
                                    <div class="media-body">
                                        <h3><a href="#post2" class="d-block mb-2 tm-text-secondary tm-post-link">Itinéraire</a></h3> 
                                        <p>
                                            Nous vous emmènerons entre le lac de Joux et la frontière, dans la forêt du Risoud, pour un itinéraire de 17km environ. Le parcours se fera intégralement sur territoire suisse.</p>
                                    </div>                                    
                                </div>
                                <div class="media mb-4">
                                    <img class="tm-post-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/svg/weather-icon.svg" >
                                    <!-- <i class="fas fa-cloud-sun fa-2x tm-post-icon tm-text-primary"></i> -->
                                    <div class="media-body">
                                        <h3><a href="#post2" class="d-block mb-2 tm-text-secondary tm-post-link">Conditions météo</a></h3> 
                                        <p>
                                            Pas de parapluie à cheval ! <br>
                                            Qu'il pleuve, qu'il neige, qu'il vente ou qu'il bise,
                                            le rallye aura lieu.<br>
                                            Même par grand soleil !
                                        </p>
                                    </div>                                    
                                </div>
                                <div class="ttc-content">
                                    <?php the_content(); ?>
                                </div>
                                <div class="text-center">
                                    <a href="#rallye" class="btn btn-primary tm-btn-next">Infos & Inscriptions</a>
                                </div>                                    
    
                            </div>
                            <!-- <div class="tm-col-home mr-0 ml-auto">
                                <div class="tm-img-home-container"></div>                                
                            </div> -->
                        </div>
                    </section>
                </div>


<?php 
get_footer(); ?>