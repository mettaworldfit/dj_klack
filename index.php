<?php get_header();?>

<section class="main contenedor clearfix">
    <div class="contenido-posts">

    <article>
        <!-- aqui van las entradas -->
        <?php if( have_posts( )) : while (have_posts( )) : the_post();?>

        
        <div class="img-post "><a href="<?php the_permalink();?>">
        <?php if (has_post_thumbnail()) { (the_post_thumbnail('entradas') ); }?>
        </a></div><!-- img-post -->

    
        <div class="contenido-entradas">
        <h2><a href="<?php the_permalink();?>"><?php  the_title();?></a></h2>
      
        <div class="fecha"><i class="far fa-clock"></i><?php the_date(); ?> a las <?php the_time();?> / <?php the_category();?></div>
        </div><!-- contenido-entradas -->

         <div class="parrafo"><?php the_excerpt();?></div>
         <a class="read-more" href="<?php the_permalink();?>">read more</a>

    

     <?php endwhile; else: ?>
       <h1>No hay post</h1>
    <?php endif; ?>

    </article>
    </div>
   
    <?php get_sidebar(); ?> 
    
</section><!-- contenido-posts -->


<div class="paginacion ">
      <?php echo paginate_links();?>
  </div>




  

<?php get_footer(); ?>