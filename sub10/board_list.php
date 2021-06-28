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
					<a href="https://www.busan.go.kr/busan" class="home"></a>
					<span class="gt"></span>
					<a href="https://www.busan.go.kr/opgude">시민참여</a>
					<span class="gt"></span>
					<a href="https://www.busan.go.kr/opgfaq" class="active">시민게시판</a>
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
					<li><a href="https://www.busan.go.kr/minwon/survey" target="_blank">설문조사</a></li>
					<li><a href="https://www.busan.go.kr/minwon/nanum" target="_blank">나눔장터</a></li>
					<li><a href="https://www.busan.go.kr/minwon/thinkbox001" target="_blank">국민생각함</a></li>
					<li><a href="https://www.busan.go.kr/minwon/eventresult" target="_blank">이벤트통합안내</a></li>
					<li><a href="https://www.busan.go.kr/minwon/eventresult" target="_blank">행사/모집 신청</a></li>
					<li><a href="sub5.html" target="_blank" class="active1">시민게시판</a></li>
					<li><a href="https://www.busan.go.kr/yesan/index" target="_blank">주민참여예산</a></li>
					<li><a href="https://www.busan.go.kr/minwon/gujeideaoffer01" target="_blank">민생규제혁신과제</a></li>
					<li><a href="https://www.busan.go.kr/minwon/compliment" target="_blank">칭찬합시다</a></li>
				</ul>
			</div><!-- id="sub1Sidebar" -->
			<div id="sub5Content1" class="cf">
				<div id="noticeBoard">
					<h3 class="noticeBoardTit">시민 게시판</h3>
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
					<h3 class="boardPage">총 28330건 (1/2833page)</h3>
					<div id="citizenBoard">
						<div class="citizenBoardTitle cf">
							<div class="box1_5 fl">
								<div class="nth1 fl">번호</div>
								<div class="nth2 fl">제목</div>
								<div class="nth3 fl">첨부파일</div>
								<div class="nth4 fl">작성자</div>
								<div class="nth5 fl">작성일</div>
								<div class="nth6 fl">조회수</div>
							</div>
						</div>
						<div class="citizenBoardText cf">
<?php
	if (isset($_GET["page"]))
		$page = $_GET["page"];
	else
		$page = 1;

	$con = mysqli_connect("localhost", DBuser, DBpass, DBname);
	$sql = "select * from board order by num desc";
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
		$num         = $row["num"];
		$id          = $row["id"];
		$name        = $row["name"];
		$subject     = $row["subject"];
		$regist_day  = $row["regist_day"];
		$hit         = $row["hit"];
		if ($row["file_name"])
			$file_image = "<img src='images/ico_download_ai.png' alt='첨부파일 이미지'/>";
		else
			$file_image = " ";
?>
							<div class="box1_5 fl">
								<div class="nth1 fl"><?=$number?></div>
								<div class="nth2 fl"><a href="board_view.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?></a> </div>
								<div class="nth3 fl"><?=$file_image?></div>
								<div class="nth4 fl"><?=$name?></div>
								<div class="nth5 fl"><?=$regist_day?></div>
								<div class="nth6 fl"><?=$hit?></div>
							</div>	
<?php
		$number--;
	}
	mysqli_close($con);
?>
						</div>
						<div class="pageNavi cf">
							<ul class="pageNaviCtn cf">						
<?php
	if ($total_page>=2 && $page >= 2)	
	{
		$new_page = $page-1;
		$first_page = 1;
		//echo "<li><a href='board_list.php?page=$first_page' title='처음 목록으로'' class='pgFirst'></a></li>";
		//echo "<li><a href='board_list.php?page=$new_page'' title='이전 목록으로'' class='pgPrev'></a></li>";
									
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
			echo "<li><div class='number'><a href='board_list.php?page=$i' title='1페이지' class='active3'>$i</a></div></li>";
		}
	}
	if ($total_page>=2 && $page != $total_page)		
	{
		$new_page = $page+1;	
		echo "<li><a href='board_list.php?page=$new_page' title='다음 목록으로'' class='pgNext'></a></li>";		
		echo "<li><a href='board_list.php?page=$total_page' title='마지막 목록으로'' class='pgEnd'></a></li>";		
	}
	else 
		echo "<li>&nbsp;</li>";
