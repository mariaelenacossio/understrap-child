<?php
/**
 * Template Name: Blog Post (1) Template
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
    <?php
get_header();
?>
</head>
<body>

<div class="interface">
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Blog Name</a>
</nav>

<!-- Hero Section -->
<div class="container">
    <div class="jumbotron">
        <img src="hero-image.jpg" class="img-fluid" alt="Hero Image">
        <h1 class="display-4">Your Blog Post Headline</h1>
        <p class="lead">A catchy subheadline for your blog post.</p>
    </div>
</div>

<!-- Main Content Section -->
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <!-- Text Section -->
            <section>
                <h2>Section Title</h2>
                <p>Your text content goes here.</p>
            </section>

            <!-- Blockquote Section -->
            <section>
                <blockquote class="blockquote">
                    <p class="mb-0">Your quote goes here.</p>
                    <footer class="blockquote-footer">Author</footer>
                </blockquote>
                <img src="blockquote-image.jpg" class="img-fluid" alt="Blockquote Image">
            </section>

            <!-- Paragraph and Image Section -->
            <section>
                <p>Your paragraph content goes here.</p>
                <img src="paragraph-image.jpg" class="img-fluid" alt="Paragraph Image">
            </section>
        </div>

        <!-- Sidebar (optional) -->
        <div class="col-lg-4">
            <!-- Add sidebar content here -->
        </div>
    </div>
</div>

<!-- Previous and Next Buttons -->
<div class="container">
    <div class="row">
        <div class="col-lg-6 text-left">
            <a href="#">Previous Post</a>
        </div>
        <div class="col-lg-6 text-right">
            <a href="#">Next Post</a>
        </div>
    </div>
    <?php
get_footer();
?>
</div>  

</div><!--.div interface-->

</body>

</html>

