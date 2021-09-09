<?php get_header(); ?>

<div class="l-main">
 <div class="c-main__section">
  <div class="c-main__container__top">
   <img class="c-main__container__img" src="<?php echo get_template_directory_uri(); ?>/image/Hamburger.png" alt="一番上の写真">
   <h2 class="c-main__container__text">Menu:</h2>
   <p class="c-main__container__subtext"><?php single_cat_title(); ?></p>
  </div>

  <div class="l-section__main">
  <div class="p-section__second">
     <h3 class="p-section__second__text">小見出しが入ります</h3>
     <p class="p-section__second__subtext">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
  </div>
  <?php
if (have_posts()) :
    while (have_posts()) :
        the_post(); ?>
        <div class="p-section__menu" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php the_post_thumbnail(); ?> 
            <div class="p-section__menu__sub">
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?> 
                <div class="p-section__menu__botton"><a href="<?php the_permalink(); ?>">詳しく見る</a></div>
            </div>
        </div>
    <?php endwhile;
else :
    ?><p>表示する記事がありません</p>
<?php endif; ?>

<div class="p-pagenation">

    <?php
     $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
     $args=array(
     'posts_per_page' => 2,
     'paged' => get_query_var('paged')
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