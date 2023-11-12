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
        <div class="content content-SZ-WRITE">

            <div class="layout-two-one">
                <div class="layout-two-one__layout-left">

                    <!-- 좌측 영역 -->
                    <div class="LAYOUT-LEFT col-md-6">
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
<style>
    .sz-design{display:block;width:100%;}
    /* 상장 만들기 및 보여주기 비율 */
    .SZ-ORIGIN{border:1px solid #e9e9e9;overflow:hidden;}
    .SANGZZANG-VIEW{margin-top:2px;}
    .SZ-RATIO{position:relative;}
    .SZ-RATIO textarea,
    .SZ-RATIO input[type="text"]{/*border:2px solid #8caee5;*/}
    .SZ-WRITE .sz-sticker,.SZ-WRITE .sz-stamp{position:relative;}
    .SZ-WRITE{width:1000px;transform-origin:left top;}
    .SZ-RATIO input, .SZ-RATIO textarea{border:none;outline:2px solid #c8c8c8;}
    .SZ-RATIO textarea{padding:0;}

    /* 상장 디자인 */
    .SZ-RATIO .SZ-RATIO-img{width:100%;}

    /* 상장 이름 */
    .SZ-RATIO .sz-name{min-height:8%;position:absolute;left:0px;top:13%;width:100%;margin:0 auto;text-align:center;}
    .SZ-RATIO .sz-name > *{display:block;margin:0 auto;width:70%;height:100%;font-size:90px;text-align:center;background:transparent;}
    .SZ-RATIO .sz-name > *{font-size:64px;}

    /* 상장 타이틀 */
    .SZ-RATIO .sz-title{position:absolute;left:15%;top:27%;width:39%;min-height:6%;text-align:left;}
    .SZ-RATIO .sz-title > *{width:100%;height:100%;text-align:left;}
    .SZ-RATIO .sz-title > *{font-size:50px;}

    /* 상장 받는 사람*/
    .SZ-RATIO .sz-receiver{position:absolute;right:15%;top:27%;width:29%;min-height:6%;text-align:right;}
    .SZ-RATIO .sz-receiver > *{width:100%;height:100%;text-align:right;}
    .SZ-RATIO .sz-receiver > *{font-size:50px;}

    /* 상장 보내는 사람*/
    .SZ-RATIO .sz-sender{position:absolute;right:30%;top:77%;width:31%;min-height:10%;text-align:right;}
    .SZ-RATIO .sz-sender > *{width:100%;height:100%;text-align:right;}
    .SZ-RATIO .sz-sender > *{font-size:50px;}

    /* 상장 내용 */
    .SZ-RATIO .sz-word{position:absolute;left:15%;top:34%;width:70%;min-height:37%;margin:0 auto;text-align:center;}
    .SZ-RATIO .sz-word > *{width:100%;display:inline-block;height:100%;text-align:justify;letter-spacing:0;}
    .SZ-RATIO .sz-word > *{font-size:44px;vertical-align:top;}

    /* 상장 날짜 */
    .SZ-RATIO .sz-date{position:absolute;right:15%;top:71%;width:46%;min-height:5%;text-align:right;}
    .SZ-RATIO .sz-date > *{width:100%;height:100%;text-align:right;}
    .SZ-RATIO .sz-date > *{font-size:40px;}

    /* 상장 스티커 */
    .SZ-RATIO .sz-sticker{position:absolute;z-index:500;left:15%;top:71%;width:23%;height:16%;margin:0 auto;text-align:center;}
    .SZ-WRITE .sz-sticker .sz-sticker-img{display:inline-block;width:100%;}

    /* 상장 도장 */
    .SZ-RATIO .sz-stamp{position:absolute;z-index:500;right:15%;top:77%;width:14%;height:10%;margin:0 auto;text-align:center;}
    .SZ-RATIO .sz-stamp > a > *{display:inline-block;width:100%;}
    .SZ-RATIO .sz-sticking{position:absolute;left:0;top:0;transform:rotate(5deg);will-change:transform;}
    .SZ-RATIO .sz-stamping{position:absolute;left:0;top:0;transform:translateY(5%);will-change:transform;}
    .SZ-RATIO .sz-sticker > a > .sz-sticking{display:none;width:100%;left:9%;top:-5%;z-index:1;will-change:transform;}
    .SZ-RATIO .sz-stamp .sz-stamping{display:none;width:150%;left:-25%;top:-30%;z-index:1;will-change:transform;}

    /* 공통 */
    .SZ-RATIO .sz-name > *,
    .SZ-RATIO .sz-title > *,
    .SZ-RATIO .sz-receiver > *,
    .SZ-RATIO .sz-sender > *,
    .SZ-RATIO .sz-date > *{color:#333;font-weight:bold;letter-spacing:0;word-break:break-all;white-space:normal;overflow:none;background:transparent;}
    .SZ-RATIO .sz-word > *{color:#333;letter-spacing:-1px;word-break:break-all;white-space:normal;overflow:hidden;}

    .SANGZZANG-COPY{width:2480px}
    .SANGZZANG-COPY .SZ-WRITE{transform: scale(2.48);} /*여기에 width 주면 아이폰 아이패드에서 깨짐*/

    .draw{position:absolute;left:0px;top:0px;height:30px;transition: all .1s;will-change:transform;}
    .draw .sz-draw-img{display:block;height:100%;opacity:.6;will-change:transform;}

    .SZ-WRITE{width:2480px;}
    .SZ-RATIO .sz-name > *{font-size:180px;}
    .SZ-RATIO .sz-title > *{font-size:124px;}
    .SZ-RATIO .sz-receiver > *{font-size:124px;}
    .SZ-RATIO .sz-word > *{font-size:110px;}
    .SZ-RATIO .sz-date > *{font-size:90px;}
    .SZ-RATIO .sz-sender > *{font-size:130px;}

    .SANGZZANG-COPY{p1osition:absolute;1eft:-999999px;1op:-999999px;}







    html body #container .CONTENTEDITABLE{position:relative;white-space:pre;}
    .TARGET .TEXT-EDIT::after{content:"";position:absolute;left:0;top:0;width:100%;height:100%;border:10px dashed #00dcf0 !important;box-sizing: border-box;}
    /*.CONTENTEDITABLE::after{content:'';width:100%;height:100%;position:absolute;left:0;top:0;border:5px dashed #C1C1C1 !IMPORTANT;box-sizing:border-box;}
    .TEXT-EDIT::after{border:10px dashed #00dcf0 !IMPORTANT;}
    */
    html body #container .CONTENTEDITABLE#sangText{white-space:normal;}

    .TARGET{z-index:1000;}

    html body #wrap #container .edit-guide-wrapper{display:none;width:900px;height:280px !important;margin-top:-1px;box-shadow:0 2px 30px 0 rgb(0 0 0 / 26%);border-radius:35px;overflow:hidden;}
    .button-edit-wrapper{height:100%;}
    .button-edit{display:flex;height:100%;}
    .button-edit .button{width:50%;height:100%;font-size:96px;background:#fff;border:2px solid #afafaf;}

    .FONT-UP{text-indent:-999999px;position:relative;}
    .FONT-UP::before{content:'';position:absolute;left:50%;top:50%;transform:translate(-50%);display:inline-block;width:100px;height:15px;background:#000;border-radius:10px;}
    .FONT-UP::after{content:'';position:absolute;left:50%;top:33%;transform:translate(-50%);display:inline-block;width:15px;height:100px;background:#000;border-radius:10px;}

    .FONT-DOWN{text-indent:-999999px;position:relative;}
    .FONT-DOWN::before{content:'';position:absolute;left:50%;top:50%;transform:translate(-50%);display:inline-block;width:100px;height:15px;background:#000;border-radius:10px;}

    .EDITOR-CLOSE{text-indent:-999999px;position:relative;}
    .EDITOR-CLOSE::before{content:'';position:absolute;left:50%;top:50%;transform:translate(-50%) rotate(45deg);display:inline-block;width:100px;height:15px;background:#000;border-radius:10px;}
    .EDITOR-CLOSE::after{content:'';position:absolute;left:50%;top:50%;transform:translate(-50%) rotate(-45deg);display:inline-block;width:100px;height:15px;background:#000;border-radius:10px;}

    .sticker-ani-in{
        animation-name: sticker-ani-in;
        animation-duration: 0.3s;
        animation-delay: 0s;
    }
    @keyframes sticker-ani-in {
        0%{
            transform:translateX(-100%)
        }
        100%{
            transform:translateX(0%)
        }
    }

    .sticker-ani-out{
        animation-name: sticker-ani-out;
        animation-duration: 0.3s;
        animation-delay: 0s;
    }
    @keyframes sticker-ani-out {
        0%{
            transform:translateX(0)
        }
        100%{
            transform:translateX(-200%)
        }
    }

    .stamp-ani-in{
        animation-name: stamp-ani-in;
        animation-duration: 0.3s;
        animation-delay: 0s;
    }
    @keyframes stamp-ani-in {
        0%{
            transform:translateX(200%)
        }
        100%{
            transform:translateX(0%)
        }
    }

    .stamp-ani-out{
        animation-name: stamp-ani-out;
        animation-duration: 0.3s;
        animation-delay: 0s;
    }
    @keyframes stamp-ani-out {
        0%{
            transform:translateX(0)
        }
        100%{
            transform:translateX(100%)
        }
    }

    .select-sticker-ani-in{
        animation-name: select-sticker-ani-in;
        animation-duration: 0.2s;
        animation-delay: 0s;
    }
    @keyframes select-sticker-ani-in {
        0%{
            transform:scale(1.3)
        }
        100%{
            transform:scale(1)
        }
    }
    .select-stamp-ani-in{
        animation-name: select-stamp-ani-in;
        animation-duration: 0.2s;
        animation-delay: 0s;
    }
    @keyframes select-stamp-ani-in {
        0%{
            transform:scale(1.3)
        }
        100%{
            transform:scale(1)
        }
    }
</style>
                        <div class="SANGZZANG SZ-ORIGIN">
                            <div class="SZ-WRITE SZ-RATIO clearfix">
                                <img class="sz-design" src="/assets/img/design/sz_000004.png" alt=""/>

                                <div class="sz-name ELEMENT">

                                    <div id="sangName" name="sangName" class="CONTENTEDITABLE" contenteditable="true">상 장</div>
                                    <div class="edit-guide-wrapper">
                                        <div class="button-edit-wrapper">
                                            <div class="button-edit">
                                                <button type="button" class="button FONT-UP" title="폰트 크게">+</button>
                                                <button type="button" class="button FONT-DOWN" title="폰트 작게">ㅡ</button>
                                                <button type="button" class="button EDITOR-CLOSE" title="에디터 닫기">x</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="sz-title ELEMENT">
                                    <div id="sangTitle" name="sangTitle" class="CONTENTEDITABLE" contenteditable="true">마리오 파티 우승</div>
                                    <div class="edit-guide-wrapper">
                                        <div class="button-edit-wrapper">
                                            <div class="button-edit">
                                                <button type="button" class="button FONT-UP" title="폰트 크게">+</button>
                                                <button type="button" class="button FONT-DOWN" title="폰트 작게">ㅡ</button>
                                                <button type="button" class="button EDITOR-CLOSE" title="에디터 닫기">x</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sz-receiver ELEMENT">
                                    <div id="sangReceiver" name="sangReceiver" class="CONTENTEDITABLE" contenteditable="true">정서윤</div>
                                    <div class="edit-guide-wrapper">
                                        <div class="button-edit-wrapper">
                                            <div class="button-edit">
                                                <button type="button" class="button FONT-UP" title="폰트 크게">+</button>
                                                <button type="button" class="button FONT-DOWN" title="폰트 작게">ㅡ</button>
                                                <button type="button" class="button EDITOR-CLOSE" title="에디터 닫기">x</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sz-word ELEMENT">
                                    <div id="sangText" name="sangText" class="CONTENTEDITABLE" contenteditable="true">
                                        위 사람은 제1회 한봉식배 닌텐도<br>
                                        스위치 마리오 파티 게임에서 무수한 경쟁자를 제치고 챔피언이 되었으므로 <br>
                                        이 상을 드립니다.<br>
                                        <br>
                                        다음에도 다시 챔피언이 될 수 있도록 하세요!
                                    </div>
                                    <div class="edit-guide-wrapper">
                                        <div class="button-edit-wrapper">
                                            <div class="button-edit">
                                                <button type="button" class="button FONT-UP" title="폰트 크게">+</button>
                                                <button type="button" class="button FONT-DOWN" title="폰트 작게">ㅡ</button>
                                                <button type="button" class="button EDITOR-CLOSE" title="에디터 닫기">x</button>
                                            </div>
                                        </div>
                                    </div>


                                    <!--
                                    <textarea id="sangText" name="sangText" data-once="on" placeholder="위 정은아는 평소 한봉식의 직장동료이며 한봉식이 알려주는 웹표준 코딩에 대한  상당히 습득력이 빠르고 뛰어나 한봉식이  보증하건데 아사달 퍼블리셔 외 최고 웹표준 코딩의 에이스일 것을 보증하며 에이스와 함께 이 상장을 드립니다.">
위 사람은 제1회 한봉식배 닌텐도
스위치 마리오 파티 게임에서 무수한 경쟁자를 제치고 챔피언이 되었으므로 이
상을 드립니다.

다음에도 다시 챔피언이 될 수 있도록 하세요!</textarea>-->
                                </div>
                                <div class="sz-date ELEMENT">
                                    <div class="edit-guide-wrapper" style="position:absolute;left:0;top:10px;transform:translateY(-100%);">
                                        <div class="button-edit-wrapper">
                                            <div class="button-edit">
                                                <button type="button" class="button FONT-UP" title="폰트 크게">+</button>
                                                <button type="button" class="button FONT-DOWN" title="폰트 작게">ㅡ</button>
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

                        <!-- 상장 디자인 리스트 -->
                        <div class="sz-design-select" style="display:none;">
                            <h3 class="h3 hidden">상장 디자인</h3>
                            <div class="sz-design-list">
                                <div id="szDesignList">
                                    <div class="sz-design-img">
                                        <button type="button"><img class="sz-design" src="/assets/img/design/sz_000001.png" alt=""/></button>
                                        <button type="button"><img class="sz-design" src="/assets/img/design/sz_000002.png" alt=""/></button>
                                        <button type="button"><img class="sz-design" src="/assets/img/design/sz_000003.png" alt=""/></button>
                                        <button type="button"><img class="sz-design" src="/assets/img/design/sz_000004.png" alt=""/></button>
                                        <button type="button"><img class="sz-design" src="/assets/img/design/sz_000005.png" alt=""/></button>
                                        <button type="button"><img class="sz-design" src="/assets/img/design/sz_000006.png" alt=""/></button>
                                        <button type="button"><img class="sz-design" src="/assets/img/design/sz_000007.png" alt=""/></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 상장 디자인 리스트 End -->
                    </div>
                    <!-- 좌측 영역 End -->

                </div>
                <div class="layout-two-one__layout-right">
                    <div class="SZ-WRITE-detail">
                        <style>
                            .SZ-WRITE-detail h3{font-size: 14px;}
                            .SZ-WRITE-detail > .g{padding:10px;}
                            .SZ-WRITE-detail > .g > .r{margin-bottom:10px;}
                            .SZ-WRITE-detail > .g > .r > .c{flex:1;width:100%;}
                        </style>
                        <div class="g">
                            <div class="r">
                                <div class="c">
                                    <h3 class="h3">AI 작성 <a href="/pages/writing_ai.php" target="_blank"><img class="concept" src="/assets/img/sample/concept-01.png" alt=""></a></h3>
                                </div>
                            </div>
                            <div class="r">
                                <div class="c">
                                    <style>
                                        .SZ-WRITE-detail .story{width:100%;}
                                        .SZ-WRITE-detail .photo{width:100%;}
                                        .SZ-WRITE-detail .input-photo{width:100% !important;}
                                        .SZ-WRITE-detail .tag{width:100% !important;}
                                        .SZ-WRITE-detail .hashtag{width:100% !important;}
                                        .SZ-WRITE-detail .tag-checkbox{width:100% !important;}
                                        .SZ-WRITE-detail .movie{width:100% !important;}
                                        .SZ-WRITE-detail .movie-input{width:100% !important;}
                                        .SZ-WRITE-detail .source{width:100% !important;}
                                        .SZ-WRITE-detail .source-input{width:100% !important;}


                                        textarea.story{display:block;height:50px;padding:5px;border:1px solid #d3d3d3;width:100%;}
                                        input.source{color:#f0af00}
                                        .tagify{
                                            width: 100%;
                                            max-width: 700px;
                                            --tag-inset-shadow-size: 100em !important;
                                            --tag-bg:#a4dfff !important;
                                        }

                                        .tags-look .tagify__dropdown__item{
                                            display: inline-block;
                                            border-radius: 3px;
                                            padding: .3em .5em;
                                            /*border: 1px solid #CCC;*/
                                            background: #a4dfff;
                                            margin: .2em;
                                            font-size: .85em;
                                            color: black;
                                            transition: 0s;
                                        }

                                        .tags-look .tagify__dropdown__item--active{
                                            color: black;
                                        }

                                        .tags-look .tagify__dropdown__item:hover{
                                            background: #93d9ff;
                                            border-color: #a4dfff;
                                        }
                                        .tags-look{z-index:999999 !important;}
                                        .customLook{
                                            --tag-bg                   : #a4dfff;
                                            --tag-hover                : #a4dfff;
                                            --tag-text-color           : #FFF;
                                            --tags-border-color        : silver;
                                            --tag-text-color--edit     : #111;
                                            --tag-remove-bg            : var(--tag-hover);
                                            --tag-pad                  : .6em 1em;
                                            --tag-inset-shadow-size    : 0em;
                                            --tag-remove-btn-bg--hover : black;

                                            display: inline-block;
                                            min-width: 0;
                                            border: none;
                                        }
                                        .samples{display:table;margin-bottom:10px;width:100%;border-collapse:collapse;table-layout:fixed;background-color:#fff;}
                                        .samples > div{display:table-row;}
                                        .samples > div > a{display:table-cell;border:1px solid #e8e8e8;padding: 13px 10px 14px;color:#222;font-size:12px;line-height:1.2;text-align:center;text-align:center;vertical-align:middle;}
                                        .samples > div > a.on{background-color:#404047;color:#fff;}
                                        .samples > ul{display:table-row;}
                                        .samples > ul > li{display:table-cell;border:1px solid #e8e8e8;color:#222;font-size:12px;line-height:1.2;text-align:center;text-align:center;vertical-align:middle;}
                                        .samples > ul > li a{display:block;padding: 13px 10px 14px;}
                                        .samples > ul > li.active{background-color:#404047;}
                                        .samples > ul > li.active a{color:#fff;}
                                        .sample-layer{will-change:transform;}
                                        .sample-layer-body .title{font-size:14px;}
                                        .sample-layer-body .body{font-size:13px;}
                                        .sample-select{display:non1e;}
                                        .sample-layer{display:none;flex-direction:column;overflow:hidden;position:fixed;left:0;top:0;z-index:100;width:100%;height:100%;padding-bottom:40px;background-color:#fff;}
                                        .sample-layer .sample-layer-body{margin:0 auto;max-width:740px;}
                                        .sample-layer .sample-layer-body ul.sample-list{padding:0 10px;}
                                        .sample-layer .sample-layer-body ul.sample-list > li{display:flex;overflow:hidden;border-bottom:1px solid #e8e8e8;padding:5px;font-size:12px;}
                                        .sample-layer .sample-layer-body ul.sample-list > li .title{font-size:13px;font-weight:bold;}
                                        .sample-layer .sample-layer-body ul.sample-list > li .link{display:block;flex:1;}
                                        .sample-layer .sample-layer-body ul.sample-list > li .copy{width:80px;}
                                        .sample-layer .sample-layer-body ul.sample-list > li .copy a{display:flex;align-items:center;justify-content:center;background-color:yellow;width:100%;height:100%;background-color:#ed4046;color:#fff;}
                                        .sample-layer-footer{position:fixed;left:0;bottom:0;z-index:101;width:100%;height:40px;font-size:12px;text-align:center;background-color:#fafafa;}

                                    </style>
                                    <div class="sample-select lg-visible">
                                        <h3 class="h3"><!--class="hidden"-->예제</h3>
                                        <div class="samples mb0">
                                            <div>
                                                <a href="#;">지인<br>친구</a>
                                                <a href="#;">이성<br>연애</a>
                                                <a href="#;">자녀<br>부모님</a>
                                                <a href="#;">스승<br>제자</a>
                                                <a href="#;">직장<br>멘토</a>
                                            </div>
                                            <div>
                                                <a href="#;">인플루언서</a>
                                                <a href="#;">신앙</a>
                                                <a href="#;">정치</a>
                                                <a href="#;">연예<br>스포츠</a>
                                                <a href="#;">상춘<br>문예 <!-- 세상의 재밌는 표현들 !! --></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="r">
                                <div class="c">
                                    <div class="story">
                                        <h3 class="h3">스토리</h3>
                                        <hr class="hr-small">
                                        <div class="forms">
                                            <label for="story" class="hidden">스토리</label>
                                            <textarea id="story" class="story"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="r">
                                <div class="c">

                                    <div class="photo">
                                        <h3 class="h3">사진</h3>
                                        <hr class="hr-small">
                                        <form enctype=“multipart/form-data”>
                                            <input type="file" value="파일첨부" accept="image/*" class="input-photo"/>
                                        </form>

                                    </div>

                                </div>
                            </div>

                            <div class="r">
                                <div class="c">
                                    <div class="hashtag">
                                        <h3 class="h3">해시태그</h3>
                                        <hr class="hr-small">
                                        <div class="tag box">
                                            <div class="tag-checkbox">
                                                <input type="text" name="tagInput" class="tag-input" placeholder="태그를 입력하세요." value="" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="r">
                                <div class="c">
                                    <div class="hashtag">
                                        <h3 class="h3">능력</h3>
                                        <hr class="hr-small">
                                        <div class="tag box">
                                            <div class="tag-checkbox">
                                                <input type="text" name="tagInput" class="tag-input-2" placeholder="태그를 입력하세요." value="" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="r">
                                <div class="c">

                                    <div class="movie">
                                        <h3 class="h3">동영상</h3>
                                        <hr class="hr-small">
                                        <div class="forms">
                                            <label for="hashTag" class="hidden">동영상</label>
                                            <input type="text" id="hashTag" placeholder="유튜브, 네이버, 다음등 외부 동영상을 <iframe> 이나 <embed> 등의 HTML 태그로 삽입" class="movie-input">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="r">
                                <div class="c">
                                    <div class="source">
                                        <h3 class="h3">출처</h3>
                                        <hr class="hr-small">
                                        <div class="forms">
                                            <label for="source" class="hidden">출처</label>
                                            <input type="text" id="source" placeholder="https://www.google.com" class="source-input">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="r">
                                <div class="c">
                                    <div class="private">
                                        <h3 class="h3">공개</h3>
                                        <hr class="hr-small">
                                        <div>
                                            <span class="forms">
                                                <label for="checkbox-sw02" class="switch">
                                                    <input type="checkbox" name="checkbox-sw02" value="checkbox-sw02" id="checkbox-sw02" checked="checked">
                                                    <span class="slider"></span>
                                                </label>
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

                            <div class="r">
                                <div class="c">
                                    <div class="guide">
                                        <p>✔ 프린트는 작성완료 후 가능합니다.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="r">
                                <div class="c">
                                    <div class="buttons action" style="text-align:center;width:100%;">
                                        <button type="button" id="SAVE" class="btn-primary btn-lg" onclick="go('./sz_view.php')">작성완료</button>
                                        <button type="button" class="btn-black btn-lg">초기화</button>
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
        };
        /* 링크 */
        function go(path){
            location.href=path;
        }
        drawIcon()
    </script>
    <div class="SANGZZANG SANGZZANG-COPY">
        <!--
        <div class="sz-wrting SZ-RATIO SZ-WRITE clearfix">
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
</div>
</body>



