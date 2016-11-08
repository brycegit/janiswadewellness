<?php
/*
 * Template Name: Blog
 *
 * @package WordPress
 * @subpackage waf
 */

get_header(); ?>


<div id="content" class="t2 blog">
	<h1><?php wp_title(''); ?></h1>

	<section class="row">
		<!-- GET RECENT POSTS -->
		<?php
			$args = array( 'numberposts' => '5' );
			$recent_posts = wp_get_recent_posts( $args );
			foreach( $recent_posts as $recent ){
				echo '<div class="blog_posts"><span class="date">'.get_the_date( 'l, F j, Y', $recent["ID"] ).'</span><br><h2 class="underline"><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </h2></div>';
			}
			wp_reset_query();
		?>
			<!-- GET RECENT POSTS -->

	</section>

</div>

<?php
// get_sidebar();
get_footer();
