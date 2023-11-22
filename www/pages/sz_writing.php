<!doctype html>
<html lang="ko">
<head>
    <?php $path = $_SERVER['DOCUMENT_ROOT'];?>
    <?php include("$path/include/meta_head.php"); ?>
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WTGM2WFN" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="wrap">
    <!-- header -->
    <?php include("$path/include/header.php"); ?>
    <!-- header End -->
    <!-- container -->
    <section id="container">
        <!-- h1 -->
        <div class="header-01">
            <h1>상장 만들기</h1>
        </div>
        <!-- h1 End -->
        <!-- content -->
        <!-- content -->
        <div class="content content-SZ-WRITE container-xs">

            <div class="layout-two-one inner-scroll">
                <div class="layout-two-one__layout-left self-top">

                <!-- 좌측 영역 -->

                    <!-- 상장 예문 1
                    <div class="same-select col-visible lg-hidden">
                        <h3 class="h3 hidden">예제</h3>
                        <div class="samples">
                            <div>
                                <a href="#;">지인<br class="lg-hidden">친구</a>
                                <a href="#;">이성<br class="lg-hidden">연애</a>
                                <a href="#;">자녀<br class="lg-hidden">부모님</a>
                                <a href="#;">스승<br class="lg-hidden">제자</a>
                                <a href="#;">직장<br class="lg-hidden">멘토</a>
                            </div>
                            <div>
                                <a href="#;">인플루언서</a>
                                <a href="#;">신앙</a>
                                <a href="#;">정치</a>
                                <a href="#;">연예<br class="lg-hidden">스포츠</a>
                                <a href="#;">상춘<br class="lg-hidden">문예</a>
                            </div>
                        </div>
                    </div>

                    <!-- 텍스트 옵션 수정 -->

                    <!-- 텍스트 옵션 수정 End -->

                    <!-- 상장 예문 1 End -->

                    <!-- 상장 만들기 -->
                    <!--
                        https://html2canvas.hertzen.com/
                        https://www.url2png.com/#testdrive
                    -->

                    <div class="SANGZZANG SZ-ORIGIN SZ-WRITING">
                        <div class="SZ-WRITE SZ-RATIO clearfix CAPTUREAREA">
                            <img class="sz-design" src="/assets/img/design/sz_000004.png" alt=""/>

                            <div class="sz-name ELEMENT">
                                <div id="sangName" rows="1" name="sangName" class="CONTENTEDITABLE" contenteditable="true">상 장</div>
                                <div class="edit-guide-wrapper">
                                    <div class="button-edit-wrapper">
                                        <div class="button-edit">
                                            <button type="button" class="button SELECT-ALL" title="전체선택"><img src="/assets/img/ico/ico-select-all.png"></button>
                                            <button type="button" class="button FONT-UP" title="폰트 크게">+</button>
                                            <button type="button" class="button FONT-DOWN" title="폰트 작게">ㅡ</button>
                                            <button type="button" class="button EDITOR-CLOSE" title="에디터 닫기">x</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="sz-title ELEMENT">

                                <div id="sangTitle" rows="1" name="sangTitle" class="CONTENTEDITABLE" contenteditable="true">마리오 파티 우승</div>
                                <div class="edit-guide-wrapper">
                                    <div class="button-edit-wrapper">
                                        <div class="button-edit">
                                            <button type="button" class="button SELECT-ALL" title="전체선택"><img src="/assets/img/ico/ico-select-all.png"></button>
                                            <button type="button" class="button FONT-UP" title="폰트 크게">+</button>
                                            <button type="button" class="button FONT-DOWN" title="폰트 작게">ㅡ</button>
                                            <button type="button" class="button EDITOR-CLOSE" title="에디터 닫기">x</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sz-receiver ELEMENT">
                                <div id="sangReceiver" rows="1" name="sangReceiver" class="CONTENTEDITABLE" contenteditable="true">정서윤</div>
                                <div class="edit-guide-wrapper">
                                    <div class="button-edit-wrapper">
                                        <div class="button-edit">
                                            <button type="button" class="button SELECT-ALL" title="전체선택"><img src="/assets/img/ico/ico-select-all.png"></button>
                                            <button type="button" class="button FONT-UP" title="폰트 크게">+</button>
                                            <button type="button" class="button FONT-DOWN" title="폰트 작게">ㅡ</button>
                                            <button type="button" class="button EDITOR-SEARCH MODAL-BTN" data-target="#modalWritingUserSearch" title="검색하기"><img src="/assets/img/ico/ico-search.png" alt="검색"></button>
                                            <button type="button" class="button EDITOR-CLOSE" title="에디터 닫기">x</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sz-word ELEMENT">
                                <textarea id="sangText" name="sangText" class="CONTENTEDITABLE" contenteditable="true">위 사람은 제1회 한봉식배 닌텐도
