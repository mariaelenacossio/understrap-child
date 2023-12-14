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

<div class="hero-container bg-light">
                <div class="window-container max-w-4xl mx-auto mt-10 shadow-lg">
                  <div class="window-header p-4 d-flex justify-content-between align-items-center">
                    <div class="d-flex gap-2">
                      <div class="control-btn minimize-btn"></div><!--.control-btn-->
                      <div class="control-btn maximize-btn"></div><!--.control-btn-->
                      <div class="control-btn close-btn"></div><!--.control-btn-->
                    </div><!--.d-flex-->
                  </div><!--.window-header-->
                  <div class="window-content">
                  <div class="image-text">
                  <div class="role-container">
                    <p>I am a <span class="typed-text"></span><span class="cursor">&nbsp;</span></p>
                                      </div><!--.role-container-->                    
                  </div><!--.img-text-->
                  <div class="hero-cta-btns">
                                          <a href="https://mariaelena-cossioclark.com/wp-content/uploads/2023/11/MCC-resume.pdf" target="_blank">
                                              <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Resume</button>
                                          </a><!--.btn-resume-->
                                          <a href="#portfolio">
                                              <button type="button" class="btn btn-outline-secondary btn-lg px-4 me-md-2">Portfolio</button>
                                          </a><!--.btn-portfolio-->



                  </div><!--.window-content-->
                </div><!--.window-container-->
                </div><!--.hero-container-->





