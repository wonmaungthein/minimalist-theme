<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Glasgow Bike Store logo" />
	<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'minimalist-theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'minimalist-theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'minimalist-theme' ), 'minimalist-theme', '<a href="https://carmemias.com">carmemias</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
