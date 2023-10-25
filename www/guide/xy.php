<!DOCTYPE html>
<html lang="ko">
<head>
    <?php
    $version = date("YmdHis");
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>디자인 가이드</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="/assets/css/default.css?v=<?php echo $version ?>" rel="stylesheet">
    <link href="/assets/css/guide-only.css?v=<?php echo $version ?>" rel="stylesheet">
    <link href="/assets/css/guide.css?v=<?php echo $version ?>" rel="stylesheet">
    <!--        <link href="https://hanbongsik.cafe24.com/guide/assets/css/guide.css?v=1" rel="stylesheet">-->
    <link href="/assets/css/layout.css?v=1" rel="stylesheet">

    <!-- lib -->
    <script src="/assets/lib/jquery-3.6.3.min.js?v=1"></script>
    <script src="/assets/lib/jquery-ui.js?v=1"></script>
    <link href="/assets/lib/jquery-ui.css?v=1" type="text/css" rel="stylesheet"/>
    <!-- lib End -->

    <script src="/assets/js/guide-layout.js?v=<?php echo $version ?>"></script>
    <script src="/assets/js/guide.js?v=<?php echo $version ?>"></script>
<!--    <script src="/assets/js/ui.js?v=--><?php //echo $version ?><!--"></script>-->
</head>

<body class="_ENABLED">
<div class="__guide__wrapper">
    <?php include('./header.php')?>

    <?php /*include('./footer.php')*/?>
</div>
<div class="__box">
    <div class="__h1" id="COMMON-MODAL">
        팝업
    </div>
    <div class="__h2">
        (0) 팝업 타입1 - 필수 (버튼 바인딩 class="btn <span class="__highlight">MODAL-BTN</span>" <span class="__highlight">data-target="#modalSample01"</span>)
    </div>
    <div class="__preview">
        <div class="__view" title="modal">
            <div class="__list_wrapper">
                <?php include("types/modal-test.tpl"); ?>
                <?php include("types/modal-test.tpl"); ?>
                <?php include("types/modal-test.tpl"); ?>
                <?php include("types/modal-test.tpl"); ?>
                <?php include("types/modal-test.tpl"); ?>
                <?php include("types/modal-test.tpl"); ?>
                <?php include("types/modal.tpl"); ?>
            </div>
        </div>
    </div>
    <div class="__h2" id="COMMON-MODAL-DIMMED-CLOSE">
        (1) 배경 닫기 - dimmed 닫기 "types/modal-dimmed-close.tpl" (class="modal-dimmed<span class="__highlight"> MODAL-DIMMED-CLOSE</span>")
    </div>
    <div class="__preview">
        <div class="__view" title="modal">
            <div class="__list_wrapper">
                <?php include("types/modal-dimmed-close.tpl"); ?>
            </div>
        </div>
    </div>
    <!--            <div class="__h2" id="COMMON-MODAL-FULL">-->
    <!--                (0) 팝업 타입2 - full 화면 및 transform (class="<span class="__highlight"> modal-full</span>")-->
    <!--            </div>-->

    <div class="__h2" id="COMMON-MODAL-HEIGHT-FULL">
        (0) 팝업 타입2 - 넓이 높이 full 화면 및 transform (class="<span class="__highlight"> modal-full</span>")<br>
        "types/modal-full.tpl"
    </div>
    <div class="__preview">
        <div class="__view" title="modal">
            <div class="__list_wrapper">
                <?php include("types/modal-full.tpl"); ?>
            </div>
        </div>
    </div>

    <div class="__h2" id="COMMON-MODAL-FULL">
        (0) 팝업 타입2 - 최소높이 최대높이 (class="<span class="__highlight"> modal-full modal-height-max-full</span>")<br>
        "types/modal-height-max-full.tpl"
    </div>
    <div class="__preview">
        <div class="__view" title="modal">
            <div class="__list_wrapper">
                <?php include("types/modal-height-max-full.tpl"); ?>
            </div>
        </div>
    </div>

    <div class="__h2" id="COMMON-MODAL-FULL">
        (0) 팝업 타입2 - 높이만 최대 (class="<span class="__highlight"> modal-full modal-height-full</span>")<br>
        "types/modal-height-full.tpl"
    </div>
    <div class="__preview">
        <div class="__view" title="modal">
            <div class="__list_wrapper">
                <?php include("types/modal-height-full.tpl"); ?>
            </div>
        </div>
    </div>

    <div class="__h2" id="COMMON-MODAL-FULL-MARGIN">
        (0) 팝업 타입2 - 넓이 높이 full 화면 여백 및 transform (class="<span class="__highlight"> modal-full modal-full-margin</span>")<br>
        "types/modal-full-margin.tpl"
    </div>
    <div class="__preview">
        <div class="__view" title="modal">
            <div class="__list_wrapper">
                <?php include("types/modal-full-margin.tpl"); ?>
            </div>
        </div>
    </div>


    <div class="__h2" id="COMMON-MODAL-CALENDAR">
        (0) 팝업 캘린더 타입
        <!--                - 넓이 높이 full 화면 여백 및 transform (class="<span class="__highlight"> modal-full modal-full-margin</span>")-->
        <br>
        "types/modal-calendar.tpl"
        <br>한글이 나오지 않는 이유는 처음 display:none 이라서 bindDatepicker()가 실행하지 않기 때문.
    </div>
    <div class="__preview">
        <div class="__view" title="modal">
            <div class="__list_wrapper">
                <?php include("types/modal-calendar.tpl"); ?>
            </div>
        </div>
    </div>

