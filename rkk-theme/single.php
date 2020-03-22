<?php
/**
 * @package WordPress
 * @subpackage RKK_Theme
 */

get_header(); ?>
<?php get_sidebar(); ?>
        <div id="content" class="prefix_2 grid_9" style="min-height:300px;">
    		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    			<h1><?php the_title(); ?></h1>
    			<?php the_content('<p class="serif">&raquo;</p>'); ?>
    			<hr style="margin-bottom: 5px;">
    			<strong><?php the_author(); ?></strong> <?php echo get_the_time(__('d.m.Y')); ?>
    			<?php edit_post_link('Muuda', '<span class="edit-link">', '</span>' ); ?>
    		<?php endwhile; endif; ?>
    	</div>
    	<div class="grid_3 suffix_2">
    		<h2><? _e('Uudised'); ?></h2>

			<?
			$permalink = get_permalink($post->post_parent);
			if(strpos($permalink, 'muuseum'))
			{
			    $section = 'muuseum';
			}
			elseif(strpos($permalink, 'selts'))
			{
			    $section = 'selts';
			}
			else
			{
			    $section = 'kula';
			}
			?>


			<?php
			$lastposts = get_posts('numberposts=10&category_name='.$section);
			 foreach($lastposts as $post) :
			 ?>
			 	<p><span class="comment"><?=get_the_time(__('d.m.y'))?></span> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
			 <?php endforeach; ?>
    	</div>
<?php get_footer(); ?>