		<div class="clear">&nbsp;</div>
		<div class="grid_16">
		    <hr>
		</div>
		<div class="clear">&nbsp;</div>
		<div id="footer">
	        <div class="grid_3">
	            <h3><?=get_the_title(2)?></h3>
	
	            <ul class="sitemap">
				<?
				$output = wp_list_pages('echo=0&child_of=2&title_li=&depth=1');
				echo $output;
				?>
	            </ul>
	        </div>
	
	        <div class="grid_3">
	            <h3><?=get_the_title(25)?></h3>
	
	            <ul class="sitemap">
				<?
				$output = wp_list_pages('echo=0&child_of=25&title_li=&depth=1');
				echo $output;
				?>
	            </ul>
	        </div>
	
	        <div class="grid_3">
	            <h3><?=get_the_title(39)?></h3>
	
	            <ul class="sitemap">
				<?
				$output = wp_list_pages('echo=0&child_of=39&title_li=&depth=1');
				echo $output;
				?>
	            </ul>
	        </div>
	
	        <div class="grid_3">
	            <h3><?=get_the_title(5)?></h3>
	
	            <p>Kallavere küla<br>
	            Jõelähtme vald, Harjumaa</p>
	
	            <p>
	            <a href="http://maps.google.com/maps?f=d&source=s_d&saddr=Unknown+road&daddr=&hl=en&geocode=FeS9iwMdnuh9AQ&mra=ls&sll=59.489356,25.029945&sspn=0.008214,0.024869&ie=UTF8&t=h&z=16" target="_blank">
	            <img src="<?php echo bloginfo('template_url'); ?>/images/staticmap.gif" alt="Kaart" width="160" height="140" class="bordered_image"></a></p>
	        </div>
	
	        <div class="prefix_1 grid_1">
	            <a href="http://tsoon.com/?utm_source=www&amp;utm_medium=footer%2Blogo&amp;utm_campaign=rkk.ee" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/images/tsoon_com.png" alt="tsoon_com" width="50" height="15"></a>
	        </div>
	
	        <div class="grid_2">
	            <img src="<?php echo bloginfo('template_url'); ?>/images/eas.png" alt="eas" width="100" height="30">
	        </div>
        </div>
    </div>

    <div class="clear" style="height:20px;">
        &nbsp;
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js" type="text/javascript"></script>
	<script src="<?php echo bloginfo('template_url'); ?>/javascripts/jquery.cycle.min.js" type="text/javascript"></script>
	<script src="<?php echo bloginfo('template_url'); ?>/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script src="<?php echo bloginfo('template_url'); ?>/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/javascripts/public.js" type="text/javascript"></script>
</body>
</html>
