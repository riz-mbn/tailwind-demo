<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My_Biz_Niche
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header>

	<?php mbn_post_thumbnail(); ?>

	<div>
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div>' . esc_html__( 'Pages:', 'mybizniche' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>

	<?php if ( get_edit_post_link() ) : ?>
		<footer>
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span>%s</span>', 'mybizniche' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span>',
				'</span>'
			);
			?>
		</footer>
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