<!--Interface Content-->
<div class="interface">

                <!--Parallax Container-Hero Section Mobile-->
                <div class="parallax-container">
                  <div class="parallax-layer">
                      <img src="https://mariaelena-cossioclark.com/wp-content/uploads/2023/12/hero-img-6.png" 
                          alt="Web Design" class="parallax-image">
                      <div class="parallax-overlay hidden">
                          <div class="container">
                              <div class="row align-items-center h-100">
                                  <div class="col-sm-2 col-md-6 col-lg-8 mx-auto text-center">
                                      <p class="lead">Hi there! I am Mariaelena Cossio</p>
                                      <div class="role-container">
                                          <p>I am a <span class="typed-text"></span><span class="cursor">&nbsp;</span></p>
                                      </div><!--.role-container-->
                                      <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                          <a href="https://mariaelena-cossioclark.com/wp-content/uploads/2023/11/MCC-resume.pdf" target="_blank">
                                              <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Resume</button>
                                          </a><!--.btn-resume-->
                                          <a href="#portfolio">
                                              <button type="button" class="btn btn-outline-secondary btn-lg px-4 me-md-2">Portfolio</button>
                                          </a><!--.btn-portfolio-->
                                      </div><!--.d-grid-->
                                  </div><!--.col-sm-2-->
                              </div><!--.row-->
                          </div><!--.container-->
                      </div><!--.parallax-overlay-->
                  </div><!--.parallax-layer-->
                </div><!--.parallax-container-->




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
                        <h2 class="display-3 h2 fw-bold lh-1">Mariaelena Cossio Clark</h2>
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
                        
                        <!-- <div class="d-flex flex-row"> -->
                        <div class="icon-test">
                        <ul>
                    <li class="social-icon">
                      <a href="https://github.com/mariaelenacossio" target="_blank">
                      <svg class="github-icon"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" aria-label="Github">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
                      </a>
                    </li>
                    <li class="social-icon">
                      <a href="https://www.linkedin.com/in/mariaelena-cossio-clark-320ba416b" target="_blank">
                      <svg class="linkedin-icon"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" aria-label="Linkedin">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg>
                      </a>
                    </li>
                  </ul>
                </div>
                        <!-- </div> -->
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
                <section class="portfolio bg-light py-xl-6">
                <div class="container overflow-hidden">
                  <div class="row gy-5">
                    <div class="col-12">
                      <div class="row align-items-center gy-3 gy-md-0 gx-xl-5">
                        <div class="col-xs-12 col-md-6">
                          <div class="img-wrapper position-relative hcf-transform">
                            <a href="#!">
                              <span class="badge rounded-pill text-bg-pill position-absolute top-10px start-10px">HTML/CSS</span>
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
                            <p class="mb-4" style="max-height: 3.6em; overflow: hidden;">Elevating User Experience with a Design System.</p>
                      <div class="portfolio-btn mt-3"> <!-- This code will apply only for screens not bigger than 390px -->
                      <a class="btn btn-primary btn-lg px-4 me-md-2" href="https://mariaelena-cossioclark.com/beyond-skincare/" target="_self">Read More</a>
                      <a class="btn btn-outline-secondary btn-lg px-4 me-md-2" href="https://mariaelenacossio.github.io/DGL-309-design-system/" target="_blank">View Site</a>
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
                              <span class="badge rounded-pill text-bg-pill position-absolute top-10px end-10px">HTML/CSS/Bootstrap</span>
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
                            <a class="btn btn-primary btn-lg px-4 me-md-2" href="https://mariaelena-cossioclark.com/los-quequitos-mx/" target="_self">Read More</a>
                      <a class="btn btn-outline-secondary btn-lg px-4 me-md-2" href="https://mariaelenacossio.github.io/losquequitosmx.github.io/" target="_blank">View Site</a>
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
                              <span class="badge rounded-pill text-bg-pill position-absolute top-10px start-10px">HTML/CSS</span>
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
                            <p class="mb-4r" style="max-height: 3.6em; overflow: hidden;">Crafting Elegance and User Experience with One Nail at a Time.</p>
                            <div class="portfolio-btn mt-3 text-truncate" style="max-height: 3.6em; overflow: hidden;"> <!-- This code will apply only for screens not bigger than 390px -->
                            <a class="btn btn-primary btn-lg px-4 me-md-2" href="https://mariaelena-cossioclark.com/beauty-by-amy/" target="_self">Read More</a>
                      <a class="btn btn-outline-secondary btn-lg px-4 me-md-2" href="https://mariaelenacossio.github.io/beautybyamy.github.io/" target="_blank">View Site</a>
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
                              <span class="badge rounded-pill text-bg-pill position-absolute top-10px end-10px">UX/UI</span>
                              <!--RelocateME Case Study-->
                              <img class="img-fluid rounded w-100 hcf-of-cover hcf-op-center hcf-ih-250 hcf-ih-md-400" loading="eager" 
                              src="https://mariaelena-cossioclark.com/wp-content/uploads/2023/11/website-project-4-scaled-e1700103740850.jpg" 
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
                            <a class="btn btn-primary btn-lg px-4 me-md-2" href="https://mariaelena-cossioclark.com/relocateme/" target="_self">Read More</a>
                      <a class="btn btn-outline-secondary btn-lg px-4 me-md-2" href="https://xd.adobe.com/view/ef8d82b4-5695-4dfa-847f-2f7955ed59ef-bade/" target="_blank">View Site</a>
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
                      
                      <div class="card-body-test">
                      <div class="blog-card">
                <div class="poster">
                  <img src="https://mariaelena-cossioclark.com/wp-content/uploads/2023/11/blog-post-img-1-scaled.jpg" 
                        alt="website mockup design, mobile app mockups, wireframe examples, user interface screenshots,
                              responsive design mockups, landing page designs, prototype wireframes, interactive web design" />
                </div>

                <div class="details">
                  <h1>Embrace the Future: </h1>
                  <h2>Crafting an Enjoyable Mobile Experience</h2>
                      
                  <p class="desc">
                      Let's embark on a journey of discovery as we unravel the secrets 
                      behind optimizing user experiences for our beloved smartphone users.
                  </p>
                  
                  <button><a href="https://mariaelena-cossioclark.com/blog-post-1/">Read More</a></button>
                </div>
                </div><!--.1st-card-->

                <div class="blog-card">
                <div class="poster">
                  <img src="https://mariaelena-cossioclark.com/wp-content/uploads/2023/11/blog-post-2-scaled.jpg" 
                        alt="website mockup design, mobile app mockups, wireframe examples, user interface screenshots,
                              responsive design mockups, landing page designs, prototype wireframes, interactive web design" />
                </div>

                <div class="details">
                  <h1>Color Psychology in Web Design:</h1>
                  <h2>A Palette for Emotions</h2>
                      
                  <p class="desc">
                      Intrigued? Let's uncover the magic of Color Psychology in Web Design 
                      – where every shade tells a story!
                  </p>
                  
                  <button><a href="https://mariaelena-cossioclark.com/blog-post-2-2/">Read More</a></button>
                </div>
                </div><!--.2nd-card-->

                <div class="blog-card">
                <div class="poster">
                  <img src="https://mariaelena-cossioclark.com/wp-content/uploads/2023/11/blog-post-img-3-scaled.jpg" 
                        alt="website mockup design, mobile app mockups, wireframe examples, user interface screenshots,
                              responsive design mockups, landing page designs, prototype wireframes, interactive web design" />
                </div>

                <div class="details">
                  <h1>Navigating the UX Seas:</h1>
                  <h2>A Guide to Intuitive Navigation Design</h2>
                      
                  <p class="desc">
                  In this blog post, we're not just talking about menus and buttons 
                  – we're navigating the UX seas to create an experience that feels like a breezy cruise.
                  </p>
                  
                  <button><a href="https://mariaelena-cossioclark.com/blog-post-3/">Read More</a></button>
                </div>
                </div><!--.3rd-card-->

                <div class="blog-card">
                <div class="poster">
                  <img src="https://mariaelena-cossioclark.com/wp-content/uploads/2023/11/traffic-cone.png" 
                        alt="website mockup design, mobile app mockups, wireframe examples, user interface screenshots,
                              responsive design mockups, landing page designs, prototype wireframes, interactive web design" />
                </div>

                <div class="details">
                  <h1>Coming Soon</h1>
                  <h2>New Post</h2>
                      
                  <p class="desc">
                  Update real soon...
                  </p>
                  
                  <button><a href="#!">Read More</a></button>
                </div>
                </div><!--.4th-card-->

                </div><!--.card-body-test-->

                <?php
                get_footer();
                ?>
 </div><!--End Interface-->
</div>
			



