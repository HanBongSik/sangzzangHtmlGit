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
            <h1>상장</h1>
        </div>
        <!-- h1 End -->
        <!-- content -->
        <style>
            .photo .swiper-container.LOCKED .swiper-slide:not(.swiper-slide-active){display:none;}
            /* 상장 다운로드 */
            .AREA-SANGZZANG-COPY{position: absolute;left: -999999px;top: -999999px;}
            #szDownloadSize{position: absolute;left: -999999px;top: -999999px;}
            .sangzzang-copy22{position:fixed !important;left: 0!important;;top: 0!important;}
            .btn-download-sz{}
            .btn-download-sz > .r{gap:5px; justify-content:center;padding:5px 0;}
            .btn-download-sz > .download-sz-size-select{gap:0 15px;margin-bottom:10px;}
            /* 상장 다운로드 End */
        </style>
        <div class="content content-sz-view container-xs">
            <div class="layout-two-one inner-scroll">
                <div class="layout-two-one__layout-left">
                    <div class="g posts posts-full">
                        <ul class="r posts__list">
                            <!-- 리스트 -->
                            <li class="c posts__list__item">
                                <div class="post">

                                    <div class="r post__row">
                                        <div class="showcase-state" style="text-align:right;">
                                            <!--<button type="button" class="button small" id="addShowcase">쇼케이스에 진열</button>-->
                                            <button type="button" class="button sm MODAL-BTN" data-target="#modalShowcaseSwitching">쇼케이스 진열 중</button>
                                            <button type="button" class="btn-black sm MODAL-BTN" data-target="#modalSzPublic">비공개</button>
                                        </div>
                                    </div>
                                    <div class="r post__row">
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
                                                                            <img class="img-profile__img" src="/assets/tempImg/profile/test.png" alt="프로필 이미지">
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="c">
                                                                <div class="g">
                                                                    <div class="r">
                                                                        <div class="c">
                                                                            <div class="user-action-info-detail">
                                                                                <span class="user-id">bongsik</span>
                                                                                <span class="user-follow-state"><a href="#;" class="user-follow-state__link">팔로우</a></span>
                                                                                <!--                                                            <span class="user-follow-state following"><a href="#;" class="user-follow-state__link">팔로잉</a></span>-->
                                                                                <!--                                                            <span class="user-action">님이 상장을 보냈습니다.</span>-->
                                                                                <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="r">
                                                                        <div class="c">
                                                                            <div class="user-action-info-detail">
                                                                                <a href="/pages/myroom.php" class="user-action-info-detail__link"><span class="user-name">한봉식</span></a>
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

                                                <div class="c c-full center-right">
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

                                    </div>
                                    <div class="r post__row">
                                        <div class="g post-photo">
                                            <ul class="post-photo__list">
                                                <li class="post-photo__list_item">
                                                    <div class="photo-thumb">
                                                        <div class="photo-thumb__outer">
                                                            <img class="photo__img-thumb" src="/assets/tempImg/thumb/o.gif" alt="">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="post-photo__list_item">
                                                    <div class="photo-thumb">
                                                        <div class="photo-thumb__outer">
                                                            <img class="photo__img-thumb" src="/assets/tempImg/thumb/h.gif" alt="">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="post-photo__list_item">
                                                    <div class="photo-thumb">
                                                        <div class="photo-thumb__outer">
                                                            <img class="photo__img-thumb" src="/assets/tempImg/thumb/x.gif" alt="">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="post-photo__list_item">
                                                    <div class="photo-thumb">
                                                        <div class="photo-thumb__outer">
                                                            <img class="photo__img-thumb" src="/assets/tempImg/thumb/z.gif" alt="">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="post-photo__list_item">
                                                    <div class="photo-thumb">
                                                        <div class="photo-thumb__outer">
                                                            <img class="photo__img-thumb" src="/assets/tempImg/thumb/o.gif" alt="">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="post-photo__list_item">
                                                    <div class="photo-thumb">
                                                        <div class="photo-thumb__outer">
                                                            <img class="photo__img-thumb" src="/assets/tempImg/thumb/h.gif" alt="">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="post-photo__list_item">
                                                    <div class="photo-thumb">
                                                        <div class="photo-thumb__outer">
                                                            <img class="photo__img-thumb" src="/assets/tempImg/thumb/x.gif" alt="">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="post-photo__list_item">
                                                    <div class="photo-thumb">
                                                        <div class="photo-thumb__outer">
                                                            <img class="photo__img-thumb" src="/assets/tempImg/thumb/z.gif" alt="">
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="r post__row">
                                        <div class="SANGZZANG SZ-ORIGIN SANGZZANG-VIEW">
                                            <div class="SZ-WRITE SZ-RATIO clearfix CAPTUREAREA">
                                                <img class="sz-design" src="/assets/img/design/sz_000004.png" alt="">

                                                <div class="sz-name">

                                                    <div>상 장</div></div>
                                                <div class="sz-title">

                                                    <div>마리오 파티 우승</div></div>
                                                <div class="sz-receiver">

                                                    <div>정서윤</div></div>
                                                <div class="sz-word">
                                                    <div>
                                                        위 사람은 제1회 한봉식배 닌텐도<br>
                                                        스위치 마리오 파티 게임에서 무수한 경쟁자를 제치고 챔피언이 되었으므로 <br>
                                                        이 상을 드립니다.<br>
                                                        <br>
                                                        다음에도 다시 챔피언이 될 수 있도록 하세요!</div>
                                                </div>
                                                <div class="sz-date">

                                                    <div>2021년 2월 24일</div></div>
                                                <div class="sz-sticker">
                                                    <a href="#;">
                                                        <img class="sz-sticker-img" src="/assets/img/design/stk/sz_stk_000007.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="sz-sender">

                                                    <div>한봉식</div></div>
                                                <div class="sz-stamp">
                                                    <a href="#;">
                                                        <img class="sz-stamp-img" src="/assets/img/design/stp/sz_stp_000002.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 상장 만들기 End -->
                                    </div>
                                    <div class="r post__row">
                                        <div class="sz-function sz-function-01 shadow">
                                            <a href="#;" id="share" class="MODAL-BTN" data-target="#modalShare">
                                                <span class="share">
                                                    <img src="/assets/img/ico-share.png" alt=""> <span class="sz-function-name">공유</span>
                                                </span>
                                            </a>
                                            <a href="#;" id="scrap" class="MODAL-BTN" data-target="#modalScrap">
                                                <span class="scrap">
                                                    <img src="/assets/img/ico-scrap.png" alt=""> <span class="sz-function-name">스크랩</span>
                                                </span>
                                            </a>
                                            <!--
                                            <a href="#;" id="print">
                                                <span  class="print">
                                                    <img src="./assets/img/ico-print.png" alt=""/> <span>프린트</span>
                                                </span>
                                            </a>
                                            -->
                                            <a href="#;" id="copy" class="MODAL-BTN" data-target="#modalCopyAndWrite">
                                                <span class="copy last">
                                                    <img src="/assets/img/ico-copy.png" alt=""> <span class="sz-function-name">복사</span>
                                                </span>
                                            </a>
                                            <a href="#;" id="download" class="MODAL-BTN" data-target="#modalSzDownload">
                                                <span class="copy last">
                                                    <img src="/assets/img/ico-download.png" alt=""> <span class="sz-function-name">다운로드</span>
                                                </span>
                                            </a>
                                            <a href="/pages/3d-card.php">
                                                <span class="copy last">
                                                    <img src="/assets/img/ico-360.png" alt=""> <span class="sz-function-name">3D카드</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="r post__row">
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

                                    <div class="r post__row">
                                        <div class="g story">
                                            디자이너지만 퍼블리싱에도 관심이 많은 정은아 대리님!
                                            디자이너지만 퍼블리싱에도 관심이 많은 정은아 대리님!
                                            디자이너지만 퍼블리싱에도 관심이 많은 정은아 대리님!
                                            디자이너지만 퍼블리싱에도 관심이 많은 정은아 대리님!
                                            디자이너지만 퍼블리싱에도 관심이 많은 정은아 대리님!
                                            디자이너지만 퍼블리싱에도 관심이 많은 정은아 대리님!
                                        </div>
                                    </div>
                                    <div class="r post__row">
                                        <div class="g">
                                            <div class="r">
                                                <div class="c">
                                                    <div class="g action-btns">
                                                        <div class="r action-btns-row">
                                                            <div class="c action-btns-col center-left">

                                                                <div class="r action-btn">
                                                                    <div class="c">
                                                                        <div class="g comments-num">
                                                                            <div class="r">
                                                                                <div class="c">
                                                                                    <img src="/assets/img/ico-comment.png" class="comments-num__img" alt="충전완료">
                                                                                </div>
                                                                                <div class="c">
                                                                                    <div class="comment-num">
                                                                                        16
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="c action-btns-col center-center">
                                                                <div class="r action-btn">
                                                                    <a href="#;" class="btn-action__link " data-target="#modalShare">
                                                                        <div class="img-charge">
                                                                            <img src="/assets/img/ico-charge-on.png" class="btn-action__img" alt="충전">
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="c action-btns-col center-right">
                                                                <a href="#;" class="MODAL-BTN" data-target="#modalWith">
                                                                    <div class="img-profiles">
                                                                        <ul>
                                                                            <li>
                                                                                <div class="user-img">
                                                                                    <div class="img-profile__outer">
                                                                                        <img class="img-profile__img" src="/assets/tempImg/profile/l.jpg" alt="프로필 이미지">
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="user-img">
                                                                                    <div class="img-profile__outer">
                                                                                        <img class="img-profile__img" src="/assets/tempImg/profile/f.jpg" alt="프로필 이미지">
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="user-img">
                                                                                    <div class="img-profile__outer">
                                                                                        <img class="img-profile__img" src="/assets/tempImg/profile/z.jpg" alt="프로필 이미지">
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="plus-num">
                                                                            <span class="plus-num__outer">+3</span>
                                                                        </div>
                                                                    </div>
                                                                </a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="r post__row">

                                        <div class="g user-profile user-profile-top">
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
                                                                    <a href="/pages/myroom.php" class="user-action-info-detail__link"><span class="user-id">bongsik</span></a>
                                                                    <span class="user-follow-state"><a href="#;" class="user-follow-state__link">팔로우</a></span>
                                                                    <!--                                                            <span class="user-follow-state following"><a href="#;" class="user-follow-state__link">팔로잉</a></span>-->
                                                                    <!--                                                            <span class="user-action">님이 상장을 보냈습니다.</span>-->
                                                                    <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="r">
                                                            <div class="c">
                                                                <div class="user-action-info-detail">
                                                                    <a href="/pages/myroom.php" class="user-action-info-detail__link"><span class="user-name">한봉식</span></a>
                                                                    <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="r">
                                                            <div class="c">
                                                                <div class="g tag-skills tag-skills-st01">
                                                                    <ul class="r tag-skills__list">
                                                                        <li class="c tag-skills__list__item">
                                                                            <div class="tag-skill style-01">
                                                                                <div class="tag-skill__gauge-bg"></div>
                                                                                <div class="tag-skill__gauge w-95">95%</div>
                                                                                <span class="tag-skill__num">12</span>
                                                                                <span class="tag-skill__name">패션</span>
                                                                            </div>
                                                                        </li>
                                                                        <li class="c tag-skills__list__item">
                                                                            <div class="tag-skill">
                                                                                <div class="tag-skill__gauge-bg"></div>
                                                                                <div class="tag-skill__gauge w-85">85%</div>
                                                                                <span class="tag-skill__num">82</span>
                                                                                <span class="tag-skill__name">아트</span>
                                                                            </div>
                                                                        </li>
                                                                        <li class="c tag-skills__list__item">
                                                                            <div class="tag-skill">
                                                                                <div class="tag-skill__gauge-bg"></div>
                                                                                <div class="tag-skill__gauge w-50">50%</div>
                                                                                <span class="tag-skill__num">90</span>
                                                                                <span class="tag-skill__name">beauty</span>
                                                                            </div>
                                                                        </li>
                                                                        <li class="c tag-skills__list__item">
                                                                            <div class="tag-skill">
                                                                                <div class="tag-skill__gauge-bg"></div>
                                                                                <div class="tag-skill__gauge w-78">78%</div>
                                                                                <span class="tag-skill__num">666</span>
                                                                                <span class="tag-skill__name">게임</span>
                                                                            </div>
                                                                        </li>
                                                                        <li class="c tag-skills__list__item">
                                                                            <div class="tag-skill">
                                                                                <div class="tag-skill__gauge-bg"></div>
                                                                                <div class="tag-skill__gauge w-65">65%</div>
                                                                                <span class="tag-skill__num">37</span>
                                                                                <span class="tag-skill__name">맥북</span>
                                                                            </div>
                                                                        </li>
                                                                        <li class="c tag-skills__list__item">
                                                                            <div class="tag-skill">
                                                                                <div class="tag-skill__gauge-bg"></div>
                                                                                <div class="tag-skill__gauge w-15">15%</div>
                                                                                <span class="tag-skill__num">8</span>
                                                                                <span class="tag-skill__name">여행</span>
                                                                            </div>
                                                                        </li>
                                                                        <li class="c tag-skills__list__item">
                                                                            <div class="tag-skill">
                                                                                <div class="tag-skill__gauge-bg"></div>
                                                                                <div class="tag-skill__gauge w-15">15%</div>
                                                                                <span class="tag-skill__num">90</span>
                                                                                <span class="tag-skill__name">nature</span>
                                                                            </div>
                                                                        </li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <!-- 리스트 End -->
                        </ul>
                    </div>

                </div>
                <div class="layout-two-one__layout-right">
                    <div class="photo">
                        <!-- Swiper -->
                        <div class="swiper-container">
                            <ul class="swiper-wrapper ">
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/friends.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/food2.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/meet2.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/game.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/game2.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/game3.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/present-1.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/present-2.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/present.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/hobby.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/animal-forest-card.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/birthday.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/cart1.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/cart2.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/cart3.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/cat.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/dog.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/mom.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/baby4.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/baby2.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/baby3.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/baby5.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/sports3.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/sports6.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/sports4.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/sports5.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/singer0.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/singer2.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/singer3.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/normal.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/nurse.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/firefighter.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/chicken.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/god.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/god2.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/politics.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/politics2.jpg">
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="swiper-zoom-container MODAL-BTN" data-target="#modalPhotoFullView">
                                        <img class="img-photo" src="/assets/tempImg/photo/politics3.png">
                                    </div>
                                </li>

                            </ul>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                            <!-- Add Navigation -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        <!-- Swiper End -->
