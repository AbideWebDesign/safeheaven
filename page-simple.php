<?php
/**
 * Template Name: Simple
 *
 * @package safehaven
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('simple');
?>

<div id="page-wrapper">
	
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'loop-templates/content', 'page' ); ?>

	<?php endwhile; // end of the loop. ?>

</div><!-- #page-wrapper -->

<?php get_footer('simple');
