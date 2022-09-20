/*-----------------------------------------------------------------------------------*/
/*  文字体
/*-----------------------------------------------------------------------------------*/
  (function(d) {
    var config = {
      kitId: 'eug5vrg',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);

/*-----------------------------------------------------------------------------------*/
/*	ホイールスライダー
/*-----------------------------------------------------------------------------------*/

$(function () {
  $(".wheel_slider").slick({
    arrows: true,
    autoplay: true,
    infinite: false,
    adaptiveHeight: true,
    dots: true,
    slidesToShow: 2,
    prevArrow: '<button class="slide-arrow prev-arrow"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"></button>',
    responsive: [
      {
        breakpoint: 400, // 399px以下のサイズに適用
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
});

/*-----------------------------------------------------------------------------------*/
/*  ホイール値段ポップアップ
/*-----------------------------------------------------------------------------------*/
jQuery(function($){
  function popupImage() {
  var popup = document.getElementById('js-popup');
  if(!popup) return;

  var blackBg = document.getElementById('js-black-bg');
  var closeBtn = document.getElementById('js-close-btn');
  var showBtn = document.getElementById('js-show-popup');

  closePopUp(blackBg);
  closePopUp(closeBtn);
  closePopUp(showBtn);
  function closePopUp(elem) {
    if(!elem) return;
    elem.addEventListener('click', function() {
      popup.classList.toggle('is-show');
    });
  }
}
popupImage();
});