스위치 마리오 파티 게임에서 무수한 경쟁자를 제치고 챔피언이 되었으므로
이 상을 드립니다.

다음에도 다시 챔피언이 될 수 있도록 하세요!</textarea>
                                <div id="sangTextDiv"></div>

                                <div class="edit-guide-wrapper">
                                    <div class="button-edit-wrapper">
                                        <div class="button-edit">
                                            <button type="button" class="button SELECT-ALL" title="전체선택"><img src="/assets/img/ico/ico-select-all.png"></button>
                                            <button type="button" class="button FONT-UP" title="폰트 크게">+</button>
                                            <button type="button" class="button FONT-DOWN" title="폰트 작게">ㅡ</button>
                                            <button type="button" class="button EDITOR-EASY" title="easy" onclick="window.open('/pages/writing_ai.php', '', '_blank');"><img src="/assets/img/ico/ico-ai.png"></button>
                                            <button type="button" class="button EDITOR-CLOSE" title="에디터 닫기">x</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sz-date ELEMENT">
                                <div class="edit-guide-wrapper">
                                    <div class="button-edit-wrapper">
                                        <div class="button-edit">
                                            <button type="button" class="button SELECT-ALL" title="전체선택"><img src="/assets/img/ico/ico-select-all.png"></button>
                                            <button type="button" class="button FONT-UP" title="폰트 크게">+</button>
                                            <button type="button" class="button FONT-DOWN" title="폰트 작게">ㅡ</button>
                                            <button type="button" class="button EDITOR-CALENDAR MODAL-BTN" data-target="#modalDate" title="날짜선택"><img src="/assets/img/ico/ico-calendar.png"></button>
                                            <button type="button" class="button EDITOR-CLOSE" title="에디터 닫기">x</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="sangDate" name="sangDate" class="CONTENTEDITABLE" contenteditable="true">2021년 2월 24일</div>
                            </div>
                            <div class="sz-sticker">
                                <a href="#;" class="MODAL-BTN" data-target="#modalSticker">
                                    <img class="sz-sticking" src="/assets/img/design/ico-hand.png" alt="스티커 찍는 손"/>
                                    <img class="sz-sticker-img" src="/assets/img/design/stk/sz_stk_000007.png" alt=""/>
                                </a>
                            </div>
                            <div class="sz-sender ELEMENT">
                                <div id="sangSender" name="sangSender" class="CONTENTEDITABLE" contenteditable="true">한봉식</div>
                                <div class="edit-guide-wrapper">
                                    <div class="button-edit-wrapper">
                                        <div class="button-edit">
                                            <button type="button" class="button SELECT-ALL" title="전체선택"><img src="/assets/img/ico/ico-select-all.png"></button>
                                            <button type="button" class="button FONT-UP" title="폰트 크게">+</button>
                                            <button type="button" class="button FONT-DOWN" title="폰트 작게">ㅡ</button>
                                            <button type="button" class="button EDITOR-CLOSE" title="에디터 닫기">x</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sz-stamp">
                                <a href="#;" class="MODAL-BTN" data-target="#modalStamp">
                                    <img class="sz-stamping" src="/assets/img/design/ico-hand2.png" alt="도장 찍는 손"/>
                                    <img class="sz-stamp-img" src="/assets/img/design/stp/sz_stp_000002.png" alt=""/>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 상장 만들기 End -->

                    <div class="r post__row">
                        <div class="sz-function sz-function-01 shadow">
                            <a href="#;" id="scrap" class="MODAL-BTN" data-target="#modalScrap" title="스크랩">
                                <span class="scrap">
                                    <img src="/assets/img/ico-scrap.png" alt=""> <span class="sz-function-name">스크랩</span>
                                </span>
                            </a>
                            <a href="#;" id="copy" class="MODAL-BTN" data-target="#modalCopyAndWrite" title="복사">
                                <span class="copy last">
                                    <img src="/assets/img/ico/ico-copy.png" alt=""> <span class="sz-function-name">복사</span>
                                </span>
                            </a>
                            <a href="#;" id="download" class="MODAL-BTN" data-target="#modalSzDownload" title="다운로드">
                                <span class="download last">
                                    <img src="/assets/img/ico/ico-download.png" alt=""> <span class="sz-function-name">다운로드</span>
                                </span>
                            </a>
                            <a href="/pages/3d-card.php" title="3D카드">
                                <span class="d360 last">
                                    <img src="/assets/img/ico/ico-360.png" alt=""> <span class="sz-function-name">3D카드</span>
                                </span>
                            </a>
                            <a href="#;" id="share" class="MODAL-BTN" data-target="#modalShare" title="공유">
                                <span class="share">
                                    <img src="/assets/img/ico/ico-share.png" alt=""> <span class="sz-function-name">공유</span>
                                </span>
                            </a>
                        </div>
                    </div>

                    <!-- 상장 디자인 리스트 -->
                    <div class="sz-design-select">
                        <h3 class="h3 hidden">상장 디자인</h3>
                        <div class="g sz-bg-lists">
                            <ul id="r sz-bg-lists__list">
                                <li class="c sz-bg-lists__list__item">
                                    <div class="sz-bg-list">
                                        <div class="sz-bg-list__outer">
                                            <a href="#;" class="sz-design__img__btn"><img class="sz-design__img" src="/assets/img/design/sz_000001.png" alt=""/></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="c sz-bg-lists__list__item">
                                    <div class="sz-bg-list">
                                        <div class="sz-bg-list__outer">
                                            <a href="#;" class="sz-design__img__btn"><img class="sz-design__img" src="/assets/img/design/sz_000002.png" alt=""/></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="c sz-bg-lists__list__item">
                                    <div class="sz-bg-list">
                                        <div class="sz-bg-list__outer">
                                            <a href="#;" class="sz-design__img__btn"><img class="sz-design__img" src="/assets/img/design/sz_000003.png" alt=""/></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="c sz-bg-lists__list__item">
                                    <div class="sz-bg-list">
                                        <div class="sz-bg-list__outer">
                                            <a href="#;" class="sz-design__img__btn on"><img class="sz-design__img" src="/assets/img/design/sz_000004.png" alt=""/></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="c sz-bg-lists__list__item">
                                    <div class="sz-bg-list">
                                        <div class="sz-bg-list__outer">
                                            <a href="#;" class="sz-design__img__btn"><img class="sz-design__img" src="/assets/img/design/sz_000005.png" alt=""/></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="c sz-bg-lists__list__item">
                                    <div class="sz-bg-list">
                                        <div class="sz-bg-list__outer">
                                            <a href="#;" class="sz-design__img__btn"><img class="sz-design__img" src="/assets/img/design/sz_000006.png" alt=""/></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="c sz-bg-lists__list__item">
                                    <div class="sz-bg-list">
                                        <div class="sz-bg-list__outer">
                                            <a href="#;" class="sz-design__img__btn"><img class="sz-design__img" src="/assets/img/design/sz_000001.png" alt=""/></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- 상장 디자인 리스트 End -->
                </div>
                <!-- 좌측 영역 End -->

                <div class="layout-two-one__layout-right self-top">
                    <div class="SZ-WRITE-detail">
                        <div class="g">
