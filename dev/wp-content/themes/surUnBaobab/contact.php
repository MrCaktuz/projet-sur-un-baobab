<?php
/*
        Template Name: Contact
*/
get_header();
?>

    <div>
        <aside class="sideNav sideNav--sticky">
            <h2 class="sideNav__titles hidden">Navigation secondaire</h2>
            <ol class="sideNav__list">
                <li class="sideNav__listElts">
                    <a href="#baobab" class="sideNav__links sideNav__titles links">Sur Un Baobab</a>
                </li>
                <?php
                    $posts = new WP_QUERY( [ 'post_type' => 'admins' ] );
                    if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
                ?>
                    <li class="sideNav__listElts">
                        <a href="#<?php the_title(); ?>" class="sideNav__links links sideNav__titles"><?php the_title(); ?></a>
                    </li>
                <?php endwhile; endif; ?>
                <li class="sideNav__listElts">
                    <a href="#form" class="sideNav__links sideNav__titles links">contactez-nous</a>
                </li>
            </ol>
        </aside>

        <section class="contacts" id="baobab">
            <div class="bigWrap">
                <div class="wrap">
                    <h2 class="contacts__title">Sur Un Baobab</h2>
                    <p class="contacts__elts"><span class="contacts__elts--label">Email : </span><a class="contacts__mailto" href="mailto:surunbaobab@gmail.com">surunbaobab@gmail.com</a></p>
                    <p class="contacts__elts"><span class="contacts__elts--label">WhatsApp :</span> +32 495 34 89 66</p>
                    <p class="contacts__elts"><span class="contacts__elts--label">Tél. Belgique :</span> +32 497 36 39 75</p>
                </div>
            </div>
        </section>

        <?php
            $posts = new WP_QUERY( [ 'post_type' => 'admins' ] );
            if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
        ?>
            <section class="contacts" id="<?php the_title(); ?>">
                <div class="bigWrap">
                    <div class="wrap">
                        <h2 class="contacts__title"><?php the_title(); ?></h2>
                        <img class="contacts__photos" src="<?php the_post_thumbnail_url(); ?>" alt="" />
                        <div class="contacts__textBlocs">
                            <?php the_content(); ?>
                        </div>
                        <p class="contacts__elts"><span class="contacts__elts--label">Email : </span><a class="contacts__mailto" href="mailto:surunbaobab@gmail.com"><?php the_field('mail') ?></a></p>
                    </div>
                </div>
            </section>
        <?php endwhile; endif; ?>

        <section class="contacts" id="form">
            <div class="bigWrap">
                <div class="wrap">
                    <h2 class="contacts__title">Contact-nous</h2>
                    <?php
                        $posts = new WP_QUERY( [ 'post_type' => 'Forms' ] );
                        if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
                    ?>
                        <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </section>
    </div>

<?php get_footer();
