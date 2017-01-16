<?php get_header(); $x=0; ?>
    <div class="tab-empresa">
        
        <div class="parallax-container">
            <div class=parallax> <img src=<?php echo get_bloginfo('template_directory');?>/img/cover3.jpg> </div>
            <div class="banner-gradient"></div>
        </div>
        
        <div class="fondogris">
            <div class="container">
                <div class="row marginbot0">
                    <h3 class="letranaranja center-align" style="margin: 12px 0 7px 0;">COMPROMETIDOS CON VENEZUELA</h3>
                </div>
            </div>
        </div>
        <div class="container paddingtop25 paddingbot25"  id="prueba">
            <div class="row wow fadeIn">
                <h2 class="letranaranja marginbot10 bold">¡Trabaja con nosotros!</h2>
                <p class="margintop25">Metroacero  cuenta con un plan de captación de talento, que  permite optar por oportunidades de empleo y aprendizaje</p>
                <p>Los Planes son:</p>
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                        <h5 class="center-align"><a class="waves-effect fondonaranja white-text btn-flat">Captación de Pasantes</a></h5>
                        <p>Captar estudiantes universitarios  a realizar pasantías regulares o tesis/proyectos industrial en las aérea claves y de mayor demanda de organización. Con el fin de  brindar  formación y desarrollo en conocimientos, destrezas y habilidades, aplicadas en el campo laboral de acuerdo a la carrera de estudio.</p>
                    </div>
                </div>
                <div class="row margintop25">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                        <h5 class="center-align"><a class="waves-effect fondonaranja white-text btn-flat">Captación de Técnicos y Jóvenes Profesionales</a></h5>
                        <p>Captar de técnicos y jóvenes recién graduados Con el fin de  brindar  formación y desarrollo en conocimientos, destrezas y habilidades, aplicadas en el campo laboral de acuerdo a la carrera de estudio.</p>
                    </div>
                </div>
                <div class="row margintop25">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                        <h5 class="center-align"><a class="waves-effect fondonaranja white-text btn-flat">Captación de Aprendices</a></h5>
                        <p>Captar  Aprendiz Ince con la finalidad de brindar formación y desarrollo en conocimientos cumpliendo con el Programa Nacional de Aprendizaje.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container paddingbot50">
            <div class="row">
                <?php $args=array('post_status' => 'publish', 'posts_per_page' => -1, 'order' => 'ASC', 'post_type'=>'post', 'category_name'=>'empleo' );
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
                        <div class="col-xs-12 margintop25">
                            <h2 class="letranaranja margintop0"><?php echo get_the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
                <?php endwhile; }  wp_reset_query(); ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>