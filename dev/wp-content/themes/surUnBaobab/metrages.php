<?php
/*
        Template Name: metrages
*/
get_header();
?>

    <aside class="sideNav">
        <h2 class="sideNav__titles">Nos Courts-métrages</h2>
        <ol class="sideNav__list">
            <?php
                $posts = new WP_QUERY( [ 'post_type' => 'metrage' ] );
                if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
            ?>
                <li class="sideNav__listElts">
                    <a href="<?php the_permalink(); ?>" class="sideNav__links links"><?php the_title(); ?></a>
                </li>
            <?php endwhile; endif; ?>
        </ol>
    </aside>
    <div class="bigWrap">
        <h2 class="archives__title">Nos courts-métrages</h2>
        <?php
            $posts = new WP_QUERY( [ 'post_type' => 'metrage' ] );
            if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
        ?>
            <articles>
                <div class="wrap">
                    <a class="archives" href="<?php the_permalink(); ?>">
                        <div class="archives__headers">
                            <img class="archives__img" src="<?php the_post_thumbnail_url(); ?>" alt=""/>
                            <h2 class="archives__titles"><?php the_title(); ?></h2>
                        </div>
                        <p class="archives__text"><?php the_custom_excerpt(); ?></p>
                    </a>
                </div>
            </articles>
        <?php endwhile; endif; ?>

    </div>

<?php get_footer();
