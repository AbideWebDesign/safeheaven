<?php
/**
 * The template for displaying search forms
 *
 * @package safehaven
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<form method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	
	<label class="sr-only" for="s"><?php esc_html_e( 'Search', 'safehaven' ); ?></label>
	
	<div class="input-group">
	
		<input class="field form-control" id="search-text" name="s" type="text" placeholder="<?php esc_attr_e( 'Search &hellip;', 'safehaven' ); ?>" value="<?php the_search_query(); ?>">
	
		<span class="input-group-append">
	
			<button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
	
		</span>
	
	</div>

</form>
