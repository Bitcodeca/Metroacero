<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <!-- Chrome, Firefox OS, Opera and Vivaldi -->
        <meta name="theme-color" content="#FE5E00">
        <!-- Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#FE5E00">
        <!-- iOS Safari -->
        <meta name="apple-mobile-web-app-status-bar-style" content="#FE5E00">
		<title>Metroacero de Venezuela C.A</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins" rel="stylesheet">
		<link rel="icon" type="image/x-icon" href="<?php echo get_bloginfo('template_directory');?>/img/favicon/favicon.ico" />
		<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory');?>/img/favicon/favicon.png" />
		<link rel="icon" type="image/gif" href="<?php echo get_bloginfo('template_directory');?>/img/favicon/favicon.gif" />
		<?php wp_head(); ?>
        
    <style>
        #load_screen { position: fixed; top: 0; width: 100%; height: 100%; background: #fff; z-index: 1000 }
        #loading { position: relative; top: 50%; -ms-transform: translate(0%, -50%); -webkit-transform: translate(0%, -50%); transform: translate(0%, -50%) }
        .alinear { position: relative; -ms-transform: translate(-50%, -50%); -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%); left: 50%; width: 80%; max-width: 768px; }
        .progress { background-color: #eee; }
        .progress .indeterminate { background-color: #FE5E00; }
    </style>
    <script>
        y = 0;
        function x() { 
            var a = document.getElementById("load_screen"); jQuery(a).fadeOut("fast", function () { document.body.removeChild(a) }); y++;
        }
        func_x = setTimeout(x, 3000);
        jQuery(window).load(function () {
            if (y === 0) { clearTimeout(func_x); x(); }
        });
    </script>
	</head>
    <body ng-app="contactApp">
    <?php include_once("analyticstracking.php") ?>
        <div id=load_screen>
            <div id=loading>
                <div class=alinear>
                    <div class="progress">
                      <div class="indeterminate"></div>
                  </div>
                </div>
            </div>
        </div>
			<header>
                
                <ul id="ticker01">
                    <?php $args=array('post_status' => 'publish', 'posts_per_page' => -1, 'order' => 'DESC', 'post_type'=>'post', 'category_name'=>'noticias'); $my_query = new WP_Query($args);
                    if( $my_query->have_posts() ) {
                        while ($my_query->have_posts()) : 
                            $my_query->the_post();
                            $id = get_the_ID(); ?>
                            <li><span><?php echo get_the_date(); ?></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?php endwhile; }  wp_reset_query(); ?>
                </ul>
				<div class="">
                    <div class="container margintop10 marginbot25 left-align logotop">
                        <a href="#!" class="logoxl">
                            <img src="<?php echo get_bloginfo('template_directory');?>/img/logo.svg" class="responsive-img">
                        </a>
                    </div>
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<div class="container">
                            <a href="#!" class="center brand-logo" >
                                <img src="<?php echo get_bloginfo('template_directory');?>/img/logoinv.svg" class="responsive-img">
                            </a>
	   						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                            
                            <?php  wp_nav_menu( array( 'theme_location' => 'admin', 
                                'menu_id' => 'nav-mobile', 
                                'menu_class' => 'left hide-on-med-and-down navscroll', 
                                'walker' => new Materialize_Walker_Desktop_Nav_Menu() ) 
                                ); ?> 
                            <ul class="right hide-on-med-and-down navbar-redes">
                                <li><a href="https://www.instagram.com/metroacerove/" target="_blank">
                                    <img class="responsive-img" src="<?php echo get_bloginfo('template_directory');?>/img/Instagram-50.svg" width="28" height="28">
                                </a></li>
                                <li><a href="https://www.facebook.com/metroacerove/" target="_blank">
                                    <img class="responsive-img" src="<?php echo get_bloginfo('template_directory');?>/img/Facebook-50.svg" width="26" height="26">
                                </a></li>
                                <li><a href="https://twitter.com/Metroacerove" target="_blank">
                                    <img class="responsive-img" src="<?php echo get_bloginfo('template_directory');?>/img/Twitter-50.svg" width="28" height="28">
                                </a></li>
                                <li><a href="https://www.youtube.com/channel/UC34QAPmLp-CeDnDJBJDGsrg" target="_blank">
                                    <img class="icon icons8-YouTube-Play" src="<?php echo get_bloginfo('template_directory');?>/img/YouTube Play-50.svg" width="30" height="30">
                                </a></li>
                            </ul>
                            
                            <?php  wp_nav_menu( array( 'theme_location' => 'user', 
                                'menu_id' => 'mobile-demo', 
                                'menu_class' => 'side-nav', 
                                'walker' => new Materialize_Walker_Desktop_Nav_Menu() ) 
                                ); ?>
						</div>
					</nav>
				</div>
				</header>
		<main>