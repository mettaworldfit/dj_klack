<?php get_header();?>

<section class="main contenedor clearfix">
    <div class="contenido-posts">

    <article>
        <!-- aqui van las entradas -->
        <?php if( have_posts( )) : while (have_posts( )) : the_post();?>

        
        <div class="img-post"><a href="<?php the_permalink();?>">
        <?php if (has_post_thumbnail()) { (the_post_thumbnail('entradas') ); }?>
        </a></div><!-- img-post -->

    
        <div class="contenido-entradas">
        <h2><a href="<?php the_permalink();?>"><?php  the_title();?></a></h2>
      
        <div class="fecha"><?php the_date(); ?> a las <?php the_time();?> / <?php the_category();?></div>
        </div><!-- contenido-entradas -->
        
         <div class="parrafo"><?php the_content();?></div>

        
         <div class="comentarios contenedor">
               <?php comment_form();?>
        </div><!-- comentarios -->

        <div class="contenedor">
          <ul class="lista-comentarios">
              <?php
                $comentarios = get_comments(array(
                'post_id' => $post->ID,
                'status' => 'approve'

                ));
              wp_list_comments(array(
                'per-page' => 10,
                'reverse_top_level' => false
              ),$comentarios );

              ?>
          </ul>
        </div>

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