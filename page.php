<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<?php
			// Do the left sidebar check and open div#primary.
			get_template_part( 'global-templates/left-sidebar-check' );
			?>

			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				}
				?>

			</main>

			<?php
			// Do the right sidebar check and close div#primary.
			get_template_part( 'global-templates/right-sidebar-check' );
			?>

		</div><!-- .row -->
		<!-- <div class="d-flex justify-content-center mt-5 mt-xxl-0">
<div class="profile bg-gradient-primary-to-secondary">
<figure><img class="profile-img" src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/10/0D5A5721-1403-4809-9FFD-E66184DEB02E_1_102_o-e1697088508893.jpeg" alt="profile-img"></figure>
</div>
</div> -->


	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
