<?php 

add_action( 'adoption_cron', 'get_adopted_animals' );

function get_adopted_animals() {
	
	$apiUrl = 'https://ws.petango.com/webservices/wsadoption.asmx/AdoptionList';
	
	$secret = 'xj2bgthow4xval713ipmigwf1f5ejhq12ykypmgeqfpohii3de';
	
	$date = new DateTime();
	
	for ( $days = 1; $days--; ) {
		
		$uri = $apiUrl . '?authkey=' . $secret . '&adoptionDate=' . $date->modify( '-1 days' )->format( 'm/d/y' ) . '&siteID=';

		$response = wp_remote_get( $uri );
		
		$responseBody = wp_remote_retrieve_body( $response );
		
		$xml = new SimpleXMLElement( $responseBody );
		
		foreach( $xml as $result ) {
		
			if ( ! get_page_by_title( (string)$result->adoption->AnimalID, 'animal' ) ) {
				
				$p = array (
					'post_type'		=> 'animal',
					'post_status' 	=> 'publish',
					'post_title' 	=> (string)$result->adoption->AnimalID,	
				);
				
				$post_id = wp_insert_post( $p );
				
				$adopted = new DateTime( (string)$result->adoption->AdoptionDate );
				
				update_field( 'animal_name', (string)$result->adoption->AnimalName, $post_id );
				update_field( 'animal_type', (string)$result->adoption->Species, $post_id );
				update_field( 'animal_sex', (string)$result->adoption->Sex, $post_id );
				update_field( 'adoption_date', $adopted->format( 'm/d/y' ), $post_id );
				
			}	
			
		}
		
	}
	
}

function safehaven_register_cpts_animal() {

	/**
	 * Post Type: Animals.
	 */
	
	$labels = [
		"name" => __( "Animals", "safehaven" ),
		"singular_name" => __( "Animal", "safehaven" ),
	];
	
	$args = [
		"label" => __( "Animals", "safehaven" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "animal", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-heart",
		"supports" => [ "title" ],
		"show_in_graphql" => false,
	];
	
	register_post_type( "animal", $args );
}

add_action( 'init', 'safehaven_register_cpts_animal' );