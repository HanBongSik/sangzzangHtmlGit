
	<!-- 로그인 -->
    <div class="modal-dimmed" id="modalLogin">
        <div class="modal-full modal-height-max-full">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-content" data-ani-on="modal-ani-big" data-ani-off="modal-ani-big-small">
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
                            <div class="g login">
                                <div class="r">
                                    <div class="c center-right">
                                        <span class="forms">
                                            <input type="checkbox" class="xs" name="loginAuto" value="loginAuto" id="loginAuto" checked="checked">
                                            <label for="loginAuto">자동 로그인</label>
                                        </span>
                                    </div>
                                </div>
                                <div class="r">
                                    <span class="forms forms-full">
                                        <input type="text" class="md" value="" placeholder="아이디">
                                    </span>
                                </div>
                                <div class="r">
                                    <span class="forms forms-full">
                                        <input type="text" class="md" value="" placeholder="패스워드">
                                    </span>
                                </div>
                                <div class="r">
                                    <div class="login__login-lnk">
                                        <a href="member_find_id.php">아이디 찾기</a>&nbsp;|&nbsp;
                                        <a href="member_find_pwd.php">비밀번호 찾기</a>&nbsp;|&nbsp;
                                        <a href="member_join.php">회원가입</a>
                                    </div>
                                </div>
                                <style>
                                    .login > .r{margin-bottom:10px;}
                                    .login > .r:nth-last-of-type(1){margin-bottom:0;}
                                    .login__login-lnk{width:100%;text-align:center;}
                                    .login-sns{display:block;width:100%;}
                                    .login-sns__outer{display:inline-block;text-align:center;}
                                    .login-sns__img{display:block;width:100%;max-height:40px;}
                                </style>
                                <div class="r">
                                    <div class="login-sns">
                                        <a href="#;" class="login-sns__outer"><img class="login-sns__img" src="/assets/img/naver.png" alt="네이버"></a>
                                        <a href="#;" class="login-sns__outer"><img class="login-sns__img" src="/assets/img/kakao.png" alt="카카오톡"></a>
                                        <a href="#;" class="login-sns__outer"><img class="login-sns__img" src="/assets/img/google.png" alt="구글"></a>
                                        <a href="#;" class="login-sns__outer"><img class="login-sns__img" src="/assets/img/facebook.png" alt="페이스북"></a>
                                        <a href="#;" class="login-sns__outer"><img class="login-sns__img" src="/assets/img/instagram.png" alt="인스타그램"></a>
                                        <!--
                                        <a href="#;"><img src="./assets/img/kakaostory.png" alt="카카오스토리"></a>
                                        -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 모달 헤더 End -->

                        <!-- 모달 푸터 -->
                        <div class="modal-footer">
                            <button class="btn">로그인</button>
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
    <div class="modal-dimmed" id="modalSearch">
        <div class="modal-full modal-height-full">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-content" data-ani-on="modal-ani-up" data-ani-off="modal-ani-up-down">
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
                                    <div class="g search-input">
                                        <div class="r gap-hor-sm">
                                            <div class="c">
                                                <span class="forms forms-full">
                                                    <input type="text" placeholder="검색어를 입력하세요" value="" id="inputKeyward" class="INPUT-RESET">
                                                    <button class="INPUT-RESET-BTN" data-target="#inputKeyward">×</button>
                                                </span>
                                            </div>
                                            <div class="c c-inner-width">
                                                <div class="search-btn">
                                                    <span class="forms">
                                                        <button type="button" class="btn-search">검색</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab search_tab">
                                    <div class="tab__list fixed">
                                        <ul>
                                            <li class="active"><a href="#tabSearchAll" data-target="#tabSearchAll">전체</a></li>
                                            <li><a href="#tabSearchUser" data-target="#tabSearchUser">회원</a></li>
                                            <!--                                        <li><a href="#tabSearchTag">태그</a></li>-->
                                            <li><a href="#tabSearchSkill" data-target="#tabSearchSkill">스킬</a></li>
                                            <li><a href="#tabSearchSz" data-target="#tabSearchSz">상장</a></li>
                                        </ul>
                                    </div>



                                    <!-- tabs End -->
                                    <!-- panels -->
                                    <div class="panels">
                                        <div id="tabSearchAll" class="panel active" tabindex="0">
                                            <!-- 전체 검색 -->_all
                                            <?php include("$path/include/include_temp/inc_search_all.php"); ?>
                                            <!-- 전체 검색 End -->
                                        </div>
                                        <div id="tabSearchUser" class="panel" tabindex="0">
                                            <!-- 회원 검색 -->01
                                            <?php include("$path/include/include_temp/inc_search_01.php"); ?>
                                            <!-- 회원 검색 End -->
                                        </div>

                                        <div id="tabSearchTag" class="panel" tabindex="0">
                                            <!-- 태그 검색 -->02
                                            <?php /* include("include/include_temp/inc_search_02.php"); */ ?>
                                            <!-- 태그 검색 End -->
                                        </div>

                                        <div id="tabSearchSkill" class="panel" tabindex="0">
                                            <!-- 스킬 검색 -->03
                                            <?php include("$path/include/include_temp/inc_search_03.php"); ?>
                                            <!-- 스킬 검색 End -->
                                        </div>

                                        <div id="tabSearchSz" class="panel" tabindex="0">
                                            <!-- 상짱 검색 -->04
                                            <?php include("$path/include/include_temp/inc_search_04.php"); ?>
                                            <!-- 상짱 검색 End -->
                                        </div>

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

    <!-- 스티커 선택 -->
    <style>
        #modalSticker .modal-content{max-width:500px !important;width:100% !important;float:left !important;height:calc(var(--vh) - 0px) !important;max-height:calc(var(--vh) - 0px) !important;}
        #modalSticker .sticker-choice{}
        #modalSticker .sticker-choice li {float:left;width:33%;text-align:center;padding:10px;}
        #modalSticker .sticker-choice li img{display:block;width:100%;}
    </style>
    <div class="modal-dimmed" id="modalSticker">
        <div class="modal-full modal-height-full">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-content" data-ani-on="modal-ani-left" data-ani-off="modal-ani-left-right">
                        <div class="modal-close">
                            <a href="#modal" class="MODAL-CLOSE">×<span class="hidden">닫기</span></a>
                        </div>
                        <!-- 모달 헤더 -->
                        <div class="modal-header">
                            <h2>스티커 선택</h2>
                        </div>
                        <!-- 모달 헤더 End -->

                        <!-- 모달 바디 -->
                        <div class="modal-body">
                            <div class="sticker-choice">
                                <ul class="row">
                                    <li class="col-3">
                                        <a href="#;">
                                            <img class="sticker" src="/assets/img/design/stk/sz_stk_000002.png" alt="">
                                        </a>
                                    </li>
                                    <li class="col-3">
                                        <a href="#;">
                                            <img class="sticker" src="/assets/img/design/stk/sz_stk_000003.png" alt="">
                                        </a>
                                    </li>
                                    <li class="col-3">
                                        <a href="#;">
                                            <img class="sticker" src="/assets/img/design/stk/sz_stk_000004.png" alt="">
                                        </a>
                                    </li>
                                    <li class="col-3">
                                        <a href="#;">
                                            <img class="sticker" src="/assets/img/design/stk/sz_stk_000005.png" alt="">
                                        </a>
                                    </li>
                                    <li class="col-3">
                                        <a href="#;">
                                            <img class="sticker" src="/assets/img/design/stk/sz_stk_000006.png" alt="">
                                        </a>
                                    </li>
                                    <li class="col-3">
                                        <a href="#;">
                                            <img class="sticker" src="/assets/img/design/stk/sz_stk_000007.png" alt="">
                                        </a>
                                    </li>
                                    <li class="col-3">
                                        <a href="#;">
                                            <img class="sticker" src="/assets/img/design/stk/sz_stk_000008.png" alt="">
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
	<!-- 스티커 선택 End -->

    <!-- 도장 선택 -->
    <style>
        #modalStamp .modal-content{max-width:500px !important;width:100% !important;float:right !important;height:calc(var(--vh) - 0px) !important;max-height:calc(var(--vh) - 0px) !important;}
        #modalStamp .stamp-choice{}
        #modalStamp .stamp-choice li {float:left;width:33%;text-align:center;padding:10px;}
        #modalStamp .stamp-choice li img{display:block;width:100%;}
    </style>
    <div class="modal-dimmed" id="modalStamp">
        <div class="modal-full modal-height-full">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-content" data-ani-on="modal-ani-right" data-ani-off="modal-ani-right-left">
                        <div class="modal-close">
                            <a href="#modal" class="MODAL-CLOSE">×<span class="hidden">닫기</span></a>
                        </div>
                        <!-- 모달 헤더 -->
                        <div class="modal-header">
                            <h2>스티커 선택</h2>
                        </div>
                        <!-- 모달 헤더 End -->

                        <!-- 모달 바디 -->
                        <div class="modal-body">
                            <div class="stamp-choice">
                                <ul class="row">
                                    <li class="col-3">
                                        <a href="#;">
                                            <img class="stamp" src="/assets/img/design/stp/sz_stp_000002.png" alt="">
                                        </a>
                                    </li>
                                    <li class="col-3">
                                        <a href="#;">
                                            <img class="stamp" src="/assets/img/design/stp/sz_stp_000003.png" alt="">
                                        </a>
                                    </li>
                                    <li class="col-3">
                                        <a href="#;">
                                            <img class="stamp" src="/assets/img/design/stp/sz_stp_000004.png" alt="">
                                        </a>
                                    </li>
                                    <li class="col-3">
                                        <a href="#;">
                                            <img class="stamp" src="/assets/img/design/stp/sz_stp_000005.png" alt="">
                                        </a>
                                    </li>
                                    <li class="col-3">
                                        <a href="#;">
                                            <img class="stamp" src="/assets/img/design/stp/sz_stp_000006.png" alt="">
                                        </a>
                                    </li>
                                    <li class="col-3">
                                        <a href="#;">
                                            <img class="stamp" src="/assets/img/design/stp/sz_stp_000007.png" alt="">
                                        </a>
                                    </li>
                                    <li class="col-3">
                                        <a href="#;">
                                            <img class="stamp" src="/assets/img/design/stp/sz_stp_000008.png" alt="">
                                        </a>
                                    </li>
                                    <li class="col-3">
                                        <a href="#;">
                                            <img class="stamp" src="/assets/img/design/stp/sz_stp_qr.png" alt="">
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
    <!-- 스티커 선택 End -->
    

	<!-- 알람 모달 팝업 -->
    <div class="modal-dimmed" id="modalAlarm">
        <div class="modal-full modal-height-max-full">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-content" data-ani-on="modal-ani-target" data-ani-off="modal-ani-target-target">
                        <div class="modal-close">
                            <a href="#modal" class="MODAL-CLOSE">×<span class="hidden">닫기</span></a>
                        </div>
                        <!-- 모달 헤더 -->
                        <div class="modal-header">
                            <h2>알람</h2>
                        </div>
                        <!-- 모달 헤더 End -->

                        <!-- 모달 바디 -->
                        <div class="modal-body">
                            <div class="user-list">
                                <ul>
                                    <li>

                                        <div class="g g-pd-sm user-action-info">
                                            <div class="r">
                                                <!--                                        <div class="c c-float">-->
                                                <!--                                            <div class="num">1</div>-->
                                                <!--                                        </div>-->
                                                <div class="c c-inner-width">
                                                    <div class="img-profile">
                                                        <div class="img-profile-outer">
                                                            <img class="img-profile-outer__img" src="/assets/tempImg/profile/g.jpg" alt="프로필 이미지">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="c">
                                                    <div class="g">
                                                        <div class="r">
                                                            <div class="c">
                                                                <div class="user-action-info-detail">
                                                                    <span class="user-id">lilyiu_</span>
                                                                    <span class="user-action">님이 상장을 보냈습니다.</span>
                                                                    <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="r">
                                                            <div class="c">
                                                                <div class="user-action-info-detail">
