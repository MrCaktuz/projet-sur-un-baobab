<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title><?php bloginfo( 'name' ); ?></title>
</head>
<body <?php body_class(); ?>>
    <header>
        <h1><?php bloginfo( 'name' ); ?></h1>
        <nav>
            <h2 class="main-nav"><?php _e( 'Navigation principal', 'b' ); ?></h2>
            <?php foreach ( b_get_menu_items( 'main-nav' ) as $navItem ): ?>
                <a href="<?php echo $navItem -> url; ?>" class="main-nav__link main-nav__link--<?php echo $navItem -> icon; ?>"><?php echo $navItem -> label ?></a>
            <?php endforeach; ?>
        </nav>
        <nav class="lang">
            <h2 class="sro"><?php _e( 'Choisisez votre langue', 'b' ); ?></h2>
            <?php foreach (b_get_languages() as $langItem ) : ?>
                <a class="lang__item" href="<?php echo $langItem -> url; ?>"><?php echo $langItem -> label; ?></a>
            <?php endforeach; ?>
        </nav>
    </header>
    <main>
