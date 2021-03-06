<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="Generator" content="Notepad++"/>
	<meta name="Author" content="최범희"/>
	<meta name="Keywords" content="최범희, 최범희 css 포트폴리오, css portfolio, Eunchae's css portfolio"/>
	<meta name="Description" content="최범희의 css 페이지 입니다"/>		
	<title>로그인 : 부산광역시</title>
	<link rel="stylesheet" href="sub7/css/comm_layout.css"/>	
	<link rel="stylesheet" href="sub7/css/sub7.css"/>
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon"/>
	<link rel="icon" href="../images/favicon.ico" type="image/x-icon"/>
	
	<!--[if lte ie 8]>
	<link href="css/non-ie9.css" rel="stylesheet"/>F
	<![end if] -->
	<script>
		function check_input()
		{
			if(!document.member_form.id.value.trim()){
				alert("아이디를 입력하세요!");
				document.member_form.id.focus();
				return;
			}

			if(!document.member_form.pass.value.trim()){
				alert("비밀번호를 입력하세요!");
				document.member_form.pass.focus();
				return;
			}

			if(!document.member_form.pass_confirm.value.trim()){
				alert("비밀번호 확인을 입력하세요!");
				document.member_form.pass_confirm.focus();
				return;
			}

			if(!document.member_form.name.value.trim()){
				alert("이름을 입력하세요!");
				document.member_form.name.focus();
				return;
			}

			if(!document.member_form.email1.value.trim()){
				alert("이메일 주소를 입력하세요!");
				document.member_form.email1.focus();
				return;
			}

			if(!document.member_form.email2.value.trim()){
				alert("이메일 주소를 입력하세요!");
				document.member_form.email2.focus();
				return;
			}

			if(document.member_form.pass.value != document.member_form.pass_confirm.value) {
				alert("비밀번호가 일치하지 않습니다. \n 다시 입력 해주세요");
				document.member_form.pass.focus();
				document.member_form.pass.select();
				return;
			}
			document.member_form.submit();
		}
		function reset_form() {
			document.member_form.id.value= "";
			document.member_form.pass.value= "";
			document.member_form.pass_confirm.value= "";
			document.member_form.name.value= "";
			document.member_form.email1.value= "";
			document.member_form.email2.value= "";
			document.member_form.id.focus();
			return;
		}

		function check_id() {
			window.open("member_check_id.php?id=" + document.member_form.id.value,
				"IDcheck",
				"left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
		}
	</script>
	</head>
<body>
	<div id="headerWrap">
		<div class="header">
			<div id="mainLogo"><a href="index.php"><img src="images/main_logo.png" width="215" height="60" alt="메인로고"/><h1>부산로고</h1></a></div><!-- id="mainLogo" -->
			<div id="mainGnb">
				<h2>메인 GNB</h2>
				<ul>
					<li class="phone"><a href="https://www.busan.go.kr/phone" target="_blank">행정전화번호부</a></li>
					<li class="login"><a href="https://www.busan.go.kr/member/login" target="_blank">로그인</a></li>
					<li class="regist"><a href="https://www.busan.go.kr/member/register-step01" target="_blank">회원가입</a></li>
					<li class="sitemap"><a href="https://www.busan.go.kr/SiteMap" target="_blank">사이트맵</a></li>
					<li class="language">
						<label for="selectLanguage"></label>
						<select name="selectLanguage" id="selectLanguage">
							<option value="http://english.busan.go.kr">english</option>
							<option value="http://japanese.busan.go.kr">日本語</option>
							<option value="http://chinese.busan.go.kr">简体中文</option>
							<option value="http://tchinese.busan.go.kr">繁體中文</option>
						</select>
						<button><span>GO</span></button>
					</li>
					<li class="microdust"><span></span><a href="http://data.busan.go.kr/index.nm?contentId=45" target="_blank"><span>초미세먼지(좋음)</span></a></li>
					<li class="corona"><a href="https://www.busan.go.kr/corona19/policy01" target="_blank">코로나19</a></li>
				</ul>
			</div><!-- id="mainGnb" -->
		</div><!-- id="header" -->
		<!-- 실제로 만들때 탭인덱스 넣기 원뎁스에만 -->
		<div class="navWrap">
			<div class="navOuter">
				<div id="nav" class="cf">
					<h2>메인 메뉴</h2>
					<div class="navInner cf">
						<ul class="navInner">
							<li><a href="../sub1/sub1.html" title="부산민원120"><span>부산민원120</span></a>
								<div class="oneDepthOuter">		
									<div class="img1"><span><img src="images/bg_nav.png" alt="메뉴이미지"/></span></div>							
									<div class="oneDepth1 width100 cf">
										<div class="twoInner">
											<ul class="m_width">
												<li class="pdl1 fl">
													<h3><a href="../sub1/sub1.html">민원신청</a></h3>
													<dl>
														<dt><a href="../sub1/sub1.html">· 민원신청</a></dt>
														<dd></dd>
														<dt><a href="../sub1/sub1.html">· 교통불편민원신청</a></dt>
														<dd></dd>
														<dt><a href="../sub1/sub1.html">· 민원사례</a></dt>
														<dd></dd>
														<dt><a href="../sub1/sub1.html">· 스마트현장사진신고</a></dt>
														<dd></dd>
														<dt><a href="../sub1/sub1.html">· 신고센터</a></dt>
														<dd></dd>
														<dt><a href="../sub1/sub1.html">· 정부24</a></dt>
														<dd></dd>
													</dl>
												</li>
												<li class="pdl2 fl">
													<h3><a href="../sub1/sub1.html">제안신청</a></h3>
													<dl>
														<dt><a href="../sub1/sub1.html">· 일반제안</a></dt>
														<dd></dd>
														<dt><a href="../sub1/sub1.html">· 공모제안</a></dt>
														<dd></dd>
														<dt><a href="../sub1/sub1.html">· 나의제안</a></dt>
														<dd></dd>
													</dl>
												</li>
												<li class="pdl3 fl">
													<h3><a href="../sub1/sub1.html">시민참여</a></h3>
													<dl>
														<dt><a href="../sub1/sub1.html">· 설문조사</a></dt>
														<dd></dd>
														<dt><a href="../sub1/sub1.html">· 나눔장터</a></dt>
														<dd></dd>
														<dt><a href="../sub1/sub1.html">· 국민생각함</a></dt>
														<dd></dd>
														<dt><a href="../sub1/sub1.html">· 모니터</a></dt>
														<dd></dd>
														<dt><a href="../sub1/sub1.html">· 이벤트통합안내</a></dt>
														<dd></dd>
														<dt><a href="../sub1/sub1.html">· 행사/모집 신청</a></dt>
														<dd></dd>
														<dt><a href="../sub1/sub1.html">· 시민게시판</a></dt>
														<dd></dd>
														<dt><a href="../sub1/sub1.html">· 주민참여예산</a></dt>
														<dd></dd>
														<dt><a href="../sub1/sub1.html">· 민생규제혁신과제</a></dt>
														<dd></dd>
														<dt><a href="../sub1/sub1.html">· 칭찬합시다</a></dt>
														<dd></dd>
														<dt><a href="../sub1/sub1.html">· 시민청원 와글와글</a></dt>
														<dd></dd>
														<dt><a href="../sub1/sub1.html">· 시민토론 ON AIR</a></dt>
														<dd></dd>		
														<dt><a href="../sub1/sub1.html">· 협치부산</a></dt>
														<dd></dd>
													</dl>
												</li>
												<li class="pdl4 bdr fl">
													<h3><a href="../sub1/sub1.html">민원안내</a></h3>
													<dl>
														<dt><a href="../sub1/sub1.html">· 민원편람</a></dt>
														<dd></dd>
														<dt><a href="../sub1/sub1.html">· 민원목록</a></dt>
														<dd></dd>
														<dt><a href="../sub1/sub1.html">· 민원처리 확인</a></dt>
														<dd></dd>
														<dt><a href="../sub1/sub1.html">· 여권안내</a></dt>
														<dd></dd>
														<dt><a href="../sub1/sub1.html">· 편리한 민원서비스</a></dt>
														<dd></dd>
														<dt><a href="../sub1/sub1.html">· 민원정보</a></dt>
														<dd></dd>
														<dt><a href="../sub1/sub1.html">· 민원시책</a></dt>
														<dd></dd>
														<dt><a href="../sub1/sub1.html">· 행정서비스헌장</a></dt>
														<dd></dd>
													</dl>
												</li>
												<li class="twoDepthHeight1 pdl1 fl">
													<h3><a href="../sub1/sub1.html">120콜센터</a></h3>
													<dl>
														<dt><a href="../sub1/sub1.html">· 이용안내</a></dt>
														<dd></dd>
														<dt><a href="../sub1/sub1.html">· 콜센터 소개</a></dt>
														<dd></dd>
													</dl>
												</li>
											</ul>
										</div>
									</div><!-- class="oneDepth1 -->
								</div><!-- class="oneDepthOuter" -->
							</li>
							
							<li><a href="../sub2/sub2.html" title="부산소식"><span>부산소식</span></a>
								<div class="oneDepthOuter">
									<div class="img2"><span><img src="images/bg_nav.png" alt="메뉴이미지"/></span></div>							
									<div class="oneDepth1 oneDepth2 width100 cf">
										<ul class="m_width">
											<li class="pdl1 fl">
												<h3><a href="../sub2/sub2.html">새소식</a></h3>
												<dl>
													<dt><a href="../sub2/sub2.html">· 공지사항</a></dt>
													<dd></dd>
													<dt><a href="../sub2/sub2.html">· 교통불편민원신청</a></dt>
													<dd></dd>
													<dt><a href="../sub2/sub2.html">· 통합 공지사항</a></dt>
													<dd></dd>
													<dt><a href="../sub2/sub2.html">· 부산시보(다이내믹부산)</a></dt>
													<dd></dd>
													<dt><a href="../sub2/sub2.html">· 시정영상뉴스</a></dt>
													<dd></dd>
													<dt><a href="../sub2/sub2.html">· 전자책</a></dt>
													<dd></dd>
													<dt><a href="../sub2/sub2.html">· 영상홍보물</a></dt>
													<dd></dd>
													<dt><a href="../sub2/sub2.html">· 공공앱</a></dt>
													<dd></dd>												
												</dl>
											</li>
											<li class="pdl2 fl">
												<h3><a href="../sub2/sub2.html">보도·해명자료</a></h3>
												<dl>
													<dt><a href="../sub2/sub2.html">· 보도자료</a></dt>
													<dd></dd>
													<dt><a href="../sub2/sub2.html">· 해명·설명자료</a></dt>
													<dd></dd>
												</dl>
											</li>
											<li class="pdl3 fl">
												<h3><a href="../sub2/sub2.html">공고</a></h3>
												<dl>
													<dt><a href="../sub2/sub2.html">· 우리시 채용공고</a></dt>
													<dd></dd>
													<dt><a href="../sub2/sub2.html">· 부산시보 고시공고</a></dt>
													<dd></dd>
													<dt><a href="../sub2/sub2.html">· 고시공고</a></dt>
													<dd></dd>
													<dt><a href="../sub2/sub2.html">· 분묘개장공고</a></dt>
													<dd></dd>
												</dl>
											</li>
											<li class="pdl4 bdr fl">
												<h3><a href="../sub2/sub2.html">부산시 공식SNS</a></h3>
											</li>
										</ul>
									</div><!-- class="oneDepth1 -->
								</div><!-- class="oneDepthOuter" -->				
							</li>
							
							<li><a href="../sub3/sub3.html" title="통합예약"><span>통합예약</span></a></li>
							
							<li><a href="../sub4/sub4.html" title="정보공개"><span>정보공개</span></a>
								<div class="oneDepthOuter">
									<div class="img3"><span><img src="images/bg_nav.png" alt="메뉴이미지"/></span></div>							
									<div class="oneDepth1 oneDepth3 width100 cf">
										<ul class="m_width">
											<li class="pdl1 fl">
												<h3><a href="../sub4/sub4.html">핵심프로젝트</a></h3>
												<dl>
													<dt><a href="../sub4/sub4.html">· 가덕도신공항</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 동남권 메가시티</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 자치경찰제</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 2030 부산월드엑스포</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 부산항(북항)재개발</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 부산국제관광도시 사업</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 에코델타 스마트시티</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 보육종합대책</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 보행혁신정책</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 미세먼지 저감</a></dt>
													<dd></dd>
												</dl>
											</li>
											<li class="pdl2 fl">
												<h3><a href="../sub4/sub4.html">주요시책</a></h3>
												<dl>
													<dt><a href="../sub4/sub4.html">· 2021년 달라지는 제도/시책</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 주요업무계획</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 인구정책 브리핑</a></dt>
													<dd></dd>
												</dl>
											</li>
											<li class="pdl3 fl">
												<h3><a href="../sub4/sub4.html">예산</a></h3>
												<dl>
													<dt><a href="../sub4/sub4.html">· 세입세출예산서</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 기금운용계획</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 재정공시</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 세입세출 운용</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 신고 및 조회</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 예산절감(낭비)사례</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 보조금 내역 공개</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 민간위탁</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 공공기관 위탁·대행</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 지방재정365</a></dt>
													<dd></dd>
												</dl>
											</li>
											<li class="pdl4 bdr fl">
												<h3><a href="../sub4/sub4.html">정보공개</a></h3>
												<dl>
													<dt><a href="../sub4/sub4.html">· 정보공개제도</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 정보(문서)목록</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 정보공개 청구</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 사전정보공표</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 이 달의 정보공개</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 공유재산</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 용역보고서</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 정책실명제</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 참여정책사전공시</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 인사통계/조직정보</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 마을세무사</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 공공시설건립비용</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 청사 신축비용</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 공공데이터포털</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 시민여론조사</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 위원회 운영정보</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 물가정보</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 업무추진비</a></dt>
													<dd></dd>
												</dl>
											</li>
											<li class="twoDepthHeight2 pdl1 fl">
												<h3><a href="../sub4/sub4.html">감사정보</a></h3>
												<dl>
													<dt><a href="../sub4/sub4.html">· 감사실시 안내</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 감사실시 결과</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 감사반복 지적사례</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 감사 제도</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 공직윤리제도</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 청렴게시판</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 부패공직자 제재현황</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 청렴해요 부산</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 청렴도 자가진단</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 시민 감사요망사항 의견접수</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 채용 비리 신고</a></dt>
													<dd></dd>
												</dl>
											</li>
											<li class="twoDepthHeight2 pdl2 fl">
												<h3><a href="../sub4/sub4.html">지방공기업</a></h3>
												<dl>
													<dt><a href="../sub4/sub4.html">· 지방공기업이란</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 지방공기업 현황</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 지방공기업 경영정보</a></dt>
													<dd></dd>
												</dl>
											</li>
											<li class="twoDepthHeight2 pdl3 fl">
												<h3><a href="../sub4/sub4.html">계약정보</a></h3>
												<dl>
													<dt><a href="../sub4/sub4.html">· 계약현황</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 수의계약현황</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 하도급현황</a></dt>
													<dd></dd>
													<dt><a href="../sub4/sub4.html">· 대가지급</a></dt>
													<dd></dd>
												</dl>
											</li>
										</ul>
									</div><!-- class="oneDepth1 -->
								</div><!-- class="oneDepthOuter" -->						
							</li>
							<li><a href="../sub5/sub5.html" title="부산소개"><span>부산소개</span></a>
								<div class="oneDepthOuter">			
									<div class="img4"><span><img src="images/bg_nav.png" alt="메뉴이미지"/></span></div>							
									<div class="oneDepth1 oneDepth4 width100 cf">
										<ul class="m_width">
											<li class="pdl1 fl">
												<h3><a href="../sub5/sub5.html">부산의 내일</a></h3>
												<dl>
													<dt><a href="../sub5/sub5.html">· 도시비전과 목표</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 역세권개발</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 부산대개조</a></dt>
													<dd></dd>
												</dl>
											</li>
											<li class="pdl2 fl">
												<h3><a href="../sub5/sub5.html">부산의 오늘</a></h3>
												<dl>
													<dt><a href="../sub5/sub5.html">· 기본현황</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 행정구역/지도</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 국제교류 및 자매도시</a></dt>
													<dd></dd>
												</dl>
											</li>
											<li class="pdl3 fl">
												<h3><a href="../sub5/sub5.html">부산의 상징</a></h3>
												<dl>
													<dt><a href="../sub5/sub5.html">· 지역상징</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 기관상징</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 부산체</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 부산시민헌장</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 부산찬가</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 부산시민의 날</a></dt>
													<dd></dd>
												</dl>
											</li>
											<li class="pdl4 bdr fl">
												<h3><a href="../sub5/sub5.html">부산시청 안내</a></h3>
												<dl>
													<dt><a href="../sub5/sub5.html">· 시청자 안내</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 전화번호 안내</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 조직도</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 시설운영 안내</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 시청자 견학</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 시청 전시실 대관</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 공기업·출자·출연기관</a></dt>
													<dd></dd>
												</dl>										
											</li>
											<li class="twoDepthHeight3 pdl1 fl">
												<h3><a href="../sub5/sub5.html">주민자치회</a></h3>
												<dl>
													<dt><a href="../sub5/sub5.html">· 추진배경 및 방향</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 성치/운영 및 체계도</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 주민자치회 현황</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 주민자치회 소식</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 우수사례</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 활동갤러리</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 주민자치위원회 구성</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 운영 프로그램</a></dt>
													<dd></dd>
												</dl>										
											</li>
											<li class="twoDepthHeight3 pdl2 fl">
												<h3><a href="../sub5/sub5.html">부산의 인물</a></h3>
												<dl>
													<dt><a href="../sub5/sub5.html">· 과학자</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 독립운동가</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 부산지역 독립운동</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 목민선정</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 선각자 및 학자</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 정렬효행</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 충신열사</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 향토수호</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 부산광역시 문화상</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 자랑스러운 시민상</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 명예시민증</a></dt>
													<dd></dd>
												</dl>										
											</li>
											<li class="twoDepthHeight3 pdl3 fl">
												<h3><a href="../sub5/sub5.html">부산의 역사</a></h3>
												<dl>
													<dt><a href="../sub5/sub5.html">· 명칭유래</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 시대별 부산역사</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 문화재</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 부산의 주요 경승지</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 시정역사</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 역대시장</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 연혁</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 향토사도서관</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 부산역사문화대전</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 항공사진으로 본 역사</a></dt>
													<dd></dd>
												</dl>										
											</li>
											<li class="twoDepthHeight3 pdl4 bdr fl">
												<h3><a href="../sub5/sub5.html">부산 갈맷길</a></h3>
												<dl>
													<dt><a href="../sub5/sub5.html">· 소개</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 공지사항</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 구간별 안내</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 도보인증제</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 도보인증수첩·지도</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 갈맷길 함께 걷기</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 소통광장</a></dt>
													<dd></dd>
													<dt><a href="../sub5/sub5.html">· 협력기관 소개</a></dt>
													<dd></dd>
												</dl>										
											</li>
										</ul>
									</div><!-- class="oneDepth1 -->
								</div><!-- class="oneDepthOuter" -->				
							</li>
							<li><a href="../sub6/sub6.html" title="부산엑스포" class="oneDepthLast"><span>부산엑스포</span></a></li>
						</ul>
					</div>
				</div><!-- id="nav" -->
			</div>
		</div><!-- class="navWrap" -->
	</div><!-- id="headerWrap" -->		
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
				<h3 class="noticeBoardTit">회원가입</h3>			
		<!--	<div class="tab">
					<ul class="cf">
						<li class="active2"><span>회원 로그인</span></li>
						<li><span>비회원 로그인</span></li>
						<li><span>소셜 로그인</span></li>
					</ul>
				</div> -->
				<div id="main_content">
					<div id="join_box">
						<form name="member_form" method="post" action="member_insert.php" class="formWrap">
							<h2>회원 가입</h2>
							<div class="form id">
								<div class="col1">아이디</div>
								<div class="col2">
									<input type="text" name="id">
								</div>
								<div class="col3">
									<img src="images/id.png" onclick="check_id()">
								</div>
							</div>
							<div class="clear"></div>
							<div class="form pass">
								<div class="col1">비밀번호</div>						
								<div class="col2">
									<input type="password" name="pass">							
								</div>
							</div>
							<div class="clear"></div>
							<div class="form passCheck">
								<div class="col1">비밀번호 확인</div>						
								<div class="col2">
									<input type="password" name="pass_confirm">							
								</div>
							</div>
							<div class="clear"></div>
							<div class="form name">
								<div class="col1">이름</div>						
								<div class="col2">
									<input type="text" name="name">
								</div>
							</div>
							<div class="clear"></div>
							<div class="form email">
								<div class="col1">이메일</div>						
								<div class="col2">
									<input type="text" name="email1">@<input type="text" name="email2">
								</div>
							</div>
							<div class="clear"></div>

							<div class="bottom_line"> </div>
							<div class="buttons">
								<img style="cursor:pointer" src="images/sign.jpg" onclick="check_input()">&nbsp;
								<img id="reset_button" style="cursor:pointer" src="images/cancel.jpg" onclick="reset_form()">
							</div>
						</form>
					</div> <!--join_box -->
				</div><!-- main_content -->
			</div><!-- id="sub1Content1" -->
		</div><!-- id="sub1ContentWrap" -->
	</div>
	<div id="footer" class="cf">
		<div class="footerAttach">
			<div class="inner">
				<p>시정관련 건의사항 또는 답변을 원하는 사항은 <a href="https://www.busan.go.kr/minwon/myminwon">부산민원120 민원신청</a> 을 이용하여 주세요.</p>
			</div>
		</div>
		<div class="footerTop">
			<div class="inner">
				<div class="familySite cf">
					<div class="shortcut1">
					<label for="selcSite2select" class="hidden">사업소 사이트 선택</label>
						<select name="selcSite2" id="selcSite2select">
							<option value="/relationsite#direct">사업소 사이트</option>
							<option value="/gunsul">건설본부</option>
							<option value="/gunan">건설안전시험사업소</option>
							<option value="/fishmarket">국제수산물유통시설관리사업소</option>
							<option value="/youth">금련산청소년수련원</option>
							<option value="http://its.busan.go.kr">교통서비스센터</option>
							<option value="/nakdong">낙동강관리본부</option>
							<option value="/wetland">낙동강하구에코센터</option>
							<option value="/southport">남항관리사업소</option>
							<option value="/nongup">농업기술센터</option>
							<option value="/bymarket">반여농산물도매시장관리사업소</option>
							<option value="/ihe">보건환경연구원</option>
							<option value="https://library.busan.go.kr/busanlibrary/index.do">부산도서관</option>
							<option value="http://museum.busan.go.kr/">부산시립박물관</option>
							<option value="/moca">부산현대미술관</option>
							<option value="/water">상수도사업본부</option>
							<option value="/busaninseoul">서울본부</option>
							<option value="http://119.busan.go.kr">소방재난본부</option>
							<option value="http://art.busan.go.kr/">시립미술관</option>
							<option value="/fisheries">수산자원연구소</option>
							<option value="/adong">아동보호종합센터</option>
							<option value="/hrd">인재개발원</option>
							<option value="/egmarket">엄궁농산물도매시장관리사업소</option>
							<option value="/woman">여성회관</option>
							<option value="/wcc">여성문화회관</option>
							<option value="/car">차량등록사업소</option>
							<option value="/stadium">체육시설관리사업소</option>
							<option value="/cys">충렬사관리사무소</option>
							<option value="/green">푸른도시가꾸기사업소</option>
							<option value="/sea">해양자연사박물관</option>
							<option value="/forest">화명수목원관리사업소</option>							
						</select>
						<button id="selcSite2" class="btnGo" title="새 창"><span></span>바로가기</button>
					</div>
					<div class="shortcut2">
						<label for="selcSite3select" class="hidden">관련 사이트 선택</label>
						<select id="selcSite3select" name="selcSite3">
							<option value="/relationsite">관련 사이트</option>
							<option value="/relationsite#international">국제자매도시</option>
							<option value="/relationsite#public2">부산소재 공공기관</option>
							<option value="/relationsite#direct">부산시 직속기관 ·사업소</option>
							<option value="/relationsite#si_direct">시 관련 홈페이지</option>
							<option value="/relationsite#sido_homepage">시·도 홈페이지</option>
							<option value="/relationsite#related">유관기관 및 타기관</option>
							<option value="/relationsite#region">자치구·군</option>
							<option value="/relationsite#council">자치구·군 의회</option>
							<option value="/relationsite#public">지방공기업</option>
							<option value="/relationsite#financing">출자·출연기관</option>
						</select>
						<button id="selcSite3" class="btnGo" title="새 창"><span></span>바로가기</button>					
					</div>
				</div>
				<div class="footerSns">
					<a href="https://www.instagram.com/busancity/" class="snsImg1"></a>
					<a href="https://twitter.com/busancitygovt" class="snsImg2"></a>
					<a href="https://www.facebook.com/BusanCity/" class="snsImg3"></a>
					<a href="http://blog.naver.com/cooolbusan" class="snsImg4"></a>
					<a href="https://story.kakao.com/ch/toktokbusan" class="snsImg5"></a>
					<a href="http://badatv.busan.go.kr" class="snsImg6"></a>
					<a href="https://www.youtube.com/user/DynamicBusan" class="snsImg7"></a>
				</div>
			</div>
		</div>
		<div class="footerBody cf">
			<div class="footLogo"><a href="../index.html"><img src="images/footer_logo.png" alt="하단로고"/></a></div>
			<div class="footAddress">
				<div class="footMinwon">
					<a href="https://www.busan.go.kr/minwon/manual120" target="_blank">
						<p class="tit">부산시 120 콜센터 (지역번호 051)</p>
						<p class="txt">평일 08:30 ~ 18:30<br/>야간․공휴일 당직실 전환</p>
					</a>
				</div>
				<div class="address">
					<p>(우 47545) 부산광역시 연제구 중앙대로 1001(연산동)</p>
				</div>
				<div class="guidLink">
					<a href="https://www.busan.go.kr/bhintro02" target="_blank">시청 찾아오시는길</a>
					<a href="https://www.busan.go.kr/bhintro03" target="_blank">주차안내</a>
					<a href="https://www.busan.go.kr/opgude" target="_blank">이용안내</a>
				</div>
				<p class="warning">본 홈페이지에 게시된 이메일 주소가 자동 수집되는 것을 거부하며,</p>
				<p class="warning">이를 위반시 개인정보 보호법에 의해 처벌됨을 유념하시기 바랍니다.</p>
				<p class="copy">Copyright © Busan Metropolitan City. All rights reserved.</p>
			</div>
			<div class="footMenu">
				<ul>
					<li><span class="dot"> ·</span><a href="https://www.busan.go.kr/terms" target="_blank">약관</a></li>
					<li><span class="dot">·</span><a href="https://www.busan.go.kr/cright" target="_blank">홈페이지 저작권 보호정책</a></li>
					<li><span class="dot">·</span><a href="https://www.busan.go.kr/vprivacy1" target="_blank" class="colorBlue">개인정보 처리방침</a></li>
					<li><span class="dot">·</span><a href="https://www.busan.go.kr/minwon/mdidsms" target="_blank">행정서비스헌장</a></li>
					<li><span class="dot">·</span><a href="https://www.busan.go.kr/viewdn" target="_blank">뷰어다운로드</a></li>
					<li><span class="dot">·</span><a href="https://www.busan.go.kr/minwon/homemonitor01" target="_blank">홈패이지 모니터</a></li>
				</ul>
			</div>
			<div class="footMark">
				<ul>
					<li><a href="https://www.busan.go.kr/kwacc-mark" class="mark1" target="_blank"><img src="images/footer_wa.png" alt="웹 접근성 품질인증 마크"/></a></li>
					<li><a href="https://validator.w3.org/unicorn/check?ucn_uri=chlqjagml.dothome.co.kr%2Fproject01%2Fsub5%2Fsub5.html&ucn_lang=ko&ucn_task=conformance#" class="mgt2"><img src="../images/vcss-blue.gif" alt="vcss-blue" height="31" width="88"></a></li>
					<li><a href="https://www.busan.go.kr/gcs-mark"  class="mark2 mgtl" target="_blank"><img src="images/footer_gcs.png" alt="굿 콘텐츠서비스 인증마크"/></a></li>	
				</ul>
			</div>
		</div>
	</div><!-- id="footer" -->
</body>
</html>
