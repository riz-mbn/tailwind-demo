<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Biz_Niche
 */

?>

	<footer id="lets-talk" class="relative lg:z-50 lg:pb-1 bg-white">
		<div class="container lg:flex lg:flex-row-reverse lg:items-end xl:justify-between lg:relative lg:z-50 bg-white container px-[30px] sm:px-8 lg:px-[139px] xl:px-[173px] 2xl:px-52 mb-10 lg:mb-24">
			<div id="footer-cta-form" class="lg:flex-none lg:w-[367px] xl:w-[457px] 2xl:w-[550px] mt-[85px] lg:mt-[125px] mb-11 lg:mb-0">
				<h4 class="font-prometo text-secondary"><span class="block text-xl lg:text-[1.33rem xl:text-[1.67rem] 2xl:text-[2rem] lg:leading-[1.71rem] xl:leading-[2.14rem] 2xl:leading-[2.572rem] font-bold">Want</span> <span class="block lg:mt-[-7px] text-[28px] lg:text-[2.5rem] xl:text-[3.1rem] 2xl:text-[3.75rem] leading-9 lg:leading-[2.8rem] xl:leading-[3.5rem] 2xl:leading-[4.2rem] font-bold"><span class="first-letter:text-primary inline-block">more</span> <span class="first-letter:text-primary inline-block">business</span> <span class="first-letter:text-primary inline-block">now.</span></span></h4>
				<p class="lg:mt-[6px] lg:mb-[19px] text-lg lg:text-[0.8rem] xl:text-base 2xl:text-[1.2rem] lg:leading-4 xl:leading-5 2xl:leading-6 font-light">Answer the questions below and receive a <span class="font-bold text-primary">FREE 2 Hour Session</span> with a Senior Marketing Strategist and a Customized Marketing Plan for your business.</p>
				<div class="mt-[3px]">
					<?php gravity_form( 1, false, false, false, '', true, 12 ); ?>
				</div>
			</div>
			<!-- </ footer-cta-form > -->

			<div class="lg:flex-initial xl:flex-auto">
				<div id="footer-social-and-credentials" class="lg:pr-8">
					<figure class="w-[154px] lg:w-[214px] xl:w-[269px] 2xl:w-[322px]">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/mbn-logo-outlined.svg" alt=""/>
					</figure>
					<div class="mt-7 lg:mt-[17px] md:flex md:items-center md:space-x-11 lg:space-x-4 2xl:space-x-6">
						<div class="flex space-x-4 lg:space-x-2">
							<a href="#"><figure><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/icn-linkedin.svg" alt="LinkedIn"/></figure></a>
							<a href="#"><figure><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/icn-facebook.svg" alt="Facebook"/></figure></a>
							<a href="#"><figure><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/icn-behance.svg" alt="Behance"/></figure></a>
							<a href="#"><figure><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/icn-instagram.svg" alt="Instagram"/></figure></a>
							<a href="#"><figure><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/icn-pinterest.svg" alt="Pinterest"/></figure></a>
						</div>
						<div class="mt-5 md:mt-0">
							<figure><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/trust-icn-google.svg" alt="Google Review - 5 Star Rating"/></figure>
						</div>
						<div class="mt-5 md:mt-0">
							<figure><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/trust-icn-bbb-a-plus.svg" alt="BBB - A+ Rating"/></figure>
						</div>
					</div>
				</div>
				<!-- </ footer-social-and-credentials > -->

				<div id="copyright" class="mt-8 lg:mt-[9px] mb-10 lg:mb-0 lg:pb-4 lg:pr-2 2xl:pr-20 text-sm lg:text-[0.6rem] 2xl:text-sm lg:leading-[1rem] 2xl:leading-6 font-light">
					<?php
					$year_date = gmdate( 'Y' );
					$site_url  = site_url();
					echo '&copy; ' . esc_html( $year_date ) . ' <a href="' . esc_html( $site_url ) . '">My Biz Niche</a> - A Damn Good Digital Marketing Company in Phoenix, AZ.<br />All Rights Reserved';
					?>
				</div>
				<!-- </ copyright > -->
			</div>

		</div>
	</footer><!-- #lets-talk -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
