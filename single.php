<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WAF
 */

get_header(); ?>
<style>
#menu-item-24 a{
	border-bottom: 3px solid #5bc6a6;
	display: inline-block;
}
</style>
	<div id="primary" class="content-area t2">
		<main id="main" class="site-main" role="main">
				<div class="header"><h1><?php the_title(); ?></h1>
					<p><?php	echo get_the_date( 'l, F j, Y') ?></p>
				</div>
<div class="row">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );





		endwhile; // End of the loop.
		?>
		<br><br>
<a href="/blog" class="button">View all blog posts</a>
<br><br>
</div><!-- end row -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
