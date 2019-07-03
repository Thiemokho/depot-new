<?php
/**
 * The template for displaying search forms in metro-creativex
 *
 * @package metro-creativex
 */
?>
<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" class="searchtext" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'metro-creativex' ); ?>">
	<input type="submit" class="searchbutton" value=" ">
</form>
