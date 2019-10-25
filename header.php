<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head(); ?>
  <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre:400,600&display=swap" rel="stylesheet">

  <?php if (session_id()) { ?>
    <style>.popup{display:none}</style>
  <?php } ?>
</head>
<body>



  <?php if(is_user_logged_in()){ ?><style>:root{--top0: var(--topCero)}</style><?php }; ?>

	<view id="load" class="load">
    <svg class="roll">
      <circle cx="50" cy="50" r="45"></circle>
    </svg>
  </view>

  <?php if( is_page("magazine") || is_single() || is_archive()){ $isMagazine = true; } else { $isMagazine = false; } ?>

    <header class="header<?php if($isMagazine){echo " alt";} ?>">
      <?php if( !$isMagazine ){ ?>
        <a class="headerLogoCont" href="<?php echo site_url(''); ?>">
          <img class="headerLogo" src="<?php echo get_template_directory_uri(); ?>/img/logoCasiLimpio.png" alt="">
        </a>
        <nav id="navBar" class="headerCont navBar">
          <a class="subrayable homeLink<?php if(is_front_page()){echo ' subrayado"';} ?>" href="<?php echo site_url(''); ?>">CBbC</a>
          <div class="subrayable locationLink">
            <p class="locationText">Localización</p>
            <div class="headerLocations">
              <a class="subrayable" href="">Ibiza</a>
              <a class="subrayable" href="">Andorra</a>
            </div>
          </div>
          <a class="subrayable<?php if(is_category("gastronomia")){echo ' subrayado"';} ?>" href="<?php echo site_url('/category/gastronomia'); ?>">Gastronomía</a>
          <a class="subrayable<?php if(is_category("experiencias")){echo ' subrayado"';} ?>" href="<?php echo site_url('/category/experiencias'); ?>">Experiencias</a>
          <?php if ( !$isMagazine ): ?>
            <a class="subrayable<?php if(is_page("about")){echo ' subrayado"';} ?>" href="<?php echo site_url('/about'); ?>">About Us</a>
          <?php endif; ?>
          <a class="subrayable<?php if(is_page("eventos")){echo ' subrayado"';} ?>" href="<?php echo site_url('/eventos'); ?>">Eventos</a>
          <a class="subrayable magazineLink<?php if(is_page("magazine")){echo ' subrayado"';} ?>" href="<?php echo site_url('/magazine'); ?>">CBbC <span class="specialTxt">Life</span> Magazine</a>
          <button class="suscribeButton">+SUSCRIBETE</button>
        </nav>
      <?php } ?>






      <?php if( $isMagazine ){ ?>
        <a class="headerLogoCont" href="<?php echo site_url('/magazine'); ?>">
          CBbC <span class="specialTxt">Life</span> Magazine
        </a>
        <nav id="navBar" class="headerCont navBar">
          <a class="subrayable<?php if(is_front_page()){echo ' subrayado"';} ?>" href="<?php echo site_url(''); ?>">Home</a>
          <a class="subrayable<?php if(is_category("news")){echo ' subrayado"';} ?>" href="<?php echo site_url('/category/news'); ?>">News</a>
          <a class="subrayable<?php if(is_category("lugares")){echo ' subrayado"';} ?>" href="<?php echo site_url('/category/lugares'); ?>">Lugares</a>
          <a class="subrayable<?php if(is_category("paladar")){echo ' subrayado"';} ?>" href="<?php echo site_url('/category/paladar'); ?>">Paladar</a>
          <a class="subrayable<?php if(is_category("experiencias")){echo ' subrayado"';} ?>" href="<?php echo site_url('/category/experiencias'); ?>">Experiencias</a>
          <a class="subrayable<?php if(is_category("planes")){echo ' subrayado"';} ?>" href="<?php echo site_url('/category/planes'); ?>">Planes</a>
          <a class="subrayable<?php if(is_category("music")){echo ' subrayado"';} ?>" href="<?php echo site_url('/category/music'); ?>">Musica</a>
          <button class="suscribeButton">+SUSCRIBETE</button>
        </nav>
      <?php } ?>
      <div class="burger" onclick="alternateNavBar()">
        <div class="burgerBar"></div><div class="burgerBar"></div><div class="burgerBar"></div>
      </div>

    </header>


    <menu class="mobileMenu" id="mobileMenu">

      <nav id="navBar" class="navBarAlt">
        <?php if( !$isMagazine ){ ?>
        <a class="subrayable homeLink<?php if(is_front_page()){echo ' subrayado"';} ?>" href="<?php echo site_url(''); ?>">CBbC</a>
        <div class="subrayable mobileMenuLocationLink">
          <p class="locationText">Localización</p>
          <div class="navBarLocations">
            <a class="navBarLocationLinks subrayable" href="">Ibiza</a>
            <a class="navBarLocationLinks subrayable" href="">Andorra</a>
          </div>
        </div>
        <a class="subrayable<?php if(is_category("gastronomia")){echo ' subrayado"';} ?>" href="<?php echo site_url('/category/gastronomia'); ?>">Gastronomía</a>
        <a class="subrayable<?php if(is_category("experiencias")){echo ' subrayado"';} ?>" href="<?php echo site_url('/category/experiencias'); ?>">Experiencias</a>
        <a class="subrayable<?php if(is_page("about")){echo ' subrayado"';} ?>" href="<?php echo site_url('/about'); ?>">About Us</a>
        <a class="subrayable<?php if(is_page("eventos")){echo ' subrayado"';} ?>" href="<?php echo site_url('/eventos'); ?>">Eventos</a>
        <a class="subrayable magazineLink<?php if(is_page("magazine")){echo ' subrayado"';} ?>" href="<?php echo site_url('/magazine'); ?>">CBbC <span class="specialTxt">Life</span> Magazine</a>
        <button class="suscribeButton">+SUSCRIBETE</button>
      <?php } ?>





      <?php if( $isMagazine ){ ?>
        <a class="subrayable<?php if(is_front_page()){echo ' subrayado"';} ?>" href="<?php echo site_url(''); ?>">Home</a>
        <a class="subrayable<?php if(is_category("news")){echo ' subrayado"';} ?>" href="<?php echo site_url('/category/news'); ?>">News</a>
        <a class="subrayable<?php if(is_category("lugares")){echo ' subrayado"';} ?>" href="<?php echo site_url('/category/lugares'); ?>">Lugares</a>
        <a class="subrayable<?php if(is_category("paladar")){echo ' subrayado"';} ?>" href="<?php echo site_url('/category/paladar'); ?>">Paladar</a>
        <a class="subrayable<?php if(is_category("experiencias")){echo ' subrayado"';} ?>" href="<?php echo site_url('/category/experiencias'); ?>">Experiencias</a>
        <a class="subrayable<?php if(is_category("planes")){echo ' subrayado"';} ?>" href="<?php echo site_url('/category/planes'); ?>">Planes</a>
        <a class="subrayable<?php if(is_category("music")){echo ' subrayado"';} ?>" href="<?php echo site_url('/category/music'); ?>">Musica</a>
        <button class="suscribeButton">+SUSCRIBETE</button>
      <?php } ?>


      </nav>


      <button class="close" onclick="alternateNavBar()">
        <div class="cross"></div>
        <div class="cross cross2"></div>
      </button>
    </menu>
