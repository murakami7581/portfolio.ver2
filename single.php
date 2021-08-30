<?php get_header(); ?>


<div class="p-main">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<div class="p-main__section1">
    <?php the_content(); ?>
</div>
<?php endwhile; endif; ?>
</div>
</article>	

<?php get_sidebar(); ?>

<?php get_footer(); ?>