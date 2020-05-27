$(function(){

	$('#menuBtn').click(function(){
		if($(this).is(":visible")) {
			$(this).toggleClass('active');
			$('body').toggleClass('open');
		}
	});



	$('.voiceArea .hukidashi dt').click(function(){
		$(this).toggleClass('open');
		$(this).next().slideToggle(400);
	});

	$('.faqList dl dt').click(function(){
		$(this).toggleClass('open');
		$(this).next().slideToggle(400);
	});

	$('#salon_menu .moreBtn .more').click(function(){
		$(this).parent('.moreBtn').next().slideToggle(400).toggleClass('open');
		$(this).toggleClass('open');
	});

	$('.btnaddress').click(function(){
		AjaxZip3.zip2addr('number','','address1','address1');
	});



});


