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
<div class="interface">
		<!-- ======= Hero Section ======= -->
		<div class="container hero col-xxl-8 px-4 py-5">
		<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
			<div class="col-10 col-sm-8 col-lg-6">
			<img src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/10/design-system-phone-mockup-5.png" 
			alt="profile-img" class="d-block mx-lg-auto img-fluid-hero img-shadow" width="850" height="450" loading="lazy">
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
		<!--End of Hero Section-->

<!-- ======= About Section (Test) ======= -->

<div class="section-container">
<div class="primary-container img-shadow">
	<div class="container-wrapper">
		<div class="img-container img-shadow">
		<img src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/10/0D5A5721-1403-4809-9FFD-E66184DEB02E_1_102_o-e1697088508893.jpeg" 
		alt="profile-img" class="img-fluid-profile img-shadow">
</div>
		<div class="block">
			<p>Mariaelena</p>
		</div>
	</div>
</div>
<!-- <div class="secondary-container">
	<div class="container-wrapper">
	<div class="block">
			<p>Mariaelena</p>
		</div>
	</div>
</div> -->
</div><!--Section container-->





  <!-- ======= About Section ======= -->
  <div class="about-me bg-light container mt-4 img-shadow">
        <div class="row">
            <div class="col-lg-4">
                <div class="profile-container text-center p-4">
                    <img src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/10/0D5A5721-1403-4809-9FFD-E66184DEB02E_1_102_o-e1697088508893.jpeg" 
					alt="profile-img" class="img-fluid-profile img-shadow">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="about-me-container p-4">
                    <h2>About me</h2>
                    <p class="lead fw-light mb-4">
					I am a passionate and organized individual who loves crafting digital stories through websites and apps. 
					I have a keen eye for detail and utilize Adobe Creative Cloud, particularly Xd and Adobe Illustrator, in my creative process. 
					Overcoming programming challenges, HTML, CSS, and JS have become my go-to tools for translating abstract ideas into reality. 
					I thrive in a collaborative team environment, always eager to learn from others. 
					Ultimately, my daily inspiration comes from creating meaningful digital experiences.
                    </p>
					<div class="social-links d-flex fs-2 gap-4">
						<a href="https://www.linkedin.com/in/mariaelena-cossio-clark-320ba416b/" target="_blank" itemprop="SameAs" rel="noopener"><br>
						<i class="fa fa-linkedin-square"></i>
						</a>
						<a href="https://github.com/mariaelenacossio" target="_blank" itemprop="SameAs" rel="noopener"><br>
						<i class="fa fa-github-square"></i>
						</a>
					</div>
                </div>
            </div>
        </div>
    </div>

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
			</div><!--End Interface-->
			</div>

<!-- ?php
get_footer(); -->

