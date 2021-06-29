$(function(){
	var guideClass = 'gray';
	$('.guidetext').guidetext();	

	$('.tabSet').each(function(){
		var topDiv = $(this);
		var anchors = topDiv.find('div.buttons a');
		var panelDivs = topDiv.find('div.panel');
		var lastAnchor;
		var lastPanel;
		anchors.show();
		lastAnchor = anchors.parent('.active');
		lastPanel = $(lastAnchor.find('a').attr('href'));
		panelDivs.hide();
		lastPanel.show();
		
		anchors.click(function(e){
			e.preventDefault();
			var currentAnchor = $(this);
			var currentAnchor2 = currentAnchor.parent('.button');
			var currentPanel = $(currentAnchor.attr('href'));
			lastAnchor.removeClass('active');
			currentAnchor2.addClass('active');
			lastPanel.hide();
			currentPanel.show();
			lastAnchor = currentAnchor2;
			lastPanel = currentPanel;
		});			
	});	
	
	var balloon = $('<div class="balloon"></div>').appendTo('body');
	
	function updateBalloonPosition(x,y){
		balloon.css({left: x+13, top: y});
	};
	function showBalloon(){
		balloon.stop().css('opacity',0).show().animate({opacity:1},1000);
	};
	function hideBalloon(){
		balloon.stop().animate({opacity:0},1000,function(){balloon.hide()});		
	};
	$('.showBalloon').each(function(){
		var element = $(this);
		var text = element.attr('title');
		element.attr('title','');
		element.hover(
			function(e){
				balloon.text(text);
				updateBalloonPosition(e.pageX,e.pageY);
				showBalloon();
			},
			function(){
				hideBalloon();
			}
		);
		element.mousemove(function(e){
			updateBalloonPosition(e.pageX,e.pageY);
		});
	});

	bb = true;
	$('.quick_toggle').click(function(){
		if(bb){
			var arrow = $(this).find('.bottomArrow');
			var txt = $(this).find('.moreTxt');
			txt.text('감추기');
			arrow.removeClass('bottomArrow');
			arrow.addClass('quick_open');
			//$(this).stop(true,true).animate({'height':'464px',''},500);
			$('.quickmenu').stop(true,true).animate({'height':'464px'},500,function(){bb=false;});
		}else{
			var arrow = $(this).find('.quick_open');
			var txt = $(this).find('.moreTxt');
			txt.text('더보기');			
			arrow.removeClass('quick_open');
			arrow.addClass('bottomArrow');
			//$(this).stop(false,false).animate({'height':'230px'},500);
			$('.quickmenu').stop(false,false).animate({'height':'230px'},500,function(){bb=true;});
		};
	});	
	
	$('#busanRanking .rankBox .rankList li a').hover(
		function(){
			var a = $(this);
			a.addClass('hover');
		},
		function(){
			var a = $(this);			
			a.removeClass('hover');			
		}
	);
	
	$('#busanTourguide .tourList li a').hover(
		function(){
			var a = $(this);
			a.addClass('hover');
		},
		function(){
			var a = $(this);			
			a.removeClass('hover');			
		}
	);	
	
	aa = true;
	$('.quick_toggle2').click(function(){
		if(aa){
			var arrow = $(this).find('.bottomArrow');
			var txt = $(this).find('.moreTxt');
			txt.text('감추기');
			arrow.removeClass('bottomArrow');
			arrow.addClass('quick_open');
			//$(this).stop(true,true).animate({'height':'464px',''},500);
			$('.quickmenu2').stop(true,true).animate({'height':'550px'},500,function(){aa=false;});
		}else{
			var arrow = $(this).find('.quick_open');
			var txt = $(this).find('.moreTxt');
			txt.text('더보기');			
			arrow.removeClass('quick_open');
			arrow.addClass('bottomArrow');
			//$(this).stop(false,false).animate({'height':'230px'},500);
			$('.quickmenu2').stop(false,false).animate({'height':'230px'},500,function(){aa=true;});
		};
	});		
	/* 팝업연동 */
	if($.cookie('pop') !='no'){$('#pop_wrap').show();}
	$('#pop_wrap').css('cursor','move').draggable();
	
	$('#pop_wrap area:eq(0)').on('click',function(){
		$('#pop_wrap').fadeOut('fast');
		return false;
	});
	$('#pop_wrap area:eq(1)').on('click',function(){
		$.cookie('pop','no',{expires:1});
		$('#pop_wrap').fadeOut('fast');
		return false;
	});
	//eq(0)은 맨오른쪽부터 읽는다. 그렇기때문에 창닫기	
	
	/* 메인 이미지 슬라이드 */
	
	var panel_width = $('.eventImg>a>img').width();
	
	var slideshow = $('.eventImg');
	var totalButton = $('.slideImgTotal');
	var slide_interval;
	function timer(){
		slide_interval=setInterval(function(){			
			randomNumber++;			
			if(randomNumber==$('.eventSelect>ul>li>button').size()){randomNumber=0;};
			moveSlider(randomNumber);
		},2500);		
	};
	
	slideshow.hover(
		function(){
			clearInterval(slide_interval);
		},
		function(){
			timer();
		}
	);
	var bb = true;
	totalButton.click(function(){
		if(bb){
			$(this).removeClass();
			$(this).addClass('on');
			bb= false;
			clearInterval(slide_interval);		
		}else{
			$(this).removeClass();			
			$(this).addClass('slideImgTotal');
			bb=true;
			timer();
		};
	});		
	
	function moveSlider(index){
		var willMoveLeft = -(index*995);
		$('.eventImg').animate({left:willMoveLeft},'500');
		$('.eventSelect>ul>li[data-index!='+index+']').removeClass('slideActive');		
		$('.eventSelect>ul>li[data-index='+index+']').addClass('slideActive');
		randomNumber = index;
	};	
	
	$('.eventSelect>ul>li>button').each(function(index){
		$(this).attr('data-index',index);
	});
	$('.eventSelect>ul>li').each(function(index){
		$(this).attr('data-index',index);
	});
	$('.eventSelect>ul>li>button').click(function(){
		var index = $(this).attr('data-index');
		moveSlider(index);
	});	
	var randomNumber = Math.round(Math.random()*4);
	timer();
	moveSlider(randomNumber);	

	var current = 0;
	var lolling = $('.lolling>li');
	var stop;
	
	function timer2(){
		stop=setInterval(function(){	
			var prev = lolling.eq(current);
			move(prev,'0%','-100%');
			current++;
			if(current==lolling.size()){current=0};
			var next = lolling.eq(current);
			move(next,'100%','0%');
		},1000);		
	};

	function move(tg,start,end){
		tg.css({top:start}).stop().animate({top:end},{duration:500,ease:'swing'});
	};
	timer2();
	
	lolling.hover(
		function(){
			clearInterval(stop);
		},
		function(){
			timer2();
		}
	);

	function swing(){
		$('.icon_message').animate({'bottom':'5px'},1000).animate({'bottom':'-10px'},1000);
	}
	setInterval(swing,1000);	
});