<!--                                                                    <span class="user-name">아이유</span>-->
                                                                    <span class="user-action-date">23.10.17 10 11</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--                                                <div class="r">-->
                                                        <!--                                                    <div class="c">-->
                                                        <!--                                                        <div class="skill-list">-->
                                                        <!--                                                            개발자 화가 축구 JAVA 서피스북-->
                                                        <!--                                                        </div>-->
                                                        <!--                                                    </div>-->
                                                        <!--                                                </div>-->
                                                    </div>
                                                </div>
                                                <div class="c c-inner-width">
                                                    <div class="btn-user-action">
                                                        <span class="forms">
                                                            <button type="button" class="btn-primary">팔로우중</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </li>

                                    <li>
                                        <div class="g g-pd-sm user-action-info">
                                            <div class="r">
                                                <!--                                        <div class="c c-float">-->
                                                <!--                                            <div class="num">1</div>-->
                                                <!--                                        </div>-->
                                                <div class="c c-inner-width">
                                                    <div class="img-profile">
                                                        <div class="img-profile-outer">
                                                            <img class="img-profile-outer__img" src="/assets/tempImg/profile/l.jpg" alt="프로필 이미지">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="c">
                                                    <div class="g">
                                                        <div class="r">
                                                            <div class="c">
                                                                <div class="user-action-info-detail">
                                                                    <span class="user-id">ssuiming_yo</span>
                                                                    <span class="user-action">님이 상장을 보냈습니다.</span>
                                                                    <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="r">
                                                            <div class="c">
                                                                <div class="user-action-info-detail">
