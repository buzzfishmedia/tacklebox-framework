<?php
/**
 * Index
 * 
 * @package tacklebox
 */
?>

<?php get_header(); ?>

<div class="container">

    <div class="main" role="main">

        <?php if( have_posts() ) : ?>

        	<?php while( have_posts() ) : the_post(); ?>

        		<?php the_title(); ?>

        		<?php the_content(); ?>

        	<?php endwhile; ?>

        <?php endif; ?>
    </div>

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>