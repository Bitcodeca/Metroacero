<?php get_header(); ?>
<section class="paginaempresa">
	<div class="clearfix paddingbot50"></div>
	<div class="text-center">
		<h2 class="letranaranja hvr-underline-from-center">Metroacero de Venezuela</h2>
	</div>
	<div class="fondoblanco">
		<div class="container margin50">
	        <?php $args=array('post_status' => 'publish', 'order' => 'ASC', 'category_name'=>'empresa'); $my_query = new WP_Query($args);
            if( $my_query->have_posts() ) {
              while ($my_query->have_posts()) : $my_query->the_post();
                $categories = get_the_category(); $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
                $id = get_the_ID();
                global $dynamic_featured_image;
   				$nth_image = $dynamic_featured_image -> get_all_featured_images( $id );
   				$title = get_the_title();
   				if ($title=='Nosotros'){ global $more; $more = 1; ?>
       					<div class="row wow fadeIn" data-wow-delay="0.2s">
       						<div class="empresainner">
		                      	<div class="col-md-6">
									 <h3 class="letranaranja  hvr-underline-from-center"><?php echo get_the_title(); ?></h3>
									 <p><?php echo get_the_content(); ?></p>
								</div>
								<div class="col-md-6 text-center">
									<img src="<?php echo $nth_image[0]['full'];?>" class="img-responsive img-rounded hvr-glow">
								</div>
							</div>
						</div>
              <?php } endwhile; }  wp_reset_query(); ?>
	     </div>
	</div>
	<div class="clearfix"></div>
   	<div class="margin50">
		<div class="contenidoempresa paddingtopbot50">
			<div class="container">
   					<div class="row wow fadeIn" data-wow-delay="0.2s">
	                <?php $args=array('post_status' => 'publish', 'order' => 'ASC', 'category_name'=>'empresa'); $my_query = new WP_Query($args);
	                if( $my_query->have_posts() ) {
	                  while ($my_query->have_posts()) : $my_query->the_post();
	                    $categories = get_the_category(); $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
	                    $id = get_the_ID();
	                    global $dynamic_featured_image;
	       				$nth_image = $dynamic_featured_image -> get_all_featured_images( $id );
	       				$title = get_the_title();
	       				if ($title=='Misión' || $title=='Visión'){  global $more; $more = 1; ?>
		                      	<div class="col-md-6">
									<img src="<?php echo $nth_image[0]['full'];?>" class="img-responsive img-circle hvr-glow">
									 <h3 class="letranaranja  hvr-underline-from-center"><?php echo get_the_title(); ?></h3>
									 <p><?php echo get_the_content(); ?></p>
								</div>
	                    <?php } endwhile; }  wp_reset_query(); ?>
          			</div>
				</div>
		</div>
	</div>

    <?php $args=array('post_status' => 'publish', 'order' => 'ASC', 'category_name'=>'empresa'); $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {  $x=0;
      while ($my_query->have_posts()) : $my_query->the_post();
        $categories = get_the_category(); $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
        $id = get_the_ID();
        global $dynamic_featured_image;
			$nth_image = $dynamic_featured_image -> get_all_featured_images( $id );
			$title = get_the_title(); global $more; $more = 1; 
			if ($title=='Misión' || $title=='Visión' || $title=='Nosotros'){} elseif ($x==0){ $x++;?>
			<div class="clearfix"></div>
			   	<div class="margin50 wow fadeIn" data-wow-delay="0.2s">
					<div class="fondoblanco contenidoempresa">
						<div class="container">
							<div class="row">
       							<div class="empresainner">
									<div class="col-md-6 text-center">
										<img src="<?php echo $nth_image[0]['full'];?>" class="img-responsive img-rounded hvr-glow">
									</div>
			                      	<div class="col-md-6">
										 <h3 class="letranaranja  hvr-underline-from-center"><?php echo get_the_title(); ?></h3>
										 <p><?php echo get_the_content(); ?></p>
									</div>
								</div>
			      			</div>
						</div>
					</div>
				</div>
				<div class="clearfix paddingbot50"></div>
        <?php } else { $x=0; ?>
			<div class="clearfix"></div>
			   	<div class="margin50 wow fadeIn" data-wow-delay="0.2s">
					<div class="fondoblanco contenidoempresa">
						<div class="container">
	       					<div class="row">
       							<div class="empresainner">
			                      	<div class="col-md-6">
										 <h3 class="letranaranja  hvr-underline-from-center"><?php echo get_the_title(); ?></h3>
										 <p><?php echo get_the_content(); ?></p>
									</div>
									<div class="col-md-6 text-center">
										<img src="<?php echo $nth_image[0]['full'];?>" class="img-responsive hvr-glow">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix paddingbot50"></div>
        	<?php } endwhile; }  wp_reset_query(); ?>
</section>
<?php get_footer(); ?>