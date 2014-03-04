<?php
/**
 * Page
 * 
 * @package tacklebox
 */
?>

<?php get_header(); ?>

<div class="container">
	
	<div id="content">

		<div class="container">

			<div id="primary">

				<div class="main" role="main">

					<?php if( have_posts() ) : ?>

						<?php while( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'content', get_post_format() ); ?>

							<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || '0' != get_comments_number() ) :
								comments_template();
							endif;
							?>

						<?php endwhile; ?>

					<?php endif; ?>

				</div>

			</div>

			<?php get_sidebar(); ?>

			</div>

		</div>

	</div>

</div>

<?php get_footer(); ?>