<?php get_header(); ?>
<section class="paginaempresa">
	<div class="clearfix paddingbot50"></div>
	<div class="text-center">
		<h2 class="letranaranja hvr-underline-from-center">Galería</h2>
	</div>
	<div class="fondoblanco">
	    <div class="gallery margin50">
			        <?php $args=array('post_status' => 'publish', 'posts_per_page' => 50, 'order' => 'DESC', 'category_name'=>'galeria'); $my_query = new WP_Query($args);
	            if( $my_query->have_posts() ) {
	              while ($my_query->have_posts()) : $my_query->the_post();
	                $categories = get_the_category(); $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
	                $id = get_the_ID();
	                global $dynamic_featured_image;
	   				$nth_image = $dynamic_featured_image -> get_all_featured_images( $id ); ?>
							<div class="gallery-cell">
								<a class="fancybox"  href="<?php echo $nth_image[0]['full']; ?>">
									<img src ="<?php echo $nth_image[0]['full'];?>" class="">
								</a>
							</div>
	              <?php endwhile; }  wp_reset_query(); ?>
	    </div>
	</div>
	<div class="clearfix paddingbot50 margin50"></div>
	<div class="text-center">
		<h2 class="letranaranja hvr-underline-from-center">Videos</h2>
	</div>
	    <div class="gallery-video margin50">
			        <?php $args=array('post_status' => 'publish', 'posts_per_page' => 50, 'order' => 'DESC', 'category_name'=>'video'); $my_query = new WP_Query($args);
	            if( $my_query->have_posts() ) {
	              while ($my_query->have_posts()) : $my_query->the_post();
	                $categories = get_the_category(); $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
	                $id = get_the_ID();
	                global $dynamic_featured_image;
	   				$nth_image = $dynamic_featured_image -> get_all_featured_images( $id ); ?>
							<div class="gallery-cell-video">
								<?php the_content(); ?>
							</div>
	              <?php endwhile; }  wp_reset_query(); ?>
	    </div>

	<div class="clearfix paddingbot50"></div>
</section>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.1.1/flickity.pkgd.js"></script>
<script>
	jQuery('.gallery').flickity({
	  cellAlign: 'left',
	  contain: true,
	  autoPlay: true,
	  imagesLoaded: true,
	  freeScroll: true,
	  pageDots: false
	});
	jQuery('.gallery-video').flickity({
	  cellAlign: 'left',
	  contain: true,
	  autoPlay: false,
	  imagesLoaded: true,
	  freeScroll: false,
	  pageDots: false
	});
</script>

<?php get_footer(); ?>