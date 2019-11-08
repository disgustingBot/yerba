<?php get_header(); ?>
<!-- <h1>Page.php</h1> -->

<?php while(have_posts()){the_post();?>

  <div class="pageWrapper">
    <?php  the_content();} ?>
  </div>

<?php get_footer(); ?>
