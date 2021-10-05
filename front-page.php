<?php get_header(); ?>
<main class="l-main">

<article>
  
<div class="p-section">

 <div class="p-section__top">
 <img class="p-section__top--img" src="<?php echo esc_url( get_template_directory_uri() . "/image/people.jpg" ); ?>" alt="１番目の写真"></img>
 <!-- 写真は後日写真スタジオで撮影したものを使用 -->
 <h2>Profile</h2>

  <div class="p-section__top--botton">
  <a href="<?php echo esc_url(home_url('profile')); ?>">詳しくはこちら</a>
</div>
 </div>

 <div class="p-section__center">
  <img class="p-section__center--img1" src="<?php echo esc_url( get_template_directory_uri() . "/image/matrix.jpg" ); ?>" alt="１番目の写真"></img>
  <img class="p-section__center--img2" src="<?php echo esc_url( get_template_directory_uri() . "/image/android.png" ); ?>" alt="２番目の写真"></img>
  <h2>Skills</h2>
  <div class="c-section__center--botton">
  <a href="<?php echo esc_url(home_url('skills')); ?>">詳しくはこちら</a>
</div>
<div class="p-section__center--column">
    <section class="circle-box">
        <div class="item"><img src="<?php echo esc_url( get_template_directory_uri() . "/image/javascript.png" ); ?>"></img></div>
        <div class="item"><img src="<?php echo esc_url( get_template_directory_uri() . "/image/JQuery.png" ); ?>"></img></div>
        <div class="item"><img src="<?php echo esc_url( get_template_directory_uri() . "/image/sass.png" ); ?>"></img></div>
        <div class="item"><img src="<?php echo esc_url( get_template_directory_uri() . "/image/computer.png" ); ?>"></img></div>
        <div class="item"><img src="<?php echo esc_url( get_template_directory_uri() . "/image/wordpress.png" ); ?>"></img></div>
        <div class="item"><img src="<?php echo esc_url( get_template_directory_uri() . "/image/Illustrator.png" ); ?>"></img></div>
        <div class="item"><img src="<?php echo esc_url( get_template_directory_uri() . "/image/Photoshop.png" ); ?>"></img></div>
        <div class="item"><img src="<?php echo esc_url( get_template_directory_uri() . "/image/html.png" ); ?>"></img></div>
        <div class="item"><img src="<?php echo esc_url( get_template_directory_uri() . "/image/css.png" ); ?>"></img></div>
    </section>
</div>
</div>

   <div class="p-section__under">
     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       <div class="p-section__under--img">
         <h2>Works</h2>
       </div>
       <div class="p-section__under--inner">
         <?php the_content(); ?>
         <a href="<?php echo esc_url(home_url('works')); ?>">実績の一覧へ</a>
       </div>
    <?php endwhile; endif; ?>
</div>
   <div class="p-section__contact"></div>
 </div>
 </div>
</article>
</main>


<?php get_footer(); ?>


