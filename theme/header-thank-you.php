<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Biz_Niche
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MMTF9WS');</script>
	<!-- End Google Tag Manager -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MMTF9WS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php wp_body_open(); ?>
<div id="page" class="scroller h-screen">

	<header id="lander-header" class="lg:fixed lg:inset-x-0 lg:z-40">
		<div class="flex items-center justify-between my-3 lg:my-0 lg:py-5 px-[30px] sm:px-8 lg:px-5 xl:px-10 bg-white">
			<div id="logo" class="md:mr-auto w-[73px] sm:w-max">
				<?php
				if ( is_front_page() && is_home() ) :
					?>
					<h1><?php the_custom_logo(); ?></h1>
					<?php
				else :
					?>
					<p><?php the_custom_logo(); ?></p>
					<?php
				endif;
				?>
			</div><!-- #logo -->

			<div class="md:mr-20">
				<a href="tel:480-977-6444" class="flex items-center">
					<svg class="h-[12px] w-[12px] text-primary" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M2.4132 5.1936C3.37959 7.08325 4.91675 8.62041 6.8064 9.5868L8.2728 8.1204C8.35979 8.03279 8.4696 7.97133 8.58977 7.94301C8.70994 7.91469 8.83565 7.92065 8.9526 7.9602C9.72076 8.21253 10.5243 8.34074 11.3328 8.34C11.5096 8.34032 11.679 8.41063 11.804 8.53556C11.9291 8.66048 11.9995 8.82985 12 9.0066V11.3334C11.9995 11.51 11.9291 11.6793 11.8042 11.8042C11.6793 11.9291 11.51 11.9995 11.3334 12C9.84503 12.0002 8.37121 11.7071 6.99611 11.1376C5.62101 10.5681 4.37156 9.73331 3.31912 8.68088C2.26669 7.62844 1.43188 6.37899 0.862383 5.00389C0.292882 3.62879 -0.000157552 2.15497 6.35484e-08 0.6666C0.000475137 0.489953 0.0708587 0.320676 0.195768 0.195768C0.320677 0.0708586 0.489953 0.000475074 0.6666 0H3C3.17665 0.000475074 3.34592 0.0708586 3.47083 0.195768C3.59574 0.320676 3.66613 0.489953 3.6666 0.6666C3.66533 1.47519 3.79356 2.27876 4.0464 3.0468C4.08408 3.16446 4.08844 3.29026 4.059 3.41026C4.02956 3.53025 3.96746 3.63974 3.8796 3.7266L2.4132 5.1936Z" fill="currentColor"/>
					</svg><span class="ml-2 font-bold text-xs md:text-base lg:text-lg">480-977-6444</span>
				</a>
			</div> <!-- Click To Call Phone -->

			<nav id="site-navigation" class="pl-2 pb-0.5 border-b-2 border-primary font-bold text-xs md:text-base lg:text-lg uppercase">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'lander-primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div>

	</header><!-- #masthead -->
