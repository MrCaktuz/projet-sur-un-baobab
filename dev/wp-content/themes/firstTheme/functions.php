<?php
/*
 * Defines custom poste_types
 *
 */

add_theme_support( 'post-thumbnails' );
 // register_post_type( $post_type, $args );
register_post_type( 'projet', [
    'label' => 'Courts-métrages',
    'labels' => [
            'singular_name' => 'Court-métrage',
            'add_new' => 'Ajouter un nouveau projet'
        ],
    'description' => 'La liste de tous les projets (courts-métrages, ateliers,...)affichés sur le site.',
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-editor-video',
    'supports' => [ 'title', 'editor', 'thumbnail' ],
    'has_archive' => true
    ] );

/*
 * Generate a custim excerpt, user on the Homepage
 *
 */

function get_the_custom_excerpt( $length = 150 ) {

    $excerpt = get_the_content();
    $excerpt = strip_shortcodes( $excerpt );
    $excerpt = strip_tags( $excerpt );

    return substr( $excerpt, 0, $length );

}

function the_custom_excerpt( $length = 150 ) {
    echo get_the_custom_excerpt( $length );
}

/*
*
* générate navigaiton
*
*/

register_nav_menu( 'main-nav', __( 'Menu principal, affiché dans le header.', 'b' ) );

/*
*
* générate a custom menu array
*
*/
function b_get_menu_id( $location ){
    $locations = get_nav_menu_locations();
    if ( isset( $locations[ $location ] ) ) {
        return $locations[ $location ];
    }
    return false;
}

function b_get_menu_items( $location ) {

    $navItems = [];
    foreach ( wp_get_nav_menu_items( b_get_menu_id( $location ) ) as $obj) {
        $item = new stdClass();
        $item -> url = $obj -> url;
        $item -> label = $obj -> title;
        $item -> icon = $obj -> classes[0];
        array_push( $navItems, $item );
    }
    // var_dump( $navItems ); die();
    return $navItems;
}

/*
*
* generate a langue selection menu
*
*/

function b_get_languages() {
    $langItems = [];
    $rawItems = pll_the_languages( [
        'echo' => false,
        'hide_if_empty' => false,
        'hide_if_notranslation' => false,
        'raw' => true
        ] );
    foreach ($rawItems as $array ) {
        $item = new stdClass();
        $item -> label = $array[ 'name' ];
        $item -> url = $array[ 'url' ];
        $item -> code = $array[ 'slug' ];
        array_push( $langItems, $item );
    }
    // var_dump($langItems);
    return $langItems;

}
