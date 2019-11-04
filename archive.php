<?php get_header(); ?>
<?php $query = get_queried_object(); ?>






<!-- <section class="sliderATF" id="headerActivator"> -->
<section class="sliderATF">
  <h1 class="sliderATFTitle rowcol1 specialTitle"><?php the_archive_title(); ?></h1>

<?php
  $args=array(
    'post_type'=>'post',
    'posts_per_page'=>3,
    'tag' => 'carousel',
  );
if(is_category()){
  $args['category_name']=$query->slug;
}
  $atf=new WP_Query($args);
  while($atf->have_posts()){$atf->the_post(); ?>
  <figure class="carus carouselItem rowcol1">
    <img class="carusImg rowcol1" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
    <figcaption class="carusCaption rowcol1">
      <a class="standarCardLink" href="<?php the_permalink(); ?>">
        <h4 class="carusTitle"><?php the_title(); ?></h4>
        <p class="carusTxt">
          <?php echo excerpt(200); ?>
        </p>
      </a>
    </figcaption>
  </figure>
  <?php } wp_reset_query(); ?>

  <button class="slideButton rowcol1 slideLeft" onclick="plusDivs(-1)">&#10094;</button>
  <button class="slideButton rowcol1 slideRight" onclick="plusDivs(+1)">&#10095;</button>
</section>





<section class="cincoPost">
  <?php $i=0;
  while(have_posts()){the_post();
    if ($i>0 && $i%5==0) { ?>
      </section>
      <banner>
        BANNER
      </banner>
      <!-- banner 1 -->
      <section class="cincoPost">
    <?php } ?>

    <figure class="standarCard">
      <img class="standarCardImg lazy" data-url="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
      <figcaption class="standarCardCaption">
        <a class="standarCardLink" href="<?php the_permalink(); ?>">
          <h5><?php the_title(); ?></h5>
          <p><?php echo excerpt(100); ?></p>
        </a>
      </figcaption>
    </figure>

  <?php $i++; } wp_reset_query(); ?>
</section>





<?php get_footer(); ?>
