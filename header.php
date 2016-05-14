<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <title> Metroacero</title>
		<?php wp_head(); ?>
		<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory');?>/img/favicon.ico">
        <link href='https://fonts.googleapis.com/css?family=Poppins:400|Ubuntu+Condensed' rel='stylesheet' type='text/css'>
	</head>
	<body style="overflow-x: hidden;" ng-app="contactApp">
        <?php include_once("analyticstracking.php") ?>
	<center>
		<a href="http://metroacero.com/"><img src="<?php echo get_bloginfo('template_directory');?>/img/logo.png" class="img-responsive logoprincipal hvr-bob"></a>
	</center>
    <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                      
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php  wp_nav_menu(array( 'theme_location' => 'principal', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new Bootstrap_Walker_Nav_Menu() ) ); ?>
                    </div>
        </nav>
        <ul id="ticker01">
            <?php $args=array('post_status' => 'publish', 'order' => 'DESC', 'category_name'=>'noticias'); $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                  while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <li><span><?php echo get_the_date(); ?></span><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></li>
            <?php endwhile; }  wp_reset_query(); ?>
        </ul>
    <div class="social">
        <ul>
            <li><a href="#" target="_blank" class="fa fa-facebook fa-lg"></a></li>
            <li><a href="#" target="_blank" class="fa fa-instagram fa-lg"></a></li>
            <li><a href="#" target="_blank" class="fa fa-twitter fa-lg"></a></li>
            <li><a href="#" target="_blank" class="fa fa-youtube fa-lg"></a></li>
            <li><a href="#" class="fa fa-envelope fa-lg"></a></li>
        </ul>
    </div>