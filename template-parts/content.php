<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package built
 */

?>

<div class="col-lg-4 single-blog">
<div class="blog-post"> 
	<div class="feature-image"> 
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
	</div>
	<h4><?php the_category(', ',' ',''); ?></h4>
	<h2><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 6, false); ?></a></h2>
	<p><?php echo wp_trim_words(get_the_content(), 20, false); ?></p>
</div>
</div>