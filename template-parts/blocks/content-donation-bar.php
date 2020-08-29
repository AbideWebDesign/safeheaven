<div class="py-4 bg-secondary">
	
	<div class="container">
		
		<div class="row justify-content-center">
			
			<div class="col-auto col-md-12 col-xl-auto align-self-center text-center text-md-center text-xl-right mb-4 mb-xl-0">
				
				<h2 class="mb-0 text-white alt"><?php the_field('donation_text'); ?></h2>
				
			</div>
			
			<div class="col-auto align-self-center">
				
				<div class="btn-wrapper d-none d-lg-flex">
					
					<?php while ( have_rows( 'buttons') ): the_row(); ?>
					
						<div class="btn-wrap">
							
							<a href="<?php the_field('donation_page'); ?>?designation=<?php the_field('designation'); ?>&amount=$<?php the_sub_field('donation_amount'); ?><?php echo ( get_sub_field('donation_recurring') ? '&recurring=recurring' : '&recurring=onetime'); ?>" class="btn btn-lg <?php echo ( get_sub_field('primary_button') ? 'btn-primary' : 'btn-white btn-outline' ); ?>">$<?php the_sub_field('donation_amount'); ?><?php echo ( get_sub_field('donation_recurring') ? '<span class="text-sm">/month</span>' : '' ); ?></a>
							
						</div> 
					
					<?php endwhile; ?>
					
					<?php if ( get_field('include_other_amount') ): ?>
					
						<div class="btn-wrap">
						
							<a href="<?php the_field('donation_page'); ?>?designation=<?php the_field('designation'); ?>&amount=Other&recurring=onetime" class="btn btn-lg btn-white btn-outline">Other</a>
						
						</div>
					
					<?php endif; ?>
					
				</div>
				
				<div class="d-lg-none text-center text-md-left">
					
					<a href="<?php the_field('donation_page'); ?>" class="btn btn-lg btn-white"><?php the_field('mobile_button_label'); ?></a>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>