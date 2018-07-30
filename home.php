<?php
/**
 * Template Name: BandoHome
 */

get_header(); ?>

<div class="content">
<div class="hero-full-screen">
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
	<div data-toggler data-animate="fade-in fade-out" class="middle-content-section">
    <h1>Doperunners</h1>
		<h2>Video Out Now!</h2>
    <button class="button large" href="https://www.youtube.com/watch?v=wf-FFHOdZiw">Watch Now</button>
  </div>
	<div class="bottom-content-section show-for-large" data-magellan data-threshold="0">
    <a href="#main-content-section"><svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" viewBox="0 0 24 24"><path d="M24 12c0-6.627-5.373-12-12-12s-12 5.373-12 12 5.373 12 12 12 12-5.373 12-12zm-18.005-1.568l1.415-1.414 4.59 4.574 4.579-4.574 1.416 1.414-5.995 5.988-6.005-5.988z"/></svg></a>
  </div>
</div>
<div class="grid-container">
<div class="inner-content grid-x grid-margin-x">

	<div class="main small-12 medium-12 large-12 cell">
		<section id="home_bio" class="content_space">
		<div class="grid-x grid-margin-x grid-padding-x">
			<div class="title_box cell medium-6">
				<h1>Who is King Bando?</h1><hr>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<a class="button large" href="#">Read More</a>
			</div>
			<div class="cell medium-6">
				<img src="/bando/wp-content/themes/JointsWP/assets/images/bio.jpg">
			</div>
		</div>
		</section>
		</div>
		</div>
		</div>
		<section id="new_music" class="content_space">
			<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<div class="title_box cell small-12">
					<h1>Latest Music</h1><hr>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>	
			<?php
				$args = array(
				'post_type'   => 'music'
				);
				
				$music = new WP_Query( $args );
				if( $music->have_posts() ) :
				?>
				<div class="music_box owl-one owl-carousel owl-theme">
					<?php
					while( $music->have_posts() ) :
						$music->the_post();
						?>
						<div class="album_box">
							<div class="grid-y">
								<div class="artwork cell small-12">
								<a href="<?php the_permalink(); ?>" title="Listen to <?php the_title(); ?> on your favorite streaming service!"><?php the_post_thumbnail('medium'); ?></a>
								</div>
								<div class="album_desc center_header cell small-12">
								<a href="<?php the_permalink(); ?>" title="Listen to <?php the_title(); ?> on your favorite streaming service!"><?php the_title( '<h3>', '</h3>' ); ?>
								<?php
									$featuring = get_post_meta($post->ID, 'featuring', true);
									if ($featuring) { ?>

										<span>ft. <? echo $featuring; ?></span>
									<?php
									} else {

									}
								?>
								</a>
								</div>
							</div>
						</div>
						<?php
					endwhile;
					wp_reset_postdata();
					?>
				</div>
				<?php
				else :
				esc_html_e( 'No testimonials in the diving taxonomy!', 'text-domain' );
				endif;
			?>
			<!--
				<div class="music_box owl-one owl-carousel owl-theme">
				<div class="album_box">
					<div class="grid-y">
						<div class="artwork cell small-12">
					 		<img src="/bando/wp-content/themes/JointsWP/assets/images/artwork.jpg" alt="">
						</div>
						<div class="album_desc center_header cell small-12">
							<h3>Doperunners</h3>
							<span>Test Test</span>
						</div>
					</div>
				</div>
				<div class="album_box">
					<div class="grid-y">
						<div class="artwork cell small-12">
					 		<img src="/bando/wp-content/themes/JointsWP/assets/images/artwork.jpg" alt="">
						</div>
						<div class="album_desc center_header cell small-12">
							<h3>Doperunners</h3>
							<span>Test Test</span>
						</div>
					</div>
				</div>

				<div class="album_box">
					<div class="grid-y">
						<div class="artwork cell small-12">
					 		<img src="/bando/wp-content/themes/JointsWP/assets/images/artwork.jpg" alt="">
						</div>
						<div class="album_desc center_header cell small-12">
							<h3>Doperunners</h3>
							<span>Test Test</span>
						</div>
					</div>
				</div>
				<div class="album_box">
					<div class="grid-y">
						<div class="artwork cell small-12">
					 		<img src="/bando/wp-content/themes/JointsWP/assets/images/artwork.jpg" alt="">
						</div>
						<div class="album_desc center_header cell small-12">
							<h3>Doperunners</h3>
							<span>Test Test</span>
						</div>
					</div>
				</div>
				
				</div> -->

			</div>
			</div>
		</section>
		<section id="videos" class="content_space">
			<div class="grid-container">
				<div class="grid-x grid-margin-x">
					<div class="title_box cell small-12">
						<h1>Videos</h1><hr>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<iframe width="560" height="315" src="https://www.youtube.com/embed/wf-FFHOdZiw?rel=0;controls=0showinfo=0;theme=light" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</section>
<!--
		<section id="IG" class="content_space">
			<div class="grid-container">
				<div class="grid-x grid-margin-x">
					<div class="title_box center_header cell small-12">
						<h2>Latest from IG</h2>
						<p>Follow <a href="http://wwww.instagram.com/therealkingbando">TheRealKingBando</a></p>
					</div>
						</div>
						</div>
						</section> -->
					<div id="instafeed-gallery-feed" class="ig-carousel owl-carousel owl-theme">
						<!--  instagram feed will load here -->

					</div>
							
</main> <!-- end #main -->

</div> <!-- end #inner-content -->

</div> <!-- end #content -->
</div>


<?php get_footer(); ?>
