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
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="js/cookie.js"></script>	
	<script src="js/date.js"></script>	
	<script src="js/script.js"></script>
    <script>
	    window.open("alert.htm", "", "location=no, directories=no, resizable=no, toolbar=no, width=590, height=323")		
    </script>
	<script>
		var tid;
		var cnt = parseInt(600000);//초기값(초단위)
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
				self.location = "sub7/sub7.html";
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
	<div id="headerWrap">
		<div class="header">
			<div id="mainLogo"><a href="index.html" class="showBalloon" title="부산로고"><img src="images/main_logo.png" width="215" height="60" alt="메인로고"/><h1>부산로고</h1></a></div><!-- id="mainLogo" -->
			<div id="mainGnb">
				<h2>메인 GNB</h2>
				<ul>
					<!-- <li class="phone"><a href="https://www.busan.go.kr/phone" target="_blank" class="showBalloon" title="행정전화번호부">행정전화번호부</a></li> -->
					<!-- <li class="login"><a href="https://www.busan.go.kr/member/login" target="_blank" class="showBalloon" title="로그인">로그아웃</a></li> -->
					<!-- <li class="regist"><a href="https://www.busan.go.kr/member/register-step01" target="_blank" class="showBalloon" title="회원가입">정보수정</a></li> -->
					<li class="sitemap"><a href="https://www.busan.go.kr/SiteMap" target="_blank" class="showBalloon" title="사이트맵">사이트맵</a></li>
					<li class="language" class="showBalloon" title="부산로고">
						<label for="selectLanguage"></label>
						<select name="selectLanguage" id="selectLanguage">
							<option value="http://english.busan.go.kr">english</option>
							<option value="http://japanese.busan.go.kr">日本語</option>
							<option value="http://chinese.busan.go.kr">简体中文</option>
							<option value="http://tchinese.busan.go.kr">繁體中文</option>
						</select>
						<button><span>GO</span></button>
					</li>
					<li class="loginCnt">
						<form>
							<a href="#"><input type="submit" class="button1" value="로그아웃"></a>
							<input type="submit" class="button2 cf" value="정보수정">
						</form>					
						<span class="loginCntText">자동 로그아웃</span><span id="counter"></span> <input type="button" class="button3" value="연장" onclick="counter_reset()">
					</li>
				</ul>
			</div><!-- id="mainGnb" -->
		</div><!-- id="header" -->
		<!-- 실제로 만들때 탭인덱스 넣기 원뎁스에만 -->
		<div class="navWrap">
			<div class="navOuter">
				<div id="nav" class="cf">
					<ul class="lolling">
		 				<li class="microdust" style="top:0;"><a href="http://data.busan.go.kr/index.nm?contentId=45" target="_blank" class="showBalloon" title="초미세먼지"><span>초미세먼지</span><span class="dustIcon1"></span><span>미세먼지</span><span class="dustIcon2"></span><span>황사</span> <span class="dustIcon3"></span></a></li>
						<li class="corona"><a href="https://www.busan.go.kr/covid19/Corona19.do" target="_blank" class="showBalloon" title="코로나"><span>코로나</span> <span class="clr1">신규 확진자</span> 9명 <span class="clr2">격리해제</span> 13명 <span class="clr3">치료중</span> 221명</a></li>
						<!-- <li class="corona"><a href="https://www.busan.go.kr/corona19/policy01" target="_blank" class="showBalloon" title="코로나19">코로나19</a></li> -->
					</ul>				
					<h2>메인 메뉴</h2>				
					<div class="navInner cf">
						<ul class="navInner">
							<li><a href="sub1/sub1.html" class="showBalloon" title="부산민원120"><span>부산민원120</span></a>
								<div class="oneDepthOuter">		
									<div class="img1"><span><img src="images/bg_nav.png" alt="메뉴이미지"/></span></div>							
									<div class="oneDepth1 width100 cf">
										<div class="twoInner">
											<ul class="m_width">
												<li class="pdl1 fl">
													<h3><a href="sub1/sub1.html">민원신청</a></h3>
													<dl>
														<dt><a href="sub1/sub1.html">· 민원신청</a></dt>
														<dd></dd>
														<dt><a href="sub1/sub1.html">· 교통불편민원신청</a></dt>
														<dd></dd>
														<dt><a href="sub1/sub1.html">· 민원사례</a></dt>
														<dd></dd>
														<dt><a href="sub1/sub1.html">· 스마트현장사진신고</a></dt>
														<dd></dd>
														<dt><a href="sub1/sub1.html">· 신고센터</a></dt>
														<dd></dd>
														<dt><a href="sub1/sub1.html">· 정부24</a></dt>
														<dd></dd>
													</dl>
												</li>
												<li class="pdl2 fl">
													<h3><a href="sub1/sub1.html">제안신청</a></h3>
													<dl>
														<dt><a href="sub1/sub1.html">· 일반제안</a></dt>
														<dd></dd>
														<dt><a href="sub1/sub1.html">· 공모제안</a></dt>
														<dd></dd>
														<dt><a href="sub1/sub1.html">· 나의제안</a></dt>
														<dd></dd>
													</dl>
												</li>
												<li class="pdl3 fl">
													<h3><a href="sub1/sub1.html">시민참여</a></h3>
													<dl>
														<dt><a href="sub1/sub1.html">· 설문조사</a></dt>
														<dd></dd>
														<dt><a href="sub1/sub1.html">· 나눔장터</a></dt>
														<dd></dd>
														<dt><a href="sub1/sub1.html">· 국민생각함</a></dt>
														<dd></dd>
														<dt><a href="sub1/sub1.html">· 모니터</a></dt>
														<dd></dd>
														<dt><a href="sub1/sub1.html">· 이벤트통합안내</a></dt>
														<dd></dd>
														<dt><a href="sub1/sub1.html">· 행사/모집 신청</a></dt>
														<dd></dd>
														<dt><a href="sub1/sub1.html">· 시민게시판</a></dt>
														<dd></dd>
														<dt><a href="sub1/sub1.html">· 주민참여예산</a></dt>
														<dd></dd>
														<dt><a href="sub1/sub1.html">· 민생규제혁신과제</a></dt>
														<dd></dd>
														<dt><a href="sub1/sub1.html">· 칭찬합시다</a></dt>
														<dd></dd>
														<dt><a href="sub1/sub1.html">· 시민청원 와글와글</a></dt>
														<dd></dd>
														<dt><a href="sub1/sub1.html">· 시민토론 ON AIR</a></dt>
														<dd></dd>		
														<dt><a href="sub1/sub1.html">· 협치부산</a></dt>
														<dd></dd>
													</dl>
												</li>
												<li class="pdl4 bdr fl">
													<h3><a href="sub1/sub1.html">민원안내</a></h3>
													<dl>
														<dt><a href="sub1/sub1.html">· 민원편람</a></dt>
														<dd></dd>
														<dt><a href="sub1/sub1.html">· 민원목록</a></dt>
														<dd></dd>
														<dt><a href="sub1/sub1.html">· 민원처리 확인</a></dt>
														<dd></dd>
														<dt><a href="sub1/sub1.html">· 여권안내</a></dt>
														<dd></dd>
														<dt><a href="sub1/sub1.html">· 편리한 민원서비스</a></dt>
														<dd></dd>
														<dt><a href="sub1/sub1.html">· 민원정보</a></dt>
														<dd></dd>
														<dt><a href="sub1/sub1.html">· 민원시책</a></dt>
														<dd></dd>
														<dt><a href="sub1/sub1.html">· 행정서비스헌장</a></dt>
														<dd></dd>
													</dl>
												</li>
												<li class="twoDepthHeight1 pdl1 fl">
													<h3><a href="sub1/sub1.html">120콜센터</a></h3>
													<dl>
														<dt><a href="sub1/sub1.html">· 이용안내</a></dt>
														<dd></dd>
														<dt><a href="sub1/sub1.html">· 콜센터 소개</a></dt>
														<dd></dd>
													</dl>
												</li>
											</ul>
										</div>
									</div><!-- class="oneDepth1 -->
								</div><!-- class="oneDepthOuter" -->
							</li>
							
							<li><a href="sub2/sub2.html" class="showBalloon" title="부산소식"><span>부산소식</span></a>
								<div class="oneDepthOuter">
									<div class="img2"><span><img src="images/bg_nav.png" alt="메뉴이미지"/></span></div>							
									<div class="oneDepth1 oneDepth2 width100 cf">
										<ul class="m_width">
											<li class="pdl1 fl">
												<h3><a href="sub2/sub2.html">새소식</a></h3>
												<dl>
													<dt><a href="sub2/sub2.html">· 공지사항</a></dt>
													<dd></dd>
													<dt><a href="sub2/sub22.html">· 교통불편민원신청</a></dt>
													<dd></dd>
													<dt><a href="sub2/sub2.html">· 통합 공지사항</a></dt>
													<dd></dd>
													<dt><a href="sub2/sub2.html">· 부산시보(다이내믹부산)</a></dt>
													<dd></dd>
													<dt><a href="sub2/sub2.html">· 시정영상뉴스</a></dt>
													<dd></dd>
													<dt><a href="sub2/sub2.html">· 전자책</a></dt>
													<dd></dd>
													<dt><a href="sub2/sub2.html">· 영상홍보물</a></dt>
													<dd></dd>
													<dt><a href="sub2/sub2.html">· 공공앱</a></dt>
													<dd></dd>												
												</dl>
											</li>
											<li class="pdl2 fl">
												<h3><a href="sub2/sub2.html">보도·해명자료</a></h3>
												<dl>
													<dt><a href="sub2/sub2.html">· 보도자료</a></dt>
													<dd></dd>
													<dt><a href="sub2/sub2.html">· 해명·설명자료</a></dt>
													<dd></dd>
												</dl>
											</li>
											<li class="pdl3 fl">
												<h3><a href="sub2/sub2.html">공고</a></h3>
												<dl>
													<dt><a href="sub2/sub2.html">· 우리시 채용공고</a></dt>
													<dd></dd>
													<dt><a href="sub2/sub2.html">· 부산시보 고시공고</a></dt>
													<dd></dd>
													<dt><a href="sub2/sub2.html">· 고시공고</a></dt>
													<dd></dd>
													<dt><a href="sub2/sub2.html">· 분묘개장공고</a></dt>
													<dd></dd>
												</dl>
											</li>
											<li class="pdl4 bdr fl">
												<h3><a href="sub2/sub2.html">부산시 공식SNS</a></h3>
											</li>
										</ul>
									</div><!-- class="oneDepth1 -->
								</div><!-- class="oneDepthOuter" -->				
							</li>
							
							<li><a href="sub3/sub3.html" class="showBalloon" title="통합예약"><span>통합예약</span></a></li>
							
							<li><a href="sub4/sub4.html" class="showBalloon" title="정보공개"><span>정보공개</span></a>
								<div class="oneDepthOuter">
									<div class="img3"><span><img src="images/bg_nav.png" alt="메뉴이미지"/></span></div>							
									<div class="oneDepth1 oneDepth3 width100 cf">
										<ul class="m_width">
											<li class="pdl1 fl">
												<h3><a href="sub4/sub4.html">핵심프로젝트</a></h3>
												<dl>
													<dt><a href="sub4/sub4.html">· 가덕도신공항</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 동남권 메가시티</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 자치경찰제</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 2030 부산월드엑스포</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 부산항(북항)재개발</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 부산국제관광도시 사업</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 에코델타 스마트시티</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 보육종합대책</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 보행혁신정책</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 미세먼지 저감</a></dt>
													<dd></dd>
												</dl>
											</li>
											<li class="pdl2 fl">
												<h3><a href="sub4/sub4.html">주요시책</a></h3>
												<dl>
													<dt><a href="sub4/sub4.html">· 2021년 달라지는 제도/시책</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 주요업무계획</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 인구정책 브리핑</a></dt>
													<dd></dd>
												</dl>
											</li>
											<li class="pdl3 fl">
												<h3><a href="sub4/sub4.html">예산</a></h3>
												<dl>
													<dt><a href="sub4/sub4.html">· 세입세출예산서</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 기금운용계획</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 재정공시</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 세입세출 운용</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 신고 및 조회</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 예산절감(낭비)사례</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 보조금 내역 공개</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 민간위탁</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 공공기관 위탁·대행</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 지방재정365</a></dt>
													<dd></dd>
												</dl>
											</li>
											<li class="pdl4 bdr fl">
												<h3><a href="sub4/sub4.html">정보공개</a></h3>
												<dl>
													<dt><a href="sub4/sub4.html">· 정보공개제도</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 정보(문서)목록</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 정보공개 청구</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 사전정보공표</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 이 달의 정보공개</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 공유재산</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 용역보고서</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 정책실명제</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 참여정책사전공시</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 인사통계/조직정보</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 마을세무사</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 공공시설건립비용</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 청사 신축비용</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 공공데이터포털</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 시민여론조사</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 위원회 운영정보</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 물가정보</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 업무추진비</a></dt>
													<dd></dd>
												</dl>
											</li>
											<li class="twoDepthHeight2 pdl1 fl">
												<h3><a href="sub4/sub4.html">감사정보</a></h3>
												<dl>
													<dt><a href="sub4/sub4.html">· 감사실시 안내</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 감사실시 결과</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 감사반복 지적사례</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 감사 제도</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 공직윤리제도</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 청렴게시판</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 부패공직자 제재현황</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 청렴해요 부산</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 청렴도 자가진단</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 시민 감사요망사항 의견접수</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 채용 비리 신고</a></dt>
													<dd></dd>
												</dl>
											</li>
											<li class="twoDepthHeight2 pdl2 fl">
												<h3><a href="sub4/sub4.html">지방공기업</a></h3>
												<dl>
													<dt><a href="sub4/sub4.html">· 지방공기업이란</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 지방공기업 현황</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 지방공기업 경영정보</a></dt>
													<dd></dd>
												</dl>
											</li>
											<li class="twoDepthHeight2 pdl3 fl">
												<h3><a href="sub4/sub4.html">계약정보</a></h3>
												<dl>
													<dt><a href="sub4/sub4.html">· 계약현황</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 수의계약현황</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 하도급현황</a></dt>
													<dd></dd>
													<dt><a href="sub4/sub4.html">· 대가지급</a></dt>
													<dd></dd>
												</dl>
											</li>
										</ul>
									</div><!-- class="oneDepth1 -->
								</div><!-- class="oneDepthOuter" -->						
							</li>
							<li><a href="sub5/sub5.html" class="showBalloon" title="부산소개"><span>부산소개</span></a>
								<div class="oneDepthOuter">			
									<div class="img4"><span><img src="images/bg_nav.png" alt="메뉴이미지"/></span></div>							
									<div class="oneDepth1 oneDepth4 width100 cf">
										<ul class="m_width">
											<li class="pdl1 fl">
												<h3><a href="sub5/sub5.html">부산의 내일</a></h3>
												<dl>
													<dt><a href="sub5/sub5.html">· 도시비전과 목표</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 역세권개발</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 부산대개조</a></dt>
													<dd></dd>
												</dl>
											</li>
											<li class="pdl2 fl">
												<h3><a href="sub5/sub5.html">부산의 오늘</a></h3>
												<dl>
													<dt><a href="sub5/sub5.html">· 기본현황</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 행정구역/지도</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 국제교류 및 자매도시</a></dt>
													<dd></dd>
												</dl>
											</li>
											<li class="pdl3 fl">
												<h3><a href="sub5/sub5.html">부산의 상징</a></h3>
												<dl>
													<dt><a href="sub5/sub5.html">· 지역상징</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 기관상징</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 부산체</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 부산시민헌장</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 부산찬가</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 부산시민의 날</a></dt>
													<dd></dd>
												</dl>
											</li>
											<li class="pdl4 bdr fl">
												<h3><a href="sub5/sub5.html">부산시청 안내</a></h3>
												<dl>
													<dt><a href="sub5/sub5.html">· 시청자 안내</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 전화번호 안내</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 조직도</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 시설운영 안내</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 시청자 견학</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 시청 전시실 대관</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 공기업·출자·출연기관</a></dt>
													<dd></dd>
												</dl>										
											</li>
											<li class="twoDepthHeight3 pdl1 fl">
												<h3><a href="sub5/sub5.html">주민자치회</a></h3>
												<dl>
													<dt><a href="sub5/sub5.html">· 추진배경 및 방향</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 성치/운영 및 체계도</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 주민자치회 현황</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 주민자치회 소식</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 우수사례</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 활동갤러리</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 주민자치위원회 구성</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 운영 프로그램</a></dt>
													<dd></dd>
												</dl>										
											</li>
											<li class="twoDepthHeight3 pdl2 fl">
												<h3><a href="sub5/sub5.html">부산의 인물</a></h3>
												<dl>
													<dt><a href="sub5/sub5.html">· 과학자</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 독립운동가</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 부산지역 독립운동</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 목민선정</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 선각자 및 학자</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 정렬효행</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 충신열사</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 향토수호</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 부산광역시 문화상</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 자랑스러운 시민상</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 명예시민증</a></dt>
													<dd></dd>
												</dl>										
											</li>
											<li class="twoDepthHeight3 pdl3 fl">
												<h3><a href="sub5/sub5.html">부산의 역사</a></h3>
												<dl>
													<dt><a href="sub5/sub5.html">· 명칭유래</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 시대별 부산역사</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 문화재</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 부산의 주요 경승지</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 시정역사</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 역대시장</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 연혁</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 향토사도서관</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 부산역사문화대전</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 항공사진으로 본 역사</a></dt>
													<dd></dd>
												</dl>										
											</li>
											<li class="twoDepthHeight3 pdl4 bdr fl">
												<h3><a href="sub5/sub5.html">부산 갈맷길</a></h3>
												<dl>
													<dt><a href="sub5/sub5.html">· 소개</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 공지사항</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 구간별 안내</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 도보인증제</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 도보인증수첩·지도</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 갈맷길 함께 걷기</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 소통광장</a></dt>
													<dd></dd>
													<dt><a href="sub5/sub5.html">· 협력기관 소개</a></dt>
													<dd></dd>
												</dl>										
											</li>
										</ul>
									</div><!-- class="oneDepth1 -->
								</div><!-- class="oneDepthOuter" -->				
							</li>
							<li><a href="sub1/sub1.html" title="분야별정보" class="showBalloon oneDepthLast"><span>분야별정보</span></a></li>
						</ul>
					</div>
				</div><!-- id="nav" -->
			</div>
		</div><!-- class="navWrap" -->
	</div><!-- id="headerWrap" -->	
	<div id="contentWrap" class="cf">
		<div class="part1 cf">
			<div id="busanEvent">
				<div class="eventImg">
					<a href="https://www.busan.go.kr/newairport/index" class="showBalloon imageslide" title="메인이미지1" target="_blank"><img src="images/imgslide1_1.jpg" width="995" height="505" alt=""/></a>
					<a href="https://www.busan.go.kr/megacity01" class="showBalloon imageslide" title="메인이미지2" target="_blank"><img src="images/imgslide1_2.jpg" width="995" height="505" alt="사회적 거리두기 2단계사진"/></a>
					<a href="http://www.kbei.org/www/helpline/step1.php?cid=busango" class="showBalloon imageslide" title="메인이미지3" target="_blank"><img src="images/imgslide1_3.jpg" width="995" height="505" alt="사회적 거리두기 2단계사진"/></a>
					<a href="https://www.busan.go.kr/nbtnewsBU/1478310" class="showBalloon imageslide" title="메인이미지4" target="_blank"><img src="images/imgslide1_4.jpg" width="995" height="505" alt="사회적 거리두기 2단계사진"/></a>
					<a href="https://www.busan.go.kr/covid19/Prevention07.do" class="showBalloon imageslide" title="메인이미지5" target="_blank"><img src="images/imgslide1_5.jpg" width="995" height="505" alt="사회적 거리두기 2단계사진"/></a>
				</div>
				<div class="eventSelect cf">
					<ul>
						<li><button type="button" class="slideImg01">"1"</button></li>
						<li><button type="button" class="slideImg02">"2"</button></li>
						<li><button type="button" class="slideImg03">"3"</button></li>
						<li><button type="button" class="slideImg04">"4"</button></li>
						<li><button type="button" class="slideImg05">"5"</button></li>
					</ul>
					<button type="button" class="slideImgTotal">"자동재생 정지하기"</button>
				</div>
			</div><!-- id="busanEvent" -->
			<div id="searchBox">
				<div class="mainSearch cf">
					<h4 class="title showBalloon"title="통합검색">통합검색</h4>
					<input type="text" id="mainSearchText" class="mainSearchText" name="mainSearchText" value="검색어를 입력해주세요."/>
					<button type="button" class="mainSearchBtn"><span><img src="images/ico_search2.png" alt="돋보기 이미지"/></span></button>
				</div>
				<div class="mainMayor">
					<h4 class="title">부산광역시장<span><strong>박형준</strong>입니다.</span>
						<a href="https://www.busan.go.kr/mayor/index" target="_blank" class="showBalloon" title="부산광역시장 홈페이지 새 창 열림"><span class="fl">바로가기</span><span class="rightArrow fl"></span></a>
					</h4>
					<ul>
						<li><a href="https://www.busan.go.kr/mayor/manifesto01" class="showBalloon" title="공약 및 매니페스토 홈페이지 새 창 열림"><img src="images/ico_manifesto.png" alt="공약 및 매니페스토"/></a></li>
						<li><a href="https://www.busan.go.kr/simin/onair02/1486101" class="icoSimin showBalloon" title="희망의 메세지 청취 홈페이지 새 창 열림"><img src="images/ico_simin.png" alt="희망의 메세지 청취"/></a></li>
					</ul>
				</div>
				<div class="mainAirfort cf">
					<div class="mainDate cf">
						<!-- <h4 class="datetitle">부산</h4> -->
						<div class="num1 fl">
							<div class="ctemp fl" style="font-size:25px">ºC</div>
							<div class="city fl">부산시</div>
							<div class="cicon"></div>						
						</div>
						<div class="num2 fl">
							<div class="clowtemp fl">최저 온도 </div>
							<div class="sir fl">ºC</div>
							<div class="chightemp fl">최고 온도 </div>
							<div class="sir fl">ºC</div>
						</div>
					</div>
					<div class="airfort">
						<h4 class="title fl">가덕도 신공항
							<a href="https://www.busan.go.kr/newairport/index" class="showBalloon" title="가덕도 신공항 홈페이지 새 창 열림" target="_blank">자세히 보기</a>
						</h4>
						<span class="airfortImg fl"><img src="images/ico_airport.png" alt="비행기사진"/></span>
						<span class="line fl"></span>
					</div>
				</div>
			</div><!-- id="searchBox" -->
		</div><!-- class="part1" -->
		<div class="part2 tabSet cf">
			<div id="busanNew">
				<div class="buttons cf">
					<div class="button button1 active fl"><a href=".tab_item1-1">지금부산은</a></div>
					<div class="button button2 fl"><a href=".tab_item1-2">보도자료</a></div>
					<div class="button button3 fl"><a href=".tab_item1-3">부산시보</a></div>
					<div class="button button4 fl"><a href=".tab_item1-4">붓싼뉴스</a></div>
					<div class="button button5 fl"><a href=".tab_item1-5">SNS</a></div>
				</div>
				<div class="tab_item tab_item1-1 panel">
					<ul class="cf">
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/nbtnewsBU/1487479" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox1"></div>
								<p class="explain">제48회 부산 어린이날 큰잔치 온라인 행사 개최</p>
								<p class="date">2021-05-04</p>
							</a>
						</li>
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/news/totalnews01/view?dataNo=65384" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox2"></div>
								<p class="explain">시민이 시민에게 보내는 안부, "잘 있나 프로젝트"</p>
								<p class="date">2021-05-07</p>
							</a>
						</li>
						<li class="item1 fl cf">
							<a href="https://www.facebook.com/137969912931392/posts/4176360239092319/" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox3"></div>
								<p class="explain">부산시 코로나19 환자 현황(5.8. 13:30 게재)📍...</p>
								<p class="date">2021-05-08</p>
							</a>
						</li>	
						<li class="item1 fl cf">
							<a href="https://blog.naver.com/cooolbusan/222341515630" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox4"></div>
								<p class="explain">태풍으로 쓰러진 나무들, 귀여운 동물 조형물로 변신!...</p>
								<p class="date">2021-05-08</p>
							</a>
						</li>	
						<li class="item1 last fl cf">
							<a href="https://www.youtube.com/watch?v=hxxFjF3oCGA" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox5"></div>
								<p class="explain">당신을 위한🔥핫템| 세상에 없던 단 하나의 이미지</p>
								<p class="date">2021-05-07</p>
							</a>
						</li>						
					</ul>
				</div><!-- class="tab_item" -->
				<div class="tab_item tab_item1-2 panel">
					<ul class="cf">
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/nbtnewsBU/1487479" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox6"></div>
								<p class="explain">부산시, 문화다양성 주간 행사 「우리들의 광장」 개최</p>
								<p class="date">2021-05-21</p>
							</a>
						</li>
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/news/totalnews01/view?dataNo=65384" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox7"></div>
								<p class="explain">부산시,「2021 치매 사진 공모전」 개최 </p>
								<p class="date">2021-05-21</p>
							</a>
						</li>
						<li class="item1 fl cf">
							<a href="https://www.facebook.com/137969912931392/posts/4176360239092319/" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox8"></div>
								<p class="explain">부산시,「2021 온라인 일자리 박람회」개최</p>
								<p class="date">2021-05-20</p>
							</a>
						</li>	
						<li class="item1 fl cf">
							<a href="https://blog.naver.com/cooolbusan/222341515630" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox9"></div>
								<p class="explain">지역 공공기관, 사이버보안 역량 강화와 인재 육성에 앞장</p>
								<p class="date">2021-05-19</p>
							</a>
						</li>	
						<li class="item1 last fl cf">
							<a href="https://www.busan.go.kr/nbtnewsBU/1488717" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox10"></div>
								<p class="explain">박형준 부산시장, 마루야마 코헤이(丸山浩平) 주부산일본 총영사...</p>
								<p class="date">2021-05-18</p>
							</a>
						</li>						
					</ul>
				</div><!-- class="tab_item" -->
				<div class="tab_item tab_item1-3 panel">
					<ul class="cf">
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/news/totalnews01/view?dataNo=65416" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox11"></div>
								<p class="explain">부산시, 사회적 거리두기 1.5단계로 완화</p>
								<p class="date">2021-05-21</p>
							</a>
						</li>
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/news/totalnews01/view?dataNo=65415" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox12"></div>		
								<p class="explain">가족갈등 우울증 … 어르신 고민 맞춤형 상담해 드립니다</p>
								<p class="date">2021-05-20</p>
							</a>
						</li>
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/news/totalnews01/view?dataNo=65414" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox13"></div>
								<p class="explain">노후 준비 시작 "자신 돌아보기"부터</p>
								<p class="date">2021-05-20</p>
							</a>
						</li>	
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/news/totalnews01/view?dataNo=65413" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox14"></div>
								<p class="explain">바이오·디지털 융합, 진료 중심 의료에서 연구 중심 의료 전환</p>
								<p class="date">2021-05-20</p>
							</a>
						</li>	
						<li class="item1 last fl cf">
							<a href="https://www.busan.go.kr/news/totalnews01/view?dataNo=65412" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox15"></div>
								<p class="explain">부산 다대포 산책 명소 고우니 생태길</p>
								<p class="date">2021-05-17</p>
							</a>
						</li>						
					</ul>
				</div><!-- class="tab_item" -->
				<div class="tab_item tab_item1-4 panel">
					<ul class="cf">
						<li class="item1 fl cf">
							<a href="https://www.youtube.com/watch?v=D7ZRwk5wb-o" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox16"></div>
								<p class="explain">🧿 사회적거리두기 1.5단계 + 일부 방역수칙 조정</p>
								<p class="date">2021-05-21</p>
							</a>
						</li>
						<li class="item1 fl cf">
							<a href="https://www.youtube.com/watch?v=8fei493oEGg" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox17"></div>		
								<p class="explain">[21.05.24] 부산시 코로나19 일일상황보고</p>
								<p class="date">2021-05-20</p>
							</a>
						</li>
						<li class="item1 fl cf">
							<a href="https://www.youtube.com/watch?v=2-26dcYWk4s" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox18"></div>
								<p class="explain">[21.05.23] 부산시 코로나19 일일상황보고</p>
								<p class="date">2021-05-20</p>
							</a>
						</li>	
						<li class="item1 fl cf">
							<a href="https://www.youtube.com/watch?v=k_e8J_bcmqM" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox19"></div>
								<p class="explain">[21.05.21] 사회적거리두기 브리핑 및 코로나19 일일상...</p>
								<p class="date">2021-05-20</p>
							</a>
						</li>	
						<li class="item1 last fl cf">
							<a href="https://www.youtube.com/watch?v=BQbKrMFoj8c" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox20"></div>
								<p class="explain">[21.05.27] 부산시 코로나19 일일상황보고</p>
								<p class="date">2021-05-17</p>
							</a>
						</li>						
					</ul>
				</div><!-- class="tab_item" -->
				<div class="tab_item tab_item1-5 panel">
					<ul class="cf">
						<li class="item1 fl cf">
							<a href="https://www.facebook.com/137969912931392/posts/4226917034036639/" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox21"></div>
								<p class="explain">용두산공원, 감천문화마을, 부산시민공원 부기와 함께 가장 부산...</p>
								<p class="date">2021-05-24</p>
							</a>
						</li>
						<li class="item1 fl cf">
							<a href="https://www.facebook.com/137969912931392/posts/4226831487378527/" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox22"></div>		
								<p class="explain">백신의 힘. 지난 5월 10일 순천의 일가족 7명 중 6명이...</p>
								<p class="date">2021-05-24</p>
							</a>
						</li>
						<li class="item1 fl cf">
							<a href="https://www.facebook.com/137969912931392/posts/4226687144059628/" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox23"></div>
								<p class="explain">부산시 코로나19 환자 이동경로(5.24. 16:00 게재)...</p>
								<p class="date">2021-05-24</p>
							</a>
						</li>	
						<li class="item1 fl cf">
							<a href="http://blog.naver.com/cooolbusan/222364335421" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox24"></div>
								<p class="explain">부산 수출 기업을 위한 「맞춤형 비대면 해외 마케팅 지원 사업...</p>
								<p class="date">2021-05-24</p>
							</a>
						</li>	
						<li class="item1 last fl cf">
							<a href="http://blog.naver.com/cooolbusan/222364314937" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox25"></div>
								<p class="explain">부산 기후위기 극복! 「지방정부 2050 탄소중립 공동선언」...</p>
								<p class="date">2021-05-24</p>
							</a>
						</li>						
					</ul>
				</div><!-- class="tab_item" -->
			</div><!-- id="busanNew" -->
		</div><!-- class="part2" -->
		<div class="part3 tabSet cf">
			<div id="busanNotice">
				<div class="buttons cf">
					<div class="button button1 active fl"><a href=".tab_item2-1">공지사항</a></div>
					<div class="button button2 fl"><a href=".tab_item2-2">고시공고</a></div>
					<div class="button button3 fl"><a href=".tab_item2-3">채용정보</a></div>
					<div class="button button4 fl"><a href=".tab_item2-4">시험공고</a></div>
					<div class="button button5 fl"><a href=".tab_item2-5">정정·해명</a></div>
					<!-- <div class="button6 fr"><a href="https://www.busan.go.kr/nhot"></a></div> -->
				</div>		
				<div class="tab_item tab_item2-1 panel">
					<ul class="cf">
						<li class="item1 active fl cf">
							<a href="https://www.busan.go.kr/nhot" class="showBalloon" title="새 창 열림" target="_blank">
								<p class="title">&lt; 황사 위기대응 "주의" 단계 발령 알림 &gt;<span class="date fr">2021-05-08</span></p>
								<p class="txt">황사 위기대응 "주의" 단계 발령 알림 황사 현황 중국 고비사막에서 발원한 황사의 영향으로 5.8일에 전국의 미세먼지(PM10) 농도가 시간당 평균농도가 300㎍/㎥ 이상, 2시...</p>
							</a>
						</li>	
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/nhot" class="showBalloon" title="새 창 열림" target="_blank">
								<p class="txt">· 2020년 주민참여예산사업 하반기 집행 모니터링 현황<span class="date fr">2021-05-07</span></p>
							</a>
						</li>	
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/nhot" class="showBalloon" title="새 창 열림" target="_blank">
								<p class="txt">· [연제구 일자리경제과] 당당한방병원 연산점과 함께하는 ON/OFF 구인<span class="date fr">2021-05-07</span></p>
							</a>
						</li>	
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/nhot" class="showBalloon" title="새 창 열림" target="_blank">
								<p class="txt">· 2021년 부산청년학교 1학기 학과생 선정 결과 공고<span class="date fr">2021-05-07</span></p>
							</a>
						</li>							
					</ul>
				</div><!-- class="tab_item" -->				
				<div class="tab_item tab_item2-2 panel">
					<ul class="cf">
						<li class="item1 active fl cf">
							<a href="https://www.busan.go.kr/nbgosi/view?sno=52135&gosiGbn=A&curPage=1&conIfmStdt=&conIfmEnddt=&conGosiGbn=&schKeyType=A&srchText=%EB%B6%80%EC%82%B0%EA%B3%BC%ED%95%99%EA%B8%B0%EC%88%A0%ED%98%81%EC%8B%A0%EC%83%81" class="showBalloon" title="새 창 열림" target="_blank">
								<p class="title">제2회 부산과학기술혁신상 포상 계획 공고<span class="date fr">2021-05-25</span></p>
							</a>
						</li>	
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/nbgosi/view?sno=52135&gosiGbn=A&curPage=1" class="showBalloon" title="새 창 열림" target="_blank">
								<p class="txt">· 2021년 중부소방서 구급대원 대체인력 채용 공고<span class="date fr">2021-05-24</span></p>
							</a>
						</li>	
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/nbgosi/view?sno=52180&gosiGbn=A&curPage=1" class="showBalloon" title="새 창 열림" target="_blank">
								<p class="txt">· 제안서 평가 결과 공고(부산광역시 경관계획 재정비 용역)<span class="date fr">2021-05-24</span></p>
							</a>
						</li>	
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/nbgosi/view?sno=52170&gosiGbn=A&curPage=1" class="showBalloon" title="새 창 열림" target="_blank">
								<p class="txt">· 2021 부산건축상 공모<span class="date fr">2021-05-24</span></p>
							</a>
						</li>	
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/nbgosi/view?sno=52168&gosiGbn=A&curPage=1" class="showBalloon" title="새 창 열림" target="_blank">
								<p class="txt">· 부동산개발업 신규등록 공고(주식회사 남양산업개발)<span class="date fr">2021-05-24</span></p>
							</a>
						</li>						
					</ul>
				</div><!-- class="tab_item" -->				
				<div class="tab_item tab_item2-3 panel">
					<ul class="cf">
						<li class="item1 active fl cf">
							<a href="https://www.busan.go.kr/job/jobgonji01/1448881?curPage=&srchBeginDt=2016-05-27&srchEndDt=2021-05-27&srchKey=sj&srchText=%EB%86%8D%EC%97%85" class="showBalloon" title="새 창 열림" target="_blank">
								<p class="title">부산광역시농업기술센터 기간제근로자(지역특화 농업기술 정보화 인력) 서류전형<span class="date fr">2021-05-20</span></p>
								<p class="txt">부산광역시 농업기술센터 소속 기간제근로자 서류전형 합격자 및 면접 일정을 붙임과 같이 공고합니다. 붙임 기간제근로자 서류전형 합격자 및 면접일정 공고. 끝....</p>
							</a>
						</li>	
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/job/jobgonji01/1488730?curPage=&srchBeginDt=2016-05-27&srchEndDt=2021-05-27&searchKey=&searchText=" class="showBalloon" title="새 창 열림" target="_blank">
								<p class="txt">· 2021년도 상반기 부산광역시 공공기관 통합 필기시험 일시 및 장소 공고<span class="date fr">2021-05-20</span></p>
							</a>
						</li>	
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/job/jobgonji01/1488735?curPage=&srchBeginDt=2016-05-27&srchEndDt=2021-05-27&searchKey=&searchText=" class="showBalloon" title="새 창 열림" target="_blank">
								<p class="txt">· 부산산업과학혁신원 직원 채용 공고(일반직 및 기간제)<span class="date fr">2021-05-18</span></p>
							</a>
						</li>	
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/job/jobgonji01/1488643?curPage=&srchBeginDt=2016-05-27&srchEndDt=2021-05-27&searchKey=&searchText=" class="showBalloon" title="새 창 열림" target="_blank">
								<p class="txt">· 부산여성가족개발원 임원(비상임 이사) 공개모집 공고<span class="date fr">2021-05-17</span></p>
							</a>
						</li>							
					</ul>
				</div><!-- class="tab_item" -->				
				<div class="tab_item tab_item2-4 panel">
					<ul class="cf">
						<li class="item1 active fl cf">
							<a href="https://www.busan.go.kr/job/examancm/1489145" class="showBalloon" title="새 창 열림" target="_blank">
								<p class="title">부산광역시 개방형직위(서울본부장) 임용시험 최종합격자 공고<span class="date fr">2021-05-24</span></p>
								<p class="txt">부산광역시인사위원회 공고 제2021-57호 부산광역시 개방형직위 임용시험 최종합격자 공고 부산광역시인사위원회 공고 제2021-43호(2021.4.21.)에 따라 시행한 개방형직위(...</p>
							</a>
						</li>	
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/job/examancm/1488402" class="showBalloon" title="새 창 열림" target="_blank">
								<p class="txt">· 2021년도 제1회 부산광역시 지방공무원임용 필기시험 일시, 장소 및 응<span class="date fr">2021-05-14</span></p>
							</a>
						</li>	
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/job/examancm/1485847" class="showBalloon" title="새 창 열림" target="_blank">
								<p class="txt">· 부산광역시 개방형직위(서울본부장) 임용시험 공고<span class="date fr">2021-04-21</span></p>
							</a>
						</li>	
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/job/examancm/1474801" class="showBalloon" title="새 창 열림" target="_blank">
								<p class="txt">· 2021년도 부산광역시 지방공무원 임용시험 계획 공고<span class="date fr">2021-02-01</span></p>
							</a>
						</li>							
					</ul>
				</div><!-- class="tab_item" -->
				<div class="tab_item tab_item2-5 panel">
					<ul class="cf">
						<li class="item1 active fl cf">
							<a href="https://www.busan.go.kr/nbanser/1489228" class="showBalloon" title="새 창 열림" target="_blank">
								<p class="title">2021.5.18. 부산일보 보도(유료도로에 ‘봉’된 부산시민, 20년간<span class="date fr">2021-05-24</span></p>
								<p class="txt">2021.5.18. 부산일보 보도(유료도로에 ‘봉’된 부산시민, 20년간 3조 털렸다) 관련 설명자료입니다....</p>
							</a>
						</li>	
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/nbanser/1487787" class="showBalloon" title="새 창 열림" target="_blank">
								<p class="txt">· 2021.4.29. KBS 보도(제5차 국토종합계획도 부산 "홀대") 관<span class="date fr">2021-05-07</span></p>
							</a>
						</li>	
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/nbanser/1485999" class="showBalloon" title="새 창 열림" target="_blank">
								<p class="txt">· 2021.4.21. 국제신문 보도(교통카드로 못 쓴다, 동백전의 퇴보 등<span class="date fr">2021-04-22</span></p>
							</a>
						</li>	
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/nbanser/1484834" class="showBalloon" title="새 창 열림" target="_blank">
								<p class="txt">· 2021.4.12. 국제신문 보도(정의화의 박형준호 인사 추천... 원로<span class="date fr">2021-04-12</span></p>
							</a>
						</li>							
					</ul>
				</div><!-- class="tab_item" -->					
			</div><!-- id="busanNotice" -->
			<div id="forPeople">
				<h4 class="title">시민참여</h4>
				<ul>
					<li class="mgl"><a href="https://www.busan.go.kr/minwon/myminwon" class="showBalloon" title="민원신청 홈페이지 새 창 열림" target="_blank"><span class="cityzenImg1 pong2"></span><span class="subTitle">민원신청</span></a></li>
					<li><a href="https://www.busan.go.kr/minwon/propse" class="showBalloon" title="시민제안 홈페이지 새 창 열림" target="_blank"><span class="cityzenImg2 pong2"></span><span class="subTitle">시민제안</span></a></li>
					<li><a href="https://www.busan.go.kr/simin/suggest02" class="showBalloon" title="시민청원 홈페이지 새 창 열림" target="_blank"><span class="cityzenImg3 pong2"></span><span class="subTitle">시민청원</span></a></li>
					<li><a href="https://www.busan.go.kr/simin/onair02" class="showBalloon" title="시민토론 홈페이지 새 창 열림" target="_blank"><span class="cityzenImg4 pong2"></span><span class="subTitle">시민토론</span></a></li>
					<li class="mgl mgt"><a href="https://www.busan.go.kr/minwon/guide" class="showBalloon" title="신고센터 홈페이지 새 창 열림" target="_blank"><span class="cityzenImg5 pong2"></span><span class="subTitle">신고센터</span></a></li>
					<li class="mgt"><a href="http://www.kbei.org/www/helpline/step1.php?cid=busango" class="showBalloon" title="청렴소리함 홈페이지 새 창 열림" target="_blank"><span class="cityzenImg6 pong2"></span><span class="subTitle pdl">청렴소리함</span></a></li>
					<li class="mgt"><a href="https://www.busan.go.kr/womanfamily/harassnotify" class="showBalloon" title="성희롱상담 홈페이지 새 창 열림" target="_blank"><span class="cityzenImg7 pong2"></span><span class="subTitle pdl">성희롱상담</span></a></li>
					<li class="mgt"><a href="https://www.busan.go.kr/yesan/index" class="showBalloon" title="참여예산 홈페이지 새 창 열림" target="_blank"><span class="cityzenImg8 pong2"></span><span class="subTitle">참여예산</span></a></li>
				</ul>
			</div><!-- id="forPeople" -->
		</div><!-- class="part3" -->
		<div class="part4 tabSet">
			<div id="busanAdv">
				<div class="buttons cf">
					<div class="button button1 active fl"><a href=".tab_item3-1">홍보·알림</a></div>
					<div class="button button2 fl"><a href=".tab_item3-2">모집·이벤트</a></div>
					<div class="button button3 fl"><a href=".tab_item3-3">문화·행사</a></div>
					<div class="button button4 fl"><a href=".tab_item3-4">코로나 19</a></div>
				</div>	
				<div class="tab_item tab_item3-1 panel">
					<ul class="cf">
						<li class="item1 fl cf">
							<a href="https://kids.busan.com:6443/html/main/main.php" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox4_1"></div>
								<p class="explain">2021 부산 어린이날 잔치</p>
								<p class="subExplain">5.3.(월)~5.9.(일)</p>
								<p class="date">2021-05-04</p>
							</a>
						</li>
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/nhot/1487372?curPage=&srchBeginDt=2020-05-04&srchEndDt=2021-05-04&srchKey=&srchText=" class="showBalloon" title="새 창 열림" target="_blank">
								<img src="images/part4_2.jpg"  width="266" height="230" alt="문화상 후보자 추천"/>
								<p class="explain">문화상 후보자 추천</p>
								<p class="subExplain">☎ 시 문화예술과 888-5034</p>								
								<p class="date">2021-05-04</p>
							</a>
						</li>
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/nhot/1487372?curPage=&srchBeginDt=2020-05-04&srchEndDt=2021-05-04&srchKey=&srchText=" class="showBalloon" title="새 창 열림" target="_blank">
								<img src="images/part4_3.jpg"  width="266" height="230" alt="한시 생계지원"/>
								<p class="explain">온라인 신청 5.10.(월)~5.28.(금)</p>
								<p class="subExplain">현장접수 5.17.(월)~6.4.(금)</p>							
								<p class="date">2021-05-04</p>
							</a>
						</li>	
						<li class="item1 fl cf">
							<a href="https://www.clean.go.kr/menu.es?mid=a10602030000" class="showBalloon" title="새 창 열림" target="_blank">
								<img src="images/part4_4.jpg"  width="266" height="230" alt="국민권익위원회 부패공익신고"/>
								<p class="explain">국민권익위원회 부패공익신고</p>
								<p class="subExplain">3.2(화)~6.1(화)</p>								
								<p class="date">2021-05-04</p>
							</a>
						</li>	
						<li class="item1 last fl cf">
							<a href="https://www.busan.go.kr/prepayment/index" class="showBalloon" title="새 창 열림" target="_blank">
								<img src="images/part4_5.jpg"  width="266" height="230" alt="부산시 소상공인 지원사업"/>
								<p class="explain">부산시 소상공인 지원사업</p>	
								<p class="subExplain">&nbsp;</p>									
								<p class="date">2021-04-30</p>
							</a>
						</li>						
					</ul>
				</div><!-- class="tab_item" -->	
				<div class="tab_item tab_item3-2 panel">
					<ul class="cf">
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/nbgosi/view?sno=52164&gosiGbn=A&curPage=1&conIfmStdt=&conIfmEnddt=&conGosiGbn=&schKeyType=A&srchText=%EB%AA%85%EC%9E%A5" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox4_2_6"></div>
								<p class="explain">5.24.(월)~6.7.(월)</p>
								<p class="subExplain">☎ 888-7694</p>
								<p class="date">2021-05-25</p>
							</a>
						</li>
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/nhot/1488920" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox4_2_7"></div>
								<p class="explain">~ 2021. 12. 31.</p>
								<p class="subExplain">☎ 1800-0096</p>								
								<p class="date">2021-05-20</p>
							</a>
						</li>
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/nbnews/1488902?curPage=&srchBeginDt=2020-05-20&srchEndDt=2021-05-20&srchKey=&srchText=" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox4_2_8"></div>
								<p class="explain">5.20.(목)~6.2.(수)</p>
								<p class="subExplain">☎ 051-888-4234</p>							
								<p class="date">2021-05-20</p>
							</a>
						</li>	
						<li class="item1 fl cf">
							<a href="https://www.busan.go.kr/nbnews/1488902?curPage=&srchBeginDt=2020-05-20&srchEndDt=2021-05-20&srchKey=&srchText=" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox4_2_9"></div>
								<p class="explain">5.17.(월) ~ 5.31.(월)</p>
								<p class="subExplain">☎ 051-888-7694</p>								
								<p class="date">2021-05-18</p>
							</a>
						</li>	
						<li class="item1 last fl cf">
							<a href="https://www.busan.go.kr/nbgosi/view?sno=52086&gosiGbn=A&curPage=2" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox4_2_10"></div>
								<p class="explain">5.17.(월) ~ 5.31.(월)</p>	
								<p class="subExplain">☎ 051-888-7694</p>									
								<p class="date">2021-05-18</p>
							</a>
						</li>						
					</ul>
				</div><!-- class="tab_item" -->	
				<div class="tab_item tab_item3-3 panel">
					<ul class="cf">
						<li class="item1 fl cf">
							<a href="https://busanjobfair.career.co.kr/Default.asp" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox4_2_11"></div>
								<p class="explain">5.24(월) ~ 6.4.(금)</p>
								<p class="subExplain">☎ 1688-0019</p>
								<p class="date">2021-05-17</p>
							</a>
						</li>
						<li class="item1 fl cf">
							<a href="https://museum.busan.go.kr/busan/opboard/1486245" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox4_2_12"></div>
								<p class="explain">2021년 발굴조사 성과전</p>
								<p class="subExplain">4.29.(목)~6.30(수)</p>								
								<p class="date">2021-05-07</p>
							</a>
						</li>
						<li class="item1 fl cf">
							<a href="http://raillogkorea.com/main.php" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox4_2_13"></div>
								<p class="explain">부산 BEXCO</p>
								<p class="subExplain">6. 16(수) - 6. 19(토)</p>							
								<p class="date">2021-04-09</p>
							</a>
						</li>	
						<li class="item1 fl cf">
							<a href="http://www.bofood.kr/bfs_kor/2018/main/main.php" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox4_2_14"></div>
								<p class="explain">벡스코 제1전시장 1홀</p>
								<p class="subExplain">6.23.(수) ~ 6.26.(토)</p>								
								<p class="date">2021-04-09</p>
							</a>
						</li>	
						<li class="item1 last fl cf">
							<a href="http://www.bbf.show/main/main.php" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox4_2_15"></div>
								<p class="explain">벡스코 제1전시장</p>	
								<p class="subExplain">7.9.(금) ~  7.11.(일)</p>									
								<p class="date">2021-04-09</p>
							</a>
						</li>						
					</ul>
				</div><!-- class="tab_item" -->	
				<div class="tab_item tab_item3-4 panel">
					<ul class="cf">
						<li class="item1 fl cf">
							<a href="" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox4_2_16"></div>
								<p class="explain">우리의 건강을 위해</p>
								<p class="subExplain">일상 속 소독을 지켜주세요</p>
								<p class="date">2021-05-27</p>
							</a>
						</li>
						<li class="item1 fl cf">
							<a href="" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox4_2_17"></div>
								<p class="explain">가정에서도 지켜주세요</p>
								<p class="subExplain">우리 가족을 위한 방역수칙</p>								
								<p class="date">2021-05-27</p>
							</a>
						</li>
						<li class="item1 fl cf">
							<a href="" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox4_2_18"></div>
								<p class="explain">온라인신청 5.10.(월)~5.28(금)</p>
								<p class="subExplain">현장접수 5.17.(월)~6.4.(금)</p>							
								<p class="date">2021-05-04</p>
							</a>
						</li>	
						<li class="item1 fl cf">
							<a href="" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox4_2_19"></div>
								<p class="explain">신청기간</p>
								<p class="subExplain">2. 15.(월)  ~  11. 30.(화)</p>								
								<p class="date">2021-04-05</p>
							</a>
						</li>	
						<li class="item1 last fl cf">
							<a href="" class="showBalloon" title="새 창 열림" target="_blank">
								<div class="imgBox4_2_20"></div>
								<p class="explain">코로나19 수기명부에</p>	
								<p class="subExplain">개인안심번호 사용하세요</p>									
								<p class="date">2021-02-22</p>
							</a>
						</li>						
					</ul>
				</div><!-- class="tab_item" -->	
			</div><!-- id="busanAdv" -->
		</div><!-- class="par4" -->
		<div class="part5">
			<div id="busanAllinfo" class="cf">
				<div class="buttons cf">
					<div class="button1 active fl">분야별정보</div>
				</div>					
				<ul class="allArea cf">
					<li>
						<a href="https://www.busan.go.kr/economy/index" class="showBalloon" title="경제 홈페이지 새 창 열림" target="_blank">
							<span class="areaImg1 pong2"></span><span class="subTitle">경제</span>
						</a>
					</li>
					<li>
						<a href="https://www.busan.go.kr/job/index" class="showBalloon" title="일자리 홈페이지 새 창 열림" target="_blank">
							<span class="areaImg2 pong2"></span><span class="subTitle pdl1">일자리</span>				
						</a>
					</li>
					<li>
						<a href="https://www.busan.go.kr/welfare/index" class="showBalloon" title="복지 홈페이지 새 창 열림" target="_blank">
							<span class="areaImg3 pong2"></span><span class="subTitle">복지</span>						
						</a>
					</li>
					<li>
						<a href="https://www.busan.go.kr/womanfamily/index" class="showBalloon" title="여성·가족 홈페이지 새 창 열림" target="_blank">
							<span class="areaImg4 pong2"></span><span class="subTitle pdl2">여성·가족</span>						
						</a>
					</li>
					<li>
						<a href="https://www.busan.go.kr/health/index" class="showBalloon" title="건강 홈페이지 새 창 열림" target="_blank">
							<span class="areaImg5 pong2"></span><span class="subTitle">건강</span>						
						</a>
					</li>
					<li>
						<a href="https://www.busan.go.kr/build/index" class="showBalloon" title="도시건설주택 홈페이지 새 창 열림" target="_blank">
							<span class="areaImg6 pong2"></span><span class="subTitle pdl3">도시건설주택</span>						
						</a>
					</li>
					<li>
						<a href="https://www.busan.go.kr/safety/index" class="showBalloon" title="안전 홈페이지 새 창 열림" target="_blank">
							<span class="areaImg7 pong2"></span><span class="subTitle">안전</span>						
						</a>
					</li>
					<li>
						<a href="https://www.busan.go.kr/environment/index" class="showBalloon" title="환경 홈페이지 새 창 열림" target="_blank">
							<span class="areaImg8 pong2"></span><span class="subTitle">환경</span>						
						</a>
					</li>
					<li>
						<a href="https://www.busan.go.kr/traffic/index" class="showBalloon" title="교통 홈페이지 새 창 열림" target="_blank">
							<span class="areaImg9 pong2"></span><span class="subTitle">교통</span>						
						</a>
					</li>
					<li>
						<a href="https://www.busan.go.kr/ocean/index" class="showBalloon" title="해양 홈페이지 새 창 열림" target="_blank">
							<span class="areaImg10 pong2"></span><span class="subTitle">해양</span>						
						</a>
					</li>
					<li>
						<a href="https://www.busan.go.kr/public/index" class="showBalloon" title="행정법무계약 홈페이지 새 창 열림" target="_blank">
							<span class="areaImg11 pong2"></span><span class="subTitle pdl4">행정법무계약</span>						
						</a>
					</li>
					<li>
						<a href="https://www.busan.go.kr/pr/index" class="showBalloon" title="홍보 홈페이지 새 창 열림" target="_blank">
							<span class="areaImg12 pong2"></span><span class="subTitle">홍보</span>						
						</a>
					</li>
					<li>
						<a href="https://www.busan.go.kr/edu/index" class="showBalloon" title="교육 홈페이지 새 창 열림" target="_blank">
							<span class="areaImg13 pong2"></span><span class="subTitle">교육</span>						
						</a>
					</li>
					<li>
						<a href="https://www.busan.go.kr/culture/index" class="showBalloon" title="문화예술 홈페이지 새 창 열림" target="_blank">
							<span class="areaImg14 pong2"></span><span class="subTitle pdl5">문화예술</span>						
						</a>
					</li>
					<li>
						<a href="https://www.visitbusan.net/index.do" class="showBalloon" title="관광 홈페이지 새 창 열림" target="_blank">
							<span class="areaImg15 pong2"></span><span class="subTitle">관광</span>						
						</a>
					</li>
				</ul>
				<div class="mainServiceList quickmenu cf">
					<ul class="serviceListImg cf">
						<li class="mgl1">
							<a href="https://www.busan.go.kr/expo/index" class="showBalloon" title="2030부산 월드엑스포 홈페이지 새 창 열림" target="_blank">
								<span class="listImg1 pong2"></span><span class="subTitle two">2030부산<br/>월드엑스포</span>
							</a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/newairport/index" class="showBalloon" title="가덕도신공항 홈페이지 새 창 열림" target="_blank">
								<span class="listImg2 pong2"></span><span class="subTitle">가덕도신공항</span>
							</a>
						</li>	
						<li>
							<a href="https://www.busan.go.kr/busandaegaejo/index" class="showBalloon" title="부산대개조 홈페이지 새 창 열림" target="_blank">
								<span class="listImg3 pong2"></span><span class="subTitle">부산대개조</span>
							</a>
						</li>
						<li>
							<a href="http://data.busan.go.kr/index.nm;jsessionid=AD80263971073A7ED0147AAE1BC562CA" class="showBalloon" title="공공데이터 포털 홈페이지 새 창 열림" target="_blank">
								<span class="listImg4 pong2"></span><span class="subTitle">공공데이터 포털</span>
							</a>
						</li>						
						<li>
							<a href="https://www.busan.go.kr/build/agora" class="showBalloon" title="도시계획 아고라 홈페이지 새 창 열림" target="_blank">
								<span class="listImg5 pong2"></span><span class="subTitle">도시계획 아고라</span>
							</a>
						</li>						
						<li>
							<a href="https://council.busan.go.kr/council/index" class="showBalloon" title="부산시 의회 홈페이지 새 창 열림" target="_blank">
								<span class="listImg6 pong2"></span><span class="subTitle">부산시 의회</span>
							</a>
						</li>						
						<li class="mgl1">
							<a href="https://www.busan.go.kr/young/index" class="showBalloon" title="부산청년플랫폼 홈페이지 새 창 열림" target="_blank">
								<span class="listImg7 pong2"></span><span class="subTitle">부산청년플랫폼</span>
							</a>
						</li>						
						<li>
							<a href="https://www.busan.go.kr/childcare/index" class="showBalloon" title="부산아이 다多가치키움 홈페이지 새 창 열림" target="_blank">
								<span class="listImg8 pong2"></span><span class="subTitle two">부산아이<br/>다多가치키움</span>
							</a>
						</li>						
						<li>
							<a href="https://www.busan.go.kr/jumin" class="showBalloon" title="주민자치회 홈페이지 새 창 열림" target="_blank">
								<span class="listImg9 pong2"></span><span class="subTitle">주민자치회</span>
							</a>
						</li>						
						<li>
							<a href="https://etax.busan.go.kr/sewb/main.do" class="showBalloon" title="지방세납부 홈페이지 새 창 열림" target="_blank">
								<span class="listImg10 pong2"></span><span class="subTitle">지방세납부</span>
							</a>
						</li>						
						<li>
							<a href="https://www.busan.go.kr/resource/preview_skin/doc.html?fn=BBSTY3_ATTACH_1371545_2&rs=/resource/preview_result/201904" class="showBalloon" title="시민안전 행동요령 홈페이지 새 창 열림" target="_blank">
								<span class="listImg11 pong2"></span><span class="subTitle two">시민안전<br/>행동요령</span>
							</a>
						</li>						
						<li>
							<a href="https://www.busan.go.kr/gnance/index" class="showBalloon" title="협치부산 홈페이지 새 창 열림" target="_blank">
								<span class="listImg12 pong2"></span><span class="subTitle">협치부산</span>
							</a>
						</li>
						<li class="mgl1">
							<a href="http://bigdata.busan.go.kr/" class="showBalloon" title="빅데이터포털 홈페이지 새 창 열림" target="_blank">
								<span class="listImg13 pong2"></span><span class="subTitle two">빅데이터포털</span>
							</a>
						</li>
						<li>
							<a href="https://trade.busan.go.kr/main/main.php" class="showBalloon" title="해외마케팅 홈페이지 새 창 열림" target="_blank">
								<span class="listImg14 pong2"></span><span class="subTitle">해외마케팅</span>
							</a>
						</li>	
						<li>
							<a href="http://lifemap.busan.go.kr/tp/index.do" class="showBalloon" title="부산생활지도 홈페이지 새 창 열림" target="_blank">
								<span class="listImg15 pong2"></span><span class="subTitle">부산생활지도</span>
							</a>
						</li>
						<li>
							<a href="https://www.dong100.or.kr/" class="showBalloon" title="동백전 홈페이지 새 창 열림" target="_blank">
								<span class="listImg16 pong2"></span><span class="subTitle">동백전</span>
							</a>
						</li>						
						<li>
							<a href="http://www.busanzeropay.or.kr/main/" class="showBalloon" title="제로페이 홈페이지 새 창 열림" target="_blank">
								<span class="listImg17 pong2"></span><span class="subTitle">제로페이</span>
							</a>
						</li>						
						<li>
							<a href="https://www.elis.go.kr/" class="showBalloon" title="자치법규 홈페이지 새 창 열림" target="_blank">
								<span class="listImg18 pong2"></span><span class="subTitle">자치법규</span>
							</a>
						</li>						
						<li class="mgl1">
							<a href="https://buvicar.busan.go.kr/" class="showBalloon" title="부비카정보 홈페이지 새 창 열림" target="_blank">
								<span class="listImg19 pong2"></span><span class="subTitle">부비카정보</span>
							</a>
						</li>						
						<li>
							<a href="https://www.busan.go.kr/compe/index" class="showBalloon" title="건축설계공모 홈페이지 새 창 열림" target="_blank">
								<span class="listImg20 pong2"></span><span class="subTitle two">건축설계공모</span>
							</a>
						</li>						
						<li>
							<a href="https://dynamice.busan.go.kr/" class="showBalloon" title="정비사업 통합 홈페이지 새 창 열림" target="_blank">
								<span class="listImg21 pong2"></span><span class="subTitle">정비사업 통합</span>
							</a>
						</li>						
						<li>
							<a href="https://www.busan.go.kr/campbusan/index" class="showBalloon" title="캠프부산 홈페이지 새 창 열림" target="_blank">
								<span class="listImg22 pong2"></span><span class="subTitle">캠프부산</span>
							</a>
						</li>						
						<li>
							<a href="https://its.busan.go.kr/index.do" class="showBalloon" title="교통정보 홈페이지 새 창 열림" target="_blank">
								<span class="listImg23 pong2"></span><span class="subTitle two">교통정보</span>
							</a>
						</li>						
						<li>
							<a href="https://library.busan.go.kr/portal/index.do" class="showBalloon" title="도서관포털 홈페이지 새 창 열림" target="_blank">
								<span class="listImg24 pong2"></span><span class="subTitle">도서관포털</span>
							</a>
						</li>						
					</ul>				
				</div>
				<button class="more quick_toggle active"><span class="moreTxt">더보기</span><span class="bottomArrow"></span></button>
			</div><!-- id="busanAllinfo" -->
		</div><!-- class="part5" -->
		<div class="part6">
			<div id="busanRanking" class="cf">
				<div class="rankBox fl">
					<h4 class="rankTitle fl"><span>RANKING</span><span class="size">100</span></h4>
					<ul class="rankList fl">
						<li>
							<a href="https://www.busan.go.kr/covid19/Corona19/travelhist.do" class="showBalloon" title="확진자이동경로 홈페이지 새 창 열림" target="_blank"><span>확진자이동경로</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/phone/list" class="showBalloon" title="행정전화번호부 홈페이지 새 창 열림" target="_blank"><span>행정전화번호부</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/covid19/Prevention07.do" class="showBalloon" title="사회적거리두기 홈페이지 새 창 열림" target="_blank"><span>사회적거리두기</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/job/jobgonji01" class="showBalloon" title="우리시 채용정보 홈페이지 새 창 열림" target="_blank"><span>우리시 채용정보</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/nbgosi" class="showBalloon" title="고시공고 홈페이지 새 창 열림" target="_blank"><span>고시공고</span></a>
						</li>
						<li>
							<a href="https://reserve.busan.go.kr/lctre/list" class="showBalloon" title="공고/교육 예약 홈페이지 새 창 열림" target="_blank"><span>공고/교육 예약</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/bhorganization01" class="showBalloon" title="조직도 홈페이지 새 창 열림" target="_blank"><span>조직도</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/covid19/Course02.do" class="showBalloon" title="감염집단사례 홈페이지 새 창 열림" target="_blank"><span>감염집단사례</span></a>
						</li>
						<li>
							<a href="sub2/sub2.html" class="showBalloon" title="공지사항 홈페이지 새 창 열림" target="_blank"><span>공지사항</span></a>
						</li>
					</ul>
				</div>
				<div class="etcListBox quickmenu2 fl">
					<ul class="etcList">
						<li>
							<a href="https://www.busan.go.kr/market/index" class="showBalloon" title="실시간 경락 정보 홈페이지 새 창 열림" target="_blank"><span>· 실시간 경락 정보</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/covid19/Status01.do" class="showBalloon" title="확진자추세 홈페이지 새 창 열림" target="_blank"><span>· 확진자추세</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/covid19/Clinics.do" class="showBalloon" title="선별진료소 홈페이지 새 창 열림" target="_blank"><span>· 선별진료소</span></a>
						</li>
						<li class="pdr">
							<a href="https://www.busan.go.kr/nbtnewsBU" class="showBalloon" title="보도자료 홈페이지 새 창 열림" target="_blank"><span>· 보도자료</span></a>
						</li>
						<li>
							<a href="https://reserve.busan.go.kr/exprn/list" class="showBalloon" title="견학/체험 예약 홈페이지 새 창 열림" target="_blank"><span>· 견학/체험 예약</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/nbnews" class="showBalloon" title="통합공지사항 홈페이지 새 창 열림" target="_blank"><span>· 통합공지사항</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/covid19/Status02.do" class="showBalloon" title="일자별현황 홈페이지 새 창 열림" target="_blank"><span>· 일자별현황</span></a>
						</li>
						<li class="pdr">
							<a href="https://www.busan.go.kr/news/totalnews01" class="showBalloon" title="전체기사보기 홈페이지 새 창 열림" target="_blank"><span>· 전체기사보기</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/young/monthly00" class="showBalloon" title="청년월세지원 홈페이지 새 창 열림" target="_blank"><span>· 청년월세지원</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/environment/ahairsupport05" class="showBalloon" title="경유차 조기폐차 홈페이지 새 창 열림" target="_blank"><span>· 경유차 조기폐차</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/covid19/Prevention08.do" class="showBalloon" title="방역수칙 홈페이지 새 창 열림" target="_blank"><span>· 방역수칙</span></a>
						</li>
						<li class="pdr">
							<a href="https://www.busan.go.kr/job/index" class="showBalloon" title="일자리정보 홈페이지 새 창 열림" target="_blank"><span>· 일자리정보</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/young/monthly00" class="showBalloon" title="주민자치회 홈페이지 새 창 열림" target="_blank"><span>· 주민자치회</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/environment/ahairsupport05" class="showBalloon" title="도시건설주택 홈페이지 새 창 열림" target="_blank"><span>· 도시건설주택</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/covid19/Prevention08.do" class="showBalloon" title="도시비전과 목표 홈페이지 새 창 열림" target="_blank"><span>· 도시비전과 목표</span></a>
						</li>
						<li class="pdr">
							<a href="https://www.busan.go.kr/job/index" class="showBalloon" title="복지 정보 홈페이지 새 창 열림" target="_blank"><span>· 복지 정보</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/young/monthly00" class="showBalloon" title="주요업무 계획 홈페이지 새 창 열림" target="_blank"><span>· 주요업무 계획</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/environment/ahairsupport05" class="showBalloon" title="좌석 배치도 홈페이지 새 창 열림" target="_blank"><span>· 좌석 배치도</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/covid19/Prevention08.do" class="showBalloon" title="이야기 리포트 홈페이지 새 창 열림" target="_blank"><span>· 이야기 리포트</span></a>
						</li>
						<li class="pdr">
							<a href="https://www.busan.go.kr/job/index" class="showBalloon" title="일자리정보 홈페이지 새 창 열림" target="_blank"><span>· 일자리정보</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/young/monthly00" class="showBalloon" title="청년월세지원 홈페이지 새 창 열림" target="_blank"><span>· 시민청원 와글와글</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/environment/ahairsupport05" class="showBalloon" title="경유차 조기폐차 홈페이지 새 창 열림" target="_blank"><span>· 시험공고</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/covid19/Prevention08.do" class="showBalloon" title="방역수칙 홈페이지 새 창 열림" target="_blank"><span>· 청년정책플랫폼</span></a>
						</li>
						<li class="pdr">
							<a href="https://www.busan.go.kr/job/index" class="showBalloon" title="일자리정보 홈페이지 새 창 열림" target="_blank"><span>· 특별분양</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/market/index" class="showBalloon" title="실시간 경락 정보 홈페이지 새 창 열림" target="_blank"><span>· 실시간 경락 정보</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/covid19/Status01.do" class="showBalloon" title="확진자추세 홈페이지 새 창 열림" target="_blank"><span>· 확진자추세</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/covid19/Clinics.do" class="showBalloon" title="선별진료소 홈페이지 새 창 열림" target="_blank"><span>· 선별진료소</span></a>
						</li>
						<li class="pdr">
							<a href="https://www.busan.go.kr/nbtnewsBU" class="showBalloon" title="보도자료 홈페이지 새 창 열림" target="_blank"><span>· 보도자료</span></a>
						</li>
						<li>
							<a href="https://reserve.busan.go.kr/exprn/list" class="showBalloon" title="견학/체험 예약 홈페이지 새 창 열림" target="_blank"><span>· 견학/체험 예약</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/nbnews" class="showBalloon" title="통합공지사항 홈페이지 새 창 열림" target="_blank"><span>· 통합공지사항</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/covid19/Status02.do" class="showBalloon" title="일자별현황 홈페이지 새 창 열림" target="_blank"><span>· 일자별현황</span></a>
						</li>
						<li class="pdr">
							<a href="https://www.busan.go.kr/news/totalnews01" class="showBalloon" title="전체기사보기 홈페이지 새 창 열림" target="_blank"><span>· 전체기사보기</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/young/monthly00" class="showBalloon" title="청년월세지원 홈페이지 새 창 열림" target="_blank"><span>· 청년월세지원</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/environment/ahairsupport05" class="showBalloon" title="경유차 조기폐차 홈페이지 새 창 열림" target="_blank"><span>· 경유차 조기폐차</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/covid19/Prevention08.do" class="showBalloon" title="방역수칙 홈페이지 새 창 열림" target="_blank"><span>· 방역수칙</span></a>
						</li>
						<li class="pdr">
							<a href="https://www.busan.go.kr/job/index" class="showBalloon" title="특별분양 홈페이지 새 창 열림" target="_blank"><span>· 특별분양</span></a>
						</li>						
						<li>
							<a href="https://www.busan.go.kr/young/monthly00" class="showBalloon" title="시민청원 홈페이지 새 창 열림" target="_blank"><span>· 시민청원 와글와글</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/environment/ahairsupport05" class="showBalloon" title="시험공고 홈페이지 새 창 열림" target="_blank"><span>· 시험공고</span></a>
						</li>
						<li>
							<a href="https://www.busan.go.kr/covid19/Prevention08.do" class="showBalloon" title="청년정책플랫폼 홈페이지 새 창 열림" target="_blank"><span>· 청년정책플랫폼</span></a>
						</li>
						<li class="pdr">
							<a href="https://www.busan.go.kr/job/index" class="showBalloon" title="특별분양 홈페이지 새 창 열림" target="_blank"><span>· 특별분양</span></a>
						</li>
					</ul>
				</div>
				<button class="more quick_toggle2 active"><span class="moreTxt">더보기</span><span class="bottomArrow"></span></button>				
			</div><!-- id="busanRanking" -->
			<div id="busanTourguide">
				<h4 class="tourguideTitle">관광</h4>
				<ul class="tourList">
					<li>
						<a href="https://www.visitbusan.net/index.do?menuCd=DOM_000000202002000000" class="showBalloon" title="테마여행 홈페이지 새 창 열림" target="_blank"><span>테마여행</span></a>
					</li>
					<li class="mgr">
						<a href="https://www.visitbusan.net/index.do?menuCd=DOM_000000202003000000" class="showBalloon" title="푸디투어 홈페이지 새 창 열림" target="_blank"><span>푸디투어</span></a>
					</li>
					<li>
						<a href="https://www.visitbusan.net/index.do?menuCd=DOM_000000202004000000" class="showBalloon" title="도보여행 홈페이지 새 창 열림" target="_blank"><span>도보여행</span></a>
					</li>
					<li class="mgr">
						<a href="https://www.visitbusan.net/index.do?menuCd=DOM_000000202008000000" class="showBalloon" title="해양/체험 홈페이지 새 창 열림" target="_blank"><span>해양/체험</span></a>
					</li>
					<li>
						<a href="https://www.visitbusan.net/board/list.do?boardId=BBS_0000007&menuCd=DOM_000000203001000000&contentsSid=61" class="showBalloon" title="가이드북&지도 홈페이지 새 창 열림" target="_blank"><span>가이드북&지도</span></a>
					</li>
					<li class="mgr">
						<a href="https://www.visitbusan.net/index.do?menuCd=DOM_000000204009000000" class="showBalloon" title="부산여행사진 홈페이지 새 창 열림" target="_blank"><span>부산여행사진</span></a>
					</li>
				</ul>
				<ul class="tourListEtc">
					<li>
						<a href="https://bto.or.kr/kor/Main.do" class="showBalloon" title="부산관광공사 홈페이지 새 창 열림" target="_blank">
							<span class="tourListImg1 pong2"></span><span class="subTitle pdtl1">부산관광공사</span>
						</a>
					</li>
					<li>
						<a href="https://www.busan.go.kr/geopark/index" class="showBalloon" title="국가지질공원 홈페이지 새 창 열림" target="_blank">
							<span class="tourListImg2 pong2"></span><span class="subTitle pdtl1">국가지질공원</span>
						</a>
					</li>
					<li>
						<a href="https://www.bsmeditour.go.kr/" class="showBalloon" title="의료관광 홈페이지 새 창 열림" target="_blank">
							<span class="tourListImg3 pong2"></span><span class="subTitle pdtl2">의료관광</span>
						</a>
					</li>
					<li>
						<a href="https://www.busan.go.kr/galmaetgil0202" class="showBalloon" title="부산 갈맷길 홈페이지 새 창 열림" target="_blank">
							<span class="tourListImg4 pong2"></span><span class="subTitle pdtl3">부산 갈맷길</span>
						</a>
					</li>
					<li>
						<a href="https://www.biff.kr/kor/" class="showBalloon" title="부산국제영화제 홈페이지 새 창 열림" target="_blank">
							<span class="tourListImg5 pong2"></span><span class="subTitle">부산국제영화제</span>
						</a>
					</li>
					<li>
						<a href="http://www.citytourbusan.com/ko/00main/main.php" class="showBalloon" title="부산시티투어 홈페이지 새 창 열림" target="_blank">
							<span class="tourListImg6 pong2"></span><span class="subTitle pdtl4">부산시티투어</span>
						</a>
					</li>
				</ul>
			</div><!-- id="busanTourguide" -->
		</div><!-- class="part6" -->
		
	</div><!-- id="contentWrap" -->
	<div id="footer">
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
						<button id="selcSite2" class="btnGo showBalloon" title="새 창 열림"><span></span>바로가기</button>
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
						<button id="selcSite3" class="btnGo showBalloon" title="새 창 열림"><span></span>바로가기</button>					
					</div>
				</div>
				<div class="footerSns">
					<a href="https://www.instagram.com/busancity/" class="snsImg1 showBalloon" title="인스타그램 새 창 열림"></a>
					<a href="https://twitter.com/busancitygovt" class="snsImg2 showBalloon" title="트위터 새 창 열림"></a>
					<a href="https://www.facebook.com/BusanCity/" class="snsImg3 showBalloon" title="페이스북 새 창 열림"></a>
					<a href="http://blog.naver.com/cooolbusan" class="snsImg4 showBalloon" title="네이버 블로그 새 창 열림"></a>
					<a href="https://story.kakao.com/ch/toktokbusan" class="snsImg5 showBalloon" title="카카오스토리 새 창 열림"></a>
					<a href="http://badatv.busan.go.kr" class="snsImg6 showBalloon" title="바다TV 새 창 열림"></a>
					<a href="https://www.youtube.com/user/DynamicBusan" class="snsImg7 showBalloon" title="유튜브 새 창 열림"></a>
				</div>
			</div>
		</div>
		<div class="footerBody cf">
			<div class="footLogo"><a href="index.html"><img src="images/footer_logo.png" alt="하단로고"/></a></div>
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
					<a href="https://www.busan.go.kr/bhintro02" class="showBalloon" title="시청 찾아오시는길 홈페이지 새 창 열림" target="_blank">시청 찾아오시는길</a>
					<a href="https://www.busan.go.kr/bhintro03" class="showBalloon" title="주차안내 홈페이지 새 창 열림" target="_blank">주차안내</a>
					<a href="https://www.busan.go.kr/opgude" class="showBalloon" title="이용안내 홈페이지 새 창 열림" target="_blank">이용안내</a>
				</div>
				<p class="warning">본 홈페이지에 게시된 이메일 주소가 자동 수집되는 것을 거부하며,</p>
				<p class="warning">이를 위반시 개인정보 보호법에 의해 처벌됨을 유념하시기 바랍니다.</p>
				<p class="copy">Copyright © Busan Metropolitan City. All rights reserved.</p>
			</div>
			<div class="footMenu">
				<ul>
					<li><span class="dot"> ·</span><a href="https://www.busan.go.kr/terms" class="showBalloon" title="약관 홈페이지 새 창 열림" target="_blank">약관</a></li>
					<li><span class="dot">·</span><a href="https://www.busan.go.kr/cright" class="showBalloon" title="홈페이지 저작권 보호정책 홈페이지 새 창 열림" target="_blank">홈페이지 저작권 보호정책</a></li>
					<li><span class="dot">·</span><a href="https://www.busan.go.kr/vprivacy1" class="showBalloon" title="개인정보 처리방침 홈페이지 새 창 열림" target="_blank" class="colorBlue">개인정보 처리방침</a></li>
					<li><span class="dot">·</span><a href="https://www.busan.go.kr/minwon/mdidsms" class="showBalloon" title="행정서비스헌장 홈페이지 새 창 열림" target="_blank">행정서비스헌장</a></li>
					<li><span class="dot">·</span><a href="https://www.busan.go.kr/viewdn" class="showBalloon" title="뷰어다운로드 홈페이지 새 창 열림" target="_blank">뷰어다운로드</a></li>
					<li><span class="dot">·</span><a href="https://www.busan.go.kr/minwon/homemonitor01" class="showBalloon" title="홈패이지 모니터 홈페이지 새 창 열림" target="_blank">홈패이지 모니터</a></li>
				</ul>
			</div>
			<div class="footMark">
				<ul>
					<li><a href="https://www.busan.go.kr/kwacc-mark" class="mark1 showBalloon" title="웹 접근성 품질인증 마크 홈페이지 새 창 열림" target="_blank"><img src="images/footer_wa.png" alt="웹 접근성 품질인증 마크"/></a></li>
					<li><a href="https://validator.w3.org/unicorn/check?ucn_uri=chlqjagml.dothome.co.kr%2Fproject01%2F&ucn_task=conformance#" class="mgt2 showBalloon" title="마크업통합검증 홈페이지 새 창 열림" target="_blank"><img src="images/vcss-blue.gif" alt="vcss-blue" height="31" width="88"></a></li>
					<li><a href="https://www.busan.go.kr/gcs-mark" class="mark2 mgtl showBalloon" title="굿 콘텐츠서비스 인증마크 홈페이지 새 창 열림" target="_blank"><img src="images/footer_gcs.png" alt="굿 콘텐츠서비스 인증마크"/></a></li>	
				</ul>			
			</div>
		</div>
	</div><!-- id="footer" -->
	<p id="pop_wrap">
		<img src="images/popup1.png" alt="컬리를 가장 쉽고 편하게 이용하는 방법" usemap="#pop" />
		<map name="pop" id="pop">
			<area shape="rect" coords="454,526,482,542" href="닫기" alt="닫기"/>
			<area shape="rect" coords="274,526,422,542" href="하루동안창닫기" alt="오늘 하루동안 보지않기"/>
		</map>
	</p>	
</body>
</html>

<script>
counter_init();
</script>