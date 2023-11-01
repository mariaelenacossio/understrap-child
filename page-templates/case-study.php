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

<?php 
while ( have_posts() ) {
  the_post();
?>
    <h1><?php the_title(); ?> </h1>
    <?php the_content(); ?>

    <p>Some other text</p>
    <p>Any more understrap...</p>
<?php 

} // end of "while"
?>

<div id="component" class="container-fluid py-3">
<div class="bg-white  row">
<div class="bg-white col-xxl-12 row align-items-center d-flex">
<div class="px-1 border border--bottom1 border-black col-xxl-12 row justify-content-between align-items-center">
<div class="col-xxl-4 row align-items-center d-flex">
<div class="position-relative col-2 row">
</div>
<div class="col-10 row d-flex">
<div class="col-2 d-flex">
<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
About Us
</p>
</div>
<div class="col-2 d-flex">
<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
Services
</p>
</div>
<div class="col-2 d-flex">
<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
Products
</p>
</div>
<div class="col-2 d-flex">
<div class="col-12 row justify-content-center align-items-center d-flex">
<p class="text-black fs-6 fw-normal font-family-Roboto col-7 m-0 px-3 py-2">
More
</p>
<div class="position-relative col-4">
</div>
</div>
</div>
</div>
</div>
<div class="col-xxl-2 row justify-content-center align-items-center d-flex">
<div class="px-1 py-1 border border-1 border-black col-5 justify-content-center align-items-center d-flex">
<p class="text-black fs-6 fw-normal font-family-Roboto col-6 m-0 px-3 py-2">
Learn
</p>
</div>
<div class="px-1 py-1 bg-black border border-1 border-black col-6 justify-content-center align-items-center d-flex">
<p class="text-white fs-6 fw-normal font-family-Roboto col-7 m-0 px-3 py-2">
Sign Up
</p>
</div>
</div>
</div>
<div class="col-xxl-12 row d-flex">
<div class="px-1 py-1 col-xxl-12">
<div class="col-xxl-11 row d-flex">
<div class="py-1 col-xl-3 row d-flex">
<div class="position-relative col-1">
</div>
<div class="col-11 row">
<p class="text-black fs-6 fw-semibold font-family-Roboto col-12 m-0 px-3 py-2">
Page one
</p>
<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
Placeholder text
</p>
</div>
</div>
<div class="py-1 col-xl-3 row d-flex">
<div class="position-relative col-1">
</div>
<div class="col-11 row">
<p class="text-black fs-6 fw-semibold font-family-Roboto col-12 m-0 px-3 py-2">
Page two
</p>
<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
Placeholder text
</p>
</div>
</div>
<div class="py-1 col-xl-3 row d-flex">
<div class="position-relative col-1">
</div>
<div class="col-11 row">
<p class="text-black fs-6 fw-semibold font-family-Roboto col-12 m-0 px-3 py-2">
Page three
</p>
<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
Placeholder text
</p>
</div>
</div>
<div class="py-1 col-xl-3 row d-flex">
<div class="position-relative col-1">
</div>
<div class="col-11 row">
<p class="text-black fs-6 fw-semibold font-family-Roboto col-12 m-0 px-3 py-2">
Page four
</p>
<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
Placeholder text
</p>
</div>
</div>
</div>
</div>
<div class="px-1 py-1 bg-light border border--bottom1 border-black col-xxl-12 justify-content-between">
<div class="col-xxl-3 row d-flex">
<p class="text-black fs-6 fw-normal font-family-Roboto col-9 m-0 px-3 py-2">
Looking for new opportunities?
</p>
<p class="text-black fs-6 fw-normal font-family-Roboto text-decoration-underline col-3 m-0 px-3 py-2">
Contact Us
</p>
</div>
</div>
</div>
</div>
<div class="px-1 py-1 bg-white col-xxl-12 align-items-center d-flex">
<div class="col-xxl-11 row">
<div class="col-xl-6 row justify-content-between">
<div class="col-12 row d-flex">
<div class="col-3 row align-items-center">
<p class="text-center text-black fs-6 fw-normal font-family-Roboto col-7 m-0 px-3 py-2">
Introduction
</p>
<div class="position-relative col-1">
</div>
<p class="text-center text-black fs-6 fw-normal font-family-Roboto col-3 m-0 px-3 py-2">
Case
</p>
</div>
<div class="col-12 row d-flex">
<p class="text-black fs-1 fw-bold font-family-Roboto col-12 m-0 px-3 py-2">
Exploring the Impact of Blogging on Business Growth
</p>
<div class="col-7 row d-flex">
<div class="col-3 row">
	<p class="text-black fs-6 fw-normal font-family-Roboto col-2 m-0 px-3 py-2">
	By
	</p>
	<p class="text-black fs-6 fw-semibold font-family-Roboto col-9 m-0 px-3 py-2">
	John Doe
	</p>
