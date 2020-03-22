<?php
/**
 * Template Name: Uudised
 */
get_header(); ?>
<?php get_sidebar(); ?>
    		<div id="content" class="prefix_2 grid_12 suffix_2">
    			<h1><?php the_title(); ?></h1>
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

			$lastposts = get_posts('category_name='.$section);
			 foreach($lastposts as $post) :
			 ?>
			 	<p><span class="comment"><?=get_the_time(__('d.m.y'))?></span> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
			 <?php endforeach; ?>
    		</div>
<?php get_footer(); ?>