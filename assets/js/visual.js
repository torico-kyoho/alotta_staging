$(function(){

	var sldeLeft = $('#sldeLeft').slick({
		fade: true,
		speed: 2000,
		autoplay:false,
		autoplaySpeed:5000,
		dots:false,
		arrows: false,
		pauseOnHover: false,
		pauseOnFocus: false
		// adaptiveHeight: true
	});

	$('#sldeRight').slick({
		fade: true,
		speed: 2000,
		autoplay:false,
		autoplaySpeed:5000,
		dots:false,
		arrows: false,
		pauseOnHover: false,
		pauseOnFocus: false
		// adaptiveHeight: true
	});



	var movefun = function(event){
		event.preventDefault();
	}

	window.addEventListener("touchmove", movefun, {passive: false});


	//hover

	$('#hoverBtn .salon').hover(function() {
		$('#slider').addClass('salon');
	}, function() {
		$('#slider').removeClass('salon');
	});

	$('#hoverBtn .shop').hover(function() {
		$('#slider').addClass('shop');
	}, function() {
		$('#slider').removeClass('shop');
	});

	if (navigator.userAgent.indexOf('CriOS') >= 0) {
	  $('body').addClass('iosCri');
	}

	// $("html, body").css({
	// 	"overflow": "hidden"
	// });

	// $('body').addClass('no-scroll');

	$(window).on('load',function() {
		setTimeout(function(){
			$('body').addClass('onload');
			$("html, body").attr("style", "");

			$('#sldeLeft').slick('slickPlay');

			setTimeout(function(){
				$('#sldeRight').slick('slickPlay');
			}, 1500);


			window.removeEventListener("touchmove", movefun, {passive: false});
		},1000);
	});
});
