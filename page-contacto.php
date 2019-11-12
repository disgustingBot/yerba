<?php get_header(); ?>



<figure class="contactATF" id="headerActivator">
  <img class="contactATFImg rowcol1 lazy" data-url="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
  <figcaption class="contactATFCaption rowcol1">
    <h2 class="contactATFTitle specialTitle">Contacto</h2>
  </figcaption>
</figure>


<p class="attentionMarker">!</p>
<p class="attentionTxt"><strong>Para reservas</strong> para el mismo día sólo en el <a href="tel:+34-971-342-661" style="color:black; text-decoration: none!important;"><strong>+34 971 342 661</strong></a>, gracias!
La reserva quedará confirmada una vez reciba el código de reserva.</p>


<div class="formularioDeContacto">
  <img class="contactoBackground" src="http://localhost/cbbc/wp-content/uploads/2019/11/logoAzul.png" alt="">
  <?php while(have_posts()){the_post();the_content();} ?>
</div>







<?php get_footer(); ?>
