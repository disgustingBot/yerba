<?php get_header(); ?>

<figure class="locATF" id="headerActivator">
  <img class="locATFImg rowcol1" src="<?php echo get_template_directory_uri(); ?>/img/ibiza/ibizaATF.jpg" alt="">
  <figcaption class="locATFCaption rowcol1">
    <h3 class="centerTitle specialTitle">Ibiza</h3>
    <p>Al oeste de Ibiza, a orillas del Mediterráneo, la sabia Diosa Tanit guarda un idílico rincón de sol, fina arena blanca y aguas turquesa. No es otra playa paradisíaca cualquiera: es la que recordarás para siempre</p>
  </figcaption>
</figure>


<?php while(have_posts()){the_post();the_content();} ?>
<!-- HEADER -->


<figure class="mega">
  <img class="megaImg" src="<?php echo get_template_directory_uri(); ?>/img/ibiza/couple.jpg" alt="">
  <figcaption class="megaCaption">
    <h4 class="megaTitle centerTitle specialTitle">Ibiza lifestyle</h4>
    <p>Basándonos en nuestros 3 mantras: Experiencias, Localizaciones y Gastronomía. Descanso y deportes acuáticos, en una playa paradisíaca con restaurantes para todos los gustos.</p>
  </figcaption>
</figure>


<figure class="show">
  <img class="showImg rowcol1" src="<?php echo get_template_directory_uri(); ?>/img/ibiza/localizacion-1.jpg" alt="">
  <img class="showLogo rowcol1" src="<?php echo get_template_directory_uri(); ?>/img/logoCBbCblanco.png" alt="">
  <figcaption class="showCaption">
    <h4 class="showTitle specialTitle">Un día en la playa</h4>
    <h5>los detalles cuentan.</h5>
    <p>Las camas balinesas con vistas al mar te esperan. Un oasis para relajarte al ritmo de Dj’s y las olas del mar después de una comida mediterránea de alta cocina.</p>
  </figcaption>
</figure>



<section>
  <figure class="hidshow grid">
    <img src="<?php echo get_template_directory_uri(); ?>/img/ibiza/20.jpg" alt="" class="hidshowImg rowcol1">
    <figcaption class="grid rowcol1">
      <p class="itemTitle rowcol1 itemTitleCenter">Una banda sonora muy original</p>
    </figcaption>
  </figure>


  <flex class="flex2">

    <figure class="hidshow grid">
      <img src="<?php echo get_template_directory_uri(); ?>/img/ibiza/21.jpg" alt="" class="hidshowImg rowcol1">
      <figcaption class="grid rowcol1">
        <p class="itemTitle rowcol1 itemTitleTR">Motos de agua</p>
      </figcaption>
    </figure>

    <figure class="hidshow grid">
      <img src="<?php echo get_template_directory_uri(); ?>/img/ibiza/22.jpg" alt="" class="hidshowImg rowcol1">
      <figcaption class="grid rowcol1">
        <p class="itemTitle rowcol1 itemTitleTR">Cenas románticas</p>
      </figcaption>
    </figure>

    <figure class="hidshow grid">
      <img src="<?php echo get_template_directory_uri(); ?>/img/ibiza/23.jpg" alt="" class="hidshowImg rowcol1">
      <figcaption class="grid rowcol1">
        <p class="itemTitle rowcol1 itemTitleTR">Cenas románticas</p>
      </figcaption>
    </figure>

    <figure class="hidshow grid">
      <img src="<?php echo get_template_directory_uri(); ?>/img/ibiza/24.jpg" alt="" class="hidshowImg rowcol1">
      <figcaption class="grid rowcol1">
        <p class="itemTitle rowcol1 itemTitleTR">Una banda sonora muy original</p>
      </figcaption>
    </figure>
  </flex>
</section>



