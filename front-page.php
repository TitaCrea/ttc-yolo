<?php
get_header(); ?>




            
<!-- Frontpage > Header section -->
<div class="tm-section-wrap">
    <div class="tm-parallax" data-parallax="scroll" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img-01.png"></div>                   
    <section id="home" class="tm-section">
        <h1 class="tm-heading-primary"><?php bloginfo( 'title' ); ?></h1>
        <hr class="mb-4">
        <div class="row">
            <div class="col-lg-12 tm-col-home">
                <div class="tm-text-container">
                    <h3 class="tm-heading-secondary">
                        Bienvenue chez nous !
                    </h3>
                    <p>
                        Nous sommes extrêmement heureux de vous accueillir sur notre tout nouveau site.
                    </p>
                    <p>
                        Et que dire de la joie de vous retrouver bientôt pour la manifestation
                        de nos 20 ans : le Rallye du <strong>15 octobre 2022</strong>. Place aux infos !
                    </p>
                </div>
            </div>
        </div>
        <hr class="tm-hr-short mb-5">

        <?php 

            $alaUne = new WP_Query( array(
                'post_type' => 'event',
                'posts_per_page' => 1,
                
            ));

            while( $alaUne->have_posts(  ) ) {
                $alaUne->the_post(  ); 
            ?>
        <h2 class="tm-heading-secondary"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <hr class="mb-4">
        <div class="col-lg-12">
            <h3 class="tm-heading-secondary" style="margin-left:-15px;"><?php the_field( 'page_subtitle' ); ?></h3>
            <div id="single-thumbnail">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            </div>
        </div>

        <div class="row tm-row-home">                            
            <div class="">
                <?php the_excerpt(); ?>
            </div>
            <div class="text-center">
                <a href="<?php the_permalink(); ?>" class="btn btn-primary tm-btn-next">Lire la suite...</a>
            </div>                                    
            <!-- <div class="tm-col-home mr-0 ml-auto">
            <div class="tm-img-home-container"></div>                                
            </div> -->
        </div> 
        <?php } ?>
    </section>
