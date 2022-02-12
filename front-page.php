<?php get_header(); ?>
  <main class="l-main">
      <div class="c-rightside__botton">
        <a href="https://twitter.com/@murakami_web"><img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/header_icon.svg" ); ?>" alt=”Twitterのアイコン”></img></a>
      </div>
      <article <?php post_class('p-section'); ?>>
        <div class="p-title c-title">
          <img loading="eager" class="c-title__image" src="<?php echo esc_url( get_template_directory_uri() . "/image/title.svg" ); ?>"></img>
          <svg class="p-scrool c-scrool__arrow">
            <path class="c-scrool__arrow--first" d="M0 0 L30 32 L62 0"></path>
            <path class="c-scrool__arrow--second" d="M0 20 L30 52 L62 20"></path>
            <path class="c-scrool__arrow--third" d="M0 40 L30 72 L62 40"></path>
          </svg>
        </div>

        <div class="p-section__inner">
          <section class="p-section__top">
            <h1><img loading="eager" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_profile.svg" ); ?>"alt=”Profileの見出し”></img></h1> 
            <div class="p-section__top c-section__topimage">
              <img loading="eager" class="c-section__topimage--pc" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_imgtop.gif" ); ?>"alt=”一番上のグリッチPC画像”></img>
              <img loading="eager" class="c-section__topimage--sp" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_imgsp.gif" ); ?>"alt=”一番上のグリッチタブレット、スマホ画像”></img>
              <div class="c-section__toptext">
                <p class="c-section__toptext--glitch">ERROR</p> 
              </div>
              <botton class="p-botton__top c-section__botton">
                <a href="<?php echo esc_url(home_url('profile')); ?>">ERROR CLEAR</a>
              </botton>
            </div>
          </section>
          <section class="p-section__center">
            <h1 class="c-title__center--pc"><img loading="eager" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_skill.png" ); ?>"alt=”Skillの見出し”></img></h1>
            <h1 class="c-title__center--sp"><img loading="eager" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_skill--sp.png" ); ?>"alt=”Skillの見出し”></img></h1>
            <div class="p-circle__background c-circle">
              <img loading="lazy" class="c-circle__leftimage" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_circle01.png" ); ?>" alt=真ん中のサークル画像左側></img>
              <img loading="lazy" class="c-circle__rightimage" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_circle02.png" ); ?>" alt=真ん中のサークル画像右側></img>
            </div>

            <div class="c-center__title--sp">
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/No001.svg" ); ?>" alt=HTMLのタイトル></img>
            </div>
    
            <div class="p-circle1 c-circle">
              <div class="c-circle__image">
                <img loading="lazy" class="c-circle1__image" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_circle03.png" ); ?>" alt=小さなサークル画像></img>
              </div>
              <div class="p-skill">
                <div class="c-skill__center"></div>
                <div class="c-skill__shape">
                  <div class="c-skill__shape--icon c-skill__shape--icon1">
                    <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon01.svg" ); ?>" alt=HTMLのアイコン></img>
                  </div>
                  <div class="c-hexagon">
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
                </div>
                <div class="p-center__box c-box__background">
                  <div class="p-center__leftbox c-leftbox c-leftbox__background">
                    <img loading="lazy" class="c-leftbox__icon c-leftbox__icon1" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon01.svg" ); ?>"alt=HTMLのアイコン></img>
                  </div>
                  <div class="p-center__rightbox c-rightbox__background">
                    <h3>HTML5</h3>
                    <p>開発環境:MaC<br>使用エディタ:Visual Studio Code</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-center__text--sp c-center__text--sp1"><p>開発環境:MaC<br>使用エディタ:Visual Studio Code</p></div>


            <div class="c-center__title--sp">
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/No002.svg" ); ?>" alt=CSSのタイトル></img>
          </div>
            <div class="p-circle2 c-circle">
            <div class="c-circle__image">
              <img loading="lazy" class="c-circle2__image" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_circle03.png" ); ?>" alt=小さなサークル画像></img>
            </div>
              <div class="p-skill">
                <div class="c-skill__center"></div>
                <div class="c-skill__shape">
                  <div class="c-skill__shape--icon c-skill__shape--icon2">
                    <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon02.svg" ); ?>" alt=CSSのアイコン></img></div>
                  <div class="c-hexagon">
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
                </div>
                
                <div class="p-center__box c-box__background">
                  <div class="p-center__leftbox c-leftbox c-leftbox__background">
                    <img loading="lazy" class="c-leftbox__icon c-leftbox__icon2" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon02.svg" ); ?>" alt=CSSのアイコン></img>
                  </div>
                  <div class="p-center__rightbox c-rightbox__background">
                    <h3>CSS3</h3>
                    <p>CSSアニメーション<br>ホバー、ハンバーガーボタン、クリック</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-center__text--sp c-center__text--sp2"><p>CSSアニメーション<br>ホバー、ハンバーガーボタン、クリック</p></div>

            <div class="c-center__title--sp">
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/No003.svg" ); ?>" alt=SASSのタイトル></img>
            </div>
            <div class="p-circle3 c-circle">
              <div class="c-circle__image">
                <img loading="lazy" class="c-circle3__image" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_circle03.png" ); ?>" alt=小さなサークル画像></img>
              </div>
                <div class="p-skill">
                <div class="c-skill__center"></div>
                <div class="c-skill__shape">
                  <div class="c-skill__shape--icon c-skill__shape--icon3">
                    <img src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon03.svg" ); ?>" alt=SASSのアイコン></img>
                  </div>
                  <div class="c-hexagon">
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
                </div>
                <div class="p-center__box c-box__background">
                  <div class="p-center__leftbox c-leftbox c-leftbox__background">
                    <img loading="lazy" class="c-leftbox__icon c-leftbox__icon3" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon03.svg" ); ?>" alt=SASSのアイコン></img>
                  </div>
                  <div class="p-center__rightbox c-rightbox__background">
                    <h3>Sass</h3>
                    <p>SCSS記法 設計思想:FLOCSS</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-center__text--sp c-center__text--sp3"><p>SCSS記法<br>設計思想:FLOCSS</p></div>

            <div class="c-center__title--sp">
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/No004.svg" ); ?>" alt=jQueryのタイトル></img>
          </div>
            <div class="p-circle4 c-circle">
              <div class="c-circle__image">
                <img class="c-circle4__image" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_circle03.png" ); ?>" alt=小さなサークル画像></img>
              </div>
              <div class="p-skill">
                <div class="c-skill__center"></div>
                <div class="c-skill__shape">
                  <div class="c-skill__shape--icon c-skill__shape--icon4">
                    <img loading="lazy"src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon04.svg" ); ?>" alt=jQueryのアイコン></img>
                  </div>
                    <div class="c-hexagon">
                      <div></div>
                      <div></div>
                      <div></div>
                    </div>
                </div>
                <div class="p-center__box c-box__background">
                  <div class="p-center__leftbox c-leftbox c-leftbox__background">
                    <img loading="lazy" class="c-leftbox__icon c-leftbox__icon4" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon04.svg" ); ?>" alt=jQueryのアイコン></img>
                  </div>
                  <div class="p-center__rightbox c-rightbox__background">
                    <h3>jQuery</h3>
                    <p>ハンバーガーメニュー、アコーディオンメニュー<br>マウスオーバー、クリックイベント</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-center__text--sp c-center__text--sp4"><p>ハンバーガーメニュー、アコーディオンメニュー、マウスオーバー、クリックイベント</p></div>
            
            
            <div class="c-center__title--sp">
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/No005.svg" ); ?>" alt=JavaScriptのタイトル></img>
          </div>
            <div class="p-circle5 c-circle">
            <div class="c-circle__image">
              <img loading="lazy" class="c-circle5__image" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_circle03.png" ); ?>" alt=小さなサークル画像></img>
            </div>
              <div class="p-skill">
                <div class="c-skill__center"></div>
                <div class="c-skill__shape">
                  <div class="c-skill__shape--icon c-skill__shape--icon5">
                    <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon05.svg" ); ?>" alt=JavaScriptのアイコン></img>
                  </div>
                    <div class="c-hexagon">
                      <div></div>
                      <div></div>
                      <div></div>
                    </div>
                </div>
                <div class="p-center__box c-box__background">
                  <div class="p-center__leftbox c-leftbox c-leftbox__background">
                    <img loading="lazy" class="c-leftbox__icon c-leftbox__icon5" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon05.svg" ); ?>" alt=JavaScriptのアイコン></img>
                  </div>
                  <div class="p-center__rightbox c-rightbox__background">
                    <h3>JavaScript</h3>
                    <p>ハンバーガーメニュー、アコーディオンメニュー<br>マウスオーバー、クリックイベント</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-center__text--sp c-center__text--sp5"><p>ハンバーガーメニュー、アコーディオンメニュー、マウスオーバー、クリックイベント</p></div>

            <div class="c-center__title--sp">
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/No006.svg" ); ?>" alt=WordPressのタイトル></img>
          </div>
            <div class="p-circle6 c-circle">
            <div class="c-circle__image">
              <img loading="lazy" class="c-circle6__image" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_circle03.png" ); ?>" alt=小さなサークル画像></img>
            </div>
              <div class="p-skill">
                <div class="c-skill__center"></div>
                <div class="c-skill__shape">
                  <div class="c-skill__shape--icon c-skill__shape--icon6">
                    <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon06.svg" ); ?>" alt=WordPressのアイコン></img>
                  </div>
                  <div class="c-hexagon">
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
                </div>
                <div class="p-center__box c-box__background">
                  <div class="p-center__leftbox c-leftbox c-leftbox__background">
                    <img loading="lazy" class="c-leftbox__icon c-leftbox__icon6" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon06.svg" ); ?>" alt=WordPressのアイコン></img>
                  </div>
                  <div class="p-center__rightbox c-rightbox__background">
                    <h3>WordPress</h3>
                    <p>静的サイトからWordPress化<br>投稿、固定ページ、メニュー作成</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-center__text--sp c-center__text--sp6"><p>静的サイトからWordPress化<br>投稿、固定ページ、メニュー作成</p></div>

            <div class="c-center__title--sp">
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/No007.svg" ); ?>" alt=Photoshopのタイトル></img>
          </div>
            <div class="p-circle7 c-circle">
              <div class="c-circle__image">
                <img loading="lazy" class="c-circle7__image" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_circle03.png" ); ?>" alt=小さなサークル画像></img>
              </div>
              <div class="p-skill">
                <div class="c-skill__center"></div>
                <div class="c-skill__shape">
                  <div class="c-skill__shape--icon c-skill__shape--icon7">
                    <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon07.svg" ); ?>" alt=Photoshopのアイコン></img>
                  </div>
                  <div class="c-hexagon">
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
                </div>
                <div class="p-center__box c-box__background">
                  <div class="p-center__leftbox c-leftbox c-leftbox__background">
                    <img loading="lazy" class="c-leftbox__icon c-leftbox__icon7" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon07.svg" ); ?>" alt=Photoshopのアイコン></img>
                  </div>
                  <div class="p-center__rightbox c-rightbox__background">
                    <h3>Photoshop</h3>
                    <p>画像加工、ボタン作成、グリッチアート<br>gifアニメーション、バナー作成</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-center__text--sp c-center__text--sp7"><p>画像加工、ボタン作成、グリッチアート、gifアニメーション、バナー作成</p></div>
            
            <div class="c-center__title--sp">
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/No008.svg" ); ?>" alt=Illustratorのタイトル></img>
            </div>
            <div class="p-circle8 c-circle">
            <div class="c-circle__image">
              <img loading="lazy" class="c-circle8__image" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_circle03.png" ); ?>" alt=小さなサークル画像></img>
            </div>
              <div class="p-skill">
                <div class="c-skill__center"></div>
                <div class="c-skill__shape">
                  <div class="c-skill__shape--icon c-skill__shape--icon8"><img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon08.svg" ); ?>" alt=Illustratorのアイコン></img></div>
                  <div class="c-hexagon">
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
                </div>
                <div class="p-center__box c-box__background">
                  <div class="p-center__leftbox c-leftbox c-leftbox__background">
                    <img loading="lazy" class="c-leftbox__icon c-leftbox__icon8" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_icon08.svg" ); ?>" alt=Illustratorのアイコン></img>
                  </div>
                  <div class="p-center__rightbox c-rightbox__background">
                    <h3>Illustrator</h3>
                    <p>基本的な操作、ロゴ作成</p>
                  </div>
                </div>
              </div>
            </div> 
          </section>
          <div class="c-center__text--sp c-center__text--sp8"><p>基本的な操作、ロゴ作成</p></div>

          <section class="p-section__bottom">
            <h1><img loading="eager" src="<?php echo esc_url( get_template_directory_uri() . "/image/main_assignmentworks.jpg" ); ?>"alt=”Worksの見出し”></img></h1>
            <div class="p-section__bottom--slider c-slider">
            <div class="c-slider__image">
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/hamburger.jpg" ); ?>" alt=ハンバーガーサイトの画像></img>
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/portfolio.jpg" ); ?>"></img>
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/RaiseTech1.jpg" ); ?>"></img>
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/RaiseTech2.jpg" ); ?>"></img>
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/RaiseTech3.jpg" ); ?>"></img>
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/RaiseTech4.jpg" ); ?>"></img>
            </div>
            <div class="c-slider__nav">
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/hamburger.jpg" ); ?>"></img>
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/portfolio.jpg" ); ?>"></img>
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/RaiseTech1.jpg" ); ?>"></img>
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/RaiseTech2.jpg" ); ?>"></img>
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/RaiseTech3.jpg" ); ?>"></img>
              <img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . "/image/RaiseTech4.jpg" ); ?>"></img>
            </div>
            <div class="p-botton__bottom c-section__botton c-section__botton--purple">
              <a href="<?php echo esc_url(home_url('works')); ?>">VIEW MORE</a>
            </div>
          </section>
        </div>
    </article>
  </main>
<?php get_footer(); ?>


