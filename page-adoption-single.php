<?php
/**
 * Template Name: Single Adoption
 *
 * @package safehaven
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="bg-primary py-3">
	
	<div class="container">
		
		<div class="row justify-content-between">
			
			<div class="col-auto">
			
				<h3 class="text-white">About this Pet</h3>
				
			</div>
			
		</div>
		
	</div>
	
</div>
<div id="page-wrapper">
	
	<div class="wrapper-sm bg-white bg-md-light">
		
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-12">
					
					<div class="bg-white py-4 px-2 px-md-5">
					
						<?php while ( have_posts() ) : the_post(); ?>
					
							<?php get_template_part( 'template-parts/blocks/content', 'adoption-single' ); ?>
					
						<?php endwhile; // end of the loop. ?>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<?php the_content(); ?>

</div><!-- #page-wrapper -->

<?php get_footer();
