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

                                            <div>중원의 지휘자 상</div></div>
                                        <div class="sz-receiver">

                                            <div>박수진</div></div>
                                        <div class="sz-word">
                                            <div><br>
                                               사방에서 날라오는 요청사항들을 정리하여
                                               적시적소에 뿌려주는 능력이 매우 탁월하여
                                               인상적이었으므로 이 상을 드립니다.  </div>
                                        </div>
                                        <div class="sz-date">

                                            <div>2023년 10월 23일</div></div>
                                        <div class="sz-sticker">
                                            <a href="#;">
                                                <img class="sz-sticker-img" src="/assets/img/design/stk/sz_stk_000002.png" alt="">
                                            </a>
                                        </div>
                                        <div class="sz-sender">

                                            <div>한봉식</div></div>
                                        <div class="sz-stamp">
                                            <a href="#;">
                                                <img class="sz-stamp-img" src="/assets/img/design/stp/qr_psj.png" alt="">
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
                                    <a href="/pages/3d-card-share-psj.php" id="download">
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
                                            업무조율 10↑
                                        </a>
                                        <a href="#;" class="btn-primary" id="">
                                            효심 8↑
                                        </a>
                                        <a href="#;" class="btn-primary" id="">
                                            피그마강사 100↑
                                        </a>
                                        <a href="#;" class="btn-primary" id="">
                                            디자인 10↑
                                        </a>
                                        <a href="#;" class="btn-primary" id="">
                                            기획 8↑
                                        </a>
                                        <a href="#;" class="btn-primary" id="">
                                            리서처 30↑
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
                                <li class="swiper-slide" style="background-image:url(https://comicthumb-phinf.pstatic.net/20220502_10/pocket_1651467259250A2n2O_JPEG/%C1%DF%BC%BC%C0%C7_%C1%F6%B9%E8%C0%DA_%C5%B8%C0%CC%C6%B2_%C3%D6%C1%BE.jpg)"></li>

                                <li class="swiper-slide" style="background-image:url(https://comicthumb-phinf.pstatic.net/20220502_10/pocket_1651467259250A2n2O_JPEG/%C1%DF%BC%BC%C0%C7_%C1%F6%B9%E8%C0%DA_%C5%B8%C0%CC%C6%B2_%C3%D6%C1%BE.jpg)"></li>

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



