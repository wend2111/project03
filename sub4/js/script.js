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
});