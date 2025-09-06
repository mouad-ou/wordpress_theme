<?php get_header(); ?>

<main class="home-main">
    <div class="sct-home-header">
        <img class="page-bg-lg" src="<?php echo get_template_directory_uri(); ?>/assets/img/home-page-bg-lg3860.png?v=1">
        <img class="page-bg-sm" src="<?php echo get_template_directory_uri(); ?>/assets/img/home-page-bg-sm3860.png?v=1">
        
        <section class="home-header-content">
            <div class="container">
                <div class="row row-panel">
                    <div class="col col-12 col-lg-6 lf-panel-side">
                        <div style="text-align: center; padding: 5px;">
                            <h1 class="abn-tlt" style="font-size:70px;">1an à<span style="color:#ef0e2a;"> 39€</span></h1>
                            <h2 class="date" style="font-weight: bold; color: #ef0e2a; margin-bottom: -20px;font-size: 1.5rem">OFFRE EXPIRE CE SOIR</h2>
                            
                            <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 20px; font-weight: bold; color: #fff;">
                                <div style="flex: 0 0 auto; text-align: center;">
                                    <div id="hours" style="font-size: 4.2rem;">00</div>
                                    <div style="font-size: 1rem;">HEURES</div>
                                </div>
                                <div style="flex: 0 0 auto; text-align: center;">
                                    <div id="minutes" style="font-size: 4.2rem;">00</div>
                                    <div style="font-size: 1rem;">MINUTES</div>
                                </div>
                                <div style="flex: 0 0 auto; text-align: center;">
                                    <div id="seconds" style="font-size: 4.2rem;">00</div>
                                    <div style="font-size: 1rem;">SECONDES</div>
                                </div>
                            </div>
                        </div>

                        <h3 class="s-tlt" style="font-weight:800;">ACCÉDEZ À +65000 CHAÎNES TÉLÉ</h3>
                        
                        <ul class="check-ls">
                            <li class="check-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/trial/check-mark-yl.png">
                                <span>LIVRAISON <strong>IMMÉDIATE</strong></span>
                            </li>
                            <li class="check-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/trial/check-mark-yl.png">
                                <span><strong>SEVICE CLIENT</strong> RÉACTIF <strong class="clr-yl">7j/7</strong></span>
                            </li>
                            <li class="check-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/trial/check-mark-yl.png">
                                <span><strong>SATISFAIT</strong> OU <strong>REMBOURSÉ</strong></span>
                            </li>
                            <li class="check-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/trial/check-mark-yl.png">
                                <span><strong>PAIEMENT UNIQUE</strong></span>
                            </li>
                        </ul>

                        <div class="d-flex btn-flex">
                            <a href="" class="btn btn-offer btn-yl flashbtns-yl" data-bs-toggle="modal" data-bs-target="#popupAbo">
                                <div class="ctx-txt">
                                    <span>Profitez de l'offre à 39 € Maintenant</span>
                                </div>
                                <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.png">
                            </a>
                        </div>
                    </div>

                    <div class="col col-12 col-lg-6">
                        <div class="img-holder">
                            <img class="img-price" src="<?php echo get_template_directory_uri(); ?>/assets/img/fr/home-page-pricee42d.png?version=1">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- TV Section -->
    <div class="sct-home-tv">
        <div class="tv-layers">
            <img class="tv-blank" src="<?php echo get_template_directory_uri(); ?>/assets/img/trial/tv-blank.png">
            <div class="tv-owl owl-carousel owl-theme" id="tv-owl">
                <div class="slide-holder"><img class="tv-slide" src="<?php echo get_template_directory_uri(); ?>/assets/img/fr/tv-slide-01.png"></div>
                <div class="slide-holder"><img class="tv-slide" src="<?php echo get_template_directory_uri(); ?>/assets/img/fr/tv-slide-02.png"></div>
                <div class="slide-holder"><img class="tv-slide" src="<?php echo get_template_directory_uri(); ?>/assets/img/fr/tv-slide-03.png"></div>
            </div>
            <img class="tv-overlay" src="<?php echo get_template_directory_uri(); ?>/assets/img/trial/tv-overlay.png">
        </div>
        
        <div class="leagues-list">
            <div class="leagues-owl owl-carousel owl-theme" id="leagues-owl-tv">
                <?php for ($i = 1; $i <= 11; $i++): ?>
                    <div class="logo-holder">
                        <img class="logo-league" src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/league-<?php echo sprintf('%02d', $i); ?>.png">
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        
        <div class="text-content">
            <h3 class="tlt">Regardez tous vos <strong>chaînes</strong> et vos <strong>émissions</strong> préférés</h3>
            <div class="icon-side">
                <img loading="lazy" class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/trial/icon-media.png">
                <div class="ctx">
                    <h3 class="ctx-tlt">+65000</h3>
                    <h4 class="ctx-txt">Chaînes</h4>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col col-12 text-center">
                    <h1 class="rt-tlt" style="color:#ee273c;font-weight: 800;">Des Chaînes du Monde Entier!</h1>
                    <p class="rt-txt">Profitez d'une grande variété de chaînes du monde entier, toutes organisées et catégorisées pour votre commodité.</p>
                </div>
            </div>
        </div>
        
        <div class="channels-list">
            <div class="channels-owl owl-carousel owl-theme" id="channels-owl">
                <?php for ($i = 1; $i <= 14; $i++): ?>
                    <div class="logo-holder">
                        <img loading="lazy" class="logo-channel" src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/logo-<?php echo sprintf('%02d', $i); ?>.png">
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div class="sct-home-services">
        <section class="home-services-content">
            <div class="scroll-down floating">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.png">
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col col-12">
                        <h1 class="sct-tlt">Meilleur Service <strong class="clr-yl">IPTV</strong></h1>
                    </div>

                    <div class="col col-12 col-md-12 col-lg-6 text-center">
                        <img loading="lazy" class="pros-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/fr/pros-pr-bg.webp">
                    </div>

                    <div class="col col-12 col-md-12 col-lg-6">
                        <ul class="check-ls">
                            <li class="check-item">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/trial/check-mark-yl.png">
                                <span>Aucune facture mensuelle pour regarder le foot</span>
                            </li>
                            <li class="check-item">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/trial/check-mark-yl.png">
                                <span>Aucune connaissance requise pour l'installation</span>
                            </li>
                            <li class="check-item">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/trial/check-mark-yl.png">
                                <span>Un support technique à votre écoute 7j/7</span>
                            </li>
                            <li class="check-item">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/trial/check-mark-yl.png">
                                <span>Un contenu mis à jour régulièrement</span>
                            </li>
                            <li class="check-item">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/trial/check-mark-yl.png">
                                <span>EPG & Bouquets soigneusement Organisés</span>
                            </li>
                            <li class="check-item">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/trial/check-mark-yl.png">
                                <span>Compatible avec tous vos Appareils</span>
                            </li>
                            <li class="check-item">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/trial/check-mark-yl.png">
                                <span>Satisfait ou Remboursé</span>
                            </li>
                        </ul>
                    </div>

                    <div class="col col-12">
                        <p class="sub-tlt">Optez pour la meilleure offre IPTV & Épargnez plus de <strong>1000€</strong> sur l'année</p>
                        <div class="d-flex justify-content-center">
                            <a href="" class="btn btn-offer btn-yl flashbtns-yl" data-bs-toggle="modal" data-bs-target="#popupAbo">
                                <div class="ctx-txt">
                                    <span>Profitez de l'offre à 39€ Maintenant</span>
                                </div>
                                <img loading="lazy" class="arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.png">
                            </a>
                        </div>
                        <h3 class="sm-txt-btn text-center">Livraison instantanée dès Accés</h3>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- How it Works Section -->
    <div class="sct-home-steps">
        <section class="home-steps-content">
            <div class="container">
                <div class="row">
                    <div class="col col-12 text-center">
                        <h1 class="sct-tlt">Comment ça marche<span class="clr-pr">?</span></h1>
                        <p class="sct-txt">Une fois l'application installée, connectez-vous avec les identifiants de votre compte et vous aurez un accès instantané à des milliers de chaînes du monde entier.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-12 col-lg-4">
                        <article class="how-step">
                            <div class="num" style="background-color:#ee273c;">1</div>
                            <h3 class="tlt">COMMANDER</h3>
                            <p class="txt">Une fois la commande passée, vos liens et identifiants apparaîtront sur la page de remerciement et sur votre boîte email.</p>
                        </article>
                    </div>

                    <div class="col col-12 col-lg-4">
                        <article class="how-step">
                            <div class="num" style="background-color:#ee273c;">2</div>
                            <h3 class="tlt">INSTALLER</h3>
                            <p class="txt">Suivez les instructions d'installation pour chaque appareil que vous souhaitez utilisez.</p>
                        </article>
                    </div>

                    <div class="col col-12 col-lg-4">
                        <article class="how-step">
                            <div class="num" style="background-color:#ee273c;">3</div>
                            <h3 class="tlt">REGARDER</h3>
                            <p class="txt">Vivez votre passion sur votre télé, votre smartphone ou votre ordinateur.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Movies Section -->
    <div class="sct-home-mov bg-pr">
        <div class="tlt-section">
            <div class="container">
                <div class="row">
                    <div class="col col-12">
                        <h1 class="mn-tlt">Derniers <strong class="clr-pr" style="color:#ee273c;">Films</strong> &<strong class="clr-pr" style="color:#ee273c;"> Séries</strong></h1>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mov-panel">
            <img loading="lazy" class="popcorn-01 floating" src="<?php echo get_template_directory_uri(); ?>/assets/img/trial/popcorn-01.png">
            <img loading="lazy" class="popcorn-02 floating-rev" src="<?php echo get_template_directory_uri(); ?>/assets/img/trial/popcorn-02.png">
            
            <div class="mov-list">
                <div class="mov-owl owl-carousel owl-theme" id="mov-owl">
                    <?php for ($i = 1; $i <= 13; $i++): ?>
                        <div class="mov-holder">
                            <img loading="lazy" class="mov-poster" src="<?php echo get_template_directory_uri(); ?>/assets/img/movies/mov-<?php echo sprintf('%02d', $i); ?>.webp">
                        </div>
                    <?php endfor; ?>
                </div>
            </div>

            <div class="text-content">
                <h3 class="tlt">Regardez tous les événements <strong>sportifs</strong> et vos <strong>émissions</strong> préférés</h3>
                <div class="icon-side">
                    <img loading="lazy" class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/trial/icon-movie.png">
                    <div class="ctx">
                        <h3 class="ctx-tlt">+65000</h3>
                        <h4 class="ctx-txt">Chaînes</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sports Leagues Section -->
    <div class="sct-home-leagues">
        <section class="home-leagues-content">
            <div class="container">
                <div class="row">
                    <div class="col col-12">
                        <div class="header text-center">
                            <h1 class="big-tlt" style="color:#ee273c;">Regardez</h1>
                            <h2 class="date">Tous les Événements Sportifs</h2>
                        </div>

                        <div class="leagues-list">
                            <div class="leagues-owl owl-carousel owl-theme" id="leagues-owl">
                                <?php for ($i = 1; $i <= 11; $i++): ?>
                                    <div class="logo-holder">
                                        <img loading="lazy" class="logo-league" src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/league-<?php echo sprintf('%02d', $i); ?>.png">
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>

                        <!-- Timer Section -->
                        <div style="text-align: center; margin: 40px auto; padding: 10px;">
                            <h2 class="date" style="font-weight: bold; color: #ef0e2a; margin-bottom: -20px;font-size: 1.5rem">OFFRE EXPIRE BIENTÔT</h2>
                            
                            <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 20px; font-weight: bold; color: #fff;">
                                <div style="flex: 0 0 auto; text-align: center;">
                                    <div class="hours" style="font-size: 4.2rem;">00</div>
                                    <div style="font-size: 1rem;">HEURES</div>
                                </div>
                                <div style="flex: 0 0 auto; text-align: center;">
                                    <div class="minutes" style="font-size: 4.2rem;">00</div>
                                    <div style="font-size: 1rem;">MINUTES</div>
                                </div>
                                <div style="flex: 0 0 auto; text-align: center;">
                                    <div class="seconds" style="font-size: 4.2rem;">00</div>
                                    <div style="font-size: 1rem;">SECONDES</div>
                                </div>
                            </div>
                        </div>

                        <div class="content">
                            <p class="txt">Qu'attendez-vous ? Profitez de l'offre à 39€ Maintenant, et regardez le match dans le confort de votre maison.</p>
                            <div class="d-flex">
                                <a href="" class="btn btn-offer btn-yl flashbtns-yl" data-bs-toggle="modal" data-bs-target="#popupAbo">
                                    <div class="ctx-txt">
                                        <span>Profitez de l'offre à 39€ Maintenant</span>
                                    </div>
                                    <img loading="lazy" class="arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right-w.png">
                                </a>
                            </div>
                            <h3 class="sm-txt-btn text-center">Livraison instantanée dès Accés</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Reviews Section -->
    <div class="sct-home-reviews">
        <img loading="lazy" class="over-quote floating" src="<?php echo get_template_directory_uri(); ?>/assets/img/over-quote.png">
        <section class="home-reviews-content">
            <div class="container">
                <div class="row">
                    <div class="col col-12 text-center">
                        <h4 class="sub-tlt">Ne vous contentez pas de prendre notre parole</h4>
                        <h1 class="mn-tlt" style="color:#ee273c;">UNE EXPÉRIENCE IPTV 5 ÉTOILES</h1>
                        <p class="mn-txt">Voici quelques témoignages de nos clients satisfaits qui ont vécu une diffusion sans interruption grâce à notre service IPTV.</p>
                    </div>
                </div>

                <div class="splide splide--loop splide--ltr splide--draggable is-active" id="ece-splide">
                    <div class="splide__track" id="ece-splide-track">
                        <ul class="splide__list" id="ece-splide-list">
                            <li class="splide__slide">
                                <article class="trustpilot-card">
                                    <div class="rating">
                                        <div class="stars">
                                            <?php for ($i = 0; $i < 5; $i++): ?>
                                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/trustpilot-star.svg">
                                            <?php endfor; ?>
                                        </div>
                                        <p class="time">il y a 3 jours</p>
                                    </div>
                                    <h4 class="tlt">Meilleur service pour les fans de football</h4>
                                    <p class="txt">J'ai bien apprécié votre assistance et je suis très satisfait de la qualité de votre IPTV, Vous méritez le nom du leader IPTV !</p>
                                    <div class="ln-separator"></div>
                                    <h6 class="name">Ana R.</h6>
                                </article>
                            </li>
                            
                            <li class="splide__slide">
                                <article class="trustpilot-card">
                                    <div class="rating">
                                        <div class="stars">
                                            <?php for ($i = 0; $i < 5; $i++): ?>
                                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/trustpilot-star.svg">
                                            <?php endfor; ?>
                                        </div>
                                        <p class="time">il y a 1 semaine</p>
                                    </div>
                                    <h4 class="tlt">Excellent rapport qualité-prix</h4>
                                    <p class="txt">Un rapport qualité-prix incroyable. La sélection de chaînes et la qualité des flux sont exceptionnelles. Je le recommande vivement !</p>
                                    <div class="ln-separator"></div>
                                    <h6 class="name">Antonio M.</h6>
                                </article>
                            </li>
                            
                            <li class="splide__slide">
                                <article class="trustpilot-card">
                                    <div class="rating">
                                        <div class="stars">
                                            <?php for ($i = 0; $i < 5; $i++): ?>
                                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/trustpilot-star.svg">
                                            <?php endfor; ?>
                                        </div>
                                        <p class="time">il y a 1 semaine</p>
                                    </div>
                                    <h4 class="tlt">Service client imbattable</h4>
                                    <p class="txt">Tout marche nickel, merci à Nadine du support pour son aide</p>
                                    <div class="ln-separator"></div>
                                    <h6 class="name">Isabella T.</h6>
                                </article>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
