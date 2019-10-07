<?php get_header(); ?>

<!-- <section class="magazineATF" id="headerActivator"> -->
<section class="magazineATF">
<?php
$args=array(
  'post_type'=>'post',
  'posts_per_page'=>3,
  'tag' => 'carousel',
);$atf=new WP_Query($args);
while($atf->have_posts()){$atf->the_post(); ?>
  <figure class="carus carouselItem rowcol1" style="background-image:url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>)">
    <!-- <img class="carusImg rowcol1" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt=""> -->
    <figcaption class="carusCaption rowcol1">
      <h4 class="carusTitle"><?php the_title(); ?></h4>
      <p class="carusTxt">
        <?php echo  get_the_excerpt(); ?>
      </p>
    </figcaption>
  </figure>
<?php } wp_reset_query(); ?>



  <button class="slideButton rowcol1 slideLeft" onclick="plusDivs(-1)">&#10094;</button>
  <button class="slideButton rowcol1 slideRight" onclick="plusDivs(+1)">&#10095;</button>
</section>

<!-- HEADER -->




<section class="section">


      <h4 class="sectionTitle specialTitle rowcol1 colMax">
        <span class="cbbcEs"></span>
        <span class="">News</span>
      </h4>
      <figure class="standarCard rowcol1">
        <img class="standarCardImg rowcol1" src="<?php echo get_template_directory_uri(); ?>/img/home/localizaciones.jpg" alt="">
        <figcaption class="">
          <h5>En nuestros ambientes y restaurantes respirarás y sentirás que hasta el más mínimo detalle está por y para ti.</h5>
          <p>¿Eres mas de mar o de montaña?  Descubre lugares magicos en los que disfrutar de lo mejor de la vida.</p>
        </figcaption>
      </figure>

  <flex class="magazineFlex colMax flex3">
    <figure class="standarCard sectionItem">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/114579-261.jpg" alt="" class="standarCardImg rowcol1">
      <h5 class="itemTitleCenter rowcol1 itemTitle">Platos de Andorra</h5>
      <figcaption class="">
        <p>Dolor sit amet, consectetur adipiscing elit</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </figcaption>
    </figure>


    <figure class="standarCard sectionItem">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/23-2148153662.jpg" alt=""class="standarCardImg rowcol1">
      <h5 class="itemTitleCenter rowcol1 itemTitle">pendant sky</h5>
      <figcaption class="">
        <p>Dolor sit amet, consectetur adipiscing elit</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.</p>
      </figcaption>
    </figure>

    <figure class="standarCard sectionItem">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/23-2147717087.png" alt=""class="standarCardImg rowcol1">
      <h5 class="itemTitleCenter rowcol1 itemTitle">festival</h5>
      <figcaption class="">
        <p>Dolor sit amet, consectetur adipiscing elit</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.</p>
      </figcaption>
    </figure>
  </flex>
</section>



<section class="section alt">


      <h4 class="sectionTitle specialTitle rowcol1 colMax">
        <span class="cbbcEs"></span>
        <span class="">Lugares</span>
      </h4>
      <figure class="standarCard rowcol1">
        <img class="standarCardImg rowcol1" src="<?php echo get_template_directory_uri(); ?>/img/home/localizaciones.jpg" alt="">
        <figcaption class="">
          <h5>En nuestros ambientes y restaurantes respirarás y sentirás que hasta el más mínimo detalle está por y para ti.</h5>
          <p>¿Eres mas de mar o de montaña?  Descubre lugares magicos en los que disfrutar de lo mejor de la vida.</p>
        </figcaption>
      </figure>

  <flex class="magazineFlex colMax flex3">
    <figure class="standarCard sectionItem">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/114579-261.jpg" alt="" class="standarCardImg rowcol1">
      <h5 class="itemTitleCenter rowcol1 itemTitle">Platos de Andorra</h5>
      <figcaption class="">
        <p>Dolor sit amet, consectetur adipiscing elit</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </figcaption>
    </figure>

    <figure class="standarCard sectionItem">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/23-2148153662.jpg" alt=""class="standarCardImg rowcol1">
      <h5 class="itemTitleCenter rowcol1 itemTitle">pendant sky</h5>
      <figcaption class="">
        <p>Dolor sit amet, consectetur adipiscing elit</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.</p>
      </figcaption>
    </figure>

    <figure class="standarCard sectionItem">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/23-2147717087.png" alt=""class="standarCardImg rowcol1">
      <h5 class="itemTitleCenter rowcol1 itemTitle">festival</h5>
      <figcaption class="">
        <p>Dolor sit amet, consectetur adipiscing elit</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.</p>
      </figcaption>
    </figure>
  </flex>
</section>



<section class="section">


      <h4 class="sectionTitle specialTitle rowcol1 colMax">
        <span class="cbbcEs"></span>
        <span class="">Paladar</span>
      </h4>
      <figure class="standarCard rowcol1">
        <img class="standarCardImg rowcol1" src="<?php echo get_template_directory_uri(); ?>/img/home/localizaciones.jpg" alt="">
        <figcaption class="">
          <h5>En nuestros ambientes y restaurantes respirarás y sentirás que hasta el más mínimo detalle está por y para ti.</h5>
          <p>¿Eres mas de mar o de montaña?  Descubre lugares magicos en los que disfrutar de lo mejor de la vida.</p>
        </figcaption>
      </figure>

  <flex class="magazineFlex colMax flex3">
    <figure class="standarCard sectionItem">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/114579-261.jpg" alt="" class="standarCardImg rowcol1">
      <h5 class="itemTitleCenter rowcol1 itemTitle">Platos de Andorra</h5>
      <figcaption class="">
        <p>Dolor sit amet, consectetur adipiscing elit</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </figcaption>
    </figure>

    <figure class="standarCard sectionItem">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/23-2148153662.jpg" alt=""class="standarCardImg rowcol1">
      <h5 class="itemTitleCenter rowcol1 itemTitle">pendant sky</h5>
      <figcaption class="">
        <p>Dolor sit amet, consectetur adipiscing elit</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.</p>
      </figcaption>
    </figure>

    <figure class="standarCard sectionItem">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/23-2147717087.png" alt=""class="standarCardImg rowcol1">
      <h5 class="itemTitleCenter rowcol1 itemTitle">festival</h5>
      <figcaption class="">
        <p>Dolor sit amet, consectetur adipiscing elit</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.</p>
      </figcaption>
    </figure>
  </flex>