</div>
<div class="col-12 row align-items-center">
	<p class="text-black fs-6 fw-normal font-family-Roboto col-5 m-0 px-3 py-2">
	Posted on: 11 Jan 2022
	</p>
	<p class="text-black fs-6 fw-normal font-family-Roboto col-0 m-0 px-3 py-2">
	•
	</p>
	<p class="text-black fs-6 fw-normal font-family-Roboto col-6 m-0 px-3 py-2">
	Estimated Reading Time: 5 min
	</p>
</div>
</div>
</div>
</div>
<div class="col-3 row d-flex">
<p class="text-black fs-6 fw-semibold font-family-Roboto col-10 m-0 px-3 py-2">
Share this post
</p>
<div class="col-12 row">
<div class="p-1 bg-light rounded-5 col-3 justify-content-center align-items-center">
<div class="position-relative col-9">
</div>
</div>
<div class="p-1 bg-light rounded-5 col-3 justify-content-center align-items-center">
<div class="position-relative col-9">
</div>
</div>
<div class="p-1 bg-light rounded-5 col-3 justify-content-center align-items-center">
<div class="position-relative col-9">
</div>
</div>
<div class="p-1 bg-light rounded-5 col-3 justify-content-center align-items-center">
<div class="position-relative col-9">
</div>
</div>
</div>
</div>
</div>
<img class="col-xl-6" src="https://via.placeholder.com/616x395">
</div>
</div>
<div class="px-1 py-1 bg-white col-xxl-12 align-items-center d-flex">
<div class="col-xxl-6 row d-flex">
<div class="col-12 row d-flex">
<div class="col-12 row d-flex">
<div class="py-1 col-12 d-flex">
<p class="text-black fs-2 fw-bold font-family-Roboto col-12 m-0 px-3 py-2">
Introduction
</p>
</div>
<div class="pb-1 col-12 d-flex">
<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
Mi tincidunt elit, id quisque ligula ac diam, amet. Vel etiam suspendisse morbi eleifend faucibus eget vestibulum felis. Dictum quis montes, sit sit. Tellus aliquam enim urna, etiam. Mauris posuere vulputate arcu amet, vitae nisi, tellus tincidunt. At feugiat sapien varius id.
</p>
</div>
<div class="pb-1 col-12 d-flex">
<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
Eget quis mi enim, leo lacinia pharetra, semper. Eget in volutpat mollis at volutpat lectus velit, sed auctor. Porttitor fames arcu quis fusce augue enim. Quis at habitant diam at. Suscipit tristique risus, at donec. In turpis vel et quam imperdiet. Ipsum molestie aliquet sodales id est ac volutpat.
</p>
</div>
<div class="py-1 col-12 row d-flex">
<img class="col-12" src="https://via.placeholder.com/768x400">
	<div class="col-12 row">
		<div class="bg-black col-0">
		</div>
		<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
		Image caption goes here
		</p>
	</div>
</div>
<div class="py-1 col-12 d-flex">
	<p class="text-black fs-6 fw-bold font-family-Roboto col-12 m-0 px-3 py-2">
	Dolor enim eu tortor urna sed duis nulla. Aliquam vestibulum, nulla odio nisl vitae. In aliquet pellentesque aenean hac vestibulum turpis mi bibendum diam. Tempor integer aliquam in vitae malesuada fringilla.
	</p>
</div>
<div class="pb-1 col-12 d-flex">
	<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
	Elit nisi in eleifend sed nisi. Pulvinar at orci, proin imperdiet commodo consectetur convallis risus. Sed condimentum enim dignissim adipiscing faucibus consequat, urna. Viverra purus et erat auctor aliquam. Risus, volutpat vulputate posuere purus sit congue convallis aliquet. Arcu id augue ut feugiat donec porttitor neque. Mauris, neque ultricies eu vestibulum, bibendum quam lorem id. Dolor lacus, eget nunc lectus in tellus, pharetra, porttitor.
	</p>
