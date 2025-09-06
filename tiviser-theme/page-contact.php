<?php
/*
Template Name: Contact Page
*/
get_header(); ?>

<main class="contact-main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="page-title">Contact</h1>
                
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="page-content">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; endif; ?>
                
                <div class="contact-form-section">
                    <div class="row">
                        <div class="col-lg-8">
                            <form class="contact-form" method="post" action="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nom *</label>
                                            <input type="text" class="form-control" id="name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email *</label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="subject">Sujet</label>
                                    <input type="text" class="form-control" id="subject" name="subject">
                                </div>
                                <div class="form-group">
                                    <label for="message">Message *</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Envoyer le message</button>
                            </form>
                        </div>
                        
                        <div class="col-lg-4">
                            <div class="contact-info">
                                <h3>Informations de contact</h3>
                                <div class="contact-item">
                                    <h4>Support Client</h4>
                                    <p>Disponible 7j/7 pour vous aider</p>
                                </div>
                                <div class="contact-item">
                                    <h4>Réponse rapide</h4>
                                    <p>Nous répondons généralement sous 24h</p>
                                </div>
                                <div class="contact-item">
                                    <h4>Assistance technique</h4>
                                    <p>Aide à l'installation et configuration</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
