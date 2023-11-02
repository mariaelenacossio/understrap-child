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
<div class="container mt-5">
        <!-- Introduction Section -->
        <section class="mb-5">
            <h2 class="display-4">Introduction</h2>
            <p>Your introduction text goes here...</p>
        </section>

        <!-- Presentation Overview Section -->
        <section class="mb-5">
            <h2 class="display-4">Presentation Overview</h2>
            <p>Your presentation overview text goes here...</p>
        </section>

        <!-- Case Study Format Section -->
        <section class="mb-5">
            <h2 class="display-4">Case Study Format</h2>
            <!-- Case Study Step 1: Define the problem -->
            <div class="mb-4">
                <h3>1. Define the Problem</h3>
                <p>Your description of the problem and how you addressed it goes here...</p>
            </div>
            <!-- Case Study Step 2: Design process and methodology -->
            <div class="mb-4">
                <h3>2. Design Process and Methodology</h3>
                <p>Your description of your design process and methodology goes here...</p>
            </div>
            <!-- Case Study Step 3: Key insights and user research -->
            <div class="mb-4">
                <h3>3. Key Insights and User Research</h3>
                <p>Your key findings from user research and how they influenced your design decisions go here...</p>
            </div>
            <!-- Case Study Step 4: User testing and iteration -->
            <div class="mb-4">
                <h3>4. User Testing and Iteration</h3>
                <p>Your process of gathering feedback and iterative improvements based on user insights goes here...</p>
            </div>
            <!-- Case Study Step 5: Results and impact -->
            <div class="mb-4">
                <h3>5. Results and Impact</h3>
                <p>Your results, positive outcomes, metrics, challenges faced, solutions, and lessons learned go here...</p>
            </div>
        </section>

        <!-- Key Takeaways and Design Principles Section -->
        <section class="mb-5">
            <h2 class="display-4">Key Takeaways and Design Principles</h2>
            <p>Your key takeaways and design principles description goes here...</p>
        </section>
    </div>
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
