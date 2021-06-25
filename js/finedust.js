$(function(){
		$.getJSON('http://api.openweathermap.org/data/2.5/air_pollution?lat=35.10&lon=129.04&appid=4cdf85c083ac19af7890ea9a688665fd&units=metric',function(data){
			//alert(data.city.name);
			//alert(data.list[0].main.temp_min);
			var $components = data.main.components;
			


		});
});

{
	"coord":{
		"lon":129.04,
		"lat":35.1
	},
	"list":
		[
			{
				"main":{
					"aqi":5
				},
				"components":{
					"co":560.76,
					"no":0.58,
					"no2":13.88,
					"o3":151.63,
					"so2":5.31,
					"pm2_5":82.23,
					"pm10":85.62,
					"nh3":0
				},
				"dt":1622192400
			}
		]
}