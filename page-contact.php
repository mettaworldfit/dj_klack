<?php get_header(); ?>

<div class="seccion contenedor" id="contact">  
    <h2>contact us</h2>
</div>

<div class="info-contact contenedor">
   
   <p>birthday, weddings, graduactions, corporate parties social events and many more special occasions</p>
</div>

<section class="formulario contenedor clearfix" >
<!-- formulario -->
<form action="mail.php" method="post">

   <div class="contenedor-campos">

       <div class="campos">
           <label for="Name"></label>
           <input type="text" name="name" placeholder="Name" >
       </div>

       <div class="campos">
           <label for="mail"></label>
           <input type="mail" name="mail" placeholder="Email">
       </div>

       <div class="campos">
           <label for="messaje"></label>
           <textarea name="massage" id="massage" cols="36" rows="10" placeholder="Message">

           </textarea>
       </div>

       <div class="enviar">
            <input type="submit" class="boton" value="submit">
       </div>
   </div>
</form>
    <!-- informacion -->

    <section class="info-contenedor">
    <div class="info">
        <ul>
            <li><i class="fas fa-mobile-alt"></i>  <a href=""> +1 (862) 271-1387</a></li>
            <li><i class="far fa-envelope"></i>  <a href="">info@djklack.com</li>
        </ul>
        
    </div>
    
      <div id="info-redes">
        <ul>
            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
            <li><a href=""><i class="fab fa-twitter"></i></a></li>
            <li><a href=""><i class="fab fa-instagram"></i></a></li>
            <li><a href=""><i class="fab fa-youtube"></i></a></li>
            <li><a href=""><i class="fab fa-soundcloud"></i></a></li>
        </ul>
      </div>
    
    </section><!-- Info-contenedor -->

</section>


<?php get_footer(); ?>