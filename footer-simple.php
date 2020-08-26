<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package safehaven
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

</div><!-- #page we need this extra closing tag here -->

<div class="wrapper-sm wrapper-footer-bottom bg-dark">

	<div class="container">
		
		<div class="row justify-content-center">
			
			<div class="col-auto text-center">
				
				<h3 class="text-white mb-5"><?php the_field('footer_bottom_title', 'options'); ?></h3>
				
			</div>
			
		</div>
		
		<div class="row justify-content-center">
			
			<div class="col-md-6 col-xl-5 align-self-center mb-4 mb-md-0">
				
				<?php the_field('footer_bottom_column_1', 'options'); ?>
				
			</div>
			
			<div class="col-md-6 col-xl-5">
				
				<div class="bg-dark-lighter p-4 text-center">
					
					<h4><?php the_field('footer_bottom_column_2_title', 'options'); ?></h4>
					
					<h3 class="my-4"><?php the_field('footer_bottom_column_2_phone', 'options'); ?></h3 >
					
					<div class="text-sm text-mb-0"><?php the_field('footer_bottom_column_2_text', 'options'); ?></div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>

<div class="wrapper-footer-credits py-3 bg-dark-lighter">
	
	<div class="container">
		
		<div class="row justify-content-center">
			
			<div class="col-auto">
		
				<div class="d-flex">
					
					<div class="text-xs text-mb-0 text-light pr-2 mr-2 border-right">Copyright <?php echo date('Y'); ?></div>
					
					<div class="text-xs text-mb-0 text-light pr-2 mr-2 border-right"><a href="<?php the_field('footer_bottom_privacy', 'options'); ?>">Privacy Policy</a></div>
					
					<div class="text-xs text-mb-0 text-light pr-md-2 mr-md-2 border-right"><a href="<?php the_field('footer_bottom_terms', 'options'); ?>">Terms & Conditions</a></div>
					
					<div class="text-xs text-mb-0 text-light d-none d-md-block"><a href="https://abidewebdesign.com" target="_blank">Website Design and Maintenance by Abide Web Design</a></div>
					
				</div>
				
			</div>
			
			<div class="col-12 d-md-none">
				
				<div class="text-xs text-mb-0 text-light text-center mt-3"><a href="https://abidewebdesign.com" target="_blank">Website Design and Maintenance by Abide Web Design</a></div>
				
			</div>
		
		</div>
		
	</div>
	
</div>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
