<?php
/*
        Template Name: Single Article
*/
get_header(); // function de wordpress qui va rechercher le fichier header.php qu'on a dans le fichier du .
?>

    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

        <section class="article">
            <h2 class="article__title"><?php the_title(); ?></h2>
            <div class="article__content" style="width: 50%;">
                <?php the_content(); ?>
            </div>
        </section>

    <?php endwhile; endif; ?>

<?php get_footer();
