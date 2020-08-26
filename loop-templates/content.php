<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package safehaven
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php
		the_title(
			sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php the_excerpt(); ?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
