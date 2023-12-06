
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
                                <div class="r">
                                    <div class="login-sns">
                                        <a href="#;" class="login-sns__outer"><img class="login-sns__img" src="/assets/img/ico/sns-naver.png" alt="네이버"></a>
                                        <a href="#;" class="login-sns__outer"><img class="login-sns__img" src="/assets/img/ico/sns-kakao.png" alt="카카오톡"></a>
                                        <a href="#;" class="login-sns__outer"><img class="login-sns__img" src="/assets/img/ico/sns-google.png" alt="구글"></a>
                                        <a href="#;" class="login-sns__outer"><img class="login-sns__img" src="/assets/img/ico/sns-facebook.png" alt="페이스북"></a>
                                        <a href="#;" class="login-sns__outer"><img class="login-sns__img" src="/assets/img/ico/sns-instagram.png" alt="인스타그램"></a>
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


    <!-- 가이드 모달 팝업  -->
    <div class="modal-dimmed" id="modalGuide" data-ani-on="modal-ani-opacity" data-ani-off="modal-ani-opacity-opacity">
        <div class="modal">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-content" data-ani-on="modal-ani-target" data-ani-off="modal-ani-target-target">
                        <div class="modal-close">
                            <a href="#modal" class="MODAL-CLOSE">×<span class="hidden">닫기</span></a>
                        </div>
                        <!-- 모달 헤더 -->
                        <div class="modal-header">
                            <h2>설명</h2>
                        </div>
                        <!-- 모달 헤더 End -->

                        <!-- 모달 바디 -->
                        <div class="modal-body">
                            <div class="modal-guide">
                                상세한 설명란
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
    <!-- 가이드 팝업 End -->

    <!-- 받는 사람 검색 -->
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
                            <h2>받는 사람 검색</h2>
                        </div>
                        <!-- 모달 헤더 End -->

                        <!-- 모달 바디 -->
                        <div class="modal-body with-receiver-list">
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
                                            <li class="active"><a href="#tabSearchReceiverAll" data-target="#tabSearchReceiverAll">전체</a></li>
                                            <!--                                        <li><a href="#tabSearchTag">태그</a></li>-->
                                            <li><a href="#tabSearchReceiverSkill" data-target="#tabSearchReceiverFollow">팔로우</a></li>
                                        </ul>
                                    </div>



                                    <!-- tabs End -->
                                    <!-- panels -->
                                    <div class="panels">
                                        <div id="tabSearchReceiverAll" class="panel active" tabindex="0">
                                            <!-- 전체 검색 -->
                                            <?php include("$path/include/include_temp/inc_user_list_select.php"); ?>
                                            <!-- 전체 검색 End -->
                                        </div>
                                        <div id="tabSearchReceiverFollow" class="panel" tabindex="0">
                                            <!-- 회원 검색 -->
                                            <?php include("$path/include/include_temp/inc_user_list_02_select.php"); ?>
                                            <!-- 회원 검색 End -->
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="modal-body__bottom">
                                <div class="sz-writing-receiver with-remove">
                                    <ul class="users__list sm">
                                        <li class="users__list__item">
                                            <div class="g lay-user-action-info">
                                                <div class="r">
                                                    <div class="c">
                                                        <!-- 유저 프로필 덩어리 -->

                                                        <div class="g user-profile">
                                                            <div class="r">
                                                                <div class="c c-inner-width">
                                                                    <div class="img-profile">
                                                                        <a href="#;" onclick="alert('삭제하시겠습니까?');" class="remove-user">×</a>
                                                                        <a href="/pages/myroom.php" class="img-profile__link">
                                                                            <div class="img-profile__outer">
                                                                                <img class="img-profile__img" src="/assets/tempImg/profile/an.jpg" alt="프로필 이미지">
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="c">
                                                                    <div class="g">
                                                                        <div class="r">
                                                                            <div class="c">
                                                                                <div class="user-action-info-detail">
                                                                                    <a href="/pages/myroom.php" class="user-action-info-detail__link"><span class="user-id">dlwlrma</span></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="r">
                                                                            <div class="c">
                                                                                <div class="user-action-info-detail">
                                                                                    <a href="/pages/myroom.php" class="user-action-info-detail__link"><span class="user-name">이종석</span></a>
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
                                                    <!--                                                                <div class="c c-full center-right">-->
                                                    <!--                                                                    <span class="forms">-->
                                                    <!--                                                                        <button type="button" class="btn-follow">팔로우</button>-->
                                                    <!--                                                                    </span>-->
                                                    <!--                                                                </div>-->
                                                </div>
                                            </div>
                                        </li>
                                        <li class="users__list__item">
                                            <div class="g lay-user-action-info">
                                                <div class="r">
                                                    <div class="c">
                                                        <!-- 유저 프로필 덩어리 -->

                                                        <div class="g user-profile">
                                                            <div class="r">
                                                                <div class="c c-inner-width">
                                                                    <div class="img-profile">
                                                                        <a href="#;" onclick="alert('삭제하시겠습니까?');" class="remove-user">×</a>
                                                                        <a href="/pages/myroom.php" class="img-profile__link">
                                                                            <div class="img-profile__outer">
                                                                                <img class="img-profile__img" src="/assets/tempImg/profile/i.jpg" alt="프로필 이미지">
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="c">
                                                                    <div class="g">
                                                                        <div class="r">
                                                                            <div class="c">
                                                                                <div class="user-action-info-detail">
                                                                                    <a href="/pages/myroom.php" class="user-action-info-detail__link"><span class="user-id">jennierubyjane</span></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="r">
                                                                            <div class="c">
                                                                                <div class="user-action-info-detail">
                                                                                    <a href="/pages/myroom.php" class="user-action-info-detail__link"><span class="user-name">카이</span></a>
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
                                                    <!--                                                                <div class="c c-full center-right">-->
                                                    <!--                                                                    <span class="forms">-->
                                                    <!--                                                                        <button type="button" class="btn-follow">팔로우</button>-->
                                                    <!--                                                                    </span>-->
                                                    <!--                                                                </div>-->
                                                </div>
                                            </div>
                                        </li>
                                        <li class="users__list__item">
                                            <div class="g lay-user-action-info">
                                                <div class="r">
                                                    <div class="c">
                                                        <!-- 유저 프로필 덩어리 -->

                                                        <div class="g user-profile">
                                                            <div class="r">
                                                                <div class="c c-inner-width">
                                                                    <div class="img-profile">
                                                                        <a href="#;" onclick="alert('삭제하시겠습니까?');" class="remove-user">×</a>
                                                                        <a href="/pages/myroom.php" class="img-profile__link">
                                                                            <div class="img-profile__outer">
                                                                                <img class="img-profile__img" src="/assets/tempImg/profile/z.jpg" alt="프로필 이미지">
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="c">
                                                                    <div class="g">
                                                                        <div class="r">
                                                                            <div class="c">
                                                                                <div class="user-action-info-detail">
                                                                                    <a href="/pages/myroom.php" class="user-action-info-detail__link"><span class="user-id">itzy.all.in.us</span></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="r">
                                                                            <div class="c">
                                                                                <div class="user-action-info-detail">
                                                                                    <a href="/pages/myroom.php" class="user-action-info-detail__link"><span class="user-name">황인엽</span></a>
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
                                                    <!--                                                                <div class="c c-full center-right">-->
                                                    <!--                                                                    <span class="forms">-->
                                                    <!--                                                                        <button type="button" class="btn-follow">팔로우</button>-->
                                                    <!--                                                                    </span>-->
                                                    <!--                                                                </div>-->
                                                </div>
                                            </div>
                                        </li>
                                        <li class="users__list__item">
                                            <div class="g lay-user-action-info">
                                                <div class="r">
                                                    <div class="c">
                                                        <!-- 유저 프로필 덩어리 -->

                                                        <div class="g user-profile">
                                                            <div class="r">
                                                                <div class="c c-inner-width">
                                                                    <div class="img-profile">
                                                                        <a href="#;" onclick="alert('삭제하시겠습니까?');" class="remove-user">×</a>
                                                                        <a href="/pages/myroom.php" class="img-profile__link">
                                                                            <div class="img-profile__outer">
                                                                                <img class="img-profile__img" src="/assets/tempImg/profile/c.jpg" alt="프로필 이미지">
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="c">
                                                                    <div class="g">
                                                                        <div class="r">
                                                                            <div class="c">
                                                                                <div class="user-action-info-detail">
                                                                                    <a href="/pages/myroom.php" class="user-action-info-detail__link"><span class="user-id">hi_high_hiy</span></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="r">
                                                                            <div class="c">
                                                                                <div class="user-action-info-detail">
                                                                                    <a href="/pages/myroom.php" class="user-action-info-detail__link"><span class="user-name">정호연</span></a>
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
                                                    <!--                                                                <div class="c c-full center-right">-->
                                                    <!--                                                                    <span class="forms">-->
                                                    <!--                                                                        <button type="button" class="btn-follow">팔로우</button>-->
                                                    <!--                                                                    </span>-->
                                                    <!--                                                                </div>-->
                                                </div>
                                            </div>
                                        </li>
                                        <li class="users__list__item">
                                            <div class="g lay-user-action-info">
                                                <div class="r">
                                                    <div class="c">
                                                        <!-- 유저 프로필 덩어리 -->

                                                        <div class="g user-profile">
                                                            <div class="r">
                                                                <div class="c c-inner-width">
                                                                    <div class="img-profile">
                                                                        <a href="#;" onclick="alert('삭제하시겠습니까?');" class="remove-user">×</a>
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
                                                                                    <a href="/pages/myroom.php" class="user-action-info-detail__link"><span class="user-id">__youngbae__</span></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="r">
                                                                            <div class="c">
                                                                                <div class="user-action-info-detail">
                                                                                    <a href="/pages/myroom.php" class="user-action-info-detail__link"><span class="user-name">조이</span></a>
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
                                                    <!--                                                                <div class="c c-full center-right">-->
                                                    <!--                                                                    <span class="forms">-->
                                                    <!--                                                                        <button type="button" class="btn-follow">팔로우</button>-->
                                                    <!--                                                                    </span>-->
                                                    <!--                                                                </div>-->
                                                </div>
                                            </div>
                                        </li>
                                        <li class="users__list__item">
                                            <div class="g lay-user-action-info">
                                                <div class="r">
                                                    <div class="c">
                                                        <!-- 유저 프로필 덩어리 -->

                                                        <div class="g user-profile">
                                                            <div class="r">
                                                                <div class="c c-inner-width">
                                                                    <div class="img-profile">
                                                                        <a href="#;" onclick="alert('삭제하시겠습니까?');" class="remove-user">×</a>
                                                                        <a href="/pages/myroom.php" class="img-profile__link">
                                                                            <div class="img-profile__outer">
                                                                                <img class="img-profile__img" src="/assets/tempImg/profile/r.jpg" alt="프로필 이미지">
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="c">
                                                                    <div class="g">
                                                                        <div class="r">
                                                                            <div class="c">
                                                                                <div class="user-action-info-detail">
                                                                                    <a href="/pages/myroom.php" class="user-action-info-detail__link"><span class="user-id">blackpinkofficial</span></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="r">
                                                                            <div class="c">
                                                                                <div class="user-action-info-detail">
                                                                                    <a href="/pages/myroom.php" class="user-action-info-detail__link"><span class="user-name">TWICE</span></a>
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
                                                    <!--                                                                <div class="c c-full center-right">-->
                                                    <!--                                                                    <span class="forms">-->
                                                    <!--                                                                        <button type="button" class="btn-follow">팔로우</button>-->
                                                    <!--                                                                    </span>-->
                                                    <!--                                                                </div>-->
                                                </div>
                                            </div>
                                        </li>
                                        <li class="users__list__item">
                                            <div class="g lay-user-action-info">
                                                <div class="r">
                                                    <div class="c">
                                                        <!-- 유저 프로필 덩어리 -->

                                                        <div class="g user-profile">
                                                            <div class="r">
                                                                <div class="c c-inner-width">
                                                                    <div class="img-profile">
                                                                        <a href="#;" onclick="alert('삭제하시겠습니까?');" class="remove-user">×</a>
                                                                        <a href="/pages/myroom.php" class="img-profile__link">
                                                                            <div class="img-profile__outer">
                                                                                <img class="img-profile__img" src="/assets/tempImg/profile/ar.jpg" alt="프로필 이미지">
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="c">
                                                                    <div class="g">
                                                                        <div class="r">
                                                                            <div class="c">
                                                                                <div class="user-action-info-detail">
                                                                                    <a href="/pages/myroom.php" class="user-action-info-detail__link"><span class="user-id">yoona__lim</span></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="r">
                                                                            <div class="c">
                                                                                <div class="user-action-info-detail">
                                                                                    <a href="/pages/myroom.php" class="user-action-info-detail__link"><span class="user-name">지수</span></a>
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
                                                    <!--                                                                <div class="c c-full center-right">-->
                                                    <!--                                                                    <span class="forms">-->
                                                    <!--                                                                        <button type="button" class="btn-follow">팔로우</button>-->
                                                    <!--                                                                    </span>-->
                                                    <!--                                                                </div>-->
                                                </div>
                                            </div>
                                        </li>
                                        <li class="users__list__item">
                                            <div class="g lay-user-action-info">
                                                <div class="r">
                                                    <div class="c">
                                                        <!-- 유저 프로필 덩어리 -->

                                                        <div class="g user-profile">
                                                            <div class="r">
                                                                <div class="c c-inner-width">
                                                                    <div class="img-profile">
                                                                        <a href="#;" onclick="alert('삭제하시겠습니까?');" class="remove-user">×</a>
                                                                        <a href="/pages/myroom.php" class="img-profile__link">
                                                                            <div class="img-profile__outer">
                                                                                <img class="img-profile__img" src="/assets/tempImg/profile/f.jpg" alt="프로필 이미지">
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="c">
                                                                    <div class="g">
                                                                        <div class="r">
                                                                            <div class="c">
                                                                                <div class="user-action-info-detail">
                                                                                    <a href="/pages/myroom.php" class="user-action-info-detail__link"><span class="user-id">imyour_joy</span></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="r">
                                                                            <div class="c">
                                                                                <div class="user-action-info-detail">
                                                                                    <a href="/pages/myroom.php" class="user-action-info-detail__link"><span class="user-name">찬열</span></a>
                                                                                    <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- 유저 프로필 덩어리 End -->

                                                        <!--                                                                <div class="c c-full center-right">-->
                                                        <!--                                                                    <span class="forms">-->
                                                        <!--                                                                        <button type="button" class="btn-follow">팔로우</button>-->
                                                        <!--                                                                    </span>-->
                                                        <!--                                                                </div>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="users__list__item">
                                            <div class="g lay-user-action-info">
                                                <div class="r">
                                                    <div class="c">
                                                        <!-- 유저 프로필 덩어리 -->

                                                        <div class="g user-profile">
                                                            <div class="r">
                                                                <div class="c c-inner-width">
                                                                    <div class="img-profile">
                                                                        <a href="#;" onclick="alert('삭제하시겠습니까?');" class="remove-user">×</a>
                                                                        <a href="/pages/myroom.php" class="img-profile__link">
                                                                            <div class="img-profile__outer">
                                                                                <img class="img-profile__img" src="/assets/tempImg/profile/b.jpg" alt="프로필 이미지">
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="c">
                                                                    <div class="g">
                                                                        <div class="r">
                                                                            <div class="c">
                                                                                <div class="user-action-info-detail">
                                                                                    <a href="/pages/myroom.php" class="user-action-info-detail__link"><span class="user-id">leedongwook_official</span></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="r">
                                                                            <div class="c">
                                                                                <div class="user-action-info-detail">
                                                                                    <a href="/pages/myroom.php" class="user-action-info-detail__link"><span class="user-name">차은우</span></a>
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
                                                    <!--                                                                <div class="c c-full center-right">-->
                                                    <!--                                                                    <span class="forms">-->
                                                    <!--                                                                        <button type="button" class="btn-follow-ing">팔로잉</button>-->
                                                    <!--                                                                    </span>-->
                                                    <!--                                                                </div>-->
                                                </div>
                                            </div>
                                        </li>
                                        <li class="users__list__item">
                                            <div class="g lay-user-action-info">
                                                <div class="r">
                                                    <div class="c">
                                                        <!-- 유저 프로필 덩어리 -->

                                                        <div class="g user-profile">
                                                            <div class="r">
                                                                <div class="c c-inner-width">
                                                                    <div class="img-profile">
                                                                        <a href="#;" onclick="alert('삭제하시겠습니까?');" class="remove-user">×</a>
                                                                        <a href="/pages/myroom.php" class="img-profile__link">
                                                                            <div class="img-profile__outer">
                                                                                <img class="img-profile__img" src="/assets/tempImg/profile/m.jpg" alt="프로필 이미지">
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="c">
                                                                    <div class="g">
                                                                        <div class="r">
                                                                            <div class="c">
                                                                                <div class="user-action-info-detail">
                                                                                    <a href="/pages/myroom.php" class="user-action-info-detail__link"><span class="user-id">yawnzzn</span></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="r">
                                                                            <div class="c">
                                                                                <div class="user-action-info-detail">
                                                                                    <a href="/pages/myroom.php" class="user-action-info-detail__link"><span class="user-name">지창욱</span></a>
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
                                                    <!--                                                                <div class="c c-full center-right">-->
                                                    <!--                                                                    <span class="forms">-->
                                                    <!--                                                                        <button type="button" class="btn-follow">팔로우</button>-->
                                                    <!--                                                                    </span>-->
                                                    <!--                                                                </div>-->
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
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
    <!-- 받는 사람 검색 End -->

    <!-- 예제 검색 -->
    <div class="modal-dimmed" id="modalExSearch" data-ani-on="modal-ani-opacity" data-ani-off="modal-ani-opacity-opacity">
        <div class="modal-full modal-height-full">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-content" data-ani-on="modal-ani-down" data-ani-off="modal-ani-down-up">
                        <div class="modal-close">
                            <a href="#modal" class="MODAL-CLOSE">×<span class="hidden">닫기</span></a>
                        </div>
                        <!-- 모달 헤더 -->
                        <div class="modal-header">
                            <h2>예제 검색</h2>
                        </div>
                        <!-- 모달 헤더 End -->

                        <!-- 모달 바디 -->
                        <div class="modal-body no-scroll">
                            <div class="exword-layer-body">
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
                                <div class="ex-words" style="display:n1one;width:100%;">
                                    <h3 class="h3 hidden"><!--class="hidden"-->예제</h3>
                                    <div class="tab ex-words__outer">
                                        <div class="tab__list">
                                            <div class="ex-words__outer">
                                                <div class="ex-words__list">
                                                    <button type="button" class="words__list__item btn-badge TAB-BTN active" data-target="#tabExWords">전체</button>
                                                    <button type="button" class="words__list__item btn-badge TAB-BTN" data-target="#tabExThankyou">😊고맙다</button>
                                                    <button type="button" class="words__list__item btn-badge TAB-BTN" data-target="#tabExFun">😝즐거웠다</button>
                                                    <button type="button" class="words__list__item btn-badge TAB-BTN" data-target="#tabExCheerUp">🤯힘내라</button>
                                                    <button type="button" class="words__list__item btn-badge TAB-BTN" data-target="#tabExEffort">😍수고했다</button>
                                                    <button type="button" class="words__list__item btn-badge TAB-BTN" data-target="#tabExClassicAppreciation">감사장</button>
                                                    <button type="button" class="words__list__item btn-badge TAB-BTN" data-target="#tabExClassicRecognition">표창장</button>
                                                    <button type="button" class="words__list__item btn-badge TAB-BTN" data-target="#tabExClassicAppointment">임명장</button>
                                                    <button type="button" class="words__list__item btn-badge TAB-BTN" data-target="#tabExClassicCertificates">수료증</button>
                                                </div>
                                                <div class="ex-words__list">
                                                    <button type="button" class="btn-gray btn-badge TAB-BTN" data-target="#tabKeyword">키워드로 작성</button>
                                                    <button type="button" class="btn-gray btn-badge TAB-BTN" data-target="#tabExScquaintance">지인</button>
                                                    <button type="button" class="btn-gray btn-badge TAB-BTN" data-target="#tabFriend">친구</button>
                                                    <button type="button" class="btn-gray btn-badge TAB-BTN" data-target="#tabDifferentGender">이성</button>
                                                    <button type="button" class="btn-gray btn-badge TAB-BTN" data-target="#tabDating">연애</button>
                                                    <button type="button" class="btn-gray btn-badge TAB-BTN" data-target="#tabParents">부모님</button>
                                                    <button type="button" class="btn-gray btn-badge TAB-BTN" data-target="#tabChildren">자녀</button>
                                                    <button type="button" class="btn-gray btn-badge TAB-BTN" data-target="#tabWorkshop">직장</button>
                                                    <button type="button" class="btn-gray btn-badge TAB-BTN" data-target="#tabMentor">멘토</button>
                                                    <button type="button" class="btn-gray btn-badge TAB-BTN" data-target="#tabInfluencer">인플루언서</button>
                                                    <button type="button" class="btn-gray btn-badge TAB-BTN" data-target="#tabReligion">신앙</button>
                                                    <button type="button" class="btn-gray btn-badge TAB-BTN" data-target="#tabPolitics">정치</button>
                                                    <button type="button" class="btn-gray btn-badge TAB-BTN" data-target="#tabEntertainments">연예</button>
                                                    <button type="button" class="btn-gray btn-badge TAB-BTN" data-target="#tabSports">스포츠</button>
                                                    <button type="button" class="btn-gray btn-badge TAB-BTN" data-target="#tabGoodWords">상춘문예</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panels">
                                            <div id="tabExThankyou" class="panel active" tabindex="0">
                                                <!-- 고맙다 검색 -->
                                                <?php include("$path/include/sample_words/inc_sample_thankyou.php"); ?>
                                                <!-- 고맙다 검색 End -->
                                            </div>

                                            <div id="tabExFun" class="panel" tabindex="0">
                                                <!-- 즐거웠다 검색 -->
                                                <?php include("$path/include/sample_words/inc_sample_fun.php"); ?>
                                                <!-- 즐거웠다 검색 End -->
                                            </div>

                                            <div id="tabExCheerUp" class="panel" tabindex="0">
                                                <!-- 힘내라 검색 -->
                                                <?php include("$path/include/sample_words/inc_sample_thankyou.php"); ?>
                                                <!-- 힘내라 검색 End -->
                                            </div>

                                            <div id="tabExEffort" class="panel" tabindex="0">
                                                <!-- 수고했다 검색 -->
                                                <?php include("$path/include/sample_words/inc_sample_fun.php"); ?>
                                                <!-- 수고했다 검색 End -->
                                            </div>

                                            <div id="tabExClassicAppreciation" class="panel" tabindex="0">
                                                <!-- 감사장 검색 -->
                                                <?php include("$path/include/sample_words/inc_sample_thankyou.php"); ?>
                                                <!-- 감사장 검색 End -->
                                            </div>

                                            <div id="tabExClassicRecognition" class="panel" tabindex="0">
                                                <!-- 표창장 검색 -->
                                                <?php include("$path/include/sample_words/inc_sample_fun.php"); ?>
                                                <!-- 표창장 검색 End -->
                                            </div>

                                            <div id="tabExClassicAppointment" class="panel" tabindex="0">
                                                <!-- 임명장 검색 -->
                                                <?php include("$path/include/sample_words/inc_sample_thankyou.php"); ?>
                                                <!-- 임명장 검색 -->
                                            </div>

                                            <div id="tabExClassicCertificates" class="panel" tabindex="0">
                                                <!-- 수료증 검색 -->
                                                <?php include("$path/include/sample_words/inc_sample_fun.php"); ?>
                                                <!-- 수료증 검색 End -->
                                            </div>

                                            <div id="tabKeyword" class="panel" tabindex="0">
                                                <!-- 키워드로 검색 -->
                                                <?php include("$path/include/sample_words/inc_sample_keyword.php"); ?>
                                                <!-- 키워드로 End -->
                                            </div>

                                            <div id="tabExScquaintance" class="panel" tabindex="0">
                                                <!-- 지인 검색 -->
                                                <?php include("$path/include/sample_words/inc_sample_thankyou.php"); ?>
                                                <!-- 지인 검색 End -->
                                            </div>
                                            <div id="tabFriend" class="panel" tabindex="0">
                                                <!-- 친구 검색 -->
                                                <?php include("$path/include/sample_words/inc_sample_fun.php"); ?>
                                                <!-- 친구 검색 End -->
                                            </div>

                                            <div id="tabDifferentGender" class="panel" tabindex="0">
                                                <!-- 이성 검색 -->
                                                <?php include("$path/include/sample_words/inc_sample_thankyou.php"); ?>
                                                <!-- 이성 검색 End -->
                                            </div>

                                            <div id="tabDating" class="panel" tabindex="0">
                                                <!-- 연애 검색 -->
                                                <?php include("$path/include/sample_words/inc_sample_fun.php"); ?>
                                                <!-- 연애 검색 End -->
                                            </div>

                                            <div id="tabParents" class="panel" tabindex="0">
                                                <!-- 부모님 검색 -->
                                                <?php include("$path/include/sample_words/inc_sample_thankyou.php"); ?>
                                                <!-- 부모님 검색 End -->
                                            </div>

                                            <div id="tabChildren" class="panel" tabindex="0">
                                                <!-- 자녀 검색 -->
                                                <?php include("$path/include/sample_words/inc_sample_fun.php"); ?>
                                                <!-- 자녀 검색 End -->
                                            </div>

                                            <div id="tabWorkshop" class="panel" tabindex="0">
                                                <!-- 직장 검색 -->
                                                <?php include("$path/include/sample_words/inc_sample_thankyou.php"); ?>
                                                <!-- 직장 검색 End -->
                                            </div>

                                            <div id="tabMentor" class="panel" tabindex="0">
                                                <!-- 멘토 검색 -->
                                                <?php include("$path/include/sample_words/inc_sample_fun.php"); ?>
                                                <!-- 멘토 검색 End -->
                                            </div>

                                            <div id="tabInfluencer" class="panel" tabindex="0">
                                                <!-- 인플루언서 검색 -->
                                                <?php include("$path/include/sample_words/inc_sample_thankyou.php"); ?>
                                                <!-- 인플루언서 검색 End -->
                                            </div>

                                            <div id="tabReligion" class="panel" tabindex="0">
                                                <!-- 신앙 검색 -->
                                                <?php include("$path/include/sample_words/inc_sample_fun.php"); ?>
                                                <!-- 신앙 검색 End -->
                                            </div>

                                            <div id="tabPolitics" class="panel" tabindex="0">
                                                <!-- 정치 검색 -->
                                                <?php include("$path/include/sample_words/inc_sample_thankyou.php"); ?>
                                                <!-- 정치 검색 End -->
                                            </div>

                                            <div id="tabEntertainments" class="panel" tabindex="0">
                                                <!-- 연예 검색 -->
                                                <?php include("$path/include/sample_words/inc_sample_fun.php"); ?>
                                                <!-- 연예 검색 End -->
                                            </div>

                                            <div id="tabSports" class="panel" tabindex="0">
                                                <!-- 스포츠 검색 -->
                                                <?php include("$path/include/sample_words/inc_sample_thankyou.php"); ?>
                                                <!-- 스포츠 검색 End -->
                                            </div>

                                            <div id="tabGoodWords" class="panel" tabindex="0">
                                                <!-- 상춘문예 검색 -->
                                                <?php include("$path/include/sample_words/inc_sample_fun.php"); ?>
                                                <!-- 상춘문예 검색 End -->
                                            </div>

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
    <!-- 예제 검색 End -->

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
                                            <li><a href="#tabSearchAbility" data-target="#tabSearchAbility">능력</a></li>
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

                                        <div id="tabSearchAbility" class="panel" tabindex="0">
                                            <!-- 스킬 검색 -->
                                            <?php include("$path/include/include_temp/inc_user_list_03.php"); ?>
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
                            <div class="private">
