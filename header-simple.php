<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package safehaven
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" />
	<link rel='stylesheet' id='safehaven-fonts-css' href='https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=PT+Sans:wght@400;700&display=swap' type='text/css' media='all' />

	<?php wp_head(); ?>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=<?php the_field('google_id', 'options'); ?>"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		
		gtag('config', '<?php the_field('google_id', 'options'); ?>');
	</script>

</head>

<body <?php body_class(); ?>>
	
<div class="site" id="page">
	
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'safehaven' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-xl navbar-light" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'safehaven' ); ?>
			</h2>

		
			<div class="container">
				
				<a class="navbar-brand" href="<?php echo home_url(); ?>"><?php echo wp_get_attachment_image( get_field('logo', 'options'), 'full', false, array('class'=>'img-fluid', 'style'=>'width: 300px;') ); ?></a>
					
				<div class="ml-auto">
					
					<a href="<?php the_field('footer_top_social_link_1', 'options'); ?>" target="_blank">
					
						<span class="fa-stack">
							<i class="fa fa-circle fa-stack-2x text-primary"></i>
							<i class="fa fa-<?php the_field('footer_top_social_1', 'options'); ?> fa-stack-1x fa-inverse text-white"></i>
						</span>
							
					</a>
					
					<a href="<?php the_field('footer_top_social_link_2', 'options'); ?>" target="_blank">
					
						<span class="fa-stack">
							<i class="fa fa-circle fa-stack-2x text-primary"></i>
							<i class="fa fa-<?php the_field('footer_top_social_2', 'options'); ?> fa-stack-1x fa-inverse text-white"></i>
						</span>		
					
					</a>
					
					<a href="<?php the_field('footer_top_social_link_3', 'options'); ?>" target="_blank">
					
						<span class="fa-stack">
							<i class="fa fa-circle fa-stack-2x text-primary"></i>
							<i class="fa fa-<?php the_field('footer_top_social_3', 'options'); ?> fa-stack-1x fa-inverse text-white"></i>
						</span>		
				
					</a>
					
				</div>
			
			</div><!-- .container -->

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->