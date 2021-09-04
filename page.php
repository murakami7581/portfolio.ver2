
<?php get_header(); ?>

<div class="p-main">
     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       <div class="p-top__image">
         <?php the_post_thumbnail('thumbnail'); ?>
         <h1><?php the_title(); ?></h1>
       </div>

       <div class="p-main__section1">
         <?php the_content(); ?>
       </div>
    <?php endwhile; endif; ?>
</div>
</article>

<?php get_sidebar(); ?>

<?php get_footer(); ?>