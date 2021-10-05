<?php get_header(); ?>

<div class="p-section__skills">
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 <?php the_post_thumbnail('thumbnail'); ?>
 <h1><?php the_title(); ?></h1>
       
       <div class="p-section__skills--content">
         <?php the_content(); ?>
       </div>
    <?php endwhile; endif; ?>
    </div>

<?php get_footer(); ?>