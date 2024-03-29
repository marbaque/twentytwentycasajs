<?php

/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php

	if (!is_search()) {
		get_template_part('template-parts/featured-image');
	}

	?>
	<header class="entry-header has-text-align-center<?php echo esc_attr($entry_header_classes); ?>">

		<div class="entry-header-inner section-inner medium">

			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>

		</div><!-- .entry-header-inner -->

	</header><!-- .entry-header -->

	<?php

	if (is_singular('evento')) {
	?>

	<?php

	}
	?>
	<div class="post-inner evento-inner">

		<div class="evento-aside">
			<?php get_template_part('template-parts/evento-aside'); ?>
		</div>

		<div class="evento-content">

			<?php
			if (is_search() || !is_singular()) {

				if (get_field('resumen')) {
					the_field('resumen');
				} else {
					the_excerpt();
				}

				echo '<div class="wp-block-button is-style-outline"><a href="' . esc_url(get_permalink()) . '" class="wp-block-button__link">Ver más</a></div>';
			} else {
				the_content(__('Continue reading', 'twentytwenty'));
			}
			?>



		</div><!-- .entry-content -->

	</div><!-- .post-inner -->

	<div class="section-inner">
		<?php
		wp_link_pages(
			array(
				'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__('Page', 'twentytwenty') . '"><span class="label">' . __('Pages:', 'twentytwenty') . '</span>',
				'after'       => '</nav>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);

		edit_post_link();

		// Single bottom post meta.
		//twentytwenty_the_post_meta( get_the_ID(), 'single-bottom' );
		?>

	</div><!-- .section-inner -->

	<?php

	if (is_single()) {

		get_template_part('template-parts/navigation');
	}

	/*
	 * Output comments wrapper if it's a post, or if comments are open,
	 * or if there's a comment number – and check for password.
	 */
	if ((is_single() || is_page()) && (comments_open() || get_comments_number()) && !post_password_required()) {
	?>

		<div class="comments-wrapper section-inner">

			<?php comments_template(); ?>

		</div><!-- .comments-wrapper -->

	<?php
	}
	?>

</article><!-- .post -->