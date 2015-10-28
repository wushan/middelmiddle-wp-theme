			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		
		<?php wp_footer(); ?>
		<script src="http://127.0.0.1:35729/livereload.js?snipver=1"></script>
		</div> <!-- SlideBar End -->
		<!-- slidebar Left -->
		<div class="sb-slidebar sb-left">
    	<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
				<?php wp_nav_menu(array(
					         'container' => false,                           // remove nav container
					         'container_class' => 'menu',                 // class of container (should you choose to use it)
					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
					         'menu_class' => 'nav slide-nav',               // adding custom nav class
					         'theme_location' => 'main-nav',                 // where it's located in the theme
					         'before' => '',                                 // before the menu
    			               'after' => '',                                  // after the menu
    			               'link_before' => '',                            // before each link
    			               'link_after' => '',                             // after each link
    			               'depth' => 0,                                   // limit the depth of the nav
					         'fallback_cb' => ''                             // fallback function (if there is one)
				)); ?>

			</nav>
    </div>
	</body>

</html> <!-- end of site. what a ride! -->