<!--                            <div class="r">-->
<!--                                <div class="c">-->
<!--                                    <h3 class="h3">AI 작성 <a href="/pages/writing_ai.php" target="_blank"><img class="concept" src="/assets/img/sample/concept-01.png" alt=""></a></h3>-->
<!--                                </div>-->
<!--                            </div>-->
                            <div class="r SZ-WRITE-detail__row">
                                <div class="c">
                                    <div class="ex-words">
                                        <div class="h3">
                                            <a href="#;" class="h3__link MODAL-BTN" data-target="#modalGuide"><h3>예제 <img class="ico-question" src="/assets/img/ico/ico-question.png" alt="?"></h3></a>
                                        </div>

                                        <div class="tab ex-words__outer">
                                            <div class="tab__list">
                                                <div class="ex-words__outer">
                                                    <div class="ex-words__list">
                                                        <button type="button" class="words__list__item btn-badge MODAL-BTN" data-target="#modalExSearch">😊고맙다</button>
                                                        <button type="button" class="words__list__item btn-badge MODAL-BTN" data-target="#modalExSearch">😝즐거웠다</button>
                                                        <button type="button" class="words__list__item btn-badge MODAL-BTN" data-target="#modalExSearch">🤯힘내라</button>
                                                        <button type="button" class="words__list__item btn-badge MODAL-BTN" data-target="#modalExSearch">😍수고했다</button>
                                                        <button type="button" class="words__list__item btn-badge MODAL-BTN" data-target="#modalExSearch">감사장</button>
                                                        <button type="button" class="words__list__item btn-badge MODAL-BTN" data-target="#modalExSearch">표창장</button>
                                                        <button type="button" class="words__list__item btn-badge MODAL-BTN" data-target="#modalExSearch">임명장</button>
                                                        <button type="button" class="words__list__item btn-badge MODAL-BTN" data-target="#modalExSearch">수료증</button>
                                                    </div>
                                                    <div class="ex-words__list">
                                                        <button type="button" class="btn-gray btn-badge MODAL-BTN" data-target="#modalExSearch">지인</button>
                                                        <button type="button" class="btn-gray btn-badge MODAL-BTN" data-target="#modalExSearch">친구</button>
                                                        <button type="button" class="btn-gray btn-badge MODAL-BTN" data-target="#modalExSearch">이성</button>
                                                        <button type="button" class="btn-gray btn-badge MODAL-BTN" data-target="#modalExSearch">연애</button>
                                                        <button type="button" class="btn-gray btn-badge MODAL-BTN" data-target="#modalExSearch">부모님</button>
                                                        <button type="button" class="btn-gray btn-badge MODAL-BTN" data-target="#modalExSearch">자녀</button>
                                                        <button type="button" class="btn-gray btn-badge MODAL-BTN" data-target="#modalExSearch">직장</button>
                                                        <button type="button" class="btn-gray btn-badge MODAL-BTN" data-target="#modalExSearch">멘토</button>
                                                        <button type="button" class="btn-gray btn-badge MODAL-BTN" data-target="#modalExSearch">인플루언서</button>
                                                        <button type="button" class="btn-gray btn-badge MODAL-BTN" data-target="#modalExSearch">신앙</button>
                                                        <button type="button" class="btn-gray btn-badge MODAL-BTN" data-target="#modalExSearch">정치</button>
                                                        <button type="button" class="btn-gray btn-badge MODAL-BTN" data-target="#modalExSearch">연예</button>
                                                        <button type="button" class="btn-gray btn-badge MODAL-BTN" data-target="#modalExSearch">스포츠</button>
                                                        <button type="button" class="btn-gray btn-badge MODAL-BTN" data-target="#modalExSearch">상춘문예</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="r SZ-WRITE-detail__row">
                                <div class="c">
                                    <div class="ability">
                                        <div class="h3">
                                            <a href="#;" class="h3__link MODAL-BTN" data-target="#modalGuide"><h3><span class="ico-required">*</span>능력 <img class="ico-question" src="/assets/img/ico/ico-question.png" alt="?"></h3></a>
                                        </div>
                                        <div class="sz-writing-ability">
                                            <div class="g tag-skills">
                                                <ul class="r tag-skills__list">
                                                    <li class="c tag-skills__list__item">
                                                        <div class="tag-skill">
                                                            <span class="tag-skill__num"><span class="tag-skill__value">12</span><span class="tag-skill__up">↑</span></span>
                                                            <span class="tag-skill__name">패션</span>
                                                        </div>
                                                    </li>
                                                    <li class="c tag-skills__list__item">
                                                        <div class="tag-skill">
                                                            <span class="tag-skill__num"><span class="tag-skill__value">82</span><span class="tag-skill__up">↑</span></span>
                                                            <span class="tag-skill__name">아트</span>
                                                        </div>
                                                    </li>
                                                    <li class="c tag-skills__list__item">
                                                        <div class="tag-skill">
                                                            <span class="tag-skill__num"><span class="tag-skill__value">90</span><span class="tag-skill__up">↑</span></span>
                                                            <span class="tag-skill__name">beauty</span>
                                                        </div>
                                                    </li>
                                                    <li class="c tag-skills__list__item">
                                                        <div class="tag-skill">
                                                            <span class="tag-skill__num"><span class="tag-skill__value">666</span><span class="tag-skill__up">↑</span></span>
                                                            <span class="tag-skill__name">게임</span>
                                                        </div>
                                                    </li>
                                                    <li class="c tag-skills__list__item">
                                                        <div class="tag-skill">
                                                            <span class="tag-skill__num"><span class="tag-skill__value">37</span><span class="tag-skill__up">↑</span></span>
                                                            <span class="tag-skill__name">맥북</span>
                                                        </div>
                                                    </li>
                                                    <li class="c tag-skills__list__item">
                                                        <div class="tag-skill">
                                                            <span class="tag-skill__num"><span class="tag-skill__value">8</span><span class="tag-skill__up">↑</span></span>
                                                            <span class="tag-skill__name">여행</span>
                                                        </div>
                                                    </li>
                                                    <li class="c tag-skills__list__item">
                                                        <div class="tag-skill">
                                                            <span class="tag-skill__num"><span class="tag-skill__value">90</span><span class="tag-skill__up">↑</span></span>
                                                            <span class="tag-skill__name">nature</span>
                                                        </div>
                                                    </li>
                                                </ul>

                                            </div>

                                        </div>
                                        <!--                                                <input type="text" class="primary ability-input input-full" placeholder="필수" value="">-->
