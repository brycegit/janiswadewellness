<?php
/*
 * Template Name: Inner Page
 *
 * @package WordPress
 * @subpackage waf
 */

get_header(); ?>


<div id="content" class="t2">
	<h1><?php the_title(); ?></h1>

	<section class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		the_content();
		endwhile; else: ?>
		<?php endif; ?>
	</section>

</div>

<?php
// get_sidebar();
get_footer();
