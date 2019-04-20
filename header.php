<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.80">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Klackevolution</title>

    <?php wp_head(); ?>

</head>
<body>

<header class="site-header ">
    <div class="contenido contenedor clearfix">
        <?php
         $args = array(
         'theme-location' => 'header-menu',
         'container' => 'nav',
         'container_class' => 'menu-sitio'

         );

         wp_nav_menu($args);
        ?>
       <!-- Logo -->
    <div class="logo">
        <a href="<?php echo esc_url( home_url('/')); ?>">
           <img class="logotipo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" >
        </a>
    </div>

    <div class="menu-movil ">
        <span></span>
        <span></span>
        <span></span>
    </div>

        <nav class="plataformas">
            <ul>
                <li><a href=""><i class="fab fa-spotify"></i> spotify</a></li>
                <li><a href=""><i class="fab fa-youtube"></i> Youtube</a></li>
                <li><a href="https://soundcloud.com/dj_klack" target="_blank"><i class="fab fa-soundcloud"></i> Soundcloud</a></li>
                
            </ul>
        </nav>

        

    </div><!-- contenedor -->
</header> 