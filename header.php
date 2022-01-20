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
  <div id="loading">
  <div class="loader">
  <span class="inner one"></span>
  <span class="inner two"></span>
  <span class="inner three"></span>
  <span class="inner four"></span>
  <span class="inner five"></span>
  <span class="inner six"></span>
</div>
<div class="loading-text">
		<span class="loading-text-words">L</span>
		<span class="loading-text-words">O</span>
		<span class="loading-text-words">A</span>
		<span class="loading-text-words">D</span>
		<span class="loading-text-words">I</span>
		<span class="loading-text-words">N</span>
		<span class="loading-text-words">G</span>
    <span class="loading-text-words">.</span>
    <span class="loading-text-words">.</span>
    <span class="loading-text-words">.</span>
	</div>
</div>
<!-- <div class="loading">
	<div class="loading-text">
		<span class="loading-text-words">L</span>
		<span class="loading-text-words">O</span>
		<span class="loading-text-words">A</span>
		<span class="loading-text-words">D</span>
		<span class="loading-text-words">I</span>
		<span class="loading-text-words">N</span>
		<span class="loading-text-words">G</span>
    <span class="loading-text-words">.</span>
    <span class="loading-text-words">.</span>
    <span class="loading-text-words">.</span>
	</div>
</div> -->
    <!-- 緑のカーソル部分初め -->
    <div class="f-cursor">
      <div class="f-cursor2">
        <span class="dot1"></span>
        <span class="dot2"></span>
      </div>
    <!-- 緑のカーソル部分終わり -->
      <div class="f-body">
        <!-- particles.js 初め -->
        <canvas class="f-body__background"></canvas>
        <!-- particles.js 終わり -->
    <?php wp_body_open(); ?>
      <header class="l-header">
        <button type="button" class="c-header__botton">
          <div class="c-header__botton--line">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <p class="c-header__botton--text">Menu</p>
          <p class="c-header__botton--text is-active">Close</p>
        </button>
        <div class="c-header__underbotton">
          <a href="https://twitter.com/@murakami_web"><img loading="lazy" class="c-header__botton--twitterimage" src="<?php echo esc_url( get_template_directory_uri() . "/image/header_icon.png" ); ?>"></img></a>
        </div>
        <div class="l-header__container--tab">
          <div class="l-header__container--z">
          <img loading="lazy" class="c-header__container--pageimage" src="<?php echo esc_url( get_template_directory_uri() . "/image/header_img.png" ); ?>"></img>
              <ul>
                <li><a href="<?php echo esc_url(home_url('')); ?>">Top</a></li>
                <li><a href="<?php echo esc_url(home_url('Profile')); ?>">Profile</a></li>
                <li><a href="<?php echo esc_url(home_url('Works')); ?>">Works</a></li>
                <li><a href="<?php echo esc_url(home_url('Contact')); ?>">Contact</a></li>
              </ul>
          </div>
          <div class="l-header__container--haikei"></div> 
        </div>
      </header>
<!-- header.php終わり -->
