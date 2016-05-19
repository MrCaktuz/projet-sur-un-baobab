<?php
get_header();
?>

    <section class="error">
        <h2 class="error__title">Oups&nbsp;!</h2>
        <P class="error__description">La page demandée n'a pas été trouvée... Peut-être que l'URL fournie est erronnée.</P>
        <p class="error__back">Vous pouvez retourner à <a href="<?php echo home_url('/'); ?>"> la page d'accueil</a>.</p>
    </section>

<?php
get_footer();
?>
