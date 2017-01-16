<?php get_header(); ?>
    <div class="tab-empresa">
        
        <div class="parallax-container">
            <div class=parallax> <img src=<?php echo get_bloginfo('template_directory');?>/img/cover.jpg> </div>
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
                <h2 class="letranaranja marginbot10 bold">Noticias recientes</h2>
            </div>
            <div class="row marginbot0">
                <?php $args=array('post_status' => 'publish', 'posts_per_page' => -1, 'order' => 'DESC', 'post_type'=>'post', 'category_name'=>'noticias'); $my_query = new WP_Query($args);
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
                <div class="filters button-group filters-button-group">
                    <a href="javascript:void(0);" class="waves-effect waves-light galeria-a is-checked"  data-filter="*">TODOS</a>
                    <?php foreach($temas as $tema){ 
                        $string = preg_replace('#[ /-]+#', '-', $tema);
                        echo '<a href="javascript:void(0);" class="waves-effect waves-light button galeria-a" data-filter="'.$string.'">'.$tema.'</a>';
                     } ?>
                </div>
            </div>
        </div>
        <hr />
        <div class="container" id="Container">
            <div class="row grid isotope">
                    <?php $args=array('post_status' => 'publish', 'posts_per_page' => -1, 'order' => 'DESC', 'post_type'=>'post', 'category_name'=>'noticias'); $my_query = new WP_Query($args);
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
                            $string = preg_replace('#[ /-]+#', '-', $noticia);
                            if($x<=1){ ?>
                                <div class="grid-item grid-item--width2 ini-noticias" data-filter="<?php echo $string; ?>">
                            <?php } else { ?>
                                <div class="grid-item ini-noticias" data-filter="<?php echo $string; ?>">
                            <?php } ?>

                                    <h5><a href="#"><?php echo $noticia; ?></a></h5>
                                    <div class="p100x300 hoverable z-depth-1">
                                        <a href="<?php the_permalink(); ?>" class="ini-noticias-a" id="<?php echo $x; ?>">
                                            <div class="picture-gradient"></div>
                                            <img src="<?php echo $nth_image[0]['full']; ?>" class="responsive-img" >
                                        </a>
                                        <span class="foto-rec"><a href="#"><?php echo $noticia; ?></a></span>
                                    </div>
                                    <p><i class="material-icons small">access_time</i> <?php the_time('F j, Y'); ?></p>
                                    <a class="letranegra" href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                                </div>

                    <?php $x++; endwhile; }  wp_reset_query(); ?>
            </div>
                <div class="clearfix"></div>
        </div>
    </div>

<?php get_footer(); ?>
    <script>
        jQuery(document).ready(function(){
            var itemSelector = '.grid-item'; 
            var $container = jQuery('.grid').isotope({
                    itemSelector: '.grid-item',
                    layoutMode: 'fitRows',
                    percentPosition: true
                }); 
            //Ascending order
            var responsiveIsotope = [
                [480, 4],
                [720, 6]
            ]; 
            var itemsPerPageDefault = 10;
            var itemsPerPage = defineItemsPerPage();
            var currentNumberPages = 1;
            var currentPage = 1;
            var currentFilter = '*';
            var filterAtribute = 'data-filter';
            var pageAtribute = 'data-page';
            var pagerClass = 'isotope-pager'; 
            function changeFilter(selector) {
                $container.isotope({
                    filter: selector
                });
            } 
            function goToPage(n) {
                currentPage = n; 
                var selector = itemSelector;
                    selector += ( currentFilter != '*' ) ? '['+filterAtribute+'="'+currentFilter+'"]' : '';
                    selector += '['+pageAtribute+'="'+currentPage+'"]'; 
                changeFilter(selector);
            } 
            function defineItemsPerPage() {
                var pages = itemsPerPageDefault; 
                for( var i = 0; i < responsiveIsotope.length; i++ ) {
                    if( jQuery(window).width() <= responsiveIsotope[i][0] ) {
                        pages = responsiveIsotope[i][1];
                        break;
                    } 
                } 
                return pages;
            }

            function setPagination() { 
                var SettingsPagesOnItems = function(){ 
                    var itemsLength = $container.children(itemSelector).length; 
                    var pages = Math.ceil(itemsLength / itemsPerPage);
                    var item = 1;
                    var page = 1;
                    var selector = itemSelector;
                        selector += ( currentFilter != '*' ) ? '['+filterAtribute+'="'+currentFilter+'"]' : ''; 
                    $container.children(selector).each(function(){
                        if( item > itemsPerPage ) {
                            page++;
                            item = 1;
                        }
                        jQuery(this).attr(pageAtribute, page);
                        item++;
                    }); 
                    currentNumberPages = page; 
                }();

                var CreatePagers = function() { 
                    var $isotopePager = ( jQuery('.'+pagerClass).length == 0 ) ? jQuery('<div class="'+pagerClass+'"></div>') : jQuery('.'+pagerClass); 
                    $isotopePager.html(''); 
                    for( var i = 0; i < currentNumberPages; i++ ) {
                        var $pager = jQuery('<a href="javascript:void(0);" class="pager" '+pageAtribute+'="'+(i+1)+'"></a>');
                            $pager.html(i+1); 
                            $pager.click(function(){
                                var page = jQuery(this).eq(0).attr(pageAtribute);
                                goToPage(page);
                            }); 
                        $pager.appendTo($isotopePager);
                    } 
                    $container.after($isotopePager); 
                }(); 
            } 
            setPagination();
            goToPage(1); 
            //Adicionando Event de Click para as categorias
            jQuery('.filters a').click(function(){
                var filter = jQuery(this).attr(filterAtribute);
                jQuery(".filters a").removeClass( "is-checked" );
                jQuery(this).addClass( "is-checked" );
                currentFilter = filter; 
                setPagination();
                goToPage(1); 
            }); 
            //Evento Responsivo
            jQuery(window).resize(function(){
                itemsPerPage = defineItemsPerPage();
                setPagination();
                goToPage(1);
            });

        });   
    </script>
        