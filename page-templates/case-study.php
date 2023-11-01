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
<div class="main-container">
  <div class="header">
    <h1 class="title">Introduction</h1>
    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/9903fa7e-a37e-467b-81df-88cb133a66b2?apiKey=f7b5d0f788ee443b89566f415073066a&" alt="Image" class="image" />
    <h2 class="subtitle">Case</h2>
  </div>
  <div class="content">
    <div class="article">
      <h3 class="article-title">Exploring the Impact of Blogging on Business Growth</h3>
      <div class="author-info">
        <div class="author-icon">By</div>
        <div class="author-name">John Doe</div>
      </div>
      <div class="article-meta">
        <div class="article-date">Posted on: 11 Jan 2022</div>
        <div class="article-divider">•</div>
        <div class="article-reading-time">Estimated Reading Time: 5 min</div>
      </div>
    </div>
    <div class="share-buttons">
      <div class="share-label">Share this post</div>
      <div class="share-icons">
        <a href="#" class="share-icon">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/2cfbeb12-9186-4fe9-8a12-20ee5ed446e0?apiKey=f7b5d0f788ee443b89566f415073066a&" alt="Facebook" class="share-image" />
        </a>
        <a href="#" class="share-icon">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/f45d365c-b96c-4eef-91cf-82fff4cf0b1f?apiKey=f7b5d0f788ee443b89566f415073066a&" alt="Twitter" class="share-image" />
        </a>
        <a href="#" class="share-icon">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/7e933e68-75e0-4c55-bf1b-a99c47f71f1f?apiKey=f7b5d0f788ee443b89566f415073066a&" alt="LinkedIn" class="share-image" />
        </a>
        <a href="#" class="share-icon">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/5ff6744f-5a0d-4e08-8858-cb045447298f?apiKey=f7b5d0f788ee443b89566f415073066a&" alt="Email" class="share-image" />
        </a>
      </div>
    </div>
  </div>
  <div class="sidebar">
    <img loading="lazy" srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/11c9c2b9-b3e0-4f7c-abbf-92a0dca273c7?apiKey=f7b5d0f788ee443b89566f415073066a&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/11c9c2b9-b3e0-4f7c-abbf-92a0dca273c7?apiKey=f7b5d0f788ee443b89566f415073066a&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/11c9c2b9-b3e0-4f7c-abbf-92a0dca273c7?apiKey=f7b5d0f788ee443b89566f415073066a&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/11c9c2b9-b3e0-4f7c-abbf-92a0dca273c7?apiKey=f7b5d0f788ee443b89566f415073066a&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/11c9c2b9-b3e0-4f7c-abbf-92a0dca273c7?apiKey=f7b5d0f788ee443b89566f415073066a&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/11c9c2b9-b3e0-4f7c-abbf-92a0dca273c7?apiKey=f7b5d0f788ee443b89566f415073066a&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/11c9c2b9-b3e0-4f7c-abbf-92a0dca273c7?apiKey=f7b5d0f788ee443b89566f415073066a&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/11c9c2b9-b3e0-4f7c-abbf-92a0dca273c7?apiKey=f7b5d0f788ee443b89566f415073066a&"alt="Image" class="sidebar-image" />
  </div>
</div>

	<!-- <p>hello world</p> -->
	<?php
get_footer();?>

</body>

</html>
