<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/styles.css'; ?>" media="screen" title="no title" charset="utf-8">
    <title><?php bloginfo( 'name' ); ?></title>
</head>
<body <?php body_class(); ?>>
    <nav class="mainNav">
        <h2 class="hidden">Main navigation menu</h2>
        <ul class="mainNav__list">
            <?php foreach ( b_get_menu_items( 'main-nav' ) as $navItem ): ?>
                <li class="mainNav__elem">
                    <a href="<?php echo $navItem -> url; ?>" class="mainNav__elem--link<?php echo $navItem -> isCurrent ? ' mainNav__elem--active' : ''; ?>"><?php echo $navItem -> label ?></a>
                </li>
            <?php endforeach; ?>
            <?php foreach ( b_get_menu_items( 'nav-donation' ) as $navItem ): ?>
                <li class="mainNav__elem mainNav__elem--donation">
                    <a href="<?php echo $navItem -> url; ?>" class="mainNav__elem--link button"><?php echo $navItem -> label ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <header class="header">
        <div class="headder__jagged">

        </div>
        <div class="header__title">
            <h1 class="hidden">Sur Un Baobab</h1>
            <img class="header__logo" src="../assets/img/logo.png" alt="Sur Un Baobab - Animation workshop" width="200" height="200"/>
        </div>
    </header>
