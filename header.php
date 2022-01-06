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
      <!-- ヘッダー部分 初め -->
      <header class="l-header">
        <!-- ハンバーガーメニュー 初め -->
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
          <a href="https://twitter.com/@murakami_web"><img class="c-header__botton--twitterimage" src="<?php echo esc_url( get_template_directory_uri() . "/image/Twitter.png" ); ?>"></img></a>
        </div>
        <!-- ハンバーガーメニュー 終わり -->
        <!-- ハンバーガーメニュー内のメニュー部分 初め -->
        <div class="l-header__container--tab">
        <div class="l-header__container--z">
            <ul>
              <li><a href="<?php echo esc_url(home_url('')); ?>"><img class="l-header__container--topimage" src="<?php echo esc_url( get_template_directory_uri() . "/image/Top.png" ); ?>"></img></a></li>
              <li><a href="<?php echo esc_url(home_url('Profile')); ?>"><img class="l-header__container--profileimage" src="<?php echo esc_url( get_template_directory_uri() . "/image/Profile.png" ); ?>"></img></a></li>
              <li><a href="<?php echo esc_url(home_url('Works')); ?>"><img class="l-header__container--worksimage" src="<?php echo esc_url( get_template_directory_uri() . "/image/Works.png" ); ?>"></img></a></li>
              <li><a href="<?php echo esc_url(home_url('Contact')); ?>"><img class="l-header__container--contactimage" src="<?php echo esc_url( get_template_directory_uri() . "/image/Contact.png" ); ?>"></img></a></li>
            </ul>
</div>
            <div class="l-header__container--haikei"><img src="<?php echo esc_url( get_template_directory_uri() . "/image/tunnel3.png" ); ?>"></img>
          <div> 
        </div>
        <!-- ハンバーガーメニュー内のメニュー部分 終わり -->
      </header>
      <!-- ヘッダー部分 終わり -->
<!-- header.php終わり -->
