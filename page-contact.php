<?php get_header(); ?>

<div class="c-section__contact">
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 <?php the_post_thumbnail('large'); ?>
       <h1><?php the_title(); ?></h1>
       <div class="c-section__contact--content">
         <?php the_content(); ?>
       </div>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>