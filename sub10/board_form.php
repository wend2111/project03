<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="Generator" content="Notepad++"/>
	<meta name="Author" content="최범희"/>
	<meta name="Keywords" content="최범희, 최범희 css 포트폴리오, css portfolio, Eunchae's css portfolio"/>
	<meta name="Description" content="최범희의 css 페이지 입니다"/>	
	<title>채팅 :부산시청</title>
	<link rel="stylesheet" href="../css/comm_layout2.css"/>
	<link rel="stylesheet" href="../css/main_layout.css"/>

	<link rel="stylesheet" href="css/board.css"/>

	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon"/>
	<link rel="icon" href="../images/favicon.ico" type="image/x-icon"/>	
	<script src="../js/jquery-1.9.1.min.js"></script>
	<script src="../js/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="../js/cookie.js"></script>	
	<script src="../js/date.js"></script>	
	<script src="../js/script.js"></script>	
	<script>
		var tid;
		var cnt = parseInt(60*15);//초기값(초단위)
		function counter_init() {
			tid = setInterval("counter_run()", 1000);
		}

		function counter_reset() {
			clearInterval(tid);
			cnt = parseInt(60*15);
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
	
	<script>
	  function check_input() {
	      if (!document.board_form.subject.value.trim())
	      {
	          alert("제목을 입력하세요!");
	          document.board_form.subject.focus();
	          return;
	      }
	      if (!document.board_form.content.value.trim())
	      {
	          alert("내용을 입력하세요!");    
	          document.board_form.content.focus();
	          return;
	      }
	      document.board_form.submit();
	   }
	</script>
	<!--[if lte ie 8]>
	<link href="css/non-ie9.css" rel="stylesheet"/>
	<![end if] -->	
</head>
<body> 
<header>
    <?php include "../sub9/header_sub.php";?>
</header>   
<section>
	<div id="main_img_bar">
		<img src="./img/main_img.png">
	</div>
	<div id="board_box">
		<h3 id="board_title">
			게시판 > 글 쓰기
		</h3>
		<form  name="board_form" method="post" action="board_insert.php" enctype="multipart/form-data">
			<ul id="board_form">
				<li>
					<span class="col1">이름 : </span>
					<span class="col2"><?=$username?></span>
				</li>		
				<li>
					<span class="col1">제목 : </span>
					<span class="col2"><input name="subject" type="text"></span>
				</li>	    	
				<li id="text_area">	
					<span class="col1">내용 : </span>
					<span class="col2">
					<textarea name="content"></textarea>
					</span>
				</li>
				<li>
					<span class="col1"> 첨부 파일</span>
					<span class="col2"><input type="file" name="upfile"></span>
				</li>
			</ul>
			<ul class="buttons">
				<li><button type="button" onclick="check_input()">완료</button></li>
				<li><button type="button" onclick="location.href='board_list.php'">목록</button></li>
			</ul>
		</form>
	</div> <!-- board_box -->
</section> 
<footer>
    <?php include "../footer.php";?>
</footer>
</body>
</html>
<script>
counter_init();
</script>