<?php
 function custom_theme_support() {
     add_theme_support( 'html5', array(
     'search-form',
     'comment-form',
     'comment-list',
     'gallery','caption',
     ));
     add_theme_support( 'post-thumbnails' );
     add_theme_support( 'title-tag' );

    }
    add_action( 'after_setup_theme', 'custom_theme_support' );

    function register_my_menu() {
      register_nav_menu( 'header','Header');
      register_nav_menu( 'hamburger','Hamburger');
      
    }
    add_action( 'after_setup_theme', 'register_my_menu' ); 

    function add_css_js() {//関数名add_css_js()を作成
        //CSSの読み込みはここから
        
        //全てのページにstyle.cssを読み込み
        wp_enqueue_style('css',get_template_directory_uri().'/style.css' );
        
        //全てのページにcss/style.cssを読み込み
        wp_enqueue_style('style', get_template_directory_uri().'/css/style.css');
        wp_enqueue_script('script', get_template_directory_uri().'/js/script.js','jquery', '1.0.0', true );    
        wp_enqueue_style('slick', get_template_directory_uri().'/css/slick.css');
        wp_enqueue_style('slick-theme', get_template_directory_uri().'/css/slick-theme.css');
        //JavaScriptの読み込みはここから
        
        //全てのページにjs/script.jsを読み込み
        

    

    }
      add_action('wp_enqueue_scripts', 'add_css_js');
        // wp_enqueue_scriptsフックにadd_stylesheet関数を登録
    
        function load_google_cdn() {
            if ( !is_admin() ){
              //jQueryを登録解除
              wp_deregister_script( 'jquery' );
              
              //Google CDNのjQueryを出力
              wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), NULL, true );
              wp_enqueue_script( 'particlesjs', 'https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js', array(), NULL, true );
            }
          }
          add_action( 'init', 'load_google_cdn' );

          function SearchFilter($query) {
            if ( !is_admin() && $query->is_main_query() && $query->is_search() ) {
            $query->set( 'post_type', 'post' );
            }
            }
            add_action( 'pre_get_posts','SearchFilter' );

            add_filter( 'use_default_gallery_style', '__return_false' );

            add_theme_support( 'automatic-feed-links' );

//functions.phpに定義する関数
function get_index() {
  //グローバル変数を使う為の宣言
  global $post;
  //マッチングで<h>タグを取得する
  preg_match_all('/<h[1-6]>.+<\/h[1-6]>/u', $post->post_content, $matches);
  //取得した<h>タグの個数をカウント
  $matches_count = count($matches[0]);
  if(empty($matches)){
      //<h>タグがない場合の出力
      echo '<span>Sorry no index</span>';
  }else{
      //<h>タグが存在する場合に<h>タグを出力
      for ($i = 0; $i < $matches_count; $i++){
          echo  $matches[0][$i];
      }
  }     
}

//デフォルトのCSSを止める
add_filter( 'use_default_gallery_style', '__return_false' );

function redirect_404() { if(is_front_page() || is_single() || is_archive() || is_page()|| is_search()) return; include(TEMPLATEPATH . '/404.php'); exit; } add_action('template_redirect', 'redirect_404');





