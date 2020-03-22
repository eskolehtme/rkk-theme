<?php
/**
 * @package WordPress
 * @subpackage RKK_Theme
 */
/*
Template Name: Avaleht
*/

get_header(); ?>
        <div class="prefix_2 grid_12 suffix_2">
			<div id="slideshow" style="height: 300px;">
				<img src="<?php echo bloginfo('template_url'); ?>/images/kevad-01.jpg" width="700" height="250">
				<img src="<?php echo bloginfo('template_url'); ?>/images/kevad-02.jpg" width="700" height="250">
				<img src="<?php echo bloginfo('template_url'); ?>/images/kevad-03.jpg" width="700" height="250">
				<img src="<?php echo bloginfo('template_url'); ?>/images/kevad-04.jpg" width="700" height="250">
				<img src="<?php echo bloginfo('template_url'); ?>/images/kevad-05.jpg" width="700" height="250">
				<img src="<?php echo bloginfo('template_url'); ?>/images/kevad-06.jpg" width="700" height="250">
				<img src="<?php echo bloginfo('template_url'); ?>/images/kevad-07.jpg" width="700" height="250">
				<img src="<?php echo bloginfo('template_url'); ?>/images/kevad-08.jpg" width="700" height="250">
				<img src="<?php echo bloginfo('template_url'); ?>/images/kevad-09.jpg" width="700" height="250">
				<img src="<?php echo bloginfo('template_url'); ?>/images/kevad-10.jpg" width="700" height="250">
				<img src="<?php echo bloginfo('template_url'); ?>/images/kevad-11.jpg" width="700" height="250">
				<img src="<?php echo bloginfo('template_url'); ?>/images/kevad-12.jpg" width="700" height="250">
				<img src="<?php echo bloginfo('template_url'); ?>/images/kevad-13.jpg" width="700" height="250">
			</div>
        </div>
		<div class="clear" style="height:20px">&nbsp;</div>
        <div class="prefix_2 grid_12 suffix_2 intro">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			    <?php the_content(); ?>
			    <?php edit_post_link('Muuda', '<span class="edit-link">', '</span>' ); ?>
			<?php endwhile; endif; ?>
        </div>

        <div class="prefix_2 grid_12 suffix_2">
        	<h2><? _e('Uudised'); ?></h2>
            <ul id="news_nav">
			<?php
			$lastposts = get_posts('numberposts=10&category_name=kula');
			 foreach($lastposts as $post) :
			 ?>
             	<li onclick="window.location = '<?php the_permalink(); ?>';"><span><?=get_the_time(__('d.m.y'))?></span> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			 <?php endforeach; ?>
            </ul>
        </div>
<?php get_footer(); ?>