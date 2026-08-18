<?php
/**
 * Title: Grille de projets
 * Slug: tritons/grille-projets
 * Categories: tritons
 * Description: Quadrillage de miniatures. Le nom du projet n'apparaît qu'au survol, sur un voile sombre. Chaque miniature est cliquable : page dédiée, site du groupe ou réseau social.
 * Keywords: projets, groupes, grille, miniatures
 *
 * @package tritons
 */

$tritons_image   = esc_url( get_theme_file_uri( 'assets/logo-tritons.png' ) );
$tritons_projets = array( 'Premier projet', 'Deuxième projet', 'Troisième projet', 'Quatrième projet', 'Cinquième projet', 'Sixième projet' );
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxxl"}},"layout":{"type":"grid","minimumColumnWidth":"150px"}} -->
<div class="wp-block-group">
<?php foreach ( $tritons_projets as $tritons_nom ) : ?>

	<!-- wp:cover {"url":"<?php echo $tritons_image; ?>","dimRatio":50,"customOverlayColor":"#000000","isUserOverlayColor":true,"contentPosition":"center center","className":"tritons-miniature","layout":{"type":"constrained"}} -->
	<div class="wp-block-cover tritons-miniature">
		<span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#000000"></span>
		<img class="wp-block-cover__image-background" src="<?php echo $tritons_image; ?>" alt=""/>
		<div class="wp-block-cover__inner-container">

			<!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"700","lineHeight":"1.3"}},"textColor":"paper-000","fontSize":"meta"} -->
			<p class="has-text-align-center has-paper-000-color has-text-color has-meta-font-size" style="text-transform:uppercase;letter-spacing:0.16em;font-weight:700;line-height:1.3"><a href="#"><?php echo esc_html( $tritons_nom ); ?></a></p>
			<!-- /wp:paragraph -->

		</div>
	</div>
	<!-- /wp:cover -->

<?php endforeach; ?>
</div>
<!-- /wp:group -->
