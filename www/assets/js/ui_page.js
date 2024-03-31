
function renderDiv2Textarea(){
    let text = document.getElementById("sangText").value;
    text = text.replace(/(?:\r\n|\r|\n)/g, '<br>');
    $('#sangTextDiv').html(text);
    $('.SZ-ORIGIN').addClass('RENDERED');
}
function renderDiv2TextareaReset(){
    $('#sangTextDiv').empty();
    $('.SZ-ORIGIN').removeClass('RENDERED');
}
<<<<<<< HEAD

=======
/* 날짜 자동 입력 */
function todayYMD(){
    var today;
    today = new Date();
    today = today.getFullYear() + "년 " + (today.getMonth() + 1) + "월 " + today.getDate() + "일";
    //$("#sang_date").text(today);
    //return today;
    $('#sangDate').text(today);
}

function applyAnswer(el){
    alert('적용되었습니다.');
    let exTitle = $(el).parents('.answer').find('.answer-title').text();
    let exText = $(el).parents('.answer').find('.answer-message').text();
    $('.SZ-ORIGIN .ELEMENT #sangTitle').text(exTitle);
    $('.SZ-ORIGIN .ELEMENT #sangText').text(exText);
    modalOff('#modalExSearch');
}
$(function(){
    /* 상장 작성 페이지일 때 */
    if($('.SZ-WRITING').length > 0){
        /* 그리기 펜 연필 인터렉션 */
        // drawIcon();
        /* 최초 포커스 갔을 때*/

        $('.CONTENTEDITABLE').on('click',function(e){
            $(this).addClass('TEXT-EDIT');
            $('.ELEMENT.TARGET').removeClass('TARGET');
            $('.edit-guide-wrapper').css('display','none');
            $(this).addClass('');
            $(this).parents('.ELEMENT').addClass('TARGET').find('.edit-guide-wrapper').css('display','block');
            e.stopPropagation();
        });

        $('.SZ-ORIGIN').on('click',function(e){
            $('.ELEMENT.TARGET').removeClass('TARGET');
            $('.edit-guide-wrapper').css('display','none');
            e.stopPropagation();
            /*
            if($(this).attr('data-once') == 'on'){
                $(this).css('outline-color','#8caee5').select();
                $(this).attr('data-once',false);
            };*/
        });

        $('.SELECT-ALL').on('click',function(e){
            let target = $(this).parents('.ELEMENT').find('.CONTENTEDITABLE');
            let targetId = $(this).parents('.ELEMENT').find('.CONTENTEDITABLE').attr('id');
            function selectElementContents(el) {
                let range = document.createRange();
                range.selectNodeContents(el);
                let sel = window.getSelection();
                sel.removeAllRanges();
                sel.addRange(range);
            }
            if(target.prop('tagName') !== 'TEXTAREA'){
                let el = document.getElementById(targetId);
                selectElementContents(el);
            }else{
                target.select();
            }
            e.stopPropagation();
        });

        let fontUpDownTiming = 1;
        $('.FONT-UP').on('click',function(e){
            if( fontUpDownTiming === 1){
                fontUpDownTiming = 0;
                let target = $(this).parents('.ELEMENT').find('.CONTENTEDITABLE');
                let str = target.css('fontSize');
                let regex = /[^0-9]/g;
                let result = str.replace(regex, "");
                let resultUp = result*1 + 5;
                target.css('fontSize',resultUp+'px');

                /* textarea는 빨리 클릭하면 계산 잘못 됨 transition 때문인듯 그래서 텀을 둠*/
                if(target.prop('tagName') !== 'TEXTAREA'){
                    fontUpDownTiming = 1;
                }else{
                    setTimeout( function () {
                        fontUpDownTiming = 1;
                    }, 400);
                }
                e.stopPropagation();
            }else{
                e.stopPropagation();
            }
        });

        $('.FONT-DOWN').on('click',function(e){
            if( fontUpDownTiming === 1){
                fontUpDownTiming = 0;
                let target = $(this).parents('.ELEMENT').find('.CONTENTEDITABLE');
                let str = target.css('fontSize');
                let regex = /[^0-9]/g;
                let result = str.replace(regex, "");
                let resultUp = result*1 - 5;
                target.css('fontSize',resultUp+'px');
                setTimeout( function () {
                    fontUpDownTiming = 1;
                }, 400);
                e.stopPropagation();
            }else{
                e.stopPropagation();
            }
        });

        /* 상장 디자인 수정 */
        $('#szDesignList .sz-design-img button').on('click',function(){
            let src = $(this).find('.sz-design').attr('src');
            $('.SANGZZANG .sz-design').attr('src',src);
            $('.edit-guide-wrapper').css('display','none');
        });

        /* 날짜 자동 입력 */
        todayYMD();

    }
    /* 상장 작성 페이지 End */

    /* 3D 카드 */
    noPullRefreshOn();
    /* 3D 카드 End */
});