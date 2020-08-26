<?php if ( get_field('form_type') == 'Default' ): ?>
	
	<div class="wrapper-form-top wrapper-sm <?php the_field('background_color'); ?> text-center">
		
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-xl-8">
					
					<h1 class="mb-4"><?php the_field('form_title'); ?></h1>
					
					<?php if ( get_field('form_text') ): ?>
					
						<div class="lead"><?php the_field('form_text'); ?></div>
					
					<?php endif; ?>
					
				</div>
				
			</div>
		
		</div>
		
	</div>
	
	<div class="wrapper-form-bottom wrapper-sm">
		
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-xl-8">
										
					<div class="bg-light p-4">
					
						<?php echo do_shortcode('[gravityform id="' . get_field('form') . '" title="false" description="false" ajax="true" tabindex="49"]'); ?>
					
					</div>
				
				</div>
				
				<?php if ( get_field('include_callout') ): ?>
					
					<div class="col-xl-4">
						
						<h3 class="mb-4 text-primary"><?php the_field('callout_title'); ?></h3>
						
						<?php while ( have_rows('callout_rows') ): the_row(); ?>
							
							<h4><i class="fa fa-<?php the_sub_field('icon'); ?>"></i> <?php the_sub_field('title'); ?></h4>
							<p class="text-sm"><?php the_sub_field('text'); ?></p>
							
							<hr>
							
						<?php endwhile; ?>
						
					</div>
					
				<?php endif; ?>
				
								
			</div>
			
		</div>
		
	</div>

<?php endif; ?>