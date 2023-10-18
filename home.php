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
			<div class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="hero-content">
                    <h1>Hi there, this is Mariaelena</h1>
                    <h2>I'm a Web Designer</h2>
                    <div class="buttons">
                        <a class="btn btn-bd-primary" href="resume.html">Resume</a>
                        <a class="btn btn-outline-dark" href="projects.html">Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile">
                    <figure class="profile-img">
                        <img src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/10/0D5A5721-1403-4809-9FFD-E66184DEB02E_1_102_o-e1697088508893.jpeg" alt="profile-img">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="about-me">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2>About Me</h2>
                <p>
                    I am a passionate and organized individual who loves crafting digital stories through websites and apps.
                    I have a keen eye for detail and utilize Adobe Creative Cloud, particularly Xd and Ai, in my creative process.
                    Overcoming programming challenges, HTML, CSS, and JS have become my go-to tools for translating abstract ideas into reality.
                    I thrive in a collaborative team environment, always eager to learn from others. Ultimately, my daily inspiration comes from creating meaningful digital experiences.
                </p>
                <div class="social-links">
                    <a href="www.linkedin.com/in/mariaelena-cossio-clark-320ba416b" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                    <a href="https://github.com/mariaelenacossio" target="_blank"><i class="fa fa-github-square"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="case-studies">
    <div class="container">
        <h2>Case Studies</h2>
        <hr>
        <div class="row">
            <!-- Case study cards go here -->
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
