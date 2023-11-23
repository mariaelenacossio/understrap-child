<?php
/**
 * Template Name: Blog Post (2) Template
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
<div class="interface">
<!--Test for new layout-->
<div class="container-blog mt-4">
  <div class="row">
    <!-- First Column (Scrollable) -->
    <div class="col-lg-8 first-column">
    <div class="banner-container">
      <img src="https://mariaelena-cossioclark.com/wp-content/uploads/2023/11/blog-post-img-1-scaled.jpg" 
                alt="responsive design, user experience, mobile-friendly ui, interaction design, 
                navigation patterns, app prototyping, app prototyping, design trends" class="banner-img">
</div>
                <div class="article-details">
        <p class="text-muted mb-0"><span class="font-weight-bold">Nov 11, 2023</span></p>
        <p class="text-muted mb-0"><span class="font-weight-bold">5 minute read</span></p>
        <p class="text-muted mb-0">-<span class="font-weight-bold">Mariaelena C</span></p>
      </div>      
      <h1 class="text-center pt-4">Color Psychology in Web Design</h1>
      <p class="lead my-3">A Palette for Emotions</p>
      <p class="p">Welcome, color enthusiasts! 🌈 Today, we're diving deep into the world of hues, 
          shades, and vibes. Imagine your website as a canvas, and each color as a brushstroke painting 
          the emotions of your users. Intrigued? Let's uncover the magic of Color Psychology in Web Design 
          – where every shade tells a story!</p>

          <p class="lead my-3">Why Color Matters?</p>
          <!-- <p class="text-gradient d-inline">Because It's All About You!</p> -->
             <p class="p">Colors aren't just pretty pixels; they're emotional wizards. Cool blues can 
                          create a sense of trust and tranquility, while fiery reds ignite passion and urgency. 
                          The palette you choose sets the tone for your digital space, influencing how users feel 
                          and interact with your site.</p>

      <span class="text-gradient d-inline">Crafting Your Emotion Palette</span></h3>
              <p class="p">It's time to become a digital emotion maestro! We'll guide you through the art 
                          of selecting colors that resonate with your brand and connect with your audience. 
                          From the comforting embrace of greens to the invigorating power of yellows, we'll 
                          help you paint a picture that truly speaks to your users.</p>

      <span class="text-gradient d-inline">A Rainbow of Possibilities</span></h3>
                <p class="p">We're not just talking about red, blue, and green; we're talking about the 
                              entire rainbow of possibilities! Discover the emotional nuances of each color 
                              and how to combine them to create a symphony of feelings on your website. 
                              Get ready to unleash the power of your personalized color spectrum.</p>

                <h4 class="display-6 text-center pt-5">Let's Play with Palettes!</h4>
                <p class="p">Enough theory – it's time to play! We'll explore real-world examples of 
                              websites that have nailed color psychology. Get inspired by the color 
                              choices of industry leaders and see how they've used the emotional language 
                              of colors to captivate their audience.</p>

                <h5 class="display-6 text-center pt-5">Your Palette, Your Story</h5>
                <p class="p">As you embark on this colorful journey, remember: your color palette is more 
                              than a design choice; it's a storyteller. What story do you want your website 
                              to tell? What emotions do you want to evoke? It's time to infuse your digital 
                              canvas with personality and warmth.
                              Ready to paint your website with emotions? 
                              Let's dive in and create a palette that leaves a lasting 
                              impression on your users. Get ready for a rainbow ride of creativity 
                              and connection! 🚀🎨
                <br>
                Happy scrolling! 📱✨
                </p>


    </div>

    <!-- Second Column (Static) -->
    <div class="col-lg-4 second-column">
      <!-- Display cards side by side on screens smaller than 1024px -->
      <div class="d-md-flex flex-md-row flex-wrap">
      <!-- First Card -->
      <!--Blog post 1-->
      <div class="card card-blog-post">
      <a href="https://mariaelena-cossioclark.com/blog-post-1/">
        <img src="https://mariaelena-cossioclark.com/wp-content/uploads/2023/11/blog-post-img-1-scaled.jpg" 
                alt="responsive design, user experience, mobile-friendly ui, interaction design, 
                navigation patterns, app prototyping, app prototyping, design trends" class="card-img-top card-img-blog-post">
        </a>
        <div class="card-body">
        <div class="article-details">
            <p class="card-text text-muted mb-0"><span class="font-weight-bold">Nov 06, 2023</span></p>
            <p class="card-text text-muted mb-0"><span class="font-weight-bold">5 minutes read</span></p>
            <p class="card-text text-muted mb-0">-<span class="font-weight-bold">Mariaelena C</span></p>
          </div>          
          <h5 class="card-title">Crafting an Enjoyable Mobile Experience</h5>
          <p class="card-text">Explore Mobile-First Design's vibrant world. 
                              Embark on a journey optimizing user experiences for smartphone users.</p>
        </div>
      </div>

      <!-- Second Card -->
      <!--Blog post 3-->
      <div class="card card-blog-post">
      <a href="https://mariaelena-cossioclark.com/blog-post-3/">
        <img src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/11/blog-post-img-3-scaled.jpg" 
                alt="responsive design, user experience, mobile-friendly ui, interaction design, 
                navigation patterns, app prototyping, app prototyping, design trends" class="card-img-top card-img-blog-post">
        </a>
        <div class="card-body">
        <div class="article-details">
            <p class="card-text text-muted mb-0"><span class="font-weight-bold">Nov 12th, 2023</span></p>
            <p class="card-text text-muted mb-0"><span class="font-weight-bold">5 minute</span></p>
            <p class="card-text text-muted mb-0">-<span class="font-weight-bold">Mariaelena C</span></p>
          </div>
          <h5 class="card-title">Navigating the UX Seas</h5>
          <p class="card-text">Embark on UX adventures! Navigate the high seas of design with smooth navigation as your compass.</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="https://mariaelena-cossioclark.com/blog-post-3/" 
        tabindex="-1" aria-disabled="true">Newer</a>
      </nav>

<?php
get_footer();
?>
  

</div><!--.div interface-->

</body>

</html>

