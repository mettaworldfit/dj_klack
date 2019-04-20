<?php
/*
* Template Name: latest
*/

 get_header(); ?>

<?php while(have_posts()): the_post();?>

<div class="portada" style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>)">
    
</div>



<div id="djklack" class="contenedor">
    <h2>djklack website</h2>
   
</div>



<div id="shop" class="seccion contenedor">
    <h2>shop</h2>
</div>

<section class="tienda contenedor">
    <div class="contenido-tienda">
    
        <div class="imagenes">
           <?php 
            $tienda_id = get_field('tienda01');
            $tienda = wp_get_attachment_image_src($tienda_id, 'tienda');
            ?>

        <a href=""><img src="<?php echo $tienda[0]?>"></a>
        </div>
          
         <div class="imagenes">
         <?php 
          $tienda_id = get_field('tienda02');
          $tienda = wp_get_attachment_image_src($tienda_id, 'tienda');
          ?>

         <a href=""><img src="<?php echo $tienda[0]?>"></a>
          
         </div>
    

    </div>
</section>




<?php endwhile; ?>

<?php get_footer(); ?>

