<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"> 
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="format-detection" content="telephone=no">
		<meta name="description" content="WordPress theme development static data for beginners">
		<meta name="keywords" content="WordPress, Theme, development">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
      <div class="l-contents">
	   <article class="l-contents__header">
	    <div class="c-bar">
		 <button class="c-bar__button">Menu</button>
		</div>

		 <header class="l-header__container">
		 <p class="l-header__title"><a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo( 'name' ); ?></a></p>
		    <?php get_search_form();?>
		 </header>

