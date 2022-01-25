window.onload = function () {
  const loader_element = document.getElementById('f-body__load');
  loader_element.classList.add('f-body__loaded');
  };

$(window).mousemove(function (e) {
  $('.f-body__cursor--smail,.f-body__cursor--large').css({
    left: e.pageX,
    top: e.pageY
  })
})
$('a').on('mouseenter', function () {
  $('.f-body__cursor--smail,.f-body__cursor--large').addClass('is-active');
})
$('a').on('mouseleave', function () {
  $('.f-body__cursor--smail,.f-body__cursor--large').removeClass('is-active');
})
// Particles.js初め
var particles = Particles.init({
    selector: '.is-particles',
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

// ヘッダーのアニメーション初め
$(function () {
    setTimeout('rect()'); 
});
function rect() {
    $('.c-title__image').animate({
        marginTop: '-=10px'
    }, 1000).animate({
        marginTop: '+=10px'
    }, 1000);
    setTimeout('rect()', 2000); 
};
// ヘッダーのアニメーション終わり

  $(function() {
    $('.c-slider__image').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: true,
      prevArrow: '<button class="slide-arrow prev-arrow"></button>',
      nextArrow: '<button class="slide-arrow next-arrow"></button>',
      asNavFor: '.c-slider__nav',
    });  
    $('.c-slider__nav').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: '.c-slider__image',
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
          breakpoint: 400, 
          settings: {
            slidesToShow: 1,
          },
        },
      ],
    }); 
});

$(function(){
  $('.js-hamburger').on('click', function(){
    $('.is-hamburger__line').toggleClass('is-click');
    $('.c-hamburger__text').toggleClass('is-active');
    $('.is-header__container').toggleClass('is-active');
  });
}());

// Profile-pageのアニメーション初め
$(".c-select__top").on("click", function() {
  $(".c-select__introduction")
    .addClass("is-open")
    .fadeIn();
  $(".c-select__career,.c-select__vision")
  .fadeOut();
});

$(".c-select__center").on("click", function() {
  $(".c-select__career")
  .addClass("is-open")
  .fadeIn();
  $(".c-select__introduction,.c-select__vision")
  .fadeOut();
});

$(".c-select__bottom").on("click", function() {
  $(".c-select__vision")
  .addClass("is-open")
  .fadeIn();
  $(".c-select__introduction,.c-select__career")
  .fadeOut();
});

$(".is-close").on("click", function() {
  $(".c-select__introduction,.c-select__career,.c-select__vision").fadeOut();
});

$(window).resize(function () {                     // Windowサイズが変更された時
  var win = $(window).width();
  var bp = 1024; // ブレークポイント（px）
  if (win < bp) {
    $(".c-select__introduction,.c-select__career,.c-select__vision").fadeIn();
  }
});
$(window).resize(function () {                     // Windowサイズが変更された時
  var win = $(window).width();
  var bp = 1025; // ブレークポイント（px）
  if (win > bp) {
    $(".c-select__introduction,.c-select__career,.c-select__vision").fadeOut();
  }
});

// Profile-pageのアニメーション終わり