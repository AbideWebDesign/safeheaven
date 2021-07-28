<article class="wrapper-sm" id="post-<?php the_ID(); ?>">

	<div class="entry-content container">
		
		<div class="row justify-content-between">

			<div class="col-md-8 col-lg-7 order-2 order-lg-1">
				
				<h2 class="mb-2"><?php echo ucfirst( strtolower( get_field('animal_name') ) ); ?><?php _e("'s Story"); ?></h2>
				
				<div class="d-flex text-sm text-muted border-bottom mb-4 pb-2">
										
					<div class="mr-2 pr-2 border-right"><strong><?php _e('Species: '); ?></strong><?php the_field('animal_type', $animal->ID); ?></div>
					
					<div class="mr-2 pr-2 border-right"><strong><?php _e('Sex: '); ?></strong><?php the_field('animal_sex', $animal->ID); ?></div>

					<div class=""><strong><?php _e('Adoption Date: '); ?></strong><?php the_field('adoption_date', $animal->ID); ?></div>
					
				</div>
				
				<?php the_field('adoption_story'); ?>
				
			</div>
			
			<div class="col-md-4 order-lg-last text-center text-lg-left mb-3 mb-md-0">
				
				<?php echo wp_get_attachment_image( get_field('animal_image'), 'Square - MD', false, array('class'=>'rounded-circle img-callout-button img-fluid m-auto') ); ?>
				
			</div>
			
		</div>	
	
	</div>

</article>