<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/styles.css'; ?>" media="screen" title="no title" charset="utf-8">
    <title><?php the_title(); ?> - <?php bloginfo( 'name' ); ?></title>
</head>
<body <?php body_class(); ?>>
    <nav class="mainNav">
        <h2 class="hidden">Main navigation menu</h2>
        <ul class="mainNav__list">
            <?php foreach ( b_get_menu_items( 'main-nav' ) as $navItem ): ?>
                <li class="mainNav__elem<?php echo $navItem -> isCurrent ? ' mainNav__elem--active' : ''; ?>">
                    <a href="<?php echo $navItem -> url; ?>" class="links mainNav__link"><?php echo $navItem -> label ?></a>
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
        <div class="header__title">
            <h1 class="hidden"><?php the_title(); ?> - <?php bloginfo( 'name' ); ?></h1>
            <img class="header__logo" src="<?php echo get_template_directory_uri() . '/assets/img/logo.png'; ?>" alt="Sur Un Baobab - Animation workshop" width="200" height="200"/>
        </div>
    </header>