</div>
<div class="py-1 col-12">
	<div class="pe-1 bg-white bg-opacity-10 col-12 row d-flex">
		<div class="bg-black col-0">
		</div>
		<p class="text-black fs-6 fw-normal font-family-Inter col-11 m-0 px-3 py-2">
		"Ipsum sit mattis nulla quam nulla. Gravida id gravida ac enim mauris id. Non pellentesque congue eget consectetur turpis. Sapien, dictum molestie sem tempor. Diam elit, orci, tincidunt aenean tempus."
		</p>
	</div>
</div>
<div class="pb-1 col-12 d-flex">
	<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
	Tristique odio senectus nam posuere ornare leo metus, ultricies. Blandit duis ultricies vulputate morbi feugiat cras placerat elit. Aliquam tellus lorem sed ac. Montes, sed mattis pellentesque suscipit accumsan. Cursus viverra aenean magna risus elementum faucibus molestie pellentesque. Arcu ultricies sed mauris vestibulum.
	</p>
</div>
<div class="py-1 col-12 d-flex">
	<p class="text-black fs-3 fw-bold font-family-Roboto col-12 m-0 px-3 py-2">
	Conclusion
	</p>
</div>
<div class="pb-1 col-12 d-flex">
	<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
	Morbi sed imperdiet in ipsum, adipiscing elit dui lectus. Tellus id scelerisque est ultricies ultricies. Duis est sit sed leo nisl, blandit elit sagittis. Quisque tristique consequat quam sed. Nisl at scelerisque amet nulla purus habitasse.
	</p>
</div>
<div class="pb-1 col-12 d-flex">
	<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
	Nunc sed faucibus bibendum feugiat sed interdum. Ipsum egestas condimentum mi massa. In tincidunt pharetra consectetur sed duis facilisis metus. Etiam egestas in nec sed et. Quis lobortis at sit dictum eget nibh tortor commodo cursus.
	</p>
</div>
<div class="col-12 d-flex">
	<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
	Odio felis sagittis, morbi feugiat tortor vitae feugiat fusce aliquet. Nam elementum urna nisi aliquet erat dolor enim. Ornare id morbi eget ipsum. Aliquam senectus neque ut id eget consectetur dictum. Donec posuere pharetra odio consequat scelerisque et, nunc tortor.Nulla adipiscing erat a erat. Condimentum lorem posuere gravida enim posuere cursus diam.
	</p>
</div>
</div>
<div class="col-12 row justify-content-between align-items-end">
<div class="col-2 row">
	<p class="text-black fs-6 fw-semibold font-family-Roboto col-12 m-0 px-3 py-2">
	Share this post
	</p>
	<div class="col-12 row">
		<div class="p-1 bg-light rounded-5 col-3 justify-content-center align-items-center">
			<div class="position-relative col-9">
			</div>
		</div>
		<div class="p-1 bg-light rounded-5 col-3 justify-content-center align-items-center">
			<div class="position-relative col-9">
			</div>
		</div>
		<div class="p-1 bg-light rounded-5 col-3 justify-content-center align-items-center">
			<div class="position-relative col-9">
			</div>
		</div>
		<div class="p-1 bg-light rounded-5 col-3 justify-content-center align-items-center">
			<div class="position-relative col-9">
			</div>
		</div>
	</div>
</div>
<div class="col-7 row d-flex">
	<div class="px-1 py-1 bg-light col-2 d-flex">
		<p class="text-black fs-6 fw-semibold font-family-Roboto col-10 m-0 px-3 py-2">
		Web Design
		</p>
	</div>
	<div class="px-1 py-1 bg-light col-3 d-flex">
		<p class="text-black fs-6 fw-semibold font-family-Roboto col-10 m-0 px-3 py-2">
		User Experience
		</p>
	</div>
	<div class="px-1 py-1 bg-light col-4 d-flex">
		<p class="text-black fs-6 fw-semibold font-family-Roboto col-11 m-0 px-3 py-2">
		Responsive Design
		</p>
	</div>
	<div class="px-1 py-1 bg-light col-2 d-flex">
		<p class="text-black fs-6 fw-semibold font-family-Roboto col-10 m-0 px-3 py-2">
		Case Study
		</p>
	</div>
</div>
</div>
</div>
<div class="bg-black col-12">
</div>
<div class="col-4 row align-items-center">
<img class="rounded-circle col-2" src="https://via.placeholder.com/56x56">
<div class="col-9 row">
	<p class="text-black fs-6 fw-semibold font-family-Roboto col-4 m-0 px-3 py-2">
	John Doe
	</p>
	<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
	Web Designer, XYZ Company
	</p>
