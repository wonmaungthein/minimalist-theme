<?php
/**
 * The  front page file for our home page 
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
		if ( have_posts() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', '' );
			endwhile;
		?>
		<h3> 28/10/2018 </h3>

<h1>
Testimonial</h1>
<p>
	I have got a paragraph. I have got a paragraph. I have got a paragraph. I have got a paragraph. <br> I have got a paragraph. I have got a paragraph. I have got a paragraph. I have got a paragraph. <br> I have got a paragraph. I have got a paragraph. I have got a paragraph. I have got a paragraph. <br> I have got a paragraph. I have got a paragraph. I have got a paragraph. I have got a paragraph. <br> I have got a paragraph. I have got a paragraph. I have got a paragraph. I have got a paragraph. <br> I have got a paragraph. I have got a paragraph. 
</p>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();