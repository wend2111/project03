$(function(){
	$.ajax({
		url:'data/data.json',
		type:'get',
		dataType:'json',
		async:true,
		//async:true, 1.동기,비동기 2.전송완료 (비순서, 안기다림) : 비동기 채팅, 실시간 극장 예매
		//async:false, 1.전송완료 2. 동기, 비동기 (순서, 기다림) :동기 무전기, 날씨데이터
		error:function(){
			alert ('데이터 불러오기 실패');
		},
		success:function(){
			//alert ('데이터 불러오기 성공');
			$('body').append('<div>데이터 전송 완료</div>');
		}
	});
	$('body').append('<div>동기식 또는 비동기식 처리</div>');			
});	