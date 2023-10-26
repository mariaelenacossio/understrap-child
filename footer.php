<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

<footer class="bg-dark text-light p-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h2>Let's Connect</h2>
          <p>And Work Together</p>
        </div>
        <div class="col-md-2">
          <!-- Space for your logo -->
          <img src="your-logo.png" alt="Your Logo" class="img-fluid">
        </div>
        <div class="col-md-2">
          <!-- Space for social media icons -->
          <a href="#" class="text-light"><i class="fab fa-facebook"></i></a>
          <a href="#" class="text-light"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="col-md-2">
          <!-- Navigation items -->
          <ul class="list-unstyled">
            <li><a href="#" class="text-light">Home</a></li>
            <li><a href="#" class="text-light">Portfolio</a></li>
            <li><a href="#" class="text-light">Resume</a></li>
            <li><a href="#" class="text-light">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <!-- Contact form -->
          <h5>Get in Touch</h5>
          <form>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Your Email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </footer>


	<!-- <div class="?php echo esc_attr( $container ); ?">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info"> -->

						<!-- ?php understrap_site_info(); ?> -->

					<!-- </div>.site-info -->

				<!-- </footer>#colophon -->

			<!-- </div>col -->

		<!-- </div>.row -->

	<!-- </div>.container(-fluid).. -->

</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
