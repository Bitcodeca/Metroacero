<?php get_header(); ?>
<script>
	this.metroaceroCustomization = function () {

	var custom = new slicePathCustomization();
	custom.minRadiusPercent = 0.37;
	custom.maxRadiusPercent = 0.9;

	return custom;
	};

	this.metroacero = function (helper, percent, custom) {

	if (custom === null) {
	    custom = metroaceroCustomization();
	}

	maxRadius = helper.wheelRadius * percent * custom.maxRadiusPercent;
	minRadius = helper.wheelRadius * percent * custom.minRadiusPercent;

	helper.setBaseValue(percent, custom);

	helper.titleRadius = (maxRadius + minRadius) / 2.15;
	helper.setTitlePos();

	slicePathString = [helper.MoveTo(helper.startAngle+45, minRadius/1.3),
	                     helper.ArcTo(minRadius/ 2, helper.startAngle+45, maxRadius),
	                     helper.ArcTo(maxRadius, helper.endAngle+45, maxRadius),
	                     helper.ArcBackTo(maxRadius/ 4, helper.endAngle+45, minRadius/1.3),
	                     helper.ArcBackTo(minRadius/1.3, helper.startAngle+45, minRadius/1.3),
	                     helper.Close()];

	return {
	    slicePathString: slicePathString,
	    linePathString: "",
	    titlePosX: helper.titlePosX,
	    titlePosY: helper.titlePosY
	};
	};
