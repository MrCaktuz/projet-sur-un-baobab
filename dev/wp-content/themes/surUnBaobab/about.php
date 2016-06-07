<?php
/*
        Template Name: About
*/
get_header();
?>

<div>
    <aside class="sideNav sideNav--sticky">
        <h2 class="sideNav__titles hidden">Navigation secondaire</h2>
        <ol class="sideNav__list">
            <?php
                $posts = new WP_QUERY( [ 'post_type' => 'about' ] );
                if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
            ?>
                <li class="sideNav__listElts">
                    <a href="#<?php the_title(); ?>" class="sideNav__links links sideNav__titles"><?php the_title(); ?></a>
                </li>
            <?php endwhile; endif; ?>
            <li class="sideNav__listElts">
                <a href="#galerie" class="sideNav__links links sideNav__titles">Galerie</a>
            </li>
        </ol>
    </aside>

    <?php
        $posts = new WP_QUERY( [ 'post_type' => 'about' ] );
        if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
    ?>
    <section class="propos" id="<?php the_title(); ?>">
        <div class="bigWrap">
            <div class="wrap">
                <h2 class="propos__title"><?php the_title(); ?></h2>
                <div class="propos__sub">
                    <div class="propos__textBlocs">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; endif; ?>

    <section class="propos clear" id="galerie">
        <div class="bigWrap">
            <div class="wrap">
                <h2 class="propos__title">Galerie</h2>
                <div class="propos__galerie clear">

                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer();