</section>














<section class="section grid2C">
  <h4 class="colMax centerTitle specialTitle">Experiencias</h4>

  <div class="grid2C">
    <figure class="grid colMax">
      <img class="item5050Img rowcol1" src="<?php echo get_template_directory_uri(); ?>/img/home/720.jpg" alt="">
      <figcaption class="itemTitleCenter itemTitle rowcol1">
        <a href="#"><h5>Ibiza</h5></a>
      </figcaption>
    </figure>

    <figure class="tarjeta grid2C colMax">
      <img class="tarjetaImg" src="<?php echo get_template_directory_uri(); ?>/img/home/720.jpg" alt="" >
      <figcaption class="tarjetaCaption ">
        <h5>Dolor sit amet, consectetur adipiscing elit</h5>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </figcaption>
    </figure>

    <figure class="standarCard grid">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/114579-261.jpg" alt="" class="standarCardImg rowcol1">
      <figcaption class="">
        <p>Dolor sit amet, consectetur adipiscing elit</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </figcaption>
    </figure>

    <figure class="standarCard grid">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/114579-261.jpg" alt="" class="standarCardImg rowcol1">
      <figcaption class="">
        <p>Dolor sit amet, consectetur adipiscing elit</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </figcaption>
    </figure>
  </div>


  <div class="grid2C">
    <figure class="grid colMax">
      <img class="item5050Img rowcol1" src="<?php echo get_template_directory_uri(); ?>/img/home/pal-ski-resort-andorra-pyrenees_79295-10470.jpg" alt="">
      <figcaption class="itemTitleCenter itemTitle rowcol1">
        <a href="#"><h5>Andorra</h5></a>
      </figcaption>
    </figure>

    <figure class="tarjeta grid2C colMax">
      <img class="tarjetaImg" src="<?php echo get_template_directory_uri(); ?>/img/home/720.jpg" alt="" >
      <figcaption class="tarjetaCaption">
        <h5>Dolor sit amet, consectetur adipiscing elit</h5>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </figcaption>
    </figure>

    <figure class="experienciasCard standarCard SectionItem">
      <img class="standarCardImg rowcol1 experienciasBottomCardsImg" src="<?php echo get_template_directory_uri(); ?>/img/home/23-2147717087.png" alt="">
      <figcaption class="standarCardFigcaption experienciasBottomCardsTxt">
        <p>Dolor sit amet, consectetur adipiscing elit</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.</p>
      </figcaption>
    </figure>

    <figure class="experienciasCard standarCard SectionItem">
      <img class="standarCardImg rowcol1 experienciasBottomCardsImg" src="<?php echo get_template_directory_uri(); ?>/img/home/23-2147717087.png" alt="">
      <figcaption class="standarCardFigcaption experienciasBottomCardsTxt">
        <p>Dolor sit amet, consectetur adipiscing elit</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.</p>
      </figcaption>
    </figure>

  </div>

</section>





<section class="section alt">


      <h4 class="sectionTitle specialTitle rowcol1 colMax">
        <span class="cbbcEs"></span>
        <span class="">Planes</span>
      </h4>
      <figure class="standarCard rowcol1">
        <img class="standarCardImg rowcol1" src="<?php echo get_template_directory_uri(); ?>/img/home/localizaciones.jpg" alt="">
        <figcaption class="">
          <h5>En nuestros ambientes y restaurantes respirarás y sentirás que hasta el más mínimo detalle está por y para ti.</h5>
          <p>¿Eres mas de mar o de montaña?  Descubre lugares magicos en los que disfrutar de lo mejor de la vida.</p>
        </figcaption>
      </figure>

  <flex class="magazineFlex colMax flex3">
    <figure class="standarCard sectionItem">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/114579-261.jpg" alt="" class="standarCardImg rowcol1">
      <h5 class="itemTitleCenter rowcol1 itemTitle">Platos de Andorra</h5>
      <figcaption class="">
        <p>Dolor sit amet, consectetur adipiscing elit</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </figcaption>
    </figure>

    <figure class="standarCard sectionItem">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/23-2148153662.jpg" alt=""class="standarCardImg rowcol1">
      <h5 class="itemTitleCenter rowcol1 itemTitle">pendant sky</h5>
      <figcaption class="">
        <p>Dolor sit amet, consectetur adipiscing elit</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.</p>
      </figcaption>
    </figure>

    <figure class="standarCard sectionItem">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/23-2147717087.png" alt=""class="standarCardImg rowcol1">
      <h5 class="itemTitleCenter rowcol1 itemTitle">festival</h5>
      <figcaption class="">
        <p>Dolor sit amet, consectetur adipiscing elit</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.</p>
      </figcaption>
    </figure>
  </flex>
</section>








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
