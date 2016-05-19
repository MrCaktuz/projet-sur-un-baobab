<?php
/*
*/
get_header(); // function de wordpress qui va rechercher le fichier header.php qu'on a dans le fichier du .
?>

        <section class="archive">
            <h2 class="archive__title">Tous mes articles</h2>


            <div class="archive__container" style="width: 50%;">

                <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

                    <h2><?php the_title(); ?></h2>
                    <div class="">
                        <?php the_custom_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>">Voir l'article</a>

                <?php endwhile; endif; ?>

            </div>


        </section>

<?php get_footer();
