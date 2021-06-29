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

	<link rel="stylesheet" href="css/message.css"/>

	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon"/>
	<link rel="icon" href="../images/favicon.ico" type="image/x-icon"/>	
	<script src="../js/jquery-1.9.1.min.js"></script>
	<script src="../js/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="../js/cookie.js"></script>	
	<script src="../js/date.js"></script>	
	<script src="../js/guidetext.js"></script>	
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
	<!--[if lte ie 8]>
	<link href="css/non-ie9.css" rel="stylesheet"/>
	<![end if] -->		
<script>
  function check_input() {
  	  if (!document.message_form.rv_id.value.trim())
      {
          alert("수신 아이디를 입력하세요!");
          document.message_form.rv_id.focus();
          return;
      }
      if (!document.message_form.subject.value.trim())
      {
          alert("제목을 입력하세요!");
          document.message_form.subject.focus();
          return;
      }
      if (!document.message_form.content.value.trim())
      {
          alert("내용을 입력하세요!");    
          document.message_form.content.focus();
          return;
      }
      document.message_form.submit();
   }
</script>
</head>
<body> 
<header>
    <?php include "header_sub.php";?>
</header>  
<?php
	if (!$userid )
	{
		echo("<script>
				alert('로그인 후 이용해주세요!');
				location.href='../index.php';
				</script>
			");
		exit;
	}
?>
<section>
 	<div id="message_box_wrap" class="cf">
 		<div id="message_box_inner" class="cf">	
			<div id="message_title" class="cf">
				<div class="message_text fl">
					<h3>채팅</h3>
					<span>Web Messenger</span>
					<span>유저분들을 위한 채팅 보내기 입니다. 모두들 환영해요^^</span>
				</div>
				<img src="images/message_title.png" width="150" height="150" alt="타이틀이미지">
			</div> 			
			<div id="user_box">
				<h3>내 정보</h3>
		 		<ul class="user_status">
		 			<li>
		 				<span class="col1"><?=$username?>님</span>
		 				<span class="col2">레벨[<?=$userlevel?>]</span>
		 				<span class="col3">포인트[<?=$userpoint?>]</span>
<?php
	$con = mysqli_connect("localhost", DBuser, DBpass, DBname);
	$sql = "select * from message where send_id='$userid' order by num desc";
	$sql2 = "select * from message where rv_id='$userid' order by num desc";	
	$sql3 = "select * from message where rv_id='$userid' and read_chk='0'";	
	$result = mysqli_query($con, $sql);
	$result2 = mysqli_query($con, $sql2);
	$result3 = mysqli_query($con, $sql3);

	$total_record = mysqli_num_rows($result); // 전체 글 수
	$total_record2 = mysqli_num_rows($result2); // 전체 글 수
	$total_record3 = mysqli_num_rows($result3); // 전체 글 수
?>		 				
		 				<span class="col4">보낸 쪽지<?=$total_record?></span>
		 				<span class="col5">받은 쪽지<?=$total_record2?></span>
		 				<span class="col6">새쪽지<?=$total_record3?></span>
<?php
   mysqli_close($con);
?>		 				
		 			</li>
		 		</ul>					
			</div>
		 	<div id="message_box_sidebar">
		 		<ul class="top_buttons">
						<li><span><a href="message_form.php">쪽지 보내기 </a></span></li>
						<li><span><a href="message_box.php?mode=rv">수신 쪽지함 </a></span></li>
						<li><span><a href="message_box.php?mode=send">송신 쪽지함</a></span></li>
				</ul> 	
		  </div>
		  <div id="message_box">
			  <h3 id="write_title">
			    		쪽지 보내기
				</h3>
			    <form  name="message_form" method="post" action="message_insert.php?send_id=<?=$userid?>">
			    	<div id="write_msg">
			    	    <ul>
									<li>
										<span class="col1">보내는 사람 : </span>
										<span class="col2"><?=$userid?></span>
									</li>	
									<li>
										<span class="col1">수신 아이디 : </span>
										<span class="col2"><input name="rv_id" type="text"></span>
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
			    	    </ul>
		    	    	<button type="button" onclick="check_input()"><span class="arrow"></span>보내기</button>
			    	</div>	    	
			    </form>
			</div> <!-- message_box -->
		</div>
	</div>
</section> 
<footer>
    <?php include "../footer.php";?>
</footer>
</body>
</html>
<script>
counter_init();
</script>