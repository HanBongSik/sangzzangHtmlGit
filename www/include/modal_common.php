
	<!-- 로그인 -->
    <div class="modal-dimmed" id="modalLogin" data-ani-on="modal-ani-opacity" data-ani-off="modal-ani-opacity-opacity">
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
    <div class="modal-dimmed" id="modalUser" data-ani-on="modal-ani-opacity" data-ani-off="modal-ani-opacity-opacity">
        <div class="modal">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-content" data-ani-on="modal-ani-target" data-ani-off="modal-ani-target-target">
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
                                <li><a href="./member-history.php">차단/신고</a></li>
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


    <!-- 사용자 검색 -->
    <div class="modal-dimmed" id="modalWritingUserSearch" data-ani-on="modal-ani-opacity" data-ani-off="modal-ani-opacity-opacity">
        <div class="modal-full modal-height-full">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-content" data-ani-on="modal-ani-target" data-ani-off="modal-ani-target-target">
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
                                            <!-- 전체 검색 -->
                                            <?php include("$path/include/include_temp/inc_user_list_04.php"); ?>
                                            <!-- 전체 검색 End -->
                                        </div>
                                        <div id="tabSearchUser" class="panel" tabindex="0">
                                            <!-- 회원 검색 -->
                                            <?php include("$path/include/include_temp/inc_user_list_02.php"); ?>
                                            <!-- 회원 검색 End -->
                                        </div>

                                        <div id="tabSearchTag" class="panel" tabindex="0">
                                            <!-- 태그 검색 -->
                                            <?php /* include("include/include_temp/inc_search_02.php"); */ ?>
                                            <!-- 태그 검색 End -->
                                        </div>

                                        <div id="tabSearchSkill" class="panel" tabindex="0">
                                            <!-- 스킬 검색 -->
                                            <?php include("$path/include/include_temp/inc_search_03.php"); ?>
                                            <!-- 스킬 검색 End -->
                                        </div>

                                        <div id="tabSearchSz" class="panel" tabindex="0">
                                            <!-- 상짱 검색 -->
                                            <?php include("$path/include/sz_list_search.php"); ?>
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
    <!-- 사용자 검색 End -->

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
                                            <!-- 전체 검색 -->
                                            <?php include("$path/include/include_temp/inc_user_list_04.php"); ?>
                                            <!-- 전체 검색 End -->
                                        </div>
                                        <div id="tabSearchUser" class="panel" tabindex="0">
                                            <!-- 회원 검색 -->
                                            <?php include("$path/include/include_temp/inc_user_list_02.php"); ?>
                                            <!-- 회원 검색 End -->
                                        </div>

                                        <div id="tabSearchTag" class="panel" tabindex="0">
                                            <!-- 태그 검색 -->
                                            <?php /* include("include/include_temp/inc_search_02.php"); */ ?>
                                            <!-- 태그 검색 End -->
                                        </div>

                                        <div id="tabSearchSkill" class="panel" tabindex="0">
                                            <!-- 스킬 검색 -->
                                            <?php include("$path/include/include_temp/inc_search_03.php"); ?>
                                            <!-- 스킬 검색 End -->
                                        </div>

                                        <div id="tabSearchSz" class="panel" tabindex="0">
                                            <!-- 상짱 검색 -->
                                            <?php include("$path/include/sz_list_search.php"); ?>
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
                            <?php include("$path/include/include_temp/inc_user_list_comment.php"); ?>
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
                            <?php include("$path/include/include_temp/inc_user_list_04.php"); ?>
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
    <div class="modal-dimmed" id="modalMore" data-ani-on="modal-ani-opacity" data-ani-off="modal-ani-opacity-opacity">
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
                                <li><a href="#;">차단하기</a></li>
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

    <!-- 쇼케이스 진열 유무  -->
    <div class="modal-dimmed" id="modalShowcaseSwitching" data-ani-on="modal-ani-opacity" data-ani-off="modal-ani-opacity-opacity">
        <div class="modal">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-content" data-ani-on="modal-ani-target" data-ani-off="modal-ani-target-target">
                        <div class="modal-close">
                            <a href="#modal" class="MODAL-CLOSE">×<span class="hidden">닫기</span></a>
                        </div>
                        <!-- 모달 헤더 -->
                        <div class="modal-header">
                            <h2>쇼케이스 진열</h2>
                        </div>
                        <!-- 모달 헤더 End -->

                        <!-- 모달 바디 -->
                        <div class="modal-body">
                            <div class="r showcase-in-select">
                                <span class="forms">
                                    <input type="radio" name="showcase-in" value="radio-showcase-in" id="radio-showcase-in" checked="checked">
                                    <label for="radio-showcase-in">진열하기</label>
                                </span>
                                <span class="forms">
                                    <input type="radio" name="showcase-in" value="showcase-out" id="radio-showcase-out">
                                    <label for="radio-showcase-out">진열하지 않기</label>
                                </span>
                            </div>
                        </div>
                        <!-- 모달 바디 End -->

                        <!-- 모달 푸터 -->
                        <div class="modal-footer">
                            <a href="/pages/myroom.php" class="btn btn-white">쇼케이스 보기</a>
                            <button class="btn">확인</button>
                            <button class="btn btn-black MODAL-CLOSE">취소</button>
                        </div>
                        <!-- 모달 푸터 End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 쇼케이스 진열 유무  End -->



    <!-- 쇼케이스 진열 유무  -->
    <div class="modal-dimmed" id="modalSzPublic" data-ani-on="modal-ani-opacity" data-ani-off="modal-ani-opacity-opacity">
        <div class="modal">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-content" data-ani-on="modal-ani-target" data-ani-off="modal-ani-target-target">
                        <div class="modal-close">
                            <a href="#modal" class="MODAL-CLOSE">×<span class="hidden">닫기</span></a>
                        </div>
                        <!-- 모달 헤더 -->
                        <div class="modal-header">
                            <h2>공개유무</h2>
                        </div>
                        <!-- 모달 헤더 End -->

                        <!-- 모달 바디 -->
                        <div class="modal-body">
                            <div class="r sz-public-select">
                                <span class="forms">
                                    <input type="radio" name="sz-public" value="sz-public-1" id="sz-public-visible" checked="checked">
                                    <label for="sz-public-visible">공개</label>
                                </span>
                                <span class="forms">
                                    <input type="radio" name="sz-public" value="sz-public-0" id="sz-public-hidden">
                                    <label for="sz-public-hidden">비공개</label>
                                </span>
                                <span class="forms">
                                    <input type="radio" name="sz-public" value="sz-public-3" id="sz-public-link">
                                    <label for="sz-public-link">일부공개</label>
                                </span>
                            </div>
                            <div class="modal-option-desc">
                                <ul class="modal-option-desc__list">
                                    <li class="modal-option-desc__list__item">
                                        공개 : 모든 사람들이 볼 수 있습니다.
                                    </li>
                                    <li class="modal-option-desc__list__item">
                                        비공개 : 나와 받은 사람만 볼 수 있습니다.
                                    </li>
                                    <li class="modal-option-desc__list__item">
                                        일부공개 : 링크 주소로 접속한  사람만 볼 수 있습니다.
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
    <!-- 쇼케이스 진열 유무  End -->


    <!-- 답글 내역 팝업  -->
    <div class="modal-dimmed" id="modalReplyHistory" data-ani-on="modal-ani-opacity" data-ani-off="modal-ani-opacity-opacity">
        <div class="modal-full modal-height-max-full">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-content" data-ani-on="modal-ani-target" data-ani-off="modal-ani-target-target">
                        <div class="modal-close">
                            <a href="#modal" class="MODAL-CLOSE">×<span class="hidden">닫기</span></a>
                        </div>
                        <!-- 모달 헤더 -->
                        <div class="modal-header">
                            <h2>답글 내역</h2>
                        </div>
                        <!-- 모달 헤더 End -->

                        <!-- 모달 바디 -->
                        <div class="modal-body">
                            <ul class="comments__list">
                                <li class="comments__list__item">
                                    <div class="g lay-user-action-info">
                                        <div class="r">
                                            <div class="c">
                                                <!-- 유저 프로필 덩어리 -->
                                                <div class="g user-profile">
                                                    <div class="r">
                                                        <div class="c c-inner-width">
                                                            <div class="img-profile">
                                                                <a href="/pages/myroom.php" class="img-profile__link">
                                                                    <div class="img-profile__outer">
                                                                        <img class="img-profile__img" src="/assets/tempImg/profile/af.jpg" alt="프로필 이미지">
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="c">
                                                            <div class="g">
                                                                <div class="r">
                                                                    <div class="c">
                                                                        <div class="user-action-info-detail">
                                                                            <span class="user-id">twicetagram</span>
                                                                            <!--                                                                            <span class="user-follow-state"><a href="#;" class="user-follow-state__link">팔로우</a></span>-->
                                                                            <!--                                                            <span class="user-follow-state following"><a href="#;" class="user-follow-state__link">팔로잉</a></span>-->
                                                                            <!--                                                            <span class="user-action">님이 상장을 보냈습니다.</span>-->
                                                                            <span class="user-action-date">23.10.17 10 11</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="r">
                                                                    <div class="c">
                                                                        <div class="user-action-info-detail">
                                                                            <span class="user-comment">이래서 인생이 힘들어도 살아볼만하다는건가</span>
                                                                            <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 유저 프로필 덩어리 End -->
                                            </div>
                                        </div>
                                        <div class="r">
                                            <div class="c c-inner-width">
                                                <div class="img-profile">
                                                    <div class="img-profile__outer v-hidde">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="c">
