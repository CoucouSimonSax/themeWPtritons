<?php
/**
 * Title: Grille de projets
 * Slug: tritons/grille-projets
 * Categories: tritons
 * Description: Quadrillage de miniatures très espacées. Chaque miniature est une image cliquable, à faire pointer vers une page dédiée, le site du groupe ou un réseau social.
 * Keywords: projets, groupes, grille, miniatures
 *
 * @package tritons
 */

$tritons_placeholder = esc_url( get_theme_file_uri( 'assets/logo-tritons.png' ) );
$tritons_projets     = array( 'Premier projet', 'Deuxième projet', 'Troisième projet', 'Quatrième projet', 'Cinquième projet', 'Sixième projet' );
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|xxxl"}},"layout":{"type":"grid","minimumColumnWidth":"200px"}} -->
<div class="wp-block-group alignwide">
<?php foreach ( $tritons_projets as $tritons_nom ) : ?>

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|sm"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group">

		<!-- wp:image {"aspectRatio":"1","scale":"cover","linkDestination":"custom","className":"tritons-miniature"} -->
		<figure class="wp-block-image tritons-miniature"><a href="#"><img src="<?php echo $tritons_placeholder; ?>" alt="" style="aspect-ratio:1;object-fit:cover"/></a></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"700"}},"fontSize":"meta"} -->
		<p class="has-meta-font-size" style="text-transform:uppercase;letter-spacing:0.16em;font-weight:700"><?php echo esc_html( $tritons_nom ); ?></p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

<?php endforeach; ?>
</div>
<!-- /wp:group -->
