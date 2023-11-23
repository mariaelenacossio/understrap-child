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
			<img src="https://mariaelena-cossioclark.com/wp-content/uploads/2023/11/design-system-phone-mockup-5.jpg" 
			alt="profile-img, web design, website mockups, ux/ui design, portfolio design, digital design, 
      responsive design, creative web design, user interface design" class="d-block mx-lg-auto img-fluid-hero img-shadow" 
      width="850" height="450" loading="eager">
			</div>
			<div class="col-lg-6">
			<p class="lead">Hi there, this is Mariaelena</p>
			<h1 class="display-5 fw-bold lh-1 mb-3">I am a Web Designer</h1>
			<div class="d-grid gap-2 d-md-flex justify-content-md-start">
      <a href="https://mariaelena-cossioclark.com/wp-content/uploads/2023/11/MCC-resume.pdf" target="_blank" download="mcc-resume.pdf">
      <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Resume</button>
      </a>
      <a href="#portfolio">
      <button type="button" class="btn btn-outline-secondary btn-lg px-4 me-md-2">Portfolio</button>
      </a>
			</div>
			</div>
		</div>
		</div>
		<!--End of Hero Section-->

<!-- About Me -->
<section id="about" class="bg-light py-4 py-md-5 py-xl-6">
  <div class="container mb-4 mb-md-5 mb-xl-6">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-xxl-8">
        <img class="img-fluid rounded shadow" loading="eager" 
        src="https://mariaelena-cossioclark.com/wp-content/uploads/2023/11/design-system-desktop-mockup-3@2x.jpg" 
        alt="web design, website mockups, ux/ui design, portfolio design, digital design, responsive design, 
        creative web design, user interface design">
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

				<div class="headings">
				<h2 id="portfolio" class="display-5 fw-bolder pt-5"><span class="text-gradient d-inline">Portfolio</span></h2>
				<hr>
				</div>

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
                <!--Design System Case Study-->
                <img class="img-fluid rounded w-100 hcf-of-cover hcf-op-center hcf-ih-250 hcf-ih-md-400" loading="eager" 
                src="https://mariaelena-cossioclark.com/wp-content/uploads/2023/11/design-system-phone-mockup-5.jpg" 
                alt="web design, website mockups, ux/ui design, portfolio design, digital design, responsive design, 
                creative web design, user interface design">
              </a>
            </div>
          </div>
          <div class="col-xs-12 col-md-6">
            <div>
              <!-- <p class="text-secondary mb-1">Nov 11, 2022</p> -->
              <h2 class="h1 mb-3"><a class="link-dark text-decoration-none" href="#!">Design System</a></h2>
              <p class="mb-4 text-truncate" style="max-height: 3.6em; overflow: hidden;">Elevating User Experience with a Design System.</p>
			  <div class="portfolio-btn mt-3"> <!-- This code will apply only for screens not bigger than 390px -->
				<a class="btn btn-primary mb-2" href="https://mariaelena-cossioclark.com/beyond-skincare/" target="_self">Read More</a>
				<a class="btn btn-primary mb-2" href="https://mariaelenacossio.github.io/DGL-309-design-system/" target="_blank">View Site</a>
				</div>
			</div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="row align-items-center flex-row-reverse gy-3 gy-md-0 gx-xl-5">
          <div class="col-xs-12 col-md-6">
            <div class="img-wrapper position-relative hcf-transform">
              <a href="#!">
                <span class="badge rounded-pill text-bg-warning position-absolute top-10px end-10px">HTML/CSS/Bootstrap</span>
                <!--Los Quequitos Case Study-->
                <img class="img-fluid rounded w-100 hcf-of-cover hcf-op-center hcf-ih-250 hcf-ih-md-400" loading="eager" 
                src="https://mariaelena-cossioclark.com/wp-content/uploads/2023/11/website-project-1-scaled.jpg" 
                alt="website mockup design, mobile app mockups, wireframe examples, user interface screenshots,
                responsive design mockups, landing page designs, prototype wireframes, interactive web design">
              </a>
            </div>
          </div>
          <div class="col-xs-12 col-md-6">
            <div>
              <!-- <p class="text-secondary mb-1">Oct 9, 2022</p> -->
              <h2 class="h1 mb-3"><a class="link-dark text-decoration-none" href="#!">Local E-commerce</a></h2>
              <p class="mb-4">User-friendly website, built with Bootstrap, offers a seamless and secure shopping experience</p>
              <div class="portfolio-btn mt-3"> <!-- This code will apply only for screens not bigger than 390px -->
              <a class="btn btn-primary" href="https://mariaelena-cossioclark.com/los-quequitos-mx/" target="_self">Read More</a>
			  <a class="btn btn-primary" href="https://mariaelenacossio.github.io/losquequitosmx.github.io/" target="_blank">View Site</a>
            </div>
          </div>
        </div>
        </div>
      </div>
      <div class="col-12">
        <div class="row align-items-center gy-3 gy-md-0 gx-xl-5">
          <div class="col-xs-12 col-md-6">
            <div class="img-wrapper position-relative hcf-transform">
              <a href="#!">
                <span class="badge rounded-pill text-bg-warning position-absolute top-10px start-10px">HTML/CSS</span>
                <!--Beauty by Amy Case Study-->
                <img class="img-fluid rounded w-100 hcf-of-cover hcf-op-center hcf-ih-250 hcf-ih-md-400" loading="eager" 
                src="https://mariaelena-cossioclark.com/wp-content/uploads/2023/11/website-project-2-scaled-e1700103130812.jpg" 
                alt="website mockup design, mobile app mockups, wireframe examples, user interface screenshots,
                responsive design mockups, landing page designs, prototype wireframes, interactive web design">
              </a>
            </div>
          </div>
          <div class="col-xs-12 col-md-6">
            <div>
              <!-- <p class="text-secondary mb-1">Sep 17, 2022</p> -->
              <h2 class="h1 mb-3"><a class="link-dark text-decoration-none" href="#!">Business/E-commerce</a></h2>
              <p class="mb-4 text-truncate" style="max-height: 3.6em; overflow: hidden;">Crafting Elegance and User Experience with One Nail at a Time.</p>
              <div class="portfolio-btn mt-3 text-truncate" style="max-height: 3.6em; overflow: hidden;"> <!-- This code will apply only for screens not bigger than 390px -->
              <a class="btn btn-primary" href="https://mariaelena-cossioclark.com/beauty-by-amy/" target="_self">Read More</a>
			  <a class="btn btn-primary" href="https://mariaelenacossio.github.io/beautybyamy.github.io/" target="_blank">View Site</a>
            </div>
          </div>
        </div>
        </div>
      </div>
      <div class="col-12">
        <div class="row align-items-center flex-row-reverse gy-3 gy-md-0 gx-xl-5">
          <div class="col-xs-12 col-md-6">
            <div class="img-wrapper position-relative hcf-transform">
              <a href="#!">
                <span class="badge rounded-pill text-bg-warning position-absolute top-10px end-10px">UX/UI</span>
                <!--RelocateME Case Study-->
                <img class="img-fluid rounded w-100 hcf-of-cover hcf-op-center hcf-ih-250 hcf-ih-md-400" loading="eager" 
                src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/11/website-project-4-scaled-e1700103740850.jpg" 
                alt="website mockup design, mobile app mockups, wireframe examples, user interface screenshots,
                responsive design mockups, landing page designs, prototype wireframes, interactive web design">
              </a>
            </div>
          </div>
          <div class="col-xs-12 col-md-6">
            <div>
              <!-- <p class="text-secondary mb-1">Aug 23, 2022</p> -->
              <h2 class="h1 mb-3"><a class="link-dark text-decoration-none" href="#!">Web App</a></h2>
              <p class="mb-4">Seamless Journeys, Crafted with UX/UI Excellence.</p>
              <div class="portfolio-btn mt-3 text-truncate" style="max-height: 3.6em; overflow: hidden;"> <!-- This code will apply only for screens not bigger than 390px -->
              <a class="btn btn-primary" href="https://mariaelena-cossioclark.com/relocateme/" target="_self">Read More</a>
			  <a class="btn btn-primary" href="https://xd.adobe.com/view/ef8d82b4-5695-4dfa-847f-2f7955ed59ef-bade/" target="_blank">View Site</a>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>


				<!--Blog Cards-->

        <div class="headings">
				<h2 id="blog" class="display-5 fw-bolder pt-5"><span class="text-gradient d-inline">Blog</span></h2>
				<hr>
				</div>

				<section class="blog-cards">
				<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 g-4">
				<div class="col">
                    <div class="card custom-card h-100">
					<img src="http://mariaelena-cossioclark.com/wp-content/uploads/2023/11/blog-post-img-1-scaled.jpg" class="card h-100-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Embrace the Future: Crafting an Enjoyable Mobile Experience</h5>
                            <p class="card-text">Let's embark on a journey of discovery as we unravel the secrets 
                            behind optimizing user experiences for our beloved smartphone users.
                            </p>
                            <div class="card-buttons d-flex justify-content-center">
                            <a href="https://mariaelena-cossioclark.com/blog-post-1/" class="btn btn-primary btn-lg px-4 me-md-2">Read More</a>
                                <!-- <button class="btn btn-outline-secondary btn-lg px-4">Case Study</button> -->
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col">
                    <div class="card custom-card h-100">
					<img src="https://mariaelena-cossioclark.com/wp-content/uploads/2023/11/blog-post-2-scaled.jpg" class="card-img-top" 
                alt="e-commerce website design, corporate website mockups, startup landing page design, 
                    mobile app ux/ui, technology website design, health and wellness website mockups">
                        <div class="card-body">
                            <h5 class="card-title">Color Psychology in Web Design: A Palette for Emotions</h5>
                            <p class="card-text">Intrigued? Let's uncover the magic of Color Psychology in Web Design 
                              – where every shade tells a story!</p>
                            <div class="card-buttons d-flex justify-content-center">
                            <a href="https://mariaelena-cossioclark.com/blog-post-2-2/" class="btn btn-primary btn-lg px-4 me-md-2">Read More</a>
                                <!-- <button class="btn btn-outline-secondary btn-lg px-4">Case Study</button> -->
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col">
                    <div class="card custom-card h-100">
					<img src="https://mariaelena-cossioclark.com/wp-content/uploads/2023/11/blog-post-img-3-scaled.jpg" class="card-img-top" 
               alt="responsive design, user experience, mobile-friendly ui, interaction design, navigation patterns, app prototyping, app prototyping, design trends">
                        <div class="card-body">
                            <h5 class="card-title">Navigating the UX Seas: A Guide to Intuitive Navigation Design</h5>
                            <p class="card-text">In this blog post, we're not just talking about menus and buttons 
                              – we're navigating the UX seas to create an experience that feels like a breezy cruise.</p>
                            <div class="card-buttons d-flex justify-content-center">
                            <a href="https://mariaelena-cossioclark.com/blog-post-3/" class="btn btn-primary btn-lg px-4 me-md-2">Read More</a>
                                <!-- <button class="btn btn-outline-secondary btn-lg px-4">Case Study</button> -->
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col">
                    <div class="card custom-card h-100">
					<img src="https://mariaelena-cossioclark.com/wp-content/uploads/2023/11/blog-post-img-4-scaled.jpg" class="card-img-top" 
               alt="responsive design, user experience, mobile-friendly ui, interaction design, navigation patterns, app prototyping, app prototyping, design trends">
                        <div class="card-body">
                            <h5 class="card-title">Microinteractions: The Small Details That Make a Big Impact</h5>
                            <p class="card-text">Join us on a journey where small becomes mighty, and every click, hover, 
                              and scroll turns into a delightful experience for your users.</p>
                            <div class="card-buttons d-flex justify-content-center">
                                <button class="btn btn-primary btn-lg px-4 me-md-2">Read More</button>
                                <!-- <button class="btn btn-outline-secondary btn-lg px-4">Case Study</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

        <!--Test-->
