<?php
    //テーマサポート
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );

    //タイトル出力
    function front_page( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'front_page' );


    function add_css_js() {//関数名add_css_js()を作成
        //CSSの読み込みはここから
        
        //全てのページにstyle.cssを読み込み
        wp_enqueue_style('style',get_template_directory_uri().'/style.css' );
        
        //全てのページにcss/store.cssを読み込み
        wp_enqueue_style('profile', get_template_directory_uri().'/css/profile.css');
    
        //JavaScriptの読み込みはここから
        
        //全てのページにjs/pagetop.jsを読み込み
        wp_enqueue_script('script', get_template_directory_uri().'/js/script.js');
        
    }
      add_action('wp_enqueue_scripts', 'add_css_js');
        // wp_enqueue_scriptsフックにadd_stylesheet関数を登録