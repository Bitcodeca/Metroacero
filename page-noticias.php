<?php get_header(); ?>
<section class="paginaempresa" id="articulo">
	<div class="clearfix paddingbot50"></div>
	<div class="text-center">
		<h2 class="letranaranja hvr-underline-from-center">Noticias</h2>
	</div>
        <?php $args=array('post_status' => 'publish', 'posts_per_page' => 100, 'order' => 'DESC', 'category_name'=>'noticias'); $my_query = new WP_Query($args);
        if( $my_query->have_posts() ) { $x=0;
          while ($my_query->have_posts()) : $my_query->the_post();
            $categories = get_the_category(); $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
            $id = get_the_ID();
            global $dynamic_featured_image;
				$nth_image = $dynamic_featured_image -> get_all_featured_images( $id );
				$num=count($nth_image);
   				if($num>=5){$casilla1=6; $casilla2=6; $casilla3=6; $casilla4=6; $casilla5=12;} 
				elseif($num==4){$casilla1=6; $casilla2=6; $casilla3=12; $casilla4=12;} 
				elseif($num==3){$casilla1=12; $casilla2=12; $casilla3=12;} 
				elseif($num==2){$casilla1=12; $casilla2=12;}
				elseif($num==1){$casilla1=12;}
				if ($x==0){ $x++; ?>
			<div class="margin50 marginbot25 wow fadeIn" data-wow-delay="0.2s">
				<div class="fondoblanco">
			        <div class="container">
       					<div class="row paginarow">
	                      	<div class="col-md-6 col-xs-12">
								 <h3 class="letranaranja hvr-underline-from-center"><?php echo get_the_title(); ?></h3>
								 <p><?php echo get_the_content(); ?></p>
							</div>
							<?php if($num>0) { ?>
								<div class="col-md-6 col-xs-12">
									<?php if($num>0 && $num!=2){ echo '<div class="row">';} ?>
										<div class="col-md-<?php echo $casilla1; ?> col-xs-<?php echo $casilla1; ?> imgpagnoticias">
											<a class="fancybox hvr-glow"  href="<?php echo $nth_image[0]['full']; ?>" data-fancybox-group="<?php echo $id; ?>">
												<img src ="<?php echo $nth_image[0]['full'];?>" class="">
											</a>
										</div>

									<?php if($num==3){ echo '</div>';} if($num==3){ echo '<div class="row">';}
									 if($num>=2){ ?>
										<div class="col-md-<?php echo $casilla2; ?> col-xs-<?php echo $casilla2; ?> imgpagnoticias">
											<a class="fancybox hvr-glow"  href="<?php echo $nth_image[1]['full']; ?>" data-fancybox-group="<?php echo $id; ?>">
												<img src ="<?php echo $nth_image[1]['full'];?>" class="">
											</a>
										</div>

									<?php } if($num>0 && $num!=2){ echo '</div>';} if($num>=3){ echo '<div class="row">';}
									 if($num>=3){ ?>
										<div class="col-md-<?php echo $casilla3; ?> col-xs-<?php echo $casilla3; ?> imgpagnoticias">
											<a class="fancybox hvr-glow"  href="<?php echo $nth_image[2]['full']; ?>" data-fancybox-group="<?php echo $id; ?>">
												<img src ="<?php echo $nth_image[2]['full'];?>" class="">
											</a>
										</div>

									<?php } if($num==4 || $num==3){ echo '</div>';}  if($num==4){ echo '<div class="row">';}
									 if($num>=4){?>
										<div class="col-md-<?php echo $casilla4; ?> col-xs-<?php echo $casilla4; ?> imgpagnoticias">
											<a class="fancybox hvr-glow"  href="<?php echo $nth_image[3]['full']; ?>" data-fancybox-group="<?php echo $id; ?>">
												<img src ="<?php echo $nth_image[3]['full'];?>" class="">
											</a>
										</div>

									<?php } if($num>=4){ echo '</div>';}
									 if($num>=5){ ?>
									 <div class="row"> 
										<div class="col-md-<?php echo $casilla5; ?> col-xs-<?php echo $casilla5; ?> imgpagnoticiasgrande">
											<a class="fancybox hvr-glow"  href="<?php echo $nth_image[4]['full']; ?>" data-fancybox-group="<?php echo $id; ?>">
												<img src ="<?php echo $nth_image[4]['full'];?>" class="">
											</a>
										</div>
									</div>
									<?php } ?>

								</div>
							<?php } ?>
						</div>
            		</div>
		        </div>
			</div>
          <?php } else { $x=0; ?>
    		<div class="container">
    			<div class="margin25 marginbot25 wow fadeIn" data-wow-delay="0.2s">
       					<div class="row paginarow">
							<?php if($num>0) { ?>
								<div class="col-md-6 col-xs-12">
									<?php if($num>0 && $num!=2){ echo '<div class="row">';} ?>
										<div class="col-md-<?php echo $casilla1; ?> col-xs-<?php echo $casilla1; ?> imgpagnoticias">
											<a class="fancybox hvr-glow"  href="<?php echo $nth_image[0]['full']; ?>" data-fancybox-group="<?php echo $id; ?>">
												<img src ="<?php echo $nth_image[0]['full'];?>" class="">
											</a>
										</div>

									<?php if($num==3){ echo '</div>';} if($num==3){ echo '<div class="row">';}
									 if($num>=2){ ?>
										<div class="col-md-<?php echo $casilla2; ?> col-xs-<?php echo $casilla2; ?> imgpagnoticias">
											<a class="fancybox hvr-glow"  href="<?php echo $nth_image[1]['full']; ?>" data-fancybox-group="<?php echo $id; ?>">
												<img src ="<?php echo $nth_image[1]['full'];?>" class="">
											</a>
										</div>

									<?php } if($num>0 && $num!=2){ echo '</div>';} if($num>=3){ echo '<div class="row">';}
									 if($num>=3){ ?>
										<div class="col-md-<?php echo $casilla3; ?> col-xs-<?php echo $casilla3; ?> imgpagnoticias">
											<a class="fancybox hvr-glow"  href="<?php echo $nth_image[2]['full']; ?>" data-fancybox-group="<?php echo $id; ?>">
												<img src ="<?php echo $nth_image[2]['full'];?>" class="">
											</a>
										</div>

									<?php } if($num==4 || $num==3){ echo '</div>';}  if($num==4){ echo '<div class="row">';}
									 if($num>=4){?>
										<div class="col-md-<?php echo $casilla4; ?> col-xs-<?php echo $casilla4; ?> imgpagnoticias">
											<a class="fancybox hvr-glow"  href="<?php echo $nth_image[3]['full']; ?>" data-fancybox-group="<?php echo $id; ?>">
												<img src ="<?php echo $nth_image[3]['full'];?>" class="">
											</a>
										</div>

									<?php } if($num>=4){ echo '</div>';}
									 if($num>=5){ ?>
									 <div class="row"> 
										<div class="col-md-<?php echo $casilla5; ?> col-xs-<?php echo $casilla5; ?> imgpagnoticiasgrande">
											<a class="fancybox hvr-glow"  href="<?php echo $nth_image[4]['full']; ?>" data-fancybox-group="<?php echo $id; ?>">
												<img src ="<?php echo $nth_image[4]['full'];?>" class="">
											</a>
										</div>
									</div>
									<?php } ?>

								</div>
							<?php } ?>
	                      	<div class="col-md-6 col-xs-12">
								 <h3 class="letranaranja hvr-underline-from-center"><?php echo get_the_title(); ?></h3>
								 <p><?php echo get_the_content(); ?></p>
							</div>
						</div>
        		</div>
    		</div>
      <?php } endwhile; }  wp_reset_query(); ?>
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