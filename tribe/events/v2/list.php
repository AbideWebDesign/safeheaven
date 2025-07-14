<?php
/**
 * View: List View
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/list.php
 *
 * See more documentation about our views templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @version 5.0.2
 *
 * @var array    $events               The array containing the events.
 * @var string   $rest_url             The REST URL.
 * @var string   $rest_nonce           The REST nonce.
 * @var int      $should_manage_url    int containing if it should manage the URL.
 * @var bool     $disable_event_search Boolean on whether to disable the event search.
 * @var string[] $container_classes    Classes used for the container of the view.
 * @var array    $container_data       An additional set of container `data` attributes.
 * @var string   $breakpoint_pointer   String we use as pointer to the current view we are setting up with breakpoints.
 */

$header_classes = [ 'tribe-events-header' ];
if ( empty( $disable_event_search ) ) {
	$header_classes[] = 'tribe-events-header--has-event-search';
}
?>

<?php $bg_img = wp_get_attachment_image_src( get_field( 'events_hero_banner_image', 'options' ), 'Carousel', false); ?>

<?php echo get_template_part( 'template-parts/blocks/content', 'hero-banner', array('image' => $bg_img, 'title' => 'Events' ) ); ?>

<div class="mt-4">
		
	<?php echo get_template_part( 'template-parts/blocks/content', 'breadcrumb' ); ?>
		
</div>

<div class="wrapper wrapper-sm-top">
	
	<div class="container">
				
		<div class="row justify-content-between">
			
			<div class="col-xl-8">
		
				<h1 class="mb-4"><?php the_field('events_title', 'options'); ?></h1>
				
				<?php the_field('events_text', 'options'); ?>
				
				<div
					<?php tribe_classes( $container_classes ); ?>
					data-js="tribe-events-view"
					data-view-rest-nonce="<?php echo esc_attr( $rest_nonce ); ?>"
					data-view-rest-url="<?php echo esc_url( $rest_url ); ?>"
					data-view-manage-url="<?php echo esc_attr( $should_manage_url ); ?>"
					<?php foreach ( $container_data as $key => $value ) : ?>
						data-view-<?php echo esc_attr( $key ) ?>="<?php echo esc_attr( $value ) ?>"
					<?php endforeach; ?>
					<?php if ( ! empty( $breakpoint_pointer ) ) : ?>
						data-view-breakpoint-pointer="<?php echo esc_attr( $breakpoint_pointer ); ?>"
					<?php endif; ?>
				>
					<?php $this->template( 'components/loader', [ 'text' => __( 'Loading...', 'the-events-calendar' ) ] ); ?>

					<?php $this->template( 'components/json-ld-data' ); ?>
			
					<?php $this->template( 'components/data' ); ?>
			
					<?php $this->template( 'components/before' ); ?>
					
					<div class="tribe-events-calendar-list pt-md-4">
	
						<?php $this->template( 'components/messages' ); ?>
			
						<?php $this->template( 'components/breadcrumbs' ); ?>
				
						<?php foreach ( $events as $event ) : ?>
						
							<?php $this->setup_postdata( $event ); ?>
			
							<?php $this->template( 'list/month-separator', [ 'event' => $event ] ); ?>
			
							<?php $this->template( 'list/event', [ 'event' => $event ] ); ?>
			
						<?php endforeach; ?>
	
					</div>
		
					<?php $this->template( 'components/after' ); ?>
					
					<?php $this->template( 'components/breakpoints' ); ?>
				
				</div>


			</div>
			
			<div class="col-xl-4">
			
				<div class="call-out-links">
							
					<h3><?php the_field('events_sidebar_title', 'options'); ?></h3>
					
					<ul class="list-unstyled">
						
						<?php while ( have_rows('events_sidebar_links', 'options') ): the_row(); ?>
						
							<?php $link = get_sub_field('link'); ?>
							
							<li class="mb-2"><a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a></li>
						
						<?php endwhile; ?>
						
					</ul>
					
				</div>
				
			</div>
		
		</div>

	</div>
	
</div>