<!--                                                <a href="#;" class="MODAL-BTN" data-target="#modalWritingReply"><span class="writing-reply">답글쓰기</span></a>-->
                                            </div>
                                            <div class="c c-full-width center-right">
                                                <div class="like">
                                                    <a href="#;"><span class="ico-like"><img class="ico-like__img" src="/assets/img/ico-loveit.png" alt="좋아요"></span><span class="ico-like-num">20</span></a>
                                                </div>
                                            </div>
                                            <div class="c c-inner-width center-right">
                                                <div class="btn-more-action">
                                                    <div class="img-more">
                                                        <a href="#;" class="img-more__link MODAL-BTN" data-target="#modalMore">
                                                            <div class="img-more__outer">
                                                                <img class="img-more__outer__img" src="/assets/img/ico-more.png" alt="">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="comments__list__item">
                                    <div class="g lay-user-action-info">
                                        <div class="r">
                                            <div class="c">
                                                <!-- 유저 프로필 덩어리 -->
                                                <div class="g user-profile">
                                                    <div class="r">
                                                        <div class="c c-inner-width">
                                                            <div class="img-profile">
                                                                <a href="/pages/myroom.php" class="img-profile__link">
                                                                    <div class="img-profile__outer">
                                                                        <img class="img-profile__img" src="/assets/tempImg/profile/hbs.jpg" alt="프로필 이미지">
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="c">
                                                            <div class="g">
                                                                <div class="r">
                                                                    <div class="c">
                                                                        <div class="user-action-info-detail">
                                                                            <a href="#;" class="reply-history-link MODAL-BTN" data-target="#modalReplyHistory">
                                                                                <span class="user-id">twicetagram</span><span class="reply">에게 답글</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="c c-inner-width">
                                                                    </div>
                                                                </div>
                                                                <div class="r">
                                                                    <div class="c">
                                                                        <div class="user-action-info-detail">
                                                                            <span class="user-id">bongsik</span>
                                                                            <!--                                                                            <span class="user-follow-state"><a href="#;" class="user-follow-state__link">팔로우</a></span>-->
                                                                            <!--                                                            <span class="user-follow-state following"><a href="#;" class="user-follow-state__link">팔로잉</a></span>-->
                                                                            <!--                                                            <span class="user-action">님이 상장을 보냈습니다.</span>-->
                                                                            <span class="user-action-date">23.10.17 10 11</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="r">
                                                                    <div class="c">
                                                                        <div class="user-action-info-detail">
                                                                            <span class="user-comment">복 많이 받으세요~😁😁</span>
                                                                            <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 유저 프로필 덩어리 End -->
                                            </div>
                                        </div>
                                        <div class="r">
                                            <div class="c c-inner-width">
                                                <div class="img-profile">
                                                    <div class="img-profile__outer v-hidde">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="c">
