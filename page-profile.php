<?php get_header(); ?>
<main class="l-main">
 <p class="l-main__text--scrool">SCROOL</p>
 <div class="l-main--line"></div>
<article>
<div class="p-section__profile">
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 <?php the_post_thumbnail('large'); ?>
       <h1><?php the_title(); ?></h1>
       <div class="p-section__profile--content">
         <?php the_content(); ?>
       </div>
    <?php endwhile; endif; ?>
</div>
</article>
</main>

<?php get_footer(); ?>