<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="Generator" content="Notepad++"/>
	<meta name="Author" content="최범희"/>
	<meta name="Keywords" content="최범희, 최범희 css 포트폴리오, css portfolio, Eunchae's css portfolio"/>
	<meta name="Description" content="최범희의 css 페이지 입니다"/>	
	<title>부산시청</title>
	<link rel="stylesheet" href="css/comm_layout.css"/>
	<link rel="stylesheet" href="css/main_layout.css"/>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
	<link rel="icon" href="images/favicon.ico" type="image/x-icon"/>	
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="js/cookie.js"></script>	
	<script src="js/date.js"></script>
	<script src="js/guidetext.js"></script>			
	<script src="js/script.js"></script>
    <script>
	    window.open("alert.htm", "", "location=no, directories=no, resizable=no, toolbar=no, width=590, height=323")		
    </script>
	<script>
		var tid;
		var cnt = parseInt(5);//초기값(초단위)
		function counter_init() {
			tid = setInterval("counter_run()", 1000);
		}

		function counter_reset() {
			clearInterval(tid);
			cnt = parseInt(60);
			counter_init();
		}

		function counter_run() {
			document.getElementById("counter").innerText = time_format(cnt);
			cnt--;
			if(cnt < 0) {
				clearInterval(tid);
				self.location = "member_form.php";
			}
		}
		function time_format(s) {
			var nHour=0;
			var nMin=0;
			var nSec=0;
			if(s>0) {
				nMin = parseInt(s/60);
				nSec = s%60;

				if(nMin>60) {
					nHour = parseInt(nMin/60);
					nMin = nMin%60;
				}
			} 
			if(nSec<10) nSec = "0"+nSec;
			if(nMin<10) nMin = "0"+nMin;

			return ""+nHour+":"+nMin+":"+nSec;
		}	
	</script>
	<!--[if lte ie 8]>
	<link href="css/non-ie9.css" rel="stylesheet"/>
	<![end if] -->		
</head>
<body>
	<header>
		<?php include "header.php";?>
	</header>
	<section>
		<?php include "main.php";?>	
	</section>
	<footer>
		<?php include "footer.php";?>	
	</footer>
</body>
</html>

<script>
counter_init();
</script>