<!--                                                <a href="#;" class="MODAL-BTN" data-target="#modalWritingReply"><span class="writing-reply">답글쓰기</span></a>-->
                                            </div>
                                            <div class="c c-full-width center-right">
                                                <div class="like">
                                                    <a href="#;"><span class="ico-like"><img class="ico-like__img" src="/assets/img/ico-loveit.png" alt="좋아요"></span><span class="ico-like-num">20</span></a>
                                                </div>
                                            </div>
                                            <div class="c c-inner-width center-right">
                                                <div class="btn-more-action">
                                                    <div class="img-more">
                                                        <a href="#;" class="img-more__link MODAL-BTN" data-target="#modalMore">
                                                            <div class="img-more__outer">
                                                                <img class="img-more__outer__img" src="/assets/img/ico-more.png" alt="">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="comments__list__item">
                                    <div class="g lay-user-action-info">
                                        <div class="r">
                                            <div class="c">
                                                <!-- 유저 프로필 덩어리 -->
                                                <div class="g user-profile">
                                                    <div class="r">
                                                        <div class="c c-inner-width">
                                                            <div class="img-profile">
                                                                <a href="/pages/myroom.php" class="img-profile__link">
                                                                    <div class="img-profile__outer">
                                                                        <img class="img-profile__img" src="/assets/tempImg/profile/af.jpg" alt="프로필 이미지">
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="c">
                                                            <div class="g">
                                                                <div class="r">
                                                                    <div class="c">
                                                                        <div class="user-action-info-detail">
                                                                            <a href="#;" class="reply-history-link MODAL-BTN" data-target="#modalReplyHistory">
                                                                                <span class="user-id">bongsik</span><span class="reply">에게 답글</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="c c-inner-width">
                                                                    </div>
                                                                </div>
                                                                <div class="r">
                                                                    <div class="c">
                                                                        <div class="user-action-info-detail">
                                                                            <span class="user-id">twicetagram</span>
                                                                            <!--                                                                            <span class="user-follow-state"><a href="#;" class="user-follow-state__link">팔로우</a></span>-->
                                                                            <!--                                                            <span class="user-follow-state following"><a href="#;" class="user-follow-state__link">팔로잉</a></span>-->
                                                                            <!--                                                            <span class="user-action">님이 상장을 보냈습니다.</span>-->
                                                                            <span class="user-action-date">23.10.17 10 11</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="r">
                                                                    <div class="c">
                                                                        <div class="user-action-info-detail">
                                                                            <span class="user-comment">선행을 베푸시는분 행복하세요!</span>
                                                                            <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 유저 프로필 덩어리 End -->
                                            </div>
                                        </div>
                                        <div class="r">
                                            <div class="c c-inner-width">
                                                <div class="img-profile">
                                                    <div class="img-profile__outer v-hidde">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="c">
