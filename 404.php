<?php get_header(); ?>

<div class="Container 404 grid">

  <div class="notFound">
    <p class="p404">No pudimos encontrar tu página, tal vez te interese:</p>
    <a class="links404" href="<?php echo site_url(''); ?>" class="irAHome"><p>Ir al Inicio</p></a>
    <a class="links404" href="<?php echo site_url('/magazine'); ?>" class="irAHome"><p>Conocer nuestra<br><span class="blueTxt specialTitle">life </span>Magazine</p></a>

  </div>

  <video class="Video404" loop="loop" autoplay playsinline muted>
    <source type="video/mp4" src="<?php echo get_template_directory_uri(); ?>/img/home/shutterstock_25094927_4-1.mp4" alt="Fondo-de-video-del-mediterraneo-desde-arriba" />
  </video>
</div>

<?php get_footer(); ?>
