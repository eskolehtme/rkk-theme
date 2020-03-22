<?php
/**
 * @package WordPress
 * @subpackage RKK_Theme
 */
/*
Template Name: Raamatute-avaleht
*/

get_header(); ?>
        <div class="prefix_2 grid_12 suffix_2 intro">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    			<?php the_content(); ?>
    			<?php edit_post_link('Muuda', '<span class="edit-link">', '</span>' ); ?>
    		<?php endwhile; endif; ?>
        </div>
<?php get_footer(); ?>