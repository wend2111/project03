$.fn.guidetext=(function(options){
	options = $.extend({
		guideClass : 'gray'
		},options);
	//var guideClass = 'gray';
	this.each(function(){
		var mainSearchText = this.defaultValue;
		//mainSearchText.get(0) = "이름을 입력해주세요."
		var element = $(this);
		element.focus(function(){
			if(element.val()===mainSearchText){
				element.val('');
				element.removeClass(options.guideClass);
			};
		});
		element.blur(function(){
			if(element.val()===''){
				element.val(mainSearchText);
				element.addClass(options.guideClass);
			};
		});
		if(element.val()===mainSearchText){
			element.addClass(options.guideClass);
		};
	});	
});