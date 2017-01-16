<?php get_header(); ?>
    <!--<div class="inicio-video z-depth-2">
        <video class="responsive-video" autoplay muted loop>
            <source src="<?php //echo get_bloginfo('template_directory');?>/img/VIDEO%20METROACERO.mp4" type="video/mp4">
        </video>
    </div>-->
    <div class="ini-slider-bg">
        <div class="slider">
            <ul class="slides">
              <li>
                <img src="<?php echo get_bloginfo('template_directory');?>/img/cover.jpg"> <!-- random image -->
                <!--<div class="caption center-align valign-wrapper">
                    <div class="col-xs-12">
                        <img src="<?php //echo get_bloginfo('template_directory');?>/img/slogan.png" class="ini-slider ini-slider-mid ini-slogan valign">
                    </div>
                </div>-->
              </li>
              <li>
                <img src="<?php echo get_bloginfo('template_directory');?>/img/cover2.jpg">
                <!--<div class="caption left-align valign-wrapper">
                    <div class="col-xs-12 col-sm-6">
                        <h1 class="right-align valign bold">Nuestro talento humano es el motor </h1>
                        <h1 class="right-align valign bold">que nos impulsa a seguir trabajando por el país</h1>
                    </div>
                    <div class="col-xs-12 col-sm-6 valign">
                        <img src="<?php //echo get_bloginfo('template_directory');?>/img/s2.png" class="ini-slider ini-slider-izq">
                    </div>
                </div>-->
              </li>
              <li>
                <img src="<?php echo get_bloginfo('template_directory');?>/img/cover3.jpg">
                <!--<div class="caption right-align valign-wrapper">
                    <div class="col-xs-12 col-sm-6 valign">
                        <img src="<?php //echo get_bloginfo('template_directory');?>/img/s1.png" class="ini-slider ini-slider-der">
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h1 class="left-align valign bold">Nuestro talento humano es el motor
                            <br>que nos impulsa a seguir trabajando por el país</h1>
                    </div>
                </div>-->
              </li>
            </ul>
        </div>
    </div>
    <div class="fondogris">
        <div class="container">
            <div class="row marginbot0">
                <h3 class="letranaranja center-align" style="margin: 12px 0 7px 0;">COMPROMETIDOS CON VENEZUELA</h3>
            </div>
        </div>
    </div>

   <div class="container paddingtop25">
        <div class="row marginbot0">
            <h2 class="letranaranja margintop0 marginbot0 bold wow fadeIn">Noticias recientes</h2>
        </div>
        <div class="clearfix"></div>
        <div class="row margintop25">
            <div class="carousel carousel-slider center" data-indicators="true">

                <?php
                $args=array('post_status' => 'publish', 'posts_per_page' => 4, 'order' => 'DESC', 'post_type'=>'post', 'category_name'=>'noticias');
                $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                    $x=0;
                    while ($my_query->have_posts()) :
                        $my_query->the_post();
                        $id = get_the_ID();
                        $grupoarray = get_the_terms( $post->ID , 'tema' ); 
                        $noticia=$grupoarray[0]->name; 
                        global $dynamic_featured_image;
                        $nth_image = $dynamic_featured_image -> get_all_featured_images( $id );
                        $num=count($nth_image);
                        ?>
                            <div class="carousel-item transparent white-text" href="#<?php echo $id; ?>!">
                                <div class="picture-gradient"></div>
                                <div class="metro-carousel-inner">
                                    <img src="<?php echo $nth_image[0]['full']; ?>" class="responsive-img" >
                                    <span class="foto-rec-slider"><a href="<?php the_permalink(); ?>"><?php echo $noticia; ?></a></span>
                                    <span class="foto-rec-slider-titulo"><a class="letranegra" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                                </div>
                            </div>
                                    
                        <?php 
                        $x++;
                    endwhile;
                }
                wp_reset_query();
                ?>

            </div>

        </div>
    </div>

    <div class="container">
        <div class="clearfix"></div>
        <div class="grid row">
                <?php
                $args=array('post_status' => 'publish', 'posts_per_page' => 1, 'order' => 'DESC', 'post_type'=>'post', 'category_name'=>'noticias', 'tax_query' => array( array(  'taxonomy' => 'tema', 'field' => 'slug', 'terms' => 'labor social' ) ));
                $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                    $x=0;
                    while ($my_query->have_posts()) :
                        $my_query->the_post();
                        $id = get_the_ID();
                        $grupoarray = get_the_terms( $post->ID , 'tema' ); 
                        $noticia=$grupoarray[0]->name; 
                        global $dynamic_featured_image;
                        $nth_image = $dynamic_featured_image -> get_all_featured_images( $id );
                        $num=count($nth_image);
                        ?>
                            <div class="grid-item margintop25 ini-noticias wow fadeIn">

                                <h5><a href="<?php the_permalink(); ?>"><?php echo $noticia; ?></a></h5>
                                <div class="p100x300 hoverable z-depth-1">
                                    <a href="<?php the_permalink(); ?>" class="ini-noticias-a" id="<?php echo $x; ?>">
                                        <div class="picture-gradient"></div>
                                        <img src="<?php echo $nth_image[0]['full']; ?>" class="responsive-img" >
                                    </a>
                                    <span class="foto-rec"><a href="<?php the_permalink(); ?>"><?php echo $noticia; ?></a></span>
                                </div>
                                <p><i class="material-icons small">access_time</i> <?php the_time('F j, Y'); ?></p>
                                <a class="letranegra" href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                            </div>

                <?php $x++; endwhile; }  wp_reset_query(); ?>
                <?php
                $args=array('post_status' => 'publish', 'posts_per_page' => 1, 'order' => 'DESC', 'post_type'=>'post', 'category_name'=>'noticias', 'tax_query' => array( array(  'taxonomy' => 'tema', 'field' => 'slug', 'terms' => 'deporte' ) ));
                $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                    while ($my_query->have_posts()) :
                        $my_query->the_post();
                        $id = get_the_ID();
                        $grupoarray = get_the_terms( $post->ID , 'tema' ); 
                        $noticia=$grupoarray[0]->name; 
                        global $dynamic_featured_image;
                        $nth_image = $dynamic_featured_image -> get_all_featured_images( $id );
                        $num=count($nth_image);
                        ?>
                            <div class="grid-item margintop25 ini-noticias wow fadeIn">

                                <h5><a href="<?php the_permalink(); ?>"><?php echo $noticia; ?></a></h5>
                                <div class="p100x300 hoverable z-depth-1">
                                    <a href="<?php the_permalink(); ?>" class="ini-noticias-a" id="<?php echo $x; ?>">
                                        <div class="picture-gradient"></div>
                                        <img src="<?php echo $nth_image[0]['full']; ?>" class="responsive-img" >
                                    </a>
                                    <span class="foto-rec"><a href="<?php the_permalink(); ?>"><?php echo $noticia; ?></a></span>
                                </div>
                                <p><i class="material-icons small">access_time</i> <?php the_time('F j, Y'); ?></p>
                                <a class="letranegra" href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                            </div>

                <?php $x++; endwhile; }  wp_reset_query(); ?>
                <?php
                $args=array('post_status' => 'publish', 'posts_per_page' => 1, 'order' => 'DESC', 'post_type'=>'post', 'category_name'=>'noticias', 'tax_query' => array( array(  'taxonomy' => 'tema', 'field' => 'slug', 'terms' => 'eventos' ) ));
                $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                    $x=0;
                    while ($my_query->have_posts()) :
                        $my_query->the_post();
                        $id = get_the_ID();
                        $grupoarray = get_the_terms( $post->ID , 'tema' ); 
                        $noticia=$grupoarray[0]->name; 
                        global $dynamic_featured_image;
                        $nth_image = $dynamic_featured_image -> get_all_featured_images( $id );
                        $num=count($nth_image);
                        ?>
                            <div class="grid-item margintop25 ini-noticias wow fadeIn">

                                <h5><a href="<?php the_permalink(); ?>"><?php echo $noticia; ?></a></h5>
                                <div class="p100x300 hoverable z-depth-1">
                                    <a href="<?php the_permalink(); ?>" class="ini-noticias-a" id="<?php echo $x; ?>">
                                        <div class="picture-gradient"></div>
                                        <img src="<?php echo $nth_image[0]['full']; ?>" class="responsive-img" >
                                    </a>
                                    <span class="foto-rec"><a href="<?php the_permalink(); ?>"><?php echo $noticia; ?></a></span>
                                </div>
                                <p><i class="material-icons small">access_time</i> <?php the_time('F j, Y'); ?></p>
                                <a class="letranegra" href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                            </div>

                <?php $x++; endwhile; }  wp_reset_query(); ?>
                <?php
                $args=array('post_status' => 'publish', 'posts_per_page' => 1, 'order' => 'DESC', 'post_type'=>'post', 'category_name'=>'noticias', 'tax_query' => array( array(  'taxonomy' => 'tema', 'field' => 'slug', 'terms' => 'metroacero' ) ));
                $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                    $x=0;
                    while ($my_query->have_posts()) :
                        $my_query->the_post();
                        $id = get_the_ID();
                        $grupoarray = get_the_terms( $post->ID , 'tema' ); 
                        $noticia=$grupoarray[0]->name; 
                        global $dynamic_featured_image;
                        $nth_image = $dynamic_featured_image -> get_all_featured_images( $id );
                        $num=count($nth_image);
                        ?>
                            <div class="grid-item margintop25 ini-noticias wow fadeIn">

                                <h5><a href="<?php the_permalink(); ?>"><?php echo $noticia; ?></a></h5>
                                <div class="p100x300 hoverable z-depth-1">
                                    <a href="<?php the_permalink(); ?>" class="ini-noticias-a" id="<?php echo $x; ?>">
                                        <div class="picture-gradient"></div>
                                        <img src="<?php echo $nth_image[0]['full']; ?>" class="responsive-img" >
                                    </a>
                                    <span class="foto-rec"><a href="<?php the_permalink(); ?>"><?php echo $noticia; ?></a></span>
                                </div>
                                <p><i class="material-icons small">access_time</i> <?php the_time('F j, Y'); ?></p>
                                <a class="letranegra" href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                            </div>

                <?php $x++; endwhile; }  wp_reset_query(); ?>
        </div>
    </div>
    <div class="fondogris">
        <div class="container paddingtop25 paddingbot25">
            <div class="row wow fadeIn">
                <h2 class="letranaranja marginbot10 bold">Galería</h2>
                <?php $args=array('post_status' => 'publish', 'posts_per_page' => 8, 'order' => 'DESC', 'post_type'=>'post', 'category_name'=>'galeria');
                $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                    while ($my_query->have_posts()) : 
                        $my_query->the_post();
                        $id = get_the_ID();
                        $grupoarray = get_the_terms( $post->ID , 'tema' ); 
                        $noticia=$grupoarray[0]->name; 
                        global $dynamic_featured_image;
                        $nth_image = $dynamic_featured_image -> get_all_featured_images( $id );
                        $num=count($nth_image); ?>
                        <div class="col-xs-6 col-sm-4 col-md-3 margintop25">
                            <div class="p100x300 z-depth-1 hoverable">
                                <img src="<?php echo $nth_image[0]['full']; ?>" class="galeria-cuadrada materialboxed" data-caption="<?php echo get_the_title(); ?>" >
                                <span class="foto-rec"><a href="#"><?php echo $noticia; ?></a></span>
                            </div>
                        </div>
                <?php endwhile; }  wp_reset_query(); ?>
            </div>
        </div>
    </div>
    <div class="container paddingtop25 paddingbot25"  id="prueba">
        <div class="row wow fadeIn">
            <h2 class="letranaranja marginbot10 bold">¡Trabaja con nosotros!</h2>
            <p class="margintop25">Metroacero cuenta con un plan de captación de talento, que  permite optar por oportunidades de empleo y aprendizaje en diversas aéreas de la organización.</p>
        </div>
    </div>
    <?php get_footer(); ?>
