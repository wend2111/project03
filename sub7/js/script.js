$(function(){
	/* alert('a'); */
	$('.guidetext').guidetext();
	$('#board').each(function(){
		var div = $(this);
		var allTit = div.find('.ctnTitle'); 
		var allCtn = div.find('.ctnWrap'); 
		allCtn.hide();
		allTit.css('cursor','pointer');
		allTit.click(function(){
			var tit = $(this);
			var ctn = tit.parent('.boardBox').find('.ctnWrap');
			allCtn.hide();
			ctn.show();
			allTit.css('cursor','pointer');
			tit.css('cursor','default');
		});

	});	

});