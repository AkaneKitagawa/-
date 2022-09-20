/*-----------------------------------------------------------------------------------*/
/*  フェードインでページ全体を表示させる
/*-----------------------------------------------------------------------------------*/
jQuery(function ($) {
$(function() {
  $('body').fadeIn(1500); //1秒かけてフェードイン！
});
});

/*-----------------------------------------------------------------------------------*/
/*	オーバーレイ
/*-----------------------------------------------------------------------------------*/

$(document).ready(function() {
  $(".animsition").animsition({
    inClass: 'fade-in-down-sm',
    outClass: 'fade-out-down-sm',
    inDuration: 1500,
    outDuration: 800,
    linkElement: '.animsition-link',
    // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
    loading: true,
    loadingParentElement: 'body', //animsition wrapper element
    loadingClass: 'animsition-loading',
    loadingInner: '', // e.g '<img src="loading.svg" />'
    timeout: false,
    timeoutCountdown: 5000,
    onLoadEvent: true,
    browser: [ 'animation-duration', '-webkit-animation-duration'],
    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    overlay : false,
    overlayClass : 'animsition-overlay-slide',
    overlayParentElement : 'body',
    transition: function(url){ window.location.href = url; }
  });
});





/*-----------------------------------------------------------------------------------*/
/*	カルーセル
/*-----------------------------------------------------------------------------------*/

$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
      items : 4,
      loop:false,
    margin:30,
    autoplay:true,
    autoplayTimeout:3000,
    nav:true,
    navText : ["",""],
    stagePadding: 0,
    dots: true,
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        }
    }
  });
});



/*-----------------------------------------------------------------------------------*/
/*	ライトボックス
/*-----------------------------------------------------------------------------------*/

$(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect	: 'fade',
		closeEffect	: 'fade',
        nextEffect : 'fade',
        nextEffect : 'fade',
        openSpeed : 800,
        closeSpeed  : 600,
        nextSpeed  : 500,
        prevSpeed : 500,
        
	});
});


/*-----------------------------------------------------------------------------------*/
/*	ie　枠線除去
/*-----------------------------------------------------------------------------------*/
$(document).ready(function(){$("a").bind("focus",function(){if(this.blur)this.blur();});});



/*-----------------------------------------------------------------------------------*/
/*	スムーススクローる
/*-----------------------------------------------------------------------------------*/


// スムーススクロールを起動する
	smoothScroll.init() ;


/*-----------------------------------------------------------------------------------*/
/*	スマホナビ
/*-----------------------------------------------------------------------------------*/

$('#sp_navigation').slimmenu(
{
    resizeWidth: '1000',
    collapserTitle: '<a href="/"><img src="/wp-content/themes/TreasureOne/images/logo.svg" alt="logo" width="150"/></a>',
    animSpeed: 'medium',
    easingEffect: null,
    indentChildren: false,
    childrenIndenter: '&nbsp;',
    expandIcon: '<img src="/wp-content/themes/TreasureOne/images/sp_nav_open.gif" alt="open"/>',
    collapseIcon:  '<img src="/wp-content/themes/TreasureOne/images/sp_nav_close.gif" alt="close"/>'
});

/*-----------------------------------------------------------------------------------*/
/*	スクロール
/*-----------------------------------------------------------------------------------*/

jQuery(function ($) {
  var fadeIn = $('.fade-in');
  $(window).scroll(function () {
    $(fadeIn).each(function () {
      var offset = $(this).offset().top;
      var scroll = $(window).scrollTop(); 
      var windowHeight = $(window).height();
      if (scroll > offset - windowHeight + 150) {
        $(this).addClass("scroll-in");
      }
    });
  });
});

