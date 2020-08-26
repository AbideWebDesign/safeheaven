<?php 
	

add_action('acf/init', 'safehaven_acf_init');

function safehaven_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a hero banner block
		acf_register_block(array(
			'name'				=> 'hero-banner',
			'title'				=> __('Hero Banner'),
			'description'		=> __(''),
			'render_callback'	=> 'safehaven_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'align-left',
		));
		// register a donation bar block
		acf_register_block(array(
			'name'				=> 'donation-bar',
			'title'				=> __('Donation Bar'),
			'description'		=> __(''),
			'render_callback'	=> 'safehaven_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'heart',
		));
		// register a card block
		acf_register_block(array(
			'name'				=> 'cards',
			'title'				=> __('Cards'),
			'description'		=> __(''),
			'render_callback'	=> 'safehaven_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
		));
		// register a featured block
		acf_register_block(array(
			'name'				=> 'featured',
			'title'				=> __('Featured'),
			'description'		=> __(''),
			'render_callback'	=> 'safehaven_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'format-image',
		));
		// register a text block
		acf_register_block(array(
			'name'				=> 'text',
			'title'				=> __('Text'),
			'description'		=> __(''),
			'render_callback'	=> 'safehaven_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'editor-justify',
		));
		// register a form block
		acf_register_block(array(
			'name'				=> 'form',
			'title'				=> __('Form'),
			'description'		=> __(''),
			'render_callback'	=> 'safehaven_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'edit',
		));
		// register breadcrumb block
		acf_register_block(array(
			'name'				=> 'breadcrumb',
			'title'				=> __('Breadcrumb'),
			'description'		=> __(''),
			'render_callback'	=> 'safehaven_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'ellipsis',
		));
	}
}

function safehaven_acf_block_render_callback( $block ) {
	
	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/blocks" folder
	if( file_exists( get_theme_file_path("/template-parts/blocks/content-{$slug}.php") ) ) {
		
		include( get_theme_file_path("/template-parts/blocks/content-{$slug}.php") );
	
	}
}

add_filter( 'allowed_block_types', 'safehaven_allowed_block_types' );
 
function safehaven_allowed_block_types( $allowed_blocks ) {

	return array(
		'acf/hero-banner',
		'acf/donation-bar',
		'acf/cards',
		'acf/featured',
		'acf/text',
		'acf/form',
		'acf/breadcrumb',
	);
 
}