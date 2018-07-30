<?php
/*
Template Name: Music Template
*/

get_header(); ?>

<div class="content">
<div class="music-full-screen">
<div id="bg">
<img src="<?php the_post_thumbnail('medium'); ?>">
</div>
	<div class="top-content-section">
		<div class="off-canvas-wrapper">

	<!-- Load off-canvas container. Feel free to remove if not using. -->
	<?php get_template_part( 'parts/content', 'offcanvas' ); ?>

	<div class="off-canvas-content" data-off-canvas-content>
			<header class="header" role="banner">

	<!-- This navs will be applied to the topbar, above all content
	To see additional nav styles, visit the /parts directory -->
	<?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>

	</header> <!-- end .header -->
	
	</div>
	</div>
	</div>
	<div class="music-container">
	<div class="music-image-container">
	<?php the_post_thumbnail('large'); ?>
	</div>
<div class="song-header">
<?php the_title( '<h3>', '</h3>' ); ?>
<?php
	$featuring = get_post_meta($post->ID, 'featuring', true);
	$applemusic = get_post_meta($post->ID, 'apple_music', true);
	$soundcloud = get_post_meta($post->ID, 'soundcloud', true);
	$tidal = get_post_meta($post->ID, 'tidal', true);
	$googleplay = get_post_meta($post->ID, 'google_play', true);
	$itunes = get_post_meta($post->ID, 'itunes_store', true);
	$amazon = get_post_meta($post->ID, 'amazon', true);
	$spotify = get_post_meta($post->ID, 'spotify', true);
	$youtube = get_post_meta($post->ID, 'youtube', true);
	if ($featuring) { ?>

		<span>ft. <? echo $featuring; ?></span>
	<?php
	} else {

	}
?>
</div>
<div class="song-links">

<?php
	if ($applemusic) { ?>

	<div class="service">
	<a href="http://<?php echo $applemusic; ?>">
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-8">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/brands/apple-music-full.svg">
				</div>
				<div class="small-4">
				<button class="hollow button">Play</button>
				</div>
			</div>
		</div>
</a>
	</div>
<?php
	} else{

	}?>

<?php
	if ($spotify) { ?>

	<div class="service">
	<a href="http://<?php echo $spotify; ?>">
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-8">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/brands/spotify-logo-full.png">
				</div>
				<div class="small-4">
				<button class="hollow button">Play</button>
				</div>
			</div>
		</div>
</a>
	</div>
<?php
	} else{

	}?>

<?php
	if ($googleplay) { ?>

	<div class="service">
	<a href="http://<?php echo $googleplay; ?>">
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-8">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/brands/google-logo-full.png">
				</div>
				<div class="small-4">
				<button class="hollow button">Play</button>
				</div>
			</div>
		</div>
</a>
	</div>
<?php
	} else{

	}?>

<?php
	if ($tidal) { ?>

	<div class="service">
	<a href="http://<?php echo $tidal; ?>">
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-8">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/brands/tidal-logo-full.png">
				</div>
				<div class="small-4">
				<button class="hollow button">Play</button>
				</div>
			</div>
		</div>
</a>
	</div>
<?php
	} else{

	}?>
<?php
	if ($amazon) { ?>

	<div class="service">
	<a href="<?php echo $amazon; ?>">
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-8">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/brands/amazon-logo-full.svg">
				</div>
				<div class="small-4">
				<button class="hollow button">Play</button>
				</div>
			</div>
		</div>
</a>
	</div>
<?php
	} else{

	}?>
<?php
	if ($soundcloud) { ?>

	<div class="service">
	<a href="http://<?php echo $soundcloud; ?>">
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-8">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/brands/soundcloud-logo-full.png">
				</div>
				<div class="small-4">
				<button class="hollow button">Play</button>
				</div>
			</div>
		</div>
</a>
	</div>
<?php
	} else{

	}?>		
<?php
	if ($itunes) { ?>

	<div class="service">
	<a href="http://<?php echo $itunes; ?>">
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-8">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/brands/itunes-logo-full.svg">
				</div>
				<div class="small-4">
				<button class="hollow button">Purchase</button>
				</div>
			</div>
		</div>
</a>
	</div>
<?php
	} else{

	}?>	
<?php
	if ($youtube) { ?>

	<div class="service">
	<a href="<?php echo $youtube; ?>">
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-8">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/brands/youtube-logo-full.svg">
				</div>
				<div class="small-4">
				<button class="hollow button">Watch</button>
				</div>
			</div>
		</div>
</a>
	</div>
<?php
	} else{

	}?>	
</div>
								</div>
</div>
</div> <!-- end #content -->

<?php get_footer(); ?>
