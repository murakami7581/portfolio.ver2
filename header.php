<!-- header.php初め -->
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"> 
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="WordPress theme development static data for beginners">
    <meta name="keywords" content="WordPress, Theme, development">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <div class="f-body">
    <div id="f-body__load">
      <div  class="p-load__container">
        <span class="c-load__shape  c-road__shape--animation1"></span>
        <span class="c-load__shape  c-road__shape--animation2"></span>
        <span class="c-load__shape  c-road__shape--animation3"></span>
        <span class="c-load__shape  c-road__shape--animation4"></span>
        <span class="c-load__shape  c-road__shape--animation5"></span>
        <span class="c-load__shape  c-road__shape--animation6"></span>
      </div>
      <div class="c-load__text">
        <span>L</span>
        <span>O</span>
        <span>A</span>
        <span>D</span>
        <span>I</span>
        <span>N</span>
        <span>G</span>
        <span>.</span>
        <span>.</span>
        <span>.</span>
      </div>
    </div>
    <div class="f-body__cursor">
      <span class="f-body__cursor--smail"></span>
      <span class="f-body__cursor--large"></span>
      <!-- particles.js 初め -->
      <canvas class="f-body__background is-particles"></canvas>
      <!-- particles.js 終わり -->
    <?php wp_body_open(); ?>
      <header class="l-header">
        <button type="button" class="p-hamburger c-hamburger js-hamburger">
          <div class="c-hamburger__line is-hamburger__line">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <p class="c-hamburger__text">Menu</p>
          <p class="c-hamburger__text is-active">Close</p>
        </button>
        <div class="p-header__container is-header__container">
          <div class="p-header__menu c-header__menu c-header__menu--bg">
          <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/header_img.png"); ?>" alt=”PageSelectのタイトル”></img>  
            <nav>
              <ul>
                <li><a href="<?php echo esc_url(home_url('')); ?>">Top</a></li>
                <li><a href="<?php echo esc_url(home_url('Profile')); ?>">Profile</a></li>
                <li><a href="<?php echo esc_url(home_url('Works')); ?>">Works</a></li>
                <li><a href="<?php echo esc_url(home_url('Contact')); ?>">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="c-header__image c-header__image--bg"></div> 
        </div>
      </header>
<!-- header.php終わり -->
