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

	<link rel="stylesheet" href="css/admin.css"/>
	<link rel="stylesheet" href="css/sub5.css"/>

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
</head>
<body>
<header>
    <?php include "../sub9/header_sub.php";?>
</header> 
<section>
	<div id="Contentwrap" class="cf">
		<div id="localGnb">
			<div class="localGnbInner cf">
				<div class="gnb">
					<a href="../index.php" class="home"></a>
					<span class="gt"></span>
					<a href="../login_form.php">로그인</a>
					<span class="gt"></span>
					<a href="admin.php" class="active">관리자 모드</a>
				</div>
				<div class="shareArea">
					<ul>
						<li><a href="#" class="share"></a></li>
						<li><a href="#" class="print"></a></li>
						<li><a href="#" class="bookmark"></a></li>
					</ul>
				</div>
			</div>
		</div><!-- id="sub1Sitemap" -->
		<div class="contentWrapInner cf">
			<div id="sidebar" class="cf">
				<ul>
					<li><a href="admin.php">회원 관리</a></li>
					<li><a href="admin2.php">게시판 관리</a></li>
				</ul>
			</div><!-- id="sub1Sidebar" -->
			<div id="sub5Content1" class="cf">
				<div id="admin_box">
					<h3 id="member_title">
						관리자 모드 > 회원 관리
					</h3>
					<ul id="member_list">
						<li>
							<span class="col1">번호</span>
							<span class="col2">아이디</span>
							<span class="col3">이름</span>
							<span class="col4">레벨</span>
							<span class="col5">포인트</span>
							<span class="col6">가입일</span>
							<span class="col7">수정</span>
							<span class="col8">삭제</span>
						</li>
<?php
	$con = mysqli_connect("localhost", DBuser, DBpass, DBname);
	$sql = "select * from members order by num desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 회원 수	

	$number = $total_record;

	while ($row = mysqli_fetch_array($result))
	{
		$num = $row["num"];
		$id = $row["id"];
		$name = $row["name"];
		$level = $row["level"];
		$point = $row["point"];
		$regist_day = $row["regist_day"];
?>					
						<li>
							<form method="post" action="admin_member_update.php?num=<?=$num?>">
								<span class="col1"><?=$number?></span>
								<span class="col2"><?=$id?></span>
								<span class="col3"><?=$name?></span>
								<span class="col4"><input type="text" name="level" value="<?=$level?>"></span>
								<span class="col5"><input type="text" name="point" value="<?=$point?>"></span>
								<span class="col6"><?=$regist_day?></span>
								<span class="col7"><button type="submit">수정</button></span>
								<span class="col8"><button type="button" onclick="location.href='admin_member_delete.php?num=<?=$num?>'">삭제</button></span>							
							</form>
						</li>
<?php
		$number--;
	}
	mysqli_close($con);	
?>					
					</ul>				
				</div>
			</div>
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