<!--                                        <a href="#;" class="MODAL-BTN sz-writing-modify" data-target="#modalAddAbility" id="addAbility">-->

                                        <a href="#;" class="MODAL-BTN sz-writing-modify" data-target="#modalAddAbility" id="addAbility">수정하기</a>
                                    </div>
                                </div>
                            </div>

                            <div class="r SZ-WRITE-detail__row">
                                <div class="c">
                                    <div class="story">
                                        <div class="h3">
                                            <a href="#;" class="h3__link MODAL-BTN" data-target="#modalGuide"><h3>받는사람 <img class="ico-question" src="/assets/img/ico/ico-question.png" alt="?"></h3></a>
                                        </div>
                                        <style>
                                            .sz-writing-ability {padding:10px 10px;min-height:40px;border: 1px solid #e8e8e8;transition: all var(--transition-time);border-radius:var(--radius);background-color:#fff;background:#fafafa !important;resize: none;}
                                            .sz-writing-receiver{display:block;opacity:1;width:100%;overflow:auto;padding:0 0px;min-height:40px;border: 1px solid #e8e8e8;transition: all var(--transition-time);border-radius:var(--radius);background-color:#fff;background:#fafafa !important;resize: none;}
                                            .sz-writing-receiver .users__list{display:flex;white-space:nowrap;gap:0 15px;}
                                            .sz-writing-receiver .users__list__item:nth-of-type(1){padding-left:10px;}
                                            .sz-writing-receiver .users__list__item:nth-last-of-type(1){padding-right:10px;}
                                            .sz-writing-receiver.with-remove .users__list__item:nth-last-of-type(1){padding-right:40px;}
                                            .sz-writing-receiver .users__list__item{display:inline-flex;flex-wrap:nowrap;padding:8px 5px 4px 5px;}

                                            .users__list.sm{font-size:13px;}
                                            .sz-writing-modify{display:block;width:100%;text-align:center;border:1px solid #e8e8e8;margin-top:0px;padding:5px 0;border-bottom-left-radius:var(--radius);border-bottom-right-radius:var(--radius);}

                                            .with-remove .users__list__item{padding-right:35px;}
                                            .user-profile .remove-user{position: absolute;right:-30px;top: 0;z-index: 10;color: #fff;font-weight: 600;display: inline-block;width: 25px;height: 25px;line-height: 25px;background: var(--primary);border-radius: 50%;}

                                            .sz-writing-receiver.with-remove{box-shadow: 6px -2px 10px rgb(0 0 0 / 10%);}
                                            .modal-body.with-receiver-list{padding-bottom:60px;}
                                            .modal-body.with-receiver-list .modal-body__bottom{position:fixed;width:100%;margin:0 -10px;bottom:60px;}
                                        </style>
                                        <div class="sz-writing-receiver">
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
                                        <a href="#;" class="MODAL-BTN sz-writing-modify" data-target="#modalWritingUserSearch" id="receiver">수정하기</a>
<!--                                            <input type="text" class="primary receiver-input input-full" placeholder="" value="">-->

                                    </div>
                                </div>
                            </div>

                            <div class="r SZ-WRITE-detail__row">
                                <div class="c">
                                    <div class="story">
                                        <div class="h3">
                                            <a href="#;" class="h3__link MODAL-BTN" data-target="#modalGuide"><h3>스토리 <img class="ico-question" src="/assets/img/ico/ico-question.png" alt="?"></h3></a>
                                        </div>
                                        <div class="forms">
                                            <label for="story" class="hidden">스토리</label>
                                            <textarea id="story" class="primary story"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="r SZ-WRITE-detail__row">
                                <div class="c">
                                    <a href="javascript:void(0);" class="TOGGLE-BTN addInfo" data-target="#toggleWritingAddInfo">추가정보 입력 (사진,동영상,링크,이름가리기) <span class="toggle-ico"></span></a>
                                </div>
                            </div>
                            <div class="r SZ-WRITE-detail__row TOGGLE-PANEL" id="toggleWritingAddInfo">
                                <div class="c">
                                    <div class="g">
                                        <div class="r SZ-WRITE-detail__row">
                                            <div class="c">

                                                <div class="photo">
                                                    <div class="h3">
                                                        <a href="#;" class="h3__link MODAL-BTN" data-target="#modalGuide"><h3>사진 <img class="ico-question" src="/assets/img/ico/ico-question.png" alt="?"></h3></a>
                                                    </div>
                                                    <form enctype=“multipart/form-data”>
                                                        <input type="file" value="파일첨부" accept="image/*" class="primary input-photo"/>
                                                    </form>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="r SZ-WRITE-detail__row">
                                            <div class="c">

                                                <div class="movie">
                                                    <div class="h3">
                                                        <a href="#;" class="h3__link MODAL-BTN" data-target="#modalGuide"><h3>동영상 <img class="ico-question" src="/assets/img/ico/ico-question.png" alt="?"></h3></a>
                                                    </div>
                                                    <div class="forms">
                                                        <label for="hashTag" class="hidden">동영상</label>
                                                        <input type="text" id="hashTag" placeholder="유튜브 동영상 링크" class="primary movie-input">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="r SZ-WRITE-detail__row">
                                            <div class="c">
                                                <div class="source">
                                                    <div class="h3">
                                                        <a href="#;" class="h3__link MODAL-BTN" data-target="#modalGuide"><h3>링크 <img class="ico-question" src="/assets/img/ico/ico-question.png" alt="?"></h3></a>
                                                    </div>
                                                    <div class="forms">
                                                        <label for="source" class="hidden">링크</label>
                                                        <input type="text" id="source" placeholder="" class="primary source-input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="r SZ-WRITE-detail__row">
                                            <div class="c">
                                                <div class="source">
                                                    <div class="h3">
                                                        <a href="#;" class="h3__link MODAL-BTN" data-target="#modalGuide"><h3>이름 가리기 <img class="ico-question" src="/assets/img/ico/ico-question.png" alt="?"></h3></a>
                                                    </div>
                                                    <div class="forms">
                                                        <label for="source" class="hidden">이름 가리기</label>
                                                        <span class="forms">
                                                            <label for="checkbox-sw01" class="switch">
                                                                <input type="checkbox" name="checkbox-sw01" value="checkbox-sw01" id="checkbox-sw01">
                                                                <span class="slider"></span>
                                                            </label>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>
                            </div>
                            <div class="r SZ-WRITE-detail__row">
                                <div class="c">
                                    <div class="private">
                                        <a href="#;" class="MODAL-BTN" data-target="#modalGuide"><h3 class="h3">공개 <img class="ico-question" src="/assets/img/ico/ico-question.png" alt="?"></h3></a>

                                        <div class="private__outer">
                                            <div class="private__inner">
                                                <!--                                            <span class="forms">-->
                                                <!--                                                <label for="checkbox-sw02" class="switch">-->
                                                <!--                                                    <input type="checkbox" name="checkbox-sw02" value="checkbox-sw02" id="checkbox-sw02" checked="checked">-->
                                                <!--                                                    <span class="slider"></span>-->
                                                <!--                                                </label>-->
                                                <!--                                            </span>-->

                                                <span class="forms btn-radio">
                                                    <input type="radio" name="private-type" value="private-all" id="privateAll" checked="checked">
                                                    <label for="privateAll">전체공개</label>
                                                    <span class="radio-ico"></span>
                                                </span>
                                                    <span class="forms btn-radio">
                                                    <input type="radio" name="private-type" value="private-secret" id="privateSecret">
                                                    <label for="privateSecret">비공개</label>
                                                    <span class="radio-ico"></span>
                                                </span>
                                                    <span class="forms btn-radio">
                                                    <input type="radio" name="private-type" value="private-link" id="privateLink">
                                                    <label for="privateLink">일부공개</label>
                                                    <span class="radio-ico"></span>
                                                </span>
                                                    <span class="forms btn-radio">
                                                    <input type="radio" name="private-type" value="private-follow" id="privateFollow">
                                                    <label for="privateFollow">팔로우만 공개</label>
                                                    <span class="radio-ico"></span>
                                                </span>
                                            </div>

                                            <!--                                        <div class="forms">-->
                                            <!--                                            <label for="for-select1" class="hidden">공개</label>-->
                                            <!--                                            <select id="for-select1">-->
                                            <!--                                                <option value="">전체공개</option>-->
                                            <!--                                                <option value="">친구만</option>-->
                                            <!--                                                <option value="">링크가있는 사람만</option>-->
                                            <!--                                                <option value="">나만</option>-->
                                            <!--                                                <option value="">제외할 친구</option>-->
                                            <!--                                            </select>-->
                                            <!--                                        </div>-->
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <div class="r SZ-WRITE-detail__row">
                                <div class="c">
                                    <div class="guide">
                                        <p><img class="ico-info" src="/assets/img/ico/ico-info.png" alt="?"> 프린트는 작성완료 후 가능합니다.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="r SZ-WRITE-detail__row">
                                <div class="c">
                                    <div class="btn-group">
                                        <button type="button" id="SAVE" class="btn btn-primary btn-lg" onclick="go('./sz_view.php')">작성완료</button>
                                        <button type="button" id="SAVE" class="btn btn-secondary btn-lg" >미리보기</button>
                                        <button type="button" class="btn btn-black btn-lg">초기화</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        <!-- content End -->

    </section>
    <!-- container End -->
    <!-- footer -->
    <?php include("$path/include/footer.php"); ?>
    <!-- footer End -->

    <!-- 모달 -->
    <?php include("$path/include/modal_common.php"); ?>
    <!-- 모달 End -->
    <!-- 상장 temp -->
    <script>
        $(document).ready(function(){
            $('.sz-bg-lists .sz-design__img__btn').on( 'click' , function(e){
                let szBgSrc = $(this).find('.sz-design__img').attr('src');
                $('.sz-bg-lists .sz-design__img__btn').removeClass('on');
                $(this).addClass('on');
                $('.sz-design').removeClass('on').attr('src',szBgSrc).addClass('on');
                setTimeout(function(){
                    $('.sz-design').removeClass('on')
                }, 1000);
                e.preventDefault();
            });
            $('#modalSticker .sticker-choice > ul > li a').on('click',function(){
                modalOff('#modalSticker');
                let stickerSrc = $(this).find('img').attr('src') ;
                setTimeout(function() {
                    $('.SZ-RATIO .sz-sticker > a > .sz-sticker-img').attr('src', stickerSrc).addClass('select-sticker-ani-in');
                    $('.SZ-RATIO .sz-sticking').css('display','inline-block').addClass('select-sticker-ani-in');
                },270);
                setTimeout(function() {
                    $('.SZ-RATIO .sz-sticker > a > .sz-sticker-img').removeClass('select-sticker-ani-in');
                    $('.SZ-RATIO .sz-sticking').css('display','none');
                    $('.SZ-RATIO .sz-sticking').removeClass('select-ani-in');
                    $('.SZ-RATIO .sz-sticker > a > .sz-sticker-img').attr('src', stickerSrc);
                },700);

            });
            $('#modalStamp .stamp-choice > ul > li a').on('click',function(){
                modalOff('#modalStamp');
                let stampSrc = $(this).find('img').attr('src') ;
                $('.sz-stamp-img').attr('src',stampSrc);
                setTimeout(function() {
                    $('.SZ-RATIO .sz-stamp > a > .sz-stamp-img').attr('src', stampSrc).addClass('select-stamp-ani-in');
                    $('.SZ-RATIO .sz-stamping').css('display','inline-block').addClass('select-stamp-ani-in');
                },270);
                setTimeout(function() {
                    $('.SZ-RATIO .sz-stamp > a > .sz-stamp-img').removeClass('select-stamp-ani-in');
                    $('.SZ-RATIO .sz-stamping').css('display','none');
                    $('.SZ-RATIO .sz-stamping').removeClass('select-ani-in');
                    $('.SZ-RATIO .sz-stamp > a > .sz-stamp-img').attr('src', stampSrc);
                },700);
            });
            
        })
    </script>
    <script>
        /* 그리기 펜 연필 인터렉션 */
        function drawIcon(){
            var draw = {
                $input : "",
                resetOffset : function resetOffset($textField) {
                    var offset = $textField.caret('offset');
                    var position = $textField.caret('position');
                    draw.resizeBox(offset, position);
                    return offset
                },
                resizeBox : function resizeBox (offset, position) {
                    $('.draw').css('transform','translate('+(offset.left+0)+'px,'+offset.top+'px)');
                },
                focus : $('#story').on('focus keyup mouseup', function(){
                    var inputEl = $(this).attr('id');
                    draw.$input = $('#'+ inputEl);
                }),
                focusOut : $('#story').on('focusout',function(){
                    $('.draw').css('display','none');
                }),
                animation : $('#story').on('focus keyup mouseup', function(){
                    $('.draw').css('display','block');
                    draw.resetOffset(draw.$input);
                    $('.draw > img').removeClass('draw-ani-ing');

                    setTimeout(function() {
                        $('.draw > img').addClass('draw-ani-ing');
                    },270);
                })
            };

            $(window).resize(function() {
                $('.draw').css('display','none');
            });
        }
        /* 링크 */
        function go(path){
            location.href=path;
        }
        //drawIcon();
    </script>
</div>


<!-- 상장 temp -->
<div class="sangzzang AREA-SANGZZANG-COPY">
</div>
<div class="capture"></div>
<div class="sangzzang AREA-SANGZZANG-COPY-DOWNLOAD"></div>

<script>

    /* 상장 스크린샷 */
    var renderSzScale = 1;
    var checkedSzDownloadSize = '';

    //다운로드 버튼 누르면
    $('#szDownload').on('click',function(){
        if(checkedDownloadSize() == 2480){
            console.log('AD 2480');
        }else if(checkedDownloadSize() == 1240){
            console.log('AD 1240');
        }
        captureSzDownload();//다운로드 버튼을 누를 때 실행시켜야겠는데
    })

    function bindCheckedDownloadSize(){
        $("[name='downloadSize']").on('change',function(){
            checkedDownloadSize();
        });
    }

    function cloneSz(size){ //원하는 영역의 스크린샷을 찍어 원하는 곳으로 코드 복사한다.
        let body = $('body');
        let origin = $(".SANGZZANG.SZ-ORIGIN");
        let copy = $(".AREA-SANGZZANG-COPY");
        //다운로드 클릭
        copy.remove();
        body.append('<div class="AREA-SANGZZANG-COPY"></div>');
        origin.find(" > .SZ-WRITE").clone().appendTo(".AREA-SANGZZANG-COPY");

        let copyWriting = $(".AREA-SANGZZANG-COPY > .SZ-WRITE");//카피할 영역
        copyWriting.removeAttr('style').find('.sz-sticking, .sz-stamping').remove();
        copyWriting.find(" > div ").each(function(index){
            let text= $(this).find('textarea').val();
            if($(this).find('textarea').length > 0){
                $(this).find('textarea').remove();
                $(this).append('<div>'+text+'</div>');
                $(this).find('.sz-sticking, .sz-stamping').remove();
            }
        });
    }

    function checkedDownloadSize(){
        const szDownloadSize = document.getElementsByName("downloadSize");
        // 체크한 데이터를 담을 변수 선언 https://nameybs.tistory.com/37
        for (let i = 0; i < szDownloadSize.length; i++) {
            // 속성중에 체크 된 항목이 있을 경우
            if (szDownloadSize[i].checked === true) {
                checkedSzDownloadSize = Number(szDownloadSize[i].value);
            }
        }
        let _checkedSzDownloadSize = checkedSzDownloadSize;// alert('checkedSzDownloadSize ' + checkedSzDownloadSize);

        // 크기 계산기
        let canvasVisibleWidthStyle = document.querySelector(".sz-download-modal-col canvas").style.width;
        let canvasVisibleWidth = canvasVisibleWidthStyle.replace('px','');
        renderSzScale = (_checkedSzDownloadSize / canvasVisibleWidth);//alert('\n_checkedSzDownloadSize : ' + _checkedSzDownloadSize + '  ' + '\ncanvasVisibleWidth : ' + canvasVisibleWidth + '\nrenderSzScale : '+ renderSzScale);
        return checkedSzDownloadSize;
    }

    function captureSzInit(ev){ //뷰에서 다운로드 모달로 스크린샷 기능
        //alert(renderSzScale);
        /* 다운받을 때 A4 100% 크기 */
        //2480
        // 일반포토카드 55mm*85mm | 207.874px * 321.259px | 2.1:3.3" | 24장 4,200원[35%]
        // 포토카드 큰 거 1240*1864
        // 번외)좀 더 큰 포토카드 97mm*67mm 366.614px *253.228px
        /*
        width = 2480; // A4 픽셀 //
        scaleW = width*0.001;
        scaleH = height*scaleW;
        border = 3;
        $('.sangzzang-copy .sz-wrting').css('transform','scale('+scaleW+')');
        $('.sangzzang.sangzzang-copy').css('height',scaleH+border+"px");
        */
        let appendTargetEl = '#modalSzDownload .sz-download-modal-col'; //캡쳐 붙여넣을 곳
        $(appendTargetEl).empty();
        html2canvas(document.querySelector(".SZ-ORIGIN .CAPTUREAREA"),{ scale:5 }).then(function(canvas) { //scale은 모바일에서 깨져보이지 않게 하기 위해
            document.querySelector(appendTargetEl).appendChild(canvas);
            checkedDownloadSize();
            captureSzDownload('init');
        });
    }

    function captureSzDownload(state){ //스크린샷 기능
        let appendTargetEl = '.AREA-SANGZZANG-COPY-DOWNLOAD'; //캡쳐 붙여넣을 곳
        $(appendTargetEl).empty();
        // html2canvas(document.querySelector(".sangzzang-origin .CAPTUREAREA"),{ scale:1 }).then(function(canvas) {

        // 사이즈에 맞는 곳으로 복사하여 붙여넣자
        //alert('다운받을 곳 스케일 : '+ renderSzScale);
        html2canvas(document.querySelector(".SZ-ORIGIN .CAPTUREAREA"),{ scale:renderSzScale }).then(function(canvas) { //캡쳐할 곳
            document.querySelector(appendTargetEl).appendChild(canvas); //캡쳐 붙여넣기
            let myImage = canvas.toDataURL();let today = new Date();let year = today.getFullYear();let month = ('0' + (today.getMonth() + 1)).slice(-2);let day = ('0' + today.getDate()).slice(-2);let hours = ('0' + today.getHours()).slice(-2);let minutes = ('0' + today.getMinutes()).slice(-2);let seconds = ('0' + today.getSeconds()).slice(-2);

            $('#szDownloadSize').attr('href', myImage); //캡쳐 base64소스

            let fileName = '상짱_' + year + '-' + month  + '-' + day + '-' + hours + minutes + seconds;
            $('#szDownloadSize').attr('download', fileName+'.png'); //다운로드할 파일 이름 설정
            if(state !== 'init'){
                document.querySelector('#szDownloadSize').click();
            }
        });
    }
</script>
</body>



