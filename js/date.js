$(function(){
		$.getJSON('http://api.openweathermap.org/data/2.5/weather?id=1838524&appid=4cdf85c083ac19af7890ea9a688665fd&units=metric',function(data){
			//alert(data.city.name);
			//alert(data.list[0].main.temp_min);
			var $minTemp = data.main.temp_min.toFixed(1);
			var $maxTemp = data.main.temp_max.toFixed(1);
			var $cTemp = data.main.temp.toFixed(1);
			//alert(new Date(Date.now()));
			var now = new Date(Date.now());
			var month = now.getMonth()+1;
			var $cDate = now.getFullYear() +'년 '+ month+'월 ' + now.getDate()+'일 '+now.getHours()+'시 ' + now.getMinutes() +'분 ' ;
			//var $cDate = data.dt;
			var $wIcon = data.weather[0].icon;

			$('.clowtemp').append($minTemp);
			$('.chightemp').append($maxTemp);
			$('.ctemp').prepend($cTemp);
			//$('.datetitle').prepend($cDate);
			$('.cicon').append('<img src="http://openweathermap.org/img/wn/'+$wIcon+'.png" />');
		});
});