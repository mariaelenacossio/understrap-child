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
			<section class="bg-light py-5">
<div class="container px-5">
<div class="row gx-5 justify-content-center">
<div class="col-xxl-8">
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
</div></div></section>

				<?php
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
				?>

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
