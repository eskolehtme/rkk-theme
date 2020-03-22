<?php
/**
 * Template Name: Uudiste ribata sisuleht
 */
get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    		<div id="content" class="prefix_2 grid_12 suffix_2">
    			<h1><?php the_title(); ?></h1>
    			<?php the_content(); ?>
    			<?php edit_post_link('Muuda', '<span class="edit-link">', '</span>' ); ?>
    		</div>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
