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
   <div class="f-cursor">
     <div class="f-cursor2">
     <span class="dot1"></span>
     <span class="dot2"></span>
   </div>
   <div class="f-body">
   <canvas class="f-body__background"></canvas>

   <?php wp_body_open(); ?>

   
   
   
  <!-- ローディング画面 -->
  <!-- <div id="loading-wrapper">
    <div class="loader"></div>
    <p>Loading...</p>
  </div> -->
  <!-- 重くなったら使用（ロード画面） -->
  <!-- コンテンツ部分 -->
  <!-- <div id="page"> -->

    <header class="l-header">
    <button type="button" class="c-header__botton">
    <p class="c-header__botton--line">
    <span></span>
    <span></span>
    <span></span>
  </p>
    </button>

     <div class="l-header__container">
  
      <a href="<?php echo esc_url(home_url('')); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . "/image/gia2.png" ); ?>" alt="一覧の写真"></img></a>
	    <?php wp_nav_menu( array( 
      'theme_location' => 'header' 
      ) ); 
      ?>
    <div class="l-header__container--tab">
     <ul>
       <li><a href="<?php echo esc_url(home_url('')); ?>">Top</a></li>
       <li><a href="<?php echo esc_url(home_url('profile')); ?>">Proflie</a></li>
       <li><a href="<?php echo esc_url(home_url('skills')); ?>">Skills</a></li>
       <li><a href="<?php echo esc_url(home_url('works')); ?>">Works</a></li>
       <li><a href="<?php echo esc_url(home_url('contact')); ?>">Contact</a></li>
     </ul> 
	   </div>
    </header>
<!-- header.php終わり -->
