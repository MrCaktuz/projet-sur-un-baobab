<?php
/*
        Template Name: Homepage
*/
get_header(); // function de wordpress qui va rechercher le fichier header.php qu'on a dans le fichier du .
?>

    <section class="intro">

        <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

            <h2 class="intro__title"><?php the_title(); ?></h2>
            <p class="intro__slogan"><?php bloginfo( 'description' ); ?></p>
            <div class="intro__text">
                <!-- Contenu wysiwyg -->
                <?php the_content(); ?>

            </div>

            <aside class="about">
                <h3 class="about__title"><?php the_field( 'about_title' ); ?></h3>
                <div class="about_text">
                    <?php the_field( 'about_content' ); ?>
                </div>
            </aside>

        <?php endwhile; endif; ?>

    </section>

    <section class="lastestArticles">
        <h2 class="lastestArticles__title">Mes articles</h2>
        <div class="lastestArticles__container">

            <?php
                $posts = new WP_QUERY( [ 'posts_per_page' => 3 ] );
                if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
            ?>

                <article class="articles">
                    <h3 class="article__title"><?php the_title(); ?></h3>
                    <p class="article__date">Published the <time datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'l j F Y' ); ?></time></p>
                    <p class="article__excerpt"><?php the_custom_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="article__more">Lire la suite</a>
                </article>

            <?php endwhile; endif; ?>

        </div>
    </section>

    <section class="lastestProjects">
        <h2 class="lastestProjects__title">Derniers courts-métrages</h2>
        <div class="lastestProjects__container">
            <?php
                $posts = new WP_QUERY( [ 'posts_per_page' => 3, 'post_type' => 'projet' ] );
                if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
            ?>

            <article class="project">
                <h3 class="project__title"><?php the_title(); ?></h3>

                <?php the_post_thumbnail( 'medium' ); ?>

                <?php
                    // récupérer le SRC de l'image et l'injecter dans un tag <img>
                ?>

                <dl class="project__details">
                    <dt class="project__label">Pays</dt>
                    <dd class="project__value"><?php the_field( 'country' ); ?></dd>
                    <dt class="project__label">Durée</dt>
                    <dd class="project__value"><?php the_field( 'time' ); ?></dd>
                </dl>

                <a href="<?php the_permalink(); ?>" class="project__link">Voir le projet</a>
            </article>

            <?php endwhile; endif; ?>

        </div>
    </section>

<?php get_footer();
