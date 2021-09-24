
<?php get_header(); ?>
 <div class="l-main">
  <div class="c-main__container">
   <div class="c-main__container__top">
    <img class="c-main__container__img1" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_img.png" ); ?>" alt="一番上の写真">
    <img class="c-main__container__img1sp" src="<?php echo esc_url( get_template_directory_uri() . "/image/mainvisual-sp.png" ); ?>" alt="一番上の写真">
    <p class="c-main__container__text">ダミーサイト</p>
   </div>
  
    <div class="p-section">
    <?php wp_nav_menu( array( 
    'theme_location' => 'main' 
    ) ); 
   ?>
     <div class="p-section__left">
      <img class="p-section__left__img" src="<?php echo esc_url( get_template_directory_uri() . "/image/sub_img2.png" ); ?>" alt="真ん中（左）の写真">

       <div class="p-section__text1">
        <h4 class="p-section__text1-1">Take OUT</h4>
        <p class="p-section__text__sub">当店のテイクアウトで利用できる商品を掲載しています</p>
       </div>
         
       <div class="p-section__text2">
        <h4 class="p-section__text2-1">Take OUT</h4>
        <p class="p-section__text__sub">当店のテイクアウトで利用できる商品を掲載しています</p>
       </div>
     </div>
     
     <div class="p-section__right">
      <img class="p-section__right__img" src="<?php echo esc_url( get_template_directory_uri() . "/image/sub_img3.png" ); ?>" alt="真ん中（右）の写真">

       <div class="p-section__text1">
        <h4 class="p-section__text1-1">Take OUT</h4>
        <p class="p-section__text__sub">当店のテイクアウトで利用できる商品を掲載しています</p>
       </div>

       <div class="p-section__text2">
        <h4 class="p-section__text2-1">Take OUT</h4>
        <p class="p-section__text__sub">当店のテイクアウトで利用できる商品を掲載しています</p>
       </div>
      </div>
    </div>
   
<div class="p-section__map">
  <iframe src="https://maps.google.co.jp/maps?output=embed&z=18&ll=35.658608938829000,139.74324421519987&q=東京タワー" width="550" height="300" frameborder="0" style="border:0;width:100%;filter:brightness(70%);-webkit-filter:brightness(70%)" allowfullscreen></iframe>
     <div class="p-section__map1"></div>
      <div class="p-section__map2">
       <h2 class="p-section__map2__text">見出しが入ります</h2>
       <p class="p-section__map2__subtext">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
       </p>
</div>
   </div>
 </div>
 </div>
    
</article>
<!----- メインコンテンツ END --- -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
