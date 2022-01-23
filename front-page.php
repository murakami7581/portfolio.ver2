<?php get_header(); ?>
  <main class="l-main">
      <div class="p-leftside c-leftside">
        <p class="c-leftside__text">SCROOL</p>
        <div class="c-leftside__line"></div>
      </div>
      <div class="c-rightside__botton">
        <a href="https://twitter.com/@murakami_web"><img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/header_icon.png" ); ?>" alt=”Twitterのアイコン”></img></a>
      </div>
      <article <?php post_class('p-section'); ?>>
        <div class="p-title c-title">
          <img loading="eager" class="c-title__image" src="<?php echo esc_url( get_template_directory_uri() . "/image/title.png" ); ?>"></img>
        </div>
        <div class="p-section__inner">
          <section class="p-section__top">
            <h1>Profile</h1> 
            <div class="p-section__top c-section__topimage">
              <img loading="eager" class="c-section__topimage--pc" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_imgtop.gif" ); ?>"alt=”一番上のグリッチPC画像”></img>
              <img loading="eager" class="c-section__topimage--sp" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_imgsp2.gif" ); ?>"alt=”一番上のグリッチタブレット、スマホ画像”></img>
              <div class="c-section__toptext">
                <p class="c-section__toptext--glitch">ERROR</p> 
              </div>
              <botton class="p-botton__top c-section__botton">
                <a href="<?php echo esc_url(home_url('profile')); ?>">ERROR CLEAR</a>
              </botton>
            </div>
          </section>
          <section class="p-section__center">
            <h1>Skill</h1>
            <div class="p-circle__background c-circle">
              <img loading="lazy" class="c-circle__leftimage" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_circle01.png" ); ?>" alt=真ん中のサークル画像左側></img>
              <img loading="lazy" class="c-circle__rightimage" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_circle02.png" ); ?>" alt=真ん中のサークル画像右側></img>
            </div>

            <div class="c-center__title--sp">
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/No001.png" ); ?>" alt=HTMLのタイトル></img>
            </div>
    
            <div class="p-circle1 c-circle">
              <img loading="lazy" class="c-circle1__image" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_circle03.png" ); ?>" alt=小さなサークル画像></img>
              <div class="p-skill">
                <div class="c-skill__center"></div>
                <div class="c-skill__shape">
                  <div class="c-skill__shape--icon c-skill__shape--icon1">
                    <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon01.png" ); ?>" alt=HTMLのアイコン></img>
                  </div>
                  <div class="c-hexagon">
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
                </div>
                <div class="p-center__box c-box__background">
                  <div class="p-center__leftbox c-leftbox c-leftbox__background">
                    <img loading="lazy" class="c-leftbox__icon c-leftbox__icon1" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon01.png" ); ?>"alt=HTMLのアイコン></img>
                  </div>
                  <div class="p-center__rightbox c-rightbox__background">
                    <h3>HTML5</h3>
                    <p>開発環境:MaC<br>使用エディタ:Visual Studio Code</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-center__text--sp"><p>開発環境:MaC<br>使用エディタ:Visual Studio Code</p></div>


            <div class="c-center__title--sp">
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/No002.png" ); ?>" alt=CSSのタイトル></img>
          </div>
            <div class="p-circle2 c-circle">
              <img loading="lazy" class="c-circle2__image" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_circle03.png" ); ?>" alt=小さなサークル画像></img>
              <div class="p-skill">
                <div class="c-skill__center"></div>
                <div class="c-skill__shape">
                  <div class="c-skill__shape--icon c-skill__shape--icon2">
                    <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon02.png" ); ?>" alt=CSSのアイコン></img></div>
                  <div class="c-hexagon">
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
                </div>
                
                <div class="p-center__box c-box__background">
                  <div class="p-center__leftbox c-leftbox c-leftbox__background">
                    <img loading="lazy" class="c-leftbox__icon c-leftbox__icon2" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon02.png" ); ?>" alt=CSSのアイコン></img>
                  </div>
                  <div class="p-center__rightbox c-rightbox__background">
                    <h3>CSS3</h3>
                    <p>CSSアニメーション<br>ホバー、ハンバーガーボタン、クリック</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-center__text--sp"><p>CSSアニメーション<br>ホバー、ハンバーガーボタン、クリック</p></div>

            <div class="c-center__title--sp">
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/No003.png" ); ?>" alt=SASSのタイトル></img>
            </div>
            <div class="p-circle3 c-circle">
              <img loading="lazy" class="c-circle3__image" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_circle03.png" ); ?>" alt=小さなサークル画像></img>
              <div class="p-skill">
                <div class="c-skill__center"></div>
                <div class="c-skill__shape">
                  <div class="c-skill__shape--icon c-skill__shape--icon3">
                    <img src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon03.png" ); ?>" alt=SASSのアイコン></img>
                  </div>
                  <div class="c-hexagon">
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
                </div>
                <div class="p-center__box c-box__background">
                  <div class="p-center__leftbox c-leftbox c-leftbox__background">
                    <img loading="lazy" class="c-leftbox__icon c-leftbox__icon3" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon03.png" ); ?>" alt=SASSのアイコン></img>
                  </div>
                  <div class="p-center__rightbox c-rightbox__background">
                    <h3>Sass</h3>
                    <p>SCSS記法 設計思想:FLOCSS</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-center__text--sp"><p>SCSS記法<br>設計思想:FLOCSS</p></div>

            <div class="c-center__title--sp">
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/No004.png" ); ?>" alt=jQueryのタイトル></img>
          </div>
            <div class="p-circle4 c-circle">
              <img class="c-circle4__image" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_circle03.png" ); ?>" alt=小さなサークル画像></img>
              <div class="p-skill">
                <div class="c-skill__center"></div>
                <div class="c-skill__shape">
                  <div class="c-skill__shape--icon c-skill__shape--icon4">
                    <img loading="lazy"src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon04.png" ); ?>" alt=jQueryのアイコン></img>
                  </div>
                    <div class="c-hexagon">
                      <div></div>
                      <div></div>
                      <div></div>
                    </div>
                </div>
                <div class="p-center__box c-box__background">
                  <div class="p-center__leftbox c-leftbox c-leftbox__background">
                    <img loading="lazy" class="c-leftbox__icon c-leftbox__icon4" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon04.png" ); ?>" alt=jQueryのアイコン></img>
                  </div>
                  <div class="p-center__rightbox c-rightbox__background">
                    <h3>jQuery</h3>
                    <p>ハンバーガーメニュー、アコーディオンメニュー<br>マウスオーバー、クリックイベント</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-center__text--sp"><p>ハンバーガーメニュー、アコーディオンメニュー<br>マウスオーバー、クリックイベント</p></div>
            
            
            <div class="c-center__title--sp">
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/No005.png" ); ?>" alt=JavaScriptのタイトル></img>
          </div>
            <div class="p-circle5 c-circle">
              <img loading="lazy" class="c-circle5__image" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_circle03.png" ); ?>" alt=小さなサークル画像></img>
              <div class="p-skill">
                <div class="c-skill__center"></div>
                <div class="c-skill__shape">
                  <div class="c-skill__shape--icon c-skill__shape--icon5">
                    <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon05.png" ); ?>" alt=JavaScriptのアイコン></img>
                  </div>
                    <div class="c-hexagon">
                      <div></div>
                      <div></div>
                      <div></div>
                    </div>
                </div>
                <div class="p-center__box c-box__background">
                  <div class="p-center__leftbox c-leftbox c-leftbox__background">
                    <img loading="lazy" class="c-leftbox__icon c-leftbox__icon5" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon05.png" ); ?>" alt=JavaScriptのアイコン></img>
                  </div>
                  <div class="p-center__rightbox c-rightbox__background">
                    <h3>JavaScript</h3>
                    <p>ハンバーガーメニュー、アコーディオンメニュー<br>マウスオーバー、クリックイベント</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-center__text--sp"><p>ハンバーガーメニュー、アコーディオンメニュー<br>マウスオーバー、クリックイベント</p></div>

            <div class="c-center__title--sp">
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/No006.png" ); ?>" alt=WordPressのタイトル></img>
          </div>
            <div class="p-circle6 c-circle">
              <img loading="lazy" class="c-circle6__image" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_circle03.png" ); ?>" alt=小さなサークル画像></img>
              <div class="p-skill">
                <div class="c-skill__center"></div>
                <div class="c-skill__shape">
                  <div class="c-skill__shape--icon c-skill__shape--icon6">
                    <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon06.png" ); ?>" alt=WordPressのアイコン></img>
                  </div>
                  <div class="c-hexagon">
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
                </div>
                <div class="p-center__box c-box__background">
                  <div class="p-center__leftbox c-leftbox c-leftbox__background">
                    <img loading="lazy" class="c-leftbox__icon c-leftbox__icon6" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon06.png" ); ?>" alt=WordPressのアイコン></img>
                  </div>
                  <div class="p-center__rightbox c-rightbox__background">
                    <h3>WordPress</h3>
                    <p>静的サイトからWordPress化<br>投稿、固定ページ、メニュー作成</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-center__text--sp"><p>静的サイトからWordPress化<br>投稿、固定ページ、メニュー作成</p></div>

            <div class="c-center__title--sp">
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/No007.png" ); ?>" alt=Photoshopのタイトル></img>
          </div>
            <div class="p-circle7 c-circle">
              <img loading="lazy" class="c-circle7__image" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_circle03.png" ); ?>" alt=小さなサークル画像></img>
              <div class="p-skill">
                <div class="c-skill__center"></div>
                <div class="c-skill__shape">
                  <div class="c-skill__shape--icon c-skill__shape--icon7">
                    <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon07.png" ); ?>" alt=Photoshopのアイコン></img>
                  </div>
                  <div class="c-hexagon">
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
                </div>
                <div class="p-center__box c-box__background">
                  <div class="p-center__leftbox c-leftbox c-leftbox__background">
                    <img loading="lazy" class="c-leftbox__icon c-leftbox__icon7" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon07.png" ); ?>" alt=Photoshopのアイコン></img>
                  </div>
                  <div class="p-center__rightbox c-rightbox__background">
                    <h3>Photoshop</h3>
                    <p>画像加工、ボタン作成、グリッチアート<br>gifアニメーション、バナートレース</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-center__text--sp"><p>画像加工、ボタン作成、グリッチアート<br>gifアニメーション、バナートレース</p></div>
            
            <div class="c-center__title--sp">
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/No008.png" ); ?>" alt=Illustratorのタイトル></img>
          </div>
            <div class="p-circle8 c-circle">
              <img loading="lazy" class="c-circle8__image" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_circle03.png" ); ?>" alt=小さなサークル画像></img>
              <div class="p-skill">
                <div class="c-skill__center"></div>
                <div class="c-skill__shape">
                  <div class="c-skill__shape--icon c-skill__shape--icon8"><img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon08.png" ); ?> alt=Illustratorのアイコン"></img></div>
                  <div class="c-hexagon">
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
                </div>
                <div class="p-center__box c-box__background">
                  <div class="p-center__leftbox c-leftbox c-leftbox__background">
                    <img loading="lazy" class="c-leftbox__icon c-leftbox__icon8" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon08.png" ); ?>" alt=Illustratorのアイコン></img>
                  </div>
                  <div class="p-center__rightbox c-rightbox__background">
                    <h3>Illustrator</h3>
                    <p>基本的な操作</p>
                  </div>
                </div>
              </div>
            </div> 
          </section>
          <div class="c-center__text--sp"><p>基本的な操作</p></div>

          <section class="p-section__bottom">
            <h1>Works</h1>
            <div class="p-section__bottom--slider c-slider">
            <div class="c-slider__image">
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/hamburger.png" ); ?>" alt=ハンバーガーサイトの画像></img>
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/gia2.png" ); ?>"></img>
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/gia2.png" ); ?>"></img>
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/gia2.png" ); ?>"></img>
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/gia2.png" ); ?>"></img>
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/gia2.png" ); ?>"></img>
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/gia2.png" ); ?>"></img>
            </div>
            <div class="c-slider__nav">
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/hamburger4.png" ); ?>"></img>
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/gia2.png" ); ?>"></img>
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/gia2.png" ); ?>"></img>
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/gia2.png" ); ?>"></img>
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/gia2.png" ); ?>"></img>
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/gia2.png" ); ?>"></img>
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/gia2.png" ); ?>"></img>
            </div>
            <div class="p-botton__bottom c-section__botton c-section__botton--purple">
              <a href="<?php echo esc_url(home_url('works')); ?>">VIEW MORE</a>
            </div>
          </section>
        </div>
    </article>
  </main>
<?php get_footer(); ?>


