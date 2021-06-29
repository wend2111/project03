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
</head>
<body> 
<header>
    <?php include "header_sub.php";?>
</header>  
<section>
 	<div id="message_box_wrap" class="cf">
 			<div id="message_title">
 				<h3>채팅<br><span>Web Messenger</span></h3>
 				<img src="images/chatting_bg.png" width="150" height="150" alt="타이틀이미지">
 			</div>
	 	<div id="message_box_sidebar2">
	 		<ul class="top_buttons">
	 			
					<li><span><a href="message_form.php">쪽지 보내기 </a></span></li>
					<li><span><a href="message_box.php?mode=rv">수신 쪽지함 </a></span></li>
					<li><span><a href="message_box.php?mode=send">송신 쪽지함</a></span></li>
			</ul> 	
	  </div>
  	  <div id="message_box2">
	    <h3 class="title">
<?php
	$mode = $_GET["mode"];
	$num  = $_GET["num"];

	$con = mysqli_connect("localhost", DBuser, DBpass, DBname);
	$sql = "select * from message where num=$num ";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$send_id    = $row["send_id"];
	$rv_id      = $row["rv_id"];
	$regist_day = $row["regist_day"];
	$subject    = $row["subject"];
	$content    = $row["content"];

	$content = str_replace(" ", "&nbsp;", $content);
	$content = str_replace("\n", "<br>", $content);

	if ($mode=="send")
		$result2 = mysqli_query($con, "select name from members where id='$rv_id'");
	else
		$result2 = mysqli_query($con, "select name from members where id='$send_id'");

	$record = mysqli_fetch_array($result2);
	$msg_name = $record["name"];

	if ($mode=="send")	    	
		echo " 내용보기";
	else
		echo " 내용보기";

	$read_chk = 1; // read_chk에 1을 넣음
	$sql2 = "update message set read_chk=$read_chk where num=$num" ;
	$result3 = mysqli_query($con, $sql2);


?>
		</h3>
		<ul id="view_content">
			<li>
				<span class="col1"><b>제목 :</b> <?=$subject?></span>
				<span class="col2"><?=$msg_name?> | <?=$regist_day?></span>
			</li>
			<li>
				<?=$content?>
			</li>		
		</ul>
		<ul class="buttons">
			<li><button onclick="location.href='message_response_form.php?num=<?=$num?>'">답변 쪽지</button></li>
			<li><button onclick="location.href='message_delete.php?num=<?=$num?>&mode=<?=$mode?>'">삭제</button></li>
		</ul>	
	</div> <!-- message_box -->
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