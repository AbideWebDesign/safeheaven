<?php
/**
 * Blog results template
 *
 * @package safehaven
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="col-xl-10 mb-4">
	
	<div class="row no-gutters">
		
		<div class="col-md-5 col-lg-4 col-xl-3">
			
			<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image( get_post_thumbnail_id(), 'Square - MD', false, array('class'=>'img-fluid') ); ?></a>
			
		</div>
		
		<div class="col-md-7 col-lg-8 col-xl-9 ">
			
			<div class=" d-flex bg-white py-md-3 px-md-5 p-5 h-100">
				
				<article <?php post_class('d-flex align-self-center flex-column'); ?> id="post-<?php the_ID(); ?>">
					
					<header class="entry-header mb-3">
				
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>	
								
					</header><!-- .entry-header -->
				
					<div class="entry-summary">
				
						<?php the_excerpt(); ?>
						
						<div class="mt-3">
							
							<a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
							
						</div>
				
					</div><!-- .entry-summary -->
				
				</article><!-- #post-## -->
				
			</div>
			
		</div>
		
	</div>
	
</div>
