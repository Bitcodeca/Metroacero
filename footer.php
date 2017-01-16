	
		</main>
	<footer>
        <div class="fondogris">
            <div class="container paddingtop25">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <h5>MAPA DEL SITIO</h5>
                        <?php  wp_nav_menu( array( 'theme_location' => 'user', 
                                'menu_id' => 'footer-nav', 
                                'menu_class' => '', 
                                'walker' => new Materialize_Walker_Desktop_Nav_Menu() ) 
                                ); ?>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <h5>SOCIAL MEDIA</h5>
                                <table style=width:100%>
                                    <tr>
                                        <th>
                                            <a href="https://www.instagram.com/metroacerove/" target="_blank"><img class="responsive-img rrss" src="<?php echo get_bloginfo('template_directory');?>/img/instagram.svg" width="36" height="36"></a>
                                        </th>
                                        <th>
                                            <a href="https://www.facebook.com/metroacerove/" target="_blank"><img class="responsive-img rrss" src="<?php echo get_bloginfo('template_directory');?>/img/facebook-01.svg" width="36" height="36"></a>
                                        </th>
                                        <th>
                                            <a href="https://twitter.com/Metroacerove" target="_blank"><img class="responsive-img rrss" src="<?php echo get_bloginfo('template_directory');?>/img/twitter.svg" width="36" height="36"></a>
                                        </th>
                                        <th>
                                            <a href="https://www.youtube.com/channel/UC34QAPmLp-CeDnDJBJDGsrg" target="_blank"><img class="responsive-img rrss" src="<?php echo get_bloginfo('template_directory');?>/img/youtube.svg" width="36" height="36"></a>
                                        </th>
                                    </tr>
                                </table>
                        <h5>EMPLEADOS Y SOCIOS</h5>
                        <table class="margintop25" style=width:100%>
                            <tr class="">
                                <th class="left-align footer-th"><a href="#" class="footer-links">Portal corporativo</a></th>
                            </tr>
                        </table>
                        <h5 class="margintop25">CLIENTES</h5>
                        
                        <table class="margintop25" style=width:100%>
                            <tr class="">
                                <th class="left-align footer-th"><a href="#" class="footer-links">Portal de clientes</a></th>
                            </tr>
                            <tr class="">
                                <th class="left-align footer-th"><a href="#" class="footer-links">Gestión comercial</a></th>
                            </tr>
                        </table>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <h5 class="margintop10">CONTACTO</h5>
                        <table style=width:100%>
                            <tr>
                                <th class="thfooter">
                                    <p>
                                        <i class="material-icons verticalalign">phone</i>
                                        TELÉFONO:
                                    </p>
                                </th>
                                <th style="padding-bottom: 0px; padding-top: 10px;">
                                    <table style="width:100%">
                                        <tr>
                                            <th style="padding-bottom: 5px; padding-top: 0px; width:90px">
                                                <p><b>Ventas </b></p>
                                            </th>
                                            <th style="padding-bottom: 5px; padding-top: 0px;">
                                                <p>0251-4172428</p>
                                                <p>0424-5790861</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th style="padding-bottom: 5px; padding-top: 0px; width:90px">
                                                <p><b>Compras </b></p>
                                            </th>
                                            <th style="padding-bottom: 5px; padding-top: 0px;">
                                                <p>0251-4172438</p>
                                            </th>
                                        </tr>
                                    </table>
                                </th>
                            </tr>
                            <tr>
                                <th class="thfooter">
                                    <p>
                                        <i class="material-icons verticalalign">location_on</i>
                                        UBICACIÓN:
                                    </p>
                                </th>
                                <th>
                                    <p>Zona industrial de Cabudare, Sector La Montañita, Cabudare - Edo. Lara.</p>
                                </th> 
                            </tr>
                            <tr>
                                <th class="thfooter">
                                    <p><i class="material-icons verticalalign">email</i> EMAIL:</p>
                                </th>
                                <th>
                                    <p>ventas@metroacero.com</p>
                                    <p>gerenciadeventas@metroacero.com</p>
                                </th> 
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
		<div class="footer grey darken-4">
            <div class="container-fluid">
                <div class="row marginbot0">
                    <div class="col-md-12">
                        <p class="copyright center-align small"> © 2016 Metroacero de Venezuela C.A. | RIF: J-40426759-0 | Todos los Derechos Reservados | Desarrollado por  <a href="http://bitcodeweb.com/" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/img/logobitcodeb.svg" height="20px" width="auto" class="verticalalignbottom" style="vertical-align: sub;"></a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


	<?php wp_footer(); ?>
	
        <script>
            new WOW().init();
        </script>
        <script>
             jQuery(document).ready(function(){
                jQuery(".button-collapse").sideNav();
                jQuery(".parallax").parallax();
                jQuery("ul#ticker01").liScroll();
                jQuery('ul.tabs').tabs();
                jQuery('nav').pushpin({ top: jQuery('nav').offset().top });
            });
        </script>
	</body>
</html>