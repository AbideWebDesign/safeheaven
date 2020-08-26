<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package safehaven
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>
<?php $bg_img = wp_get_attachment_image_src( get_field( 'blog_hero_banner_image', 'options' ), 'Carousel', false); ?>

<?php echo get_template_part( 'template-parts/blocks/content', 'hero-banner', array('image' => $bg_img, 'title' => 'Blog' ) ); ?>

<div class="wrapper-sm bg-light" id="blog-wrapper">

	<div class="container" id="content" tabindex="-1">

		<div class="row justify-content-center">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'blog' ); ?>

				<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'loop-templates/content', 'none' ); ?>

			<?php endif; ?>

		</div><!-- .row -->
		
		<?php safehaven_pagination(); ?>
				
	</div><!-- #content -->

</div><!-- #blog-wrapper -->

<?php get_footer();
