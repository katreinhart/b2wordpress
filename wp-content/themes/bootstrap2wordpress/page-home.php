<?php
/**
 * Template Name: Home page
 */

// Custom Fields
$prelaunch_price           = get_post_meta( 7, 'prelaunch_price', true );
$launch_price              = get_post_meta( 7, 'launch_price', true );
$final_price               = get_post_meta( 7, 'final_price', true );
$course_url                = get_post_meta( 7, 'course_url', true);
$button_text               = get_post_meta( 7, 'button_text', true);
$optin_text                = get_post_meta( 7, 'optin_text', true);
$optin_button_text         = get_post_meta( 7, 'optin_button_text', true);

// Advanced Custom Fields
$income_feature_image       = get_field('income_feature_image');
$income_section_title       = get_field('income_section_title');
$income_section_desc        = get_field('income_section_description');

$reason_1_title             = get_field('reason_1_title');
$reason_1_desc              = get_field('reason_1_description');
$reason_2_title             = get_field('reason_2_title');
$reason_2_desc              = get_field('reason_2_description');

$who_feature_img            = get_field('who_feature_img');
$who_section_title          = get_field('who_section_title');
$who_section_body           = get_field('who_section_body');

$features_section_image     = get_field('features_section_image');
$features_section_title     = get_field('features_section_title');
$features_section_body      = get_field('features_section_body');

$project_feature_title     = get_field('project_feature_title');
$project_feature_body      = get_field('project_feature_body');

$instructor_section_title  = get_field('instructor_section_title');
$instructor_name           = get_field('instructor_name');
$bio_excerpt               = get_field('bio_excerpt');
$full_bio                  = get_field('full_bio');
$twitter_username          = get_field('twitter_username');
$facebook_username          = get_field('facebook_username');
$google_username          = get_field('google_username');
$num_students               = get_field('num_students');
$num_reviews               = get_field('num_reviews');
$num_courses               = get_field('num_courses');

get_header(); ?>

