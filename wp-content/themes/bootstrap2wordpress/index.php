<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrap_to_Wordpress
 */

get_header(); ?>

<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
	<h1 class="page-title">Blog</h1>
</section>


<!-- BLOG CONTENT =========================
=========================================== -->
<div class="container">
		<div class="row" id="primary">

			<main id="content" class="col-sm-8" role="main">
				<?php	if ( have_posts() ) : ?>

					<?php 		/* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post();  ?>

						<?php 		/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */   ?>
						<?php 	get_template_part( 'template-parts/content', get_post_format() );  ?>

					<?php endwhile; //end while have posts ?>

					<?php //	the_posts_navigation(); // this line was breaking the nav sidebar ?>

				<?php 	else : // if no posts  ?>

					<?php 	get_template_part( 'template-parts/content', 'none' );  ?>

				<?php 	endif; // end if no posts ?>

			</main>

			<!-- SIDEBAR!
			==============================================-->
			<aside class="col-sm-4">
			<?php get_sidebar(  ); ?>	
			</aside>



		</div><!-- row -->
	</div><!--- container -->

<?php

get_footer();

?>
