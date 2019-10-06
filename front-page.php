


<?php get_header(); ?>


<section class="homeATF">

  <video class="homeATFvideo rowcol1" id="headerActivator" loop="loop" autoplay playsinline muted>
    <source type="video/mp4" src="<?php echo get_template_directory_uri(); ?>/img/home/shutterstock_25094927_4-1.mp4" alt="Fondo-de-video-del-mediterraneo-desde-arriba" />
  </video>

  <figure class="homeATFIsoLogo rowcol1">
    <img class="homeATFLogo" src="<?php echo get_template_directory_uri(); ?>/img/logoCalaBassa.png" alt="">
    <figcaption class="specialTitle">
      <h2>More than an experience,<br>a lifestyle</h2>
    </figcaption>
  </figure>

  <!-- HEADER -->

  <flex class="homeATFflex flex3">

    <figure class="card">
      <img class="standarCardImg" src="<?php echo get_template_directory_uri(); ?>/img/home/localizaciones.jpg" alt="">
      <figcaption class="cardTitle specialTitle">
        <h3>Localizacion</h3>
      </figcaption>
    </figure>

    <figure class="card">
      <img class="standarCardImg" src="<?php echo get_template_directory_uri(); ?>/img/home/gastronomia.jpg" alt="">
      <figcaption class="cardTitle specialTitle">
          <h3>Gastronomía</h3>
      </figcaption>
    </figure>

    <figure class="card">
      <img class="standarCardImg" src="<?php echo get_template_directory_uri(); ?>/img/home/experiencias.jpg" alt="">
      <figcaption class="cardTitle specialTitle">
        <h3>Experiencias</h3>
      </figcaption>
    </figure>
  </flex>

</section>





<?php while(have_posts()){the_post();the_content();} ?>




<section class="section">

  <article class="superCard">
    <h4 class="superCardTitle specialTitle rowcol1 colMax">
      <span class="cbbcEs">CBbC es...</span>
      <span class="">Localización</span>
    </h4>
    <figure class="superCardFigure rowcol1">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/localizaciones.jpg" alt="" class="localizacionesHeadImg superCardImg rowcol1">
      <figcaption class="">
        <h5>En nuestros ambientes y restaurantes respirarás y sentirás que hasta el más mínimo detalle está por y para ti.</h5>
        <p>¿Eres mas de mar o de montaña?  Descubre lugares magicos en los que disfrutar de lo mejor de la vida.</p>
      </figcaption>
    </figure>
  </article>

  <flex class="colMax flex2">
    <figure class="grid">
      <img class="item5050Img rowcol1" src="<?php echo get_template_directory_uri(); ?>/img/home/view-sandy-beach_23-2147836788.jpg" alt="">
      <figcaption class="itemTitleCenter itemTitle rowcol1">
        <a href="<?php echo site_url('/ibiza'); ?>"><h5>Ibiza</h5></a>
      </figcaption>
    </figure>

    <figure class="grid">
      <img class="item5050Img rowcol1" src="<?php echo get_template_directory_uri(); ?>/img/home/pal-ski-resort-andorra-pyrenees_79295-10470.jpg" alt="">
      <figcaption class="itemTitleCenter itemTitle rowcol1">
        <a href="<?php echo site_url('/andorra'); ?>"><h5>Andorra</h5></a>
      </figcaption>
    </figure>
  </flex>

</section>



