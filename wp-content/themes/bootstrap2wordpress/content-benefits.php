<?php


  $who_feature_img            = get_field('who_feature_img');
  $who_section_title          = get_field('who_section_title');
  $who_section_body           = get_field('who_section_body');

 ?>

 <!-- who benefits -->
 <section id="who-benefits">
   <div class="container">
     <div class="section-header">
       <?php
         if( !empty($who_feature_img ) ) : ?>
         <img src="<?php echo $who_feature_img['url']; ?>" alt="<?php echo $who_feature_img ['alt']; ?>">
       <?php endif; ?>
       <h2><?php echo $who_section_title; ?></h2>
     </div> <!-- section-header -->
     <div class="row">

       <div class="col-sm-8 col-sm-offset-2">
         <?php echo $who_section_body ?>
       </div><!-- end column with content -->
     </div>
   </div> <!-- end container -->
 </section>  <!-- who benefits -->
