<?php
/**
 * Search results partial template
 *
 * @package safehaven
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="col-xl-4 mb-3 align-self-stretch">
	
	<div class="bg-white h-100 p-4">
		
		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		
			<header class="entry-header mb-3">
		
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>	
				
				<div class="text-sm text-lighten"><?php the_permalink(); ?></div>
		
			</header><!-- .entry-header -->
		
			<div class="entry-summary">
		
				<?php the_excerpt(); ?>
		
			</div><!-- .entry-summary -->
		
			<footer class="entry-footer">
		
			</footer><!-- .entry-footer -->
		
		</article><!-- #post-## -->
		
	</div>
	
</div>
