<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WAF
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found row">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'waf' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p style="text-align:center;">
						It looks like nothing was found at this location. For assistance email: <br><a href="mailto:janis@janiswadewellness.com">janis@janiswadewellness.com</a>
					</p>
				</div>

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
