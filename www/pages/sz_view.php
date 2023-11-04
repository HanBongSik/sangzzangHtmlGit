<!doctype html>
<html lang="ko">
<head>
    <?php $path = $_SERVER['DOCUMENT_ROOT'];?>
    <?php include("$path/include/meta_head.php"); ?>
</head>
<body>
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
        <!-- content -->
        <div class="content content-sz-view">
            <style>

                .content-sz-view .post__list > .r > .c{width:100%;max-width:none;}
                .content-sz-view .post__list__outer{padding:0;margin:0;}
                .content-sz-view .showcase-state{width:100%;text-align:center;padding:5px 0;margin:2px 0;}

                .sz-design{display:block;width:100%;}
                /* 상장 만들기 및 보여주기 비율 */
                .sangzzang.sangzzang-origin{border:1px solid #e9e9e9;overflow:hidden;}
                .sangzzang.sangzzang-view{margin-top:2px;}
                .sz-ratio{position:relative;}
                .sz-ratio textarea,
                .sz-ratio input[type="text"]{/*border:2px solid #8caee5;*/}
                .sz-write .sz-sticker,.sz-write .sz-stamp{position:relative;}
                .sz-wrting{width:1000px;transform-origin:left top;}
                .sz-ratio input, .sz-ratio textarea{border:none;outline:2px solid #c8c8c8;}
                .sz-ratio textarea{padding:0;}

                /* 상장 디자인 */
                .sz-ratio .sz-ratio-img{width:100%;}

                /* 상장 이름 */
                .sz-ratio .sz-name{min-height:8%;position:absolute;left:0px;top:13%;width:100%;margin:0 auto;text-align:center;}
                .sz-ratio .sz-name > *{display:block;margin:0 auto;width:70%;height:100%;font-size:90px;text-align:center;background:transparent;}
                .sz-ratio .sz-name > *{font-size:64px;}

                /* 상장 타이틀 */
                .sz-ratio .sz-title{position:absolute;left:15%;top:27%;width:39%;min-height:6%;text-align:left;}
                .sz-ratio .sz-title > *{width:100%;height:100%;text-align:left;}
                .sz-ratio .sz-title > *{font-size:50px;}

                /* 상장 받는 사람*/
                .sz-ratio .sz-receiver{position:absolute;right:15%;top:27%;width:29%;min-height:6%;text-align:right;}
                .sz-ratio .sz-receiver > *{width:100%;height:100%;text-align:right;}
                .sz-ratio .sz-receiver > *{font-size:50px;}

                /* 상장 보내는 사람*/
                .sz-ratio .sz-sender{position:absolute;right:30%;top:77%;width:31%;min-height:10%;text-align:right;}
                .sz-ratio .sz-sender > *{width:100%;height:100%;text-align:right;}
                .sz-ratio .sz-sender > *{font-size:50px;}

                /* 상장 내용 */
                .sz-ratio .sz-word{position:absolute;left:15%;top:34%;width:70%;min-height:37%;margin:0 auto;text-align:center;}
                .sz-ratio .sz-word > *{width:100%;display:inline-block;height:100%;text-align:justify;letter-spacing:0;}
                .sz-ratio .sz-word > *{font-size:44px;vertical-align:top;}

                /* 상장 날짜 */
                .sz-ratio .sz-date{position:absolute;right:15%;top:71%;width:46%;min-height:5%;text-align:right;}
                .sz-ratio .sz-date > *{width:100%;height:100%;text-align:right;}
                .sz-ratio .sz-date > *{font-size:40px;}

                /* 상장 스티커 */
                .sz-ratio .sz-sticker{position:absolute;z-index:500;left:15%;top:71%;width:23%;height:16%;margin:0 auto;text-align:center;}
                .sz-write .sz-sticker .sz-sticker-img{display:inline-block;width:100%;}

                /* 상장 도장 */
                .sz-ratio .sz-stamp{position:absolute;z-index:500;right:15%;top:77%;width:14%;height:10%;margin:0 auto;text-align:center;}
                .sz-ratio .sz-stamp > a > *{display:inline-block;width:100%;}
                .sz-ratio .sz-sticking{position:absolute;left:0;top:0;transform:rotate(5deg);will-change:transform;}
                .sz-ratio .sz-stamping{position:absolute;left:0;top:0;transform:translateY(5%);will-change:transform;}
                .sz-ratio .sz-sticker > a > .sz-sticking{display:none;width:100%;left:9%;top:-5%;z-index:1;will-change:transform;}
                .sz-ratio .sz-stamp .sz-stamping{display:none;width:150%;left:-25%;top:-30%;z-index:1;will-change:transform;}

                /* 공통 */
                .sz-ratio .sz-name > *,
                .sz-ratio .sz-title > *,
                .sz-ratio .sz-receiver > *,
                .sz-ratio .sz-sender > *,
                .sz-ratio .sz-date > *{color:#333;font-weight:bold;letter-spacing:0;word-break:break-all;white-space:normal;overflow:none;background:transparent;}
                .sz-ratio .sz-word > *{color:#333;letter-spacing:-1px;word-break:break-all;white-space:normal;overflow:hidden;}

                .sangzzang-copy{width:2480px}
                .sangzzang-copy .sz-wrting{transform: scale(2.48);} /*여기에 width 주면 아이폰 아이패드에서 깨짐*/

                .draw{position:absolute;left:0px;top:0px;height:30px;transition: all .1s;will-change:transform;}
                .draw .sz-draw-img{display:block;height:100%;opacity:.6;will-change:transform;}

                .sz-wrting{width:2480px;}
                .sz-ratio .sz-name > *{font-size:180px;}
                .sz-ratio .sz-title > *{font-size:124px;}
                .sz-ratio .sz-receiver > *{font-size:124px;}
                .sz-ratio .sz-word > *{font-size:110px;}
                .sz-ratio .sz-date > *{font-size:90px;}
                .sz-ratio .sz-sender > *{font-size:130px;}

                .sangzzang-copy{position:absolute;left:-999999px;top:-999999px;}
                .sz-download-modal-col canvas{width:100% !important;max-width:500px !important;height:auto !important;margin:0 auto;}

                /* 상장 보기 */
                .sz-function-btn{margin-top:5px;text-align:center;padding:10px;}
                .sz-function{text-align:center;}
                .sz-function.sz-function-01{margin-bottom:10px;padding:10px 0;margin:5px 0 0px 0;width:100%;}
                .sz-function.sz-function-01 a{margin:0 10px;opacity:.8;}
                .sz-function.sz-function-01 a:hover{opacity:1;}
                .sz-function.sz-function-01 img{position:relative;top:-3px;height:24px;}
                .sz-function.sz-function-01 span{line-height:20px;font-size:14px;}
                .sz-function.sz-function-01 .sz-function-name{display:none;}
                .sz-function.sz-function-02{display:flex;align-items:center;justify-content:c2enter;}


                .sz-function.sz-function-03{margin-bottom:10px;padding:0px 0;margin:5px 0 0px 0;}
                .sz-function.sz-function-03 a{margin:5px 5px;opacity:.8;}
                .sz-function.sz-function-03 a:hover{opacity:1;}
                .sz-function.sz-function-03 img{position:relative;top:-3px;height:20px;}
                .sz-function.sz-function-03 span{line-height:20px;font-size:14px;}

                .sz-function-btn span{display:fle1x;align-items:center;justify-content:center;margin:0 5px;height:24px;opacity:.8;}
                .sz-function-btn span.love{opacity:1;}

                .sz-function.sz-function-02 > a {display:flex;align-items:center;justify-content:center;}
                @media (max-width:321px){
                    .sz-function-btn span{margin-right:3px;}
                }
                .sz-function-btn span.last{margin-right:0;}
                .sz-function-btn span a{vertical-align:top;}
                .sz-function-btn span a span{vertical-align:top;}
                .sz-function-btn img{vertical-align:top;height:22px;}
                .sz-function-btn img.ico-comment,.sz-function-btn img.ico-photo{opacity:.7;}
                .sz-function-btn .nums{font-size:14px;}

                .sz-download-modal-col{position:relative;display:flex;align-items:center;justify-content:center;}
                .sz-download-modal-col:after{content:'';display:block;padding-bottom: 142%;}
                .sz-download-modal-col{
                    -webkit-touch-callout: none;
                    user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    -webkit-user-select: none;
                }.sz-download-modal-col canvas{
                     -webkit-touch-callout: none;
                     user-select: none;
                     -moz-user-select: none;
                     -ms-user-select: none;
                     -webkit-user-select: none;
                 }
            </style>
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
                                            <button type="button" class="button primary sm">쇼케이스 진열 중</button>
                                            <button type="button" class="btn-black sm">비공개</button>
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
                                        <div class="sangzzang sangzzang-origin sangzzang-view">
                                            <div class="sz-wrting sz-ratio sz-write clearfix CAPTUREAREA">
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
                        <style>
                            html body .swiper-slide{height:500px;}

                            /* 사진 스와이퍼 */
                            html body .swiper-slide{height:500px;background: no-repeat center center;background-size:contain;}
                            html body .photo-list.swiper-container .swiper-slide{height:50px;background-color:#fff;}
                            html body .swiper-pagination-bullet-active{background:#da4f4d;}
                            html body .swiper-button-next,
                            html body .swiper-button-prev{width:30px;height:30px;color:#fff;font-weight:bold;background:#000;border-radius:50%;opacity:0.2;}
                            html body .swiper-button-next:after,
                            html body .swiper-button-prev:after{font-size: 20px;transform: scale(0.6);}
                            html body .swiper-button-prev{text-indent:-3px;}
                            html body .swiper-button-next{text-indent:3px;}
                            /*html body .swiper-container-horizontal > .swiper-pagination-bullets,
                            html body .swiper-pagination-custom,
                            html body .swiper-pagination-fraction{bottom:auto;top:0;height:10px;text-align:right;}
                            html body .swiper-container-horizontal> .swiper-pagination-bullets .swiper-pagination-bullet{position:relative;top:-5px;margin:0 2px;}
                            */
                            html body .swiper-pagination{bottom:0px;width:100%;}

                            /* 사진 스와이퍼 End */
                            html body .modal-photo .swiper-slide{height:100%;background-color:#000;}
                            html body .modal-photo .close{overflow:hidden;position:absolute;right:10px;top:10px;z-index:10000;border-radius:5px;padding:0 10px;height:30px;text-align:center;background-color:#fff;color:#000;opacity:0.8;font-size:12px;line-height:28px;}
                            html body .modal-photo .modal{background-color:rgba(0,0,0,1)}
                            html body .modal-photo .swiper-container{height:100%;}
                            html body .modal-dimmed.modal-photo{overflow:hidden;}
                            html body .modal-photo .swiper-button-next,
                            html body .modal-photo .swiper-button-prev{color:#000;background-color:#fff;}
                            html body .modal-photo .swiper-container-horizontal > .swiper-pagination-bullets,
                            html body .modal-photo .swiper-pagination-custom,
                            html body .modal-photo .swiper-pagination-fraction{top:auto;bottom:20px;height:20px;text-align:center;}
                            html body .modal-photo .swiper-container-horizontal> .swiper-pagination-bullets .swiper-pagination-bullet{background-color:#fff;}


                        </style>
                        <!-- Swiper -->
                        <div class="swiper-container">
                            <ul class="swiper-wrapper">
                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/friends.jpg)"></li>
                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/food2.jpg)"></li>
                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/meet2.jpg)"></li>

                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/game.jpg)"></li>
                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/game2.jpg)"></li>
                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/game3.jpg)"></li>

                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/present-1.jpg);"></li>
                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/present-2.jpg);"></li>
                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/present.jpg)"></li>

                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/hobby.jpg);"></li>
                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/animal-forest-card.jpg);"></li>

                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/birthday.jpg);"></li>
                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/cart1.jpg);"></li>
                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/cart2.jpg);"></li>
                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/cart3.jpg);"></li>


                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/cat.jpg);"></li>
                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/dog.jpg);"></li>

                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/mom.jpg)"></li>

                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/baby4.jpg)"></li>
                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/baby2.jpg)"></li>
                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/baby3.jpg)"></li>
                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/baby5.jpg)"></li>

                                <!-- <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/mom2.jpg);"></li> -->

                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/sports3.jpg);"></li>
                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/sports6.jpg);"></li>
                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/sports4.jpg);"></li>
                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/sports5.jpg);"></li>

                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/singer0.jpg);"></li>
                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/singer2.jpg);"></li>
                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/singer3.jpg);"></li>

                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/normal.jpg)"></li>
                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/nurse.jpg);"></li>
                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/firefighter.jpg);"></li>
                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/chicken.jpg);"></li>

                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/god.jpg);"></li>
                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/god2.jpg);"></li>

                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/politics.jpg);"></li>
                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/politics2.jpg);"></li>
                                <li class="swiper-slide" style="background-image:url(/assets/tempImg/photo/politics3.png);"></li>
                            </ul>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <!-- Swiper End -->


                        <!-- Swiper JS -->
                        <!-- Initialize Swiper -->
                        <script>
                            var swiper = new Swiper('.photo .swiper-container', {
                                slidesPerView: 1,
                                loop: true,
                                pagination: {
                                    el: '.swiper-pagination',
                                    clickable: true,
                                },
                                navigation: {
                                    nextEl: '.swiper-button-next',
                                    prevEl: '.swiper-button-prev',
                                },
                            });
                        </script>
                    </div>
                    <style>
                        .comment .img-profile-outer{width:30px;height:30px;}
                        .comment__list{border-bottom:1px solid #ddd;padding-top:10px;}
                        .comment .user-action-info{padding-top:0 !important;padding-bottom:0 !important;}
                        .comment .comment-body{padding-top:5px !important;}
                    </style>
                    <div class="comment">
                        <div class="g search-input" style="background:#f8f8f8;padding:10px 5px;border-top:1px solid #e9e9e9;border-bottom:1px solid #e9e9e9;">
                            <div class="r gap-hor-sm">
                                <div class="c c-inner-width">
                                    <div class="img-profile">
                                        <div class="img-profile-outer">
                                            <img class="img-profile-outer__img" src="/assets/tempImg/profile/hbs.jpg" alt="프로필 이미지">
                                        </div>
                                    </div>
                                </div>
                                <div class="c">
                                    <span class="forms forms-full">
                                        <input type="text" placeholder="댓글을 입력하세요." value="" id="inputKeyward" class="INPUT-RESET">
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

                        <ul>
                            <li class="comment__list">
                                <div class="g">
                                    <div class="r">
                                        <div class="c c-full-width">
                                            <div class="g g-pd-sm user-action-info">
                                                <div class="r">
                                                    <!--                                        <div class="c c-float">-->
                                                    <!--                                            <div class="num">1</div>-->
                                                    <!--                                        </div>-->
                                                    <div class="c c-inner-width">
                                                        <div class="img-profile">
                                                            <div class="img-profile-outer">
                                                                <img class="img-profile-outer__img" src="/assets/tempImg/profile/ah.jpg" alt="프로필 이미지">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="c">
                                                        <div class="g">
                                                            <div class="r">
                                                                <div class="c">
                                                                    <div class="user-action-info-detail">
                                                                        <span class="user-id">areum7239</span>
                                                                        <!--                                                            <span class="user-action">님이 상장을 보냈습니다.</span>-->
                                                                        <span class="user-action-date">23.10.17 10 11</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--                                                <div class="r">-->
                                                            <!--                                                    <div class="c">-->
                                                            <!--                                                        <div class="user-action-info-detail">-->
                                                            <!--                                                            <span class="user-name">한봉식</span>-->
                                                            <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                            <!--                                                        </div>-->
                                                            <!--                                                    </div>-->
                                                            <!--                                                </div>-->
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

                                                        <div class="btn-more-action">
                                                            <div class="img-more">
                                                                <a href="#;" class="trigger img-more__outer"><img class="img-more__outer__img" src="/assets/img/ico-more.png" alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="r">
                                        <div class="c c-full-width">
                                            <div class="g g-pd-sm comment-body">
                                                아직 살만한 세상이다 생각이듭니다 가족분 모두 힘내시길 멀리서 응원합니다.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="comment__list">
                                <div class="g">
                                    <div class="r">
                                        <div class="c c-full-width">
                                            <div class="g g-pd-sm user-action-info">
                                                <div class="r">
                                                    <!--                                        <div class="c c-float">-->
                                                    <!--                                            <div class="num">1</div>-->
                                                    <!--                                        </div>-->
                                                    <div class="c c-inner-width">
                                                        <div class="img-profile">
                                                            <div class="img-profile-outer">
                                                                <img class="img-profile-outer__img" src="/assets/tempImg/profile/k.jpg" alt="프로필 이미지">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="c">
                                                        <div class="g">
                                                            <div class="r">
                                                                <div class="c">
                                                                    <div class="user-action-info-detail">
                                                                        <span class="user-id">hellopapa11</span>
                                                                        <!--                                                            <span class="user-action">님이 상장을 보냈습니다.</span>-->
                                                                        <span class="user-action-date">23.10.17 10 11</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--                                                <div class="r">-->
                                                            <!--                                                    <div class="c">-->
                                                            <!--                                                        <div class="user-action-info-detail">-->
                                                            <!--                                                            <span class="user-name">한봉식</span>-->
                                                            <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                            <!--                                                        </div>-->
                                                            <!--                                                    </div>-->
                                                            <!--                                                </div>-->
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

                                                        <div class="btn-more-action">
                                                            <div class="img-more">
                                                                <a href="#;" class="trigger img-more__outer"><img class="img-more__outer__img" src="/assets/img/ico-more.png" alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="r">
                                        <div class="c c-full-width">
                                            <div class="g g-pd-sm comment-body">
                                                다른 분들 선행 눈물나네요.. 진짜 근데 아프간은 아직도 이해 할 수 없습니다. 한국 국민을 더 잘 챙기면 좋겠습니다.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li class="comment__list">
                                <div class="g">
                                    <div class="r">
                                        <div class="c c-full-width">
                                            <div class="g g-pd-sm user-action-info">
                                                <div class="r">
                                                    <!--                                        <div class="c c-float">-->
                                                    <!--                                            <div class="num">1</div>-->
                                                    <!--                                        </div>-->
                                                    <div class="c c-inner-width">
                                                        <div class="img-profile">
                                                            <div class="img-profile-outer">
                                                                <img class="img-profile-outer__img" src="/assets/tempImg/profile/ah.jpg" alt="프로필 이미지">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="c">
                                                        <div class="g">
                                                            <div class="r">
                                                                <div class="c">
                                                                    <div class="user-action-info-detail">
                                                                        <span class="user-id">areum7239</span>
                                                                        <!--                                                            <span class="user-action">님이 상장을 보냈습니다.</span>-->
                                                                        <span class="user-action-date">23.10.17 10 11</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--                                                <div class="r">-->
                                                            <!--                                                    <div class="c">-->
                                                            <!--                                                        <div class="user-action-info-detail">-->
                                                            <!--                                                            <span class="user-name">한봉식</span>-->
                                                            <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                            <!--                                                        </div>-->
                                                            <!--                                                    </div>-->
                                                            <!--                                                </div>-->
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

                                                        <div class="btn-more-action">
                                                            <div class="img-more">
                                                                <a href="#;" class="trigger img-more__outer"><img class="img-more__outer__img" src="/assets/img/ico-more.png" alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="r">
                                        <div class="c c-full-width">
                                            <div class="g g-pd-sm comment-body">
                                                아직 살만한 세상이다 생각이듭니다 가족분 모두 힘내시길 멀리서 응원합니다.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="comment__list">
                                <div class="g">
                                    <div class="r">
                                        <div class="c c-full-width">
                                            <div class="g g-pd-sm user-action-info">
                                                <div class="r">
                                                    <!--                                        <div class="c c-float">-->
                                                    <!--                                            <div class="num">1</div>-->
                                                    <!--                                        </div>-->
                                                    <div class="c c-inner-width">
                                                        <div class="img-profile">
                                                            <div class="img-profile-outer">
                                                                <img class="img-profile-outer__img" src="/assets/tempImg/profile/k.jpg" alt="프로필 이미지">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="c">
                                                        <div class="g">
                                                            <div class="r">
                                                                <div class="c">
                                                                    <div class="user-action-info-detail">
                                                                        <span class="user-id">hellopapa11</span>
                                                                        <!--                                                            <span class="user-action">님이 상장을 보냈습니다.</span>-->
                                                                        <span class="user-action-date">23.10.17 10 11</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--                                                <div class="r">-->
                                                            <!--                                                    <div class="c">-->
                                                            <!--                                                        <div class="user-action-info-detail">-->
                                                            <!--                                                            <span class="user-name">한봉식</span>-->
                                                            <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                            <!--                                                        </div>-->
                                                            <!--                                                    </div>-->
                                                            <!--                                                </div>-->
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

                                                        <div class="btn-more-action">
                                                            <div class="img-more">
                                                                <a href="#;" class="trigger img-more__outer"><img class="img-more__outer__img" src="/assets/img/ico-more.png" alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="r">
                                        <div class="c c-full-width">
                                            <div class="g g-pd-sm comment-body">
                                                다른 분들 선행 눈물나네요.. 진짜 근데 아프간은 아직도 이해 할 수 없습니다. 한국 국민을 더 잘 챙기면 좋겠습니다.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li class="comment__list">
                                <div class="g">
                                    <div class="r">
                                        <div class="c c-full-width">
                                            <div class="g g-pd-sm user-action-info">
                                                <div class="r">
                                                    <!--                                        <div class="c c-float">-->
                                                    <!--                                            <div class="num">1</div>-->
                                                    <!--                                        </div>-->
                                                    <div class="c c-inner-width">
                                                        <div class="img-profile">
                                                            <div class="img-profile-outer">
                                                                <img class="img-profile-outer__img" src="/assets/tempImg/profile/ah.jpg" alt="프로필 이미지">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="c">
                                                        <div class="g">
                                                            <div class="r">
                                                                <div class="c">
                                                                    <div class="user-action-info-detail">
                                                                        <span class="user-id">areum7239</span>
                                                                        <!--                                                            <span class="user-action">님이 상장을 보냈습니다.</span>-->
                                                                        <span class="user-action-date">23.10.17 10 11</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--                                                <div class="r">-->
                                                            <!--                                                    <div class="c">-->
                                                            <!--                                                        <div class="user-action-info-detail">-->
                                                            <!--                                                            <span class="user-name">한봉식</span>-->
                                                            <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                            <!--                                                        </div>-->
                                                            <!--                                                    </div>-->
                                                            <!--                                                </div>-->
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

                                                        <div class="btn-more-action">
                                                            <div class="img-more">
                                                                <a href="#;" class="trigger img-more__outer"><img class="img-more__outer__img" src="/assets/img/ico-more.png" alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="r">
                                        <div class="c c-full-width">
                                            <div class="g g-pd-sm comment-body">
                                                아직 살만한 세상이다 생각이듭니다 가족분 모두 힘내시길 멀리서 응원합니다.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="comment__list">
                                <div class="g">
                                    <div class="r">
                                        <div class="c c-full-width">
                                            <div class="g g-pd-sm user-action-info">
                                                <div class="r">
                                                    <!--                                        <div class="c c-float">-->
                                                    <!--                                            <div class="num">1</div>-->
                                                    <!--                                        </div>-->
                                                    <div class="c c-inner-width">
                                                        <div class="img-profile">
                                                            <div class="img-profile-outer">
                                                                <img class="img-profile-outer__img" src="/assets/tempImg/profile/k.jpg" alt="프로필 이미지">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="c">
                                                        <div class="g">
                                                            <div class="r">
                                                                <div class="c">
                                                                    <div class="user-action-info-detail">
                                                                        <span class="user-id">hellopapa11</span>
                                                                        <!--                                                            <span class="user-action">님이 상장을 보냈습니다.</span>-->
                                                                        <span class="user-action-date">23.10.17 10 11</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--                                                <div class="r">-->
                                                            <!--                                                    <div class="c">-->
                                                            <!--                                                        <div class="user-action-info-detail">-->
                                                            <!--                                                            <span class="user-name">한봉식</span>-->
                                                            <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                            <!--                                                        </div>-->
                                                            <!--                                                    </div>-->
                                                            <!--                                                </div>-->
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

                                                        <div class="btn-more-action">
                                                            <div class="img-more">
                                                                <a href="#;" class="trigger img-more__outer"><img class="img-more__outer__img" src="/assets/img/ico-more.png" alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="r">
                                        <div class="c c-full-width">
                                            <div class="g g-pd-sm comment-body">
                                                다른 분들 선행 눈물나네요.. 진짜 근데 아프간은 아직도 이해 할 수 없습니다. 한국 국민을 더 잘 챙기면 좋겠습니다.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li class="comment__list">
                                <div class="g">
                                    <div class="r">
                                        <div class="c c-full-width">
                                            <div class="g g-pd-sm user-action-info">
                                                <div class="r">
                                                    <!--                                        <div class="c c-float">-->
                                                    <!--                                            <div class="num">1</div>-->
                                                    <!--                                        </div>-->
                                                    <div class="c c-inner-width">
                                                        <div class="img-profile">
                                                            <div class="img-profile-outer">
                                                                <img class="img-profile-outer__img" src="/assets/tempImg/profile/ah.jpg" alt="프로필 이미지">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="c">
                                                        <div class="g">
                                                            <div class="r">
                                                                <div class="c">
                                                                    <div class="user-action-info-detail">
                                                                        <span class="user-id">areum7239</span>
                                                                        <!--                                                            <span class="user-action">님이 상장을 보냈습니다.</span>-->
                                                                        <span class="user-action-date">23.10.17 10 11</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--                                                <div class="r">-->
                                                            <!--                                                    <div class="c">-->
                                                            <!--                                                        <div class="user-action-info-detail">-->
                                                            <!--                                                            <span class="user-name">한봉식</span>-->
                                                            <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                            <!--                                                        </div>-->
                                                            <!--                                                    </div>-->
                                                            <!--                                                </div>-->
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

                                                        <div class="btn-more-action">
                                                            <div class="img-more">
                                                                <a href="#;" class="trigger img-more__outer"><img class="img-more__outer__img" src="/assets/img/ico-more.png" alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="r">
                                        <div class="c c-full-width">
                                            <div class="g g-pd-sm comment-body">
                                                아직 살만한 세상이다 생각이듭니다 가족분 모두 힘내시길 멀리서 응원합니다.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="comment__list">
                                <div class="g">
                                    <div class="r">
                                        <div class="c c-full-width">
                                            <div class="g g-pd-sm user-action-info">
                                                <div class="r">
                                                    <!--                                        <div class="c c-float">-->
                                                    <!--                                            <div class="num">1</div>-->
                                                    <!--                                        </div>-->
                                                    <div class="c c-inner-width">
                                                        <div class="img-profile">
                                                            <div class="img-profile-outer">
                                                                <img class="img-profile-outer__img" src="/assets/tempImg/profile/k.jpg" alt="프로필 이미지">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="c">
                                                        <div class="g">
                                                            <div class="r">
                                                                <div class="c">
                                                                    <div class="user-action-info-detail">
                                                                        <span class="user-id">hellopapa11</span>
                                                                        <!--                                                            <span class="user-action">님이 상장을 보냈습니다.</span>-->
                                                                        <span class="user-action-date">23.10.17 10 11</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--                                                <div class="r">-->
                                                            <!--                                                    <div class="c">-->
                                                            <!--                                                        <div class="user-action-info-detail">-->
                                                            <!--                                                            <span class="user-name">한봉식</span>-->
                                                            <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                            <!--                                                        </div>-->
                                                            <!--                                                    </div>-->
                                                            <!--                                                </div>-->
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

                                                        <div class="btn-more-action">
                                                            <div class="img-more">
                                                                <a href="#;" class="trigger img-more__outer"><img class="img-more__outer__img" src="/assets/img/ico-more.png" alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="r">
                                        <div class="c c-full-width">
                                            <div class="g g-pd-sm comment-body">
                                                다른 분들 선행 눈물나네요.. 진짜 근데 아프간은 아직도 이해 할 수 없습니다. 한국 국민을 더 잘 챙기면 좋겠습니다.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

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

<style>
    .sangzzang-copy{position: absolute;left: -999999px;top: -999999px;}
</style>
    <div class="sangzzang sangzzang-copy">
        <!--
        <div class="sz-wrting sz-ratio sz-write clearfix">
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
                            <ul class="modal-list">
                                <li><a href="#;">스크랩하기</a></li>
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
                            <style>
                                .btn-download-sz{}
                                .btn-download-sz > .r{gap:5px; justify-content:center;padding:5px 0;}
                                .btn-download-sz > .download-sz-size-select{gap:0 15px;margin-bottom:10px;}
                            </style>
                            <div class="g btn-download-sz">
                                <div class="r download-sz-size-select">
                                    <span class="forms">
                                        <input type="radio" name="download-size" value="radio-q01" id="radio-q01" checked="checked">
                                        <label for="radio-q01">일반</label>
                                    </span>
                                    <span class="forms">
                                        <input type="radio" name="download-size" value="radio-q02" id="radio-q02">
                                        <label for="radio-q02">포토카드</label>
                                    </span>
                                    <span class="forms">
                                        <input type="radio" name="download-size" value="radio-q03" id="radio-q03">
                                        <label for="radio-q03">A4용지</label>
                                    </span>
<!--                                    <a class="btn" id="imgDownload">다운로드(일반)</a>-->
<!--                                    <a class="btn" id="imgDownload3" onclick="alert('개발 중입니다.');return false;">다운로드 (포토카드)</a>-->
<!--                                    <a class="btn" id="imgDownload4" onclick="alert('개발 중입니다.');return false;">다운로드 (A4용지)</a>-->
                                </div>
                                <div class="r">
                                    <a class="btn" id="imgDownload">다운로드</a>
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
<style>
    /*.sangzzang-copy .sz-wrting{transform:scale(1);}*/
    /*.sangzzang-copy{left:0 !important;top:0 !important;}*/

</style>
<script>
    /* 상장 스크린샷 */
    function szClone(){
        let body = $('body');
        let origin = $(".sangzzang.sangzzang-origin");
        let copy = $(".sangzzang.sangzzang-copy");

        copy.remove();
        body.append('<div class="sangzzang sangzzang-copy"></div>');
        origin.find(" > .sz-wrting").clone().appendTo(".sangzzang.sangzzang-copy");

        let copyWriting = $(".sangzzang.sangzzang-copy > .sz-wrting");
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

    function onScreenShotClick(ev){ //스크린샷 기능
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
        let appendTargetEl = '#modalSzDownload .sz-download-modal-col';
        $(appendTargetEl).empty();

        /*
            html2canvas(document.querySelector(".sangzzang-copy .CAPTUREAREA")).then(function(canvas)
        */

        html2canvas(document.querySelector(".sangzzang-origin .CAPTUREAREA")).then(function(canvas) {
            document.querySelector(appendTargetEl).appendChild(canvas);
            let myImage = canvas.toDataURL();

            let today = new Date();
            let year = today.getFullYear();
            let month = ('0' + (today.getMonth() + 1)).slice(-2);
            let day = ('0' + today.getDate()).slice(-2);
            let hours = ('0' + today.getHours()).slice(-2);
            let minutes = ('0' + today.getMinutes()).slice(-2);
            let seconds = ('0' + today.getSeconds()).slice(-2);

            $('#imgDownload').attr('href', myImage);

            let fileName = '상짱_' + year + '-' + month  + '-' + day + '-' + hours + minutes + seconds;
            /*
            if($('#saveTitle').val() == ''){
                fileName = '상장_' + year + '-' + month  + '-' + day + '-' + hours + ':' + minutes  + ':' + seconds;
            }else{
                fileName = $('#saveTitle').val();
            }*/
            $('#imgDownload').attr('download', fileName+'.png');
        });
    }

</script>

</div>
</body>