</div>
<!-- Gallery section -->
<div class="tm-section-wrap">
    <div class="tm-parallax" data-parallax="scroll" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img-02.jpg"></div>                   
    <section id="gallery" class="tm-section">
        <h2 class="tm-heading-secondary">Agenda 20'22</h2>
        <hr class="mb-5">

        <div class="row tm-row-about">
            <div class="">
                <h3 class="mb-4">
                    20 ANS ! 
                </h3>
                <p class="mb-4">
                    Oui, déjà ! 
                </p>
                <p class="mb-4">
                    Très bientôt, vous trouverez ici même toutes les infos concernant les autres activités organisées par les membres de l'Amicale
                    pour égrener cette <strong>Année Anniversaire 20'22</strong> de bulles de bonheur avec nos amis les chevaux.
                </p>
            </div>
            <!-- <div class="tm-col-about tm-col-about-r">
                <img src="assets/img/img-about-01.jpg" alt="Image" class="img-fluid mb-5 tm-img-about">
                <p>
                    Duis fringilla eget purus luctus sodales. Sed auctor odio quis ligula dignissim efficitur vitae vitae quam.
                </p>
            </div> -->
        </div>
        <div class="mt-5">
            <div class="tm-carousel">
            <?php 

                $furtherEvents = new WP_Query( array(
                    'post_type' => 'event', 
                    
                ));

                while( $furtherEvents->have_posts(  ) ) {
                    $furtherEvents->the_post(  ); 
                ?>

                <div class="tm-carousel-item">
                    <figure class="effect-honey mb-4">
                        <img src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" alt="Featured Item">
                        <figcaption>
                            Sous-titre
                            <!-- <ul class="tm-social">
                                <li><a href="https://facebook.com" class="tm-social-link"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram"></i></a></li>
                            </ul> -->
                        </figcaption>
                    </figure>
                    <div class="tm-about-text">
                        <a href="<?php the_permalink(); ?>"><h3 class="mb-3 tm-text-primary tm-about-title"><?php the_title(); ?></h3></a>
                        <p><?php 
                            if( has_excerpt() ) { // SPECIAL Brad's Tip
                                echo get_the_excerpt(); // replace the_excerpt() that has 'space around'.
                                } 
                            else {
                                echo wp_trim_words( get_the_content(), 18 );
                                } ?></p>
                        <h4 class="tm-text-secondary tm-about-subtitle">Infos suivront</h4>
                    </div>
                </div>
                <?php } ?>
                
                <div class="tm-carousel-item">
                    <figure class="effect-honey mb-4">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about-02.jpg" alt="Featured Item">
                        <figcaption>24 septembre<br/>Aux Charbonnières
                            <!-- <ul class="tm-social">
                                <li><a href="https://facebook.com" class="tm-social-link"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram"></i></a></li>
                            </ul> -->
                        </figcaption>
                    </figure>
                    <div class="tm-about-text">
                        <h3 class="mb-3 tm-text-primary tm-about-title">Fête du Vacherin</h3>
                        <p>Au plaisir de retrouver le sourire des enfants attendant leur tour !</p>
                        <h4 class="tm-text-secondary tm-about-subtitle">Infos suivront</h4>
                    </div>
                </div>

                <div class="tm-carousel-item">
                    <figure class="effect-honey mb-4">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about-03.jpg" alt="Featured Item">
                        <figcaption>
                            <ul class="tm-social">
                                <li><a href="https://facebook.com" class="tm-social-link"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </figcaption>
                    </figure>
                    <div class="tm-about-text">
                        <h3 class="mb-3 tm-text-primary tm-about-title">Cours d'équitation</h3>
                        <p>Pour la rentrée scolaire 20'22, nous vous proposerons des nouveautés, de fidèles instructeurs et des conditions idéales ! En tant que membre, vous bénéficiez d'un tarif préférentiel.</p>
                        <h4 class="tm-text-secondary tm-about-subtitle">Infos suivront</h4>
                    </div>
                </div>

                <div class="tm-carousel-item">
                    <figure class="effect-honey mb-4">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about-01.jpg" alt="Featured Item">
                        <figcaption>
                            <ul class="tm-social">
                                <li><a href="https://facebook.com" class="tm-social-link"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </figcaption>
                    </figure>
                    <div class="tm-about-text">
                        <h3 class="mb-3 tm-text-primary tm-about-title">Les "Jeudredis"</h3>
                        <p>Le rendez-vous mensuel, des membres (ou pas), à pied, à vélo ... ou à cheval. Apéro garanti.</p>
                        <h4 class="tm-text-secondary tm-about-subtitle">Senior Director</h4>
                    </div>
                </div>
                
            </div>
        </div>

    </section>
