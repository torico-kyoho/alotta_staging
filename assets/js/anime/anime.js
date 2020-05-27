
$(function(){


  // var movefun = function(event){
  //   event.preventDefault();
  // }
  //
  // window.addEventListener("touchmove", movefun, {passive: false});
  //
  // $("html, body").css({
  //   "overflow": "hidden"
  // });
  //
  // $('body').addClass('no-scroll');
  // $(window).on('load',function() {
  //   setTimeout(function(){
  //       $('body').addClass('onload');
  //       $("html, body").attr("style", "");
  //
  //       window.removeEventListener("touchmove", movefun, {passive: false});
  //   },3000);
  // });

});



$(function(){

  $('#scrollBtn').not("#pegetop,.retunTop").click(function(){
    var speed = 500;
		if(!$("#spNavi").is(":visible")){
			var offset = 90;
		} else {
			var offset = 0;
		}

    var target = $("#about");
    var position = target.offset().top - offset;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });


  // 全体を制御するコントローラをつくります。
  var controller = new ScrollMagic.Controller();

  // ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
  // TOP
  // ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

  new ScrollMagic.Scene({
      triggerElement: "#about .slonmap",
      triggerHook: "onEnter",
      offset: 200
  })
  .on("enter" , function(e){
      $("#about .slonmap").addClass('on');
  })
  .addTo(controller);

  $('.topTitleStyle01').each(function(index, el) {
      new ScrollMagic.Scene({
          triggerElement: el,
          triggerHook: "onCenter",
          offset: -200
      })
      .on("enter" , function(e){
          $(el).addClass('on');
      })
      .addTo(controller);
  });

  $('.topTitleStyle01').each(function(index, el) {
      new ScrollMagic.Scene({
          triggerElement: el,
          triggerHook: "onCenter",
          offset: -200
      })
      .on("enter" , function(e){
          $(el).addClass('on');
      })
      .addTo(controller);
  });

  $('.alotta_info .box').each(function(index, el) {
      new ScrollMagic.Scene({
          triggerElement: el,
          triggerHook: "onCenter",
          offset: -200
      })
      .on("enter" , function(e){
          $(el).addClass('on');
      })
      .addTo(controller);
  });

  new ScrollMagic.Scene({
      triggerElement: "#hair_salon",
      triggerHook: "onEnter",
      offset: 100
  })
  .on("enter" , function(e){
      $("#hair_salon").addClass('on');
  })
  .addTo(controller);


  $('#hair_salonbox .col, #beauty_shopbox .col').each(function(index, el) {
      new ScrollMagic.Scene({
          triggerElement: el,
          triggerHook: "onCenter",
          offset: -200
      })
      .on("enter" , function(e){
          $(el).addClass('on');
      })
      .addTo(controller);
  });

  new ScrollMagic.Scene({
      triggerElement: "#beauty_shop",
      triggerHook: "onEnter",
      offset: 100
  })
  .on("enter" , function(e){
      $("#beauty_shop").addClass('on');
  })
  .addTo(controller);


  // ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
  // SALON
  // ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

  new ScrollMagic.Scene({
      triggerElement: ".headTextArea",
      triggerHook: "onEnter",
      offset: 0
  })
  .on("enter" , function(e){
      $(".headTextArea").addClass('on');
  })
  .addTo(controller);

  $('.titleStyle05').each(function(index, el) {
      new ScrollMagic.Scene({
          triggerElement: el,
          triggerHook: "onCenter",
          offset: -100
      })
      .on("enter" , function(e){
          $(el).addClass('on');
      })
      .addTo(controller);
  });



  new ScrollMagic.Scene({
      triggerElement: "#salon_outline .colLayout",
      triggerHook: "onEnter",
      offset: 250
  })
  .on("enter" , function(e){
      $("#salon_outline .colLayout").addClass('on');
  })
  .addTo(controller);

  new ScrollMagic.Scene({
      triggerElement: "#salon_about",
      triggerHook: "onEnter",
      offset: 100
  })
  .on("enter" , function(e){
      $("#salon_about").addClass('on');
  })
  .addTo(controller);

  new ScrollMagic.Scene({
      triggerElement: "#salon_about .textArea",
      triggerHook: "onEnter",
      offset: 200
  })
  .on("enter" , function(e){
      $("#salon_about .textArea").addClass('on');
  })
  .addTo(controller);


  $('.salon_works .titleStyle02').each(function(index, el) {
      new ScrollMagic.Scene({
          triggerElement: el,
          triggerHook: "onEnter",
          offset: 200
      })
      .on("enter" , function(e){
          $(el).addClass('on');
      })
      .addTo(controller);
  });


  $('.salon_works .colLayout01').each(function(index, el) {
      new ScrollMagic.Scene({
          triggerElement: el,
          triggerHook: "onEnter",
          offset: 160
      })
      .on("enter" , function(e){
          $(el).addClass('on');
      })
      .addTo(controller);
  });

  new ScrollMagic.Scene({
      triggerElement: "#salon_about2",
      triggerHook: "onEnter",
      offset: -100
  })
  .on("enter" , function(e){
      $("#salon_about2").addClass('on');
  })
  .addTo(controller);

  new ScrollMagic.Scene({
      triggerElement: "#salon_reco",
      triggerHook: "onEnter",
      offset: 200
  })
  .on("enter" , function(e){
      $("#salon_reco").addClass('on');
  })
  .addTo(controller);

  new ScrollMagic.Scene({
      triggerElement: "#salon_reco .checkBox",
      triggerHook: "onCenter",
      offset: -200
  })
  .on("enter" , function(e){
      $("#salon_reco .checkBox").addClass('on');
  })
  .addTo(controller);

  new ScrollMagic.Scene({
      triggerElement: "#salon_interior",
      triggerHook: "onCenter",
      offset: -200
  })
  .on("enter" , function(e){
      $("#salon_interior").addClass('on');
  })
  .addTo(controller);

  $('#salon_interior .imgBox').each(function(index, el) {
      new ScrollMagic.Scene({
          triggerElement: el,
          triggerHook: "onCenter",
          offset: -200
      })
      .on("enter" , function(e){
          $(el).addClass('on');
      })
      .addTo(controller);
  });

  new ScrollMagic.Scene({
      triggerElement: "#salon_garden",
      triggerHook: "onCenter",
      offset: -200
  })
  .on("enter" , function(e){
      $("#salon_garden").addClass('on');
  })
  .addTo(controller);

  $('#salon_garden .imgArea').each(function(index, el) {
      new ScrollMagic.Scene({
          triggerElement: el,
          triggerHook: "onCenter",
          offset: -100
      })
      .on("enter" , function(e){
          $(el).addClass('on');
      })
      .addTo(controller);
  });

  new ScrollMagic.Scene({
      triggerElement: "#salon_menu .headImg",
      triggerHook: "onCenter",
      offset: -160
  })
  .on("enter" , function(e){
      $("#salon_menu .headImg").addClass('on');
  })
  .addTo(controller);

  new ScrollMagic.Scene({
      triggerElement: "#salon_menu .saleBox",
      triggerHook: "onCenter",
      offset: 200
  })
  .on("enter" , function(e){
      $("#salon_menu .saleBox").addClass('on');
  })
  .addTo(controller);

  $('.priceBoxArea .priceBox').each(function(index, el) {
      new ScrollMagic.Scene({
          triggerElement: el,
          triggerHook: "onCenter",
          offset: -200
      })
      .on("enter" , function(e){
          $(el).addClass('on');
      })
      .addTo(controller);
  });

  new ScrollMagic.Scene({
      triggerElement: "#salon_style",
      triggerHook: "onCenter",
      offset: -100
  })
  .on("enter" , function(e){
      $("#salon_style").addClass('on');
  })
  .addTo(controller);


  $('#salon_style .imgBox').each(function(index, el) {
      new ScrollMagic.Scene({
          triggerElement: el,
          triggerHook: "onCenter",
          offset: -200
      })
      .on("enter" , function(e){
          $(el).addClass('on');
      })
      .addTo(controller);
  });

  new ScrollMagic.Scene({
      triggerElement: "#salon_voice",
      triggerHook: "onEnter",
      offset: 200
  })
  .on("enter" , function(e){
      $("#salon_voice").addClass('on');
  })
  .addTo(controller);

  $('.voiceArea .colLayout').each(function(index, el) {
      new ScrollMagic.Scene({
          triggerElement: el,
          triggerHook: "onCenter",
          offset: -200
      })
      .on("enter" , function(e){
          $(el).addClass('on');
      })
      .addTo(controller);
  });


  // ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
  // SHOP
  // ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

  new ScrollMagic.Scene({
      triggerElement: "#shop_outline .colLayout",
      triggerHook: "onEnter",
      offset: 250
  })
  .on("enter" , function(e){
      $("#shop_outline .colLayout").addClass('on');
  })
  .addTo(controller);

  new ScrollMagic.Scene({
      triggerElement: "#shop_about",
      triggerHook: "onEnter",
      offset: 250
  })
  .on("enter" , function(e){
      $("#shop_about").addClass('on');
  })
  .addTo(controller);

  $('#shop_works .titleStyle02').each(function(index, el) {
      new ScrollMagic.Scene({
          triggerElement: el,
          triggerHook: "onEnter",
          offset: 200
      })
      .on("enter" , function(e){
          $(el).addClass('on');
      })
      .addTo(controller);
  });


  $('#shop_works .colLayout01').each(function(index, el) {
      new ScrollMagic.Scene({
          triggerElement: el,
          triggerHook: "onEnter",
          offset: 160
      })
      .on("enter" , function(e){
          $(el).addClass('on');
      })
      .addTo(controller);
  });

  new ScrollMagic.Scene({
      triggerElement: "#shop_interior",
      triggerHook: "onCenter",
      offset: -200
  })
  .on("enter" , function(e){
      $("#shop_interior").addClass('on');
  })
  .addTo(controller);

  $('#shop_interior .imgBox').each(function(index, el) {
      new ScrollMagic.Scene({
          triggerElement: el,
          triggerHook: "onCenter",
          offset: -200
      })
      .on("enter" , function(e){
          $(el).addClass('on');
      })
      .addTo(controller);
  });

  new ScrollMagic.Scene({
      triggerElement: "#shop_brand",
      triggerHook: "onCenter",
      offset: -200
  })
  .on("enter" , function(e){
      $("#shop_brand").addClass('on');
  })
  .addTo(controller);

  new ScrollMagic.Scene({
      triggerElement: "#shop_brand .brandArea",
      triggerHook: "onCenter",
      offset: -200
  })
  .on("enter" , function(e){
      $("#shop_brand .brandArea").addClass('on');
  })
  .addTo(controller);


  // ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
  // STAFF
  // ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

  $('.staffArea .box').each(function(index, el) {
      new ScrollMagic.Scene({
          triggerElement: el,
          triggerHook: "onCenter",
          offset: -200
      })
      .on("enter" , function(e){
          $(el).addClass('on');
      })
      .addTo(controller);
  });

  new ScrollMagic.Scene({
      triggerElement: "#staff_single",
      triggerHook: "onCenter",
      offset: -200
  })
  .on("enter" , function(e){
      $("#staff_single").addClass('on');
  })
  .addTo(controller);


  // ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
  // TOPICS
  // ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

  $('#topics .post').each(function(index, el) {
      new ScrollMagic.Scene({
          triggerElement: el,
          triggerHook: "onCenter",
          offset: -200
      })
      .on("enter" , function(e){
          $(el).addClass('on');
      })
      .addTo(controller);
  });

  // ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
  // ACCESS
  // ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

  new ScrollMagic.Scene({
      triggerElement: "#access .mapArea",
      triggerHook: "onCenter",
      offset: -200
  })
  .on("enter" , function(e){
      $("#access .mapArea").addClass('on');
  })
  .addTo(controller);

  $('.addressArea .item').each(function(index, el) {
      new ScrollMagic.Scene({
          triggerElement: el,
          triggerHook: "onEnter",
          offset: -200
      })
      .on("enter" , function(e){
          $(el).addClass('on');
      })
      .addTo(controller);
  });

  // ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
  // PRIVACY
  // ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

  new ScrollMagic.Scene({
      triggerElement: "#privacy",
      triggerHook: "onEnter",
      offset: -200
  })
  .on("enter" , function(e){
      $("#privacy").addClass('on');
  })
  .addTo(controller);

  // ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
  // CONTACT
  // ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

  new ScrollMagic.Scene({
      triggerElement: "#contact",
      triggerHook: "onEnter",
      offset: -200
  })
  .on("enter" , function(e){
      $("#contact").addClass('on');
  })
  .addTo(controller);

  // ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
  // SITEMAP
  // ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

  $('#sitemap .row').each(function(index, el) {
      new ScrollMagic.Scene({
          triggerElement: el,
          triggerHook: "onEnter",
          offset: -200
      })
      .on("enter" , function(e){
          $(el).addClass('on');
      })
      .addTo(controller);
  });

  // ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
  // COMPANY
  // ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

  new ScrollMagic.Scene({
      triggerElement: "#company",
      triggerHook: "onEnter",
      offset: -200
  })
  .on("enter" , function(e){
      $("#company").addClass('on');
  })
  .addTo(controller);


  // ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
  // FAQ
  // ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

  $('.faqList dl').each(function(index, el) {
      new ScrollMagic.Scene({
          triggerElement: el,
          triggerHook: "onEnter",
          offset: -200
      })
      .on("enter" , function(e){
          $(el).addClass('on');
      })
      .addTo(controller);
  });

    // new ScrollMagic.Scene({
    //     triggerElement: "#message .text",
    //     triggerHook: "onEnter",
    //     offset: 400
    // })
    // .on("enter" , function(e){
    //     $("#message .text").addClass('on');
    // })
    // .addTo(controller);
    //
    //
    // new ScrollMagic.Scene({
    //     triggerElement: "#movie",
    //     triggerHook: "onEnter",
    //     offset: 200
    // })
    // .on("enter" , function(e){
    //     $("#movie").addClass('on');
    // })
    // .addTo(controller);
    //
    // new ScrollMagic.Scene({
    //     triggerElement: "#special",
    //     triggerHook: "onEnter",
    //     offset: 200
    // })
    // .on("enter" , function(e){
    //     $("#special").addClass('on');
    // })
    // .addTo(controller);
    //
    // $('.bnrLsit .box').each(function(index, el) {
    //     new ScrollMagic.Scene({
    //         triggerElement: el,
    //         triggerHook: "onCenter",
    //         offset: -200
    //     })
    //     .on("enter" , function(e){
    //         $(el).addClass('on');
    //     })
    //     .addTo(controller);
    // });
    //
    // new ScrollMagic.Scene({
    //     triggerElement: "#ranking",
    //     triggerHook: "onEnter",
    //     offset: 200
    // })
    // .on("enter" , function(e){
    //     $("#ranking").addClass('on');
    // })
    // .addTo(controller);
    //
    // $('.rankingList .list').each(function(index, el) {
    //     new ScrollMagic.Scene({
    //         triggerElement: el,
    //         triggerHook: "onCenter",
    //         offset: -200
    //     })
    //     .on("enter" , function(e){
    //         $(el).addClass('on');
    //     })
    //     .addTo(controller);
    // });
    //
    // new ScrollMagic.Scene({
    //     triggerElement: "#about",
    //     triggerHook: "onEnter",
    //     offset: 200
    // })
    // .on("enter" , function(e){
    //     $("#about").addClass('on');
    // })
    // .addTo(controller);
    //
    // $('.aboutColumn .box').each(function(index, el) {
    //     new ScrollMagic.Scene({
    //         triggerElement: el,
    //         triggerHook: "onCenter",
    //         offset: -200
    //     })
    //     .on("enter" , function(e){
    //         $(el).addClass('on');
    //     })
    //     .addTo(controller);
    // });
    //
    // new ScrollMagic.Scene({
    //     triggerElement: "#history",
    //     triggerHook: "onEnter",
    //     offset: 200
    // })
    // .on("enter" , function(e){
    //     $("#history").addClass('on');
    // })
    // .addTo(controller)
    //
    // $('.historyArv .box').each(function(index, el) {
    //     new ScrollMagic.Scene({
    //         triggerElement: el,
    //         triggerHook: "onCenter",
    //         offset: -200
    //     })
    //     .on("enter" , function(e){
    //         $(el).addClass('on');
    //     })
    //     .addTo(controller);
    // });
    //
    // $('.historyArv .box').each(function(index, el) {
    //     new ScrollMagic.Scene({
    //         triggerElement: el,
    //         triggerHook: "onEnter",
    //         offset: 50
    //     })
    //     .on("enter" , function(e){
    //         $(el).addClass('on');
    //     })
    //     .addTo(controller);
    // });
    //
    // new ScrollMagic.Scene({
    //     triggerElement: "#promise",
    //     triggerHook: "onEnter",
    //     offset: 200
    // })
    // .on("enter" , function(e){
    //     $("#promise").addClass('on');
    // })
    // .addTo(controller)
    //
    // $('.boxLayout01 .col').each(function(index, el) {
    //     new ScrollMagic.Scene({
    //         triggerElement: el,
    //         triggerHook: "onCenter",
    //         offset: -200
    //     })
    //     .on("enter" , function(e){
    //         $(el).addClass('on');
    //     })
    //     .addTo(controller);
    // });
    //
    // new ScrollMagic.Scene({
    //     triggerElement: "#footer",
    //     triggerHook: "onEnter",
    //     offset: 200
    // })
    // .on("enter" , function(e){
    //     $("#footer").addClass('on');
    // })
    // .addTo(controller)

});
