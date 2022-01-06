
$(function () {
    setTimeout('rect()'); //アニメーションを実行
});


function rect() {
    $('.c-section__text--1,.c-section__text--2').animate({
        marginTop: '-=10px'
    }, 800).animate({
        marginTop: '+=10px'
    }, 800);
    setTimeout('rect()', 1600); //アニメーションを繰り返す間隔
};

  
// Skillsのアニメーションの初め
  $(function(){
    var item_num = $('div.p-section__circlebox__item').length;
    var deg = 360.0/item_num;
    var red = (deg*Math.PI/180.0);
    var circle_r = $("div.p-section__circlebox__item").width() * 3.5;
    $('div.p-section__circlebox__item').each(function(i, elem) {
        var x = Math.cos(red * i) * circle_r + circle_r;
        var y = Math.sin(red * i) * circle_r + circle_r;
        $(elem).css('left', x);
        $(elem).css('top', y);
    });
});
// Skillsのアニメーションの終わり

// ヘッダーのアニメーションの初め
var particles = Particles.init({
    selector: '.f-body__background',
    sizeVariations: 8,
    color: ['#dd00d2', '#404B69', '#DBEDF3'],
    connectParticles: true,
    maxParticles: 200,
    speed: 0.5,
    responsive: [
        {
            breakpoint: 800,
            options: {
                maxParticles: 200,
                sizeVariations: 5,
            },
        
        },
    ]
  });
// ヘッダーのアニメーションの終わり



$(window).mousemove(function (e) {
    $('.dot1,.dot2').css({
      left: e.pageX,
      top: e.pageY
    })
  })
  $('a').on('mouseenter', function () {
    $('.dot1,.dot2').addClass('active');
  })
  $('a').on('mouseleave', function () {
    $('.dot1,.dot2').removeClass('active');
  })
 





  $(function() {
    $('.c-section__under--slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: true,
      prevArrow: '<button class="slide-arrow prev-arrow"></button>',
      nextArrow: '<button class="slide-arrow next-arrow"></button>',
      asNavFor: '.c-section__under--slider--nav',
    });  
    $('.c-section__under--slider--nav').slick({
      slidesToShow: 5,
      slidesToScroll: 2,
      asNavFor: '.c-section__under--slider',
      arrows: false,
      dots: false,
      centerMode: true,
      focusOnSelect: true,
      responsive: [
        {
          breakpoint: 834, 
          settings: {
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 375, 
          settings: {
            slidesToShow: 1,
          },
        },
      ],

    }); 
});



$(function(){
  $('.c-header__botton').on('click', function(){
    $('.l-header__container--tab').toggleClass('is-active');
    $('.c-header__botton--line').toggleClass('active');
    $('.c-header__botton--text').toggleClass('is-active');
  });
}());


// Profile-pageのアニメーション初め
$(".c-text__top").on("click", function() {
  $(".c-column__container")
    .addClass("show1")
    .fadeIn();

  $(".c-column__career,.c-text-last")
  .addClass("notshow")
  .fadeOut();
});


$(".c-text__center").on("click", function() {
  $(".c-column__career")
    .addClass("show1")
    .fadeIn();
  // return false;
  // $(".c-text__top,.c-text__bottom")
  // .addClass("no")
  $(".c-column__container,.c-text-last")
  .addClass("notshow")
  .fadeOut();
});

$(".c-text__bottom").on("click", function() {
  $(".c-text-last")
    .addClass("show1")
    .fadeIn();
  // return false;
  // $(".c-text__top,.c-text__center")
  // .addClass("no")
  $(".c-column__container,.c-column__career")
  .addClass("notshow")
  .fadeOut();
});


$(".p-botton__profile").on("click", function() {
  $(".c-column__container,.c-column__career,.c-text-last").fadeOut();
  // return false;
});

// Profile-pageのアニメーション終わり

