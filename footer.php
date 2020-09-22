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

<div class="wrapper-xs wrapper-footer-top bg-primary">
	
	<div class="container">
		
		<div class="row justify-content-center">
			
			<div class="col-lg-auto align-self-center">
				
				<h3 class="text-white text-center text-lg-left mb-4 mb-lg-0"><?php the_field('footer_top_title', 'options'); ?></h4>
				
			</div>
			
			<div class="col-lg-auto flex-grow-1 align-self-center text-center mb-4 mb-lg-0">
				
				<?php $form = get_field('footer_top_form', 'options'); ?>
				
				<?php echo do_shortcode( '[gravityform id="' . $form  . '" title="false" description="false" ajax="true"]' ); ?>
				
			</div>
			
			<div class="col-auto align-self-center pr-0">
				
				<a href="<?php the_field('footer_top_social_link_1', 'options'); ?>" target="_blank">
					<span class="fa-stack">
						<i class="fa fa-circle fa-stack-2x text-white"></i>
						<i class="fa fa-<?php the_field('footer_top_social_1', 'options'); ?> fa-stack-1x fa-inverse text-primary"></i>
					</span>		
				</a>
				
			</div>
			
			<div class="col-auto align-self-center pr-0">
				
				<a href="<?php the_field('footer_top_social_link_2', 'options'); ?>" target="_blank">
					<span class="fa-stack">
						<i class="fa fa-circle fa-stack-2x text-white"></i>
						<i class="fa fa-<?php the_field('footer_top_social_2', 'options'); ?> fa-stack-1x fa-inverse text-primary"></i>
					</span>		
				</a>
				
			</div>
			
			<div class="col-auto align-self-center">
				
				<a href="<?php the_field('footer_top_social_link_3', 'options'); ?>" target="_blank">
					<span class="fa-stack">
						<i class="fa fa-circle fa-stack-2x text-white"></i>
						<i class="fa fa-<?php the_field('footer_top_social_3', 'options'); ?> fa-stack-1x fa-inverse text-primary"></i>
					</span>		
				</a>
				
			</div>
			
		</div>
		
	</div>
	
</div>

<div class="wrapper-sm wrapper-footer-middle">
	
	<div class="container">
		
		<div class="row justify-content-center">
			
			<div class="col-auto col-md-12 col-lg-11 col-xl-10 d-md-flex">
				
				<div class="flex-md-fill">

					<h4 class="alt"><?php the_field('footer_middle_column_title_1', 'options'); ?></h4>
					
					<ul class="list-unstyled">
						
						<?php $links = get_field('footer_middle_column_links_1', 'options'); ?>
						
						<?php foreach ( $links as $link ): ?>
						
							<li><a href="<?php echo get_permalink($link->ID); ?>"><?php echo $link->post_title; ?></a></li>
						
						<?php endforeach; ?>
					
					</ul>
					
				</div>
				
				<div class="flex-md-fill">
					
					<h4 class="alt"><?php the_field('footer_middle_column_title_2', 'options'); ?></h4>
				
					<ul class="list-unstyled">
						
						<?php $links = get_field('footer_middle_column_links_2', 'options'); ?>
						
						<?php foreach ( $links as $link ): ?>
						
							<li><a href="<?php echo get_permalink($link->ID); ?>"><?php echo $link->post_title; ?></a></li>
						
						<?php endforeach; ?>
					
					</ul>
						
				</div>
				
				<div class="flex-md-fill">
					
					<h4 class="alt"><?php the_field('footer_middle_column_title_3', 'options'); ?></h4>
					
					<ul class="list-unstyled">
						
						<?php $links = get_field('footer_middle_column_links_3', 'options'); ?>
						
						<?php foreach ( $links as $link ): ?>
						
							<li><a href="<?php echo get_permalink($link->ID); ?>"><?php echo $link->post_title; ?></a></li>
						
						<?php endforeach; ?>
					
					</ul>
					
				</div>
				
				<div class="flex-md-fill">
					
					<h4 class="alt"><?php the_field('footer_middle_column_title_4', 'options'); ?></h4>
				
					<ul class="list-unstyled">
						
						<?php $links = get_field('footer_middle_column_links_4', 'options'); ?>
						
						<?php foreach ( $links as $link ): ?>
						
							<li><a href="<?php echo get_permalink($link->ID); ?>"><?php echo $link->post_title; ?></a></li>
						
						<?php endforeach; ?>
					
					</ul>
					
				</div>
				
			</div>
			
		</div>
		
		<div class="row">
			
			<div class="col-12">
				
				<hr class="my-5">
				
			</div>
			
		</div>
		
		<div class="row justify-content-center">
			
			<div class="col-md-3 text-center align-self-center mb-3 mb-md-0">
				
				<h1><?php the_field('footer_middle_bottom_title', 'options'); ?></h1>
				
				<?php if ( get_field('footer_middle_bottom_link', 'options') ): ?>
				
					<a href="<?php the_field('footer_middle_bottom_link', 'options'); ?>" class="arrow"><?php the_field('footer_middle_bottom_label', 'options'); ?></a>
				
				<?php endif; ?>
				
			</div>
			
				
			<?php while ( have_rows( 'footer_middle_bottom_boxes', 'options' ) ): the_row(); ?>
			
				<div class="col-md-3 mb-2 mb-md-0">
					
					<div class="bg-secondary h-100 p-4 text-center">
					
						<h2 class="text-white"><?php the_sub_field('number'); ?></h2>
					
						<p class="text-sm text-white mb-0"><?php the_sub_field('text'); ?></p>
						
					</div>
					
				</div>
			
			<?php endwhile; ?>
				
			
			
		</div>
		
	</div>
	
</div> 

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
					
					<div class="text-xs text-mb-0 text-light pr-2 mr-2 border-right">© <?php echo date('Y'); ?> All Rights Reserved</div>
					
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

