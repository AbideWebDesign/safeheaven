<?php
/**
 * The template for displaying search results pages
 *
 * @package safehaven
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<?php $bg_img = wp_get_attachment_image_src( get_field( 'search_hero_banner_image', 'options' ), 'Carousel', false); ?>

<?php echo get_template_part( 'template-parts/blocks/content', 'hero-banner', array('image' => $bg_img, 'title' => 'Search Results For: ' ) ); ?>

<div class="wrapper-sm bg-light" id="search-wrapper">

	<div class="container" id="content" tabindex="-1">

		<div class="row">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'search' ); ?>

				<?php endwhile; ?>

			<?php else : ?>
				
				<div class="col-12">
					
					<div class="bg-white p-4">
						
						<h3 class="text-center wrapper-sm"><?php _e('No results found.'); ?></h3>
						
					</div>
					
				</div>

			<?php endif; ?>

		</div><!-- .row -->
		
		<?php safehaven_pagination(); ?>
				
	</div><!-- #content -->

</div><!-- #search-wrapper -->

<?php get_footer();