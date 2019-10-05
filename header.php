<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head(); ?>
  <link href="https://fonts.googleapis.com/css?family=Bitter|Raleway:300,400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amita:400,700|Great+Vibes|Niconne|Tangerine:400,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
</head>
<body>

  <?php if(is_user_logged_in()){ ?><style>:root{--top0: var(--topCero)}</style><?php }; ?>

	<view id="load" class="load"><div class="circle"></div></view>


    <header class="header">
      <a class="headerLogoCont" href="<?php echo site_url(''); ?>">
        <img class="headerLogo" src="<?php echo get_template_directory_uri(); ?>/img/logoSN.png" alt="">
      </a>
      <nav id="navBar" class="headerCont navBar">
        <a class="headerLink homeLink<?php if(is_front_page()){echo ' headerLinkActive"';} ?>" href="<?php echo site_url(''); ?>">CBbC</a>
        <a class="headerLink<?php if(is_page("localizacion")){echo ' headerLinkActive"';} ?>" href="<?php echo site_url('/localizacion'); ?>">Localización</a>
        <a class="headerLink<?php if(is_category("gastronomia")){echo ' headerLinkActive"';} ?>" href="<?php echo site_url('/category/gastronomia'); ?>">Gastronomía</a>
        <a class="headerLink<?php if(is_category("experiencias")){echo ' headerLinkActive"';} ?>" href="<?php echo site_url('/category/experiencias'); ?>">Experiencias</a>
        <a class="headerLink<?php if(is_page("about")){echo ' headerLinkActive"';} ?>" href="<?php echo site_url('/about'); ?>">About Us</a>
        <a class="headerLink<?php if(is_page("eventos")){echo ' headerLinkActive"';} ?>" href="<?php echo site_url('/eventos'); ?>">Eventos</a>
        <a class="headerLink magazineLink<?php if(is_page("magazine")){echo ' headerLinkActive"';} ?>" href="<?php echo site_url('/magazine'); ?>">CBbC <span class="specialTxt">Live</span> Magazine</a>
        <button class="suscribeButton">
          <p>+SUSCRIBETE</p>
          <div class="burger">
            <div class="burgerBar"></div><div class="burgerBar"></div><div class="burgerBar"></div>
          </div>
        </button>
      </nav>

    </header>
