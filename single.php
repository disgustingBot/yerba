
<?php get_header(); ?>

<?php while(have_posts()){the_post(); ?>



<img class="singleATFImg lazy" data-url="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">



<section class="section singleContent">
  <div class="theContent"><?php the_content(); ?></div>
  <div class="singleBanner"></div>
</section>


<?php } wp_reset_query(); ?>
<?php get_footer(); ?>
