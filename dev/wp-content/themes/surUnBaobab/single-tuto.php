<?php
/*
        Template Name: Single tuto
*/
get_header();
?>

<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
    <div>
        <aside class="sideNav sideNav--sticky">
            <h2 class="sideNav__titles hidden">Navigation secondaire</h2>
            <ol class="sideNav__list">
                <li class="sideNav__listElts">
                    <a href="#intro" class="sideNav__links sideNav__titles links">Introduction</a>
                </li>
                <li class="sideNav__listElts">
                    <a href="#video" class="sideNav__links sideNav__titles links">Le tutoriel</a>
                </li>
                <li class="sideNav__listElts">
                    <a href="#tech" class="sideNav__links sideNav__titles links">Fiche technique</a>
                </li>
            </ol>
        </aside>
        <section class="metrage" id="intro">
            <div class="bigWrap">
                <div class="wrap">
                    <div class="metrage__headers">
                        <img class="metrage__img" src="<?php the_post_thumbnail_url(); ?>" alt=""/>
                        <h2 class="metrage__titles"><?php the_title(); ?></h2>
                    </div>
                    <?php the_content(); ?>
                </div>
            </div>
        </section>

        <section class="metrage" id="video">
            <div class="bigWrap">
                <div class="wrap">
                    <h2 class="metrage__title">Le tutoriel</h2>
                    <iframe class="metrage__movie" width="854" height="480" src="<?php the_field('url_tuto') ?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </section>

        <section class="metrage clear" id="tech">
            <div class="bigWrap">
                <div class="wrap">
                    <h2 class="metrage__title">Fiche technique</h2>
                    <table class="metrage__table">
                        <tbody>
                            <tr class="metrage__tableRow">
                                <td class="metrage__tableHead"><p>Titre Français</p></th>
                                <td class="metrage__tableData"><p><?php the_field('titre'); ?></p></td>
                            </tr>
                            <tr class="metrage__tableRow">
                                <td class="metrage__tableHead"><p>Auteurs</p></th>
                                <td class="metrage__tableData"><p><?php the_field('auteur_du_tuto'); ?></p></td>
                            </tr>
                            <tr class="metrage__tableRow">
                                <td class="metrage__tableHead"><p>Logiciels utilisés</p></th>
                                <td class="metrage__tableData"><p><?php the_field('logiciels_utilise'); ?></p></td>
                            </tr>
                            <tr class="metrage__tableRow">
                                <td class="metrage__tableHead"><p>Matériel requis</p></th>
                                <td class="metrage__tableData"><p><?php the_field('materiel_requis'); ?></p></td>
                            </tr>
                            <tr class="metrage__tableRow">
                                <td class="metrage__tableHead"><p>Degré de difficulté</p></th>
                                <td class="metrage__tableData"><p><?php the_field('degre_de_difficulte'); ?></p></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
<?php endwhile; endif; ?>

<?php get_footer();
