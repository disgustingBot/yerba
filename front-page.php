


<?php get_header(); ?>


<section class="ATF">

  <video class="videoATF" loop="loop" autoplay playsinline muted>
    <source type="video/mp4" src="<?php echo get_template_directory_uri(); ?>/img/home/shutterstock_25094927_4-1.mp4" alt="Fondo-de-video-del-mediterraneo-desde-arriba" />
  </video>

  <figure class="ATFIsoLogo">
    <img class="ATFLogo rowcol1" src="<?php echo get_template_directory_uri(); ?>/img/logoCalaBassa.png" alt="">
    <figcaption class="ATFtitle specialTitle">
      <h2>More than an experience , <br> a lifestyle</h2>
    </figcaption>
  </figure>

  <figure class="cards cardsATF cardATF1">
    <img class="standarCardImg rowcol1" src="<?php echo get_template_directory_uri(); ?>/img/home/localizaciones.jpg" alt="">
    <figcaption class="cardsTxt specialTitle">
      <h3>Localizacion</h3>
    </figcaption>
  </figure>

  <figure class="cards cardsATF cardATF2">
    <img class="standarCardImg rowcol1" src="<?php echo get_template_directory_uri(); ?>/img/home/gastronomia.jpg" alt="">
    <figcaption class="cardsTxt specialTitle">
        <h3>Gastronomía</h3>
    </figcaption>
  </figure>

  <figure class="cards cardsATF cardATF3">
    <img class="standarCardImg rowcol1" src="<?php echo get_template_directory_uri(); ?>/img/home/experiencias.jpg" alt="">
    <figcaption class="cardsTxt specialTitle">
      <h3>Experiencias</h3>
    </figcaption>
  </figure>

</section>





<?php while(have_posts()){the_post();the_content();} ?>




<section class="fPSection localizaciones">

  <article class="localizacionesHead fPSectionHead">
    <h4 class="localizacionTitle fPSectionTitle">CBbC es... <span class="specialTitle">localización</span></h4>
    <figure class="localizacionesHeadFigure1 fPSectionFigure">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/localizaciones.jpg" alt="" class="localizacionesHeadImg fPSectionImg rowcol1">
      <figcaption class="localizacionesHeadFigcaption">
        <h5>En nuestros ambientes y restaurantes respirarás y sentirás que hasta el más mínimo detalle está por y para ti.</h5>
        <p>¿Eres mas de mar o de montaña?  Descubre lugares magicos en los que disfrutar de lo mejor de la vida.</p>
      </figcaption>
    </figure>
  </article>

  <div class="Container5050">
    <figure class="item5050 sectionItem">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/view-sandy-beach_23-2147836788.jpg" alt="" class="item5050Img rowcol1">
      <figcaption class="localizacionItemFigcaption itemTitleCenter itemTitle">
        <a href="#"><h5>Ibiza</h5></a>
      </figcaption>
    </figure>

    <figure class="item5050 sectionItem">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/pal-ski-resort-andorra-pyrenees_79295-10470.jpg" alt="" class="item5050Img rowcol1">
      <figcaption class="localizacionItemFigcaption itemTitleCenter itemTitle">
        <a href="#"><h5>Andorra</h5></a>
      </figcaption>
    </figure>
  </div>

</section>

