<?php
/**
 * Template Name: Thank You
 *
 * Template Post Type: page
 *
 * This is the template that displays all lander pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My_Biz_Niche
 */

get_header( 'thank-you' );
?>

	<main id="primary" class="lg:pt-[119px]">
		<div class="container pt-9 lg:pt-16 px-[30px]">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'thank-you' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer( 'thank-you' );