<!--                                                <a href="#;" class="MODAL-BTN" data-target="#modalWritingReply"><span class="writing-reply">답글쓰기</span></a>-->
                                            </div>
                                            <div class="c c-full-width center-right">
                                                <div class="like">
                                                    <a href="#;"><span class="ico-like"><img class="ico-like__img" src="/assets/img/ico-loveit.png" alt="좋아요"></span><span class="ico-like-num">20</span></a>
                                                </div>
                                            </div>
                                            <div class="c c-inner-width center-right">
                                                <div class="btn-more-action">
                                                    <div class="img-more">
                                                        <a href="#;" class="img-more__link MODAL-BTN" data-target="#modalMore">
                                                            <div class="img-more__outer">
                                                                <img class="img-more__outer__img" src="/assets/img/ico-more.png" alt="">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="comments__list__item">
                                    <div class="g lay-user-action-info">
                                        <div class="r">
                                            <div class="c">
                                                <!-- 유저 프로필 덩어리 -->
                                                <div class="g user-profile">
                                                    <div class="r">
                                                        <div class="c c-inner-width">
                                                            <div class="img-profile">
                                                                <a href="/pages/myroom.php" class="img-profile__link">
                                                                    <div class="img-profile__outer">
                                                                        <img class="img-profile__img" src="/assets/tempImg/profile/hbs.jpg" alt="프로필 이미지">
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="c">
                                                            <div class="g">
                                                                <div class="r">
                                                                    <div class="c">
                                                                        <div class="user-action-info-detail">
                                                                            <a href="#;" class="reply-history-link MODAL-BTN" data-target="#modalReplyHistory">
                                                                                <span class="user-id">twicetagram</span><span class="reply">에게 답글</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="c c-inner-width">
                                                                    </div>
                                                                </div>
                                                                <div class="r">
                                                                    <div class="c">
                                                                        <div class="user-action-info-detail">
                                                                            <span class="user-id">bongsik</span>
                                                                            <!--                                                                            <span class="user-follow-state"><a href="#;" class="user-follow-state__link">팔로우</a></span>-->
                                                                            <!--                                                            <span class="user-follow-state following"><a href="#;" class="user-follow-state__link">팔로잉</a></span>-->
                                                                            <!--                                                            <span class="user-action">님이 상장을 보냈습니다.</span>-->
                                                                            <span class="user-action-date">23.10.17 10 11</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="r">
                                                                    <div class="c">
                                                                        <div class="user-action-info-detail">
                                                                            <span class="user-comment">건강하시고 행복하세요. ㅠㅠ</span>
                                                                            <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 유저 프로필 덩어리 End -->
                                            </div>
                                        </div>
                                        <div class="r">
                                            <div class="c c-inner-width">
                                                <div class="img-profile">
                                                    <div class="img-profile__outer v-hidde">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="c">
