<div class="py-4 bg-secondary">
	
	<div class="container">
		
		<div class="row justify-content-center">
			
			<div class="col-auto align-self-center mb-4 mb-xl-0">
				
				<h2 class="mb-0 text-white alt d-inline-block"><?php the_field('donation_text'); ?></h2>
				
			</div>
			
			<div class="col-auto align-self-center">
				
				<div class="btn-wrapper d-none d-lg-flex">
					
					<div class="btn-wrap">
						
						<?php $link = get_field('donation_page'); ?>
						
						<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="btn btn-lg btn-primary"><?php echo $link['title']; ?></a>
						
					</div>
					
					<?php if ( get_field('learn_more_page') ): ?>
						
						<?php $link = get_field('learn_more_page'); ?>
						
						<div class="btn-wrap">
							
							<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="btn btn-lg btn-white btn-outline"><?php echo $link['title']; ?></a>
							
						</div>
						
					<?php endif; ?>
					
<!--
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
-->
				</div>
				
				<div class="d-lg-none text-center text-lg-left w-100">
					
					<?php $link = get_field('donation_page'); ?>
											
					<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="btn btn-lg btn-white"><?php the_field('mobile_button_label'); ?></a>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>