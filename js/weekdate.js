$(function(){
		$.getJSON('http://api.openweathermap.org/data/2.5/forecast?id=1835848&appid=4cdf85c083ac19af7890ea9a688665fd&units=metric',function(data){
			//alert(data.city.name);
			//alert(data.list[0].main.temp_min);
			var $minTemp = data.list[8].main.temp_min;
			var $maxTemp = data.list[8].main.temp_max;
			var $cTemp = data.list[8].main.temp;
			var $cDate = data.list[8].dt_txt;
			var $wIcon = data.list[8].weather[0].icon;
			
			$('.clowtemp2').append($minTemp);
			$('.chightemp2').append($maxTemp);
			$('.ctemp2').append($cTemp);
			$('h2').prepend($cDate);
			$('.cicon').append('<img src="http://openweathermap.org/img/wn/'+$wIcon+'@2x.png" />');
		});
});