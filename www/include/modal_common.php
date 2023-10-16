
	<!-- 로그인 -->
    <div class="modal-dimmed" id="modalLogin">
        <div class="modal">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-content">
                        <div class="modal-close">
                            <a href="#modal" class="MODAL-CLOSE">×<span class="hidden">닫기</span></a>
                        </div>
                        <!-- 모달 헤더 -->
                        <div class="modal-header">
                            <h2>로그인</h2>
                        </div>
                        <!-- 모달 헤더 End -->

                        <!-- 모달 바디 -->
                        <div class="modal-body">
                            <div class="login-auto">
                                <input type="checkbox" id="loginAuto"/>
                                <label for="loginAuto">자동 로그인</label>
                            </div>
                            <hr>
                            <div class="u-forms large login-id">
                                <label for="loginId" class="hidden">아이디</label>
                                <input type="text" name="" id="loginId" placeholder="아이디">
                            </div>
                            <hr class="hr-small">
                            <div class="u-forms large login-pwd">
                                <label for="loginId" class="hidden">비밀번호</label>
                                <input type="email" name="" id="비밀번호" placeholder="비밀번호">
                            </div>
                            <hr>
                            <div class="login-lnk">
                                <a href="member_find_id.php">아이디 찾기</a>&nbsp;|&nbsp;
                                <a href="member_find_pwd.php">비밀번호 찾기</a>&nbsp;|&nbsp;
                                <a href="member_join.php">회원가입</a>
                            </div>
                            <hr>
                            <div class="login-btn">
                                <input class="button primary block x-large close" type="submit" onclick="go('mypage.php')" value="로그인"/>
                            </div>
                            <hr>
                            <div class="login-sns">
                                <a href="#;"><img src="./assets/img/naver.png" alt="네이버"></a>
                                <a href="#;"><img src="./assets/img/kakao.png" alt="카카오톡"></a>
                                <a href="#;"><img src="./assets/img/google.png" alt="구글"></a>
                                <a href="#;"><img src="./assets/img/facebook.png" alt="페이스북"></a>
                                <a href="#;"><img src="./assets/img/instagram.png" alt="인스타그램"></a>
                                <!--
                                <a href="#;"><img src="./assets/img/kakaostory.png" alt="카카오스토리"></a>
                                -->
                            </div>
                        </div>
                        <!-- 모달 헤더 End -->

                        <!-- 모달 바디 -->
                        <div class="modal-body">
                            모달 바디
                        </div>
                        <!-- 모달 바디 End -->

                        <!-- 모달 푸터 -->
                        <div class="modal-footer">
                            <button class="btn">확인</button>
                            <button class="btn btn-black MODAL-CLOSE">취소</button>
                        </div>
                        <!-- 모달 푸터 End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- 로그인 End -->

    <!-- 유저 모달 팝업  -->
    <div class="modal-dimmed" id="modalUser">
        <div class="modal">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-content">
                        <div class="modal-close">
                            <a href="#modal" class="MODAL-CLOSE">×<span class="hidden">닫기</span></a>
                        </div>
                        <!-- 모달 헤더 -->
                        <div class="modal-header">
                            <h2>회원</h2>
                        </div>
                        <!-- 모달 헤더 End -->

                        <!-- 모달 바디 -->
                        <div class="modal-body">
                            <ul class="modal-list">
                                <li><a href="./member_info.php">정보 수정</a></li>
                                <li><a href="./member-history.php">스크랩/좋아요/댓글</a></li>
                                <li><a href="#;">개발자에게 의견 보내기</a></li>
                                <li><a href="#;">로그아웃</a></li>
                            </ul>
                        </div>
                        <!-- 모달 바디 End -->

                        <!-- 모달 푸터 -->
                        <div class="modal-footer">
                            <button class="btn">확인</button>
                            <button class="btn btn-black MODAL-CLOSE">취소</button>
                        </div>
                        <!-- 모달 푸터 End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 유저 팝업 End -->


    <!-- 검색 -->
    <div class="modal-dimmed" data-ani-on="modal-ani-up" data-ani-off="modal-ani-up-down" id="modalSearch">
        <div class="modal-full">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-content">
                        <div class="modal-close">
                            <a href="#modal" class="MODAL-CLOSE">×<span class="hidden">닫기</span></a>
                        </div>
                        <!-- 모달 헤더 -->
                        <div class="modal-header">
                            <h2>검색</h2>
                        </div>
                        <!-- 모달 헤더 End -->

                        <!-- 모달 바디 -->
                        <div class="modal-body">
                            <div class="search-layer-body">
                                <div class="search">
                                    <div class="search-input">
                                        <div class="u-forms">
                                            <label for="for-text" class="hidden">입력값</label>
                                            <input type="text" id="for-text">
                                        </div>
                                    </div>
                                    <div class="search-btn">
                                        <button type="button" class="button secondary large block">검색</button>
                                    </div>
                                </div>
                                <!-- tabs -->
                                <div class="tabs fixed">
                                    <ul>
                                        <li class="active"><a href="#tabSearchAll">전체</a></li>
                                        <li><a href="#tabSearchUser">회원</a></li>
                                        <li><a href="#tabSearchTag">태그</a></li>
                                        <li><a href="#tabSearchSkill">스킬</a></li>
                                        <li><a href="#tabSearchSz">상장</a></li>
                                    </ul>
                                </div>
                                <!-- tabs End -->
                                <!-- panels -->
                                <div class="panels">
                                    <div id="tabSearchAll" class="panel active" tabindex="0">
                                        <!-- 전체 검색 -->
                                        <?php include("include/include_temp/inc_search_all.php"); ?>
                                        <!-- 전체 검색 End -->
                                    </div>
                                    <div id="tabSearchUser" class="panel" tabindex="0">
                                        <!-- 회원 검색 -->
                                        <?php include("include/include_temp/inc_search_01.php"); ?>
                                        <!-- 회원 검색 End -->
                                    </div>

                                    <div id="tabSearchTag" class="panel" tabindex="0">
                                        <!-- 태그 검색 -->
                                        <?php include("include/include_temp/inc_search_02.php"); ?>
                                        <!-- 태그 검색 End -->
                                    </div>

                                    <div id="tabSearchSkill" class="panel" tabindex="0">
                                        <!-- 스킬 검색 -->
                                        <?php include("include/include_temp/inc_search_03.php"); ?>
                                        <!-- 스킬 검색 End -->
                                    </div>

                                    <div id="tabSearchSz" class="panel" tabindex="0">
                                        <!-- 상짱 검색 -->
                                        <?php include("include/include_temp/inc_search_04.php"); ?>
                                        <!-- 상짱 검색 End -->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- 모달 바디 End -->

                        <!-- 모달 푸터 -->
                        <div class="modal-footer">
                            <button class="btn">확인</button>
                            <button class="btn btn-black MODAL-CLOSE">취소</button>
                        </div>
                        <!-- 모달 푸터 End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- 검색 End -->


	<!-- 알람 모달 팝업 -->
    <div class="modal-dimmed" id="modalAlarm">
        <div class="modal">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-content">
                        <div class="modal-close">
                            <a href="#modal" class="MODAL-CLOSE">×<span class="hidden">닫기</span></a>
                        </div>
                        <!-- 모달 헤더 -->
                        <div class="modal-header">
                            <h2>모달 헤더</h2>
                        </div>
                        <!-- 모달 헤더 End -->

                        <!-- 모달 바디 -->
                        <div class="modal-body">
                            <div class="user-list alarm-list">
                                <ul>
                                    <li>
                                        <a href="#;">
                                            <div class="user">
                                                <div class="user-img">
                                                    <img src="/assets/tempImg/profile/n.jpg" alt="프로필 이미지">
                                                </div>
                                                <div class="user-info">
                                                    <div class="info-nick"><strong class="">s._____am</strong>님이 상장을 보냈습니다.</div>
                                                    <div class="info-date">2020.08.28 12:00</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#;">
                                            <div class="user">
                                                <div class="user-img">
                                                    <img src="/assets/tempImg/profile/ac.jpg" alt="프로필 이미지">
                                                </div>
                                                <div class="user-info">
                                                    <div class="info-nick"><strong class="">hyungyu_v</strong>님이 상장을 보냈습니다.</div>
                                                    <div class="info-date">2020.08.28 12:00</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#;">
                                            <div class="user">
                                                <div class="user-img">
                                                    <img src="/assets/tempImg/profile/b.jpg" alt="프로필 이미지">
                                                </div>
                                                <div class="user-info">
                                                    <div class="info-nick"><strong class="">ho__yaaaaa</strong>님이 상장을 보냈습니다.</div>
                                                    <div class="info-date">2020.08.28 12:00</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#;">
                                            <div class="user">
                                                <div class="user-img">
                                                    <img src="/assets/tempImg/profile/p.jpg" alt="프로필 이미지">
                                                </div>
                                                <div class="user-info">
                                                    <div class="info-nick"><strong class="">meant4i</strong>님이 상장을 보냈습니다.</div>
                                                    <div class="info-date">2020.08.28 12:00</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#;">
                                            <div class="user">
                                                <div class="user-img">
                                                    <img src="/assets/tempImg/profile/aa.jpg" alt="프로필 이미지">
                                                </div>
                                                <div class="user-info">
                                                    <div class="info-nick"><strong class="">jinny_0724</strong>님이 상장을 보냈습니다.</div>
                                                    <div class="info-date">2020.08.28 12:00</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#;">
                                            <div class="user">
                                                <div class="user-img">
                                                    <img src="/assets/tempImg/profile/k.jpg" alt="프로필 이미지">
                                                </div>
                                                <div class="user-info">
                                                    <div class="info-nick"><strong class="">areum7239</strong>님이 상장을 보냈습니다.</div>
                                                    <div class="info-date">2020.08.28 12:00</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#;">
                                            <div class="user">
                                                <div class="user-img">
                                                    <img src="/assets/tempImg/profile/ar.jpg" alt="프로필 이미지">
                                                </div>
                                                <div class="user-info">
                                                    <div class="info-nick"><strong class="">kmi0123</strong>님이 상장을 보냈습니다.</div>
                                                    <div class="info-date">2020.08.28 12:00</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#;">
                                            <div class="user">
                                                <div class="user-img">
                                                    <img src="/assets/tempImg/profile/c.jpg" alt="프로필 이미지">
                                                </div>
                                                <div class="user-info">
                                                    <div class="info-nick"><strong class="">jjeon_sso0</strong>님이 상장을 보냈습니다.</div>
                                                    <div class="info-date">2020.08.28 12:00</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#;">
                                            <div class="user">
                                                <div class="user-img">
                                                    <img src="/assets/tempImg/profile/ae.jpg" alt="프로필 이미지">
                                                </div>
                                                <div class="user-info">
                                                    <div class="info-nick"><strong class="">nccwhite</strong>님이 상장을 보냈습니다.</div>
                                                    <div class="info-date">2020.08.28 12:00</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#;">
                                            <div class="user">
                                                <div class="user-img">
                                                    <img src="/assets/tempImg/profile/aa.jpg" alt="프로필 이미지">
                                                </div>
                                                <div class="user-info">
                                                    <div class="info-nick"><strong class="">lsklcd19</strong>님이 상장을 보냈습니다.</div>
                                                    <div class="info-date">2020.08.28 12:00</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#;">
                                            <div class="user">
                                                <div class="user-img">
                                                    <img src="/assets/tempImg/profile/ap.jpg" alt="프로필 이미지">
                                                </div>
                                                <div class="user-info">
                                                    <div class="info-nick"><strong class="">gowlsl0627</strong>님이 상장을 보냈습니다.</div>
                                                    <div class="info-date">2020.08.28 12:00</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#;">
                                            <div class="user">
                                                <div class="user-img">
                                                    <img src="/assets/tempImg/profile/k.jpg" alt="프로필 이미지">
                                                </div>
                                                <div class="user-info">
                                                    <div class="info-nick"><strong class="">rimmmming715</strong>님이 상장을 보냈습니다.</div>
                                                    <div class="info-date">2020.08.28 12:00</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- 모달 바디 End -->

                        <!-- 모달 푸터 -->
                        <div class="modal-footer">
                            <button class="btn">확인</button>
                            <button class="btn btn-black MODAL-CLOSE">취소</button>
                        </div>
                        <!-- 모달 푸터 End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- 알람 팝업 End -->


	<!-- 함께 보낸 분 -->
	<div class="modal-dimmed modal-with" tabindex="0">
		<div class="modal">
			<div class="modal-wrapper">
				<div class="modal-container">
					<div class="modal-content modal-content-large">
						<div class="modal-close">
							<a href="#modal" class="modal-close close">×<span class="hidden">닫기</span></a>
						</div>
						<!-- 모달 헤더 -->
						<div class="modal-header">
							<h2>함께 보낸 분</h2>
						</div>
						<!-- 모달 헤더 End -->

						<!-- 모달 바디 -->
						<div class="modal-body">
							<div class="user-list with-list">
								<ul>
									<li>
										<div class="user">
											<a href="#;">
												<div class="user-img">
													<img src="/assets/tempImg/profile/z.jpg" alt="프로필 이미지">
												</div>
											</a>
											<div class="user-info">
												<div class="info-nick"><a href="#;"><strong>goosing</strong></a></div>
												<div class="info-name">이운성</div>
											</div>
											<div class="user-function">
												<button type="button" class="button block primary medium">팔로우 중</button>
											</div>
										</div>
									</li>
									<li>
										<div class="user">
											<a href="#;">
												<div class="user-img">
													<img src="/assets/tempImg/profile/f.jpg" alt="프로필 이미지">
												</div>
											</a>
											<div class="user-info">
												<div class="info-nick"><a href="#;"><strong>_hanabiya______</strong></a></div>
												<div class="info-name">심재익</div>
											</div>
											<div class="user-function">
												<button type="button" class="button block primary medium">팔로우 중</button>
											</div>
										</div>
									</li>
									<li>
										<div class="user">
											<a href="#;">
												<div class="user-img">
													<img src="/assets/tempImg/profile/e.jpg" alt="프로필 이미지">
												</div>
											</a>
											<div class="user-info">
												<div class="info-nick"><a href="#;"><strong>manbang_kim</strong></a></div>
												<div class="info-name">김나라</div>
												
											</div>
											<div class="user-function">
												<button type="button" class="button block primary medium">팔로우 중</button>
											</div>
										</div>
									</li>
									<li>
										<div class="user">
											<a href="#;">
												<div class="user-img">
													<img src="/assets/tempImg/profile/s.jpg" alt="프로필 이미지">
												</div>
											</a>
											<div class="user-info">
												<div class="info-nick"><a href="#;"><strong>i_am_limdae</strong></a></div>
												<div class="info-name">박정은</div>
											</div>
											<div class="user-function">
												<button type="button" class="button block primary medium">팔로우 중</button>
											</div>
										</div>
									</li>
									<li>
										<div class="user">
											<a href="#;">
												<div class="user-img">
													<img src="/assets/tempImg/profile/ag.jpg" alt="프로필 이미지">
												</div>
											</a>
											<div class="user-info">
												<div class="info-nick"><a href="#;"><strong>daewoon.jo</strong></a></div>
												<div class="info-name">김수영</div>
											</div>
											<div class="user-function">
												<button type="button" class="button block  medium">팔로우 하기</button>
											</div>
										</div>
									</li>
									<li>
										<div class="user">
											<a href="#;">
												<div class="user-img">
													<img src="/assets/tempImg/profile/h.jpg" alt="프로필 이미지">
												</div>
											</a>
											<div class="user-info">
												<div class="info-nick"><a href="#;"><strong>heeyou.yang</strong></a></div>
												<div class="info-name">이운성</div>
											</div>
											<div class="user-function">
												<button type="button" class="button block primary medium">팔로우 중</button>
											</div>
										</div>
									</li>
									<li>
										<div class="user">
											<a href="#;">
												<div class="user-img">
													<img src="/assets/tempImg/profile/ae.jpg" alt="프로필 이미지">
												</div>
											</a>
											<div class="user-info">
												<div class="info-nick"><a href="#;"><strong>jjeon_sso0</strong></a></div>
												<div class="info-name">심재익</div>
											</div>
											<div class="user-function">
												<button type="button" class="button block primary medium">팔로우 중</button>
											</div>
										</div>
									</li>
									<li>
										<div class="user">
											<a href="#;">
												<div class="user-img">
													<img src="/assets/tempImg/profile/af.jpg" alt="프로필 이미지">
												</div>
											</a>
											<div class="user-info">
												<div class="info-nick"><a href="#;"><strong>lsklcd19</strong></a></div>
												<div class="info-name">아이유</div>
												
											</div>
											<div class="user-function">
												<button type="button" class="button block primary medium">팔로우 중</button>
											</div>
										</div>
									</li>
									<li>
										<div class="user">
											<a href="#;">
												<div class="user-img">
													<img src="/assets/tempImg/profile/ao.jpg" alt="프로필 이미지">
												</div>
											</a>
											<div class="user-info">
												<div class="info-nick"><a href="#;"><strong>_habim_</strong></a></div>
												<div class="info-name">박정은</div>
											</div>
											<div class="user-function">
												<button type="button" class="button block primary medium">팔로우 중</button>
											</div>
										</div>
									</li>
									<li>
										<div class="user">
											<a href="#;">
												<div class="user-img">
													<img src="/assets/tempImg/profile/ah.jpg" alt="프로필 이미지">
												</div>
											</a>
											<div class="user-info">
												<div class="info-nick"><a href="#;"><strong>i.jaesun</strong></a></div>
												<div class="info-name">김수영</div>
											</div>
											<div class="user-function">
												<button type="button" class="button block  medium">팔로우 하기</button>
											</div>
										</div>
									</li>
									<li>
										<div class="user">
											<a href="#;">
												<div class="user-img">
													<img src="/assets/tempImg/profile/h.jpg" alt="프로필 이미지">
												</div>
											</a>
											<div class="user-info">
												<div class="info-nick"><a href="#;"><strong>coral0128</strong></a></div>
												<div class="info-name">이운성</div>
											</div>
											<div class="user-function">
												<button type="button" class="button block primary medium">팔로우 중</button>
											</div>
										</div>
									</li>
									<li>
										<div class="user">
											<a href="#;">
												<div class="user-img">
													<img src="/assets/tempImg/profile/ae.jpg" alt="프로필 이미지">
												</div>
											</a>
											<div class="user-info">
												<div class="info-nick"><a href="#;"><strong>gimsuryeon2124</strong></a></div>
												<div class="info-name">심재익</div>
											</div>
											<div class="user-function">
												<button type="button" class="button block primary medium">팔로우 중</button>
											</div>
										</div>
									</li>
									<li>
										<div class="user">
											<a href="#;">
												<div class="user-img">
													<img src="/assets/tempImg/profile/af.jpg" alt="프로필 이미지">
												</div>
											</a>
											<div class="user-info">
												<div class="info-nick"><a href="#;"><strong>jake__kang</strong></a></div>
												<div class="info-name">아이유</div>
												
											</div>
											<div class="user-function">
												<button type="button" class="button block primary medium">팔로우 중</button>
											</div>
										</div>
									</li>
									<li>
										<div class="user">
											<a href="#;">
												<div class="user-img">
													<img src="/assets/tempImg/profile/ao.jpg" alt="프로필 이미지">
												</div>
											</a>
											<div class="user-info">
												<div class="info-nick"><a href="#;"><strong>dae_kwang_</strong></a></div>
												<div class="info-name">박정은</div>
											</div>
											<div class="user-function">
												<button type="button" class="button block primary medium">팔로우 중</button>
											</div>
										</div>
									</li>
									<li>
										<div class="user">
											<a href="#;">
												<div class="user-img">
													<img src="/assets/tempImg/profile/ah.jpg" alt="프로필 이미지">
												</div>
											</a>
											<div class="user-info">
												<div class="info-nick"><a href="#;"><strong>gentle_sb</strong></a></div>
												<div class="info-name">김수영</div>
											</div>
											<div class="user-function">
												<button type="button" class="button block  medium">팔로우 하기</button>
											</div>
										</div>
									</li>
									<li>
										<div class="user">
											<a href="#;">
												<div class="user-img">
													<img src="/assets/tempImg/profile/h.jpg" alt="프로필 이미지">
												</div>
											</a>
											<div class="user-info">
												<div class="info-nick"><a href="#;"><strong>meant4i</strong></a></div>
												<div class="info-name">이운성</div>
											</div>
											<div class="user-function">
												<button type="button" class="button block primary medium">팔로우 중</button>
											</div>
										</div>
									</li>
									<li>
										<div class="user">
											<a href="#;">
												<div class="user-img">
													<img src="/assets/tempImg/profile/ae.jpg" alt="프로필 이미지">
												</div>
											</a>
											<div class="user-info">
												<div class="info-nick"><a href="#;"><strong>dae_kwang_</strong></a></div>
												<div class="info-name">심재익</div>
											</div>
											<div class="user-function">
												<button type="button" class="button block primary medium">팔로우 중</button>
											</div>
										</div>
									</li>
									<li>
										<div class="user">
											<a href="#;">
												<div class="user-img">
													<img src="/assets/tempImg/profile/af.jpg" alt="프로필 이미지">
												</div>
											</a>
											<div class="user-info">
												<div class="info-nick"><a href="#;"><strong>ho__yaaaaa</strong></a></div>
												<div class="info-name">아이유</div>
												
											</div>
											<div class="user-function">
												<button type="button" class="button block primary medium">팔로우 중</button>
											</div>
										</div>
									</li>
									<li>
										<div class="user">
											<a href="#;">
												<div class="user-img">
													<img src="/assets/tempImg/profile/ao.jpg" alt="프로필 이미지">
												</div>
											</a>
											<div class="user-info">
												<div class="info-nick"><a href="#;"><strong>sum7700</strong></a></div>
												<div class="info-name">박정은</div>
											</div>
											<div class="user-function">
												<button type="button" class="button block primary medium">팔로우 중</button>
											</div>
										</div>
									</li>
									<li>
										<div class="user">
											<a href="#;">
												<div class="user-img">
													<img src="/assets/tempImg/profile/ah.jpg" alt="프로필 이미지">
												</div>
											</a>
											<div class="user-info">
												<div class="info-nick"><a href="#;"><strong>bamv__hm</strong></a></div>
												<div class="info-name">김수영</div>
											</div>
											<div class="user-function">
												<button type="button" class="button block  medium">팔로우 하기</button>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- 모달 바디 End -->

						<!-- 모달 푸터 -->
						<div class="modal-footer">
							<button type="button" class="button secondary block x-large close" tabindex="0">취소</button>
						</div>
						<!-- 모달 푸터 End -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 함께 보낸 분 End -->

	
	<!-- 사진 보기 -->
	<div class="modal-dimmed modal-photo" tabindex="0">
		<a href="#modal" class="modal-close close">닫기<span class="hidden">닫기</span></a>
		<!-- Swiper -->
		<div class="swiper-container">
			<ul class="swiper-wrapper">
				
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/friends.jpg)"></li>
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/food2.jpg)"></li>
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/meet2.jpg)"></li>
				
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/game.jpg)"></li>
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/game2.jpg)"></li>
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/game3.jpg)"></li>

				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/present-1.jpg);"></li>
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/present-2.jpg);"></li>
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/present.jpg)"></li>

				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/hobby.jpg);"></li>
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/animal-forest-card.jpg);"></li>

				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/birthday.jpg);"></li>
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/cart1.jpg);"></li>
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/cart2.jpg);"></li>
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/cart3.jpg);"></li>


				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/cat.jpg);"></li>
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/dog.jpg);"></li>

				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/mom.jpg)"></li>
				
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/baby4.jpg)"></li>
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/baby2.jpg)"></li>
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/baby3.jpg)"></li>
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/baby5.jpg)"></li>

				<!-- <li class="swiper-slide" style="background-image:url(assets/tempImg/photo/mom2.jpg);"></li> -->

				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/sports3.jpg);"></li>
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/sports6.jpg);"></li>
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/sports4.jpg);"></li>
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/sports5.jpg);"></li>

				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/singer0.jpg);"></li>
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/singer2.jpg);"></li>
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/singer3.jpg);"></li>

				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/normal.jpg)"></li>
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/nurse.jpg);"></li>
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/firefighter.jpg);"></li>
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/chicken.jpg);"></li>

				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/god.jpg);"></li>
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/god2.jpg);"></li>

				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/politics.jpg);"></li>
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/politics2.jpg);"></li>
				<li class="swiper-slide" style="background-image:url(assets/tempImg/photo/politics3.png);"></li>
			</ul>
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
			<!-- Add Arrows -->
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
		<!-- Swiper End -->
	</div>
	<!-- 사진 보기 End -->

    <!-- 사진 보기 S -->
    <div class="modal-dimmed modal-skill" tabindex="0">
        <div class="modal">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-content">
                        <div class="modal-close">
                            <a href="#modal" class="modal-close close">×<span class="hidden">닫기</span></a>
                        </div>
                        <!-- 모달 헤더 -->
                        <div class="modal-header">
                            <h2>{닉네임}님의 스킬
                                <a href="/assets/img/sample/sample-01.png" target="_blank"><img class="concept" src="/assets/img/sample/concept-01.png" alt=""></a>
                                <a href="/assets/img/sample/sample-02.png" target="_blank"><img class="concept" src="/assets/img/sample/concept-02.png" alt=""></a>
                                <a href="/assets/img/sample/sample-03.png" target="_blank"><img class="concept" src="/assets/img/sample/concept-03.png" alt=""></a>
                                <a href="/assets/img/sample/sample-06.png" target="_blank"><img class="concept" src="/assets/img/sample/concept-04.png" alt=""></a>
                                <a href="/assets/img/sample/sample-04.png" target="_blank"><img class="concept" src="/assets/img/sample/concept-01.png" alt=""></a>
                                <a href="/assets/img/sample/sample-05.png" target="_blank"><img class="concept" src="/assets/img/sample/concept-02.png" alt=""></a>
                            </h2>
                        </div>
                        <!-- 모달 헤더 End -->

                        <!-- 모달 바디 -->
                        <div class="modal-body">
                            <div class="user-skill-grp" style="margin:0 auto;width:278px;height:300px;">
                            </div>
                            <div class="user-skill-detail-grp">
                                <div class="user-skill-detail-header">
                                    어빌리티
                                </div>
                                <style>
                                    .user-skill-detail-header{font-weight:600;}
                                    .user-skill-detail-body{margin-top:10px;}
                                    .user-skill-detail-layout{}
                                    .user-skill-detail-layout ul{overflow:hidden;}
                                    .user-skill-detail-layout li{float:left;width:50%;display:flex;padding:5px 0;}
                                    .user-skill-detail-layout .user-skill-detail-title{float:left;width:50%;font-size:14px;display:flex;align-items:center;justify-content:center;font-weight:600;overflow:auto;word-break:keep-all;}
                                    .user-skill-detail-layout .user-skill-detail-title span{display:inline-block;padding:0 5px;}
                                    .user-skill-detail-layout .user-skill-detail-value{float:left;width:50%;font-size:12px;display:flex;align-items:center;justify-content:center;}
                                    .user-skill-detail-layout .user-skill-detail-value span{display:inline-block;padding-right:5px;}
                                    .user-skill-detail-layout .user-skill-detail-value span:nth-last-of-type(1){padding-right:0px;}
                                </style>
                                <div class="user-skill-detail-body">
                                    <div class="user-skill-detail-layout">
                                        <ul>
                                            <li>
                                                <div class="user-skill-detail-title"><span class="user-skill-detail-label">다정함</span></div>
                                                <div class="user-skill-detail-value"><span class="point">50</span><span class="percent">(10%)</span></div>
                                            </li>
                                            <li>
                                                <div class="user-skill-detail-title"><span class="user-skill-detail-label">스타크래프트</span></div>
                                                <div class="user-skill-detail-value"><span class="point">50</span><span class="percent">(10%)</span></div>
                                            </li>
                                            <li>
                                                <div class="user-skill-detail-title"><span class="user-skill-detail-label">퍼블리싱</span></div>
                                                <div class="user-skill-detail-value"><span class="point">50</span><span class="percent">(10%)</span></div>
                                            </li>
                                            <li>
                                                <div class="user-skill-detail-title"><span class="user-skill-detail-label">디자인</span></div>
                                                <div class="user-skill-detail-value"><span class="point">50</span><span class="percent">(10%)</span></div>
                                            </li>
                                            <li>
                                                <div class="user-skill-detail-title"><span class="user-skill-detail-label">자바스크립트</span></div>
                                                <div class="user-skill-detail-value"><span class="point">50</span><span class="percent">(10%)</span></div>
                                            </li>
                                            <li>
                                                <div class="user-skill-detail-title"><span class="user-skill-detail-label">다크소울3</span></div>
                                                <div class="user-skill-detail-value"><span class="point">50</span><span class="percent">(10%)</span></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 모달 바디 End -->

                        <!-- 모달 푸터 -->
                        <div class="modal-footer">
                            <button type="button" class="button secondary block x-large close" tabindex="0">취소</button>
                        </div>
                        <!-- 모달 푸터 End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 유저 팝업 End -->
    <script type="text/javascript">
        $(document).ready(function(){
            // Initialize the echarts instance based on the prepared dom
            var myChart2 = echarts.init(document.querySelector('.modal-skill .user-skill-grp'), null, {
            });

            // Specify the configuration items and data for the chart
            var option = {

                color: ['#cc1d5c',],
                // title: {
                //   text: 'Customized Radar Chart'
                // },

                // legend: {},

                radar: [
                    {
                        shape: '',
                        indicator: [ //요소
                            { text: '유머', max: 100 },
                            { text: '맥북', max: 100 },
                            { text: '독서', max: 100 },
                            { text: '게임', max: 100 },
                            { text: '장난기', max: 100 },
                            { text: '진지', max: 100 }
                        ],
                        center: ['50%', '50%'], //위치
                        radius: 100, //크기;
                        axisName: { //수치
                            color: '#000',
                            backgroundColor: 'transparent',
                            borderRadius: 1,
                            padding: [-0, -0],
                            fontSize:12,
                            fontFamily:'Noto Sans KR',
                        },
                        splitArea: { //수치 안쪽 영역
                            areaStyle: {
                                color: ['#fbd88a']//배경색
                            }
                        },
                        axisTick: {
                            show: false,
                            lineStyle: {
                                color: 'rgba(255, 255, 255, 0.8)'
                            }
                        },

                        axisLabel: { //수치 안쪽 라벨
                            show: false,
                            textStyle: {
                                color: 'white'
                            }
                        },

                        axisLine: { //수치 안쪽 경계 표시
                            lineStyle: {
                                color: 'transparent'
                            }
                        },

                        splitLine: { //수치 안쪽 경계 표시
                            lineStyle: {
                                color: 'transparent'
                            },
                        }
                    }
                ],

                series: [
                    {
                        type: 'radar',
                        emphasis: {
                            lineStyle: {
                                width: 5
                            }
                        },

                        data: [
                            {
                                label: {
                                    show: true,
                                    formatter: function (params) {
                                        return params.value;
                                    },
                                    padding: [-10, -10],
                                },

                                value: [99, 85, 100, 90, 100, 88],
                                name: 'Skill Point',
                                areaStyle: {
                                    color: 'rgba(243, 148, 148, 0.8)'//스킬 내 배경 색
                                }
                            }
                        ]
                    },

                ]

            };

            // Display the chart using the configuration items and data just specified.
            myChart2.setOption(option);
        })

    </script>


