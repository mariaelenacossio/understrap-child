<?php
/**
 * Template Name: Case Study Page Template
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
	<?php
get_header();
?>
<div class="interface">

	<?php
get_footer();?>
</div><!--.div interface-->


<!-- ?php 
while ( have_posts() ) {
  the_post();
?>
    <h1>?php the_title(); ?> </h1>
    ?php the_content(); ?>

    <p>Some other text</p>
    <p>Any more understrap...</p>
?php 

} // end of "while"
?> -->
	<!-- <p>hello world</p> -->


</body>

</html>
