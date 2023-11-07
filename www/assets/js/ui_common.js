

function noPullRefresh(){
    if($('.content').hasClass('content-3d-card')){
        $('body').addClass('OVERFLOW-HIDDEN')
        $('#wrap').addClass('OVERSCROLL')
    }
}
/** 해시 태그 봉스타그램 js에 자세히 사용된 것 있음   */
function tagifyExe(el){
    if($('.tag-input').length > 0){
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
        let whitelist = ["연애", "일상", "셀카", "데일리코디", "럽스타그램", "쿡스타그램", "음식", "카페", "집스타그램", "글스타그램", "반려동물", "신혼부부", "육아", "취미", "인테리어", "여행", "그림", "여행", "캠핑", "책", "공부", "산책", "감정", "집밥", "낚시", "음악", "뷰티", "가족", "자취생", "등산", "풍경" ];
        // let whitelist = _whitelist;
        var tagify = new Tagify(input, {
            whitelist:whitelist,
            blacklist : ["requestman","전체","TOPS","ES6자료","프로그래밍자료"],
            maxTags: 100,
            dropdown: {
                maxItems: 200,
                classname: "tags-look",
                enabled: 0,
                closeOnSelect: false
            }
        });
        /**
         if(el == '#insertPostModal'){
            tagify.removeAllTags();//자동 완성으로 기입되는 value를 삭제 시키기
        }*/
    }

}
/** 해시 태그 */


function tagifyExe2(el){
    if($('.tag-input-2').length > 0){
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
        input = document.querySelector('.tag-input-2');
        let whitelist = ["유머", "멘토", "아이디어", "디자인", "퍼블리싱", "요리", "패션", "뷰티", "헬스", "요리", "그림", "게이머", "영화", "리뷰", "개발", "게이머", "리더십", "마케팅", "인테리어", "진지", "외향", "내향", "감각", "직관", "사고", "감정", "판단", "인식"];
        // let whitelist = _whitelist;
        var tagify2 = new Tagify(input, {
            whitelist:whitelist,
            blacklist : ["requestman","전체","TOPS","ES6자료","프로그래밍자료"],
            maxTags: 100,
            dropdown: {
                maxItems: 200,
                classname: "tags-look",
                enabled: 0,
                closeOnSelect: false
            }
        });
        /**
         if(el == '#insertPostModal'){
            tagify.removeAllTags();//자동 완성으로 기입되는 value를 삭제 시키기
        }*/
    }
}
$(document).ready(function(){

    /* 해시태그 */
    tagifyExe();
    tagifyExe2();
    /* 해시태그 End */
    /* 상장 비율 End */
});

/* 상장 비율 */
function sangRatio(){
    width = $('.sangzzang.sangzzang-origin').width();
    scaleW = width/2480; //픽셀당 scale A4 너비
    scaleH = height*scaleW;
    border = 3;
    console.log('width'+" "+width);
    console.log('scaleW'+" "+scaleW);
    console.log('scaleH'+" "+scaleH);
    $('.sangzzang.sangzzang-origin').css('height',scaleH+/*border+*/"px");
    $('.sangzzang.sangzzang-origin .sz-wrting').css('transform','scale('+scaleW+')');

    /* draw 비율*/
    drawH = $('.sangzzang.sangzzang-origin').first().height()*0.04;
    $('.draw').css('height',drawH+'px');
};

$(window).on('load', function(){
    if ($('.sangzzang.sangzzang-origin').length > 0){
        height = $('.sangzzang.sangzzang-origin').height();
        //한번 실행
        sangRatio();
        //리사이즈 때 한번 실행
        $(window).resize(function(){
            sangRatio();
        });
    }
});