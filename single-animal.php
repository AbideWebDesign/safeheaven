<?php
/**
 * The template for displaying all single animal
 *
 * @package safehaven
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<header class="entry-header bg-dark wrapper-sm">
			
	<div class="container">		
	
		<div class="row justify-content-center">

			<div class="col-lg-9">
				
				<div class="entry-header-blog">
					
					<h1 class="text-white"><?php echo ucfirst( strtolower( get_field('animal_name') ) ); ?><?php _e("'s Story"); ?></h1>
					
					<div class="entry-header-meta justify-content-center flex-column flex-md-row">
						
						<div class="mr-3 mb-2 mb-md-0 text-white"><?php _e('Adopted: '); ?><?php the_field('adoption_date'); ?></div>
	
					</div>
					
				</div>
			
			</div>
	
		</div>
		
	</div>
	
</header>

<div class="bg-light py-3">
		
	<div class="container">
		
		<div class="row justify-content-center">
			
			<div class="col-lg-12">
				
				<div class="row justify-content-between">
					
					<div class="col-md-auto align-self-center text-center text-md-left" id="breadcrumbs"><span><span><a href="<?php echo home_url('/recent-adoptions'); ?>">All Adoptions</a> » <span class="breadcrumb_last" aria-current="page"><?php echo ucfirst( strtolower( get_field('animal_name') ) ); ?><?php _e("'s Story"); ?></span></span></span></div>
					
					<div class="col-md-auto text-center text-md-right addthis_inline_share_toolbox mt-3 mt-md-0"></div>
					
				</div>
				
			</div>
		
		</div>
	
	</div>
	
</div><!-- .entry-meta -->

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'loop-templates/content', 'single-animal' ); ?>

<?php endwhile; // end of the loop. ?>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f3d647eedfbf554"></script>

<?php get_footer();
