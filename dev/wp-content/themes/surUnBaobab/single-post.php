<?php
/*
        Template Name: Single Article
*/
get_header();
?>

    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
        <div class="bigWrap">
            <articles class="article">
                <div class="article__headers">
                    <img class="article__img" src="<?php the_post_thumbnail_url(); ?>" alt=""/>
                    <h2 class="article__titles"><?php the_title(); ?></h2>
                </div>
                <div class="article__textBlocs">
                    <?php the_content(); ?>
                </div>
            </articles>
        </div>
    <?php endwhile; endif; ?>

<?php get_footer();
