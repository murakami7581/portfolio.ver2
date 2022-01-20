<?php get_header(); ?>
<main class="l-main">
  <div class="p-main--left c-main--left">
    <p class="c-main--left__text">SCROOL</p>
    <div class="c-main--left__line"></div>
  </div>
  <article>
    <div class="p-section__contact">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_post_thumbnail('large'); ?>
          <h1><?php the_title(); ?></h1>
          <div class="p-section__contact--content">
            <?php the_content(); ?>
          </div>
        <?php endwhile; endif; ?>
    </div>
  </article>
</main>
<?php get_footer(); ?>