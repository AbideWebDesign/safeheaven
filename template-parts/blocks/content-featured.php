<div class="wrapper wrapper-featured <?php the_field('featured_background_color'); ?>">
	
	<div class="container">
		
		<div class="row justify-content-center justify-content-lg-between">
			
			<?php if ( get_field('featured_image') ): ?>
			
				<div class="col-md-7 col-lg-4 mb-4 mb-lg-0 order-md-1">
					
					<?php echo wp_get_attachment_image( get_field('featured_image'), 'Square - MD', false, array('class'=>'rounded-circle img-fluid') ); ?>
					
				</div>
				
			<?php endif; ?>
			
			<div class="col-md-12 col-lg-7 align-self-center text-center text-lg-left order-2 <?php the_field('featured_direction'); ?>">
				
				<?php if ( get_field('featured_small_text') ): ?>
				
					<p class="text-sm-alt text-primary mb-2"><?php the_field('featured_small_text'); ?></p>
				
				<?php endif; ?>
				
				<?php if ( get_field('featured_title') ): ?>
				
					<h2><?php the_field('featured_title'); ?></h2>
				
				<?php endif; ?>
				
				<?php if ( get_field('featured_text') ): ?>
				
					<p><?php the_field('featured_text'); ?></p>
				
				<?php endif; ?>
				
				<?php if ( get_field('featured_include_button') ): ?>
				
					<div class="d-flex mt-4 justify-content-center justify-content-lg-start">
						
						<?php if ( get_field('featured_button_link_1') ): ?>
							
							<?php $link = get_field('featured_button_link_1'); ?>
								
							<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="btn btn-primary mr-2"><?php echo $link['title']; ?></a>					
						
						<?php endif; ?>
						
						<?php if ( get_field('featured_button_link_2') ): ?>
						
							<?php $link = get_field('featured_button_link_2'); ?>
									
							<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="btn btn-secondary mr-2"><?php echo $link['title']; ?></a>					
						
						<?php endif; ?>
					
					</div>
				
				<?php endif; ?>
				
			</div>
			
		</div>
		
	</div>
	
</div>