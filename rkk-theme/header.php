<?php
/**
 * @package WordPress
 * @subpackage RKK_Theme
 */
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="language" content="ee">

	<title><?php bloginfo('name'); ?> <?php wp_title('-', true, 'right'); ?></title>
	<!-- <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="http://feeds.feedburner.com/kallavere"> -->
    <link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/images/favicon.png">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/stylesheets/reset.css" type="text/css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/stylesheets/text.css" type="text/css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/stylesheets/960.css" type="text/css">
	<!-- <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/fancybox/jquery.fancybox-1.3.4.css" type="text/css"> -->
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css">

	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-20135131-1']);
	  _gaq.push(['_trackPageview']);
	  _gaq.push(['_trackPageLoadTime']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</head>

<body>
    <div class="container_16">
		<?
		// nav riba värvi vahetaja vahetaja
		$permalink = get_permalink($post->post_parent);
		if(strpos($permalink, 'muuseum'))
		{
		    $color = 'muuseum';
		}
		elseif(strpos($permalink, 'selts'))
		{
		    $color = 'selts';
		}
		else
		{
		    $color = 'kyla';
		}
		?>
        <div class="grid_16 <?=$color?>" id="header">
			<ul id="nav" class="grid_16 alpha omega">
			<?
/*
			$output = wp_list_pages('echo=0&title_li=');
			echo $output;
*/
			?>
			<?php
			$output = '';
			if (is_page( )) {
				$page = $post->ID;
				if ($post->post_parent) {
					$page = $post->post_parent;
				}
				$children=wp_list_pages( 'echo=0&depth=1&child_of=' . $page . '&title_li=' );
				if ($children) {
					$output = wp_list_pages ('echo=0&depth=1&child_of=' . $page . '&title_li=');
				}
			}
			//echo $output;
			?>
			<?php wp_list_pages('title_li=&depth=1') ?>
			</ul>
			<ul id="sub_nav">
				<?=$output?>
			</ul>

            <div class="grid_16 alpha omega">
                <div id="lang_sel_list">
                    <?php do_action('icl_language_selector'); ?>
                </div>
            </div>
        </div>

        <div class="clear" style="height:30px;">
            &nbsp;
        </div>

        <div class="prefix_6 grid_4 suffix_6 center">
        	<?
        	// logo vahetaja
        	$permalink = get_permalink($post->post_parent);
        	if(strpos($permalink, 'muuseum'))
        	{
        		$logo = 'rootsi_kallavere_kula_muuseum.png';
        	}
        	elseif(strpos($permalink, 'selts'))
        	{
        		$logo = 'rootsi_kallavere_kula_selts.png';
        	}
        	else
        	{
        		$logo = 'kallavere_kula.png';
        	}
        	?>
            <a href="<?php echo $permalink; ?>"><img src="<?php echo bloginfo('template_url'); ?>/images/<?=$logo?>" alt="<?=$logo?>" id="logo"></a>
        </div>

        <div class="clear" style="height:10px;">
            &nbsp;
        </div>