</div>
<!-- About section -->
<div class="tm-section-wrap">
    <div class="tm-parallax" data-parallax="scroll" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img-04.jpg"></div>
    <section id="about" class="tm-section">
        <h2 class="tm-text-primary">Projet : Galerie Photos</h2>
        <hr class="mb-5">

        <ul class="tm-gallery-links">
            <li>
                <a href="javascript:void(0);" class="active tm-gallery-link" data-filter="*">
                    <i class="fas fa-layer-group tm-gallery-link-icon"></i>
                    Toutes les photos
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="tm-gallery-link" data-filter="portrait">
                    <i class="fas fa-portrait tm-gallery-link-icon"></i>
                    Cours
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="tm-gallery-link" data-filter="nature">
                    <i class="fas fa-leaf tm-gallery-link-icon"></i>
                    Jeudredis
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="tm-gallery-link" data-filter="animal">
                    <i class="fas fa-paw tm-gallery-link-icon"></i>
                    Sortie Anniversaire
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="tm-gallery-link" data-filter="building">
                    <i class="far fa-building tm-gallery-link-icon"></i>
                    Autres
                </a>
            </li>
        </ul>
        <div class="tm-gallery">
            <figure class="effect-honey tm-gallery-item portrait">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/tn/portrait-01.jpg" alt="Image"/>
                <figcaption>
                    <h2><i>Dreamy Honey</i></h2>
                    <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/portrait-01.jpg">View more</a>						
                </figcaption>			
            </figure>
            <figure class="effect-honey tm-gallery-item building">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/tn/building-01.jpg" alt="Image"/>
                <figcaption>
                    <h2><i>Dreamy Honey</i></h2>
                    <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/building-01.jpg">View more</a>						
                </figcaption>			
            </figure>  
            <figure class="effect-honey tm-gallery-item nature">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/tn/nature-01.jpg" alt="Image"/>
                <figcaption>
                    <h2><i>Dreamy Honey</i></h2>
                    <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/nature-01.jpg">View more</a>						
                </figcaption>			
            </figure>
            <figure class="effect-honey tm-gallery-item animal">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/tn/animal-01.jpg" alt="Image"/>
                <figcaption>
                    <h2><i>Dreamy Honey</i></h2>
                    <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/animal-01.jpg">View more</a>						
                </figcaption>			
            </figure> 
            <figure class="effect-honey tm-gallery-item building">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/tn/building-02.jpg" alt="Image"/>
                <figcaption>
                    <h2><i>Dreamy Honey</i></h2>
                    <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/building-02.jpg">View more</a>						
                </figcaption>			
            </figure>
            <figure class="effect-honey tm-gallery-item nature">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/tn/nature-02.jpg" alt="Image"/>
                <figcaption>
                    <h2><i>Dreamy Honey</i></h2>
                    <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/nature-02.jpg">View more</a>						
                </figcaption>			
            </figure> 
            <figure class="effect-honey tm-gallery-item portrait">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/tn/portrait-02.jpg" alt="Image"/>
                <figcaption>
                    <h2><i>Dreamy Honey</i></h2>
                    <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/portrait-02.jpg">View more</a>						
                </figcaption>			
            </figure>
            <figure class="effect-honey tm-gallery-item animal">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/tn/animal-02.jpg" alt="Image"/>
                <figcaption>
                    <h2><i>Dreamy Honey</i></h2>
                    <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/animal-02.jpg">View more</a>						
                </figcaption>			
            </figure> 

        </div>                        





    </section>
</div>

<!-- Contact section -->
<div class="tm-section-wrap">
    <div class="tm-parallax" data-parallax="scroll" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img-03.jpg"></div>
    <div id="contact" class="tm-section">
        <h2 class="tm-text-primary">Contact Upright</h2>
        <hr class="mb-5">
        <div class="row">
            <div class="col-xl-6 tm-contact-col-l mb-4">
                <form id="contact-form" action="" method="POST" class="tm-contact-form">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control rounded-0" placeholder="Name" required />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control rounded-0" placeholder="Email" required />
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="contact-select" name="inquiry">
                            <option value="-">Subject</option>
                            <option value="sales">Sales &amp; Marketing</option>
                            <option value="creative">Creative Design</option>
                            <option value="uiux">UI / UX</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea rows="8" name="message" class="form-control rounded-0" placeholder="Message" required=></textarea>
                    </div>

                    <div class="form-group tm-text-right">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
            <div class="col-xl-6 tm-contact-col-r">
                <!-- Map -->
                <div class="mapouter mb-4">
                    <!-- <div class="gmap_canvas">
                        <iframe width="100%" height="520" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div> -->
                </div>

                <!-- Address -->
                <address class="mb-4">
                    120-240 eget purus luctus sodales. Sed<br>
                    auctor odio quis ligula dignissim efficitur<br>
                    vitae vitae quam 16502
                </address>

                <!-- Links -->
                <ul class="tm-contact-links mb-4">
                    <li class="mb-2">
                        <a href="tel:0100200340">
                            <i class="fas fa-phone mr-2 tm-contact-link-icon"></i>
                            Tel: 010-020-0340
                        </a>
                    </li>
                    <li>
                        <a href="mailto:info@company.com">
                            <i class="fas fa-at mr-2 tm-contact-link-icon"></i>
                            Email: info@company.com
                        </a>
                    </li>
                </ul>
                <ul class="tm-contact-social">
                    <li><a href="https://fb.com/templatemo" class="tm-social-link"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://youtube.com" class="tm-social-link"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>