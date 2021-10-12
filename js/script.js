
$(function () {
    setTimeout('rect()'); //アニメーションを実行
});


function rect() {
    $('.p-section__text--cursive').animate({
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
    maxParticles: 100,
    speed: 0.5,
    responsive: [
        {
            breakpoint: 800,
            options: {
                maxParticles: 50,
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


  