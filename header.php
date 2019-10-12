<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head(); ?>
  <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre:400,600&display=swap" rel="stylesheet">
</head>
<body>

  <?php if(is_user_logged_in()){ ?><style>:root{--top0: var(--topCero)}</style><?php }; ?>

	<view id="load" class="load"><div class="circle"></div></view>


    <header class="header">
      <?php if(is_front_page()){ ?>
        <a class="headerLogoCont" href="<?php echo site_url(''); ?>">
          <img class="headerLogo" src="<?php echo get_template_directory_uri(); ?>/img/logoCasiLimpio.png" alt="">
        </a>
      <?php } ?>
      <?php if(is_page(array("magazine"))){ ?>
        <a class="headerLogoCont" href="<?php echo site_url('/magazine'); ?>">
          CBbC <span class="specialTxt">Life</span> Magazine
        </a>
      <?php } ?>
      <nav id="navBar" class="headerCont navBar">
        <a class="subrayable homeLink<?php if(is_front_page()){echo ' subrayado"';} ?>" href="<?php echo site_url(''); ?>">CBbC</a>
        <a class="subrayable<?php if(is_page("localizacion")){echo ' subrayado"';} ?>" href="<?php echo site_url('/localizacion'); ?>">Localización</a>
        <a class="subrayable<?php if(is_category("gastronomia")){echo ' subrayado"';} ?>" href="<?php echo site_url('/category/gastronomia'); ?>">Gastronomía</a>
        <a class="subrayable<?php if(is_category("experiencias")){echo ' subrayado"';} ?>" href="<?php echo site_url('/category/experiencias'); ?>">Experiencias</a>
        <a class="subrayable<?php if(is_page("about")){echo ' subrayado"';} ?>" href="<?php echo site_url('/about'); ?>">About Us</a>
        <a class="subrayable<?php if(is_page("eventos")){echo ' subrayado"';} ?>" href="<?php echo site_url('/eventos'); ?>">Eventos</a>
        <a class="subrayable magazineLink<?php if(is_page("magazine")){echo ' subrayado"';} ?>" href="<?php echo site_url('/magazine'); ?>">CBbC <span class="specialTxt">Life</span> Magazine</a>
        <button class="suscribeButton">+SUSCRIBETE</button>
      </nav>
      <div class="burger" onclick="alternateNavBar()">
        <div class="burgerBar"></div><div class="burgerBar"></div><div class="burgerBar"></div>
      </div>

    </header>


    <menu class="mobileMenu" id="mobileMenu">

      <nav id="navBar" class="navBarAlt">
        <a class="subrayable homeLink<?php if(is_front_page()){echo ' subrayado"';} ?>" href="<?php echo site_url(''); ?>">CBbC</a>
        <a class="subrayable<?php if(is_page("localizacion")){echo ' subrayado"';} ?>" href="<?php echo site_url('/localizacion'); ?>">Localización</a>
        <a class="subrayable<?php if(is_category("gastronomia")){echo ' subrayado"';} ?>" href="<?php echo site_url('/category/gastronomia'); ?>">Gastronomía</a>
        <a class="subrayable<?php if(is_category("experiencias")){echo ' subrayado"';} ?>" href="<?php echo site_url('/category/experiencias'); ?>">Experiencias</a>
        <a class="subrayable<?php if(is_page("about")){echo ' subrayado"';} ?>" href="<?php echo site_url('/about'); ?>">About Us</a>
        <a class="subrayable<?php if(is_page("eventos")){echo ' subrayado"';} ?>" href="<?php echo site_url('/eventos'); ?>">Eventos</a>
        <a class="subrayable magazineLink<?php if(is_page("magazine")){echo ' subrayado"';} ?>" href="<?php echo site_url('/magazine'); ?>">CBbC <span class="specialTxt">Life</span> Magazine</a>
        <button class="suscribeButton">+SUSCRIBETE</button>
      </nav>


          <button class="close" onclick="alternateNavBar()">
            <div class="cross"></div>
            <div class="cross cross2"></div>
          </button>
    </menu>
