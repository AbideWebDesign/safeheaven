<?php $date = new DateTime(); ?>

<div class="wrapper">
	
	<div class="container">
		
		<div class="row">
		
			<div class="col-12">
				
				<h2 class="mb-2"><?php the_field('recent_title'); ?></h2>
				
				<div class="mb-3"><?php the_field('recent_text'); ?></div>
				
			</div>
			
		</div>
		
		<div id="animal" class="row">
			
			<?php if ( ! is_admin() ): ?>
				
				<?php $animals = get_posts( [ 'post_type' => 'animal', 'posts_per_page' => '-1', 'date_query' => [ [ 'after' => $date->modify('-30 day')->format('y-m-d') ] ] ] ); ?>
				
				<?php foreach ( $animals as $animal ): ?>
					
					<?php $adopted = new DateTime( get_field('adoption_date') ); ?>
					
					<div class="adoptable-animal mb-1 mb-md-3">
						
						<div class="h-100 bg-light">
																		
							<div class="bg-light">
								
								<?php echo wp_get_attachment_image( get_field('animal_image', $animal->ID), 'medium', false, array('class'=>'img-fluid w-100') ); ?>
								
								<div class="p-2 p-md-3">
									
									<div class="text-primary"><strong><?php the_field('animal_name', $animal->ID); ?></strong></div>
									
									<p><?php the_field('animal_type', $animal->ID); ?></p>
									
									<p><?php the_field('animal_sex', $animal->ID); ?></p>
									
									<p><?php _e('Adoption Date:'); ?> <?php the_field('adoption_date', $animal->ID); ?></p>
								
								</div>
								
							</div>
							
							<?php if ( get_field('adoption_story', $animal->ID) ): ?>
							
								<a href="<?php the_permalink( $animal->ID ); ?>" class="btn btn-primary btn-block stretched-link"><?php _e('Read Story'); ?> <i class="fa fa-chevron-right text-xs"></i></a>
							
							<?php endif; ?>
						
						</div>
					
					</div>
				
				<?php endforeach; ?>
				
			<?php else: ?>
			
				<?php _e('(Animals will show on frontend)'); ?>
				
			<?php endif; ?>
			
		</div>
		
	</div>
	
</div>