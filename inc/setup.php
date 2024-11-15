<?php
/**
 * Theme basic setup
 *
 * @package safehaven
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', 'register_menus' );

function register_menus() {
		
	register_nav_menu( 'top', __( 'Top Menu', 'safehaven' ) );
	register_nav_menu( 'footer-top-1', __( 'Footer Top Menu 1', 'safehaven' ) );
	register_nav_menu( 'footer-top-2', __( 'Footer Top Menu 2', 'safehaven' ) );
	register_nav_menu( 'footer-top-3', __( 'Footer Top Menu 3', 'safehaven' ) );
	register_nav_menu( 'footer-top-4', __( 'Footer Top Menu 4', 'safehaven' ) );
	
}

add_theme_support( 'post-thumbnails' ); 


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

add_image_size( 'Carousel', 1600, 450, true );
add_image_size( 'Carousel - Mobile', 800, 571, true );
add_image_size( 'Square - MD', 433, 433, true );

/**
 * Adds a custom read more link to all excerpts, manually or automatically generated
 */
//add_filter( 'wp_trim_excerpt', 'safehaven_all_excerpts_get_more_link' );

if ( ! function_exists( 'safehaven_all_excerpts_get_more_link' ) ) {
	

	function safehaven_all_excerpts_get_more_link( $post_excerpt ) {
		
		if ( ! is_admin() & ! is_search() ) {
		
			$post_excerpt = $post_excerpt . '<p><a class="btn btn-secondary btn-sm" href="' . esc_url( get_permalink( get_the_ID() ) ) . '">' . __( 'More...','safehaven' ) . '</a></p>';
				
		}
		
		return $post_excerpt;
	
	}

}

// Relocate ical and gcal links below meta
add_action( 'tribe_events_single_event_after_the_meta', array( tribe( 'tec.iCal' ), 'single_event_links' ), 5 );
remove_action( 'tribe_events_single_event_after_the_content', array( tribe( 'tec.iCal' ), 'single_event_links' ) );

add_filter( 'tribe_get_event_website_link_label', 'tribe_get_event_website_link_label_default' );

function tribe_get_event_website_link_label_default ($label) {
	if( $label == tribe_get_event_website_url() ) {
		$label = "Register &raquo;";
	}

	return $label;
}

// Remove Tribe Dashboard Widget
add_action('wp_dashboard_setup', 'tribe_remove_dashboard_widgets' );

function tribe_remove_dashboard_widgets() {
	
	global $wp_meta_boxes;

	remove_meta_box( 'tribe_dashboard_widget', 'dashboard', 'normal' );
}

// Remove unused Tribe menus
add_action('admin_menu', 'tribe_hide_the_events_calendar_menus', 101);

function tribe_hide_the_events_calendar_menus() {
	//Hide "Events → Tags".
	remove_submenu_page('edit.php?post_type=tribe_events', 'edit-tags.php?taxonomy=post_tag&amp;post_type=tribe_events');
	//Hide "Events → Event Categories".
	remove_submenu_page('edit.php?post_type=tribe_events', 'edit-tags.php?taxonomy=tribe_events_cat&amp;post_type=tribe_events');
	//Hide "Events → Organizers".
	remove_submenu_page('edit.php?post_type=tribe_events', 'edit.php?post_type=tribe_organizer');
	//Hide "Events → Import".
	remove_submenu_page('edit.php?post_type=tribe_events', 'aggregator');
	//Hide "Events → Help".
	remove_submenu_page('edit.php?post_type=tribe_events', 'tribe-help');
	//Hide "Events → Event Add-Ons".
	remove_submenu_page('edit.php?post_type=tribe_events', 'tribe-app-shop');
}

