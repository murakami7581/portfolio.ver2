window.onload = function() {
  const loader = document.getElementById('loading-wrapper');
  loader.classList.add('completed');
}
// Particles.js初め
var particles = Particles.init({
    selector: '.f-body__background',
    sizeVariations: 8,
    color: ['#dd00d2', '#404B69', '#DBEDF3'],
    connectParticles: true,
    maxParticles: 200,
    speed: 0.5,
    responsive: [
      {
        breakpoint: 1000,
        options: {
            maxParticles: 100,
            sizeVariations: 4,
        },
    
    },
        {
            breakpoint: 800,
            options: {
                maxParticles: 75,
                sizeVariations: 3,
            },
        
        },
        {
          breakpoint: 600,
          options: {
              maxParticles: 50,
              sizeVariations: 2,
          },
      
      },
        {
          breakpoint: 400,
          options: {
              maxParticles: 25,
              sizeVariations: 1,
          },
      
      },
    ]
  });
// Particles.js終わり
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
// ヘッダーのアニメーション初め
  $(function () {
    setTimeout('rect()'); 
});
function rect() {
    $('.c-section__text').animate({
        marginTop: '-=10px'
    }, 1000).animate({
        marginTop: '+=10px'
    }, 1000);
    setTimeout('rect()', 2000); 
};
// ヘッダーのアニメーション終わり

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
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: '.c-section__under--slider',
      arrows: false,
      dots: false,
      centerMode: true,
      focusOnSelect: true,
      responsive: [
        {
          breakpoint: 1000, 
          settings: {
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 834, 
          settings: {
            slidesToShow: 2,
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
  .fadeOut();
});


$(".c-text__center").on("click", function() {
  $(".c-column__career")
  .addClass("show1")
  .fadeIn();
  $(".c-column__container,.c-text-last")
  .fadeOut();
});

$(".c-text__bottom").on("click", function() {
  $(".c-text-last")
  .addClass("show1")
  .fadeIn();
  $(".c-column__container,.c-column__career")
  .fadeOut();
});

$(".p-botton__profile").on("click", function() {
  $(".c-column__container,.c-column__career,.c-text-last").fadeOut();
});

$(window).resize(function () {                     // Windowサイズが変更された時
  var win = $(window).width();
  var bp = 1024; // ブレークポイント（px）
  if (win < bp) {
    $(".c-column__container,.c-column__career,.c-text-last").fadeIn();
  }
});

// Profile-pageのアニメーション終わり
window.onload = function () {
  const loader_element = document.getElementById('loading');
  loader_element.classList.add('loaded');
  };