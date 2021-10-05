<?php get_header(); ?>

<div class="p-section__p">
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 <?php the_post_thumbnail('large'); ?>
       <h1><?php the_title(); ?></h1>
       <div class="p-section__p--content">
         <?php the_content(); ?>
       </div>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>