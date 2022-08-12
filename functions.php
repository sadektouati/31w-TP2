<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.1' );
}
function mon_31w_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5',array('search-form') );
	add_theme_support('custom-background');
	register_nav_menus( array(
        'sidebar_menu' => __( 'Sidebar Menu', 'mon_31w' ),
        'footer_menu'  => __( 'Footer Menu', 'mon_31w' ),
    ) );
}

add_action( 'after_setup_theme', 'mon_31w_setup' );


function mon_underscore_scripts() {
    wp_enqueue_style( 'mon_underscore-style', get_stylesheet_uri(), array(), _S_VERSION );

}
add_action( 'wp_enqueue_scripts', 'mon_underscore_scripts' );


/**
 * permet de modifier la requete principale de la page d'accueil pour extraire uniquement
 *  des articles de la categorie accueil
 * @param : $query represente l'objet WP_Query contenant la requete principale
 */
function mon_31w_pre_get_posts_acceuil( $query ) {
	if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
		$query->set( 'category_name', 'accueil' );
	}
}
add_action( 'pre_get_posts', 'mon_31w_pre_get_posts_acceuil' );
?>