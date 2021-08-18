<?php get_header(); ?>

<div class="l-main">
 <div class="c-main__section">
  <div class="c-main__container__top">
   <img class="c-main__container__img" src="<?php echo get_template_directory_uri(); ?>/image/Hamburger.png" alt="一番上の写真">
   <h2 class="c-main__container__text">Menu:</h2>
   <p class="c-main__container__subtext">チーズバーガー</p>
  </div>

  <div class="l-section__main">
   <div class="p-section__second">
    <h3 class="p-section__second__text">小見出しが入ります</h3>
    <p class="p-section__second__subtext">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
   </div>

   <div class="p-section__third1">
    <img class="p-section__third1__img" src="<?php echo get_template_directory_uri(); ?>/image/cheeseburgar.png">
     <div class="p-section__third1__sub">
      <h4 class="p-section__third1__text1">チーズバーガー</h4>
      <h5 class="p-section__third1__text2">小見出しが入リます</h5>
      <p class="p-section__third1__text3">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
      <div class="p-section__search">
	   <p class="p-section__search__text"><a href="single.html">詳しく見る</a></p>
      </div>
     </div>												
   </div>

   <div class="p-section__third2">
    <img class="p-section__third2__img" src="<?php echo get_template_directory_uri(); ?>/image/cheeseburgar.png">
     <div class="p-section__third2__sub">
      <h4 class="p-section__third2__text1">ダブルチーズバーガー</h4>
      <h5 class="p-section__third1__text2">小見出しが入リます</h5>
      <p class="p-section__third1__text3">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
      <div class="p-section__search">
	   <p class="p-section__search__text"><a href="single.html">詳しく見る</a></p>
      </div>
     </div>												
   </div>

   <div class="p-section__third3">
    <img class="p-section__third3__img" src="<?php echo get_template_directory_uri(); ?>/image/cheeseburgar.png">
     <div class="p-section__third3__sub">
      <h4 class="p-section__third3__text1">スペシャルチーズバーガー</h4>
      <h5 class="p-section__third1__text2">小見出しが入リます</h5>
      <p class="p-section__third1__text3">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
      <div class="p-section__search">
       <p class="p-section__search__text"><a href="single.html">詳しく見る</a></p>
      </div>
     </div>
   </div>

   <div class="p-pagenation">

    <?php
     $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
     $args=array(
     'posts_per_page' => 1,
     );
     $my_query = new WP_Query( $args );
     if($my_query->have_posts()):
    ?>

    <?php
    if(function_exists('wp_pagenavi')):
    ?>
    <ul class="wp-pagenavi">
    <li class="clearfix">

    <?php
    wp_pagenavi(array('query'=>$my_query));
    ?>
    </li>
    </ul>
    <?php
    endif;
    wp_reset_postdata();
    else:
    ?>

    <?php
    endif;
    ?>
   </div>

  </div>
 </div>	
</div>
</article>	

<?php get_sidebar(); ?>

<?php get_footer(); ?>