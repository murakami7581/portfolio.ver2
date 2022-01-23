<?php get_header(); ?>
  <main class="l-main">
    <div class="p-leftside c-leftside">
      <p class="c-leftside__text">SCROOL</p>
      <div class="c-leftside__line"></div>
    </div>
    <div class="c-rightside__botton">
      <a href="https://twitter.com/@murakami_web"><img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/header_icon.png" ); ?>" alt=”Twitterのアイコン></img></a>
    </div>
    <article <?php post_class('p-section'); ?>>
      <div class="p-section__inner p-profile">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
          <div class="p-profile__content">
            <div class="p-profile__image">
          <?php the_post_thumbnail(''); ?>
          <?php the_content(); ?>
            </div>
          </div>
      <?php endwhile; endif; ?>
      </div>
    </article>
    </main>

<?php get_footer(); ?>