?>
						</ul>
					</div><!-- class="pageNavi" -->   	
		<ul class="buttons">
			<li><button onclick="location.href='board_list.php'">목록</button></li>
			<li>
<?php 
	if($userid) {
?>
				<button onclick="location.href='board_form.php'">글쓰기</button>
<?php
	} else {
?>
				<a href="javascript:alert('로그인 후 이용해 주세요!')"><button>글쓰기</button></a>
<?php
	}
?>
			</li>
		</ul>
	</div>
				</div>
				<div class="survey">
					<div class="surveyTitle">
						<h4>자료 관리 담당자</h4>
						<dl>
							<dt>도시외교정책과</dt>
							<dd>기려원&nbsp;(051-888-7756)</dd>
							<dt class="mgl">최근 업데이트</dt>
							<dd>2021-04-09</dd>
						</dl>						
					</div>
					<form id="satisfactionForm" name="satisfactionForm" method="post">
						<fieldset>
							<div class="formBox cf">
								<div class="formBoxHeader fl">
									<p class="fl">이 페이지에서 제공하는 정보에 만족하십니까?</p>
									<div class="point fr"><span>평균 : <span>0</span>점</span><span>참여 : <span>0</span>명</span></div>
								</div>
								<div class="satisfyInner fl">
									<span>
										<input id="score1" name="score" type="radio" value="5" checked="checked">
										<label for="score1">매우만족</label>
									</span>
									<span>
										<input id="score2" name="score" type="radio" value="4">
										<label for="score2">만족</label>
									</span>
									<span>
										<input id="score3" name="score" type="radio" value="3">
										<label for="score3">보통</label>

									</span>
									<span>
										<input id="score4" name="score" type="radio" value="2">
										<label for="score4">불만</label>
									</span>
									<span>
										<input id="score5" name="score" type="radio" value="1">
										<label for="score5">매우불만</label>
									</span>
									<div class="comment fr">
										<input type="button" value="평점주기" class="button">
									</div>
								</div>
							</div>
						</fieldset>
					</form>				
				</div><!-- id="survey" -->
				<div class="preucation">
					<p class="mgb">댓글은 자유로운 의견 공유를 위한 장이므로 부산시에 대한 신고, 제안, 건의 등 답변이나 개선이 필요한 사항에 대해서는<br/><a href="https://www.busan.go.kr/minwon/myminwon">"부산민원 120 - 민원신청"</a>을 이용해 주시고, 내용 입력시 주민등록번호, 연락처 등 개인정보가 노출되지 않도록 주의하여 주시기 바랍니다.</p>
					<p>상업광고, 저속한 표현, 정치적 내용, 개인정보 노출 등은 별도의 통보없이 삭제될 수 있습니다.</p>
				</div><!-- id="preucation" -->
				<div class="snsBox">
					<div class="loginSns">
						<ul>
							<li><button type="button" class="button1"></button></li>
							<li><button type="button" class="button2"></button></li>
							<li><button type="button" class="button3"></button></li>
							<li><button type="button" class="button4"></button></li>
							<li><button type="button" class="button5"></button></li>
						</ul>
					</div>
					<div class="commmentArea">
						<div class="commentTxt1">
							<textarea id="comment" name="comment">댓글을 입력해 주세요</textarea>
						</div>
						<div class="commentTxt2">
							<span class="sticker1"></span>
							<span class="sticker2"></span>
							<button id="enrollment" name="enrollment">등록</button>
						</div>
						<div class="dotImg">
							<img src="images/img_NoReply.png" alt="댓글이미지"/>
						</div>
						<p>첫 번째 댓글을 작성해 보세요.</p>
					</div>
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