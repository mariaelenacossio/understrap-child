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

<!-- About Me -->
<section class="bg-light py-4 py-md-5 py-xl-6">
  <div class="container mb-4 mb-md-5 mb-xl-6">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-xxl-8">
        <img class="img-fluid rounded shadow" loading="lazy" src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/10/design-system-desktop-mockup-3@2x.png" alt="">
      </div>
    </div>
  </div>
  <div class="container overflow-hidden">
    <div class="row gy-2 gy-md-0 justify-content-xxl-center">
      <div class="col-12 order-md-1 col-md-8 col-xxl-6">
        <div class="text-center text-md-start">
          <h2 class="display-3 fw-bold lh-1">Mariaelena Cossio Clark</h2>
          <p class="text-secondary fs-4 mb-2">Web Designer</p>
          <hr class="w-25 mx-auto ms-md-0 mb-4 text-secondary">
          <p>I am a passionate and organized individual who loves crafting digital stories through websites and apps. 
                    I have a keen eye for detail and utilize Adobe Creative Cloud, particularly Xd and Adobe Illustrator, in my creative process. 
                    Overcoming programming challenges, HTML, CSS, and JS have become my go-to tools for translating abstract ideas into reality. 
                    I thrive in a collaborative team environment, always eager to learn from others. 
                    Ultimately, my daily inspiration comes from creating meaningful digital experiences.</p>
        </div>
      </div>
      <div class="col-12 order-md-0 col-md-4 col-xxl-4">
        <div class="text-center text-md-start me-md-3 me-xl-5">
          <p class="mb-4">
            <span class="d-block display-6 lh-1">2+</span>
            <span class="fs-4 text-secondary">years of experience</span>
          </p>
          <div class="d-flex flex-row">
            <!-- <button class="btn btn-primary btn-lg px-4 me-md-2" type="button">Hire Me</button> -->
			<a href="https://www.linkedin.com/in/mariaelena-cossio-clark-320ba416b" target="_blank" itemprop="SameAs" rel="noopener">
                <i class="fa fa-linkedin-square"></i>
            </a>
			<a href="https://github.com/mariaelenacossio" target="_blank" itemprop="SameAs" rel="noopener">
                <i class="fa fa-github-square"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--End of About Me -->
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
				<h2 class="display-5 fw-bolder pt-5"><span class="text-gradient d-inline">Portfolio</span></h2>
				<hr>
				</div>
				

				<!--Case Study Cards-->

				<!-- <section class="portfolio-cards">
				<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 g-4">
				<div class="col">
                    <div class="card custom-card">
					<img src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/10/design-system-phone-mockup-5.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="card-buttons">
                                <button class="btn btn-primary btn-lg px-4 me-md-2">View Site</button>
                                <button class="btn btn-outline-secondary btn-lg px-4">Case Study</button>
                            </div>
                        </div>
                    </div>
                </div>
                !-- Add more cards with similar structure here 
				<div class="col">
                    <div class="card custom-card">
					<img src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/10/website-project-1.png" class="card-img-top" alt="website-project-1, los quequitos">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="card-buttons">
                                <button class="btn btn-primary btn-lg px-4 me-md-2">View Site</button>
                                <button class="btn btn-outline-secondary btn-lg px-4">Case Study</button>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col">
                    <div class="card custom-card">
					<img src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/10/website-project-2.png" class="card-img-top" alt="website-project-2, beauty by amy">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="card-buttons">
                                <button class="btn btn-primary btn-lg px-4 me-md-2">View Site</button>
                                <button class="btn btn-outline-secondary btn-lg px-4">Case Study</button>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col">
                    <div class="card custom-card">
					<img src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/10/website-project-4.png" class="card-img-top" alt="ux-project, relocateME">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="card-buttons">
                                <button class="btn btn-primary btn-lg px-4 me-md-2">View Site</button>
                                <button class="btn btn-outline-secondary btn-lg px-4">Case Study</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->



