<?php
/*
        Template Name: Single Article
*/
get_header(); // function de wordpress qui va rechercher le fichier header.php qu'on a dans le fichier du .
?>

    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

        <section class="project">
            <h2 class="project__title"><?php the_title(); ?></h2>

            <?php the_post_thumbnail( 'medium' ); ?>

            <div class="project__content" style="width: 50%;">
                <?php the_content(); ?>
            </div>
            <dl class="project__details">
                <dt class="project__label">Pays</dt>
                <dd class="project__value"><?php the_field( 'country' ); ?></dd>
                <dt class="project__label">Durée</dt>
                <dd class="project__value"><?php the_field( 'time' ); ?></dd>
            </dl>
        </section>

    <?php endwhile; endif; ?>

<?php get_footer();
