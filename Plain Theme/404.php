<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<header class="page-header">
			<h1 class="page-title"><?php _e( 'Not Found', 'twentythirteen' ); ?></h1>
		</header>

		<div class="page-wrapper">
			<div class="page-content">
				<h2><?php _e( 'Title', 'twentythirteen' ); ?></h2>
				<p><?php _e( 'Oops, some error message here', 'twentythirteen' ); ?></p>

				<?php get_search_form(); ?>
			</div><!-- .page-content -->
		</div><!-- .page-wrapper -->

	</div><!-- #primary -->

<?php get_footer(); ?>
