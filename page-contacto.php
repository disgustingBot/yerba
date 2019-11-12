<?php get_header(); ?>



<figure class="contactATF" id="headerActivator">
  <img class="contactATFImg rowcol1 lazy" data-url="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
  <figcaption class="contactATFCaption rowcol1">
    <h2 class="contactATFTitle specialTitle">Contacto</h2>
  </figcaption>
</figure>


<p class="attentionMarker">!</p>
<p class="attentionTxt">Para reservas para el mismo día sólo en el +34 971 342 661, gracias!
La reserva quedará confirmada una vez reciba el código de reserva.</p>


<div class="formularioDeContacto">
  <?php while(have_posts()){the_post();the_content();} ?>
</div>




<?php get_footer(); ?>