</script>
<script type="text/javascript">
jQuery(document).ready(function() {
    function checkWidth() {
        var w = jQuery(window).width();
        if (w>1440){
		    window.onload=function(){
		        var n=new wheelnav("indexDiv");
		        n.slicePathFunction=slicePath().metroacero;
		        n.sliceHoverAttr = { stroke: '#36a7c9', 'stroke-width': 2 };
		        n.lineHoverAttr = { stroke: '#36a7c9', 'stroke-width': 2 };
		        n.sliceSelectedAttr = { stroke: '#36a7c9', 'stroke-width': 4 };
		        n.lineSelectedAttr = { stroke: '#36a7c9', 'stroke-width': 4 };
		        n.titleWidth=210;
		        n.animatetime = 700;
				n.navAngle = 90;
		        n.animateeffect = 'linear';
		        n.colors = colorpalette.metroacerocolores;
		        n.spreaderPathInAttr = { fill: '#FFF', 'stroke-width': 3, stroke: '#555' };
		        n.spreaderPathOutAttr = { fill: '#FFF', 'stroke-width': 3, stroke: '#FFF' };
		        n.spreaderTitleInAttr = { fill: '#555' };
		        n.spreaderTitleOutAttr = { fill: '#555' };
				n.slicePathAttr = { stroke: '#fff', 'stroke-width': 12 };
				n.linePathAttr = { stroke: '#fff', 'stroke-width': 12 };
		        n.createWheel(["imgsrc:<?php echo get_bloginfo('template_directory');?>/img/tubocuadrado.png",
		                        "imgsrc:<?php echo get_bloginfo('template_directory');?>/img/tuborectangular.png",
		                        "imgsrc:<?php echo get_bloginfo('template_directory');?>/img/tuboenlamina.png",
		                        "imgsrc:<?php echo get_bloginfo('template_directory');?>/img/laminasdeacero.png"]);
		        createTabHandler(n.navItems[0].navItem,"productosnav","tuboscuadrados");
		        createTabHandler(n.navItems[1].navItem,"productosnav","tubosrectangulares");
		        createTabHandler(n.navItems[2].navItem,"productosnav","tubosfriocaliente");
		        createTabHandler(n.navItems[3].navItem,"productosnav","laminasfriocaliente")
		    };
        } else if (w<=1440 && w>1280){
		    window.onload=function(){
		        var n=new wheelnav("indexDiv");
		        n.slicePathFunction=slicePath().metroacero;
		        n.sliceHoverAttr = { stroke: '#36a7c9', 'stroke-width': 2 };
		        n.lineHoverAttr = { stroke: '#36a7c9', 'stroke-width': 2 };
		        n.sliceSelectedAttr = { stroke: '#36a7c9', 'stroke-width': 4 };
		        n.lineSelectedAttr = { stroke: '#36a7c9', 'stroke-width': 4 };
		        n.titleWidth=180;
		        n.animatetime = 700;
				n.navAngle = 90;
		        n.animateeffect = 'linear';
		        n.colors = colorpalette.metroacerocolores;
		        n.spreaderPathInAttr = { fill: '#FFF', 'stroke-width': 3, stroke: '#555' };
		        n.spreaderPathOutAttr = { fill: '#FFF', 'stroke-width': 3, stroke: '#FFF' };
		        n.spreaderTitleInAttr = { fill: '#555' };
		        n.spreaderTitleOutAttr = { fill: '#555' };
				n.slicePathAttr = { stroke: '#fff', 'stroke-width': 12 };
				n.linePathAttr = { stroke: '#fff', 'stroke-width': 12 };
		        n.createWheel(["imgsrc:<?php echo get_bloginfo('template_directory');?>/img/tubocuadrado.png",
		                        "imgsrc:<?php echo get_bloginfo('template_directory');?>/img/tuborectangular.png",
		                        "imgsrc:<?php echo get_bloginfo('template_directory');?>/img/tuboenlamina.png",
		                        "imgsrc:<?php echo get_bloginfo('template_directory');?>/img/laminasdeacero.png"]);
		        createTabHandler(n.navItems[0].navItem,"productosnav","tuboscuadrados");
		        createTabHandler(n.navItems[1].navItem,"productosnav","tubosrectangulares");
		        createTabHandler(n.navItems[2].navItem,"productosnav","tubosfriocaliente");
		        createTabHandler(n.navItems[3].navItem,"productosnav","laminasfriocaliente")
		    };
        } else if (w>768 && w<=1280){
		    window.onload=function(){
		        var n=new wheelnav("indexDiv");
		        n.slicePathFunction=slicePath().metroacero;
		        n.sliceHoverAttr = { stroke: '#36a7c9', 'stroke-width': 2 };
		        n.lineHoverAttr = { stroke: '#36a7c9', 'stroke-width': 2 };
		        n.sliceSelectedAttr = { stroke: '#36a7c9', 'stroke-width': 4 };
		        n.lineSelectedAttr = { stroke: '#36a7c9', 'stroke-width': 4 };
		        n.titleWidth=160;
		        n.animatetime = 700;
				n.navAngle = 90;
		        n.animateeffect = 'linear';
		        n.colors = colorpalette.metroacerocolores;
		        n.spreaderPathInAttr = { fill: '#FFF', 'stroke-width': 3, stroke: '#555' };
		        n.spreaderPathOutAttr = { fill: '#FFF', 'stroke-width': 3, stroke: '#FFF' };
		        n.spreaderTitleInAttr = { fill: '#555' };
		        n.spreaderTitleOutAttr = { fill: '#555' };
				n.slicePathAttr = { stroke: '#fff', 'stroke-width': 9 };
				n.linePathAttr = { stroke: '#fff', 'stroke-width': 9 };
		        n.createWheel(["imgsrc:<?php echo get_bloginfo('template_directory');?>/img/tubocuadrado.png",
		                        "imgsrc:<?php echo get_bloginfo('template_directory');?>/img/tuborectangular.png",
		                        "imgsrc:<?php echo get_bloginfo('template_directory');?>/img/tuboenlamina.png",
		                        "imgsrc:<?php echo get_bloginfo('template_directory');?>/img/laminasdeacero.png"]);
		        createTabHandler(n.navItems[0].navItem,"productosnav","tuboscuadrados");
		        createTabHandler(n.navItems[1].navItem,"productosnav","tubosrectangulares");
		        createTabHandler(n.navItems[2].navItem,"productosnav","tubosfriocaliente");
		        createTabHandler(n.navItems[3].navItem,"productosnav","laminasfriocaliente")
		    };
        } else if (w>560 && w<=768) {
              window.onload=function(){
		        var n=new wheelnav("indexDiv");
		        n.slicePathFunction=slicePath().metroacero;
		        n.sliceHoverAttr = { stroke: '#36a7c9', 'stroke-width': 2 };
		        n.lineHoverAttr = { stroke: '#36a7c9', 'stroke-width': 2 };
		        n.sliceSelectedAttr = { stroke: '#36a7c9', 'stroke-width': 4 };
		        n.lineSelectedAttr = { stroke: '#36a7c9', 'stroke-width': 4 };
		        n.titleWidth=130;
		        n.animatetime = 700;
				n.navAngle = 90;
		        n.animateeffect = 'linear';
		        n.colors = colorpalette.metroacerocolores;
		        n.spreaderPathInAttr = { fill: '#FFF', 'stroke-width': 3, stroke: '#555' };
		        n.spreaderPathOutAttr = { fill: '#FFF', 'stroke-width': 3, stroke: '#FFF' };
		        n.spreaderTitleInAttr = { fill: '#555' };
		        n.spreaderTitleOutAttr = { fill: '#555' };
				n.slicePathAttr = { stroke: '#fff', 'stroke-width': 3 };
				n.linePathAttr = { stroke: '#fff', 'stroke-width': 3 };
		        n.createWheel(["imgsrc:<?php echo get_bloginfo('template_directory');?>/img/tubocuadrado.png",
		                        "imgsrc:<?php echo get_bloginfo('template_directory');?>/img/tuborectangular.png",
		                        "imgsrc:<?php echo get_bloginfo('template_directory');?>/img/tuboenlamina.png",
		                        "imgsrc:<?php echo get_bloginfo('template_directory');?>/img/laminasdeacero.png"]);
		        createTabHandler(n.navItems[0].navItem,"productosnav","tuboscuadrados");
		        createTabHandler(n.navItems[1].navItem,"productosnav","tubosrectangulares");
		        createTabHandler(n.navItems[2].navItem,"productosnav","tubosfriocaliente");
		        createTabHandler(n.navItems[3].navItem,"productosnav","laminasfriocaliente")
		    };
        } else if (w>414 && w<560) {
              window.onload=function(){
		        var n=new wheelnav("indexDiv");
		        n.slicePathFunction=slicePath().metroacero;
		        n.sliceHoverAttr = { stroke: '#36a7c9', 'stroke-width': 2 };
		        n.lineHoverAttr = { stroke: '#36a7c9', 'stroke-width': 2 };
		        n.sliceSelectedAttr = { stroke: '#36a7c9', 'stroke-width': 4 };
		        n.lineSelectedAttr = { stroke: '#36a7c9', 'stroke-width': 4 };
		        n.titleWidth=120;
		        n.animatetime = 700;
				n.navAngle = 90;
		        n.animateeffect = 'linear';
		        n.colors = colorpalette.metroacerocolores;
		        n.spreaderPathInAttr = { fill: '#FFF', 'stroke-width': 3, stroke: '#555' };
		        n.spreaderPathOutAttr = { fill: '#FFF', 'stroke-width': 3, stroke: '#FFF' };
		        n.spreaderTitleInAttr = { fill: '#555' };
		        n.spreaderTitleOutAttr = { fill: '#555' };
				n.slicePathAttr = { stroke: '#fff', 'stroke-width': 3 };
				n.linePathAttr = { stroke: '#fff', 'stroke-width': 3 };
		        n.createWheel(["imgsrc:<?php echo get_bloginfo('template_directory');?>/img/tubocuadrado.png",
		                        "imgsrc:<?php echo get_bloginfo('template_directory');?>/img/tuborectangular.png",
		                        "imgsrc:<?php echo get_bloginfo('template_directory');?>/img/tuboenlamina.png",
		                        "imgsrc:<?php echo get_bloginfo('template_directory');?>/img/laminasdeacero.png"]);
		        createTabHandler(n.navItems[0].navItem,"productosnav","tuboscuadrados");
		        createTabHandler(n.navItems[1].navItem,"productosnav","tubosrectangulares");
		        createTabHandler(n.navItems[2].navItem,"productosnav","tubosfriocaliente");
		        createTabHandler(n.navItems[3].navItem,"productosnav","laminasfriocaliente")
		    };
        } else if (w<=414) {
              window.onload=function(){
		        var n=new wheelnav("indexDiv");
		        n.slicePathFunction=slicePath().metroacero;
		        n.sliceHoverAttr = { stroke: '#36a7c9', 'stroke-width': 2 };
		        n.lineHoverAttr = { stroke: '#36a7c9', 'stroke-width': 2 };
		        n.sliceSelectedAttr = { stroke: '#36a7c9', 'stroke-width': 4 };
		        n.lineSelectedAttr = { stroke: '#36a7c9', 'stroke-width': 4 };
		        n.titleWidth=90;
		        n.animatetime = 700;
				n.navAngle = 90;
		        n.animateeffect = 'linear';
		        n.colors = colorpalette.metroacerocolores;
		        n.spreaderPathInAttr = { fill: '#FFF', 'stroke-width': 3, stroke: '#555' };
		        n.spreaderPathOutAttr = { fill: '#FFF', 'stroke-width': 3, stroke: '#FFF' };
		        n.spreaderTitleInAttr = { fill: '#555' };
		        n.spreaderTitleOutAttr = { fill: '#555' };
				n.slicePathAttr = { stroke: '#fff', 'stroke-width': 3 };
				n.linePathAttr = { stroke: '#fff', 'stroke-width': 3 };
		        n.createWheel(["imgsrc:<?php echo get_bloginfo('template_directory');?>/img/tubocuadrado.png",
		                        "imgsrc:<?php echo get_bloginfo('template_directory');?>/img/tuborectangular.png",
		                        "imgsrc:<?php echo get_bloginfo('template_directory');?>/img/tuboenlamina.png",
		                        "imgsrc:<?php echo get_bloginfo('template_directory');?>/img/laminasdeacero.png"]);
		        createTabHandler(n.navItems[0].navItem,"productosnav","tuboscuadrados");
		        createTabHandler(n.navItems[1].navItem,"productosnav","tubosrectangulares");
		        createTabHandler(n.navItems[2].navItem,"productosnav","tubosfriocaliente");
		        createTabHandler(n.navItems[3].navItem,"productosnav","laminasfriocaliente")
		    };
        }
    }
    checkWidth();
});
</script>
<script>
	createTabHandler=function(n,t,i){
        n.mousedown(function(){
            jQuery("#"+t+' a[href="#'+i+'"]').tab("show")})};
