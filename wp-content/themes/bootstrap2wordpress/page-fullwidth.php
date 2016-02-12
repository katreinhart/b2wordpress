<?php
/* Template Name: Full-width Template
*/

get_header();

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post-> ID ) );

 ?>

 <?php if( has_post_thumbnail() ){ ?>
 <section class="feature-image" style="background:url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
   <h1 class="page-title"><?php the_title(); ?></h1>
 </section>
<?php } else { //fallback image ?>
  <section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
    <h1 class="page-title"><?php the_title(); ?></h1>
  </section>

<?php } ?>
 <!-- main content
 ==============================================-->

 <div class="container">
   <div class="row" id="primary">
     <div class="col-sm-12" id="content">
       <section class="main-content">
         <?php while( have_posts() ) : the_post(); ?>
           <?php the_content(); ?>
         <?php endwhile; // end loop ?>
       </section><!-- main content -->
     </div> <!-- content-->
   </div> <!-- row -->
 </div> <!-- container -->


 <?php get_footer(); ?>
