$(function(){
	/* alert('a'); */
	var guideClass = 'gray';
	
	$('.textArea').each(function(){
		var textArea = this.defaultValue;
		//textArea.get(0) = "이름을 입력해주세요."
		var element = $(this);
		element.focus(function(){
			if(element.val()===textArea){
				element.val('');
				element.removeClass(guideClass);
			};
		});
		element.blur(function(){
			if(element.val()===''){
				element.val(textArea);				
				element.addClass(guideClass);
			};
		});
		if(element.val()===textArea){
			element.addClass(guideClass);
		};
	});
	
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
/* 	var class_closed = 'closed';
	$('.boardBox').each(function(){
		var div = $(this);
		var allTit = div.find('.ctnTitle'); 
		var allCtn = div.find('.ctnWrap'); 
		
		function closeAll(){
			allTit.addClass(class_closed);
			allCtn.addClass(class_closed);
		}
		function open(Tit,Ctn){
			allTit.removeClass(class_closed);
			allCtn.removeClass(class_closed);			
		}
		closeAll();
		allTit.click(function(){
			var Tit = $(this);
			var Ctn = Tit.parent('.boardBox').find('.ctnWrap');
			closeAll();
			open(Tit,Ctn);
		});

	});		 */
/* 	var class_closed = 'closed';
	$('.accordion').each(function(){
		var dl = $(this);
		var allDt = dl.find('dt'); 
		var allDd = dl.find('dd'); 
			
		function closeAll(){
			allDt.addClass(class_closed);
			allDd.addClass(class_closed);
		};
		function open(dt,dd){
			dt.removeClass(class_closed);
			dd.removeClass(class_closed);
		};
		closeAll();
		allDt.click(function(){
			var dt = $(this);
			var dd = dt.next();
			closeAll();
			open(dt,dd);
		});
	});	 */
/* 	$('#board').each(function(){
		var dl = $(this);
		var allDt = dl.find('.title2'); 
		var allDd = dl.find('.content_wrap'); 
		allDd.hide();
		allDt.css('cursor','pointer');
		allDt.click(function(){
			var dt = $(this);
			var dd = dt.parent('.contents').find('.content_wrap');
			allDd.hide();
			dd.show();
			allDt.css('cursor','pointer');
			dt.css('cursor','default');
		});

	});	 */
});