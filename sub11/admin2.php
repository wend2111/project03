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
				<div class="boardSearchForm">
					<div class="rowTableSearch cf">
						<div class="categoryTit2 fl"><span class="categoryTitName2">검색</span></div>
						<input type="text" value="검색시작일" class="dateSearch1 fl"/>
						<span class="hyphen fl">-</span>
						<input type="text" value="검색종료일" class="dateSearch2 fl"/>	
						<select name="categorySearch2" id="categorySearch2" class="categorySearch2 fl">
							<option value="">제목</option>
							<option value="1">내용</option>
							<option value="2">작성자</option>
						</select>	
						<input type="text" value="검색" class="search1 fl"/>								
					</div>
				</div>					
				<div id="admin_box">			
					<h3 id="member_title">
						관리자 모드 > 게시판 관리
					</h3>
					<ul id="board_list">
						<li class="title">
							<span class="col1">선택</span>						
							<span class="col2">번호</span>						
							<span class="col3">이름</span>						
							<span class="col4">제목</span>						
							<span class="col5">첨부파일명</span>						
							<span class="col6">작성일</span>						
						</li>
						<form method="post" action="admin_board_delete.php">
<?php
	if (isset($_GET["page"]))
		$page = $_GET["page"];
	else
		$page = 1;

	$con = mysqli_connect("localhost", DBuser, DBpass, DBname);
	$sql = "select * from board order by num desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 회원 수	

	$scale = 10;

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1;

	$start = ($page - 1) * $scale;      

	$number = $total_record - $start;

	for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
	{
		mysqli_data_seek($result, $i);
		// 가져올 레코드로 위치(포인터) 이동
		$row = mysqli_fetch_array($result);
		// 하나의 레코드 가져오기
		$num = $row["num"];
		$name = $row["name"];
		$subject = $row["subject"];
		$file_name = $row["file_name"];
		$regist_day = $row["regist_day"];
		$regist_day = substr($regist_day, 0, 10)

/*	while ($row = mysqli_fetch_array($result))
	{
		$num = $row["num"];
		$name = $row["name"];
		$subject = $row["subject"];
		$file_name = $row["file_name"];
		$regist_day = $row["regist_day"];
		$regist_day = substr($regist_day, 0, 10) */
?>						
							<li>
								<span class="col1"><input type="checkbox" name="item[]" value="<?=$num?>"></span>
								<span class="col2"><?=$number?></span>
								<span class="col3"><?=$name?></span>
								<span class="col4"><?=$subject?></span>
								<span class="col5"><?=$file_name?></span>
								<span class="col6"><?=$regist_day?></span>
							</li>
<?php
		$number--;
	}
	mysqli_close($con);
?>						
							<button type="submit">선택된 글 삭제</button>
						</form>					
					</ul>
					<div class="pageNavi cf">
						<ul class="pageNaviCtn cf">	
<?php
	if ($total_page>=1 && $page >= 1)	
	{
		$new_page = $page-1;
		$first_page = 1;
		echo "<li><a href='admin2.php?page=$first_page' title='처음 목록으로' class='pgFirst'></a></li>";
		echo "<li><a href='admin2.php?page=$new_page' title='이전 목록으로' class='pgPrev'></a></li>";
									
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
			echo "<li><div class='number'><a href='admin2.php?page=$i' title='1페이지' class='active3'>$i</a></div></li>";
		}
	}
	if ($total_page>=1)		
	{
		$new_page = $page+1;	
		echo "<li><a href='admin2.php?page=$new_page' title='다음 목록으로' class='pgNext'></a></li>";		
		echo "<li><a href='admin2.php?page=$total_page' title='마지막 목록으로' class='pgEnd'></a></li>";		
	}
	else 
		echo "<li>&nbsp;</li>";
?>
						</ul>
					</div><!-- class="pageNavi" -->
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