<!--                                <a href="#;" class="MODAL-BTN" data-target="#modalGuide"><h3 class="h3">공개 <img class="ico-question" src="/assets/img/ico/ico-question.png" alt="?"></h3></a>-->

                                <div class="private__outer">
                                    <div class="private__inner">
                                        <span class="forms btn-radio">
                                            <input type="radio" name="modal-private-type" value="private-all" id="modalPrivateAll" checked="checked">
                                            <label for="modalPrivateAll">전체공개</label>
                                            <span class="radio-ico"></span>
                                        </span>
                                        <span class="forms btn-radio">
                                            <input type="radio" name="modal-private-type" value="private-secret" id="modalPrivateSecret">
                                            <label for="modalPrivateSecret">비공개</label>
                                            <span class="radio-ico"></span>
                                        </span>
                                        <span class="forms btn-radio">
                                            <input type="radio" name="modal-private-type" value="private-link" id="modalPrivateLink">
                                            <label for="modalPrivateLink">일부공개</label>
                                            <span class="radio-ico"></span>
                                        </span>
                                        <span class="forms btn-radio">
                                            <input type="radio" name="modal-private-type" value="private-follow" id="modalPrivateFollow">
                                            <label for="modalPrivateFollow">팔로우만 공개</label>
                                            <span class="radio-ico"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="modal-option-desc">
                                    <div class="g search-input">
                                        <div class="r gap-hor-sm">
                                            <div class="c">
                                                <span class="forms forms-full">
                                                    <input type="text" placeholder="링크를 입력하세요." value="" id="privateLinkInput" class="INPUT-RESET">
                                                    <button class="INPUT-RESET-BTN" data-target="#privateLinkInput">×</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
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

    <!-- 쇼케이스 진열 유무  -->
    <div class="modal-dimmed" id="modalSzPublic2" data-ani-on="modal-ani-opacity" data-ani-off="modal-ani-opacity-opacity">
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
                                                    <a href="#;"><span class="ico-like"><img class="ico-like__img" src="/assets/img/ico/ico-loveit.png" alt="좋아요"></span><span class="ico-like-num">20</span></a>
                                                </div>
                                            </div>
                                            <div class="c c-inner-width center-right">
                                                <div class="btn-more-action">
                                                    <div class="img-more">
                                                        <a href="#;" class="img-more__link MODAL-BTN" data-target="#modalMore">
                                                            <div class="img-more__outer">
                                                                <img class="img-more__outer__img" src="/assets/img/ico/ico-more.png" alt="">
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
                                                    <a href="#;"><span class="ico-like"><img class="ico-like__img" src="/assets/img/ico/ico-loveit.png" alt="좋아요"></span><span class="ico-like-num">20</span></a>
                                                </div>
                                            </div>
                                            <div class="c c-inner-width center-right">
                                                <div class="btn-more-action">
                                                    <div class="img-more">
                                                        <a href="#;" class="img-more__link MODAL-BTN" data-target="#modalMore">
                                                            <div class="img-more__outer">
                                                                <img class="img-more__outer__img" src="/assets/img/ico/ico-more.png" alt="">
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
                                                    <a href="#;"><span class="ico-like"><img class="ico-like__img" src="/assets/img/ico/ico-loveit.png" alt="좋아요"></span><span class="ico-like-num">20</span></a>
                                                </div>
                                            </div>
                                            <div class="c c-inner-width center-right">
                                                <div class="btn-more-action">
                                                    <div class="img-more">
                                                        <a href="#;" class="img-more__link MODAL-BTN" data-target="#modalMore">
                                                            <div class="img-more__outer">
                                                                <img class="img-more__outer__img" src="/assets/img/ico/ico-more.png" alt="">
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
                                                    <a href="#;"><span class="ico-like"><img class="ico-like__img" src="/assets/img/ico/ico-loveit.png" alt="좋아요"></span><span class="ico-like-num">20</span></a>
                                                </div>
                                            </div>
                                            <div class="c c-inner-width center-right">
                                                <div class="btn-more-action">
                                                    <div class="img-more">
                                                        <a href="#;" class="img-more__link MODAL-BTN" data-target="#modalMore">
                                                            <div class="img-more__outer">
                                                                <img class="img-more__outer__img" src="/assets/img/ico/ico-more.png" alt="">
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
                                            <a href="#;"><span class="ico-like"><img class="ico-like__img" src="/assets/img/ico/ico-loveit-on.png" alt="좋아요"></span><span class="ico-like-num">20</span></a>
                                        </div>
                                    </div>
                                    <div class="c c-inner-width center-right">
                                        <div class="btn-more-action">
                                            <div class="img-more">
                                                <a href="#;" class="img-more__link MODAL-BTN" data-target="#modalMore">
                                                    <div class="img-more__outer">
                                                        <img class="img-more__outer__img" src="/assets/img/ico/ico-more.png" alt="">
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

    <!-- 상장 만들기 -->
        <!-- 공유하기 모달 팝업  -->
        <div class="modal-dimmed" id="modalShare" data-ani-on="modal-ani-opacity" data-ani-off="modal-ani-opacity-opacity">
            <div class="modal">
                <div class="modal-wrapper">
                    <div class="modal-container">
                        <div class="modal-content" data-ani-on="modal-ani-target" data-ani-off="modal-ani-target-target">
                            <div class="modal-close">
                                <a href="#modal" class="MODAL-CLOSE">×<span class="hidden">닫기</span></a>
                            </div>
                            <!-- 모달 헤더 -->
                            <div class="modal-header">
                                <h2>공유하기</h2>
                            </div>
                            <!-- 모달 헤더 End -->

                            <!-- 모달 바디 -->
                            <div class="modal-body">
                                <ul class="modal-list sns">
                                    <li><a href="#;"><img src="/assets/img/ico/sns-naver.png" alt="네이버"> 네이버</a></li>
                                    <li><a href="#;"><img src="/assets/img/ico/sns-kakao.png" alt="카카오톡"> 카카오톡</a></li>
                                    <li><a href="#;"><img src="/assets/img/ico/sns-google.png" alt="구글"> 구글</a></li>
                                    <li><a href="#;"><img src="/assets/img/ico/sns-facebook.png" alt="페이스북"> 페이스북</a></li>
                                    <li><a href="#;"><img src="/assets/img/ico/sns-instagram.png" alt="인스타그램"> 인스타그램</a></li>
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
        <!-- 공유하기 팝업 End -->

        <!-- 스크랩 모달 팝업  -->
        <div class="modal-dimmed" id="modalScrap" data-ani-on="modal-ani-opacity" data-ani-off="modal-ani-opacity-opacity">
            <div class="modal">
                <div class="modal-wrapper">
                    <div class="modal-container">
                        <div class="modal-content" data-ani-on="modal-ani-target" data-ani-off="modal-ani-target-target">
                            <div class="modal-close">
                                <a href="#modal" class="MODAL-CLOSE">×<span class="hidden">닫기</span></a>
                            </div>
                            <!-- 모달 헤더 -->
                            <div class="modal-header">
                                <h2>스크랩하기</h2>
                            </div>
                            <!-- 모달 헤더 End -->

                            <!-- 모달 바디 -->
                            <div class="modal-body">
                                <!--                            <ul class="modal-list">-->
                                <!--                                <li><a href="#;">스크랩하기</a></li>-->
                                <!--                            </ul>-->
                                <div>
                                    <span class="forms">
                                        <input class="display-block w-100" type="text" value="" placeholder="스크랩 메모">
                                    </span>
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
        <!-- 스크랩 작성 팝업 End -->

        <!-- 복사 후 작성 모달 팝업  -->
        <div class="modal-dimmed" id="modalCopyAndWrite" data-ani-on="modal-ani-opacity" data-ani-off="modal-ani-opacity-opacity">
            <div class="modal">
                <div class="modal-wrapper">
                    <div class="modal-container">
                        <div class="modal-content" data-ani-on="modal-ani-target" data-ani-off="modal-ani-target-target">
                            <div class="modal-close">
                                <a href="#modal" class="MODAL-CLOSE">×<span class="hidden">닫기</span></a>
                            </div>
                            <!-- 모달 헤더 -->
                            <div class="modal-header">
                                <h2>복사 후 작성 하기</h2>
                            </div>
                            <!-- 모달 헤더 End -->

                            <!-- 모달 바디 -->
                            <div class="modal-body">
                                <ul class="modal-list">
                                    <li><a href="#;"> 복사 후 작성 하기</a></li>
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
        <!-- 복사 후 작성 팝업 End -->

        <!-- 다운로드 모달 팝업  -->
        <div class="modal-dimmed" id="modalSzDownload" data-ani-on="modal-ani-opacity" data-ani-off="modal-ani-opacity-opacity">
            <div class="modal-full modal-height-max-full">
                <div class="modal-wrapper">
                    <div class="modal-container">
                        <div class="modal-content" data-ani-on="modal-ani-target" data-ani-off="modal-ani-target-target">
                            <div class="modal-close">
                                <a href="#modal" class="MODAL-CLOSE">×<span class="hidden">닫기</span></a>
                            </div>
                            <!-- 모달 헤더 -->
                            <div class="modal-header">
                                <h2>상장 다운로드</h2>
                            </div>
                            <!-- 모달 헤더 End -->

                            <!-- 모달 바디 -->
                            <div class="modal-body">
                                <div class="g sz-download-modal">
                                    <div class="r sz-download-modal-row">
                                        <div class="c sz-download-modal-col">
                                            <div class="sz-capture-loading">
                                                <img class="img-loading" src="/assets/img/loading/loading.jpg" alt="로딩 중"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 모달 바디 End -->

                            <!-- 모달 푸터 -->
                            <div class="modal-footer">
                                <div class="g btn-download-sz">
                                    <div class="r download-sz-size-select">
                                        <span class="forms">
                                            <input type="radio" name="downloadSize" value="620" id="downloadSizeDevice" checked="checked">
                                            <label for="downloadSizeDevice">일반</label>
                                        </span>
                                        <span class="forms">
                                            <input type="radio" name="downloadSize" value="1240" id="downloadSizePhotoCard">
                                            <label for="downloadSizePhotoCard">포토카드</label>
                                        </span>
                                        <span class="forms">
                                            <input type="radio" name="downloadSize" value="2480" id="downloadSizeA4">
                                            <label for="downloadSizeA4">A4용지</label>
                                        </span>
                                        <!--                                    <a class="btn" id="szDownload">다운로드(일반)</a>-->
                                        <!--                                    <a class="btn" id="szDownload3" onclick="alert('개발 중입니다.');return false;">다운로드 (포토카드)</a>-->
                                        <!--                                    <a class="btn" id="szDownload4" onclick="alert('개발 중입니다.');return false;">다운로드 (A4용지)</a>-->
                                    </div>
                                    <div class="r">
                                        <a class="btn" id="szDownload">다운로드</a>
                                        <a class="btn" id="szDownloadSize">다운로드 사이즈</a>
                                        <button class="btn btn-black MODAL-CLOSE">취소</button>
                                    </div>
                                </div>
                            </div>
                            <!-- 모달 푸터 End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 다운로드 팝업 End -->
    <!-- 상장 만들기 End -->

    <!-- 상장 보기 -->
        <div class="modal-dimmed" id="modalDate" data-ani-on="modal-ani-opacity" data-ani-off="modal-ani-opacity-opacity">
            <div class="modal-full modal-height-max-full modal-calendar">
                <div class="modal-wrapper">
                    <div class="modal-container">
                        <div class="modal-content" data-ani-on="modal-ani-target" data-ani-off="modal-ani-target-target">
                            <div class="modal-close">
                                <a href="#modal" class="MODAL-CLOSE">×<span class="hidden">닫기</span></a>
                            </div>
                            <!-- 모달 헤더 -->
                            <div class="modal-header">
                                <h2>달력</h2>
                            </div>
                            <!-- 모달 헤더 End -->

                            <!-- 모달 바디 -->
                            <div class="modal-body">
                                <div class="datepicker"></div>
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


        <!-- 사용자 검색 -->
        <div class="modal-dimmed" id="modalAddAbility" data-ani-on="modal-ani-opacity" data-ani-off="modal-ani-opacity-opacity">
            <div class="modal-full modal-height-full">
                <div class="modal-wrapper">
                    <div class="modal-container">
                        <div class="modal-content" data-ani-on="modal-ani-target" data-ani-off="modal-ani-target-target">
                            <div class="modal-close">
                                <a href="#modal" class="MODAL-CLOSE">×<span class="hidden">닫기</span></a>
                            </div>
                            <!-- 모달 헤더 -->
                            <div class="modal-header">
                                <h2>능력</h2>
                            </div>
                            <!-- 모달 헤더 End -->

                            <!-- 모달 바디 -->
                            <div class="modal-body">
                                <!--                            <div class="search">-->
                                <!--                                <div class="g search-input">-->
                                <!--                                    <div class="r gap-hor-sm">-->
                                <!--                                        <div class="c">-->
                                <!--                                                <span class="forms forms-full">-->
                                <!--                                                    <input type="text" placeholder="검색어를 입력하세요" value="" id="inputKeyward" class="INPUT-RESET">-->
                                <!--                                                    <button class="INPUT-RESET-BTN" data-target="#inputKeyward">×</button>-->
                                <!--                                                </span>-->
                                <!--                                        </div>-->
                                <!--                                        <div class="c c-inner-width">-->
                                <!--                                            <div class="search-btn">-->
                                <!--                                                    <span class="forms">-->
                                <!--                                                        <button type="button" class="btn-search">검색</button>-->
                                <!--                                                    </span>-->
                                <!--                                            </div>-->
                                <!--                                        </div>-->
                                <!--                                    </div>-->
                                <!--                                </div>-->
                                <!--                            </div>-->

                                <div class="add-ability">
                                    <input type="text" name="tagInput" class="add-ability-input" id="input-ability" placeholder="능력을 입력하세요. (최대 3개)" value="" autocomplete="off" style="position:absolute;left:-99999999999px;top:-99999999999px;">
                                </div>
                                <div class="add-ability-counting">
                                    <div class="add-ability-counting__header">
                                        <h4 class="add-ability-counting__header__title">남은 점수</h4>
                                        <div class="add-ability-counting__header__remain">
                                            <div class="add-ability-counting__header__remain_num">3</div>
