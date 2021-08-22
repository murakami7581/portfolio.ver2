<?php get_header(); ?>
 <div class="l-main">
  <div class="c-section">
   <div class="c-main__container__top">
    <img class="c-main__container__img" src="<?php echo get_template_directory_uri(); ?>/image/Hamburger.png" alt="一番上の写真">
    <h2 class="c-main__container__text">Search:</h2>
    <p class="c-main__container__subtext2">チーズバーガー</p>
   </div>
   <div class="l-section__main">
    <div class="p-section__second">
     <h3 class="p-section__second__text">小見出しが入ります</h3>
     <p class="p-section__second__subtext">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
    </div>
    <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
   <div class="p-section__third1">
  <img class="p-section__third1__img" src="<?php echo get_template_directory_uri(); ?>/image/cheeseburgar.png">
    <div class="p-section__third1__sub">
     <h4 class="p-section__third1__text1">見出しが入ります</h4>
     <p class="p-section__third1__text1__sp">チーズバーガー</p>
     <h5 class="p-section__third1__text2">小見出しが入リます</h5>
     <p class="p-section__third1__text3">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
      <div class="p-section__search">
	   <p class="p-section__search__text">詳しく見る</p>
      </div>
    </div>							
   </div>
   <?php endwhile; ?>
 
 <?php endif; ?>
 <?php wp_reset_query(); ?>

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