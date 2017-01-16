<?php get_header(); $x=0; ?>
    <div class="tab-empresa">
        
        <div class="parallax-container">
            <div class=parallax> <img src=<?php echo get_bloginfo('template_directory');?>/img/cover2.jpg> </div>
        </div>
        
        <div class="fondogris">
            <div class="container">
                <div class="row marginbot0">
                    <h3 class="letranaranja center-align" style="margin: 12px 0 7px 0;">COMPROMETIDOS CON VENEZUELA</h3>
                </div>
            </div>
        </div>
        
        <div class="container paddingbot50">
            <div class="row">
                <?php if( have_posts() ): while( have_posts() ): the_post(); 
                    $id = get_the_ID();
                    $grupoarray = get_the_terms( $post->ID , 'tema' ); 
                    $noticia=$grupoarray[0]->name; 
                    global $dynamic_featured_image;
                    $nth_image = $dynamic_featured_image -> get_all_featured_images( $id );?>
                    <div class="row">
                        <div class="paddingtop50">
                            <p class="marginbot0"><i class="material-icons small">access_time</i> <?php the_time('F j, Y'); ?></p>
                            <?php the_title('<h1 class="letranaranja">','</h1>' ); ?>
                            <div class="col-xs-12 col-md-6 col-md-6">
                                <p><?php echo $noticia; ?></p>
                                <?php the_content(); ?>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="grid">
                                    <?php foreach($nth_image as $imagen){ ?>
                                    <div class="grid-item grid-noticia">
                                        <img src="<?php echo $imagen['full'];?>" class="responsive-img z-depth-1 hoverable materialboxed" data-caption="<?php echo get_the_title(); ?>">
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
<script src="<?php echo get_bloginfo('template_directory');?>/js/layout-masonry.js"></script>
<script>
        jQuery(document).ready(function(){
                jQuery('.grid').isotope({
                    itemSelector: '.grid-item',
                    layoutMode: 'masonry'
                }); 
        });
</script>