<!--                                            <div class="g add-ability-counting__header__remain__lists">-->
<!--                                                <ul class="r add-ability-counting__header__remain__list">-->
<!--                                                    <li class="c add-ability-counting__header__remain__list__item">-->
<!--                                                        <a href="javascript:void(0);" class="counting-number"><span>1</span></a>-->
<!--                                                    </li>-->
<!--                                                    <li class="c add-ability-counting__header__remain__list__item">-->
<!--                                                        <a href="javascript:void(0);" class="counting-number"><span>2</span></a>-->
<!--                                                    </li>-->
<!--                                                    <li class="c add-ability-counting__header__remain__list__item">-->
<!--                                                        <a href="javascript:void(0);" class="counting-number"><span>3</span></a>-->
<!--                                                    </li>-->
<!--                                                    <li class="c add-ability-counting__header__remain__list__item">-->
<!--                                                        <a href="javascript:void(0);" class="counting-number"><span>4</span></a>-->
<!--                                                    </li>-->
<!--                                                    <li class="c add-ability-counting__header__remain__list__item">-->
<!--                                                        <a href="javascript:void(0);" class="counting-number off"><span>5</span></a>-->
<!--                                                    </li>-->
<!--                                                </ul>-->
<!--                                            </div>-->

                                        </div>
                                    </div>
                                    <div class="g add-ability-counting__body">
                                        <div class="add-ability-counting__body__guide">점수를 선택하세요.</div>
                                        <div class="add-ability-counting__body__lists">
                                            <ul class="add-ability-counting__body__list">
                                                <li class="add-ability-counting__body__list__item">
                                                    <div class="add-ability-counting__body__list__item__title">뷰티뷰티</div>
                                                    <div class="add-ability-counting__body__list__item__value">
                                                        <a href="javascript:void(0);" class="counting-number sm"><span>1</span></a>
                                                        <a href="javascript:void(0);" class="counting-number sm off"><span>2</span></a>
                                                        <a href="javascript:void(0);" class="counting-number sm off"><span>3</span></a>
                                                        <a href="javascript:void(0);" class="counting-number sm off"><span>4</span></a>
                                                        <a href="javascript:void(0);" class="counting-number sm off"><span>5</span></a>
                                                    </div>
                                                </li>
                                                <li class="add-ability-counting__body__list__item">
                                                    <div class="add-ability-counting__body__list__item__title">게임</div>
                                                    <div class="add-ability-counting__body__list__item__value">
                                                        <a href="javascript:void(0);" class="counting-number sm"><span>1</span></a>
                                                        <a href="javascript:void(0);" class="counting-number sm"><span>2</span></a>
                                                        <a href="javascript:void(0);" class="counting-number sm off"><span>3</span></a>
                                                        <a href="javascript:void(0);" class="counting-number sm off"><span>4</span></a>
                                                        <a href="javascript:void(0);" class="counting-number sm off"><span>5</span></a>
                                                    </div>
                                                </li>
                                                <li class="add-ability-counting__body__list__item">
                                                    <div class="add-ability-counting__body__list__item__title">맥북맥북맥북맥북</div>
                                                    <div class="add-ability-counting__body__list__item__value">
                                                        <a href="javascript:void(0);" class="counting-number sm"><span>1</span></a>
                                                        <a href="javascript:void(0);" class="counting-number sm off"><span>2</span></a>
                                                        <a href="javascript:void(0);" class="counting-number sm off"><span>3</span></a>
                                                        <a href="javascript:void(0);" class="counting-number sm off"><span>4</span></a>
                                                        <a href="javascript:void(0);" class="counting-number sm off"><span>5</span></a>
                                                    </div>
                                                </li>
                                                <li class="add-ability-counting__body__list__item">
                                                    <div class="add-ability-counting__body__list__item__title">여행</div>
                                                    <div class="add-ability-counting__body__list__item__value">
                                                        <a href="javascript:void(0);" class="counting-number sm"><span>1</span></a>
                                                        <a href="javascript:void(0);" class="counting-number sm off"><span>2</span></a>
                                                        <a href="javascript:void(0);" class="counting-number sm off"><span>3</span></a>
                                                        <a href="javascript:void(0);" class="counting-number sm off"><span>4</span></a>
                                                        <a href="javascript:void(0);" class="counting-number sm off"><span>5</span></a>
                                                    </div>
                                                </li>
                                                <li class="add-ability-counting__body__list__item">
                                                    <div class="add-ability-counting__body__list__item__title">자연</div>
                                                    <div class="add-ability-counting__body__list__item__value">
                                                        <a href="javascript:void(0);" class="counting-number sm"><span>1</span></a>
                                                        <a href="javascript:void(0);" class="counting-number sm off"><span>2</span></a>
                                                        <a href="javascript:void(0);" class="counting-number sm off"><span>3</span></a>
                                                        <a href="javascript:void(0);" class="counting-number sm off"><span>4</span></a>
                                                        <a href="javascript:void(0);" class="counting-number sm off"><span>5</span></a>
                                                    </div>
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
        <!-- 사용자 검색 End -->
    <!-- 상장 보기 End -->
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
<!--                                                <a href="#;" class="trigger img-more__outer"><img class="img-more__outer__img" src="/assets/img/ico/ico-more.png" alt=""></a>-->
<!--                                            </div>-->
<!--                                        </div>-->
                                    </div>
                                </div>
                            </div>

                            <div class="user-skill-grp"></div>

                            <div class="user-skill-detail-grp">
                                <div class="user-skill-detail-header">
                                    어빌리티
                                </div>
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

    <!-- 스낵 바 메세지 -->
    <div class="snackbar">
        <div>Operation completed successfully</div>
    </div>
    <!-- 스낵 바 메세지  End -->

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


