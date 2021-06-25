<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="Generator" content="Notepad++"/>
	<meta name="Author" content="최범희"/>
	<meta name="Keywords" content="최범희, 최범희 css 포트폴리오, css portfolio, Eunchae's css portfolio"/>
	<meta name="Description" content="최범희의 css 페이지 입니다"/>		
	<title>정보수정 : 부산광역시</title>
	<link rel="stylesheet" href="sub7/css/comm_layout.css"/>	
	<link rel="stylesheet" href="sub7/css/sub7.css"/>
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon"/>
	<link rel="icon" href="../images/favicon.ico" type="image/x-icon"/>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-ui-1.10.4.custom.min.js"></script>	
	<script src="js/cookie.js"></script>	
	<script src="js/script.js"></script>		
	<script src="js/member_modify.js"></script>		
	<!--[if lte ie 8]>
	<link href="css/non-ie9.css" rel="stylesheet"/>F
	<![end if] -->
</head>
<body>
	<header>
		<?php include "header2.php";?>
	</header>
<?php    
   	$con = mysqli_connect("localhost", DBuser, DBpass, DBname);
    $sql    = "select * from members where id='$userid'";
    $result = mysqli_query($con, $sql);
    $row    = mysqli_fetch_array($result);

    $pass = $row["pass"];
    $name = $row["name"];

    $email = explode("@", $row["email"]);
    $email1 = $email[0];
    $email2 = $email[1];

    mysqli_close($con);
?>			

	<div id="Contentwrap" class="cf">
		<div id="localGnb">
			<div class="localGnbInner cf">
				<div class="gnb">
					<a href="https://www.busan.go.kr/busan" class="home"></a>
					<span class="gt"></span>
					<a href="https://www.busan.go.kr/opgude">통합회원</a>
					<span class="gt"></span>
					<a href="https://www.busan.go.kr/opgfaq" class="active">로그인</a>
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
					<li><a href="https://www.busan.go.kr/bhareasymbol" target="_blank" class="active1">회원정보<span class="rightArrow"></span></a>
						<ul class="sub1">
							<li><a href="https://www.busan.go.kr/bhorgsymbol01" class="active">로그인</a></li>
							<li><a href="https://www.busan.go.kr/bhorgsymbol02">회원가입 </a></li>
							<li><a href="sub6.html">회원가입</a></li>
							<li><a href="sub6.html">아이디/비밀번호<br/>찾기</a></li>
							<li><a href="sub6.html">패일리사이트 안내</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- id="sub1Sidebar" -->
			<div id="sub6Content1" class="cf">
				<h3 class="noticeBoardTit">정보 수정</h3>			
		<!--	<div class="tab">
					<ul class="cf">
						<li class="active2"><span>회원 로그인</span></li>
						<li><span>비회원 로그인</span></li>
						<li><span>소셜 로그인</span></li>
					</ul>
				</div> -->
				<div id="main_content">
					<div id="join_box">
						<form name="member_form" method="post" action="member_modify.php?id=<?=$userid?>" class="formWrap">
							<h2>정보 수정</h2>
							<div class="form id">
								<div class="col1">아이디</div>
								<div class="col2">
									<?=$userid?>
								</div>
							</div>
							<div class="clear"></div>
							<div class="form pass">
								<div class="col1">비밀번호</div>						
								<div class="col2">
									<input type="password" name="pass" value="<?=$pass?>">							
								</div>
							</div>
							<div class="clear"></div>
							<div class="form passCheck">
								<div class="col1">비밀번호 확인</div>						
								<div class="col2">
									<input type="password" name="pass_confirm" value="<?=$pass?>">							
								</div>
							</div>
							<div class="clear"></div>
							<div class="form name">
								<div class="col1">이름</div>						
								<div class="col2">
									<input type="text" name="name" value="<?=$name?>">
								</div>
							</div>
							<div class="clear"></div>
							<div class="form email">
								<div class="col1">이메일</div>						
								<div class="col2">
									<input type="text" name="email1" value="<?=$email1?>">@<input type="text" name="email2" value="<?=$email2?>">
								</div>
							</div>
							<div class="clear"></div>

							<div class="bottom_line"> </div>
							<div class="buttons">
								<img style="cursor:pointer" src="images/submit.png" onclick="check_input()">&nbsp;
								<img id="reset_button" style="cursor:pointer" src="images/cancel.jpg" onclick="reset_form()">
							</div>
						</form>
					</div> <!--join_box -->
				</div><!-- main_content -->
			</div><!-- id="sub1Content1" -->
		</div><!-- id="sub1ContentWrap" -->
	</div>

	<footer>
		<?php include "footer.php";?>	
	</footer>
</body>
</html>
