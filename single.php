<?php
/**
 * The template for displaying all single posts
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
					
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					
					<div class="entry-header-meta justify-content-center flex-column flex-md-row">
						
						<div class="mr-3 mb-2 mb-md-0 text-white"><?php the_date(); ?></div>
	
					</div>
					
				</div>
			
			</div>
	
		</div>
		
	</div>
	
</header><!-- .entry-header -->

<div class="bg-light py-3">
		
	<div class="container">
		
		<div class="row justify-content-center">
			
			<div class="col-lg-12">
				
				<div class="row justify-content-between">
					
					<?php if ( function_exists('yoast_breadcrumb') ): ?>
							
							<?php yoast_breadcrumb( '<div class="col-md-auto align-self-center text-center text-md-left" id="breadcrumbs">','</div>' ); ?>
						
					<?php endif; ?>
					
					<div class="col-md-auto text-center text-md-right addthis_inline_share_toolbox mt-3 mt-md-0"></div>
					
				</div>
				
			</div>
		
		</div>
	
	</div>
	
</div><!-- .entry-meta -->

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'loop-templates/content', 'single' ); ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer();
