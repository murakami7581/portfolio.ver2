<?php get_header(); ?>
    <main class="l-main">
    <div class="p-main--left c-main--left">
      <p class="c-main--left__text">SCROOL</p>
      <div class="c-main--left__line"></div>
    </div>
    <article <?php post_class('p-section'); ?>>
      <div class="p-section__profile">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
          <div class="p-section__profile--content">
            <div class="p-section__profile--image">
          <?php the_post_thumbnail(''); ?>
          <?php the_content(); ?>
            </div>
          </div>
      <?php endwhile; endif; ?>
      </div>
    </article>
    </main>

<?php get_footer(); ?>