<!--                                                                    <span class="user-name">이수민</span>-->
                                                                    <span class="user-action-date">23.10.17 10 11</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--                                                <div class="r">-->
                                                        <!--                                                    <div class="c">-->
                                                        <!--                                                        <div class="skill-list">-->
                                                        <!--                                                            개발자 화가 축구 JAVA 서피스북-->
                                                        <!--                                                        </div>-->
                                                        <!--                                                    </div>-->
                                                        <!--                                                </div>-->
                                                    </div>
                                                </div>
                                                <div class="c c-inner-width">
                                                    <div class="btn-user-action">
                                                        <span class="forms">
                                                            <button type="button" class="btn-gray">팔로우하기</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="g g-pd-sm user-action-info">
                                            <div class="r">
                                                <!--                                        <div class="c c-float">-->
                                                <!--                                            <div class="num">1</div>-->
                                                <!--                                        </div>-->
                                                <div class="c c-inner-width">
                                                    <div class="img-profile">
                                                        <div class="img-profile-outer">
                                                            <img class="img-profile-outer__img" src="/assets/tempImg/profile/am.jpg" alt="프로필 이미지">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="c">
                                                    <div class="g">
                                                        <div class="r">
                                                            <div class="c">
                                                                <div class="user-action-info-detail">
                                                                    <span class="user-id">j.__en</span>
                                                                    <span class="user-action">님이 상장을 보냈습니다.</span>
                                                                    <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="r">
                                                            <div class="c">
                                                                <div class="user-action-info-detail">
