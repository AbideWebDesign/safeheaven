<div class="wrapper-text <?php the_field('text_padding_type'); ?> <?php the_field('text_background_color'); ?>">
	
	<div class="container">
		
		<?php if ( get_field('callout') ): ?>
		
			<?php if ( get_field('callout_type') == 'Links' ): ?>
			
				<div class="row justify-content-between">
					
					<div class="col-xl-8">
						
						<?php if ( get_field('text_title') ): ?>
						
							<h2 class="mb-4"><?php the_field('text_title'); ?></h2>
						
						<?php endif; ?>
						
						<div class="<?php echo ( get_field('text_content_lead') ? 'lead' : '' ); ?>">
						
							<?php the_field('text_content'); ?>
							
						</div>
						
					</div>
					
					<div class="col-xl-4">
						
						<div class="call-out-links my-3 my-0">
							
							<h3><?php the_field('callout_links_title'); ?></h3>
							
							<ul class="list-unstyled">
								
								<?php while ( have_rows('callout_links') ): the_row(); ?>
								
									<?php $link = get_sub_field('link'); ?>
									
									<li class="mb-2"><a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a></li>
								
								<?php endwhile; ?>
								
							</ul>
							
						</div>
						
					</div>
					
				</div>
				
			<?php elseif ( get_field('callout_type') == 'Button' ): ?>
			
				<?php $button_link = get_field('callout_button_link'); ?>
				
				<div class="row justify-content-between">
					
					<div class="col-lg-8 align-self-center order-md-1">
						
						<?php if ( get_field('text_title') ): ?>
						
							<h2 class="mb-4 text-center text-md-left"><?php the_field('text_title'); ?></h2>
						
						<?php endif; ?>
						
						<div class="<?php echo ( get_field('text_content_lead') ? 'lead' : '' ); ?>">
						
							<?php the_field('text_content'); ?>
							
						</div>
						
					</div>
					
					<div class="col-lg-4 order-2 <?php the_field('callout_direction'); ?>">
						
						<div class="call-out-button text-center">
							
							<div class="d-flex flex-lg-column justify-content-lg-start">
								
								<?php if ( get_field('callout_button_image') ): ?>
								
									<div class="order-1 order-lg-0 mb-4 ml-4 ml-lg-0 d-none d-lg-block">
										
										<?php if ( get_field('callout_image_type') == 'Default' ): ?>
										
											<?php echo wp_get_attachment_image( get_field('callout_button_image'), 'Full', false, array('class'=>'img-callout-button img-fluid m-auto') ); ?>
										
										<?php else: ?>
										
											<?php echo wp_get_attachment_image( get_field('callout_button_image'), 'Square - MD', false, array('class'=>'rounded-circle img-callout-button img-fluid m-auto') ); ?>
										
										<?php endif; ?>
										
									</div>
								
								<?php endif; ?>
								
								<div class="align-self-center mt-3 mt-md-0">
									
									<a href="<?php echo $button_link['url']; ?>" target="<?php echo $button_link['target']; ?>" class="btn btn-primary btn-lg"><?php echo $button_link['title']; ?></a>
									
								</div>
								
							</div>
														
						</div>
						
					</div>
					
				</div>
			
			<?php elseif ( get_field('callout_type') == 'Image' ): ?>
			
				<div class="row justify-content-center">
					
					<div class="col-lg-8 align-self-center order-2 order-lg-1">
						
						<?php if ( get_field('text_title') ): ?>
						
							<h2 class="mb-4"><?php the_field('text_title'); ?></h2>
						
						<?php endif; ?>
						
						<div class="<?php echo ( get_field('text_content_lead') ? 'lead' : '' ); ?>">
						
							<?php the_field('text_content'); ?>
							
						</div>
						
					</div>
					
					<div class="col-lg-4 <?php the_field('callout_direction'); ?> text-center text-lg-left">
						
						<div class="call-out-image text-center mb-4 mb-lg-0">
							
							<?php if ( get_field('callout_image_type') == 'Default' ): ?>
							
								<?php echo wp_get_attachment_image( get_field('callout_image'), 'Full', false, array('class'=>'img-callout-button img-fluid m-auto') ); ?>	
							
							<?php else: ?>
							
								<?php echo wp_get_attachment_image( get_field('callout_image'), 'Square - MD', false, array('class'=>'rounded-circle img-callout-button img-fluid m-auto') ); ?>	
							
							<?php endif; ?>		
																							
						</div>
						
					</div>
					
				</div>
				
			<?php elseif ( get_field('callout_type') == 'Text' ): ?>
			
				<div class="row justify-content-between">
					
					<div class="col-lg-8 align-self-center order-first">
						
						<?php if ( get_field('text_title') ): ?>
						
							<h2 class="mb-4"><?php the_field('text_title'); ?></h2>
						
						<?php endif; ?>
						
						<div class="<?php echo ( get_field('text_content_lead') ? 'lead' : '' ); ?>">
						
							<?php the_field('text_content'); ?>
							
						</div>
						
					</div>
					
					<div class="col-lg-4 <?php the_field('callout_direction'); ?> text-center text-lg-left">
						
						<div class="text-center mb-4 mb-lg-0">
							
							<?php if ( get_field('callout_text_image') ): ?>
													
								<?php echo wp_get_attachment_image( get_field('callout_text_image'), 'Square - MD', false, array('class'=>'img-fluid w-100 d-none d-lg-block') ); ?>
							
							<?php endif; ?>		
							
							<div class="call-out-text bg-blue px-3 py-5">
								
								<?php if ( get_field('callout_text_title') ): ?>
								
									<h4 class="text-white"><?php the_field('callout_text_title'); ?></h4>
									
								<?php endif; ?>
								
								<?php the_field('callout_text'); ?>
								
								<?php if ( get_field('callout_text_include_button') ): ?>
								
									<?php $link = get_field('callout_text_button_link'); ?>
									
									<a class="btn btn-primary" href="<?php echo $link['url'] ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
								
								<?php endif; ?>
								
							</div>
																							
						</div>
						
					</div>
					
				</div>
				
			<?php endif; ?>
			
		<?php else: ?>
		
			<div class="row justify-content-center">
				
				<div class="col-xl-11">
					
					<?php if ( get_field('text_title') ): ?>
						
						<h2 class="mb-4 <?php echo ( get_field('text_content_lead') ? 'text-center' : 'alt' ); ?>"><?php the_field('text_title'); ?></h2>
						
					<?php endif; ?>
					
					<div class="<?php echo ( get_field('text_content_lead') ? 'lead text-center' : '' ); ?>">
					
						<?php the_field('text_content'); ?>
						
					</div>
					
				</div>
				
			</div>
		
		<?php endif; ?>
		
		<?php if ( is_page('dogs') || is_page('cats') || is_page('small-animals') || is_page('stary-animals') ): ?>
		
			<div class="row justify-content-center">
				
				<div class="col">
				
					<?php echo get_template_part('template-parts/blocks/content', 'adoption-embed'); ?>
					
				</div>
				
			</div>
		
		<?php endif; ?>
		
	</div>
	
</div>