<?php
/**
 * Template Name: Save the date
 *
 * The template for displaying save the date page.
 *
 * @package Jack_&_Rose
 */

get_header('no-menu'); ?>

	<div id="primary" class="content-area no-sidebar">
		<main id="main" class="site-main" role="main">
			<h1 class="align-center">Arely & Ian</h1>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; //
            //   ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer('raw'); ?>