<!--                                                                    <span class="user-name">박정은</span>-->
                                                                    <span class="user-action-date">23.10.17 10 11</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--                                                <div class="r">-->
                                                        <!--                                                    <div class="c">-->
                                                        <!--                                                        <div class="skill-list">-->
                                                        <!--                                                            개발자 화가 축구 JAVA 서피스북-->
                                                        <!--                                                        </div>-->
                                                        <!--                                                    </div>-->
                                                        <!--                                                </div>-->
                                                    </div>
                                                </div>
                                                <div class="c c-inner-width">
                                                    <div class="btn-user-action">
                                                        <span class="forms">
                                                            <button type="button" class="btn-primary">팔로우</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="g g-pd-sm user-action-info">
                                            <div class="r">
                                                <!--                                        <div class="c c-float">-->
                                                <!--                                            <div class="num">1</div>-->
                                                <!--                                        </div>-->
                                                <div class="c c-inner-width">
                                                    <div class="img-profile">
                                                        <div class="img-profile-outer">
                                                            <img class="img-profile-outer__img" src="/assets/tempImg/profile/be.jpg" alt="프로필 이미지">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="c">
                                                    <div class="g">
                                                        <div class="r">
                                                            <div class="c">
                                                                <div class="user-action-info-detail">
                                                                    <span class="user-id">gentle_sb</span>
                                                                    <span class="user-action">님이 상장을 보냈습니다.</span>
                                                                    <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="r">
                                                            <div class="c">
                                                                <div class="user-action-info-detail">