<script>
    jQuery(document).ready(function(){
        jQuery('.slider').slider({indicators:false, interval:4000});
        jQuery('.carousel.carousel-slider').carousel({full_width: true, time_constant: 300});
    });
</script>
<script>
    setInterval(function () { jQuery('.carousel.carousel-slider').carousel('next'); },5000);
</script>
<script>
    jQuery(document).ready(function(){
        var $grid = jQuery('.grid').isotope({
            itemSelector: '.grid-item',
            layoutMode: 'fitRows',
            percentPosition: true
        });
         // filter functions
        var filterFns = {
          // show if number is greater than 50
          numberGreaterThan50: function() {
            var number = jQuery(this).find('.number').text();
            return parseInt( number, 10 ) > 50;
          },
          // show if name ends with -ium
          ium: function() {
            var name = jQuery(this).find('.name').text();
            return name.match( /ium$/ );
          }
        };
        // bind filter button click
        jQuery('.filters-button-group').on( 'click', 'a', function() {
          var filterValue = jQuery( this ).attr('data-filter');
          // use filterFn if matches value
          filterValue = filterFns[ filterValue ] || filterValue;
          $grid.isotope({ filter: filterValue });
        });
        // change is-checked class on buttons
        jQuery('.button-group').each( function( i, buttonGroup ) {
          var $buttonGroup = jQuery( buttonGroup );
          $buttonGroup.on( 'click', 'a', function() {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            jQuery( this ).addClass('is-checked');
          });
        });
    });   
</script>