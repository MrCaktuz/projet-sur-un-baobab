    <footer class="footer clear">
        <div class="bigWrap">
            <div class="footer__rows clear">
                <section class="footerSections footerSections--siteMap">
                    <h2 class="footerSections__title">Plan du site</h2>
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
                            $posts = new WP_QUERY( [ 'posts_per_page' => 3 ] );
                            if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
                        ?>
                            <li>
                                <a href="<?php the_permalink(); ?>" class="footerSections__elem"><?php the_title(); ?></a>
                            </li>
                        <?php endwhile; endif; ?>
                        <?php
                            $posts = new WP_QUERY( [ 'post_type' => 'metrage', 'posts_per_page' => 1 ] );
                            if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
                        ?>
                            <li>
                                <a href="<?php the_permalink(); ?>" class="footerSections__elem"><?php the_title(); ?></a>
                            </li>
                        <?php endwhile; endif; ?>
                        <?php
                            $posts = new WP_QUERY( [ 'posts_per_page' => 1, 'post_type' => 'tuto' ] );
                            if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
                        ?>
                            <li>
                                <a href="<?php the_permalink(); ?>" class="footerSections__elem"><?php the_title(); ?></a>
                            </li>
                        <?php endwhile; endif; ?>
                    </ul>
                </section>
                <section class="footerSections footerSections--contact">
                    <h2 class="footerSections__title">Contact</h2>
                    <p class="footerSections__ligne"><span class="footerSections__ligne--label">WhatsApp :</span> +32 495 34 89 66</p>
                    <p class="footerSections__ligne"><span class="footerSections__ligne--label">Tél. Belgique :</span> +32 497 36 39 75</p>
                    <?php
                        $posts = new WP_QUERY( [ 'post_type' => 'admins' ] );
                        if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
                    ?>
                    <p class="footerSections__ligne"><span class="footerSections__ligne--label"><?php the_title(); ?>&nbsp;: </span><a class="footerSections__mailto" href="mailto:<?php the_field( 'mail' ); ?>"><?php the_field( 'mail' ); ?></a></p>
                    <?php endwhile; endif; ?>
                </section>
            </div>
            <div class="footer__rows footer__rows--under clear">
                <section class="footerSections footerSections--socialMedia">
                    <a href="#"><p class="footerSections__blocs footerSections__blocs--facebook"></p></a>
                    <a href="#"><p class="footerSections__blocs footerSections__blocs--feed"></p></a>
                    <a href="#"><p class="footerSections__blocs footerSections__blocs--youtube"></p></a>
                    <a href="#"><p class="footerSections__blocs footerSections__blocs--mail"></p></a>
                    <a href="#"><p class="footerSections__blocs footerSections__blocs--vimeo"></p></a>
                    <a href="#"><p class="footerSections__blocs footerSections__blocs--twitter"></p></a>
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