<!--                                                <a href="#;" class="MODAL-BTN" data-target="#modalWritingReply"><span class="writing-reply">답글쓰기</span></a>-->
                                            </div>
                                            <div class="c c-full-width center-right">
                                                <div class="like">
                                                    <a href="#;"><span class="ico-like"><img class="ico-like__img" src="/assets/img/ico-loveit.png" alt="좋아요"></span><span class="ico-like-num">20</span></a>
                                                </div>
                                            </div>
                                            <div class="c c-inner-width center-right">
                                                <div class="btn-more-action">
                                                    <div class="img-more">
                                                        <a href="#;" class="img-more__link MODAL-BTN" data-target="#modalMore">
                                                            <div class="img-more__outer">
                                                                <img class="img-more__outer__img" src="/assets/img/ico-more.png" alt="">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="g writing-input">
                                <div class="r gap-hor-sm">
                                    <div class="c c-inner-width">
                                        <div class="img-profile">
                                            <div class="img-profile__outer">
                                                <img class="img-profile__img" src="/assets/tempImg/profile/hbs.jpg" alt="프로필 이미지">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c">
                                    <span class="forms forms-full">
                                        <input type="text" placeholder="댓글을 입력하세요." value="" id="inputKeyward" class="INPUT-RESET">
                                    </span>
                                    </div>
                                    <div class="c c-inner-width">
                                        <div class="writing-btn">
                                        <span class="forms">
                                            <button type="button" class="btn-writing">작성</button>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 모달 바디 End -->

                        <!-- 모달 푸터 -->
                        <div class="modal-footer">
                            <!--                            <button class="btn">확인</button>-->
                            <button class="btn btn-black MODAL-CLOSE">취소</button>
                        </div>
                        <!-- 모달 푸터 End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 답글 내역 End -->


    <!-- 답글 팝업  -->
    <div class="modal-dimmed" id="modalWritingReply" data-ani-on="modal-ani-opacity" data-ani-off="modal-ani-opacity-opacity">
        <div class="modal-full modal-height-max-full">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-content" data-ani-on="modal-ani-target" data-ani-off="modal-ani-target-target">
                        <div class="modal-close">
                            <a href="#modal" class="MODAL-CLOSE">×<span class="hidden">닫기</span></a>
                        </div>
                        <!-- 모달 헤더 -->
                        <div class="modal-header">
                            <h2>답글 쓰기</h2>
                        </div>
                        <!-- 모달 헤더 End -->

                        <!-- 모달 바디 -->
                        <div class="modal-body">
                            <div class="g lay-user-action-info">
                                <div class="r">
                                    <div class="c">
                                        <!-- 유저 프로필 덩어리 -->
                                        <div class="g user-profile">
                                            <div class="r">
                                                <div class="c c-inner-width">
                                                    <div class="img-profile">
                                                        <a href="/pages/myroom.php" class="img-profile__link">
                                                            <div class="img-profile__outer">
                                                                <img class="img-profile__img" src="/assets/tempImg/profile/ah.jpg" alt="프로필 이미지">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="c">
                                                    <div class="g">
                                                        <div class="r">
                                                            <div class="c">
                                                                <div class="user-action-info-detail">
                                                                    <span class="user-id">imyour_joy</span>
                                                                    <!--                                                                            <span class="user-follow-state"><a href="#;" class="user-follow-state__link">팔로우</a></span>-->
                                                                    <!--                                                            <span class="user-follow-state following"><a href="#;" class="user-follow-state__link">팔로잉</a></span>-->
                                                                    <!--                                                            <span class="user-action">님이 상장을 보냈습니다.</span>-->
                                                                    <span class="user-action-date">23.10.17 10 11</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="r">
                                                            <div class="c">
                                                                <div class="user-action-info-detail">
                                                                    <span class="user-comment">아직 살만한 세상이다 생각이듭니다 가족분 모두 힘내시길 멀리서 응원합니다.</span>
                                                                    <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 유저 프로필 덩어리 End -->
                                    </div>
                                </div>
                                <!--
                                <div class="r">
                                    <div class="c c-inner-width">
                                        <div class="img-profile">
                                            <div class="img-profile__outer v-hidde">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c">
                                        <a href="#;" class="MODAL-BTN" data-target="#modalWritingReply"><span class="writing-reply">답글쓰기</span></a>
                                    </div>
                                    <div class="c c-full-width center-right">
                                        <div class="like">
                                            <a href="#;"><span class="ico-like"><img class="ico-like__img" src="/assets/img/ico-loveit-on.png" alt="좋아요"></span><span class="ico-like-num">20</span></a>
                                        </div>
                                    </div>
                                    <div class="c c-inner-width center-right">
                                        <div class="btn-more-action">
                                            <div class="img-more">
                                                <a href="#;" class="img-more__link MODAL-BTN" data-target="#modalMore">
                                                    <div class="img-more__outer">
                                                        <img class="img-more__outer__img" src="/assets/img/ico-more.png" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                            <div class="g writing-input">
                                <div class="r gap-hor-sm">
                                    <div class="c c-inner-width">
                                        <div class="img-profile">
                                            <div class="img-profile__outer">
                                                <img class="img-profile__img" src="/assets/tempImg/profile/hbs.jpg" alt="프로필 이미지">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c">
                                    <span class="forms forms-full">
                                        <input type="text" placeholder="댓글을 입력하세요." value="" id="inputKeyward" class="INPUT-RESET">
                                    </span>
                                    </div>
                                    <div class="c c-inner-width">
                                        <div class="writing-btn">
                                        <span class="forms">
                                            <button type="button" class="btn-writing-modal">작성</button>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- 모달 바디 End -->

                        <!-- 모달 푸터 -->
                        <div class="modal-footer">
                            <!--                            <button class="btn">확인</button>-->
                            <button class="btn btn-black MODAL-CLOSE">취소</button>
                        </div>
                        <!-- 모달 푸터 End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 답글 팝업 End -->
    <!-- 포토 확대 보기 -->
    <div class="modal-dimmed" id="modalPhotoFullView" tabindex="0" data-ani-on="modal-ani-big" data-ani-off="modal-ani-big-small">
        <div class="modal-full full">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-content">
                        <div class="modal-close">
                            <a href="#modal" class="MODAL-CLOSE">×<span class="hidden">닫기</span></a>
                        </div>

                        <!-- 모달 바디 -->
                        <div class="modal-body">
                            <div class="swiper-container">
                                <ul class="swiper-wrapper">
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/friends.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/food2.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/meet2.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/game.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/game2.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/game3.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/present-1.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/present-2.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/present.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/hobby.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/animal-forest-card.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/birthday.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/cart1.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/cart2.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/cart3.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/cat.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/dog.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/mom.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/baby4.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/baby2.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/baby3.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/baby5.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/sports3.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/sports6.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/sports4.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/sports5.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/singer0.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/singer2.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/singer3.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/normal.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!---->
<!---->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/nurse.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/firefighter.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/chicken.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/god.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/god2.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/politics.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/politics2.jpg">-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="swiper-slide">-->
<!--                                        <div class="swiper-zoom-container">-->
<!--                                            <img src="/assets/tempImg/photo/politics3.png">-->
<!--                                        </div>-->
<!--                                    </li>-->

                                </ul>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                                <!-- Add Navigation -->
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                            <div class="btn-photo-minimize-view"><a href="#;" class="btn-photo-minimize-view__link MODAL-CLOSE"><img class="btn-photo-minimize-view__img" src="/assets/img/ico/ico-minimize-view.png"></a></div>
                            <script>// Init Swiper
                                function modalPhotoFullView(src){
                                    $('#modalPhotoFullView').find('.swiper-wrapper').empty();
                                    $('#modalPhotoFullView').find('.swiper-wrapper').html(`
                                        <li class="swiper-slide">
                                            <div class="swiper-zoom-container">
                                                <img src="${src}">
                                            </div>
                                        </li>
                                    `);
                                    let fullPhotoSwiper = new Swiper('#modalPhotoFullView .swiper-container', {
                                        zoom: true,
                                        loop: true,
                                        pagination: {
                                            el: '.swiper-pagination',
                                            clickable: false,
                                        },
                                        navigation: {
                                            nextEl: '.swiper-button-next',
                                            prevEl: '.swiper-button-prev',
                                        },
                                        // Enable debugger
                                    });
                                }
                            </script>

                        </div>
                        <!-- 모달 바디 End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 포토 확대 보기 End -->

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


