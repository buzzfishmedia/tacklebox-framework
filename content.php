<?php
/**
 * Content
 */
?>

<article id="post-<?php echo $post->ID; ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h2 class="entry-title"><?php the_title(); ?></h2>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	<footer class="entry-meta">
		<?php get_post_meta( $post->ID ); ?>
	</footer>
</article>