</div>
</div>
</div>
</div>
<div class="px-1 py-1 bg-white col-xxl-12 d-flex">
<div class="col-xxl-11 row align-items-center">
<div class="col-xl-6 row">
<div class="col-12 row d-flex">
	<p class="text-center text-black fs-6 fw-semibold font-family-Roboto col-1 m-0 px-3 py-2">
	Challenge
	</p>
	<div class="col-12 row d-flex">
		<p class="text-black fs-1 fw-bold font-family-Roboto col-12 m-0 px-3 py-2">
		Overcoming the Project Challenges
		</p>
		<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed faucibus, nisl non hendrerit fringilla, odio justo fringilla est, vitae tincidunt velit lorem id purus.
		</p>
	</div>
</div>
<div class="pt-1 col-5 row align-items-center">
	<div class="px-1 py-1 border border-1 border-black col-6 justify-content-center align-items-center d-flex">
		<p class="text-black fs-6 fw-normal font-family-Roboto col-8 m-0 px-3 py-2">
		Learn More
		</p>
	</div>
	<div class="col-4 row justify-content-center align-items-center d-flex">
		<p class="text-black fs-6 fw-normal font-family-Roboto col-8 m-0 px-3 py-2">
		Sign Up
		</p>
		<div class="position-relative col-3">
		</div>
	</div>
</div>
</div>
<img class="col-xl-6" src="https://via.placeholder.com/616x640">
</div>
</div>
<div class="px-1 py-1 bg-white col-xxl-12 d-flex">
<div class="col-xxl-11 row align-items-center">
<div class="col-xl-6 row">
	<div class="col-12 row d-flex">
		<p class="text-black fs-2 fw-bold font-family-Roboto col-12 m-0 px-3 py-2">
		Implementing Innovative Solutions to Overcome Challenges
		</p>
		<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
		Our team devised and executed a comprehensive strategy to address the project's unique challenges. By leveraging cutting-edge technology and industry best practices, we were able to achieve outstanding results.
		</p>
	</div>
	<div class="py-1 col-12 row d-flex">
		<div class="col-12 row align-items-center">
			<div class="position-relative col-0">
			</div>
			<p class="text-black fs-6 fw-normal font-family-Roboto col-11 m-0 px-3 py-2">
			Streamlined Workflow
			</p>
		</div>
		<div class="col-12 row align-items-center">
			<div class="position-relative col-0">
			</div>
			<p class="text-black fs-6 fw-normal font-family-Roboto col-11 m-0 px-3 py-2">
			Enhanced Collaboration
			</p>
		</div>
		<div class="col-12 row align-items-center">
			<div class="position-relative col-0">
			</div>
			<p class="text-black fs-6 fw-normal font-family-Roboto col-11 m-0 px-3 py-2">
			Optimized Performance
			</p>
		</div>
	</div>
</div>
<img class="col-xl-6" src="https://via.placeholder.com/616x640">
</div>
</div>
<div class="px-1 py-1 bg-white col-xxl-12 d-flex">
<div class="col-xxl-11 row align-items-center">
	<div class="col-xl-6 row">
		<div class="col-12 row d-flex">
			<div class="col-12 row d-flex">
				<p class="text-center text-black fs-6 fw-semibold font-family-Roboto col-1 m-0 px-3 py-2">
				Innovative
				</p>
				<div class="col-12 row d-flex">
					<p class="text-black fs-1 fw-bold font-family-Roboto col-12 m-0 px-3 py-2">
					Transforming Businesses with Cutting-Edge Solutions
					</p>
					<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
					Our implemented solutions have delivered exceptional results and made a significant impact on businesses.
					</p>
				</div>
			</div>
			<div class="py-1 col-12 row">
				<div class="col-6 row">
					<p class="text-black fs-6 fw-bold font-family-Roboto col-12 m-0 px-3 py-2">
					Results
					</p>
					<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
					Our solutions have helped businesses achieve unprecedented growth and success.
					</p>
				</div>
				<div class="col-6 row">
					<p class="text-black fs-6 fw-bold font-family-Roboto col-12 m-0 px-3 py-2">
					Impact
					</p>
					<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
					Our solutions have revolutionized industries and transformed the way businesses operate.
					</p>
				</div>
			</div>
		</div>
		<div class="pt-1 col-5 row align-items-center">
			<div class="px-1 py-1 border border-1 border-black col-6 justify-content-center align-items-center d-flex">
				<p class="text-black fs-6 fw-normal font-family-Roboto col-8 m-0 px-3 py-2">
				Learn More
				</p>
			</div>
			<div class="col-4 row justify-content-center align-items-center d-flex">
				<p class="text-black fs-6 fw-normal font-family-Roboto col-8 m-0 px-3 py-2">
				Sign Up
				</p>
				<div class="position-relative col-3">
				</div>
			</div>
		</div>
	</div>
	<img class="col-xl-6" src="https://via.placeholder.com/616x640">
	</div>
