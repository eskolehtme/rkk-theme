<?php
/**
 * @package WordPress
 * @subpackage RKK_Theme
 */
?>
<!--
        <div class="grid_4">
            <h2><?=$calendar?></h2>
            <ul id="calendar_nav">
    		<?php
    		setlocale(LC_ALL, $locale);
			$lastposts = get_posts('numberposts=10&category=6,7');
			 foreach($lastposts as $post) :
			    setup_postdata($post);
			 ?>
                <li onclick="window.location = '<?php the_permalink(); ?>';"><span class="date"><?=strftime('%e. %h', strtotime(get_post_meta($post->ID, 'open', true)))?> - <?=strftime('%e. %h', strtotime(get_post_meta($post->ID, 'close', true)))?></span><strong><?php the_title(); ?></strong> <? the_excerpt(); ?></li>
			 <?php endforeach; ?>
            </ul>
            <hr>

            <h2><?=$news?></h2>
            <ul id="news_nav">
			<?php
			$lastposts = get_posts('numberposts=3&category=8');
			 foreach($lastposts as $post) :
			 ?>
                <li onclick="window.location = '<?php the_permalink(); ?>';"><strong><?php the_title(); ?></strong>
                <?php
					echo get_the_post_thumbnail($post->ID, 'thumbnail', array('class' => 'alignleft', 'style' => 'width:70px; height:70px;'));
				?>
                <? the_excerpt(); ?></li>
                <div class="clear"></div>
			 <?php endforeach; ?>
            </ul>
        </div>
-->
