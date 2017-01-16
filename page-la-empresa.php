<?php get_header(); $x=0; ?>
    <div class="tab-empresa z-depth-2">
        <div class="fondogris">
            <div class="container">
                <ul class="tabs fondogris center-align tabs-empresa">
                    <li class="tab"><a class="active" href="#nosotros">NOSOTROS</a></li>
                    <li class="tab"><a href="#vmyv">VISIÓN MISIÓN & VALORES</a></li>
                    <li class="tab"><a href="#cys">PROCESO PRODUCTIVO</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="parallax-container">
        <div class=parallax> <img src=<?php echo get_bloginfo('template_directory');?>/img/cover2.jpg> </div>
            <div class="banner-gradient"></div>
    </div>

    <div id="nosotros" class="col s12">
        <div class="container">
            <!--<div class="row marginbot0">
                <h2 class="letranaranja bold">NOSOTROS</h2>
            </div>-->
            <div class="row">
                <?php
                $x=0;
                $args=array('post_status' => 'publish', 'posts_per_page' => 8, 'order' => 'ASC', 'post_type'=>'post', 'category_name'=>'la-empresa', 'tax_query' => array( array( 'taxonomy' => 'tema', 'field' => 'slug', 'terms' => 'nosotros' ) ) );
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
                        for($y=0; $y<$num; $y++){ 
                            ${'foto'.$x}=$nth_image[$y]['full'];
                            ${'titulo'.$x}=$noticia;
                            $x++;
                        } ?>
                        <div class="col-xs-12 margintop25">
                            <h2 class="letranaranja margintop0"><?php echo get_the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
                <?php endwhile; }  wp_reset_query(); ?>
            </div>
        </div>
        <div class="container paddingbot25">
            <?php
                for($y=0; $x>$y; $y++){ ?>
                    <div class="col-xs-6 col-sm-4 col-md-3 margintop25">
                        <div class="p100x300 z-depth-1 hoverable">
                            <img src="<?php echo ${'foto'.$y}; ?>" class="galeria-cuadrada materialboxed" data-caption="<?php echo ${'titulo'.$y}; ?>" >
                            <span class="foto-rec"><a href="#"><?php echo ${'titulo'.$y}; ?></a></span>   
                        </div>
                    </div>
                <?php }
            ?>
        </div>
    </div>
    <div id="vmyv" class="col s12">
        <div class="container">
            <!--<div class="row marginbot0">
                <h2 class="letranaranja bold">VISIÓN MISIÓN & VALORES</h2>
            </div>-->
            <div class="row">
                <?php
                $x=0;
                $args=array('post_status' => 'publish', 'posts_per_page' => -1, 'order' => 'ASC', 'post_type'=>'post', 'category_name'=>'la-empresa', 'tax_query' => array( array( 'taxonomy' => 'tema', 'field' => 'slug', 'terms' => array('mision', 'vision') ) ) );
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
                        for($y=0; $y<$num; $y++){ 
                            ${'foto'.$x}=$nth_image[$y]['full'];
                            ${'titulo'.$x}=$noticia;
                            $x++;
                        }  ?>
                        <div class="col-xs-12 col-sm-6 margintop25">
                            <h2 class="letranaranja margintop0"><?php echo get_the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
                <?php endwhile; }  wp_reset_query(); ?>
            </div>
            <div class="row">
                <?php $args=array('post_status' => 'publish', 'posts_per_page' => -1, 'order' => 'ASC', 'post_type'=>'post', 'category_name'=>'la-empresa', 'tax_query' => array( array( 'taxonomy' => 'tema', 'field' => 'slug', 'terms' => array('valores') ) ) );
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
                        for($y=0; $y<$num; $y++){ 
                            ${'foto'.$x}=$nth_image[$y]['full'];
                            ${'titulo'.$x}=$noticia;
                            $x++;
                        }  ?>
                        <div class="col-xs-12 margintop25">
                            <h2 class="letranaranja margintop0"><?php echo get_the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
                <?php endwhile; }  wp_reset_query(); ?>
            </div>
            <div class="container paddingbot25">
                <?php
                    for($y=0; $x>$y; $y++){ ?>
                        <div class="col-xs-6 col-sm-4 col-md-3 margintop25">
                            <div class="p100x300 z-depth-1 hoverable">
                                <img src="<?php echo ${'foto'.$y}; ?>" class="galeria-cuadrada materialboxed" data-caption="<?php echo ${'titulo'.$y}; ?>" >
                                <span class="foto-rec"><a href="#"><?php echo ${'titulo'.$y}; ?></a></span>   
                            </div>
                        </div>
                    <?php }
                ?>
            </div>
        </div>
    </div>
    <div id="cys" class="col s12">
        <div class="container">
            <<div class="row marginbot0">
                <h2 class="letranaranja">PROCESO PRODUCTIVO</h2>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <img src=<?php echo get_bloginfo('template_directory');?>/img/ProcesoProductivo.jpg class="responsive-img  materialboxed">
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>