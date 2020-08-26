<?php
/**
 * View: List Event
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/list/event.php
 *
 * See more documentation about our views templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @version 5.0.0
 *
 * @var WP_Post $event The event post object with properties added by the `tribe_get_event` function.
 *
 * @see tribe_get_event() For the format of the event object.
 */

$container_classes = [ 'tribe-common-g-row', 'tribe-events-calendar-list__event-row' ];
$container_classes['tribe-events-calendar-list__event-row--featured'] = $event->featured;

// $event_classes = tribe_get_post_class( [ 'tribe-events-calendar-list__event', 'tribe-common-g-row', 'tribe-common-g-row--gutters' ], $event->ID );
?>
<div <?php tribe_classes( $container_classes ); ?>>

	<?php $this->template( 'list/event/date-tag', [ 'event' => $event ] ); ?>
	
	<div class="row no-gutters w-100 mb-5 mb-xl-0">
		
		<div class="col-md-5 col-lg-4 col-xl-3">
			
			<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image( get_field('events_featured_image'), 'Square - MD', false, array('class'=>'img-fluid h-100') ); ?></a>
			
		</div>
	
		<div class="col-md-7 col-lg-8 col-xl-9">
				
			<div class="d-flex bg-light p-4 py-md-3 px-md-5 h-100">
					
				<article <?php post_class('d-flex align-self-center flex-column'); ?> id="post-<?php the_ID(); ?>">
						
					<header class="entry-header mb-3">
			
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>	
						
						<?php $this->template( 'list/event/date', [ 'event' => $event ] ); ?>
						
						<?php $this->template( 'list/event/venue', [ 'event' => $event ] ); ?>
								
					</header><!-- .entry-header -->
								
					<?php $this->template( 'list/event/description', [ 'event' => $event ] ); ?>
					<?php $this->template( 'list/event/cost', [ 'event' => $event ] ); ?>
					
					<div class="d-flex mt-3">
						
						<div class="mr-2">
							
							<a href="<?php the_permalink(); ?>" class="btn-tribe">Learn More</a>
							
						</div>
											
						<?php if ( get_field('include_button') ): ?>
						
							<div class="d-none d-md-block">
								
								<a href="<?php the_field('event_button_link'); ?>" class="btn-tribe btn-tribe-white"><?php the_field('event_button_label'); ?></a>
					
							</div>
						
						<?php endif; ?>
						
					</div>
																
				</article>
								
			</div>
			
		</div>

	</div>
	
</div>