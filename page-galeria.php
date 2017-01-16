<?php get_header(); ?>
    <div class="tab-empresa">
        
        <div class="parallax-container">
            <div class=parallax> <img src=<?php echo get_bloginfo('template_directory');?>/img/cover2.jpg> </div>
            <div class="banner-gradient"></div>
        </div>
        
        <div class="fondogris">
            <div class="container">
                <div class="row marginbot0">
                    <h3 class="letranaranja center-align" style="margin: 12px 0 7px 0;">COMPROMETIDOS CON VENEZUELA</h3>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <h2 class="letranaranja marginbot10 bold">Galería</h2>
            </div>
            <div class="row marginbot0">
                <?php $args=array('post_status' => 'publish', 'posts_per_page' => -1, 'order' => 'DESC', 'post_type'=>'post', 'category_name'=>'galeria'); $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                    $temas=array();
                    while ($my_query->have_posts()) :
                        $my_query->the_post();
                        $id = get_the_ID();
                        $grupoarray = get_the_terms( $post->ID , 'tema' ); 
                        $noticia=$grupoarray[0]->name;
                        if (!in_array($noticia, $temas)) { array_push($temas, $noticia); }
                    endwhile;  
                }
                wp_reset_query(); ?>
                <form class="controls" id="Filters">
                    <a class="waves-effect waves-light filter galeria-a active"  data-filter="*">TODOS</a>
                    <?php foreach($temas as $tema){ 
                        $string = preg_replace('#[ /-]+#', '-', $tema);
                        echo '<a class="waves-effect waves-light filter galeria-a" data-filter=".'.$string.'">'.$tema.'</a>';
                     } ?>
                </form>
            </div>
        </div>
        <hr />
        <div class="container paddingbot25" id="Container">
            <div class="row">
                <?php $args=array('post_status' => 'publish', 'posts_per_page' => 12, 'order' => 'ASC', 'post_type'=>'post', 'category_name'=>'galeria');
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
                        $string = preg_replace('#[ /-]+#', '-', $noticia);
                        foreach($nth_image as $image){ ?>
                        <div class="col-xs-6 col-sm-4 col-md-3 mix <?php echo $string; ?> margintop25">
                            <div class="p100x300 z-depth-1 hoverable">
                                <img src="<?php echo $image['full']; ?>" class="galeria-cuadrada materialboxed" data-caption="<?php echo get_the_title(); ?>" >
                                <span class="foto-rec"><a href="#"><?php echo $noticia; ?></a></span>
                            </div>
                        </div>
                <?php } endwhile; }  wp_reset_query(); ?>
            </div>
            <div class="row">
                <div class="pager-list center-align marginbot25 margintop25"></div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <h2 class="letranaranja marginbot10 bold">Videos</h2>
            </div>
        </div>
        <hr />
        <div class="container paddingbot25" id="Container">
            <div class="row">
            </div>
        </div>
    </div>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        jQuery(function(){
            jQuery('#Container').mixItUp({
                animation: { duration: 200 },
                pagination: { limit: 12, loop: true, prevButtonHTML: '<a><h4>Anterior</h4></a>', nextButtonHTML: '<a ><h4>Siguiente</h4></a>' },
                selectors: { filter: '.filter',pagersWrapper: '.pager-list' }
            });
        });
    </script>
<?php get_footer(); ?>