<!--                                                                    <span class="user-name">진구</span>-->
                                                                    <span class="user-action-date">23.10.17 10 11</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--                                                <div class="r">-->
                                                        <!--                                                    <div class="c">-->
                                                        <!--                                                        <div class="skill-list">-->
                                                        <!--                                                            개발자 화가 축구 JAVA 서피스북-->
                                                        <!--                                                        </div>-->
                                                        <!--                                                    </div>-->
                                                        <!--                                                </div>-->
                                                    </div>
                                                </div>
                                                <div class="c c-inner-width">
                                                    <div class="btn-user-action">
                                                        <span class="forms">
                                                            <button type="button" class="btn-primary">팔로우</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="g g-pd-sm user-action-info">
                                            <div class="r">
                                                <!--                                        <div class="c c-float">-->
                                                <!--                                            <div class="num">1</div>-->
                                                <!--                                        </div>-->
                                                <div class="c c-inner-width">
                                                    <div class="img-profile">
                                                        <div class="img-profile-outer">
                                                            <img class="img-profile-outer__img" src="/assets/tempImg/profile/ax.jpg" alt="프로필 이미지">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="c">
                                                    <div class="g">
                                                        <div class="r">
                                                            <div class="c">
                                                                <div class="user-action-info-detail">
                                                                    <span class="user-id">street__spirit</span>
                                                                    <span class="user-action">님이 상장을 보냈습니다.</span>
                                                                    <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="r">
                                                            <div class="c">
                                                                <div class="user-action-info-detail">
