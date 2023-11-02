<?php
/**
 * Template Name: Case Study Page Template
 *
 * Template for displaying a blank page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
    <?php
get_header();
?>
</head>
<body>

<div class="interface">
    <section class="wrapper bg-light">
      <div class="container pt-10 pt-md-14 text-center">
        <div class="row">
          <div class="col-md-8 col-lg-7 col-xl-6 col-xxl-5 mx-auto">
            <h1 class="display-1 mb-3">Case Study</h1>
            <p class="lead fs-lg px-lg-10 px-xxl-8">Design System</p>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container pt-9 pt-md-11 pb-14 pb-md-16">
        <div class="projects-overflow mt-md-10 mb-10 mb-lg-15">
          <div class="project item">
            <div class="row">
              <figure class="col-lg-8 col-xl-7 offset-xl-1 rounded"> <img src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/10/design-system-phone-mockup-5.png" alt="" /></figure>
              <div class="project-details d-flex justify-content-center flex-column" style="right: 10%; bottom: 25%;">
                <div class="card shadow rellax" data-rellax-xs-speed="0" data-rellax-mobile-speed="0">
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line text-purple mb-3">Introduction</div>
                      <h2 class="post-title mb-3">BEYOND Skincare</h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                      <p>BEYOND skincare brand's design system emphasizes brand identity, 
                        sustainability, and consistency in color, typography, and user experience.</p>
                      <a href="#" class="more hover link-purple">See Project</a>
                    </div>
                    <!-- /.post-content -->
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.project-details -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.project -->
          <div class="project item">
            <div class="row">
              <figure class="col-lg-7 offset-lg-5 col-xl-6 offset-xl-5 rounded"> <img src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/10/design-system-desktop-mockup-3@2x.png" alt="" /></figure>
              <div class="project-details d-flex justify-content-center flex-column" style="left: 18%; bottom: 25%;">
                <div class="card shadow rellax" data-rellax-xs-speed="0" data-rellax-mobile-speed="0">
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line text-leaf mb-3">Research and Discovery</div>
                      <h2 class="post-title mb-3">Define the Scope</h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                      <p>In this step, I identified the needs and goals that the system will serve the target audience, 
                        and the elements and components required to meet the user needs and brand identity.</p>
                      <a href="#" class="more hover link-leaf">See Project</a>
                    </div>
                    <!-- /.post-content -->
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.project-details -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.project -->
          <div class="project item">
            <div class="row">
              <figure class="col-lg-9 col-xl-7 offset-xl-2 rounded"> <img src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/11/Desktop-Home.png" alt="" /></figure>
              <div class="project-details d-flex justify-content-center flex-column" style="right: 3%; bottom: 25%;">
                <div class="card shadow rellax" data-rellax-xs-speed="0" data-rellax-mobile-speed="0">
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line text-violet mb-3">Ideation and Design</div>
                      <h2 class="post-title mb-3">Wireframes</h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                      <p>I used Adobe Xd to create the layout of mobile and desktop screens for the design system and the sample website based on the mood board I put together to convey the overall look, feel, and style.</p>
                      <a href="#" class="more hover link-violet">Xd Wireframes</a>
                    </div>
                    <!-- /.post-content -->
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.project-details -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.project -->
          <div class="project item">
            <div class="row">
              <figure class="col-lg-9 offset-lg-3 col-xl-7 offset-xl-4 rounded"> <img src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/11/mariaelena-cossio-social-media-mockup-mobile-1@2x.png" alt="" /></figure>
              <div class="project-details d-flex justify-content-center flex-column" style="left: 12%; bottom: 25%;">
                <div class="card shadow rellax" data-rellax-xs-speed="0" data-rellax-mobile-speed="0">
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line text-yellow mb-3">Prototyping</div>
                      <h2 class="post-title mb-3">Build, Build And Keep Building</h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                      <p>During the development process of my sample website, 
                        I utilized HTML for building and CSS for styling to create pages that 
                        showcased the guidelines and format of the components and layout. 
                        Ultimately, I displayed the finished product on the sample website.</p>
                      <a href="https://github.com/mariaelenacossio/DGL-309-design-system" class="more hover link-yellow">Github Repository</a>
                    </div>
                    <!-- /.post-content -->
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.project-details -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.project -->
          <div class="project item">
            <div class="row">
              <figure class="col-lg-8 col-xl-6 offset-xl-1 rounded"> <img src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/10/design-system-phone-mockup-5.png" alt="" /></figure>
              <div class="project-details d-flex justify-content-center flex-column" style="right: 15%; bottom: 25%;">
                <div class="card shadow rellax" data-rellax-xs-speed="0" data-rellax-mobile-speed="0">
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line text-orange mb-3">Product</div>
                      <h2 class="post-title mb-3">Inceptos Euismod Egestas</h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam id dolor id nibh ultricies vehicula.</p>
                      <a href="#" class="more hover link-orange">See Project</a>
                    </div>
                    <!-- /.post-content -->
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.project-details -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.project -->
          <div class="project item">
            <div class="row">
              <figure class="col-lg-9 offset-lg-3 col-xl-7 offset-xl-5 rounded"> <img src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/11/DS-test.png" alt="" /></figure>
              <div class="project-details d-flex justify-content-center flex-column ms-lg-n150 ms-xl-0" style="left: 18%; bottom: 25%;">
                <div class="card shadow rellax" data-rellax-xs-speed="0" data-rellax-mobile-speed="0">
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line text-green mb-3">Testing and Iteration</div>
                      <h2 class="post-title mb-3">Test, Refine + Implement</h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                      <p>The final step was to test the usability and 
                        functionality with tools such as GTmetrix and WebAim in order to 
                        identify the weak points to improve and refine them.</p>
                      <a href="#" class="more hover link-green">See Project</a>
                    </div>
                    <!-- /.post-content -->
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.project-details -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.project -->
          <div class="project item">
            <div class="row">
              <figure class="col-lg-8 col-xl-6 offset-xl-1 rounded"> <img src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/10/design-system-phone-mockup-5.png" alt="" /></figure>
              <div class="project-details d-flex justify-content-center flex-column" style="right: 15%; bottom: 25%;">
                <div class="card shadow rellax" data-rellax-xs-speed="0" data-rellax-mobile-speed="0">
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line text-red mb-3">Conclusion</div>
                      <h2 class="post-title mb-3">Challenges I faced</h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                      <p>Building a design system is not a one-time process, 
                        it requires continuous iteration and refinement. 
                        Through regular meetings and walk-throughs with my peers and instructor, 
                        I gained a fresh perspective on how to approach and provide feedback on our respective projects.</p>
                      <a href="https://mariaelenacossio.github.io/DGL-309-design-system/" class="more hover link-red">See Project</a>
                    </div>
                    <!-- /.post-content -->
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.project-details -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.project -->
        </div>
        <!-- /.projects-overflow -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <?php
get_footer();?>
  </div>
  <!-- /.content-wrapper -->
  

</div><!--.div interface-->


<!-- ?php 
while ( have_posts() ) {
  the_post();
?>
    <h1>?php the_title(); ?> </h1>
    ?php the_content(); ?>

    <p>Some other text</p>
    <p>Any more understrap...</p>
?php 

} // end of "while"
?> -->
	<!-- <p>hello world</p> -->

</body>

</html>
