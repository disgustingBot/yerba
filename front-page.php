<?php get_header(); ?>




<section class="ATF homeATF">
  <figure class="holyLink">
    <img class="holyLinkImg" src="https://picsum.photos/400" alt="">
    <figcaption><a href="">Localizacion</a></figcaption>
  </figure>
  <figure class="holyLink">
    <img class="holyLinkImg" src="https://picsum.photos/400" alt="">
    <figcaption><a href="">Gastronomia</a></figcaption>
  </figure>
  <figure class="holyLink">
    <img class="holyLinkImg" src="https://picsum.photos/400" alt="">
    <figcaption><a href="">Experiencias</a></figcaption>
  </figure>
  <h2 class="homeATFCaption rowcol1">More than a lifestyle</h2>
  <img class="homeATFLogo rowcol1 lazy" data-url="<?php echo get_template_directory_uri(); ?>/img/logoCalaBassa.png" alt="CBbC GROUP">
  <video class="homeATFVideo rowcol1" src="http://new.cbbcgroup.com/wp-content/uploads/shutterstock_25094927_2-1.mp4" loop="loop"  autoplay="" playsinline="" muted="" id="" preload="none" />

</section>


<?php
  while(have_posts()){the_post();
    the_content();
  }
?>
<?php get_footer(); ?>
