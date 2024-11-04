<?php if ( is_page('dogs') || is_page('cats') || is_page('small-animals') || is_page('stray-animals') ): ?>
	
	<div class="container mb-4">
		
		<div class="row justify-content-center">
			
			<div id="animal-spinner" class="col-12">
				
				<div class="gform_ajax_spinner"></div>	
			
			</div>
			
			<div class="col">
			
				<div id="animal" class="row"></div>
				
			</div>
			
		</div>
		
	</div>
	
	<?php if ( get_field('pet_tango_id') ): ?>
		
		<?php $animal_id = get_field('pet_tango_id'); ?>
		
		<div class="wrapper wrapper-featured">
			
			<div class="container">
			
				<div class="row justify-content-center mb-4 mb-lg-0">
										
					<div class="col-md-12 col-lg-auto align-self-center text-center text-lg-left">
										
						<h2><?php the_field('name'); ?></h2>
											
						<p><?php the_field('description'); ?></p>
										
						<div class="d-flex mt-4 justify-content-center justify-content-lg-start">
																											
							<a href="https://safehavenhumane.org/adopt/animals/<?php echo $animal_id; ?>" class="btn btn-primary mr-2">Learn More</a>					
					
						</div>
												
					</div>
					
					<div class="col-md-7 col-lg-auto">
						
						<?php echo wp_get_attachment_image( get_field('image'), 'medium', false, array( 'class' => 'rounded-circle img-fluid' ) ); ?>
												
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	<?php endif; ?>
	
	<?php if ( get_field('adoption_bottom_title', 'options') || get_field('adoption_bottom_text', 'options') ): ?>
	
		<div class="wrapper wrapper-featured bg-dark">
		
			<div class="container">
			
				<div class="row justify-content-center justify-content-lg-between">
					
					<?php if ( get_field('adoption_bottom_image', 'options') ): ?>
				
						<div class="col-md-7 col-lg-4 mb-4 mb-lg-0 order-md-1">
							
							<?php echo wp_get_attachment_image( get_field('adoption_bottom_image', 'options'), 'Square - MD', false, array('class'=>'rounded-circle img-fluid') ); ?>
							
						</div>
						
					<?php endif; ?>
					
					<div class="col-md-12 col-lg-7 align-self-center text-center text-lg-left order-2">
					
						<?php if ( get_field('adoption_bottom_title', 'options') ): ?>
						
							<h2><?php the_field('adoption_bottom_title', 'options'); ?></h2>
						
						<?php endif; ?>
						
						<?php if ( get_field('adoption_bottom_text', 'options') ): ?>
					
							<?php the_field('adoption_bottom_text', 'options'); ?>
					
						<?php endif; ?>
						
						<?php if ( get_field('adoption_bottom_button', 'options') ): ?>
						
							<div class="d-flex mt-4 justify-content-center justify-content-lg-start">
																					
								<?php $link = get_field('adoption_bottom_button', 'options'); ?>
									
								<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="btn btn-primary mr-2"><?php echo $link['title']; ?></a>					
						
							</div>
							
						<?php endif; ?>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
	
	<?php endif; ?>

<?php endif; ?>