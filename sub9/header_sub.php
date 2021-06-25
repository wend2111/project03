<?php
	include "../define.php";
	
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "";
    if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
    else $userpoint = "";
?>	

	<div id="headerWrap">
		<div class="header">
			<div id="mainLogo"><a href="../index2.php" class="showBalloon" title="부산로고"><img src="images/main_logo.png" width="215" height="60" alt="메인로고"/><h1>부산로고</h1></a></div><!-- id="mainLogo" -->
			<div id="mainGnb">
				<h2>메인 GNB</h2>
				<ul>					
					<li class="loginCnt">						

<?php
	if(!$userid) {
?>	
						<form>
							<input type="button" class="button1" value="로그인" onclick="location.href='../login_form.php'">
							<input type="button" class="button2 cf" value="회원가입" onclick="location.href='../member_form.php'">
						</form>
						<span class="loginCntText">자동 로그아웃</span><span id="counter"></span> <input type="button" class="button3" value="연장" onclick="counter_reset()">							
<?php
	}else{
		$logged = $username."(".$userid.")님[Level:".$userlevel.", Point:".$userpoint."]";
?>				<ul>
					<li><?=$logged?> </li>
						<form>
							<input type="button" class="button1" value="로그아웃" onclick="location.href='../logout.php'">
							<input type="button" class="button2 cf" value="정보수정" onclick="location.href='../member_modify_form.php'">
						</form>
						<span class="loginCntText">자동 로그아웃</span><span id="counter"></span> <input type="button" class="button3" value="연장" onclick="counter_reset()">
				</ul>
<?php
	}
?>
<?php
	if($userlevel==1){
?>

					<li><a href="admin.php">관리자 모드(15Ch)</a></li>
<?php
	}
?>
					</li>
					<li class="sitemap"><a href="sub9/message_form.php" target="_blank" class="showBalloon" title="사이트맵">메세지 보내기</a></li>	
					<li class="icon_message">
						<a href="sub9/message_form.php"><img src="images/message_logo.png" width="35" alt="메세지아이콘"></a>		
					</li>	
					<li class="sitemap"><a href="sub10/board_list.php" target="_blank" class="showBalloon" title="사이트맵">게시판 글쓰기</a></li>
				</ul>
			</div><!-- id="mainGnb" -->
		</div><!-- id="header" -->
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