</script>
<section class="paginaempresa">
	<div class="clearfix paddingbot50"></div>
	<div class="text-center">
		<h2 class="letranaranja hvr-underline-from-center">Productos</h2>
	</div>
	<div class="fondoblanco margin50">
		<div class="row ruedaproductos">
                <div id="indexDiv"></div>
        </div>
    </div>
        <ul class="nav nav-tabs" id="productosnav" hidden="hidden">
            <li class="active"><a href="#tuboscuadrados" data-toggle="tab">Tubos Cuadrados</a></li>
            <li><a href="#tubosrectangulares" data-toggle="tab">Tubos Rectangulares</a></li>
            <li><a href="#tubosfriocaliente" data-toggle="tab">Tubos de Láminas en Frío/Caliente</a></li>
            <li><a href="#laminasfriocaliente" data-toggle="tab">Láminas de acero en Frío/Caliente</a></li>
        </ul>
        <div class="container">
			<div class="col-md-12">
		        <div class="tab-content">
		            <div class="tab-pane fade in active" id="tuboscuadrados">
				        <?php $args=array('post_status' => 'publish', 'order' => 'ASC', 'category_name'=>'productos', 'tax_query' => array( array(  'taxonomy' => 'post_tag', 'field' => 'slug', 'terms' => 'tubos-cuadrados' ) )); $my_query = new WP_Query($args);
			            if( $my_query->have_posts() ) {
			              while ($my_query->have_posts()) : $my_query->the_post();
			                $categories = get_the_category(); $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
			                $id = get_the_ID();
			                global $dynamic_featured_image;
			   				$nth_image = $dynamic_featured_image -> get_all_featured_images( $id );?>
			       					<div class="row wow fadeIn" data-wow-delay="0.2s">
											<div class="col-md-12">
												<h3 class="letranaranja  hvr-underline-from-center"><?php echo get_the_title(); ?></h3>
												<img src="<?php echo $nth_image[0]['full'];?>" class="img-responsive hvr-glow">
											</div>
					                      	<div class="col-md-12">
												<?php the_content(); ?>
											</div>
									</div>
						<div class="clearfix paddingbot50"></div>
			              <?php endwhile; }  wp_reset_query(); ?>
		            </div>
		            <div class="tab-pane fade" id="tubosrectangulares">
				        <?php $args=array('post_status' => 'publish', 'order' => 'ASC', 'category_name'=>'productos', 'tax_query' => array( array(  'taxonomy' => 'post_tag', 'field' => 'slug', 'terms' => 'tubos-rectangulares' ) )); $my_query = new WP_Query($args);
			            if( $my_query->have_posts() ) {
			              while ($my_query->have_posts()) : $my_query->the_post();
			                $categories = get_the_category(); $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
			                $id = get_the_ID();
			                global $dynamic_featured_image;
			   				$nth_image = $dynamic_featured_image -> get_all_featured_images( $id ); ?>
			       					<div class="row wow fadeIn" data-wow-delay="0.2s">
											<div class="col-md-12">
												<h3 class="letranaranja  hvr-underline-from-center"><?php echo get_the_title(); ?></h3>
												<img src="<?php echo $nth_image[0]['full'];?>" class="img-responsive hvr-glow">
											</div>
					                      	<div class="col-md-12">
												<?php the_content(); ?>
											</div>
									</div>
						<div class="clearfix paddingbot50"></div>
			              <?php endwhile; }  wp_reset_query(); ?>
		            </div>
		            <div class="tab-pane fade" id="tubosfriocaliente">
				        <?php $args=array('post_status' => 'publish', 'order' => 'ASC', 'category_name'=>'productos', 'tax_query' => array( array(  'taxonomy' => 'post_tag', 'field' => 'slug', 'terms' => 'tubos-de-lamina-en-friocaliente' ) )); $my_query = new WP_Query($args);
			            if( $my_query->have_posts() ) {
			              while ($my_query->have_posts()) : $my_query->the_post();
			                $categories = get_the_category(); $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
			                $id = get_the_ID();
			                global $dynamic_featured_image;
			   				$nth_image = $dynamic_featured_image -> get_all_featured_images( $id ); ?>
			       					<div class="row wow fadeIn" data-wow-delay="0.2s">
											<div class="col-md-12">
												<h3 class="letranaranja  hvr-underline-from-center"><?php echo get_the_title(); ?></h3>
												<img src="<?php echo $nth_image[0]['full'];?>" class="img-responsive hvr-glow">
											</div>
					                      	<div class="col-md-12">
												<?php the_content(); ?>
											</div>
									</div>
						<div class="clearfix paddingbot50"></div>
			              <?php endwhile; }  wp_reset_query(); ?>
		            </div>
		            <div class="tab-pane fade" id="laminasfriocaliente">
				        <?php $args=array('post_status' => 'publish', 'order' => 'ASC', 'category_name'=>'productos', 'tax_query' => array( array(  'taxonomy' => 'post_tag', 'field' => 'slug', 'terms' => 'laminas-de-acero-en-friocaliente' ) )); $my_query = new WP_Query($args);
			            if( $my_query->have_posts() ) {
			              while ($my_query->have_posts()) : $my_query->the_post();
			                $categories = get_the_category(); $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
			                $id = get_the_ID();
			                global $dynamic_featured_image;
			   				$nth_image = $dynamic_featured_image -> get_all_featured_images( $id ); ?>
			       					<div class="row wow fadeIn" data-wow-delay="0.2s">
											<div class="col-md-12">
												<h3 class="letranaranja  hvr-underline-from-center"><?php echo get_the_title(); ?></h3>
												<img src="<?php echo $nth_image[0]['full'];?>" class="img-responsive hvr-glow">
											</div>
					                      	<div class="col-md-12">
												<?php the_content(); ?>
											</div>
									</div>
						<div class="clearfix paddingbot50"></div>
			              <?php endwhile; }  wp_reset_query(); ?>
		            </div>
				</div>
		    </div>
        </div>
</section>
<?php get_footer(); ?>