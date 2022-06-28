<?php

// version 1.0 dev TTC Yolo > en faire le single de base
get_header(); ?>

            
    <!-- Post/Header section -->
    <div class="ttc-single-wrap">
        <!-- <div class="tm-parallax" data-parallax="scroll" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img-01.png"></div>                    -->

        <section id="home" class="tm-section">


                <?php if ( !is_front_page() ) { ?>
                    <h1 class="tm-heading-primary"><a href="<?php echo site_url(); ?>"><?php bloginfo( 'title' ); ?></a></h1>
                    <hr class="mb-4">

                <?php
                }
                ?>

            <div class="row"> <!-- header d'article, 2 colonnes 8/4 -->
                <div id="single-thumbnail" class="col-xl-8">
                    <?php the_post_thumbnail(  ); ?>
                </div>
                <div id="top-sidebar" class="col-xl-4">
                    <div class="ttc-text-icon">
                        <div class=" media mb-4 align-items-center">
                            <img class="tm-post-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/meeting-icon.svg" >
                            <!-- <i class="fas fa-dove fa-2x tm-post-icon tm-text-primary"></i> -->
                            <div class="media-body">
                                <h4><a href="#post3" class="d-block mb-2 tm-text-secondary tm-post-link">Centre Marcel Barbey, 1345 Le Lieu</a></h4>  
                            </div>                                    
                        </div>
                        <div class=" media mb-4 align-items-center">
                            <img class="tm-post-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/info-icon.svg" >
                            <!-- <i class="fas fa-dove fa-2x tm-post-icon tm-text-primary"></i> -->
                            <div class="media-body">
                                <h4><a href="#post3" class="d-block mb-2 tm-text-secondary tm-post-link">Samedi 15 octobre 2022</a></h4>  
                            </div>                                    
                        </div>
                        <div class=" media mb-4 align-items-center">
                            <img class="tm-post-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/map-icon.svg" >
                            <!-- <i class="fas fa-scroll fa-2x tm-post-icon tm-text-primary"></i> -->
                            <div class="media-body">
                                <h4><a href="#post2" class="d-block mb-2 tm-text-secondary tm-post-link">Tracé de 15km env. Terrain varié jurassique.</a></h4> 
                            </div>                                    
                        </div>
                        <div class=" media mb-4 align-items-center">
                            <img class="tm-post-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/weather-icon.svg" >
                            <!-- <i class="fas fa-cloud-sun fa-2x tm-post-icon tm-text-primary"></i> -->
                            <div class="media-body">
                                <h4><a href="#post2" class="d-block mb-2 tm-text-secondary tm-post-link">Par tous les temps.</a></h4> 
                            </div>                                    
                        </div>
                    </div>
                </div>
            </div>                     

            <!-- Post Content -->
            <h1 class="tm-heading-primary"><?php the_title(); ?></h1>        
            <h2 class="tm-heading-secondary"><?php the_field( 'page_subtitle' ); ?></h2>
            <hr class="mb-4">
            <div class="row tm-row-home">                            
                <div class="">
                    <div class="ttc-excerpt">
                        <?php the_excerpt(); ?>
                    </div>

                    <div class="ttc-content">
                        <?php the_content(); ?>
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