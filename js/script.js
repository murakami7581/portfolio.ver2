jQuery(function($) {
	setTimeout(function(){
		$('.start p').fadeIn(1600);
	},500); //0.5秒後にロゴをフェードイン!
	setTimeout(function(){
		$('.start').fadeOut(500);
	},500); //2.5秒後にロゴ含め真っ白背景をフェードアウト！
});

$(function () {
    setTimeout('rect()'); //アニメーションを実行
});

// Skillsのアニメーションの初め
function rect() {
    $('.p-section__top--text').animate({
        marginTop: '-=10px'
    }, 800).animate({
        marginTop: '+=10px'
    }, 800);
    setTimeout('rect()', 1600); //アニメーションを繰り返す間隔
}

$(document).on('ready', function() {
    $(".regular").slick({
      autoplay: true, // 自動再生を設定
      autoplaySpeed: 4000, // 自動再生のスピード（ミリ秒単位）
      dots: true // ドットインジケーターの表示
    });
  });

  $(function(){
    var item_num = $('div.item').length;
    var deg = 360.0/item_num;
    var red = (deg*Math.PI/180.0);
    var circle_r = $("div.item").width() * 3.5;
    $('div.item').each(function(i, elem) {
        var x = Math.cos(red * i) * circle_r + circle_r;
        var y = Math.sin(red * i) * circle_r + circle_r;
        $(elem).css('left', x);
        $(elem).css('top', y);
    });
});
// Skillsのアニメーションの終わり

// ヘッダーのアニメーションの初め
var particles = Particles.init({
    selector: '.l-header__background',
    sizeVariations: 10,
    color: ['#dd00d2', '#404B69', '#DBEDF3'],
    connectParticles: true,
    maxParticles: 100,
    responsive: [
        {
            breakpoint: 800,
            options: {
                maxParticles: 15,
            },
        
        },
    ]
  });

  $(window).on('load',function(){
    $("#loading-wrapper").addClass("completed")
 });
// ヘッダーのアニメーションの初め

$(window).mousemove(function (e) {
    $('.cursor span').css({
      left: e.pageX,
      top: e.pageY
    })
  })
  $('a').on('mouseenter', function () {
    $('.cursor span').addClass('active');
  })
  $('a').on('mouseleave', function () {
    $('.cursor span').removeClass('active');
  })



