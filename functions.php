<?php
/**
 * Les Tritons — amorçage du thème.
 *
 * Un thème bloc n'a presque pas besoin de PHP : tout le style vient de
 * theme.json. Ce fichier ne sert qu'à une chose — charger style.css, que
 * WordPress ne joint pas automatiquement à la page.
 *
 * @package tritons
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Charge la feuille de style du thème côté site public.
 */
function tritons_enqueue_styles() {
	wp_enqueue_style(
		'tritons-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'tritons_enqueue_styles' );

/**
 * Applique la même feuille de style dans l'éditeur de blocs,
 * pour que le logo et la portée s'y affichent aussi.
 */
function tritons_editor_styles() {
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'tritons_editor_styles' );

/**
 * Icône d'onglet (favicon).
 *
 * WordPress propose une « icône du site » dans les réglages, mais elle se perd
 * à chaque changement d'installation. Le logo étant un élément du thème, on le
 * déclare ici : il suit le thème partout, y compris sur le serveur o2switch.
 */
function tritons_favicon() {
	$logo = get_theme_file_uri( 'assets/logo-tritons.svg' );
	printf(
		'<link rel="icon" href="%s" type="image/svg+xml">' . "\n",
		esc_url( $logo )
	);
}
add_action( 'wp_head', 'tritons_favicon' );
add_action( 'admin_head', 'tritons_favicon' );

/**
 * Catégorie de patterns propre au thème.
 *
 * Les patterns du dossier /patterns/ s'y rangent, pour qu'ils apparaissent
 * groupés dans l'inséreur de blocs plutôt que noyés parmi ceux de WordPress.
 */
function tritons_pattern_category() {
	register_block_pattern_category(
		'tritons',
		array( 'label' => __( 'Les Tritons', 'tritons' ) )
	);
}
add_action( 'init', 'tritons_pattern_category' );
