<?php
/**
 * Template Name: Blog Post (3) Template
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
        <p class="text-muted mb-0"><span class="font-weight-bold">Nov 12, 2023</span></p>
        <p class="text-muted mb-0"><span class="font-weight-bold">5 minute read</span></p>
        <p class="text-muted mb-0">-<span class="font-weight-bold">Mariaelena C</span></p>
      </div>      
      <h1 class="text-center pt-4">Navigating the UX Seas</h1>
      <p class="lead my-3">The Ocean of User Experience</p>
      <p class="p">Ahoy, digital sailors! 🌊 Ready to set sail on the high seas of user experience 
                  design? Great navigation is your compass, and in this post, we're turning you into a captain 
                  of smooth sailing. Get ready to chart your course through the UX seas, ensuring your users 
                  have a journey as smooth as gliding on calm waters.</p>

          <!-- <p class="lead my-3">Why Mobile-First?</p> -->
          <!-- <p class="text-gradient d-inline">Because It's All About You!</p> -->
             <p class="p">Think of your website as a vast ocean, and your users as fearless sailors seeking 
                          information and experiences. Smooth navigation is the wind in their sails, guiding
                          them effortlessly through your digital waters. In this blog post, we're not just 
                          talking about menus and buttons – we're navigating the UX seas to create an 
                          experience that feels like a breezy cruise.</p>

      <span class="text-gradient d-inline">Crafting Intuitive Navigation Maps</span></h3>
              <p class="p">What good is a sea voyage without a map? We're handing you the compass 
                            to intuitive navigation design. Learn the art of creating menus that 
                            are not just functional but feel like a friendly guide leading your users. 
                            Dive into the world of user-friendly labels, responsive layouts, 
                            and a navigation system that adapts to any device – because a smooth 
                            sea journey is meant for all sailors, big and small.
                            </p>

      <span class="text-gradient d-inline">Avoiding the Storms of Confusion</span></h3>
                <p class="p">Ever been on a website that felt like a turbulent storm, leaving you lost and 
                            disoriented? Let's steer clear of that! We're sharing tips on how to avoid the 
                            common pitfalls that create confusion for your users. From clear signposts to 
                            straightforward calls-to-action, we're turning you into a weathered captain, 
                            steering your ship through calm waters.
                </p>

                <h4 class="display-6 text-center pt-5">Smooth Waters Ahead!</h4>
                <p class="p">With the wind at your back and the stars as your guide, you'll sail 
                              into the horizon of user satisfaction. We'll showcase real-life 
                              examples of websites that have mastered the art of intuitive navigation, 
                              providing you with inspiration to captain your own digital ship.
                </p>

                <h5 class="display-6 text-center pt-5">Chart Your Course to Success</h5>
                <p class="p">Ready to embark on this nautical adventure? It's time to chart your 
                            course to success with navigation that not only gets your users from 
                            point A to B but does so with the grace of a well-tuned sailboat. 
                            Navigate with purpose, and let's set sail towards the horizon of 
                            seamless user experiences. Anchors aweigh! 🌊⚓
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
      <!--Blog post 2-->
      <div class="card card-blog-post">
      <a href="https://mariaelena-cossioclark.com/blog-post-2-2/">
        <img src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/11/blog-post-2-scaled.jpg" 
                alt="responsive design, user experience, mobile-friendly ui, interaction design, 
                navigation patterns, app prototyping, app prototyping, design trends" class="card-img-top card-img-blog-post">
      </a>
        <div class="card-body">
        <div class="article-details">
            <p class="card-text text-muted mb-0"><span class="font-weight-bold">Nov 11, 2023</span></p>
            <p class="card-text text-muted mb-0"><span class="font-weight-bold">5 minutes read</span></p>
            <p class="card-text text-muted mb-0">-<span class="font-weight-bold">Mariaelena C</span></p>
          </div>          
          <h5 class="card-title">Color Psychology in Web Design</h5>
          <p class="card-text">Explore the vivid realm of color in web design, 
                              where hues and shades craft user emotions. Dive in!</p>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
</div>


  
      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="https://mariaelena-cossioclark.com/blog-post-3/">Older</a>
        <a class="btn btn-outline-secondary" href="https://mariaelena-cossioclark.com/blog-post-2-2/" tabindex="-1">Newer</a>
      </nav>














<?php
get_footer();
?>
  

</div><!--.div interface-->

</body>

</html>

