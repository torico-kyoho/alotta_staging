
$(function(){

	$(window).scroll(function () {
      if ($(this).scrollTop() > 150) {
        $('body').addClass('scrollOn');
      } else {
        $('body').removeClass('scrollOn')
      }
    });

	function isIE() {
    let userAgent = window.navigator.userAgent.toLowerCase();
    if ( userAgent.indexOf( 'msie' ) !== -1 || userAgent.indexOf( 'trident' ) !== -1 ) {
        return true;
    }
    return false;
  }

	if(isIE()){
		$('body').addClass('ie');
	}

	$('#nav_btn').click(function(){
		var winW = window.innerWidth;
		if( winW <= 980 ){
			$(this).toggleClass('active');
			$('body').toggleClass('open');
		} else {

		}
	});


	var pagetop = $('#pegetop');
	pagetop.hide();
  $(window).scroll(function () {

		var check = window.pageYOffset;
		var docHeight = $(document).height();
		var dispHeight = $(window).height();

		if ($(this).scrollTop() > 100) {
			$("#pcNavi").addClass("show");
			if(check > docHeight-dispHeight-500){
					$("#pcNavi").removeClass("show");
			}else{
					$("#pcNavi").addClass("show");
			}
		} else {
			$("#pcNavi").removeClass("show");
		}




		if($("footer").scrollTop() > $(this).scrollTop()){
			$("#pcNavi").removeClass("show");
		}


    if ($(this).scrollTop() > 1400) {
      pagetop.fadeIn(300);
    } else {
      pagetop.fadeOut(300);
    }
  });

	$('#pegetop, .retunTop').click(function(){
			// ページトップにスクロール
			$('html,body').animate({
					scrollTop: 0
			},1000);
			return false;
	});

	$("#spNavi a").on("click", function(){
		$("body").removeClass("open");
		$("#nav_btn").removeClass("active");
	})

	$('a[href^="#"]').not("#pegetop,.retunTop").click(function(){
    var speed = 500;
		if(!$("#spNavi").is(":visible")){
			var offset = 106;
		} else {
			var offset = 0;
		}
    var href= $(this).attr("href");

		// switch (href) {
		// 	case "#message":
		// 		$("#pcNavi li").removeClass('active');
		// 		$(".nav01").addClass('active');
		// 		break;
		// 	case "#ranking":
		// 		$("#pcNavi li").removeClass('active');
		// 		$(".nav02").addClass('active');
		// 		break;
		// 	case "#history":
		// 		$("#pcNavi li").removeClass('active');
		// 		$(".nav03").addClass('active');
		// 		break;
		// 	case "#promise":
		// 		$("#pcNavi li").removeClass('active');
		// 		$(".nav04").addClass('active');
		// 		break;
		// 	default:
		//
		// }

    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - offset;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });

});
