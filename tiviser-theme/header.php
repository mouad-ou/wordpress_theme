<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="IPTV, IPTV france, IPTV belgique, IPTV suisse, Smart IPTV, Abonnement IPTV, IPTV Smarters">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="home-page-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <?php if (has_custom_logo()) : ?>
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <?php the_custom_logo(); ?>
                </a>
            <?php else : ?>
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-w.png" alt="<?php bloginfo('name'); ?>">
                </a>
            <?php endif; ?>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color:#fff;">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'navbar-nav',
                    'container' => false,
                    'fallback_cb' => 'tiviser_fallback_menu',
                    'walker' => new Tiviser_Nav_Walker(),
                ));
                ?>
            </div>
        </div>
    </nav>
</header>
