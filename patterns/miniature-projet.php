<?php
/**
 * Title: Projet — une miniature
 * Slug: tritons/miniature-projet
 * Categories: tritons
 * Description: Une seule miniature de projet, à insérer dans une grille existante pour ajouter un projet.
 * Keywords: projet, miniature, ajouter, groupe
 *
 * @package tritons
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/logo-tritons.png' ) ); ?>","dimRatio":50,"customOverlayColor":"#000000","isUserOverlayColor":true,"contentPosition":"center center","className":"tritons-miniature","layout":{"type":"default"}} -->
<div class="wp-block-cover tritons-miniature">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#000000"></span>
	<img class="wp-block-cover__image-background" src="<?php echo esc_url( get_theme_file_uri( 'assets/logo-tritons.png' ) ); ?>" alt=""/>
	<div class="wp-block-cover__inner-container">

		<!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"0.16em","textTransform":"uppercase","lineHeight":"1.3"}},"textColor":"paper-000","fontSize":"meta"} -->
		<p class="has-text-align-center has-paper-000-color has-text-color has-meta-font-size" style="text-transform:uppercase;letter-spacing:0.16em;line-height:1.3"><a href="#">Nom du projet</a></p>
		<!-- /wp:paragraph -->

	</div>
</div>
<!-- /wp:cover -->