<!--Portfolio-->
<section class="bg-light py-5 py-xl-6">
  <div class="container overflow-hidden">
    <div class="row gy-5">
      <div class="col-12">
        <div class="row align-items-center gy-3 gy-md-0 gx-xl-5">
          <div class="col-xs-12 col-md-6">
            <div class="img-wrapper position-relative hcf-transform">
              <a href="#!">
                <span class="badge rounded-pill text-bg-warning position-absolute top-10px start-10px">HTML/CSS</span>
                <img class="img-fluid rounded w-100 hcf-of-cover hcf-op-center hcf-ih-250 hcf-ih-md-400" loading="lazy" src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/10/design-system-phone-mockup-5.png" alt="">
              </a>
            </div>
          </div>
          <div class="col-xs-12 col-md-6">
            <div>
              <!-- <p class="text-secondary mb-1">Nov 11, 2022</p> -->
              <h2 class="h1 mb-3"><a class="link-dark text-decoration-none" href="#!">Design System</a></h2>
              <p class="mb-4">Elevating User Experience with a Design System.</p>
              <a class="btn btn-primary" href="#!" target="_self">Read More</a>
			  <a class="btn btn-primary" href="https://mariaelenacossio.github.io/DGL-309-design-system/" target="_blank">View Site</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="row align-items-center flex-row-reverse gy-3 gy-md-0 gx-xl-5">
          <div class="col-xs-12 col-md-6">
            <div class="img-wrapper position-relative hcf-transform">
              <a href="#!">
                <span class="badge rounded-pill text-bg-warning position-absolute top-10px end-10px">Travel</span>
                <img class="img-fluid rounded w-100 hcf-of-cover hcf-op-center hcf-ih-250 hcf-ih-md-400" loading="lazy" src="./assets/img/blogs/blog-1/featured-image-2.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="col-xs-12 col-md-6">
            <div>
              <p class="text-secondary mb-1">Oct 9, 2022</p>
              <h2 class="h1 mb-3"><a class="link-dark text-decoration-none" href="#!">Strange Facts About Hot Air Balloons</a></h2>
              <p class="mb-4">You think the Wright Brothers were impressive? Hot air balloons were carrying people through the air almost a century before the Wright Brothers were even born.</p>
              <a class="btn btn-primary" href="#!" target="_self">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="row align-items-center gy-3 gy-md-0 gx-xl-5">
          <div class="col-xs-12 col-md-6">
            <div class="img-wrapper position-relative hcf-transform">
              <a href="#!">
                <span class="badge rounded-pill text-bg-warning position-absolute top-10px start-10px">Photography</span>
                <img class="img-fluid rounded w-100 hcf-of-cover hcf-op-center hcf-ih-250 hcf-ih-md-400" loading="lazy" src="./assets/img/blogs/blog-1/featured-image-3.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="col-xs-12 col-md-6">
            <div>
              <p class="text-secondary mb-1">Sep 17, 2022</p>
              <h2 class="h1 mb-3"><a class="link-dark text-decoration-none" href="#!">Reasons Why Photography Is an Art Form</a></h2>
              <p class="mb-4">Before the first photo was captured in the 18th century, lifelike images of what the eyes can see could only be made by talented artists.</p>
              <a class="btn btn-primary" href="#!" target="_self">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="row align-items-center flex-row-reverse gy-3 gy-md-0 gx-xl-5">
          <div class="col-xs-12 col-md-6">
            <div class="img-wrapper position-relative hcf-transform">
              <a href="#!">
                <span class="badge rounded-pill text-bg-warning position-absolute top-10px end-10px">Food</span>
                <img class="img-fluid rounded w-100 hcf-of-cover hcf-op-center hcf-ih-250 hcf-ih-md-400" loading="lazy" src="./assets/img/blogs/blog-1/featured-image-4.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="col-xs-12 col-md-6">
            <div>
              <p class="text-secondary mb-1">Aug 23, 2022</p>
              <h2 class="h1 mb-3"><a class="link-dark text-decoration-none" href="#!">Benefits of Having a Heavy Breakfast Every Morning</a></h2>
              <p class="mb-4">Running late for work or school? "Let’s skip the breakfast!" Well, this might sound like the most ideal idea to save time when you are on the run.</p>
              <a class="btn btn-primary" href="#!" target="_self">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>		
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
?>
			</div><!--End Interface-->
			</div>



