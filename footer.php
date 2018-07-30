<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>

	<section id="social">
		<div class="medium-grid-container-full">
		<div class="grid-x">
			<div class="social-box instagram small-6 medium-3 text-center cell">
					<a href="http://instagram.com/therealkingbando" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<!--
					<div class="social-content">
					<h1>Instagram</h1>
					<p>Follow me on Instragram for a more personal look into my life and work</p>
					</div> -->
			</div>
			<div class="social-box youtube small-6 medium-3 text-center cell">
					<a href="http://instagram.com/therealkingbando" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
					<!--
					<div class="social-content">
					<h1>Instagram</h1>
					<p>Follow me on Instragram for a more personal look into my life and work</p>
					</div> -->
			</div>
			<div class="social-box twitter small-6 medium-3 text-center cell">
					<a href="http://instagram.com/therealkingbando" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<!--
					<div class="social-content">
					<h1>Instagram</h1>
					<p>Follow me on Instragram for a more personal look into my life and work</p>
					</div> -->
			</div>
			<div class="social-box facebook small-6 medium-3 text-center cell">
					<a href="http://instagram.com/therealkingbando" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<!--
					<div class="social-content">
					<h1>Instagram</h1>
					<p>Follow me on Instragram for a more personal look into my life and work</p>
					</div> -->
			</div>
		</div>
		</div>
	
	</section>				
				<footer class="footer" role="contentinfo">
					
					<div class="inner-footer grid-x grid-margin-x grid-padding-x">
						
						<div class="small-12 medium-12 large-12 cell">
							<nav role="navigation">
	    						<?php joints_footer_links(); ?>
	    					</nav>
	    				</div>
						
						<div class="small-12 medium-12 large-12 cell">
							<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
						</div>
					
					</div> <!-- end #inner-footer -->
				
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>

		<script type="text/javascript">
			var userFeed = new Instafeed({
  get: "user",
  userId: 30749781,
  accessToken: "30749781.be7157b.b057cdfc4dfa4a4aa57498ebd2db288c",
  resolution: "thumbnail",
  square: "true",
  useHttp: "true",
  limit: 10,
  template: 
    // '<a href="{{image}}">'+
      '<div class="img-featured-container">'+
        '<div class="img-backdrop"></div>'+
        '<div class="description-container">'+
           '<p class="caption">{{caption}}</p>'+
          '<span class="likes"><i class="icon ion-heart"></i> {{likes}}</span>'+
          '<span class="comments"><i class="icon ion-chatbubble"></i> {{comments}}</span>'+
        '</div>'+
        '<img src="{{image}}" class="img-responsive">'+
      '</div>',
    // '</a>'+
  target: "instafeed-gallery-feed",
  after: function() {
    // disable button if no more results to load
    if (!this.hasNext()) {
      btnInstafeedLoad.setAttribute('disabled', 'disabled');
	}

	jQuery(function($) { 
			$('.owl-one').owlCarousel({
			loop:true,
			center: true,
			margin:20,
			nav: false,
			responsiveClass:true,
			responsive:{
				0:{
					items:1,
					nav:true
				},
				600:{
					items:3,
					nav:true
				},
				1000:{
					items:3,
					nav:true,
					loop:true,
				}
			}
		});
			$('.ig-carousel').owlCarousel({
				loop:true,
				autoplay: true,
				nav:false,
				dots: false,
				navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
				responsive:{
				0:{
					items:1
				},
				200:{
					items:2
				},
				400:{
					items:2
				},
				768:{
					items:5
				}
			}					
			});
		});

  }	
});

userFeed.run();

		</script>

		
	</body>
	
</html> <!-- end page -->