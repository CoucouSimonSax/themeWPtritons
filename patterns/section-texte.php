<?php
/**
 * Title: Section de texte
 * Slug: tritons/section-texte
 * Categories: tritons
 * Description: Un intertitre et un paragraphe, aux espacements du design system. La brique de base d'une page de contenu.
 * Keywords: texte, section, paragraphe, intertitre
 *
 * @package tritons
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|md","margin":{"top":"var:preset|spacing|xxxl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--xxxl)">

	<!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"300","letterSpacing":"-0.015em"}},"fontSize":"xxl"} -->
	<h2 class="wp-block-heading has-xxl-font-size" style="font-weight:300;letter-spacing:-0.015em">Intertitre de section</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p>Remplacez ce texte par le vôtre. Ce paragraphe hérite automatiquement de la police, de la taille et de l’interligne définis dans le design system.</p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
