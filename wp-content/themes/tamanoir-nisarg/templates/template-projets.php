<?php
/*
Template Name: Page Projets du Tamanoir
*/
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Nisarg
 */

get_header( 'page' ); ?>
	<div class="container" id="tm-projets-container">
		<div class="row">
			<div id="primary" class="col-md-9 content-area">
				<main id="main" class="site-main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'page' ); ?>


					<?php endwhile; // End of the loop. ?>
				
				<?php $catquery = new WP_Query( 'category_name=projets' ); ?>

					<?php while ( $catquery->have_posts() ) : $catquery->the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'page' ); ?>

						<?php
						?>

					<?php endwhile; // End of the loop. ?>

				</main><!-- #main -->
			</div><!-- #primary -->

			<?php get_sidebar( 'sidebar-1' ); ?>
		</div> <!--.row-->
	</div><!--.container-->
	<?php get_footer(); ?>
