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
	
/* 	$('#sidebar>ul>li').each(function(){
		var main = $(this);
		var sub1 = main.find('.sub1');
		var sub2 = sub1.find('.sub2');
		main.hover(
			function(){
				sub1.stop(true).slideDown(500);
			},
			function(){
				sub1.stop(false).slideUp(500);				
			}
		);			
		sub1.hover(
			function(){
				sub2.stop(true).slideDown(500);				
			},
			function(){
				sub2.stop(false).slideUp(500);				
			}

		);
	}); */
	var menu = $('.aside1Wrap>div, .aside1Wrap>div>ul>li');
	var menu2 = $('.sAsideWrap>ul>li');
	var wrap = $('.aside1');
	var menuHeight = menu.children('span.title').height();
	var menuHeight2 = menu2.children('li').height();
	var menuHeight3 = $('.aside1').height();
	var pageURL = location.href;
	var activeMenu;
	
	menu.on({
		mouseover:function(){
			var tg = $(this);
			menu.removeClass('active');
			tg.addClass('active');
			var th = menuHeight3 + tg.find('> .sAsideWrap').height();
			wrap.stop(false,false).animate({height:th},5000);
		},
		mouseout:function(){
			var tg = $(this);
			menu.removeClass('active');
			wrap.stop(false,false).animate({height: menuHeight3},5000);
			onActive();
		}
	});
	
	menu.each(function(i){
		var tg = $(this);
		var sub = tg.find('>.sAsideWrap>ul>li');
		var menuURL = tg.children('a').attr('href')
		var active = pageURL.indexOf(menuURL);
		if(active>-1){activeMenu=tg;};
		sub.each(function(j){
			var tg = $(this);
			var subURL = tg.children('a').attr('href');
			active = pageURL.indexOf(subURL);
			if(active>-1){activeMenu=tg;};
		});
		sub.on({
			mouseover:function(){
				var tg = $(this);
				sub.removeClass('active');
				tg.addClass('active');
			},
			mouseout:function(){
				var tg = $(this);
				tg.removeClass('active');
				onActive();
			}
		});
	});
	onActive();
	function onActive(){
		if(activeMenu){activeMenu.trigger('mouseover')};
	};
});

