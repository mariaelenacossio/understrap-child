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
  <section class="section footer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <!--Add a new divider with the primary color-->
                <!-- <img src="https://assets-global.website-files.com/5d0445b2e1a868a5489d4aea/652502e0451fd47fd23d04e5_Footer-Shape.svg" 
                     loading="eager" alt="" class="img-fluid"/> -->
                <div class="footer page">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="https://assets-global.website-files.com/5d0445b2e1a868a5489d4aea/6523bf250c86631325684972_Lets%20Work%20Together.svg" 
                                 loading="eager" id="w-node-_1014c88c-965d-27a4-5b9f-a995e247ef9c-e247ef96" alt="" class="img-fluid"/>
                        </div>
                        <div class="col-md-9">
                            <div class="footer-square row">
                                <div class="col-md-6">
                                    <div class="cta-cards">
                                        <h2 class="heading-6">
                                            Looking for a<br/>hectic designer?
                                        </h2>
                                        <a href="mailto:mariaelena.cossio@outlook.com?subject=Enquiry" 
                                           class="btn btn-primary">mariaelena.cossio@outlook.com</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="cta-cards">
                                        <h2 class="heading-6">
                                            Want a more in-depth<br/>look at my history?
                                        </h2>
                                        <a href="https://mariaelena-cossioclark.com/wp-content/uploads/2023/11/MCC-resume.pdf" 
                                           class="btn btn-primary">View Resume</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="brand-socials">
                        <div class="footer-based">Vancouver, Canada</div>
                        <div class="socials">
                            <a href="https://instagram.tylerpixel.com" class="social-symbol w-inline-block">
                                <div class="social-icon w-embed">
                                    <!-- Instagram SVG code here -->
                                </div>
                            </a>
                            <a href="https://linkedin.com/in/tylerpixel" class="social-symbol w-inline-block">
                                <div class="social-icon w-embed">
                                    <!-- LinkedIn SVG code here -->
                                </div>
                            </a>
                            <a href="https://x.tylerpixel.com" class="social-symbol w-inline-block">
                                <div class="social-icon w-embed">
                                    <!-- X SVG code here -->
                                </div>
                            </a>
                        </div>
                    </div>
                    <a href="/" aria-current="page" class="brand dark w-inline-block w--current">
                        <div class="footer-logo w-embed">
                            <!-- Your logo SVG code here -->
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
  


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