<section class="section">

  <article class="superCard alt">
    <h4 class="superCardTitle specialTitle rowcol1 colMax">
      <span class="cbbcEs">CBbC es...</span>
      <span class="">Gastronomía</span>
    </h4>
    <figure class="superCardFigure rowcol1">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/gastronomia.jpg" alt="" class="gastronomiaHeadImg superCardImg rowcol1">
      <figcaption class="">
        <h5>Disfruta de la esencia de la gastronomía en los mejores restauranes.</h5>
        <p>Cuando te sientes a la mesa, invita a todos tus sentidos. Cada plato presenta colores, sabores, aroma y texturas de auténtica tradición ibicenca. Del mar de un Bullit de Peix, a la tierra de un jamón de pata negra.</p>
      </figcaption>
    </figure>
  </article>

  <flex class="flex3 colMax">

    <figure class="hidshow grid">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/9948.jpg" alt="" class="hidshowImg rowcol1">
      <figcaption class="grid rowcol1">
        <p class="itemTitle rowcol1 itemTitleTR">Soy el nene</p>
        <p class="rowcol1 hidshowTxt">
          Et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga
        </p>
      </figcaption>
    </figure>

    <figure class="hidshow grid">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/9948.jpg" alt="" class="hidshowImg rowcol1">
      <figcaption class="grid rowcol1">
        <p class="itemTitle rowcol1 itemTitleTR">Soy el nene</p>
        <p class="rowcol1 hidshowTxt">
          Et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga
        </p>
      </figcaption>
    </figure>

    <figure class="hidshow grid">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/9948.jpg" alt="" class="hidshowImg rowcol1">
      <figcaption class="grid rowcol1">
        <p class="itemTitle rowcol1 itemTitleTR">Soy el nene</p>
        <p class="rowcol1 hidshowTxt">
          Et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga
        </p>
      </figcaption>
    </figure>

    <figure class="hidshow grid">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/9948.jpg" alt="" class="hidshowImg rowcol1">
      <figcaption class="grid rowcol1">
        <p class="itemTitle rowcol1 itemTitleBR">Soy el nene</p>
        <p class="rowcol1 hidshowTxt">
          Et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga
        </p>
      </figcaption>
    </figure>

    <figure class="hidshow grid">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/9948.jpg" alt="" class="hidshowImg rowcol1">
      <figcaption class="grid rowcol1">
        <p class="itemTitle rowcol1 itemTitleBR">Soy el nene</p>
        <p class="rowcol1 hidshowTxt">
          Et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga
        </p>
      </figcaption>
    </figure>

  </flex>
</section>




<section class="section experiencias">

  <article class="superCard">
    <h4 class="superCardTitle specialTitle rowcol1 colMax">
      <span class="cbbcEs">CBbC es...</span>
      <span class="">Experiencias</span>
    </h4>
    <figure class="superCardFigure rowcol1">
      <img class="superCardImg rowcol1" src="<?php echo get_template_directory_uri(); ?>/img/home/experiencias.jpg" alt="">
      <figcaption class="">
        <h5>Disfruta de la esencia de la gastronomía en los mejores restauranes.</h5>
        <p>Cuando te sientes a la mesa, invita a todos tus sentidos. Cada plato presenta colores, sabores, aroma y texturas de auténtica tradición ibicenca. Del mar de un Bullit de Peix, a la tierra de un jamón de pata negra.</p>
      </figcaption>
    </figure>
  </article>

  <flex class="colMax flex2">

    <figure class="grid">
      <img class="item5050Img rowcol1" src="<?php echo get_template_directory_uri(); ?>/img/home/720.jpg" alt="">
      <figcaption class="itemTitle itemTitleCenter rowcol1">
        <a href="#"><h5>Mar</h5></a>
      </figcaption>
    </figure>

    <figure class="grid">
      <img class="item5050Img rowcol1" src="<?php echo get_template_directory_uri(); ?>/img/home/14459.jpg" alt="">
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
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/114579-261.jpg" alt="" class="standarCardImg rowcol1">
      <h5 class="itemTitleCenter rowcol1 itemTitle">Platos de Andorra</h5>
      <figcaption class="">
        <p>Dolor sit amet, consectetur adipiscing elit</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </figcaption>
    </figure>


    <figure class="standarCard">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/23-2148153662.jpg" alt=""class="standarCardImg rowcol1">
      <h5 class="itemTitleCenter rowcol1 itemTitle">pendant sky</h5>
      <figcaption class="">
        <p>Dolor sit amet, consectetur adipiscing elit</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.</p>
      </figcaption>
    </figure>

    <figure class="standarCard">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/23-2147717087.png" alt=""class="standarCardImg rowcol1">
      <h5 class="itemTitleCenter rowcol1 itemTitle">festival</h5>
      <figcaption class="">
        <p>Dolor sit amet, consectetur adipiscing elit</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.</p>
      </figcaption>
    </figure>

  </flex>


</section>


</div>
<?php get_footer(); ?>
