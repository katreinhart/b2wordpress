<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bootstrap_to_Wordpress
 */

get_header(); ?>

<div class="container">
	<div class="row" id="primary">
		<main id="content" class="col-sm-8">

		<?php	while ( have_posts() ) : the_post(); ?>

		<?php 	get_template_part( 'template-parts/content', 'single' );  ?>

		<?php //	the_post_navigation();  // this is breaking the sidebar?>


		<?php endwhile; // End of the loop. ?>

		<!-- sidebar  -->
		</main><!-- #content -->
			<?php 	get_sidebar(); ?>
		<aside class="col-sm-4">

		</aside>
	</div><!-- #primary -->
</div><!-- #container -->
<?php get_footer(); ?>
