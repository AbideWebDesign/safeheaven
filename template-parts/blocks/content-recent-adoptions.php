<?php

	$apiUrl = 'https://ws.petango.com/webservices/wsadoption.asmx/AdoptionList';
	
	$secret = 'xj2bgthow4xval713ipmigwf1f5ejhq12ykypmgeqfpohii3de';
	
	$date = new DateTime();
		
?>

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
				
				<?php for ( $days = get_field('recent_number_of_days'); $days--; ): ?>
					
					<?php $uri = $apiUrl . '?authkey=' . $secret . '&adoptionDate=' . $date->modify( '-1 days' )->format( 'm/d/y' ) . '&siteID='; ?>
							
					<?php $response = wp_remote_get( $uri ); ?>
				
					<?php $responseBody = wp_remote_retrieve_body( $response ); ?>
			
					<?php $xml = simplexml_load_string( $responseBody );  ?>
					
					<?php foreach( $xml as $result ): ?>
					
						<?php $adopted = new DateTime($result->adoption->AdoptionDate); ?>
						
						<div class="adoptable-animal mb-1 mb-md-3">
							
							<div class="h-100 bg-light">
																			
								<div class="bg-light p-2 p-md-3">
									
									<div class="text-primary"><strong><?php echo $result->adoption->AnimalName; ?></strong></div>
									
									<p><?php echo $result->adoption->Species; ?></p>
									
									<p><?php echo $result->adoption->Sex; ?></p>
									
									<p><?php _e('Adoption Date:'); ?> <?php echo $adopted->format( 'm/d/y' ); ?></p>
									
								</div>
								
								<div class="animal-stage available">
									
									<div><?php _e('Adopted'); ?></div>
									
								</div>
							
							</div>
						
						</div>
						
					<?php endforeach; ?>
				
				<?php endfor; ?>
				
			<?php else: ?>
			
				<?php _e('(Animals will show on frontend)'); ?>
				
			<?php endif; ?>
			
		</div>
		
	</div>
	
</div>