function tribe_hide_the_events_calendar_metaboxes() {
	$screen = get_current_screen();
	if ( !$screen ) {
		return;
	}
	remove_meta_box('tagsdiv-post_tag', $screen->id, 'side');
	//Hide the "The Events Calendar" meta box.
	remove_meta_box('tribe_events_catdiv', $screen->id, 'side');
	//Hide the "Event Options" meta box.
	remove_meta_box('tribe_events_event_options', $screen->id, 'side');
	//Hide the "Venue Information" meta box.
	remove_meta_box('tribe_events_venue_details', $screen->id, 'normal');
	//Hide the "Organizer Information" meta box.
	remove_meta_box('tribe_events_organizer_details', $screen->id, 'normal');
}

add_action('add_meta_boxes', 'tribe_hide_the_events_calendar_metaboxes', 20);

// Remove unused blocks
add_filter( 'tribe_events_editor_default_template', function( $template ) {
  $template = [
    [ 'tribe/event-datetime' ],
	];
	return $template;
}, 11, 1 );

/*
 * Automatically convert permalinks to PDFs in search results to the PDF itself, not the Attachment page
 *
 */
add_filter( 'the_permalink', 'safehaven_force_direct_pdf_links' );
add_filter( 'attachment_link', 'safehaven_force_direct_pdf_links' );

function safehaven_force_direct_pdf_links( $permalink ){
	
	global $post;

	if ( is_search() && 'application/pdf' == get_post_mime_type( $post->ID ) ) {
		
		// if the result is a PDF, link directly to the file not the attachment page
		$permalink = wp_get_attachment_url( $post->ID );
		
	}

	return esc_url( $permalink );
}
/*
 * Add search highlight
 *
 */
add_filter( 'get_the_excerpt', 'searchwp_term_highlight_auto_excerpt' );

function searchwp_term_highlight_auto_excerpt( $excerpt ) {
	global $post;

	if ( ! is_search() ) {

		return $excerpt;

	}

	// prevent recursion
	remove_filter( 'get_the_excerpt', 'searchwp_term_highlight_auto_excerpt' );

	$global_excerpt = '...' . searchwp_term_highlight_get_the_excerpt_global( $post->ID, null, get_search_query() ) . '...' . '<p><a class="btn btn-secondary btn-sm" href="' . esc_url( get_permalink( get_the_ID() ) ) . '">' . __( 'More...','safehaven' ) . '</a></p>';

	add_filter( 'get_the_excerpt', 'searchwp_term_highlight_auto_excerpt' );

	return wp_kses_post( $global_excerpt );
}


/* ACF Autopopulate */
function acf_load_designation_field_choices( $field ) {
    
    // reset choices
    $field['choices'] = array();
    
    $form = GFAPI::get_form( 2 );

    $choices = $form['fields'][1]->choices;
    
    // loop through array and add to field 'choices'
    if ( is_array( $choices ) ) {
        
        foreach( $choices as $choice ) {
            
            $field['choices'][ $choice['value'] ] = $choice['text'];
            
        }
        
    }

    // return the field
    return $field;
    
}

add_filter('acf/load_field/name=designation', 'acf_load_designation_field_choices');

if ( ! function_exists('write_log')) {
   function write_log ( $log )  {
      if ( is_array( $log ) || is_object( $log ) ) {
         error_log( print_r( $log, true ) );
      } else {
         error_log( $log );
      }
   }
}

add_filter( 'acf/the_field/allow_unsafe_html', function( $allowed, $selector ) {
    
    return true;
    
    return $allowed;
    
}, 10, 2);

/*
 * Gravity Forms
 */
add_filter( 'gform_default_styles', function( $styles ) {
    
    return '{"theme":"","inputSize":"lg","inputBorderRadius":"4","inputBorderColor":"#202832","inputBackgroundColor":"#fff","inputColor":"#112337","inputPrimaryColor":"#202832","labelFontSize":"18","labelColor":"#112337","descriptionColor":"#585e6a","buttonPrimaryBackgroundColor":"#AE233D","buttonPrimaryColor":"#fff"}';

} );

add_filter( 'gform_required_legend', '__return_empty_string' );