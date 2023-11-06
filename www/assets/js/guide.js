/* css의 --transition-time보다 -50 작아야 한다! */
var timeOutNum = 280;

/* 모바일 100vh 사용을 위함 */
let vh = window.innerHeight;
document.documentElement.style.setProperty('--vh', `${vh}px`);
window.addEventListener('resize', () => {
    let vh = window.innerHeight;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
})
/* 모바일 100vh 사용을 위함 End */

/* 모달 팝업 */
    var clickedX = '';
    var clickedY = '';
    function calcDistanceDifference(){
        let centerX = window.innerWidth / 2;
        let centerY = window.innerHeight / 2;
        let distanceX = (-centerX) + clickedX;
        let distanceY = (-centerY) + clickedY;
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






/* 헤더 높이 css 변수로 사용하기 위함 */
function styleHeaderHeight(){
    let target = document.querySelector('header.header');
    let headerHeightNum = target.clientHeight; //46px;
    /* 기존 style이 있다면 삭제 */
    if(document.getElementById('styleHeaderHeight')){
        document.getElementById('styleHeaderHeight').remove();
    }
    let styleEl = document.createElement('style');
    styleEl.id = 'headerHeight';
    // styleEl.innerHTML = `.HEADER-HEIGHT{${HeaderHeight}px !important;}`;//.w-90{min-width:var(--w-90) !important;}
    styleEl.innerHTML =`:root {
        --hedaer-height: ${headerHeightNum}px;
    }`;
    document.head.appendChild(styleEl);
}
/* 헤더 높이 css 변수로 사용하기 위함 */

/* 푸터 높이 css 변수로 사용하기 위함 */
function styleFooterHeight(){
    let target = document.querySelector('footer.footer');
    let footerHeightNum = target.clientHeight; //46px;
    /* 기존 style이 있다면 삭제 */
    if(document.getElementById('styleHeaderHeight')){
        document.getElementById('styleHeaderHeight').remove();
    }
    let styleEl = document.createElement('style');
    styleEl.id = 'footerHeight';
    styleEl.innerHTML =`:root {
        --footer-height: ${footerHeightNum}px;
    }`;
    document.head.appendChild(styleEl);
}
/* 푸터 높이 css 변수로 사용하기 위함 */

/* 제목 높이 css 변수로 사용하기 위함 */
function styleHeader01Height(){
    let target = document.querySelector('.header-01');
    let header01HeightNum = target.clientHeight; //46px;
    /* 기존 style이 있다면 삭제 */
    if(document.getElementById('styleHeader01Height')){
        document.getElementById('styleHeader01Height').remove();
    }
    let styleEl = document.createElement('style');
    styleEl.id = 'header01Height';
    styleEl.innerHTML =`:root {
        --header01-height: ${header01HeightNum}px;
    }`;
    document.head.appendChild(styleEl);
}
/* 제목 높이 css 변수로 사용하기 위함 */

    function modalOn(from,el){
        let aniOn = $(el).data('ani-on');
        let aniOff = $(el).data('ani-off');
        /* 추가 작업 */
        let aniOnInner = $(el).find('.modal-content').data('ani-on');
        let aniOffInner = $(el).find('.modal-content').data('ani-off');
        /* 추가 작업 End */

        /* data-ani-* 데이터 값이 없는 경우 속성을 삭제하여 오류를 없앰 */
        if(aniOn == ""){
            $(el).removeAttr('data-ani-on');
        }
        if(aniOnInner == ""){
            $(el).find('.modal-content').removeAttr('data-ani-off');
        }
        if(aniOff == ""){
            $(el).removeAttr('data-ani-off');
        }
        if(aniOffInner == ""){
            $(el).find('.modal-content').removeAttr('data-ani-off');
        }
        /* data-ani-* 데이터 값이 없는 경우 속성을 삭제하여 오류를 없앰 End */

        $(el).removeClass(aniOff);

        if(aniOn && aniOn.length > 0){
            $(el).addClass(aniOn);
        }

        let src="<a href=\'#;\' class=\'modal-temp blind\'></a>"
        $(from).attr('modal',1);
        $('html, body').css('overflow','hidden');

        $(el).css('display','block').attr('tabindex','0').focus();

        $(el).find('.modal').append(src);
        $(el).find('.modal-temp').on('focus',function(){
            $(el).find('a,button,input').first().focus();
        });

        $(el).on('focus',function(){
            let len = $(el).find('a,button,input').length;
            $(el).find('a,button,input,textarea').eq(len-2).focus();
        });

        if($(el).hasClass('MODAL-DIMMED-CLOSE')){
            $(el).on('click',function(e){
                modalOff(el);
            });
            $(el).find('.modal-content').on('click',function(e){
                e.stopPropagation();
            });
        }

        if(aniOnInner){
            $(el).find('.modal-content').addClass(aniOnInner);
        }

        if($(el).find('> div').first().hasClass('modal-full')){
            $(el).css('overflow','hidden');
        }
        setTimeout(function(e) {
            modalOnAfter(el);
            e.preventDefault();
        },100);

    }
    function modalOnAfter(el){
        if(el == '#modalSzDownload'){
            szClone();
            onScreenShotClick();
        }
        if(el == '#modalPhotoFullView'){
            modalPhotoFullView();
        }
    }

    function modalOff(el){
        let aniOn = $(el).data('ani-on');
        let aniOff = $(el).data('ani-off');
        let aniOnInner = $(el).find('.modal-content').data('ani-on');
        let aniOffInner = $(el).find('.modal-content').data('ani-off');
        // alert('aniOff'+aniOff);
        // alert('aniOffInner'+aniOffInner);

        if(aniOff === undefined && aniOffInner === undefined){
            $(el).css('display','none').off('focus').find('.modal-temp').remove();
            $("*[modal=1]").focus().removeAttr('modal');
            $('html, body').css('overflow','visible');
        }else{
            $(el).removeClass(aniOn);
            $(el).addClass(aniOff);
            $(el).find('.modal-content').removeClass(aniOnInner);
            $(el).find('.modal-content').addClass(aniOffInner);
            setTimeout(function() {
                $(el).find('.modal-content').removeClass(aniOffInner);
                $(el).css('display','none').off('focus').find('.modal-temp').remove();
                $("*[modal=1]").focus().removeAttr('modal');
                $('html, body').css('overflow','visible');
            },timeOutNum);
        }

        setTimeout(function(e) {
            modalOffAfter(el);
            e.preventDefault();
        },timeOutNum);

        // alert(aniOff && aniOff.length > 0)
        // alert(aniOffInner && aniOffInner.length > 0)
    }
function modalOffAfter(el){
    if(el == '#modalSzDownload'){
        $('#modalSzDownload .sz-download-modal-col').empty();
    }
}
    
    function bindModals(){
        $('.MODAL-BTN').each(function(index, item){
            $(this).on('click',function(e){
                $('.targets').css('left', e.clientX+'px');
                $('.targets').css('top', e.clientY+'px');

                clickedX = e.clientX;
                clickedY = e.clientY;

                calcDistanceDifference();

                let sTarget = $(this).data('target');
                let oFunction = $(this).data('fnc');
                modalOn(this, sTarget, oFunction);

                $(sTarget).find('.MODAL-CLOSE').on('click',function(){
                    modalOff(sTarget);
                    e.preventDefault();
                });
                e.preventDefault();
            });
        });
    }

/* 모달 팝업 End */

/** 탭 */
    function bindTabs() {
        $('.tab__list a').on('click', function(e){
            let $tab = $(e.currentTarget),
                targetID = $tab.data('target'),
                isTarget = $(targetID).length,
                isChild = $tab.next().length;
            $tab.parents('.tab__list').find('> ul > li').removeClass('active');
            $tab.parent().addClass('active');

            if (isTarget) {
                $(targetID).addClass('active').siblings().removeClass('active');
            }

            if (isTarget || isChild) {
                e.preventDefault();
            }

        });
    }

    function bindMultiTabs() {
        $('.tab__list__multi a').on('click', function(e) {
            let $tab = $(e.currentTarget),
                targetID = $tab.attr('href'),
                isTarget = $(targetID).length,
                isChild = $tab.next().length;

            $tab.parents('.tab__list__multi').find('> ul > li').removeClass('active');
            $tab.parent().addClass('active');

            if (isTarget) {
                $(targetID).addClass('active').siblings().removeClass('active');
            }

            if (isTarget || isChild) {
                e.preventDefault();
            }
        });
    }

    function bindNavTabs() {
        $('.tab__list.nav-tabs > ul > li > a').on('click', function(e) {
            let $tab = $(e.currentTarget);
            $tab.parent().toggleClass('focus').siblings().removeClass('focus').find('.focus').removeClass('focus');
            if ($tab.parent().hasClass('focus')) {
                $tab.closest('.nav-tabs').addClass('open');
            } else {
                $tab.closest('.nav-tabs').removeClass('open');
            }
        });

        $('.nav-tabs').on('mouseleave', function(e) {
            $(e.currentTarget).removeClass('open');
            $(e.currentTarget).removeClass('active').find('.focus').removeClass('focus');
        });

        $('.tabs > ul > li > .nav button').on('click', function(e) {
            $(e.currentTarget).parent().addClass('active').siblings().removeClass('active');
        });
    }

    function bindbuttonTabs() {
        $('.tab__list.button-tabs a').on('click', function(e) {
            let $tab = $(e.currentTarget);

            $tab.addClass('active').siblings().removeClass('active')

            e.preventDefault();
        });
    }
    function tabs() {
        bindTabs();
        //bindProdTabs();
        bindMultiTabs();
        bindNavTabs();
        bindbuttonTabs();
    }
/** 탭 End */

    function tooltip() {
        bindTootip();
    }

    function bindTootip() {
        $('.tooltip .tooltip-trigger').on('click',function(e){
            let $currentTarget = $(e.currentTarget),
                isCenter = $currentTarget.closest('.tooltip').hasClass('center') ? true : false;
            $('.tooltip').removeClass('active');
            $currentTarget.closest('.tooltip').addClass('active');
            if (isCenter) {
                let $layer = $currentTarget.next('.tooltip-layer'),
                    half = ($layer.width() / 2) + 8;
                $layer.css({
                    'left': (half * -1) + 'px'
                });
            }
            e.stopPropagation();
        });

        $('.tooltip .closer').on('click',function(e){
            $(e.currentTarget).closest('.tooltip').children('.tooltip-trigger').focus();
            $(e.currentTarget).closest('.tooltip').removeClass('active');
            e.stopPropagation();
        });

        $(document).on('click',function(e) {
            let _tooltip = $(".tooltip");
            let _tooltipLayer = $(".tooltip-layer");
            if(!_tooltipLayer.is(e.target) && !_tooltipLayer.has(e.target).length){
                _tooltip.removeClass('active');
            }
        });
    }

    function bindDatepicker(){
        if($(".datepicker").length > 0){
            datepickerSetting();
            $(".datepicker").datepicker();
        }

    }
    function datepickerSetting(){
        if ($.datepicker)
        {
            $.datepicker.setDefaults({
                dateFormat: 'yymmdd',
                prevText: '이전 달',
                nextText: '다음 달',
                monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
                monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
                dayNames: ['일', '월', '화', '수', '목', '금', '토'],
                dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
                dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
                showMonthAfterYear: true,
                yearSuffix: '년',
                closeText: "선택완료",
                todayHighlight :true,
            });
        }
    }

    function bindResetInput(){
        $('.INPUT-RESET-BTN').each(function(index, item){
            let sTarget = $(this).data('target');
            $(sTarget).addClass('INPUT-RESET');
            $(this).on('click',function(e){
                $(sTarget).val('').focus();
                e.preventDefault();
            });
        });
    }


$(document).ready(function(){
    tabs(); //탭 실행
    tooltip(); //툴팁 실행
    bindDatepicker(); //데이트피커 실행
    // datepickerSetting(); //데이트피커 설정
    // centerCoordinate();//디바이스 중앙 위치
    bindModals(); //모달 실행
    bindResetInput(); //인풋 초기화
    styleHeaderHeight(); //헤더 높이 css 변수
    styleFooterHeight(); //푸터 높이 css 변수
    styleHeader01Height(); //제목 높이 css 변수
});

$(window).on('resize', function(){
    // centerCoordinate();
    // calcDistanceDifference();
    // clickedXY();
});