</div>
<div class="px-1 py-1 bg-white col-xxl-12 align-items-center d-flex">
	<div class="col-xxl-6 row align-items-center d-flex">
		<div class="position-relative col-2 row">
		</div>
		<p class="text-center text-black fs-5 fw-bold font-family-Roboto col-12 m-0 px-3 py-2">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
		</p>
		<div class="col-5 row align-items-center d-flex">
			<img class="rounded-circle col-2" src="https://via.placeholder.com/56x56">
				<div class="col-12 row d-flex">
					<p class="text-center text-black fs-6 fw-semibold font-family-Roboto col-12 m-0 px-3 py-2">
					John Doe
					</p>
					<p class="text-center text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
					CEO, Company XYZ
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="px-1 py-1 bg-white col-xxl-12 align-items-center d-flex">
		<div class="col-xxl-6 row align-items-center d-flex">
			<div class="col-12 row align-items-center d-flex">
				<p class="text-center text-black fs-1 fw-bold font-family-Roboto col-12 m-0 px-3 py-2">
				FAQs
				</p>
				<p class="text-center text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
				Find answers to common questions about the case study.
				</p>
			</div>
			<div class="col-12 row d-flex">
				<div class="col-12 row d-flex">
					<p class="text-black fs-6 fw-bold font-family-Roboto col-12 m-0 px-3 py-2">
					What is the case study about?
					</p>
					<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
					The case study focuses on the project scope, wireframes, sitemap, how it was built, and the testing process.
					</p>
				</div>
				<div class="col-12 row d-flex">
					<p class="text-black fs-6 fw-bold font-family-Roboto col-12 m-0 px-3 py-2">
					Why is this case study important?
					</p>
					<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
					This case study provides insights into the project's development and showcases the expertise of the team.
					</p>
				</div>
				<div class="col-12 row d-flex">
					<p class="text-black fs-6 fw-bold font-family-Roboto col-12 m-0 px-3 py-2">
					How can I benefit from this case study?
					</p>
					<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
					By studying this case, you can learn about effective project management, UX design, and testing strategies.
					</p>
				</div>
				<div class="col-12 row d-flex">
					<p class="text-black fs-6 fw-bold font-family-Roboto col-12 m-0 px-3 py-2">
					Where can I find more case studies?
					</p>
					<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
					Visit our case studies page to explore more successful projects.
					</p>
				</div>
				<div class="col-12 row d-flex">
					<p class="text-black fs-6 fw-bold font-family-Roboto col-12 m-0 px-3 py-2">
					Can I contact you for more information?
					</p>
					<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
					Yes, please reach out to our team for any further questions or inquiries.
					</p>
				</div>
			</div>
			<div class="col-9 row align-items-center d-flex">
				<div class="col-12 row align-items-center d-flex">
					<p class="text-center text-black fs-3 fw-bold font-family-Roboto col-12 m-0 px-3 py-2">
					Still have questions?
					</p>
					<p class="text-center text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
					Contact us for more information or assistance.
					</p>
				</div>
				<div class="px-1 py-1 border border-1 border-black col-2 justify-content-center align-items-center">
					<p class="text-black fs-6 fw-normal font-family-Roboto col-6 m-0 px-3 py-2">
					Button
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="px-1 py-1 bg-white col-xxl-12 d-flex">
		<div class="col-xxl-11 row">
			<p class="text-black fs-1 fw-bold font-family-Roboto col-xl-6 m-0 px-3 py-2">
			Get in touch with us
			</p>
			<div class="col-xl-6 row">
				<p class="text-black fs-6 fw-normal font-family-Roboto col-12 m-0 px-3 py-2">
				If you have any questions or need assistance, feel free to reach out to us. Our team is here to help!
				</p>
				<div class="pt-1 col-5 row">
					<div class="px-1 py-1 bg-black border border-1 border-black col-5 justify-content-center align-items-center d-flex">
						<p class="text-white fs-6 fw-normal font-family-Roboto col-6 m-0 px-3 py-2">
						Contact
						</p>
					</div>
					<div class="px-1 py-1 border border-1 border-black col-6 justify-content-center align-items-center d-flex">
						<p class="text-black fs-6 fw-normal font-family-Roboto col-8 m-0 px-3 py-2">
						Learn More
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="px-1 py-1 bg-white col-xxl-12 row align-items-center d-flex">
		<div class="col-xxl-11 row">
			<div class="col-xl-8 row">
				<div class="position-relative col-md-1 row">
				</div>
				<div class="col-md-12 row d-flex">
					<div class="col-md-12 row d-flex">
						<p class="text-black fs-6 fw-semibold font-family-Roboto col-md-12 m-0 px-3 py-2">
						Address:
						</p>
						<p class="text-black fs-6 fw-normal font-family-Roboto col-md-12 m-0 px-3 py-2">
						Level 1, 12 Sample St, Sydney NSW 2000
						</p>
					</div>
					<div class="col-md-12 row d-flex">
						<p class="text-black fs-6 fw-semibold font-family-Roboto col-md-12 m-0 px-3 py-2">
						Contact:
						</p>
						<div class="col-md-12 row d-flex">
							<p class="text-black fs-6 fw-normal font-family-Roboto text-decoration-underline col-md-12 m-0 px-3 py-2">
							1800 123 4567
							</p>
							<p class="text-black fs-6 fw-normal font-family-Roboto text-decoration-underline col-md-12 m-0 px-3 py-2">
							info@relume.io
							</p>
						</div>
					</div>
					<div class="col-md-2 row">
						<div class="position-relative col-2">
						</div>
						<div class="position-relative col-2">
						</div>
						<div class="position-relative col-2">
						</div>
						<div class="position-relative col-2">
						</div>
						<div class="position-relative col-2">
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 row d-flex">
				<div class="col-6 row">
					<p class="text-black fs-6 fw-semibold font-family-Roboto col-12 m-0 px-3 py-2">
					Link One
					</p>
					<p class="text-black fs-6 fw-semibold font-family-Roboto col-12 m-0 px-3 py-2">
					Link Two
					</p>
					<p class="text-black fs-6 fw-semibold font-family-Roboto col-12 m-0 px-3 py-2">
					Link Three
					</p>
					<p class="text-black fs-6 fw-semibold font-family-Roboto col-12 m-0 px-3 py-2">
					Link Four
					</p>
					<p class="text-black fs-6 fw-semibold font-family-Roboto col-12 m-0 px-3 py-2">
					Link Five
					</p>
				</div>
				<div class="col-6 row">
					<p class="text-black fs-6 fw-semibold font-family-Roboto col-12 m-0 px-3 py-2">
					Link Six
					</p>
					<p class="text-black fs-6 fw-semibold font-family-Roboto col-12 m-0 px-3 py-2">
					Link Seven
					</p>
					<p class="text-black fs-6 fw-semibold font-family-Roboto col-12 m-0 px-3 py-2">
					Link Eight
					</p>
					<p class="text-black fs-6 fw-semibold font-family-Roboto col-12 m-0 px-3 py-2">
					Link Nine
					</p>
					<p class="text-black fs-6 fw-semibold font-family-Roboto col-12 m-0 px-3 py-2">
					Link Ten
					</p>
				</div>
			</div>
		</div>
		<div class="col-xxl-11 row d-flex">
			<div class="bg-black col-xl-12">
			</div>
			<div class="col-xl-12 row justify-content-between">
				<p class="text-black fs-6 fw-normal font-family-Roboto col-xl-2 m-0 px-3 py-2">
				© 2023 Relume. All rights reserved.
				</p>
				<div class="col-xl-3 row d-flex">
					<p class="text-black fs-6 fw-normal font-family-Roboto text-decoration-underline col-3 m-0 px-3 py-2">
					Privacy Policy
					</p>
					<p class="text-black fs-6 fw-normal font-family-Roboto text-decoration-underline col-4 m-0 px-3 py-2">
					Terms of Service
					</p>
					<p class="text-black fs-6 fw-normal font-family-Roboto text-decoration-underline col-4 m-0 px-3 py-2">
					Cookies Settings
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

	<p>hello world</p>
	<?php
get_footer();?>

</body>


