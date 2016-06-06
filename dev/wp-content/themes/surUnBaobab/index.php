<?php
/*
        Template Name: Homepage
*/
get_header(); // function de wordpress qui va rechercher le fichier header.php qu'on a dans le fichier du .
?>
    <section class="sections sections--articles clear">
        <div class="wrap">
            <h2 class="sections__title">Nos articles</h2>
            <?php
                $posts = new WP_QUERY( [ 'posts_per_page' => 2 ] );
                if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
            ?>

                <a class="sections__subSections" href="<?php the_permalink(); ?>">
                    <img class="sections__subSections--photo" src="<?php the_post_thumbnail_url(); ?>" alt="" width="500" height="281"/>
                    <h3 class="sections__subSections--title"><?php the_title(); ?></h3>
                    <p class="sections__subSections--summary"><?php the_custom_excerpt(); ?></p>
                </a>

            <?php endwhile; endif; ?>

            <a class="sections__link button" href="actu">Voir tous nos articles</a>
        </div>
    </section>

    <section class="sections sections--metrages clear">
        <div class="wrap">
            <h2 class="sections__title">Nos courts-métrages</h2>

            <?php
                $posts = new WP_QUERY( [ 'posts_per_page' => 2, 'post_type' => 'projet' ] );
                if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
            ?>

                <a class="sections__subSections" href="<?php the_permalink(); ?>">
                    <img class="sections__subSections--photo" src="<?php the_post_thumbnail_url(); ?>" alt="" width="500" height="281"/>
                    <h3 class="sections__subSections--title"><?php the_title(); ?></h3>
                    <p class="sections__subSections--summary"><?php the_custom_excerpt(); ?></p>
                </a>

            <?php endwhile; endif; ?>

            <a class="sections__link button" href="movies">Voir tous nos courts-métrages</a>
        </div>
    </section>

    <section class="sections sections--tutos">
        <div class="wrap">
            <h2 class="sections__title">Anime toi-même</h2>
            <?php
                $posts = new WP_QUERY( [ 'posts_per_page' => 2, 'post_type' => 'tuto' ] );
                if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
            ?>

                <a class="sections__subSections" href="<?php the_permalink(); ?>">
                    <img class="sections__subSections--photo" src="<?php the_post_thumbnail_url(); ?>" alt="" width="500" height="281"/>
                    <h3 class="sections__subSections--title"><?php the_title(); ?></h3>
                    <p class="sections__subSections--summary"><?php the_custom_excerpt(); ?></p>
                </a>

            <?php endwhile; endif; ?>

            <a class="sections__link button" href="tuto">Voir tous nos tutoriels</a>
        </div>
    </section>

<?php get_footer();