<!-- [HERO] -->
  <section id="hero" data-type="background" data-speed="10">
    <article>
      <div class="container clearfix">
        <div class="row">

          <div class="col-sm-5">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="Bootstrap to Wordpress" class="logo">
          </div> <!-- col -->

          <div class="col-sm-7 hero-text">
            <h1><?php bloginfo('name'); ?></h1>
            <p class="lead"><?php bloginfo('description'); ?><p>
            <div id="price-timeline">
              <div class="price active">
                <h4>Pre-launch Price<small>ends soon!</small></h4>
                <span><?php echo $prelaunch_price; ?></span>
              </div>
              <div class="price">
                <h4>Launch Price<small>coming soon!</small></h4>
                <span><?php echo $launch_price; ?></span>
              </div>
              <div class="price">
                <h4>Final Price<small>coming soon!</small></h4>
                <span><?php echo $final_price; ?></span>
              </div>
            </div>
            <p><a class="btn btn-lg btn-danger" href="<?php echo course_url;?>" role="button"> <?php echo $button_text; ?> </a></p>
          </div> <!-- col -->

        </div> <!-- row -->
      </div> <!--container -->
    </article>
  </section>

  <section id="optin">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <p class="lead"><?php echo $optin_text; ?></p>
        </div>

        <div class="col-sm-4">
          <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
            <?php echo $optin_button_text; ?>
          </button>
        </div><!-- col -->
      </div><!--row-->
    </div><!-- container- -->
  </section><!-- optin -->

  <!-- boost your income -->
  <section id="boost-income">
    <div class="container">

      <div class="section-header">
        <!-- if feature image exists -->
        <?php
          if( !empty($income_feature_image) ) : ?>
          <img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>">
        <?php endif; ?>
        <h2><?php echo $income_section_title; ?></h2>

      </div><!-- section header -->
      <p class="lead"><?php echo $income_section_desc; ?></p>
      <div class="row">
        <div class="col-sm-6">
          <h3><?php echo $reason_1_title; ?></h3>
          <p><?php echo $reason_1_desc; ?></p>
        </div> <!-- column -->
        <div class="col-sm-6">
          <h3><?php echo $reason_2_title; ?></h3>
          <p><?php echo $reason_2_desc; ?></p>
        </div> <!-- column -->
      </div><!-- row -->
    </div><!-- container -->

  </section> <!-- boost income -->

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

  <!-- course features
  ============================================ -->
  <section id="course-features">
    <div class="container">

      <div class="section-header">
        <?php
          if( !empty($who_feature_img ) ) : ?>
          <img src="<?php echo $features_section_image['url']; ?>" alt="<?php echo $features_section_image['alt']; ?>">
        <?php endif; ?>
        <h2><?php echo $features_section_title; ?></h2>
        <?php
          if( !empty($features_section_body ) ) : ?>
          <p class="lead">
            <?php echo $features_section_body; ?>
          </p>
        <?php endif; ?>
      </div><!-- section-header -->

      <div class="row">

        <?php $loop = new WP_Query ( array( 'post_type' => 'course_feature', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="col-sm-2">
            <i class="<?php the_field('course_feature_icon'); ?>"></i>
            <h4><?php the_title(); ?></h4>
          </div><!-- col -->
        <?php endwhile; ?>

      </div><!-- row -->
    </div>   <!-- container -->
  </section>  <!-- course features -->

  <!-- project features
  ============================================ -->
  <section id="project-features">
    <div class="container">

      <h2><?php echo $project_feature_title; ?></h2>
      <p class="lead"><?php echo $project_feature_body ?></p>

      <div class="row">

        <?php $loop = new WP_Query ( array( 'post_type' => 'project_feature', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="col-sm-4">

            <?php
              if ( has_post_thumbnail() ) {
                the_post_thumbnail();
              }
             ?>

             <h3><?php the_title(); ?></h3>
             <p>
               <?php the_content(); ?>
             </p>
          </div><!-- col -->
        <?php endwhile; ?>



      </div><!-- row -->

    </div><!-- column -->
    </div><!-- container -->
  </section><!-- project features -->


    <!-- video featurette
  ==============================================-->
  <section id="featurette">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <h2>Watch the Course Introduction</h2>
          <iframe width="100%" height="415" src="https://www.youtube.com/embed/4KvXrbabutg" frameborder="0" allowfullscreen></iframe>
        </div><!-- col -->
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- featurette -->

<!-- instructor
==============================================-->
  <section id="instructor">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-6">
          <div class="row">
            <div class="col-lg-8">
              <h2><?php echo $instructor_section_title; ?> <small><?php echo $instructor_name; ?></small></h2>
            </div><!-- end col -->
            <div class="col-lg-4">

              <?php if(!empty($twitter_username)): ?>
              <a href="https://twitter.com/<?php echo $twitter_username; ?>" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
              <?php endif; ?>

              <?php if(!empty(facebook_username)): ?>
              <a href="https://www.facebook.com/<?php echo $facebook_username; ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
              <?php endif; ?>

              <?php if(!empty($google_username)): ?>
              <a href="https://plus.google.com/<?php echo $google_username; ?>" class="badge social gplus" target="_blank"><i class="fa fa-google-plus"></i></a>
              <?php endif; ?>

            </div><!-- end col -->
          </div><!-- row -->

          <p class="lead">
            <?php echo $bio_excerpt; ?>
          </p>
          <p><?php echo $full_bio; ?></p>
          <hr>
          <h3>The Numbers <small>They Don't Lie</small></h3>
          <div class="row">
            <div class="col-xs-4">
              <div class="num">
                <div class="num-content">
                  <?php echo $num_students; ?> <span>students</span>
                </div><!-- num-content -->
              </div><!-- num -->
            </div><!-- col -->
            <div class="col-xs-4">
              <div class="num">
                <div class="num-content">
                  <?php echo $num_reviews; ?> <span>reviews</span>
                </div><!-- num-content -->
              </div><!-- num -->
            </div><!-- col -->
            <div class="col-xs-4">
              <div class="num">
                <div class="num-content">
                  <?php echo $num_courses; ?> <span>courses</span>
                </div><!-- num-content -->
              </div><!-- num -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- col -->
      </div><!-- row -->
    </div><!-- container -->
  </section> <!-- instructor -->


  <!-- testimonials
==============================================-->
  <section id="kudos">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <h2>What People are Saying About Brad</h2>

          <!-- testimonial -->
          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brennan.jpg" alt="Brennan" />
            </div><!--end col -->
            <div class="col-sm-8">
              <blockquote>
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </blockquote>
              <cite>&mdash; Brennan, graduate of all Brad's courses</cite>
            </div><!--end col -->
          </div><!-- row -->
          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ben.png" alt="Image of a man with a moustache" />
            </div>
            <div class="col-sm-8">
              <blockquote>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </blockquote>
              <cite>&mdash; Ben, graduate of Build a Website from Scratch with HTML and CSS</cite>
            </div>
          </div><!-- row -->
          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aj.png" alt="Illustration of a man with a beard" />
            </div>
            <div class="col-sm-8">
              <blockquote>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.
              </blockquote>
              <cite>&mdash; AJ, graduate of Code a Responsive Website with Bootstrap 3</cite>
            </div><!-- col -->
          </div><!-- row -->
          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ernest.png" alt="Illustration of a man with a goatee" />
            </div>
            <div class="col-sm-8">
              <blockquote>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
              </blockquote>
              <cite>&mdash; Ernest, graduate of Code Dynamic Websites with PHP</cite>
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- col -->
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- kudos -->




<?php get_footer(); ?>
