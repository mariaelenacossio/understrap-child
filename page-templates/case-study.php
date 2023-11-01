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
<div
  class="items-center bg-white self-stretch flex w-full flex-col px-5 py-28 max-md:max-w-full"
>
  <div
    class="self-center mb-0 w-full max-w-[1312px] max-md:max-w-full max-md:mb-2.5"
  >
    <div class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0">
      <div class="flex flex-col items-stretch w-6/12 max-md:w-full max-md:ml-0">
        <div
          class="justify-between items-start self-stretch flex grow flex-col max-md:max-w-full max-md:mt-10"
        >
          <div
            class="items-start flex w-[616px] max-w-full flex-col self-start"
          >
            <div
              class="items-start flex w-[155px] max-w-full gap-2 self-start max-md:justify-center"
            >
              <div
                class="text-black text-center text-base leading-[150%] self-stretch"
              >
                Introduction
              </div>
              <img
                loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/9903fa7e-a37e-467b-81df-88cb133a66b2?apiKey=f7b5d0f788ee443b89566f415073066a&"
                class="aspect-square object-contain object-center w-4 overflow-hidden self-center max-w-full my-auto"
              />
              <div
                class="text-black text-center text-base leading-[150%] self-stretch"
              >
                Case
              </div>
            </div>
            <div
              class="items-start flex w-full grow flex-col mt-10 self-start max-md:max-w-full"
            >
              <div
                class="text-black text-5xl font-bold leading-[120%] max-md:max-w-full max-md:text-4xl"
              >
                Exploring the Impact of Blogging on Business Growth
              </div>
              <div
                class="items-start flex w-[365px] max-w-full grow flex-col mt-12 self-start max-md:mt-10"
              >
                <div class="items-start flex w-20 max-w-full gap-1 self-start">
                  <div class="text-black text-base leading-[150%] self-stretch">
                    By
                  </div>
                  <div
                    class="text-black text-base font-semibold leading-[150%] self-stretch"
                  >
                    John Doe
                  </div>
                </div>
                <div
                  class="items-start flex w-full gap-2 self-start max-md:justify-center"
                >
                  <div class="text-black text-base leading-[150%] my-auto">
                    Posted on: 11 Jan 2022
                  </div>
                  <div class="text-black text-base leading-[150%] self-stretch">
                    •
                  </div>
                  <div class="text-black text-base leading-[150%] my-auto">
                    Estimated Reading Time: 5 min
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="items-start flex w-[152px] max-w-full grow flex-col self-start"
          >
            <div class="text-black text-base font-semibold leading-[150%]">
              Share this post
            </div>
            <div
              class="items-start flex w-full gap-2 mt-4 self-start max-md:justify-center"
            >
              <div
                class="justify-center items-center bg-zinc-100 flex flex-col flex-1 p-1 rounded-[4rem]"
              >
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/2cfbeb12-9186-4fe9-8a12-20ee5ed446e0?apiKey=f7b5d0f788ee443b89566f415073066a&"
                  class="aspect-square object-contain object-center w-full overflow-hidden self-stretch"
                />
              </div>
              <div
                class="justify-center items-center bg-zinc-100 flex flex-col flex-1 p-1 rounded-[4rem]"
              >
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/f45d365c-b96c-4eef-91cf-82fff4cf0b1f?apiKey=f7b5d0f788ee443b89566f415073066a&"
                  class="aspect-square object-contain object-center w-full overflow-hidden self-stretch"
                />
              </div>
              <div
                class="justify-center items-center bg-zinc-100 flex flex-col flex-1 p-1 rounded-[4rem]"
              >
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/7e933e68-75e0-4c55-bf1b-a99c47f71f1f?apiKey=f7b5d0f788ee443b89566f415073066a&"
                  class="aspect-square object-contain object-center w-full overflow-hidden self-stretch"
                />
              </div>
              <div
                class="justify-center items-center bg-zinc-100 flex flex-col flex-1 p-1 rounded-[4rem]"
              >
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/5ff6744f-5a0d-4e08-8858-cb045447298f?apiKey=f7b5d0f788ee443b89566f415073066a&"
                  class="aspect-square object-contain object-center w-full overflow-hidden self-stretch"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="flex flex-col items-stretch w-6/12 ml-5 max-md:w-full max-md:ml-0"
      >
        <img
          loading="lazy"
          srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/11c9c2b9-b3e0-4f7c-abbf-92a0dca273c7?apiKey=f7b5d0f788ee443b89566f415073066a&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/11c9c2b9-b3e0-4f7c-abbf-92a0dca273c7?apiKey=f7b5d0f788ee443b89566f415073066a&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/11c9c2b9-b3e0-4f7c-abbf-92a0dca273c7?apiKey=f7b5d0f788ee443b89566f415073066a&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/11c9c2b9-b3e0-4f7c-abbf-92a0dca273c7?apiKey=f7b5d0f788ee443b89566f415073066a&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/11c9c2b9-b3e0-4f7c-abbf-92a0dca273c7?apiKey=f7b5d0f788ee443b89566f415073066a&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/11c9c2b9-b3e0-4f7c-abbf-92a0dca273c7?apiKey=f7b5d0f788ee443b89566f415073066a&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/11c9c2b9-b3e0-4f7c-abbf-92a0dca273c7?apiKey=f7b5d0f788ee443b89566f415073066a&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/11c9c2b9-b3e0-4f7c-abbf-92a0dca273c7?apiKey=f7b5d0f788ee443b89566f415073066a&"
          class="aspect-[1.56] object-contain object-center w-full overflow-hidden flex-1 max-md:max-w-full max-md:mt-10"
        />
      </div>
    </div>
  </div>
</div>









	<!-- <p>hello world</p> -->
	<?php
get_footer();?>

</body>

</html>
