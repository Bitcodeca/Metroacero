<?php get_header(); ?>
	<div class="google-wrapper videoinicio">
		<div class="youtube">
	    	<iframe id="ytplayer" src="https://www.youtube.com/embed/6Bfpr1s20Mg?autoplay=1&controls=0&loop=1&playlist=6Bfpr1s20Mg&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
	    </div>
	    <div class="google-map-overlay">
	    </div>
	</div>
<div id="viewport-wrapper">
	<div class="container wow fadeIn" data-wow-delay="0.2s" id="nosotros">
		<div class="inicioempresa margin25">
	                <?php $args=array('post_status' => 'publish', 'order' => 'ASC', 'category_name'=>'empresa'); $my_query = new WP_Query($args);
	                if( $my_query->have_posts() ) {
	                  while ($my_query->have_posts()) : $my_query->the_post();
	                    $categories = get_the_category(); $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
	                    $id = get_the_ID();
	                    global $dynamic_featured_image;
	       				$nth_image = $dynamic_featured_image -> get_all_featured_images( $id );
	       				$title = get_the_title();
	       				if ($title=='Misión' || $title=='Visión' || $title=='Nosotros'){ ?>
		                      	<div class="col-md-4 col-sm-4 col-xs-12">
									<img src="<?php echo $nth_image[0]['full'];?>" class="img-responsive img-circle hvr-buzz-out">
									 <h2 class="letranaranja hvr-underline-from-center"><?php echo get_the_title(); ?></h2>
									 <?php the_content('',FALSE,''); ?>
								</div>
	                    <?php } endwhile; }  wp_reset_query(); ?>
		</div>
	</div>
	<div class="iniciodestacados margin50 wow fadeIn" data-wow-delay="0.2s" id="trabajos">
		<a href="http://www.metroacero.com/galeria/" class="hvr-underline-from-center">
			<h2 class="letranaranja text-center">Trabajos Destacados</h2>
		</a>
		<div class="imgtrabajosdestacados margin25">
			<div class="grid">
	              <div class="grid-sizer"></div>
			        <?php $args=array('post_status' => 'publish', 'posts_per_page' => 15, 'order' => 'DESC', 'category_name'=>'galeria'); $my_query = new WP_Query($args);
	                if( $my_query->have_posts() ) {
	                  while ($my_query->have_posts()) : $my_query->the_post();
	                    $categories = get_the_category(); $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID) ); 
	                    $id = get_the_ID(); global $dynamic_featured_image;
	       				$nth_image = $dynamic_featured_image -> get_all_featured_images( $id ); ?>
	                      	<div class="grid-item hvr-grow">
								<a class="fancybox" href="<?php echo $nth_image[0]['full']; ?>"><img src="<?php echo $nth_image[0]['full'];?>" class=""></a> 
							</div>
	                  <?php endwhile; }  wp_reset_query(); ?>
	          </div>
          </div>
	</div>
	<div class="inicionoticias margin50 wow fadeIn" data-wow-delay="0.2s" id="noticias">
		<a href="http://www.metroacero.com/noticias/"><h2 class="letranaranja hvr-underline-from-center">Noticias Recientes</h2></a>
        <div class="container">
        	<div class="margin25">
                <?php $args=array('post_status' => 'publish', 'posts_per_page' => 4, 'order' => 'DESC', 'category_name'=>'noticias'); $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                  while ($my_query->have_posts()) : $my_query->the_post();
                    $categories = get_the_category(); $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
                    $id = get_the_ID();
                    global $dynamic_featured_image;
       				$nth_image = $dynamic_featured_image -> get_all_featured_images( $id ); ?>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<a href="<?php the_permalink(); ?>"><img src="<?php echo $nth_image[0]['thumb'];?>" class="img-responsive img-circle hvr-buzz-out"> 
							<h4><?php echo get_the_title(); ?></h4></a>
						</div>
                  <?php endwhile; }  wp_reset_query(); ?>
            </div>
        </div>
	</div>
	<div class="letranaranja text-center margin50 wow fadeIn" data-wow-delay="0.2s">
			<h2 class="hvr-underline-from-center">Ubícanos</h2>
	</div>
	<div class="gmap" id="mapa">
		<div class="google-wrapper">
			<iframe src="https://www.google.com/maps/d/embed?mid=zLAmHqF8yosM.kfDtupoT3yiw"></iframe>
		</div>
	</div>
</div>
	<script>
		jQuery(document).ready(function ($) {
		    jQuery('.fancybox').attr('rel', 'media-gallery').fancybox({
		        prevEffect: 'none',
		        nextEffect: 'none',
		        closeBtn: true,
		        arrows: true,
		        nextClick: true,
		        helpers: {
		           title	: {
						type: 'float'
					},
					thumbs	: {
						width	: 100,
						height	: 100
					},
		         onUpdate:function(){
		          jQuery('#fancybox-thumbs ul').draggable({
		            axis: "x"
		          });
		          var posXY = '';
		          jQuery('.fancybox-skin').draggable({
		            axis: "x",
		            drag: function(event,ui){
		              // get position
		                        posXY = ui.position.left;
		                        // if drag distance bigger than +- 100px: cancel drag function..
		                        if(posXY > 100){return false;}
		              if(posXY < -100){return false;}
		            },
		            stop: function(){
		                        // ... and get next oder previous image
		              if(posXY > 95){jQuery.fancybox.prev();}
		              if(posXY < -95){jQuery.fancybox.next();}
		            }
		          });
		        }
				}
		    });
		});
	</script>
	<script>
        var tag = document.createElement('script');
        tag.src = "//www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        var player;
        function onYouTubeIframeAPIReady() {
            player = new YT.Player('ytplayer', {
                events: {
                    'onReady': onPlayerReady
                }
            });
        }
        function onPlayerReady() {
            player.playVideo();
            // Mute!
            player.mute();
        }
	</script>
    <script>
      jQuery(document).ready( function() {
        // init Masonry
        var $grid = jQuery('.grid').masonry({
          itemSelector: '.grid-item',
          fitWidth: true,
          columnWidth: 1,
        });
        // layout Isotope after each image loads
        $grid.imagesLoaded().progress( function() {
          $grid.masonry();
        });  

      });
    </script>

<?php get_footer(); ?>