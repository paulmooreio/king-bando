<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div data-sticky-container>
	<div class="top-bar" id="top-bar-menu" data-sticky data-options="marginTop: 3; stickyOn:small;" style="width:100%" ">
		<div class="top-bar-left">
			<ul class="menu">
				<li><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
			</ul>
		</div>
		<div class="top-bar-right show-for-large">
			<?php joints_top_nav(); ?>
		</div>
		<div class="top-bar-right show-for-medium-only">
			<ul class="menu">
				<li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
			</ul>
		</div>	
		<div class="top-bar-right show-for-small-only">
			<ul class="menu">
				<li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
			</ul>
		</div>
	</div>
</div>
