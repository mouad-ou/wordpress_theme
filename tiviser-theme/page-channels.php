<?php
/*
Template Name: Channels Page
*/
get_header(); ?>

<main class="channels-main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="page-title">Liste des Chaînes</h1>
                
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="page-content">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; endif; ?>
                
                <!-- Channel Categories -->
                <div class="channel-categories">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="category-card">
                                <h3>Sport</h3>
                                <div class="channel-logos">
                                    <?php for ($i = 1; $i <= 6; $i++): ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/logo-<?php echo sprintf('%02d', $i); ?>.png" alt="Channel <?php echo $i; ?>">
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="category-card">
                                <h3>Divertissement</h3>
                                <div class="channel-logos">
                                    <?php for ($i = 7; $i <= 12; $i++): ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/logo-<?php echo sprintf('%02d', $i); ?>.png" alt="Channel <?php echo $i; ?>">
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="category-card">
                                <h3>Actualités</h3>
                                <div class="channel-logos">
                                    <?php for ($i = 13; $i <= 18; $i++): ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/d-<?php echo sprintf('%02d', $i-12); ?>.png" alt="Channel <?php echo $i; ?>">
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-5">
                    <a href="" class="btn btn-offer btn-yl flashbtns-yl" data-bs-toggle="modal" data-bs-target="#popupAbo">
                        <div class="ctx-txt">
                            <span>Profitez de l'offre à 39€ Maintenant</span>
                        </div>
                        <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.png">
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
