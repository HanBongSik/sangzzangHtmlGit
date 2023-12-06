

function showSnackbar() {
    // finds the first element with the `snackbar` css class
    const snackbar = document.querySelector(".snackbar");

    // add the `show` class to the `snackbar` element
    snackbar.classList.add("show");

    // remove the `show` class after 3 seconds
    setTimeout(() => snackbar.classList.remove("show"), 3000);
}
function noPullRefreshOn(){
    if($('.content').hasClass('content-3d-card')){
        $('body').addClass('OVERFLOW-HIDDEN');
        $('#wrap').addClass('OVERSCROLL');
    }
}
// function noPullRefreshOff(){
//     if($('.content').hasClass('content-3d-card')){
//         $('body').removeClass('OVERFLOW-HIDDEN')
//         $('#wrap').removeClass('OVERSCROLL')
//     }
// }

/** 해시 태그 봉스타그램 js에 자세히 사용된 것 있음   */
function tagifyExe(el){
    /* https://github.com/yairEO/tagify#events */
    if($('.add-ability-input').length > 0){
        var input = document.querySelector('.post-list.TARGET input[name="tagInput"]');
        // let _whitelist = [];
        // $('.filter a').each(function(index){
        // 	_whitelist.push($(this).text());
        // });

        // if(el == '#insertPostModal'){
        // 	input = document.querySelector('#insertPostModal input[name="tagInput"]');
        // }else{
        // 	input = document.querySelector('input[name="tagInput"]');
        // }
        input = document.querySelector('input[name="tagInput"]');
        //let whitelist = ["🎉연애", "🎨일상", "셀카", "데일리코디", "럽스타그램", "쿡스타그램", "음식", "카페", "집스타그램", "글스타그램", "반려동물", "신혼부부", "육아", "취미", "인테리어", "여행", "그림", "여행", "캠핑", "책", "공부", "산책", "감정", "집밥", "낚시", "음악", "뷰티", "가족", "자취생", "등산", "풍경" ];
        let whitelist = [
            "💡감사", "💡재미", "💡존경", "💡감동", "💡지식", "💡멘토", "💡잘생김","💡예쁨",
            "😀귀엽", "😀쾌활", "😀유머", "😀진지","😀잠재력",
            "👒여행", "👒영화", "👒맛집", "👒게임",
            "🎨여행", "🎨그림","🎨독서",
            "📖엑셀", "📖피그마", "📖포토샵", "📖일러스트", "📖동영상편집",
            "🎯기획자", "🎯디자이너", "🎯퍼블리셔", "🎯개발자",
            "📻아이패드", "📻닌텐도스위치", "📻플스5",
    ];
        // let whitelist = _whitelist;
        var tagify = new Tagify(input, {
            whitelist:whitelist,
            blacklist : ["requestman","전체","TOPS","ES6자료","프로그래밍자료"],
            maxTags: 3,
            dropdown: {
                maxItems: 200,
                classname: "tags-look",
                enabled: 0,
                closeOnSelect: false,
                highlightFirst:true,
            },
            callbacks: {
                "change": (e) => console.log(e.detail),
            }
        });
        /**
         if(el == '#insertPostModal'){
            tagify.removeAllTags();//자동 완성으로 기입되는 value를 삭제 시키기
        }*/
    }

}
/** 해시 태그 */


$(document).ready(function(){
    /* 해시태그 */
    tagifyExe();
    /* 해시태그 End */
});

/* 상장 비율 */
function sangRatio(){
    width = $('.SANGZZANG.SZ-ORIGIN').width();
    scaleW = width/2480; //픽셀당 scale A4 너비
    scaleH = height*scaleW;
    border = 3;
    console.log('width'+" "+width);
    console.log('scaleW'+" "+scaleW);
    console.log('scaleH'+" "+scaleH);
    $('.SANGZZANG.SZ-ORIGIN').css('height',scaleH+/*border+*/"px");
    $('.SANGZZANG.SZ-ORIGIN .SZ-WRITE').css('transform','scale('+scaleW+')');


    /* draw 비율*/
    drawH = $('.SANGZZANG.SZ-ORIGIN').first().height()*0.04;
    $('.draw').css('height',drawH+'px');
    $('.SANGZZANG.SZ-ORIGIN .SZ-RATIO').css('opacity','1');
};

$(window).on('load', function(){
    if ($('.SANGZZANG.SZ-ORIGIN').length > 0){
        height = $('.SANGZZANG.SZ-ORIGIN').height();
        //한번 실행
        sangRatio();
        //리사이즈 때 한번 실행
        $(window).resize(function(){
            sangRatio();
        });
    }
});


















/* 상장 스크린샷 */
var renderSzScale = 1;
var checkedSzDownloadSize = '';

//다운로드 버튼 누르면
$(document).ready(function(){
    $('#szDownload').on('click',function(){
        if(checkedDownloadSize() == 2480){
            console.log('AD 2480');
        }else if(checkedDownloadSize() == 1240){
            console.log('AD 1240');
        }
        captureSzDownload();//다운로드 버튼을 누를 때 실행시켜야겠는데
    })
})

function bindCheckedDownloadSize(){
    $("[name='downloadSize']").on('change',function(){
        checkedDownloadSize();
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
    $(appendTargetEl).find('canvas').remove();
    // $(appendTargetEl).html(loading);

    html2canvas(document.querySelector(".SZ-ORIGIN .CAPTURE-AREA"),{ scale:5 }).then(function(canvas) { //scale은 모바일에서 깨져보이지 않게 하기 위해
        // $(appendTargetEl).empty();
        document.querySelector(appendTargetEl).append(canvas);
        checkedDownloadSize();
        captureSzDownload('init');
    });
}

function captureSzDownload(state){ //스크린샷 기능
    let appendTargetEl = '.AREA-SANGZZANG-COPY-DOWNLOAD'; //캡쳐 붙여넣을 곳
    // Z
    // html2canvas(document.querySelector(".sangzzang-origin .CAPTUREAREA"),{ scale:1 }).then(function(canvas) {

    // 사이즈에 맞는 곳으로 복사하여 붙여넣자
    //alert('다운받을 곳 스케일 : '+ renderSzScale);
    html2canvas(document.querySelector(".SZ-ORIGIN .CAPTURE-AREA"),{ scale:renderSzScale }).then(function(canvas) { //캡쳐할 곳
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

function modalPhotoFullView(src){
    $('#modalPhotoFullView').find('.swiper-wrapper').empty();
    $('#modalPhotoFullView').find('.swiper-wrapper').html(`
                                            <li class="swiper-slide">
                                                <div class="swiper-zoom-container">
                                                    <img src="${src}">
                                                </div>
                                            </li>
                                        `);
    let fullPhotoSwiper = new Swiper('#modalPhotoFullView .swiper-container', {
        zoom: true,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        // Enable debugger
    });
}