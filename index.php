<?php
/**
 * Index
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

						<?php endwhile; ?>

						<?php tacklebox_framework_paging_nav(); ?>

					<?php endif; ?>

				</div>

			</div>

			<?php get_sidebar(); ?>

			</div>

		</div>

	</div>

</div>

<?php get_footer(); ?>