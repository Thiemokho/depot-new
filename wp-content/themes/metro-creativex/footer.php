		<div class="left-sidebar sidebar-mobile">
			<?php get_sidebar( 'mobile' ); ?>
		</div>

		<div class="clearfix"></div>
		<footer>
			<span class="alignleft">&copy; <?php echo date( 'Y' ) ?> <a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a><span> &mdash; <?php printf( __( 'Powered by <a href="%s">WordPress</a>', 'metro-creativex' ), 'http://www.wordpress.org' ); ?></span></span><br\>
			<span class="alignright"><?php printf( __( 'Theme by <a rel="nofollow" target="_blank" href="%s">ThemeIsle</a>', 'metro-creativex' ), 'https://themeisle.com/themes/metrox/' ); ?> </span>
			
			</footer>
	<?php wp_footer(); ?>
	</body>
</html>
