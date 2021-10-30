<?php
/**
 * Template Name: Sample
 *
 * Template Post Type: page
 *
 * This is the template that displays all lander pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My_Biz_Niche
 */

get_header();
?>

	<main id="primary">
		<section class="bggradient py-xl">
			<div class="container">
				<div class="section_title text-left mxl:text-center">
					<h2 class="font-playfair text-primary text-4xl mb-5">Services</h2>
					<div class="mb-6">
						<p class="font-montserrat text-primary text-base mb-5">We pride ourselves in providing a range of aesthetic services at ElleBe.</p>
						<p class="font-montserrat text-primary text-base">You will always feel warm and welcome while in our care.</p>
					</div>
					<a class="hidden mxl:inline-block bg-transparent hover:bg-secondary hover:text-white hover:border-secondary font-montserrat border border-primary text-primary rounded py-4 px-5 min-w-btn text-sm uppercase cursor-pointer transition-all duration-300 ease-in-out">Learn More</a>
				</div>
				<div class="services_items relative mt-14 mb-44">
					<figure class="m-0 text-center"><img class="inline-block align-middle max-w-full h-auto" src="https://www.ellebemedspa.com/wp-content/themes/mybizniche/resources/img/img_services.png" height="711" width="594" /></figure>
					<div class="services_item">
						<a class="flex absolute flex-col item botox_item cursor-pointer" href="#">
							<figure class="relative w-full"><img class="max-w-full h-auto border-0 my-0 mx-auto" src="https://www.ellebemedspa.com/wp-content/themes/mybizniche/resources/img/img_botox.png" alt="" width="172" height="173"></figure>
							<div class="service_content hidden mxl:bloc my-0 mx-auto w-fullk">
								<h3 class="font-playfair text-primary text-2xl mb-3.5">Botox/Dysport</h3>
                               	<p class="font-montserrat text-primary text-base">Botox and Dysport work to treat and prevent fine lines and wrinkles.</p>
							</div>
						</a>
						<a class="flex absolute flex-col item pdo_item cursor-pointer" href="#">
							<figure class="relative w-full"><img class="max-w-full h-auto border-0 my-0 mx-auto" src="https://www.ellebemedspa.com/wp-content/themes/mybizniche/resources/img/img_pdo.png" alt="" width="172" height="173"></figure>
							<div class="service_content hidden mxl:block my-0 mx-auto w-full">
								<h3 class="font-playfair text-primary text-2xl mb-3.5">PDO Thread Lift</h3>
                               	<p class="font-montserrat text-primary text-base">PDO threads are made of polydioxanone and are used to lift and tighten sagging skin tissue.</p>
							</div>
						</a>
						<a class="flex absolute flex-col item dermafiller_item cursor-pointer" href="#">
							<figure class="relative w-full"><img class="max-w-full h-auto border-0 my-0 mx-auto" src="https://www.ellebemedspa.com/wp-content/themes/mybizniche/resources/img/img_dermafiller.png" alt="" width="172" height="173"></figure>
							<div class="service_content hidden mxl:block my-0 mx-auto w-full">
								<h3 class="font-playfair text-primary text-2xl mb-3.5">Dermal filler</h3>
                               	<p class="font-montserrat text-primary text-base">Fillers can be hydrating and are used to improve wrinkles and folds</p>
							</div>
						</a>
						<a class="flex absolute flex-col item prf_item cursor-pointer" href="#">
							<figure class="relative w-full"><img class="max-w-full h-auto border-0 my-0 mx-auto" src="https://www.ellebemedspa.com/wp-content/themes/mybizniche/resources/img/img_prf.png" alt="" width="172" height="173"></figure>
							<div class="service_content hidden mxl:block my-0 mx-auto w-full">
								<h3 class="font-playfair text-primary text-2xl mb-3.5">PRF </h3>
                               	<p class="font-montserrat text-primary text-base">Platelet Rich Fibrin is obtained by drawing a patient’s blood and processing it in order to be used for treatment.</p>
							</div>
						</a>
						<a class="flex absolute flex-col item micro_item cursor-pointer" href="#">
							<figure class="relative w-full"><img class="max-w-full h-auto border-0 my-0 mx-auto" src="https://www.ellebemedspa.com/wp-content/themes/mybizniche/resources/img/img_microneedling.png" alt="" width="172" height="173"></figure>
							<div class="service_content hidden mxl:block my-0 mx-auto w-full hidden">
								<h3 class="font-playfair text-primary text-2xl mb-3.5">Microneedling</h3>
                               	<p class="font-montserrat text-primary text-base">Fillers can be hydrating and are used to improve wrinkles and folds.</p>
							</div>
						</a>
						<a class="flex absolute flex-col item kybella_item cursor-pointer" href="#">
							<figure class="relative w-full"><img class="max-w-full h-auto border-0 my-0 mx-auto" src="https://www.ellebemedspa.com/wp-content/themes/mybizniche/resources/img/img_kybella.png" alt="" width="172" height="173"></figure>
							<div class="service_content hidden mxl:block my-0 mx-auto w-full">
								<h3 class="font-playfair text-primary text-2xl mb-3.5">Kybella</h3>
                               	<p class="font-montserrat text-primary text-base">Kybella consists of deoxycholic acid which helps to destroy fat cells.</p>
							</div>
						</a>
					</div>
					<div class="services_item_slick block mxl:hidden px-10 px-12">
						<div class="item botox_item">
							<div class="service_content">
								<h3 class="font-playfair text-primary text-2xl mb-3.5">Botox/Dysport</h3>
                               	<p class="font-montserrat text-primary text-base">Botox and Dysport work to treat and prevent fine lines and wrinkles.</p>
							</div>
						</div>
						<div class="item pdo_item">
							<div class="service_content">
								<h3 class="font-playfair text-primary text-2xl mb-3.5">PDO Thread Lift</h3>
                               	<p class="font-montserrat text-primary text-base">PDO threads are made of polydioxanone and are used to lift and tighten sagging skin tissue.</p>
							</div>
						</div>
						<div class="item dermafiller_item">
							<div class="service_content">
								<h3 class="font-playfair text-primary text-2xl mb-3.5">Dermal filler</h3>
                               	<p class="font-montserrat text-primary text-base">Fillers can be hydrating and are used to improve wrinkles and folds</p>
							</div>
						</div>
						<div class="item prf_item">
							<div class="service_content">
								<h3 class="font-playfair text-primary text-2xl mb-3.5">PRF </h3>
                               	<p class="font-montserrat text-primary text-base">Platelet Rich Fibrin is obtained by drawing a patient’s blood and processing it in order to be used for treatment.</p>
							</div>
						</div>
						<div class="item micro_item">
							<div class="service_content">
								<h3 class="font-playfair text-primary text-2xl mb-3.5">Microneedling</h3>
                               	<p class="font-montserrat text-primary text-base">Fillers can be hydrating and are used to improve wrinkles and folds.</p>
							</div>
						</div>
						<div class="item kybella_item">
							<div class="service_content">
								<h3 class="font-playfair text-primary text-2xl mb-3.5">Kybella</h3>
                               	<p class="font-montserrat text-primary text-base">Kybella consists of deoxycholic acid which helps to destroy fat cells.</p>
							</div>
						</div>
					</div>
					<div class="block text-center block mxl:hidden">
						<a class="bg-primary text-white py-3.5 px-5 uppercase rounded-4xl" href="https://www.ellebemedspa.com/services/">Learn more</a>
					</div>
				</div>
			</div>
		</section>
	</main><!-- #main -->

<?php
get_footer();
