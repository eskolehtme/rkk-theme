<?php
/**
 *
 *
 * @package WordPress
 * @subpackage RKK_Theme
 */

get_header();
?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="grid_12">
			<h2><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h2>
		</div>
		<div class="grid_2"><?php previous_image_link() ?>&nbsp;</div>
		<div class="grid_8"><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'large' ); ?></a>
			<p><?php if ( !empty($post->post_excerpt) ) the_excerpt(); // this is the "caption" ?></p></div>
		
		<div class="grid_2" style="text-align:right;"><?php next_image_link() ?>&nbsp;</div>
	<?php endwhile; endif; ?>

<div class="clear" style="height:10px;">&nbsp;</div>

<?php get_footer(); ?>
