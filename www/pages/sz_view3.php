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
        <!-- h1 End -->
        <!-- content -->
        <div class="content content-sz-view container-xs">
            <!-- Swiper Gallery-->
            <div class="swiper-container swiper-gallery">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-zoom-container">
                            <img data-src="/assets/tempImg/photo/friends.jpg">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-zoom-container">
                            <img data-src="/assets/tempImg/photo/food2.jpg">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-zoom-container">
                            <img data-src="/assets/tempImg/photo/meet2.jpg">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-zoom-container">
                            <img data-src="/assets/tempImg/photo/game.jpg">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img data-src="/assets/tempImg/photo/game2.jpg">
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-zoom-container">
                            <img data-src="/assets/tempImg/photo/game3.jpg">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-zoom-container">
                            <img data-src="/assets/tempImg/photo/present-1.jpg">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-zoom-container">
                            <img data-src="/assets/tempImg/photo/present-2.jpg">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Swiper Thumbnails-->
            <div class="swiper-container swiper-thumbnails">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image: url(/assets/tempImg/photo/friends.jpg)"></div>
                    <div class="swiper-slide" style="background-image: url(/assets/tempImg/photo/food2.jpg)"></div>
                    <div class="swiper-slide" style="background-image: url(/assets/tempImg/photo/meet2.jpg)"></div>
                    <div class="swiper-slide" style="background-image: url(/assets/tempImg/photo/game.jpg)"></div>
                    <div class="swiper-slide" style="background-image: url(/assets/tempImg/photo/game2.jpg)"></div>
                    <div class="swiper-slide" style="background-image: url(/assets/tempImg/photo/game3.jpg)"></div>
                    <div class="swiper-slide" style="background-image: url(/assets/tempImg/photo/present-1.jpg)"></div>
                    <div class="swiper-slide" style="background-image: url(/assets/tempImg/photo/present-2.jpg)"></div>
                </div>

                <!-- Navigation -->
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
            </div>
            <!-- partial -->
            <script src='https://unpkg.com/swiper@5.1.0/js/swiper.min.js'></script>

            <script >
                var swiperThumbnails = new Swiper('.swiper-thumbnails', {
                    spaceBetween: 10,
                    slidesPerView: 4.5,
                    resistanceRatio: 0.6,
                    slidesOffsetBefore: 50,
                    slidesOffsetAfter: 50,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev'
                    }
                });

                var swiperGallery = new Swiper('.swiper-gallery', {
                    spaceBetween: 10,
                    preloadImages: false,
                    loop: true,
                    speed: 300,
                    thumbs: {
                        swiper: swiperThumbnails
                    },
                    zoom: {
                        maxRatio: 3
                    }
                });
            </script>


        </div>
        <!-- content End -->
    </section>
    <!-- container End -->
    <script>
        var swiperThumbnails = new Swiper('.swiper-thumbnails', {
            spaceBetween: 10,
            slidesPerView: 4.5,
            resistanceRatio: 0.6,
            slidesOffsetBefore: 50,
            slidesOffsetAfter: 50,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            }
        });

        var swiperGallery = new Swiper('.swiper-gallery', {
            spaceBetween: 10,
            simulateTouch: true,
            preloadImages: false,
            loop: true,
            lazy: true,
            lazy: {
                loadPrevNext: false,
                loadOnTransitionStart: true
            },
            speed: 300,
            thumbs: {
                swiper: swiperThumbnails
            },
            zoom: {
                maxRatio: 3
            }
        });
    </script>

    <!-- footer -->
    <?php include("$path/include/footer.php"); ?>
    <!-- footer End -->
    <!-- 모달 -->
    <?php include("$path/include/modal_common.php"); ?>
    <!-- 모달 End -->

    <!-- 상장 temp -->
    <style>
        .sangzzang-copy{position:absolute;left:-999999px;top:-999999px;}
        .sangzzang-copy{position:fixed !important;left: 0!important;;top: 0!important;}
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



