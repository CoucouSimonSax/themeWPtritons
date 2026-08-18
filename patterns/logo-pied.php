<?php
/**
 * Title: Logo du pied de page
 * Slug: tritons/logo-pied
 * Categories: tritons
 * Description: La marque en blanc sur fond encre. Le design system fournit un fichier dédié et proscrit l'inversion par filtre CSS.
 * Inserter: no
 *
 * @package tritons
 */
?>
<!-- wp:image {"width":"72px","linkDestination":"custom","className":"tritons-logo-pied"} -->
<figure class="wp-block-image tritons-logo-pied"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/logo-tritons-blanc.png' ) ); ?>" alt="Les Tritons" style="width:72px"/></a></figure>
<!-- /wp:image -->
