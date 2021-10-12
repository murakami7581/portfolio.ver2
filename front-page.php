<?php get_header(); ?>
<main class="l-main">
  <p class="l-main__text--scrool">SCROOL</p>
  <div class="l-main--line"></div>
 <article>
  <div class="p-section">
  <div class="p-section__text">
  <p class="p-section__text--cursive">Portforio</p>
  
   <img class="p-section__img" src="<?php echo esc_url( get_template_directory_uri() . "/image/tunnel.jpg" ); ?>" alt="一番上の写真">
  </div>
    <div class="p-section__top">
    <!-- 写真は後日写真スタジオで撮影したものを使用 -->
     <h2>Profile</h2> 
     <div class="p-section__top__inner--text">
       <p class="p-section__top__inner--text1">このポートフォリオサイトを閲覧していただきありがとうございます。
         <br>初めまして未経験からWeb制作に転職希望の村上良哉と申します。</p>
         <p class="p-section__top__inner--text2">前職は電力グループ会社に４年４ヶ月勤めていました。</p>
         <p class="p-section__top__inner--text3">Webサイトのコーディングを独学＋スクールで学び、現在はスキルの幅を増やすためデザイン業務を学習しています。</p>
     </div>
     </div>
     <div class="p-section__top__botton">
     <a href="<?php echo esc_url(home_url('profile')); ?>">〜Detail〜
    </a>
     </div>
 
   <div class="p-section__center">
   <div class="p-section__center--inner"></div>
    <h2>Skills</h2>
    <div class="p-section__center__botton">
     <a href="<?php echo esc_url(home_url('skills')); ?>">Detail</a>
    </div>

     <div class="p-section__square">
      <div class="p-section__square__content">
       <div class="p-section__square__content--inner1">
       <div class="p-section__square__content--inner2">
       <div class="p-section__square__content--inner3">
       <div class="p-section__square__content--inner4">  
        <p class="p-section__square__content__txt--top"><img src="<?php echo esc_url( get_template_directory_uri() . "/image/javascript.png" ); ?>"></img></p>
        <p class="p-section__square__content__txt--top-right"><img src="<?php echo esc_url( get_template_directory_uri() . "/image/JQuery.png" ); ?>"></img></p>
        <p class="p-section__square__content__txt--right"><img src="<?php echo esc_url( get_template_directory_uri() . "/image/sass.png" ); ?>"></img></p>
        <p class="p-section__square__content__txt--bottom-right"><img src="<?php echo esc_url( get_template_directory_uri() . "/image/wordpress.png" ); ?>"></img></p>
        <p class="p-section__square__content__txt--bottom"><img src="<?php echo esc_url( get_template_directory_uri() . "/image/Illustrator.png" ); ?>"></img></p>
        <p class="p-section__square__content__txt--bottom-left"><img src="<?php echo esc_url( get_template_directory_uri() . "/image/Photoshop.png" ); ?>"></img></p>
        <p class="p-section__square__content__txt--left"><img src="<?php echo esc_url( get_template_directory_uri() . "/image/html.png" ); ?>"></img></p>
        <p class="p-section__square__content__txt--top-left"><img src="<?php echo esc_url( get_template_directory_uri() . "/image/css.png" ); ?>"></img></p>
        </div>
        </div>
        </div>
        </div>
      </div>
     </div>
    </div>
    </div>
   <div class="p-section__under">
   <div class="p-section__under--inner"></div>
     <h2>Works</h2>
     <a href="<?php echo esc_url(home_url('works')); ?>">Achievement list</a>
     <div class="pitems">
	<div class="item"><img src="<?php echo esc_url( get_template_directory_uri() . "/image/hambargar.png" ); ?>"></img></div>
	<div class="item"><img src="<?php echo esc_url( get_template_directory_uri() . "/image/hambargar.png" ); ?>"></img></div>
	<div class="item"><img src="<?php echo esc_url( get_template_directory_uri() . "/image/hambargar.png" ); ?>"></img></div>
  
</div>
   </div>
   
 </div>
</div>
</article>
</main>


<?php get_footer(); ?>


