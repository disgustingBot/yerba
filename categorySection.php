

<?php function categorySectionSimple($arg, $alt){ ?>

  <section class="section<?php if ($alt) { echo ' alt'; } ?>">
    <h4 class="sectionTitle specialTitle rowcol1 colMax">
      <span class="cbbcEs"></span>
      <span class=""><?php echo $arg; ?></span>
    </h4>

    <?php
    $args = array(
      'post_type'=>'post',
      'posts_per_page'=>1,
      'category_name' => $arg,
      'tag' => 'featured',
    );
    $blogPosts=new WP_Query($args);
    while($blogPosts->have_posts()) {
      $blogPosts->the_post();$featuredID=get_the_ID(); ?>


    <figure class="standarCard rowcol1">
      <img class="standarCardImg rowcol1" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
      <figcaption class="">
        <h5><?php the_title(); ?></h5>
        <p><?php echo excerpt(200); ?></p>
      </figcaption>
    </figure>
    <?php } ?>
    <flex class="magazineFlex colMax flex3">

    <?php
    $args = array(
      'post_type'=>'post',
      'posts_per_page'=>3,
      'category_name' => $arg,
      'post__not_in'  => array( $featuredID, 1 ),
      // 'tag__not_in' => get_term_by('slug', 'featured', 'post_tag')->term_id,
    );
    $blogPosts=new WP_Query($args);
    while($blogPosts->have_posts()){$blogPosts->the_post(); ?>

      <figure class="standarCard sectionItem">
        <img class="standarCardImg rowcol1" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
        <!-- <h5 class="itemTitleCenter rowcol1 itemTitle"><?php the_title(); ?></h5> -->
        <figcaption class="">
          <h5><?php the_title(); ?></h5>
          <p><?php echo excerpt(100); ?></p>
        </figcaption>
      </figure>

    <?php } ?>
  </section>
<?php } ?>







<?php function categorySection2C ($cat, $loc){ ?>
  <section class="section grid2C dividedSection" style="align-items:flex-start;">
    <h4 class="colMax centerTitle specialTitle"><?php echo get_category_by_slug($cat)->name; ?></h4>
      <?php $a=0; while ($a <= 1) { ?>
        <div class="grid2C">

        <?php
        $args = array(
          'post_type'=>'location',
          'posts_per_page'=>1,
          'name'        => $loc[$a],
        );
        $blogPosts=new WP_Query($args);
        while($blogPosts->have_posts()){$blogPosts->the_post(); ?>
          <figure class="grid colMax">
            <img class="simpleCardImg rowcol1" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
            <figcaption class="itemTitleCenter itemTitle rowcol1">
              <a href="#"><h5><?php the_title(); ?></h5></a>
            </figcaption>
          </figure>
        <?php } ?>
        <?php
        $args = array(
          'post_type'=>'post',
          'posts_per_page'=>1,
          'category_name' => $cat,
          'tag' => array('featured', $loc[$a]),
        );
        $blogPosts=new WP_Query($args);
        while($blogPosts->have_posts()) {
          $blogPosts->the_post();$featuredID=get_the_ID(); ?>
          <figure class="tarjeta grid2C colMax">
            <img class="tarjetaImg" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="" >
            <figcaption class="tarjetaCaption ">
              <h5><?php the_title(); ?></h5>
              <p><?php echo excerpt(100); ?></p>
            </figcaption>
          </figure>
        <?php } ?>
        <?php
        $args = array(
          'post_type'=>'post',
          'posts_per_page'=>2,
          'category_name' => $categoryName,
          'tag' => $loc[$a],
          'post__not_in'  => array( $featuredID, 1 ),
          // 'tag__not_in' => get_term_by('slug', 'featured', 'post_tag')->term_id,
        );
        $blogPosts=new WP_Query($args);
        while($blogPosts->have_posts()){$blogPosts->the_post(); ?>
          <figure class="standarCard grid">
            <img class="standarCardImg rowcol1" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
            <figcaption class="">
              <h5><?php the_title(); ?></h5>
              <p><?php echo excerpt(100); ?></p>
            </figcaption>
          </figure>
        <?php } ?>
      </div>
    <?php $a++; } ?>
  </section>
<?php } ?>
