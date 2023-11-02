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
    <script src="./js/plugins.js"></script>
	<?php wp_head(); ?>
</head>
<body>
	<?php
get_header();
?>
<div class="interface">
    <section class="wrapper bg-light">
      <div class="container pt-10 pt-md-14 text-center">
        <div class="row">
          <div class="col-md-8 col-lg-7 col-xl-6 col-xxl-5 mx-auto">
            <h1 class="display-1 mb-3">Projects</h1>
            <p class="lead fs-lg px-lg-10 px-xxl-8">Check out some of our awesome projects with creative ideas and great design.</p>
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
                      <div class="post-category text-line text-purple mb-3">Cosmetic</div>
                      <h2 class="post-title mb-3">Cras Fermentum Sem</h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
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
              <figure class="col-lg-7 offset-lg-5 col-xl-6 offset-xl-5 rounded"> <img src="./assets/img/photos/cs17.jpg" alt="" /></figure>
              <div class="project-details d-flex justify-content-center flex-column" style="left: 18%; bottom: 25%;">
                <div class="card shadow rellax" data-rellax-xs-speed="0" data-rellax-mobile-speed="0">
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line text-leaf mb-3">Coffee</div>
                      <h2 class="post-title mb-3">Mollis Ipsum Mattis</h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam id dolor id nibh ultricies vehicula.</p>
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
              <figure class="col-lg-9 col-xl-7 offset-xl-2 rounded"> <img src="./assets/img/photos/cs18.jpg" alt="" /></figure>
              <div class="project-details d-flex justify-content-center flex-column" style="right: 3%; bottom: 25%;">
                <div class="card shadow rellax" data-rellax-xs-speed="0" data-rellax-mobile-speed="0">
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line text-violet mb-3">Still Life</div>
                      <h2 class="post-title mb-3">Ipsum Ultricies Cursus</h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                      <a href="#" class="more hover link-violet">See Project</a>
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
              <figure class="col-lg-9 offset-lg-3 col-xl-7 offset-xl-4 rounded"> <img src="./assets/img/photos/cs19.jpg" alt="" /></figure>
              <div class="project-details d-flex justify-content-center flex-column" style="left: 12%; bottom: 25%;">
                <div class="card shadow rellax" data-rellax-xs-speed="0" data-rellax-mobile-speed="0">
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line text-yellow mb-3">Product</div>
                      <h2 class="post-title mb-3">Sollicitudin Ornare Porta</h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                      <a href="#" class="more hover link-yellow">See Project</a>
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
              <figure class="col-lg-8 col-xl-6 offset-xl-1 rounded"> <img src="./assets/img/photos/cs20.jpg" alt="" /></figure>
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
              <figure class="col-lg-9 offset-lg-3 col-xl-7 offset-xl-5 rounded"> <img src="./assets/img/photos/cs21.jpg" alt="" /></figure>
              <div class="project-details d-flex justify-content-center flex-column ms-lg-n150 ms-xl-0" style="left: 18%; bottom: 25%;">
                <div class="card shadow rellax" data-rellax-xs-speed="0" data-rellax-mobile-speed="0">
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line text-green mb-3">Workshop</div>
                      <h2 class="post-title mb-3">Ipsum Mollis Vulputate</h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
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
              <figure class="col-lg-8 col-xl-6 offset-xl-1 rounded"> <img src="./assets/img/photos/cs22.jpg" alt="" /></figure>
              <div class="project-details d-flex justify-content-center flex-column" style="right: 15%; bottom: 25%;">
                <div class="card shadow rellax" data-rellax-xs-speed="0" data-rellax-mobile-speed="0">
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line text-red mb-3">Concept</div>
                      <h2 class="post-title mb-3">Porta Ornare Cras</h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                      <a href="#" class="more hover link-red">See Project</a>
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
        <nav class="d-flex justify-content-center" aria-label="pagination">
          <ul class="pagination">
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
              </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
              </a>
            </li>
          </ul>
          <!-- /.pagination -->
        </nav>
        <!-- /nav -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->
  

</div><!--.div interface-->
<?php
get_footer();?>

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
