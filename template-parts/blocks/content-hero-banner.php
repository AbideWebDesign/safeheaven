<?php if ( get_field('type') == 'Carousel' ): ?>

	<div id="carousel" class="hero-banner carousel slide" data-ride="carousel">
		
		<div class="carousel-inner">
			
			<?php $counter = 0; ?>
			
			<?php while ( have_rows('carousel') ): the_row(); ?>
						
				<div class="carousel-item <?php echo ( $counter == 0 ? 'active' : '' ); ?>">
					
					<?php if ( get_sub_field('include_carousel_link') && get_sub_field('carousel_type') == "Image Only" ): ?>
					
						<?php $link = get_sub_field('carousel_link'); ?>

						<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
							
					<?php endif; ?>
							
					<?php echo wp_get_attachment_image( get_sub_field('carousel_image'), 'Carousel', false, array('class'=>'w-100 d-none d-lg-block') ); ?>
					
					<?php if ( get_sub_field('carousel_image_mobile') ): ?>
					
						<?php echo wp_get_attachment_image( get_sub_field('carousel_image_mobile'), 'Carousel - Mobile', false, array('class'=>'w-100 d-lg-none') ); ?>
					
					<?php else: ?>
						
						<?php echo wp_get_attachment_image( get_sub_field('carousel_image'), 'Carousel - Mobile', false, array('class'=>'w-100 d-lg-none') ); ?>
					
					<?php endif; ?>
									
					<?php if ( get_sub_field('carousel_type') == 'Default' ): ?>
						
						<div class="carousel-caption d-flex h-100">
							
							<div class="container align-self-end align-self-lg-center">
				
								<div class="row justify-content-center <?php echo ( get_sub_field('carousel_caption_side') == 'Right' ? 'justify-content-md-end' : 'justify-content-lg-start' ); ?>">
				
									<div class="col-md-10 col-lg-5">
						
										<?php if ( get_sub_field('carousel_title') ): ?>
										
											<div class="carousel-heading d-none d-md-block"><h1><?php the_sub_field('carousel_title'); ?></h1></div>
											
											<div class="carousel-heading d-md-none"><a href="<?php the_sub_field('carousel_button_link'); ?>"><h1><?php the_sub_field('carousel_title'); ?></h1></a></div>
										
										<?php endif; ?>
										
										<?php if ( get_sub_field('carousel_text') ): ?>
										
											<div class="carousel-text"><?php the_sub_field('carousel_text'); ?></div>
										
										<?php endif; ?>
										
										<?php if ( get_sub_field('include_carousel_link') && get_sub_field('carousel_link') ): ?>
										
											<?php $link = get_sub_field('carousel_link'); ?>
											
											<div class="carousel-button d-none d-md-block"><a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="btn btn-primary btn-lg"><?php echo $link['title']; ?></a></div>
											
										<?php endif; ?> 
										
					  				</div>
					  				
								</div>
								
							</div>
							
						</div>
						
					<?php endif; ?>
					
					<?php if ( get_sub_field('include_carousel_link') && get_sub_field('carousel_type') == "Image Only" ): ?>
					
					</a>
					
					<?php endif; ?>
		    
		    	</div>
		    	
		    	<?php $counter ++; ?>
		    	
		    <?php endwhile; ?>
	    
		</div>
	
		<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
			
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			
			<span class="sr-only">Previous</span>
		
		</a>
	  
		<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
	    
	    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
			
			<span class="sr-only">Next</span>
	  	
	  	</a>
	
	</div>

<?php elseif ( get_field('type') == 'Default' ): ?>

	<?php $bg_img = wp_get_attachment_image_src( get_field( 'image' ), 'Carousel', false); ?>

	<div class="hero-banner-single text-center"  style="background-image: url('<?php echo $bg_img[0]; ?>')">
				
		<div class="bg-img-content py-4 text-center text-lg-left">
			
			<div class="container">
				
				<div class="row">
					
					<div class="col-auto">
			
						<div class="hero-heading">
									
							<h3 class="text-white"><?php the_title(); ?></h3>
						
						</div>
						
					</div>
				
				</div>
			
			</div>
		
		</div>
	
	</div>

<?php elseif ( get_field('type') == 'Image Only' ): ?>
		
	<div class="d-none d-lg-block" >
		
		<?php echo wp_get_attachment_image( get_field( 'image_single' ), 'Carousel', false, array('class'=>'img-fluid w-100') ); ?>
		
	</div>
	
	<div class="d-lg-none">
		
		<?php echo wp_get_attachment_image( get_field( 'image_mobile' ), 'Carousel Mobile', false, array('class'=>'img-fluid') ); ?>
		
	</div>
	
<?php else: ?>

	<?php $image = $args['image']; ?>
	
	<?php $title = $args['title']; ?>
	
	<div class="hero-banner-single text-center"  style="background-image: url('<?php echo $image[0]; ?>')">
				
		<div class="bg-img-content py-4 text-center text-lg-left">
			
			<div class="container">
				
				<div class="row">
					
					<div class="col-auto">
			
						<div class="hero-heading">
								
							<h3 class="text-white"><?php echo $title; ?> <?php echo ( is_search() ? get_search_query() : ''); ?></h3>
						
						</div>
						
					</div>
				
				</div>
			
			</div>
		
		</div>
	
	</div>

<?php endif; ?>

<!-- <?php global $post; ?> -->

<!--
<?php if ( is_page() && $post->post_parent ): ?>

	<div class="mt-4">
		
		<?php echo get_template_part( 'template-parts/blocks/content', 'breadcrumb' ); ?>
		
	</div>
	
<?php endif; ?>
-->
