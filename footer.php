

	<footer id="colophon" class="clear" role="contentinfo">	
		<div class="container">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Area") ) : ?>
				
			<?php endif; ?>
				
			<nav id="footer-navigation" role="navigation">
				<?php
				if(has_nav_menu('footer_navigation')): 
					wp_nav_menu(array('theme_location' => 'footer_navigation', 'container' => '', 'menu_id' => '')); 
				endif; ?>
			</nav>
			
			<p class="credit"><a href="/sitemap" class="sitemap-link">Sitemap</a></p>
		</div>
	</footer> <!--/#footer-->
	
</div> <!--/#page-wrapper -->

<?php wp_footer(); ?>
<?php mobile_navigation(); ?>
</body>
</html>