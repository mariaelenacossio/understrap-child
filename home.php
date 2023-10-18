<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Understrap
 */

// Exit if accessed directly.

defined( 'ABSPATH' ) || exit;

get_header();


$container = get_theme_mod( 'understrap_container_type' );
?>
<!-- ======= Hero Section ======= -->
<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/10/design-system-phone-mockup-5.png" alt="profile-img" class="d-block mx-lg-auto img-fluid" width="850" height="450" loading="lazy">
      </div>
      <div class="col-lg-6">
	  	<p class="lead">Hi there, this is Mariaelena</p>
        <h1 class="display-5 fw-bold lh-1 mb-3">I am a Web Designer</h1>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Resume</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Projects</button>
        </div>
      </div>
    </div>
  </div>







<!-- <div id="hero" class="hero route bg-image" style="background-image: url(http://mariaelena-cossioclark.com/wp-content/uploads/2023/10/design-system-phone-mockup-5.png)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container"> -->
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <!-- <h1 class="hero-title mb-4">I am Mariaelena Cossio Clark</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p> -->
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
				<!--Buttons-->
				<!-- <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
				<a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="resume.html">Resume</a><br>
				<a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="projects.html">Projects</a></div>
				</div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- End Hero Section -->




<!-- <header class="py-5" style="background-image: url(http://mariaelena-cossioclark.com/wp-content/uploads/2023/10/design-system-phone-mockup-5.png)">
			<div class="container px-5 pb-5">
				<div class="row gx-5 align-items-center">
				<div class="col-xxl-5"> -->
					<!-- Header text content-->
				<!-- <div class="text-center text-xxl-start">
				<div class="fs-3 fw-light text-muted">Hi there, this is Mariaelena</div>
				<h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">I'm a Web Designer</span></h1>
				<div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
				<a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="resume.html">Resume</a><br>
				<a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="projects.html">Projects</a></div>
				</div>
				</div>
				<div class="col-xxl-7 d-flex justify-content-center"> -->
					<!-- Header profile picture-->
				<!-- <div class="d-flex justify-content-center mt-5 mt-xxl-0"> -->
				<!-- <div class="profile bg-gradient-primary-to-secondary">
				<figure>
					<img class="profile-img" src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/10/0D5A5721-1403-4809-9FFD-E66184DEB02E_1_102_o-e1697088508893.jpeg" alt="profile-img">
				</figure>
				</div> -->
				<!-- </div>
				</div>
				</div>
				</div>
				</header> -->

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper">


	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<?php
			// Do the left sidebar check and open div#primary.
			get_template_part( 'global-templates/left-sidebar-check' );
			?>

			
				<main class="site-main" id="main">

				

				<!--About Me Section-->
				<section class="about-me bg-light py-5">
				<div class="container px-5">
				<div class="row gx-5 justify-content-center">
				<div class="col-xxl-8">
				<div class="profile bg-gradient-primary-to-secondary">
				<figure>
					<img class="profile-img" src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/10/0D5A5721-1403-4809-9FFD-E66184DEB02E_1_102_o-e1697088508893.jpeg" alt="profile-img">
				</figure>
				</div>
				<div class="text-center my-5">
				<h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
				<p class="lead fw-light mb-4">I am a passionate and organized individual who loves crafting digital stories through websites and apps. I have a keen eye for detail and utilize Adobe Creative Cloud, particularly Xd and Ai, in my creative process. Overcoming programming challenges, HTML, CSS, and JS have become my go-to tools for translating abstract ideas into reality. I thrive in a collaborative team environment, always eager to learn from others. Ultimately, my daily inspiration comes from creating meaningful digital experiences.</p>
				<div class="d-flex justify-content-center fs-2 gap-4">
				<a href="www.linkedin.com/in/mariaelena-cossio-clark-320ba416b" target="_blank" itemprop="SameAs" rel="noopener"><br>
				<i class="fa fa-linkedin-square"></i><br>
				</a><br>
				<a href="https://github.com/mariaelenacossio" target="_blank" itemprop="SameAs" rel="noopener"><br>
				<i class="fa fa-github-square"></i><br>
				</a></div>
				</div>
				</div>
				</div>
				</div>
				</section>
				<!--End About Me Section-->


				
				<div class="headings">
				<h2 class="display-5 fw-bolder pt-5"><span class="text-gradient d-inline">Case Studies</span></h2>
				<hr>
				</div>
				

				<!--Case Study Cards-->
				<section class="portfolio-cards">
				<div class="row row-cols-1 row-cols-md-2 g-4">
				<div class="col">
				<div class="card">
				<img src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/10/design-system-phone-mockup-5.png" class="card-img-top" alt="...">
				<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				</div>
				</div>
				</div>
				<div class="col">
				<div class="card">
				<img src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/10/design-system-phone-mockup-5.png" class="card-img-top" alt="...">
				<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				</div>
				</div>
				</div>
				<div class="col">
				<div class="card">
				<img src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/10/design-system-phone-mockup-5.png" class="card-img-top" alt="...">
				<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
				</div>
				</div>
				</div>
				<div class="col">
				<div class="card">
				<img src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/10/design-system-phone-mockup-5.png" class="card-img-top" alt="...">
				<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				</div>
				</div>
				</div>
				</div>
				</section>
				

				
				<!-- <footer class="bg-white py-4 mt-auto">
				<div class="container px-5">
				<div class="row align-items-center justify-content-between flex-column flex-sm-row">
				<div class="col-auto">
				<div class="small m-0">Copyright © Your Website 2023</div>
				</div>
				<div class="col-auto">
				<a class="small" href="#!">Privacy</a><br>
				<span class="mx-1">·</span><br>
				<a class="small" href="#!">Terms</a><br>
				<span class="mx-1">·</span><br>
				<a class="small" href="#!">Contact</a></div>
				</div>
				</div>
				</footer> -->


				<!-- ?php
				if ( have_posts() ) {
					// Start the Loop.
					while ( have_posts() ) {
						the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', get_post_format() );
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?> -->

			</main>

			<?php
			// Display the pagination component.
			understrap_pagination();

			// Do the right sidebar check and close div#primary.
			get_template_part( 'global-templates/right-sidebar-check' );
			?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
