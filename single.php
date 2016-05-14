<?php get_header(); ?>
<section class="paginaempresa" id="articulo">
	<div class="clearfix paddingbot50"></div>
	<div class="fondoblanco">
		<div class="container">
			<?php if( have_posts() ): while( have_posts() ): the_post(); 
                $id = get_the_ID();
                global $dynamic_featured_image;
   				$nth_image = $dynamic_featured_image -> get_all_featured_images( $id );?>
				<div class="row">
					<div class="empresainner singlenoticia">
                      	<div class="col-md-6">
							<?php the_title('<h2 class="letranaranja hvr-underline-from-center">','</h2>' ); ?>
							<p><?php the_content(); ?></p>
						</div>
						<div class="col-md-6 col-xs-12">
							<?php foreach($nth_image as $imagen){ ?>
							<div class="singlenoticiainner col-md-6 col-xs-6">
								<a class="fancybox hvr-glow"  href="<?php echo $imagen['full']; ?>" data-fancybox-group="<?php echo $id; ?>"><img src="<?php echo $imagen['full'];?>" class="img-responsive"></a>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			<?php endwhile; endif; ?>
	    </div>
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
<?php get_footer(); ?>