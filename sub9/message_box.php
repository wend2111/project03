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
</head>
<body> 
<header>
    <?php include "header_sub.php";?>
</header>  
<section>
 	<div id="message_box_wrap" class="cf">
		<div id="message_title">
			<h3>채팅</h3>
			<span>Web Messenger</span>
			<span>유저분들을 위한 채팅 보내기 입니다. 모두들 환영해요^^</span>
			<img src="images/message_title.png" width="150" height="150" alt="타이틀이미지">
		</div>
		<div id="message_box_inner" class="cf">
		 	<div id="message_box_sidebar">
		 		<ul class="top_buttons">
					<li><span><a href="message_form.php">쪽지 보내기 </a></span></li>
					<li><span><a href="message_box.php?mode=rv">수신 쪽지함 </a></span></li>
					<li><span><a href="message_box.php?mode=send">송신 쪽지함</a></span></li>
				</ul> 	
		  	</div>
	  	 	 <div id="message_box2">
		    	<h3>	
<?php
 		if (isset($_GET["page"]))
			$page = $_GET["page"];
		else
			$page = 1;

		$mode = $_GET["mode"];

		if ($mode=="send")
			echo " 목록보기";
		else
			echo " 목록보기";
?>
				</h3>
		<!-- <div> 필요없음 -->
				<ul id="message">
					<li>
						<span class="col1">번호</span>
						<span class="col2">제목</span>
						<span class="col3">
<?php						
					if ($mode=="send")
						echo "받은이";
					else
						echo "보낸이";
?>
						</span>
						<span class="col4">등록일</span>
						<span class="col5">수신여부</span>
					</li>
<?php
	$con = mysqli_connect("localhost", DBuser, DBpass, DBname);

	if ($mode=="send")
		$sql = "select * from message where send_id='$userid' order by num desc";
	else
		$sql = "select * from message where rv_id='$userid' order by num desc";

	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 글 수

	$scale = 10;

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 
 
	// 표시할 페이지($page)에 따라 $start 계산  
	$start = ($page - 1) * $scale;      

	$number = $total_record - $start;

   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
   {
      mysqli_data_seek($result, $i);
      // 가져올 레코드로 위치(포인터) 이동
      $row = mysqli_fetch_array($result);
      // 하나의 레코드 가져오기
      $num    = $row["num"];
      $subject     = $row["subject"];
      $regist_day  = $row["regist_day"];
      $read_chk = $row["read_chk"];

      if ($mode=="send")
	  		$msg_id = $row["rv_id"];
      else
	  		$msg_id = $row["send_id"];
	  
	

      $result2 = mysqli_query($con, "select name from members where id='$msg_id'");
      $record = mysqli_fetch_array($result2);
      $msg_name     = $record["name"];

?>
					<li>
						<span class="col1"><?=$number?></span>
						<span class="col2"><a href="message_view.php?mode=<?=$mode?>&num=<?=$num?>"><?=$subject?></a></span>
						<span class="col3"><?=$msg_name?>(<?=$msg_id?>)</span>
						<span class="col4"><?=$regist_day?></span>
<?php
	  if ($read_chk == 0 && $mode=="rv")
	  {
	  	echo "<span class='col5'>읽지 않음</span>";  	
	  }
	  if ($read_chk >= 1 && $mode=="rv")
	  {
	  	echo "<span class='col5'>읽음</span>";
	  }

?>							
					</li>	
<?php

	   $number--;
   }
   mysqli_close($con);
?>
				</ul>
				<ul id="page_num"> 	
<?php
	if ($total_page>=2 && $page >= 2)	
	{
		$new_page = $page-1;
		echo "<li><a href='message_box.php?mode=$mode&page=$new_page'>◀ 이전</a> </li>";
	}		
	else 
		echo "<li>&nbsp;</li>";

   	// 게시판 목록 하단에 페이지 링크 번호 출력
   	for ($i=1; $i<=$total_page; $i++)
   	{
			if ($page == $i)     // 현재 페이지 번호 링크 안함
			{
				echo "<li><b> $i </b></li>";
			}
			else
			{
				echo "<li> <a href='message_box.php?mode=$mode&page=$i'> $i </a> <li>";
			}
   	}
   	
   	if ($total_page>=2 && $page != $total_page)		
   	{
			$new_page = $page+1;	
			echo "<li> <a href='message_box.php?mode=$mode&page=$new_page'>다음 ▶</a> </li>";
		}
		else 
			echo "<li>&nbsp;</li>";
?>
				</ul> <!-- page -->	    	
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
