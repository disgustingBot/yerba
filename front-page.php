


<?php get_header(); ?>


<section class="homeATF">

  <video class="homeATFvideo rowcol1" id="headerActivator" loop="loop" autoplay playsinline muted>
    <source type="video/mp4" src="<?php echo get_template_directory_uri(); ?>/img/home/shutterstock_25094927_4-1.mp4" alt="Fondo-de-video-del-mediterraneo-desde-arriba" />
  </video>

  <figure class="homeATFIsoLogo rowcol1">
    <img class="homeATFLogo" src="<?php echo get_template_directory_uri(); ?>/img/logoCalaBassa.png" alt="">
    <figcaption class="specialTitle">
      <h2 class="homeATFCopy">More than an experience,<br>a lifestyle</h2>
    </figcaption>
  </figure>

  <!-- HEADER -->

  <flex class="homeATFflex flex3">

    <figure class="card">
      <img class="standarCardImg" src="<?php echo get_template_directory_uri(); ?>/img/home/1.jpg" alt="">
      <figcaption class="cardTitle specialTitle">
        <h3>Localizacion</h3>
      </figcaption>
    </figure>

    <figure class="card">
      <img class="standarCardImg" src="<?php echo get_template_directory_uri(); ?>/img/home/2.jpg" alt="">
      <figcaption class="cardTitle specialTitle">
          <h3>Gastronomía</h3>
      </figcaption>
    </figure>

    <figure class="card">
      <img class="standarCardImg" src="<?php echo get_template_directory_uri(); ?>/img/home/3.jpg" alt="">
      <figcaption class="cardTitle specialTitle">
        <h3>Experiencias</h3>
      </figcaption>
    </figure>
  </flex>

</section>





<?php while(have_posts()){the_post();the_content();} ?>




<section class="section">


    <h4 class="sectionTitle specialTitle rowcol1 colMax">
      <span class="cbbcEs">CBbC es...</span>
      <span class="">Localización</span>
    </h4>
  
    <figure class="standarCard rowcol1">
      <img class="standarCardImg rowcol1 sectonTitleImg" src="<?php echo get_template_directory_uri(); ?>/img/home/1.jpg" alt="">
      <figcaption class="standarCardTxt">

        <h5>En nuestros ambientes y restaurantes respirarás y sentirás que hasta el más mínimo detalle está por y para ti.</h5>
        <p>¿Eres mas de mar o de montaña?  Descubre lugares magicos en los que disfrutar de lo mejor de la vida.</p>
      </figcaption>
    </figure>


    <flex class="colMax flex2 flex5050">
    <figure class="grid">
      <img class="item5050Img rowcol1" src="<?php echo get_template_directory_uri(); ?>/img/home/4.jpg" alt="">
      <figcaption class="itemTitleCenter itemTitle rowcol1">
        <a href="<?php echo site_url('/ibiza'); ?>"><h5>Ibiza</h5></a>
      </figcaption>
    </figure>

    <figure class="grid">
      <img class="item5050Img rowcol1" src="<?php echo get_template_directory_uri(); ?>/img/home/5.jpg" alt="">
      <figcaption class="itemTitleCenter itemTitle rowcol1">
        <a href="<?php echo site_url('/andorra'); ?>"><h5>Andorra</h5></a>
      </figcaption>
    </figure>
  </flex>

</section>



