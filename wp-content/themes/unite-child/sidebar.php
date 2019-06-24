<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package unite
 */
?>
<div id="secondary" class="widget-area col-sm-12 col-md-4" role="complementary">
	<?php do_action( 'before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-1' ) ?>
</div><!-- #secondary -->