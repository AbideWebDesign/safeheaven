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
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q55PRYEV18"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		
		gtag('config', '<?php the_field('google_id', 'options'); ?>');
	</script>

</head>

<body <?php body_class(); ?>>
	
<div class="site" id="page">

	<div id="wrapper-navbar-top" class="bg-blue">
	
		<div class="container">
			
			<div class="row justify-content-center justify-content-md-between">
				
				<div class="col-12 col-md-auto text-center text-md-left d-flex">
					
					<div class="d-lg-none mr-1 mr-lg-2">
													
						<?php shiftnav_toggle( 'shiftnav-main' , 'I Want To...' , array( 'icon' => '' , 'class' => 'shiftnav-toggle-button h-100') ); ?>	
						
					</div>
					
					<div class="d-none d-lg-block mr-1 mr-lg-2">
						
						<nav class="navbar navbar-expand-lg navbar-dark h-100 p-0">
							
							<?php wp_nav_menu(
								array(
									'theme_location'  => 'top',
									'container_class' => 'collapse navbar-collapse h-100',
									'container_id'    => 'navbarNavDropdownTop',
									'menu_class'      => 'navbar-nav h-100',
									'menu_id'         => 'top-menu',
									'depth'           => 2,
									'walker'          => new safehaven_WP_Bootstrap_Navwalker(),
								)
							); ?>
							
						</nav>
						
					</div>
					
					<div class="mr-1 mr-md-0">
						
						<a href="<?php echo home_url('/donate'); ?>" class="btn btn-secondary h-100">Donate</a>
						
					</div>
					
					<div class="d-md-none mr-3">
						
						<a href="<?php echo home_url('/adopt'); ?>" class="btn btn-secondary h-100">Adopt</a>
						
					</div>
					
					<div class="d-md-none ml-auto align-self-center">
						
						<a href="<?php echo home_url('/search'); ?>"><i class="fa fa-search text-white"></i></a>
						
					</div>
					
				</div>
				
				<div class="col-md-auto flex-grow-1 col-lg-4 d-none d-md-block">
					
					<?php get_search_form(); ?>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'safehaven' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-xl navbar-light" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'safehaven' ); ?>
			</h2>

		
			<div class="container">
				
				<a class="navbar-brand" href="<?php echo home_url(); ?>"><?php echo wp_get_attachment_image( get_field('logo', 'options'), 'full', false, array('class'=>'img-fluid', 'style'=>'width: 300px;') ); ?></a>
					
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'safehaven' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new safehaven_WP_Bootstrap_Navwalker(),
					)
				); ?>
			
			</div><!-- .container -->

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
