<div class="wrapper-cards <?php the_field('card_padding_type'); ?> <?php the_field('card_background_color'); ?>">
	
	<div class="container">
		
		<?php if ( get_field('title') || get_field('text') ): ?>
		
			<div class="row justify-content-center text-center">
				
				<div class="col">
				
					<?php if ( get_field('title') ): ?>
					
						<h2 class="mb-4"><?php the_field('title'); ?></h2>
						
					<?php endif; ?>
				
					<?php if ( get_field('text') ): ?>
		
						<p class="lead mb-4"><?php the_field('text'); ?></p>
		
					<?php endif; ?>
					
					<?php if ( get_field('include_top_button') ): ?>
					
						<div class="d-flex mt-4 mb-5 justify-content-center">
						
						<?php if ( get_field('top_button_link_1') ): ?>
							
							<?php $link = get_field('top_button_link_1'); ?>
								
							<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="btn btn-primary mr-2"><?php echo $link['title']; ?></a>					
						
						<?php endif; ?>
						
						<?php if ( get_field('top_button_link_2') ): ?>
						
							<?php $link = get_field('top_button_link_2'); ?>
									
							<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="btn btn-secondary mr-2"><?php echo $link['title']; ?></a>				
						
						<?php endif; ?>
					
					</div>
					
					<?php endif; ?>
		
				</div>
				
			</div>
			
		<?php endif; ?>
		
		<div class="row justify-content-center mt-4">
			
			<?php if ( get_field('type') == 'General' ): ?>
			
				<?php while ( have_rows('cards') ): the_row(); ?>
				
					<div class="col-md-4 col-xl-3 text-center mb-5 mb-lg-0">
						
						<?php if ( get_sub_field('image') ): ?>
						
							<div class="mb-4">
								
								<?php if ( get_sub_field('link') ): ?>
								
									<?php $link = get_sub_field('link'); ?>
									
									<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
								
								<?php endif; ?>
								
								<?php echo wp_get_attachment_image( get_sub_field('image'), 'Square - MD', false, array('class'=>'rounded-circle img-card img-fluid m-auto') ); ?>
							
								<?php if ( get_sub_field('link') ): ?>
								
									</a>
									
								<?php endif; ?>
								
							</div>
							
						<?php endif; ?>
						
						<h4><?php the_sub_field('card_title'); ?></h4>
						
						<p class="text-sm"><?php the_sub_field('card_text'); ?></p>
						
						<?php if ( get_sub_field('link') ): ?>
							
							<?php $link = get_sub_field('link'); ?>
							
							<a href="<?php echo $link['url']; ?>" class="btn btn-primary" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
							
						<?php endif; ?>
						
					</div>
				
				<?php endwhile; ?>
				
			<?php elseif ( get_field('type') == 'Posts' ): ?>
			
				<?php $cat = get_field('post_category'); ?>
								
				<?php $posts = get_posts( array( 'category' => $cat, 'numberposts' => 3 ) ); ?>
				
				<?php if ( $posts ): ?>
				
					<?php foreach ( $posts as $post ): setup_postdata( $post ); ?>
					
						<div class="col-md-4 col-xl-3 text-center mb-5 mb-lg-0">
						
						<?php if ( get_field('featured_image', $post) ): ?>
						
							<div class="mb-4">
								
								<a href="<?php echo get_the_permalink($post); ?>">
									
									<?php echo wp_get_attachment_image( get_field('featured_image', $post), 'Square - MD', false, array('class'=>'rounded-circle img-card img-fluid m-auto') ); ?>
							
								</a>
									
							</div>
							
						<?php endif; ?>
						
						<h3 class="mb-4"><?php echo get_the_title($post); ?></h3>
												
						<a href="<?php echo get_the_permalink($post); ?>" class="btn <?php echo ( get_field('background_color') == 'bg-white' ? 'btn-primary' : 'btn-secondary' ); ?>">Read More</a>
						
					</div>
					
					<?php endforeach; ?>
					
					<?php wp_reset_postdata(); ?>
				
				<?php endif; ?>
			
			<?php endif; ?>
			
		</div>
		
	</div>
	
</div>