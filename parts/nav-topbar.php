<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/responsive-navigation/
 */
?>

<div data-sticky-container">
	<div class="top-bar" id="main-menu" data-sticky data-options="marginTop:0;">
		<div class="top-bar-left">
			<ul class="menu">
				<li><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
			</ul>
		</div>
		<div class="top-bar-right">
			<?php joints_top_nav(); ?>
		</div>
	</div>
</div>