<section class="section alt">

  <h4 class="sectionTitle specialTitle rowcol1 colMax">
    <span class="cbbcEs">CBbC es...</span>
    <span class="">Gastronomía</span>
  </h4>
  <figure class="standarCard rowcol1">

    <img class="standarCardImg rowcol1 sectonTitleImg" src="<?php echo get_template_directory_uri(); ?>/img/home/6.jpg" alt="">
    <figcaption class="standarCardTxt">

      <h5>En nuestros ambientes y restaurantes respirarás y sentirás que hasta el más mínimo detalle está por y para ti.</h5>
      <p>¿Eres mas de mar o de montaña?  Descubre lugares magicos en los que disfrutar de lo mejor de la vida.</p>
    </figcaption>
  </figure>


  <flex class="flex3 colMax restaurantFlex">

    <figure class="hidshow grid">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/7.jpg" alt="" class="hidshowImg rowcol1">
      <figcaption class="grid rowcol1">
        <p class="itemTitle rowcol1 itemTitleTR">Restaurante CBbC</p>
        <p class="rowcol1 hidshowTxt">
          Et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga
        </p>
      </figcaption>
    </figure>

    <figure class="hidshow grid">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/8.jpg" alt="" class="hidshowImg rowcol1">
      <figcaption class="grid rowcol1">
        <p class="itemTitle rowcol1 itemTitleTR">Chiringuito CBbC</p>
        <p class="rowcol1 hidshowTxt">
          Et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga
        </p>
      </figcaption>
    </figure>

    <figure class="hidshow grid">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/shushi.jpg" alt="" class="hidshowImg rowcol1">
      <figcaption class="grid rowcol1">
        <p class="itemTitle rowcol1 itemTitleTR">Sushi CBbC</p>
        <p class="rowcol1 hidshowTxt">
          Et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga
        </p>
      </figcaption>
    </figure>

    <figure class="hidshow grid">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/333.jpg" alt="" class="hidshowImg rowcol1">
      <figcaption class="grid rowcol1">
        <p class="itemTitle rowcol1 itemTitleBR">Barra Gourmet</p>
        <p class="rowcol1 hidshowTxt">
          Et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga
        </p>
      </figcaption>
    </figure>

    <figure class="hidshow grid">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/10.jpg" alt="" class="hidshowImg rowcol1">
      <figcaption class="grid rowcol1">
        <p class="itemTitle rowcol1 itemTitleBR">Snack CBbC</p>
        <p class="rowcol1 hidshowTxt">
          Et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga
        </p>
      </figcaption>
    </figure>

  </flex>
</section>




<section class="section experiencias">

  <h4 class="sectionTitle specialTitle rowcol1 colMax">
    <span class="cbbcEs ">CBbC es...</span>
    <span class="">Experiencias</span>
  </h4>

  <figure class="standarCard rowcol1">
    <img class="standarCardImg rowcol1 sectonTitleImg" src="<?php echo get_template_directory_uri(); ?>/img/home/11.jpg" alt="">
    <figcaption class="standarCardTxt">

      <h5>En nuestros ambientes y restaurantes respirarás y sentirás que hasta el más mínimo detalle está por y para ti.</h5>
      <p>¿Eres mas de mar o de montaña?  Descubre lugares magicos en los que disfrutar de lo mejor de la vida.</p>
    </figcaption>
  </figure>

  <flex class="colMax flex2 flex5050">

    <figure class="grid">
      <img class="item5050Img rowcol1" src="<?php echo get_template_directory_uri(); ?>/img/home/12.jpg" alt="">
      <figcaption class="itemTitle itemTitleCenter rowcol1">
        <a href="#"><h5>Mar</h5></a>
      </figcaption>
    </figure>

    <figure class="grid">
      <img class="item5050Img rowcol1" src="<?php echo get_template_directory_uri(); ?>/img/home/13.jpg" alt="">
      <figcaption class="itemTitle itemTitleCenter rowcol1">
        <a href="#"><h5>Montaña</h5></a>
      </figcaption>
    </figure>
  </flex>
</section>







<section class="section">
  <h4 class="centerTitle colMax">
    <span class="magazineTitle1">CBbC</span>
    <span class="specialTxt">Life</span>
    <span class="magazineTitle3">Magazine</span>
  </h4>

  <flex class="magazineFlex flex3 colMax">
    <figure class="standarCard">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/14.jpg" alt="" class="standarCardImg rowcol1">
      <p class="itemTitleCenter rowcol1 itemTitle">Platos de Andorra</p>

      <figcaption class="standarCardTxt">

        <h6>Dolor sit amet, consectetur adipiscing elit</h6>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </figcaption>
    </figure>


    <figure class="standarCard">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/15.jpg" alt=""class="standarCardImg rowcol1">
      <p class="itemTitleCenter rowcol1 itemTitle">pendant sky</p>
      <figcaption class="standarCardTxt">
        <h6>Dolor sit amet, consectetur adipiscing elit</h6>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.</p>
      </figcaption>
    </figure>

    <figure class="standarCard">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/16.jpg" alt=""class="standarCardImg rowcol1">
      <p class="itemTitleCenter rowcol1 itemTitle">festival</p>
      <figcaption class="standarCardTxt">

        <h6>Dolor sit amet, consectetur adipiscing elit</h6>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.</p>
      </figcaption>
    </figure>

  </flex>


</section>


</div>
<?php get_footer(); ?>
