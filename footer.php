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

<div class="footer wrapper" id="wrapper-footer">

<footer class="text-light p-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h2>Let's Connect</h2>
          <p>And Work Together</p>
		  <div class="col-md-2">
          <!-- Space for your logo -->
          <img src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/10/logo-white-bg-black.png" 
		  alt="logo-bg-black" class="img-fluid">
        </div>
        </div>
		<div class="social-btn">
        <div class="col-md-2">
          <!-- Space for social media icons -->
			<a href="https://www.linkedin.com/in/mariaelena-cossio-clark-320ba416b/" target="_blank" itemprop="SameAs" rel="noopener"><br>
			<i class="fa fa-linkedin-square"></i>
			</a>
</div>
<div class="col-md-2">
			<a href="https://github.com/mariaelenacossio" target="_blank" itemprop="SameAs" rel="noopener"><br>
			<i class="fa fa-github-square"></i>
			</a>
        </div>
</div><!--Socials .div-->
        <div class="col-md-2">
          <!-- Navigation items -->
          <ul class="list-unstyled">
            <li><a href="#home" class="text-light">Home</a></li>
            <li><a href="#portfolio" class="text-light">Portfolio</a></li>
            <li><a href="#" class="text-light">Resume</a></li>
            <li><a href="#contact" class="text-light">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-3 f-contact-form">
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
  <!-- Footer Section -->
<footer class="footer page bg-dark text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="https://assets-global.website-files.com/5d0445b2e1a868a5489d4aea/6523bf250c86631325684972_Lets%20Work%20Together.svg" 
                     loading="eager" alt="" class="img-fluid"><!--The img is from a third-party site--> 
                <div class="mt-3">
                    <h5>Looking for a hectic designer?</h5>
                    <a href="mailto:mariaelena.cossio@outlook.com?subject=Enquiry" class="btn btn-primary">mariaelena.cossio@outlook.com</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mt-3">
                    <h5>Want a more in-depth look at my history?</h5>
                    <a href="https://tylerpixel.com/resume" class="btn btn-primary">View Resume</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mt-3">
                    <div class="footer-based">Based in Vancouver, Canada</div>
                    <div class="socials">
                        <a href="https://instagram.tylerpixel.com" class="btn btn-link"><i class="fab fa-instagram"></i></a>
                        <a href="https://linkedin.com/in/tylerpixel" class="btn btn-link"><i class="fab fa-linkedin"></i></a>
                        <a href="#!" class="btn btn-link"><i class="fab fa-xing"></i></a><!--Icon for your website-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-3">
        <p>&copy; 2023 Mariaelena Cossio</p>
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

<!-- </div>#wrapper-footer -->

<?php // Closing div#page from header.php. ?>
<!-- </div>#page -->

<?php wp_footer(); ?>

</body>

</html>

