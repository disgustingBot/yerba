<?php get_header(); ?>

<!-- <section class="sliderATF" id="headerActivator"> -->
<section class="sliderATF">
<?php
  $args=array(
    'post_type'=>'post',
    'posts_per_page'=>3,
    'tag' => 'carousel',
  );$atf=new WP_Query($args);
  while($atf->have_posts()){$atf->the_post(); ?>
  <figure class="carus carouselItem rowcol1">
    <img class="carusImg rowcol1" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
    <figcaption class="carusCaption rowcol1">
      <h4 class="carusTitle"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
      <p class="carusTxt">
        <a href="<?php echo get_permalink(); ?>"><?php echo get_the_excerpt(); ?></a>
      </p>
    </figcaption>
  </figure>
  <?php } wp_reset_query(); ?>



  <button class="slideButton rowcol1 slideLeft" onclick="plusDivs(-1)">&#10094;</button>
  <button class="slideButton rowcol1 slideRight" onclick="plusDivs(+1)">&#10095;</button>


</section>



<!-- HEADER -->

<?php require_once 'categorySection.php'; ?>



<?php categorySectionSimple('news'   , 0); ?>
<?php categorySectionSimple('lugares', 1); ?>
<?php categorySectionSimple('paladar', 0); ?>

<?php categorySection2C('experiencias', ['ibiza', 'andorra']); ?>

<?php categorySectionSimple('planes', 1); ?>







<figure class="musical">
  <img class="musicalImg rowcol1" src="<?php echo get_template_directory_uri(); ?>/img/magazine/musical.jpg" alt="">
  <figcaption class="musicalCaption rowcol1">
    <h3 class="specialTitle centerTitle">Nuestra música</h3>
    <p>
      Una banda sonora muy original<br>
      Música en vivo y Dj’s de todo Europa y más allá nos acercan sus últimas creaciones: chill out y fiesta, hay un ritmo para cada momento.
    </p>
  </figcaption>
</figure>



<section class="igBlock">
  <img class="igLogo" src="<?php echo get_template_directory_uri(); ?>/img/magazine/instagram.png" alt="">
  <slider class="flex4">
    <img class="igPhoto" src="<?php echo get_template_directory_uri(); ?>/img/magazine/musical.jpg" alt="">
    <img class="igPhoto" src="<?php echo get_template_directory_uri(); ?>/img/magazine/musical.jpg" alt="">
    <img class="igPhoto" src="<?php echo get_template_directory_uri(); ?>/img/magazine/musical.jpg" alt="">
    <img class="igPhoto" src="<?php echo get_template_directory_uri(); ?>/img/magazine/musical.jpg" alt="">
  </slider>
</section>



<?php get_footer(); ?>
