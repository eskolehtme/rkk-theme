<?php
/**
 * @package WordPress
 * @subpackage RKK_Theme
 */
/*
Template Name: Alam-avaleht
*/

get_header(); ?>

<?
if(icl_object_id($post->ID, 'page', true, 'et') == 25)
{
    $section = 'muuseum';
}
elseif(icl_object_id($post->ID, 'page', true, 'et') == 39)
{
    $section = 'selts';
}
else // kyla 2
{
    $section = 'kula';
}
?>


<? if ($section == 'muuseum') { ?>
        <div class="prefix_2 grid_12 suffix_2">
			<div id="slideshow" style="height: 150px;">
                <img src="<?php echo bloginfo('template_url'); ?>/images/hambad.jpeg" width="700" height="150" class="active" />
				<img src="<?php echo bloginfo('template_url'); ?>/images/kork.jpeg" width="700" height="150" />
				<img src="<?php echo bloginfo('template_url'); ?>/images/kott.jpeg" width="700" height="150" />
				<img src="<?php echo bloginfo('template_url'); ?>/images/loikaja.jpeg" width="700" height="150" />
				<img src="<?php echo bloginfo('template_url'); ?>/images/mikser.jpeg" width="700" height="150" />
				<img src="<?php echo bloginfo('template_url'); ?>/images/olilamp.jpeg" width="700" height="150" />
				<img src="<?php echo bloginfo('template_url'); ?>/images/omblusmasin.jpeg" width="700" height="150" />
				<img src="<?php echo bloginfo('template_url'); ?>/images/pesurull.jpeg" width="700" height="150" />
				<img src="<?php echo bloginfo('template_url'); ?>/images/pitskruvi.jpeg" width="700" height="150" />
				<img src="<?php echo bloginfo('template_url'); ?>/images/raadium.jpeg" width="700" height="150" />
				<img src="<?php echo bloginfo('template_url'); ?>/images/soel.jpeg" width="700" height="150" />
				<img src="<?php echo bloginfo('template_url'); ?>/images/triikraud.jpeg" width="700" height="150" />
				<img src="<?php echo bloginfo('template_url'); ?>/images/velg.jpeg" width="700" height="150" />
			</div>
        </div>
<? } ?>

<? if ($section == 'selts') { ?>
        <div class="prefix_2 grid_12 suffix_2">
			<div id="slideshow" style="height: 175px;">
                <img src="<?php echo bloginfo('template_url'); ?>/images/2003kanuutamas.jpeg" width="700" height="175" class="active" />
                <img src="<?php echo bloginfo('template_url'); ?>/images/2005seltsijoul.jpeg" width="700" height="175" />
                <img src="<?php echo bloginfo('template_url'); ?>/images/2006kulajoulupuu.jpeg" width="700" height="175" />
                <img src="<?php echo bloginfo('template_url'); ?>/images/2007Karula-copy.jpeg" width="700" height="175" />
                <img src="<?php echo bloginfo('template_url'); ?>/images/2007Kulajoulupuu.jpeg" width="700" height="175" />
                <img src="<?php echo bloginfo('template_url'); ?>/images/2008virumaa.jpeg" width="700" height="175" />
                <img src="<?php echo bloginfo('template_url'); ?>/images/2010piirisaare.jpeg" width="700" height="175" />
                <img src="<?php echo bloginfo('template_url'); ?>/images/kihnuriba.jpeg" width="700" height="175" />
                <img src="<?php echo bloginfo('template_url'); ?>/images/seltsiriba1.jpeg" width="700" height="175" />
                <img src="<?php echo bloginfo('template_url'); ?>/images/seltsiriba2.jpeg" width="700" height="175" />
			</div>
        </div>
<? } ?>
		<div class="clear" style="height:20px">&nbsp;</div>


        <div class="prefix_2 grid_12 suffix_2 intro">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    			<?php the_content(); ?>
    			<?php edit_post_link('Muuda', '<span class="edit-link">', '</span>' ); ?>
    		<?php endwhile; endif; ?>
        </div>

			<?php
			$lastposts = get_posts('numberposts=10&category_name='.$section);
			if(count($lastposts) > 0)
			{ ?>
        <div class="prefix_2 grid_12 suffix_2">
        	<h2><? _e('Uudised'); ?></h2>
            <ul id="news_nav">
			 <?
			 foreach($lastposts as $post) :
			 ?>
             	<li onclick="window.location = '<?php the_permalink(); ?>';"><span><?=get_the_time(__('d.m.y'))?></span> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			 <?php endforeach; ?>
            </ul>
        </div>
        <? } ?>
<?php get_footer(); ?>