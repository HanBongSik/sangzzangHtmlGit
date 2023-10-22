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
            </style>
            <div class="layout-two-one">
                <div class="layout-two-one__layout-left">
                    <div class="g">
                        <div class="r">
                            <div class="c">
                                <div class="g g-pd-sm user-action-info shadow">
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
                            <div class="c">
                                <div class="showcase-state shadow">
                                    <!--<button type="button" class="button small" id="addShowcase">쇼케이스에 진열</button>-->
                                    <button type="button" class="button primary medium">쇼케이스 진열 중</button>
                                    <button type="button" class="btn-black">비공개</button>
                                </div>
                            </div>
                        </div>
                        <div class="r">
                            <div class="c c-full-width shadow">
                                <style>
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

                                    .sangzzang-copy{p1osition:absolute;1eft:-999999px;1op:-999999px;}


                                </style>
                                <!-- 상장 만들기 -->
                                <div class="sangzzang sangzzang-origin sangzzang-view">
                                    <div class="sz-wrting sz-ratio sz-write clearfix" id="captureArea">
                                        <img class="sz-design" src="/assets/img/design/sz_000004.png" alt="">

                                        <div class="sz-name">

                                            <div>상 장</div></div>
                                        <div class="sz-title">

                                            <div>에너자이저 상</div></div>
                                        <div class="sz-receiver">

                                            <div>최수빈</div></div>
                                        <div class="sz-word">
                                            <div><br>
                                                건전지 빠진듯이 늘어져 있던 나에게
                                                건전지를 갈아끼워 준 것처럼 나의 활력을 드높여주었으므로
                                                이 상을 드립니다.   </div>
                                        </div>
                                        <div class="sz-date">

                                            <div>2023년 10월 23일</div></div>
                                        <div class="sz-sticker">
                                            <a href="#;">
                                                <img class="sz-sticker-img" src="/assets/img/design/stk/sz_stk_000003.png" alt="">
                                            </a>
                                        </div>
                                        <div class="sz-sender">

                                            <div>한봉식</div></div>
                                        <div class="sz-stamp">
                                            <a href="#;">
                                                <img class="sz-stamp-img" src="/assets/img/design/stp/qr_csb.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 상장 만들기 End -->

                            </div>
                        </div>
                        <div class="r">
                            <div class="c c-full-width ">
                                <style>

                                    /* 상장 보기 */
                                    .sz-function-btn{margin-top:5px;text-align:center;padding:10px;}
                                    .sz-function{text-align:center;}
                                    .sz-function.sz-function-01{margin-bottom:10px;padding:10px 0;margin:5px 0 0px 0;width:100%;}
                                    .sz-function.sz-function-01 a{margin:0 5px;opacity:.8;}
                                    .sz-function.sz-function-01 a:hover{opacity:1;}
                                    .sz-function.sz-function-01 img{position:relative;top:-3px;height:20px;}
                                    .sz-function.sz-function-01 span{line-height:20px;font-size:14px;}
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
                                </style>
                                <div class="sz-function sz-function-01 shadow">
                                    <a href="#;" id="share" class="MODAL-BTN" data-target="#modalShare">
										<span class="share">
											<img src="/assets/img/ico-share.png" alt=""> <span>공유</span>
										</span>
                                    </a>
                                    <a href="#;" id="scrap" class="MODAL-BTN" data-target="#modalScrap">
										<span class="scrap">
											<img src="/assets/img/ico-scrap.png" alt=""> <span>스크랩</span>
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
											<img src="/assets/img/ico-copy.png" alt=""> <span>복사</span>
										</span>
                                    </a>
                                    <a href="#;" id="download" class="MODAL-BTN" data-target="#modalSzDownload">
										<span class="copy last">
											<img src="/assets/img/ico-download.png" alt=""> <span>다운로드</span>
										</span>
                                    </a>
                                    <a href="/pages/3d-card-share-csb.php" id="download">
										<span class="copy last">
											<img src="/assets/img/ico-360.png" alt=""> <span>3D카드</span>
										</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="r">
                            <div class="c">
                                <div class="sz-function sz-function-03 shadow">
                                    <style>
                                        .sz-function-03 .btn-primary {height: 30px !important;
                                            padding: 0 10px !important;
                                            line-height: 28px !important;border-radius:6px;overflow:hidden;color:#fff;display:inline-block;}
                                    </style>
                                    <!-- 상장 능력 버튼 -->
                                    <div>
                                        <a href="#;" class="btn-primary" id="">
                                            강철체력 90↑
                                        </a>
                                        <a href="#;" class="btn-primary" id="">
                                            정리정돈 100↑
                                        </a>
                                        <a href="#;" class="btn-primary" id="">
                                            노년엔취미로화가 100↑
                                        </a>
                                        <a href="#;" class="btn-primary" id="">
                                            여행 10↑
                                        </a>
                                        <a href="#;" class="btn-primary" id="">
                                            스키 80↑
                                        </a>
                                        <a href="#;" class="btn-primary" id="">
                                            청소 90↑
                                        </a>
                                    </div>
                                    <!-- 상장 능력 버튼 End -->
                                </div>
                            </div>
                        </div>
                        <div class="r">
                            <div class="c shadow">
                                <div class="g sender">
                                    <div class="r">
                                        <div class="c">
                                            <!-- 유저 프로필 덩어리 -->
                                            <div class="g g-pd-sm user-action-info">
                                                <div class="r">
                                                    <div class="c c-inner-width">
                                                        <div class="img-profile">
                                                            <div class="img-profile-outer">
                                                                <img class="img-profile-outer__img" src="/assets/tempImg/profile/test.png" alt="프로필 이미지">
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
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- 유저 프로필 덩어리 End -->
                                        </div>
                                        <div class="c">
                                            <a href="#;">
                                                <span class="love">
                                                    <img class="ico-love" style="height:20px;" src="/assets/img/ico-loveit-on.png" alt="love it!">
                                                    800
                                                </span>
                                            </a>
                                        </div>

                                        <div class="c c-full center-right">
                                            <!-- 유저들 프로필 -->
                                            <div class="img-profiles">
                                                <ul>
                                                    <li>
                                                        <div class="img-profile">
                                                            <div class="img-profile-outer sm">
                                                                <img class="img-profile-outer__img" src="/assets/tempImg/profile/af.jpg" alt="프로필 이미지">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="user-img">
                                                            <div class="img-profile-outer sm">
                                                                <img class="img-profile-outer__img" src="/assets/tempImg/profile/s.jpg" alt="프로필 이미지">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="user-img">
                                                            <div class="img-profile-outer sm">
                                                                <img class="img-profile-outer__img" src="/assets/tempImg/profile/l.jpg" alt="프로필 이미지">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="user-img">
                                                            <div class="img-profile-outer sm">
                                                                <img class="img-profile-outer__img" src="/assets/tempImg/profile/f.jpg" alt="프로필 이미지">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="user-img">
                                                            <div class="img-profile-outer sm">
                                                                <img class="img-profile-outer__img" src="/assets/tempImg/profile/z.jpg" alt="프로필 이미지">
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="plus-num">
                                                    <span class="plus-num__outer">+800</span>
                                                </div>
                                            </div>
                                            <!-- 유저들 프로필 End -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="r">
                            <div class="c">

                            </div>
                        </div>
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
                                <li class="swiper-slide" style="background-image:url(https://idb.imarket.co.kr/con_img/cont/100000017680.jpg)"></li>
                                <li class="swiper-slide" style="background-image:url(data:image/jpeg;base64,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)"></li>
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
                                        <button type="button" class="button secondary large block">검색</button>
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
    <div class="modal-dimmed" id="modalShare">
        <div class="modal">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-content">
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
    <div class="modal-dimmed" id="modalScrap">
        <div class="modal">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-content">
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
    <div class="modal-dimmed" id="modalCopyAndWrite">
        <div class="modal">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-content">
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
    <div class="modal-dimmed" id="modalSzDownload">
        <div class="modal">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-content">
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
                            <div class="download-modal">
                                <div class="row">

                                </div>
                            </div>
                        </div>
                        <!-- 모달 바디 End -->

                        <!-- 모달 푸터 -->
                        <div class="modal-footer">
                            <a class="btn" id="imgDownload">다운로드</a>
                            <button class="btn btn-black MODAL-CLOSE">취소</button>
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
        function szClone(){
            var body = $('body');
            var origin = $(".sangzzang.sangzzang-origin");
            var copy = $(".sangzzang.sangzzang-copy");

            copy.remove();
            body.append('<div class="sangzzang sangzzang-copy"></div>');
            origin.find(" > .sz-wrting").clone().appendTo(".sangzzang.sangzzang-copy");

            var copyWriting = $(".sangzzang.sangzzang-copy > .sz-wrting");
            copyWriting.removeAttr('style').find('.sz-sticking, .sz-stamping').remove();
            copyWriting.find(" > div ").each(function(index){
                var text= $(this).find('textarea').val();
                if($(this).find('textarea').length > 0){
                    $(this).find('textarea').remove();
                    $(this).append('<div>'+text+'</div>');
                    $(this).find('.sz-sticking, .sz-stamping').remove();
                }
            });
        }

        function onScreenShotClick(ev){ //스크린샷 기능
            /*
            width = 2480; // A4 픽셀 //
            scaleW = width*0.001;
            scaleH = height*scaleW;
            border = 3;
            $('.sangzzang-copy .sz-wrting').css('transform','scale('+scaleW+')');
            $('.sangzzang.sangzzang-copy').css('height',scaleH+border+"px");
            */

            var appendTargetEl = '#modalSzDownload .download-modal > .row';
            $(appendTargetEl).empty();

            html2canvas(document.querySelector("#captureArea")).then(function(canvas) {
                document.querySelector(appendTargetEl).appendChild(canvas);
                var myImage = canvas.toDataURL();

                var today = new Date();
                var year = today.getFullYear();
                var month = ('0' + (today.getMonth() + 1)).slice(-2);
                var day = ('0' + today.getDate()).slice(-2);
                var hours = ('0' + today.getHours()).slice(-2);
                var minutes = ('0' + today.getMinutes()).slice(-2);
                var seconds = ('0' + today.getSeconds()).slice(-2);

                $('#imgDownload').attr('href', myImage);

                var fileName = '상짱_' + year + '-' + month  + '-' + day + '-' + hours + minutes + seconds;
                /*
                if($('#saveTitle').val() == ''){
                    fileName = '상장_' + year + '-' + month  + '-' + day + '-' + hours + ':' + minutes  + ':' + seconds;
                }else{
                    fileName = $('#saveTitle').val();
                }*/
                $('#imgDownload').attr('download', fileName+'.png');
            });
        }

        $(document).ready(function(){
            $('#download').on('click',function(e){
                onScreenShotClick();
                e.preventDefault();
            })
        })
    </script>
</div>
</body>



