<?php
/*
        Template Name: Single metrage
*/
get_header();
?>

<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
    <div>
        <aside class="sideNav sideNav--sticky">
            <h2 class="sideNav__titles hidden">Navigation secondaire</h2>
            <ol class="sideNav__list">
                <li class="sideNav__listElts">
                    <a href="#movie" class="sideNav__links sideNav__titles links">Le film</a>
                </li>
                <li class="sideNav__listElts">
                    <a href="#project" class="sideNav__links sideNav__titles links">Le projet</a>
                </li>
                <li class="sideNav__listElts">
                    <a href="#makingof" class="sideNav__links sideNav__titles links">Making of</a>
                </li>
                <li class="sideNav__listElts">
                    <a href="#tech" class="sideNav__links sideNav__titles links">Fiche technique</a>
                </li>
            </ol>
        </aside>
        <section class="metrage">
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

        <section class="metrage" id="movie">
            <div class="bigWrap">
                <div class="wrap">
                    <h2 class="metrage__title">Le film</h2>
                    <iframe class="metrage__movie" width="854" height="480" src="<?php the_field('url_film') ?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </section>

        <section class="metrage" id="project">
            <div class="bigWrap">
                <div class="wrap">
                    <h2 class="metrage__title">Le projet</h2>
                    <div class="metrage__textBlocs">
                        <?php the_field('project') ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="metrage clear" id="makingof">
            <div class="bigWrap">
                <div class="wrap">
                    <h2 class="metrage__title">Making of</h2>
                    <div class="metrage__text">
                        <?php the_field('making_of') ?>
                    </div>
                    <div class="metrage__galerie clear">
                        <h3 class="metrage__subTitle">Galerie photos</h3>
                    </div>
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
                                <td class="metrage__tableData"><p><?php the_field('title'); ?></p></td>
                            </tr>
                            <tr class="metrage__tableRow">
                                <td class="metrage__tableHead"><p>Durée</p></th>
                                <td class="metrage__tableData"><p><?php the_field('time'); ?></p></td>
                            </tr>
                            <tr class="metrage__tableRow">
                                <td class="metrage__tableHead"><p>Pays</p></th>
                                <td class="metrage__tableData"><p><?php the_field('country'); ?></p></td>
                            </tr>
                            <tr class="metrage__tableRow">
                                <td class="metrage__tableHead"><p>Année</p></th>
                                <td class="metrage__tableData"><p><?php the_field('annee'); ?></p></td>
                            </tr>
                            <tr class="metrage__tableRow">
                                <td class="metrage__tableHead"><p>Techniques</p></th>
                                <td class="metrage__tableData"><p><?php the_field('tech'); ?></p></td>
                            </tr>
                            <tr class="metrage__tableRow">
                                <td class="metrage__tableHead"><p>Thème</p></th>
                                <td class="metrage__tableData"><p><?php the_field('theme'); ?></p></td>
                            </tr>
                            <tr class="metrage__tableRow">
                                <td class="metrage__tableHead"><p>Participants</p></th>
                                <td class="metrage__tableData"><p><?php the_field('participants'); ?></p></td>
                            </tr>
                            <tr class="metrage__tableRow">
                                <td class="metrage__tableHead"><p>Direction et coordination</p></th>
                                <td class="metrage__tableData"><p><?php the_field('direction_et_coordination'); ?></p></td>
                            </tr>
                            <tr class="metrage__tableRow">
                                <td class="metrage__tableHead"><p>Assistants</p></th>
                                <td class="metrage__tableData"><p><?php the_field('assistants'); ?></p></td>
                            </tr>
                            <tr class="metrage__tableRow">
                                <td class="metrage__tableHead"><p>Histoire originale</p></th>
                                <td class="metrage__tableData"><p><?php the_field('histoire_original'); ?></p></td>
                            </tr>
                            <tr class="metrage__tableRow">
                                <td class="metrage__tableHead"><p>Scénario</p></th>
                                <td class="metrage__tableData"><p><?php the_field('scenario'); ?></p></td>
                            </tr>
                            <tr class="metrage__tableRow">
                                <td class="metrage__tableHead"><p>Musique</p></th>
                                <td class="metrage__tableData"><p><?php the_field('musique'); ?></p></td>
                            </tr>
                            <tr class="metrage__tableRow">
                                <td class="metrage__tableHead"><p>Montage son</p></th>
                                <td class="metrage__tableData"><p><?php the_field('montage_son'); ?></p></td>
                            </tr>
                            <tr class="metrage__tableRow">
                                <td class="metrage__tableHead"><p>Montage image</p></th>
                                <td class="metrage__tableData"><p><?php the_field('montage_image'); ?></p></td>
                            </tr>
                            <tr class="metrage__tableRow">
                                <td class="metrage__tableHead"><p>Production</p></th>
                                <td class="metrage__tableData"><p><?php the_field('production'); ?></p></td>
                            </tr>
                            <tr class="metrage__tableRow">
                                <td class="metrage__tableHead"><p>Langue</p></th>
                                <td class="metrage__tableData"><p><?php the_field('langue'); ?></p></td>
                            </tr>
                            <tr class="metrage__tableRow">
                                <td class="metrage__tableHead"><p>Sous-titres disponibles</p></th>
                                <td class="metrage__tableData"><p><?php the_field('sous-titre'); ?></p></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
<?php endwhile; endif; ?>

<?php get_footer();
