<?php
/**
 * Template Name: Blank Page Template
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
	<?php wp_head(); ?>
</head>
<body>
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
</div>
</div>
</section>
	<?php
	while ( have_posts() ) {
		the_post();
		get_template_part( 'loop-templates/content', 'blank' );
	}
	wp_footer();
	?>


</body>
</html>
