<?php
if ( et_theme_builder_overrides_layout( ET_THEME_BUILDER_HEADER_LAYOUT_POST_TYPE ) || et_theme_builder_overrides_layout( ET_THEME_BUILDER_FOOTER_LAYOUT_POST_TYPE ) ) {
    // Skip rendering anything as this partial is being buffered anyway.
    // In addition, avoids get_sidebar() issues since that uses
    // locate_template() with require_once.
	return;
}
/**
 * Fires after the main content, before the footer is output.
 *
 * @since 3.10
 */
do_action( 'et_after_main_content' );
if ( 'on' === et_get_option( 'divi_back_to_top', 'false' ) ) : ?>
	<span class="et_pb_scroll_top et-pb-icon"></span>
<?php endif;
?>
<footer>
	<div class="row">
		<div class="col">
			<div class="footerlogo">
				<img src="/wp-content/uploads/2020/03/ncp_logo.png" alt="">
			</div>
		</div>
		<div class="col">
			<div class="footermenu">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'footer-menu',
					'depth'          => '1',
					'menu_class'     => 'bottom-nav',
					'container'      => '',
					'fallback_cb'    => '',
				) );
				?>
			</div>
			<div class="sociallinks">
				<i class="fab fa-twitter"></i>
				<i class="fab fa-linkedin-in"></i>
				<i class="fab fa-facebook-f"></i>
			</div>
			<div class="footermenu">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'footer-menu2',
					'depth'          => '1',
					'menu_class'     => 'bottom-nav',
					'container'      => '',
					'fallback_cb'    => '',
				) );
				?>
			</div>
		</div>
	</div>
</footer>
</div> <!-- #page-container -->
<?php wp_footer(); ?>
</body>
</html>