<!--                                                                    <span class="user-name">궤도</span>-->
                                                                    <span class="user-action-date">23.10.17 10 11</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--                                                <div class="r">-->
                                                        <!--                                                    <div class="c">-->
                                                        <!--                                                        <div class="skill-list">-->
                                                        <!--                                                            개발자 화가 축구 JAVA 서피스북-->
                                                        <!--                                                        </div>-->
                                                        <!--                                                    </div>-->
                                                        <!--                                                </div>-->
                                                    </div>
                                                </div>
                                                <div class="c c-inner-width">
                                                    <div class="btn-user-action">
                                            <span class="forms">
                                                <button type="button" class="btn-primary">팔로우</button>
                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <!--
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
                            -->
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



    <!-- 함께 보낸 분 모달 팝업 -->
    <div class="modal-dimmed" id="modalWith" data-ani-on="modal-ani-opacity" data-ani-off="modal-ani-opacity-opacity">
        <div class="modal-full modal-height-max-full">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-content" data-ani-on="modal-ani-target" data-ani-off="modal-ani-target-target">
                        <div class="modal-close">
                            <a href="#modal" class="MODAL-CLOSE">×<span class="hidden">닫기</span></a>
                        </div>
                        <!-- 모달 헤더 -->
                        <div class="modal-header">
                            <h2>함께 보낸 분들</h2>
                        </div>
                        <!-- 모달 헤더 End -->

                        <!-- 모달 바디 -->
                        <div class="modal-body">
                            <div class="user-list">
                                <ul>
                                    <li>

                                        <div class="g g-pd-sm user-action-info">
                                            <div class="r">
                                                <!--                                        <div class="c c-float">-->
                                                <!--                                            <div class="num">1</div>-->
                                                <!--                                        </div>-->
                                                <div class="c c-inner-width">
                                                    <div class="img-profile">
                                                        <div class="img-profile-outer">
                                                            <img class="img-profile-outer__img" src="/assets/tempImg/profile/g.jpg" alt="프로필 이미지">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="c">
                                                    <div class="g">
                                                        <div class="r">
                                                            <div class="c">
                                                                <div class="user-action-info-detail">
                                                                    <span class="user-id">lilyiu_</span>
                                                                    <span class="user-action">님이 상장을 보냈습니다.</span>
                                                                    <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="r">
                                                            <div class="c">
                                                                <div class="user-action-info-detail">
                                                                    <!--                                                                    <span class="user-name">아이유</span>-->
                                                                    <span class="user-action-date">23.10.17 10 11</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--                                                <div class="r">-->
                                                        <!--                                                    <div class="c">-->
                                                        <!--                                                        <div class="skill-list">-->
                                                        <!--                                                            개발자 화가 축구 JAVA 서피스북-->
                                                        <!--                                                        </div>-->
                                                        <!--                                                    </div>-->
                                                        <!--                                                </div>-->
                                                    </div>
                                                </div>
                                                <div class="c c-inner-width">
                                                    <div class="btn-user-action">
                                                        <span class="forms">
                                                            <button type="button" class="btn-primary">팔로우중</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </li>

                                    <li>
                                        <div class="g g-pd-sm user-action-info">
                                            <div class="r">
                                                <!--                                        <div class="c c-float">-->
                                                <!--                                            <div class="num">1</div>-->
                                                <!--                                        </div>-->
                                                <div class="c c-inner-width">
                                                    <div class="img-profile">
                                                        <div class="img-profile-outer">
                                                            <img class="img-profile-outer__img" src="/assets/tempImg/profile/l.jpg" alt="프로필 이미지">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="c">
                                                    <div class="g">
                                                        <div class="r">
                                                            <div class="c">
                                                                <div class="user-action-info-detail">
                                                                    <span class="user-id">ssuiming_yo</span>
                                                                    <span class="user-action">님이 상장을 보냈습니다.</span>
                                                                    <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="r">
                                                            <div class="c">
                                                                <div class="user-action-info-detail">
                                                                    <!--                                                                    <span class="user-name">이수민</span>-->
                                                                    <span class="user-action-date">23.10.17 10 11</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--                                                <div class="r">-->
                                                        <!--                                                    <div class="c">-->
                                                        <!--                                                        <div class="skill-list">-->
                                                        <!--                                                            개발자 화가 축구 JAVA 서피스북-->
                                                        <!--                                                        </div>-->
                                                        <!--                                                    </div>-->
                                                        <!--                                                </div>-->
                                                    </div>
                                                </div>
                                                <div class="c c-inner-width">
                                                    <div class="btn-user-action">
                                                        <span class="forms">
                                                            <button type="button" class="btn-gray">팔로우하기</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="g g-pd-sm user-action-info">
                                            <div class="r">
                                                <!--                                        <div class="c c-float">-->
                                                <!--                                            <div class="num">1</div>-->
                                                <!--                                        </div>-->
                                                <div class="c c-inner-width">
                                                    <div class="img-profile">
                                                        <div class="img-profile-outer">
                                                            <img class="img-profile-outer__img" src="/assets/tempImg/profile/am.jpg" alt="프로필 이미지">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="c">
                                                    <div class="g">
                                                        <div class="r">
                                                            <div class="c">
                                                                <div class="user-action-info-detail">
                                                                    <span class="user-id">j.__en</span>
                                                                    <span class="user-action">님이 상장을 보냈습니다.</span>
                                                                    <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="r">
                                                            <div class="c">
                                                                <div class="user-action-info-detail">
                                                                    <!--                                                                    <span class="user-name">박정은</span>-->
                                                                    <span class="user-action-date">23.10.17 10 11</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--                                                <div class="r">-->
                                                        <!--                                                    <div class="c">-->
                                                        <!--                                                        <div class="skill-list">-->
                                                        <!--                                                            개발자 화가 축구 JAVA 서피스북-->
                                                        <!--                                                        </div>-->
                                                        <!--                                                    </div>-->
                                                        <!--                                                </div>-->
                                                    </div>
                                                </div>
                                                <div class="c c-inner-width">
                                                    <div class="btn-user-action">
                                                        <span class="forms">
                                                            <button type="button" class="btn-primary">팔로우</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="g g-pd-sm user-action-info">
                                            <div class="r">
                                                <!--                                        <div class="c c-float">-->
                                                <!--                                            <div class="num">1</div>-->
                                                <!--                                        </div>-->
                                                <div class="c c-inner-width">
                                                    <div class="img-profile">
                                                        <div class="img-profile-outer">
                                                            <img class="img-profile-outer__img" src="/assets/tempImg/profile/be.jpg" alt="프로필 이미지">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="c">
                                                    <div class="g">
                                                        <div class="r">
                                                            <div class="c">
                                                                <div class="user-action-info-detail">
                                                                    <span class="user-id">gentle_sb</span>
                                                                    <span class="user-action">님이 상장을 보냈습니다.</span>
                                                                    <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="r">
                                                            <div class="c">
                                                                <div class="user-action-info-detail">
                                                                    <!--                                                                    <span class="user-name">진구</span>-->
                                                                    <span class="user-action-date">23.10.17 10 11</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--                                                <div class="r">-->
                                                        <!--                                                    <div class="c">-->
                                                        <!--                                                        <div class="skill-list">-->
                                                        <!--                                                            개발자 화가 축구 JAVA 서피스북-->
                                                        <!--                                                        </div>-->
                                                        <!--                                                    </div>-->
                                                        <!--                                                </div>-->
                                                    </div>
                                                </div>
                                                <div class="c c-inner-width">
                                                    <div class="btn-user-action">
                                                        <span class="forms">
                                                            <button type="button" class="btn-primary">팔로우</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="g g-pd-sm user-action-info">
                                            <div class="r">
                                                <!--                                        <div class="c c-float">-->
                                                <!--                                            <div class="num">1</div>-->
                                                <!--                                        </div>-->
                                                <div class="c c-inner-width">
                                                    <div class="img-profile">
                                                        <div class="img-profile-outer">
                                                            <img class="img-profile-outer__img" src="/assets/tempImg/profile/ax.jpg" alt="프로필 이미지">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="c">
                                                    <div class="g">
                                                        <div class="r">
                                                            <div class="c">
                                                                <div class="user-action-info-detail">
                                                                    <span class="user-id">street__spirit</span>
                                                                    <span class="user-action">님이 상장을 보냈습니다.</span>
                                                                    <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="r">
                                                            <div class="c">
                                                                <div class="user-action-info-detail">
                                                                    <!--                                                                    <span class="user-name">궤도</span>-->
                                                                    <span class="user-action-date">23.10.17 10 11</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--                                                <div class="r">-->
                                                        <!--                                                    <div class="c">-->
                                                        <!--                                                        <div class="skill-list">-->
                                                        <!--                                                            개발자 화가 축구 JAVA 서피스북-->
                                                        <!--                                                        </div>-->
                                                        <!--                                                    </div>-->
                                                        <!--                                                </div>-->
                                                    </div>
                                                </div>
                                                <div class="c c-inner-width">
                                                    <div class="btn-user-action">
                                            <span class="forms">
                                                <button type="button" class="btn-primary">팔로우</button>
                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <!--
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
                            -->
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
    <!-- 함께 보낸 분 팝업 End -->

    <!-- 포스트 더보기 팝업  -->
    <div class="modal-dimmed" id="modalMore">
        <div class="modal">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-content" data-ani-on="modal-ani-target" data-ani-off="modal-ani-target-target">
                        <div class="modal-close">
                            <a href="#modal" class="MODAL-CLOSE">×<span class="hidden">닫기</span></a>
                        </div>
                        <!-- 모달 헤더 -->
                        <div class="modal-header">
                            <h2>더보기</h2>
                        </div>
                        <!-- 모달 헤더 End -->

                        <!-- 모달 바디 -->
                        <div class="modal-body">
                            <ul class="modal-list">
                                <li><a href="#;">신고하기</a></li>
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
    <!-- 포스트 더보기 팝업 End -->

	
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

    <!-- 스킬 보기 -->
    <div class="modal-dimmed" id="modalSkill">
        <div class="modal-full modal-height-full">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-content" data-ani-on="modal-ani-target" data-ani-off="modal-ani-target-target">
                        <div class="modal-close">
                            <a href="#modal" class="MODAL-CLOSE">×<span class="hidden">닫기</span></a>
                        </div>
                        <!-- 모달 헤더 -->
                        <div class="modal-header">
                            <h2>한봉식님의 스킬</h2>
                        </div>
                        <!-- 모달 헤더 End -->

                        <!-- 모달 바디 -->
                        <div class="modal-body">
                            <div class="g g-pd-sm user-action-info">
                                <div class="r">
                                    <!--                                        <div class="c c-float">-->
                                    <!--                                            <div class="num">1</div>-->
                                    <!--                                        </div>-->
                                    <div class="c c-inner-width">
                                        <div class="img-profile">
                                            <div class="img-profile-outer">
                                                <img class="img-profile-outer__img" src="/assets/tempImg/profile/hbs.jpg" alt="프로필 이미지">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c">
                                        <div class="g">
                                            <div class="r">
                                                <div class="c">
                                                    <div class="user-action-info-detail">
                                                        <span class="user-id">bongsikhan</span>
                                                        <!--                                                            <span class="user-action">님이 상장을 보냈습니다.</span>-->
                                                        <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="r">
                                                <div class="c">
                                                    <div class="user-action-info-detail">
                                                        <span class="user-name">한봉식</span>
                                                        <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--                                                <div class="r">-->
                                            <!--                                                    <div class="c">-->
                                            <!--                                                        <div class="skill-list">-->
                                            <!--                                                            개발자 화가 축구 JAVA 서피스북-->
                                            <!--                                                        </div>-->
                                            <!--                                                    </div>-->
                                            <!--                                                </div>-->
                                        </div>
                                    </div>
                                    <div class="c c-inner-width">
                                        <div class="btn-user-action">
                                            <!--                                                <span class="forms">-->
                                            <!--                                                    <button type="button" class="btn-primary">follow</button>-->
                                            <!--                                                </span>-->
                                        </div>

<!--                                        <div class="btn-more-action">-->
<!--                                            <div class="img-more">-->
<!--                                                <a href="#;" class="trigger img-more__outer"><img class="img-more__outer__img" src="/assets/img/ico-more.png" alt=""></a>-->
<!--                                            </div>-->
<!--                                        </div>-->
                                    </div>
                                </div>

                            </div>

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
                            <button class="btn">확인</button>
                            <button class="btn btn-black MODAL-CLOSE">취소</button>
                        </div>
                        <!-- 모달 푸터 End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 스킬 보기 End -->

    <!-- 유저 팝업 End -->
    <script type="text/javascript">
        $(document).ready(function(){
            // Initialize the echarts instance based on the prepared dom
            var myChart2 = echarts.init(document.querySelector('#modalSkill .user-skill-grp'), null, {
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


