    <footer class="footer clear">
        <div class="wrap">
            <div class="footer__rows clear">
                <section class="footerSections footerSections--siteMap">
                    <h2 class="footerSections__title hidden">Site map</h2>
                    <ul class="footerSections__list">
                        <?php foreach ( b_get_menu_items( 'main-nav' ) as $navItem ): ?>
                            <li>
                                <a href="<?php echo $navItem -> url; ?>" class="footerSections__elem"><?php echo $navItem -> label ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </section>
                <section class="footerSections footerSections--news">
                    <h2 class="footerSections__title">Actu récente</h2>
                    <ul class="footerSections__list">
                        <?php
                            $posts = new WP_QUERY( [ 'posts_per_page' => 5 ] );
                            if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
                        ?>

                            <a href="<?php the_permalink(); ?>" class="footerSections__elem"><?php the_title(); ?></a>

                        <?php endwhile; endif; ?>
                    </ul>
                </section>
                <section class="footerSections footerSections--contact">
                    <h2 class="footerSections__title">Contact</h2>
                    <p class="footerSections__ligne"><a href="mailto:surunbaobab@gmail.com"><strong>surunbaobab@gmail.com</strong></a></p>
                    <p class="footerSections__ligne"><strong>WhatsApp&nbsp;: </strong>+32 495 34 89 66</p>
                    <p class="footerSections__ligne"><strong>Tel. Belgique&nbsp;: </strong>+32 497 36 39 75</p>

                    <?php
                        $posts = new WP_QUERY( [ 'post_type' => 'admins' ] );
                        if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
                    ?>
                    <p class="footerSections__ligne"><a href="mailto:"><strong><?php the_title(); ?>&nbsp;: </strong><?php the_field( 'mail' ); ?></a></p>
                    <?php endwhile; endif; ?>

                </section>
            </div>
            <div class="footer__rows footer__rows--under clear">
                <section class="footerSections footerSections--socialMedia">
                    <a href="" class="footerSections__blocs footerSections__blocs--facebook"></a>
                    <a href="" class="footerSections__blocs footerSections__blocs--feed"></a>
                    <a href="" class="footerSections__blocs footerSections__blocs--youtube"></a>
                    <a href="mailto:surunbaobab@gmail.com" class="footerSections__blocs footerSections__blocs--mail"></a>
                    <a href="" class="footerSections__blocs footerSections__blocs--vimeo"></a>
                    <a href="" class="footerSections__blocs footerSections__blocs--twitter"></a>
                </section>
                <section class="footerSections footerSections--don">
                    <h2 class="footerSections__link"><a class="button" href="#">Faire un don</a></h2>
                </section>
            </div>
            <small class="footer__copy">&copy; Designed by Mucht</small>
        </div>
    </footer>
</body>
</html>
