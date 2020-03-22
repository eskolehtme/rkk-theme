<?php
/**
 *
 *
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
						<div id="content" class="prefix_2 grid_9" style="min-height:300px;">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<div class="clear">&nbsp;</div>
				<?php edit_post_link('Muuda', '<span class="edit-link">', '</span>' ); ?>
			</div>

			<div class="grid_3 suffix_2">
				<?
					$permalink = get_permalink($post->post_parent);
					if
					(strpos($permalink, 'muuseum'))
					{
						$section = 'muuseum';
					}
					elseif
					(strpos($permalink, 'selts'))
					{
						$section = 'selts';
					}
					else
					{
						$section = 'kula';
					}

					$lastposts = get_posts('numberposts=10&category_name='.$section);
					if(count($lastposts) > 0)
					{
					?>
			
				<h2><?php _e('Uudised'); ?></h2>
				<?php
					foreach ($lastposts as $post) :
				?>
			 	<p><span class="comment"><?php echo get_the_time(__('d.m.y'))?></span> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
			 <?php endforeach; ?>
			</div>
			<?php }
			 ?>

		<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>