<!--                        <div class="btn-photo-full-view"><a href="#;" class="btn-photo-full-view__link MODAL-BTN" data-target="#modalPhotoFullView"><img class="btn-photo-full-view__img" src="/assets/img/ico/ico-full-view.png"></a></div>-->
                        <!-- Swiper JS -->
                        <!-- Initialize Swiper -->
                        <script>
                            var photoSwiper = new Swiper('.photo .swiper-container', {
                                zoom: false,
                                slidesPerView: 1,
                                loop: false,
                                pagination: {
                                    el: '.swiper-pagination',
                                    clickable: false,
                                },
                                navigation: {
                                    nextEl: '.swiper-button-next',
                                    prevEl: '.swiper-button-prev',
                                },on: {
                                    slideChange : function() {
                                        //console.log(this.activeIndex);//이벤트 또는 조건문으로 이용하면 된다.

                                    },
                                    slideChangeTransitionStart : function(){
                                        console.log('slideChangeTransitionStart');
                                    },
                                    slideNextTransitionStart : function(){
                                        console.log('slideNextTransitionStart');
                                    },
                                    slidePrevTransitionStart : function(){
                                        console.log('slidePrevTransitionStart');
                                    },
                                    slideResetTransitionStart : function(){
                                        console.log('slideResetTransitionStart');
                                    },
                                    zoomChange : function(){
                                        console.log('zoomChange');
                                        $('html,body').addClass('OVERFLOW-HIDDEN');
                                        $('#wrap').addClass('OVERSCROLL');
                                        // $('.photo .swiper-container').addClass('LOCKED');
                                        // this.update();
                                        let target = $('.photo .swiper-slide-active');
                                        if(target.hasClass('swiper-slide-zoomed')){
                                            $('html,body').addClass('OVERFLOW-HIDDEN');
                                            $('#wrap').addClass('OVERSCROLL');
                                            // $('.photo .swiper-container').addClass('LOCKED');
                                            // this.update();
                                        }else{
                                            $('body').removeClass('OVERFLOW-HIDDEN');
                                            $('#wrap').removeClass('OVERSCROLL');
                                            // $('.photo .swiper-container').removeClass('LOCKED');
                                            // this.update();
                                        }
                                    },
                                    touchStart : function(){
                                        console.log('zoomChange');
                                        let target = $('.photo .swiper-slide-active');
                                        if(target.hasClass('swiper-slide-zoomed')){
                                            $('html,body').addClass('OVERFLOW-HIDDEN');
                                            $('#wrap').addClass('OVERSCROLL');
                                            // $('.photo .swiper-container').addClass('LOCKED');
                                            // this.update();
                                        }else{
                                            $('body').removeClass('OVERFLOW-HIDDEN');
                                            $('#wrap').removeClass('OVERSCROLL');
                                            // $('.photo .swiper-container').removeClass('LOCKED');
                                            // this.update();
                                        }
                                    },
                                    touchEnd : function(){
                                        console.log('touchEnd');
                                        let target = $('.photo .swiper-slide-active');
                                        if(target.hasClass('swiper-slide-zoomed')){
                                            $('html,body').addClass('OVERFLOW-HIDDEN');
                                            $('#wrap').addClass('OVERSCROLL');
                                            // $('.photo .swiper-container').addClass('LOCKED');
                                            // this.update();
                                        }else{
                                            $('html,body').removeClass('OVERFLOW-HIDDEN')
                                            $('#wrap').removeClass('OVERSCROLL')
                                            // $('.photo .swiper-container').removeClass('LOCKED');
                                            // this.update();
                                        }
                                    },
                                },

                            });
                        </script>
                    </div>
                    <div class="comment">
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

                        <div class="comments">
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
                                                                                <span class="user-id">imyour_joy</span><span class="reply">에게 답글</span>
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
                                                                            <span class="user-comment">감사합니다!😊😊</span>
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
                                                <a href="#;" class="MODAL-BTN" data-target="#modalWritingReply"><span class="writing-reply">답글쓰기</span></a>
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
                                                                            <span class="user-id">itzy.all.in.us</span>
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
                                                                            <span class="user-comment">행복하고 건강한 가정되시길 바라고 물건사기 동참한 맘카페 회원분들도 고운마음씨베푼 이상으로 복 많이받으셨으면 좋겠습니다. 감동스러워 눈물이 다 나네요.</span>
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
                                                <a href="#;" class="MODAL-BTN" data-target="#modalWritingReply"><span class="writing-reply">답글쓰기</span></a>
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
                                                                            <span class="user-id">real__pcy</span>
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
                                                                            <span class="user-comment">덕분에 울적한 기분이 따뜻해졌네요 ㅎㅎ</span>
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
                                                <a href="#;" class="MODAL-BTN" data-target="#modalWritingReply"><span class="writing-reply">답글쓰기</span></a>
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
                                                                        <img class="img-profile__img" src="/assets/tempImg/profile/n.jpg" alt="프로필 이미지">
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="c">
                                                            <div class="g">
                                                                <div class="r">
                                                                    <div class="c">
                                                                        <div class="user-action-info-detail">
                                                                            <span class="user-id">uarmyhope</span>
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
                                                                            <span class="user-comment">이런 소식이 한편이라도 더 나오면 좋겠네요 ㅎㅎㅎ너무 가슴따뜻해지네요!</span>
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
                                                <a href="#;" class="MODAL-BTN" data-target="#modalWritingReply"><span class="writing-reply">답글쓰기</span></a>
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
                                                <a href="#;" class="MODAL-BTN" data-target="#modalWritingReply"><span class="writing-reply">답글쓰기</span></a>
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
                                                                            <span class="user-id">ENHYPEN</span>
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
                                                                            <span class="user-comment">참 따뜻한 맘 대신 고맙습니다</span>
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
                                                <a href="#;" class="MODAL-BTN" data-target="#modalWritingReply"><span class="writing-reply">답글쓰기</span></a>
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
                                                <a href="#;" class="MODAL-BTN" data-target="#modalWritingReply"><span class="writing-reply">답글쓰기</span></a>
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
                                                <a href="#;" class="MODAL-BTN" data-target="#modalWritingReply"><span class="writing-reply">답글쓰기</span></a>
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
    <div class="sangzzang AREA-SANGZZANG-COPY">
        <!--
        <div class="sz-wrting SZ-RATIO sz-writing clearfix">
            <img class="sz-design" src="./assets/design/sz_000007.png" alt=""/>
            <div class="sz-name">
                <div>상 장 COPY</div>
            </div>
            <div class="sz-title">
                <div>타이틀</div>
            </div>
            <div class="sz-receiver">
                <div>받는 분</div>
            </div>
            <div class="sz-word">
                <div type="text" id="sangText" name="sangText" placeholder="&#13;&#10 위 정은아는 평소 한봉식의 직장동료이며 한봉식이 알려주는 웹표준 코딩에 대한  상당히 습득력이 빠르고 뛰어나 한봉식이  보증하건데 아사달 퍼블리셔 외 최고 웹표준 코딩의 에이스일 것을 보증하며 에이스와 함께 이 상장을 드립니다." >위 정은아는 평소 한봉식의 직장동료이며 한봉식이 알려주는 웹표준 코딩에 대한  상당히 습득력이 빠르고 뛰어나 한봉식이  보증하건데 아사달 퍼블리셔 외 최고 웹표준 코딩의 에이스일 것을 보증하며 에이스와 함께 이 상장을 드립니다.</div>
            </div>
            <div class="sz-date">
                <div>2019년 11월 4일</div>
            </div>
            <div class="sz-sender">
                <div>보내는 분</div>
            </div>
            <div class="sz-sticker">
                <a href="#;">
                    <img class="sz-sticking" src="./assets/design/ico-hand.png" alt=""/>
                    <img class="sz-sticker-img" src="./assets/design/stk/sz_stk_000002.png" alt=""/>
                </a>
            </div>
            <div class="sz-stamp">
                <a href="#;">
                    <img class="sz-stamping" src="./assets/design/ico-hand2.png" alt=""/>
                    <img class="sz-stamp-img" src="./assets/design/stp/sz_stp_000002.png" alt=""/>
                </a>
            </div>
        </div>-->
    </div>
    <div class="capture"></div>
    <div class="sangzzang AREA-SANGZZANG-COPY-DOWNLOAD"></div>

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
                            <style>
                                .modal-list.sns{}
                                .modal-list.sns img{display:inline-block;height:20px}
                            </style>
                            <ul class="modal-list sns">
                                <li><a href="#;"><img src="/assets/img/naver.png" alt="네이버"> 네이버</a></li>
                                <li><a href="#;"><img src="/assets/img/kakao.png" alt="카카오톡"> 카카오톡</a></li>
                                <li><a href="#;"><img src="/assets/img/google.png" alt="구글"> 구글</a></li>
                                <li><a href="#;"><img src="/assets/img/facebook.png" alt="페이스북"> 페이스북</a></li>
                                <li><a href="#;"><img src="/assets/img/instagram.png" alt="인스타그램"> 인스타그램</a></li>
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
                checkedDownloadSize()
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

</div>
</body>



