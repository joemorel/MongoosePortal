<?php
/*
Template Name: Homepage
 */

get_header(); ?>

		<div id="primary">
			<div id="content_homepage" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content_notitle', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>