<section class="fPSection">

  <article class="gastronomiaHead fPSectionHead">
    <h4 class="gastronomiaTitle fPSectionTitle">CBbC es...<span class="specialTitle">Gastronomía</span></h4>
    <figure class="gastronomiaHeadFigure2 fPSectionFigure">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/gastronomia.jpg" alt="" class="gastronomiaHeadImg fPSectionImg rowcol1">
      <figcaption class="gastronomiaHeadFigcaption">
        <h5>Disfruta de la esencia de la gastronomía en los mejores restauranes.</h5>
        <p>Cuando te sientes a la mesa, invita a todos tus sentidos. Cada plato presenta colores, sabores, aroma y texturas de auténtica tradición ibicenca. Del mar de un Bullit de Peix, a la tierra de un jamón de pata negra.</p>
      </figcaption>
    </figure>
  </article>

  <div class="gastronomiaContainer">

    <figure class="gastronomiaItem sectionItem">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/9948.jpg" alt="" class="gastronomiaItemImg rowcol1">
      <figcaption class="gastronomiaItemFigcaption rowcol1">
        <p class="itemTitle rowcol1 gastronomiaItemTitle">Soy el nene</p>
        <p class="rowcol1 gastronomiaItemDescription"> <span class="itemDescriptionContent">Et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </span></p>
      </figcaption>
    </figure>

    <figure class="gastronomiaItem sectionItem">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/9948.jpg" alt="" class="gastronomiaItemImg rowcol1">
      <figcaption class="gastronomiaItemFigcaption rowcol1">
        <p class="itemTitle rowcol1 gastronomiaItemTitle">Soy el nene</p>
        <p class="rowcol1 gastronomiaItemDescription"> <span class="itemDescriptionContent">Et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </span></p>
      </figcaption>
    </figure>

    <figure class="gastronomiaItem sectionItem">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/9948.jpg" alt="" class="gastronomiaItemImg rowcol1">
      <figcaption class="gastronomiaItemFigcaption rowcol1">
        <p class="itemTitle rowcol1 gastronomiaItemTitle">Soy el nene</p>
        <p class="rowcol1 gastronomiaItemDescription"> <span class="itemDescriptionContent">Et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </span></p>
      </figcaption>
    </figure>

    <figure class="gastronomiaItem sectionItem">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/9948.jpg" alt="" class="gastronomiaItemImg rowcol1">
      <figcaption class="gastronomiaItemFigcaption rowcol1">
        <p class="itemTitle rowcol1 gastronomiaItemTitle">Soy el nene</p>
        <p class="rowcol1 gastronomiaItemDescription"> <span class="itemDescriptionContent">Et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </span></p>
      </figcaption>
    </figure>

    <figure class="gastronomiaItem sectionItem">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/9948.jpg" alt="" class="gastronomiaItemImg rowcol1">
      <figcaption class="gastronomiaItemFigcaption rowcol1">
        <p class="itemTitle rowcol1 gastronomiaItemTitle">Soy el nene</p>
        <p class="rowcol1 gastronomiaItemDescription"> <span class="itemDescriptionContent">Et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </span></p>
      </figcaption>
    </figure>




  </div>



</section>


<section class="fPSection experiencias">

  <article class="experienciasHead fPSectionHead">
    <h4 class="experiencasTitle fPSectionTitle">CBbC es...<span class="specialTitle">Experiencias</span></h4>
    <figure class="experienciasHeadFigure1 fPSectionFigure">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/experiencias.jpg" alt="" class="experienciasHeadImg fPSectionImg rowcol1">
      <figcaption class="experiencasHeadFigcaption">
        <h5>Disfruta de la esencia de la gastronomía en los mejores restauranes.</h5>
        <p>Cuando te sientes a la mesa, invita a todos tus sentidos. Cada plato presenta colores, sabores, aroma y texturas de auténtica tradición ibicenca. Del mar de un Bullit de Peix, a la tierra de un jamón de pata negra.</p>
      </figcaption>
    </figure>
  </article>

  <div class="Container5050">

    <figure class="item5050 sectionItem">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/720.jpg" alt="" class="experiencasItemImg item5050Img rowcol1">
      <figcaption class="gastronomiaItemFigcaption itemTitle itemTitleCenter">Snak CBbC</figcaption>
    </figure>

    <figure class="sectionItem item5050 sectionItem">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/14459.jpg" alt="" class="experiencasItemImg item5050Img rowcol1">
      <figcaption class="standarCardFigcaption itemTitle itemTitleCenter">Snak CBbC</figcaption>
    </figure>

  </div>






</section>

<section class="fPSection Magazine">
  <h4 class="magazineTitle"> <span class="magazineTitle1">CBbC</span> <span class="specialTitle magazineTitleBlue">Life</span> <span class="magazineTitle3">Magazine</span></h4>

  <figure class="standarCard sectionItem">
    <img src="<?php echo get_template_directory_uri(); ?>/img/home/114579-261.jpg" alt="" class="standarCardImg rowcol1">
    <h5 class="itemTitleCenter itemTitle">Platos de Andorra</h5>
    <figcaption class="standarCardFigcaption">
      <p>Dolor sit amet, consectetur adipiscing elit</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </figcaption>
  </figure>


  <figure class="standarCard sectionItem">
    <img src="<?php echo get_template_directory_uri(); ?>/img/home/23-2148153662.jpg" alt=""class="standarCardImg rowcol1">
    <h5 class="itemTitleCenter itemTitle">pendant sky</h5>
    <figcaption class="standarCardFigcaption">
      <p>Dolor sit amet, consectetur adipiscing elit</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.</p>
    </figcaption>
  </figure>

  <figure class="standarCard sectionItem">
    <img src="<?php echo get_template_directory_uri(); ?>/img/home/23-2147717087.png" alt=""class="standarCardImg rowcol1">
    <h5 class="itemTitleCenter itemTitle">festival</h5>
    <figcaption class="standarCardFigcaption">
      <p>Dolor sit amet, consectetur adipiscing elit</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.</p>
    </figcaption>
  </figure>


</section>


</div>
<?php get_footer(); ?>
