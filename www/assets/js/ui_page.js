$(function(){
    /* 상장 작성 페이지 */
    if($('.sz-wrting').length > 0){
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
            /*
            if($(this).attr('data-once') == 'on'){
                $(this).css('outline-color','#8caee5').select();
                $(this).attr('data-once',false);
            };*/
        });

        $('.sangzzang.sangzzang-origin').on('click',function(e){
            $('.ELEMENT.TARGET').removeClass('TARGET');
            $('.edit-guide-wrapper').css('display','none');
            e.stopPropagation();
            /*
            if($(this).attr('data-once') == 'on'){
                $(this).css('outline-color','#8caee5').select();
                $(this).attr('data-once',false);
            };*/
        });

        /* 이게 문제네 */
        $('.sangzzang.sangzzang-origin33').on('focusout',function(e){
            $('.ELEMENT.TARGET').removeClass('TARGET');
            $('.edit-guide-wrapper').css('display','none');
            e.stopPropagation();
        });

        $('.CONTENTEDITABLE222').on('focusout',function(){
            $('.CONTENTEDITABLE').removeClass('TEXT-EDIT');
            $('.edit-guide-wrapper').css('display','none');
            /*
            if($(this).val().length == 0){
                var id =  $(this).attr('id');
                console.log(id);
                setTimeout(function() {
                    $('#'+id).removeAttr('style');
                },1);

            };
            $(this).css('outline-color','#fff');
            */
        });

        $('.FONT-UP').on('click',function(e){
            let target = $(this).parents('.ELEMENT').find('.CONTENTEDITABLE');
            let str = target.css('fontSize');
            let regex = /[^0-9]/g;
            let result = str.replace(regex, "");
            let resultUp = result*1 + 5;
            target.css('fontSize',resultUp+'px');
            e.stopPropagation();

        });
        $('.FONT-DOWN').on('click',function(e){
            let target = $(this).parents('.ELEMENT').find('.CONTENTEDITABLE');
            let str = target.css('fontSize');
            let regex = /[^0-9]/g;
            let result = str.replace(regex, "");
            let resultDown = result*1 - 5;
            target.css('fontSize',resultDown+'px');
            e.stopPropagation();
        });
        $('.EDITOR-CLOSE').on('click',function(e){
            $('.ELEMENT.TARGET').removeClass('TARGET');
            $('.edit-guide-wrapper').css('display','none');
            e.stopPropagation();
        });

        /* 예제 레이어
        bindSampleLayer();
        bindSampleLayerClose();

        /* 스티커 레이어
        bindStickerLayer();
        bindStickerLayerClose();

        /* 스탬프 레이어
        bindStampLayer();
        bindStampLayerClose();

        /* 스티커 및 도장 선택
        bindSelectSticker();
        bindSelectStamp();

        /* 상장 디자인 수정 */
        $('#szDesignList .sz-design-img button').on('click',function(){
            let src = $(this).find('.sz-design').attr('src');
            $('.sangzzang .sz-design').attr('src',src);

            $('.edit-guide-wrapper').css('display','none');
        });

    }
    /* 상장 작성 페이지 End */
});