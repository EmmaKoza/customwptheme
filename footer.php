<footer>
  <div class="footer-container clearfix"> 

  	<div class="contact-container">
  		<?php  dynamic_sidebar( 'primary-widget-area' ); ?>
	</div>

	 <div class="contact-information">
	 	<div class="footer-logo-container">
      	<?php $logoImage = get_field('logo'); ?>
     	 <img src="<?php echo $logoImage ?>" alt="" class="logoImage">

    	</div>
	</div>	
	


  </div>
  <div class="page-bottom">
    	<p class="copy">&copy; Vonnegut Custom WP Theme <?php echo date('Y'); ?></p>
	</div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>