<!--Section: Contact v.4-->
<section id="contact" class="contact-form mb-4">
    <div class="container overflow-hidden">

        <!--Section heading-->
        <div class="headings">
        <h2 class="display-5 fw-bolder pt-5"><span class="text-gradient d-inline">Let's Connect</span></h2>
        <hr>
        </div>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to send a message, and I will get back to you.</p>

        <div class="row">

            <!--Grid column for image-->
            <div class="col-md-6 mb-4">
                <div class="contact-image rounded">
                    <img class="img-fluid rounded w-100" loading="eager" 
                    src="https://mariaelena-cossioclark.com/wp-content/uploads/2023/10/logo-white-bg-black.png" alt="">
                </div>
            </div>

            <!--Grid column for the form-->
            <div class="col-md-6 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column for name-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                            <label for="name" class="">Your name</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                        </div>

                        <!--Grid column for email-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                            <label for="email" class="">Your email</label>
                                <input type="text" id="email" name="email" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row for subject-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                            <label for="subject" class="">Subject</label>
                                <input type="text" id="subject" name="subject" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!--Grid row for subject-->

                    <!--Grid row for message-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                            <label for="message">Your message</label>
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            </div>
                        </div>
                    </div>
                    <!--Grid row for message-->
                    <div class="text-center text-md-left">
                    <button type="submit" name="submit" class="btn btn-primary">Send</button>
                </div>
                </form>
                <div class="status"></div>
                <?php echo $msg; ?>
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

			<!-- </main> -->

			<!-- ?php -->
			<!-- // Display the pagination component.
			// understrap_pagination();

			// Do the right sidebar check and close div#primary.
			// get_template_part( 'global-templates/right-sidebar-check' );
			// ? -->

		<!-- </div>.row -->

	<!-- </div>#content -->

<!-- </div>#index-wrapper -->
<?php
get_footer();
?>
			</div><!--End Interface-->
			