</div>

<div class="__btn-top-wrapper">
    <a href="#" id="__guideBtnTop" title="위로">↑</a>
</div>
<script>

    var centerX = '';
    var centerY = window.innerHeight / 2;

    var clickX = '';
    var clickY = '';

    function centerXY(){
        console.log('centerX : ' + centerX + 'centerY : ' + centerY);
        $('.centercenter').css('left', centerX+'px');
        $('.centercenter').css('top', centerY+'px');
    }


    $('.MODAL-BTN').on('click',function(e){
        // alert('e.clientX : ' + e.clientX+'px;' + 'e.clientY : ' + e.clientY+'px;');
        $('.targets').css('left', e.clientX+'px');
        $('.targets').css('top', e.clientY+'px');

        clickX = e.clientX;
        clickY = e.clientY;

        console.log('clickX : ' + e.clientX+'px;' + 'clickY : ' + e.clientY+'px;');
        calcXY();

        // alert('x : ' + (clickX - centerX ) + 'Y : ' + (clickY - centerY ) );
    })

    function calcXY(){
        let centerX = window.innerWidth / 2;
        let centerY = window.innerHeight / 2;
        let distanceX = (-centerX) + clickX;
        let distanceY = (-centerY) + clickY;
        /* 기존 style이 있다면 삭제 */
        if(document.getElementById('modalAniTarget')){
            document.getElementById('modalAniTarget').remove();
        }
        /* 모달 버튼 클릭 위치로 열리는 모달팝업을 위함 */
        let styleEl = document.createElement('style');

        styleEl.id = 'modalAniTarget';
        styleEl.innerHTML = `@keyframes modal-ani-target{
                    0%{
                        transform:translate(${distanceX}px, ${distanceY}px) scale(0);
                        opacity:0;
                    }
                    100%{
                        transform:translate(0, 0)  scale(1);
                        opacity:1;
                    }
                }

                @keyframes modal-ani-target-target{
                    0%{
                        transform:translate(0, 0)  scale(1);
                        opacity:1;
                    }
                    100%{
                        transform:translate(${distanceX}px, ${distanceY}px) scale(0);
                        opacity:0;
                    }
                }
                `

        document.head.appendChild(styleEl);
        /* 모달 버튼 클릭 위치로 열리는 모달팝업을 위함 End */
    }

    $(document).ready(function(){
        centerXY();
        // clickXY();
    });

    $(window).on('resize', function(){
        centerXY();
        calcXY();
        // clickXY();
    });


</script>
<style>
    .centercenter{position:fixed;width:10px;height:10px;background:pin2k;z-index:99999999999;transform:translate(-50%, -50%);}
    .targets{position:fixed;width:10px;height:10px;background:blu2e;z-index:99999999999;transform:translate(-50%, -50%);}
</style>
<div class="centercenter">

</div>
<div class="targets">

</div>
<style>
</style>

</body>

</html>
