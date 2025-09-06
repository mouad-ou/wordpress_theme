<?php get_header(); ?>

<main class="page-main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="page-content">
                        <h1 class="page-title"><?php the_title(); ?></h1>
                        <div class="page-body">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
