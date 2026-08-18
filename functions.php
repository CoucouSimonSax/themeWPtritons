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