<figure class="mega">
  <img class="megaImg" src="<?php echo get_template_directory_uri(); ?>/img/ibiza/sillas.jpg" alt="">
  <figcaption class="megaCaption alt">
    <h4 class="megaTitle centerTitle specialTitle">La gastronomía más exclusiva</h4>
    <h5>Disfruta de la esencia ibicenca todo el año<br>en CBbC Cala Bassa</h5>
    <p>Mientras tus pies juegan en la arena, tu paladar se sumergirá en nuestra amplia carta gastronómica. Cocina mediterránea con producto de alta calidad. Paella, Bullit de Peix, marisco y carne maridada con sangría, vino o champán. Y si eres de paladar sibarita, puedes comer un delicioso sushi o las exquisitas delicatesen de nuestro Gourmet Corner.</p>
  </figcaption>
</figure>


<flex class="flex3 colMax localizacionesFlex">


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












<section class="igBlock">
  <img class="igLogo" src="<?php echo get_template_directory_uri(); ?>/img/magazine/instagram.png" alt="">
  <slider class="flex3">
    <img class="igPhoto" src="<?php echo get_template_directory_uri(); ?>/img/magazine/musical.jpg" alt="">
    <img class="igPhoto" src="<?php echo get_template_directory_uri(); ?>/img/magazine/musical.jpg" alt="">
    <img class="igPhoto" src="<?php echo get_template_directory_uri(); ?>/img/magazine/musical.jpg" alt="">
  </slider>
</section>




<section class="ayuda">
  <iframe class="ayudaMap" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cala%20bassa%20CBbC%2C%20ibiza+(CBbC)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
  <!-- <img class="ayudaMap" src="<?php echo get_template_directory_uri(); ?>/img/ibiza/mapa1.jpg" alt=""> -->

  <!-- <h4 class="ayudaTitle specialTitle rowcol1">¿En qué podemos ayudarte?</h4>
  <flex class="ayudaFlex flex4">
    <figure class="info">
      <img class="infoImg" src="<?php echo get_template_directory_uri(); ?>/img/ibiza/parking.png" alt="">
      <figcaption class="infoCaption">
        <h5>Donde Aparcar</h5>
        <p>Lorem ipsum dolor sit amet ipsum dolor.</p>
      </figcaption>
    </figure>
    <figure class="info">
      <img class="infoImg" src="<?php echo get_template_directory_uri(); ?>/img/ibiza/booking.png" alt="">
      <figcaption class="infoCaption">
        <h5>Reserva</h5>
        <p>Lorem ipsum dolor sit amet ipsum dolor.</p>
      </figcaption>
    </figure>
    <figure class="info">
      <img class="infoImg" src="<?php echo get_template_directory_uri(); ?>/img/ibiza/info.png" alt="">
      <figcaption class="infoCaption">
        <h5>Donde Aparcar</h5>
        <p>Lorem ipsum dolor sit amet ipsum dolor.</p>
      </figcaption>
    </figure>
    <figure class="info">
      <img class="infoImg" src="<?php echo get_template_directory_uri(); ?>/img/ibiza/visitas.png" alt="">
      <figcaption class="infoCaption">
        <h5>Donde Aparcar</h5>
        <p>Lorem ipsum dolor sit amet ipsum dolor.</p>
      </figcaption>
    </figure>
  </flex> -->
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
      <figcaption class="">
        <p>Dolor sit amet, consectetur adipiscing elit</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </figcaption>
    </figure>


    <figure class="standarCard">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/23-2148153662.jpg" alt=""class="standarCardImg rowcol1">
      <figcaption class="">
        <p>Dolor sit amet, consectetur adipiscing elit</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.</p>
      </figcaption>
    </figure>

    <figure class="standarCard">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/23-2147717087.png" alt=""class="standarCardImg rowcol1">
      <figcaption class="">
        <p>Dolor sit amet, consectetur adipiscing elit</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.</p>
      </figcaption>
    </figure>

  </flex>


</section>




<!-- <div>
  <iframe src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cala%20bassa%20CBbC%2C%20ibiza+(CBbC)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
  <div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;">
    <small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/ja/">Googlemapsgenerator.com/ja/</a> & <a href="https://energiawiatru.eu/">groen gas nederland</a></small>
  </div>
  <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
</div>
<br /> -->


<?php get_footer(); ?>
