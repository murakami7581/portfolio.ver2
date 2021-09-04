
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
      register_nav_menu( 'categrymenu','CategryMenu');
      register_nav_menu( 'footer','Footer');
    }
    add_action( 'after_setup_theme', 'register_my_menu' ); 

    function add_css_js() {//関数名add_css_js()を作成
        //CSSの読み込みはここから
        
        //全てのページにstyle.cssを読み込み
        wp_enqueue_style('style',get_template_directory_uri().'/style.css' );
        
        //全てのページにcss/store.cssを読み込み
        wp_enqueue_style('profile', get_template_directory_uri().'/css/profile.css');
    
        //JavaScriptの読み込みはここから
        
        //全てのページにjs/pagetop.jsを読み込み
        

        wp_enqueue_script('script', get_template_directory_uri().'/js/script.js','jquery', $theme_version, true );    

    }
      add_action('wp_enqueue_scripts', 'add_css_js');
        // wp_enqueue_scriptsフックにadd_stylesheet関数を登録
    
        function load_google_cdn() {
            if ( !is_admin() ){
              //jQueryを登録解除
              wp_deregister_script( 'jquery' );
              
              //Google CDNのjQueryを出力
              wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), NULL, true );
            }
          }
          add_action( 'init', 'load_google_cdn' );



          

        
