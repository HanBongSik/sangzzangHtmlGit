function gnbSlider(){
    $('.nav-01 .nav-01-link').click( function() {
        let oTarget = $(this).parents('li');
        oTarget.toggleClass('on');

        if(oTarget.hasClass('on')){
            oTarget.find('.nav-02-ul').slideUp();
        }else{
            oTarget.find('.nav-02-ul').slideDown();
        }
    });
}

function navToggleBtn(){
    $('#navToggleBtn').on('click', function(){
        let oTarget =$('aside');
        oTarget.toggleClass('off');
        $(this).toggleClass('off');
    });
}
function guideBtnTop(){
    $('#__guideBtnTop').click(function (event) {
        event.preventDefault();
        $('.__wrapper').animate({ scrollTop: 0 }, 300);
    });
}

$( document ).ready( function() {
    gnbSlider();
    navToggleBtn();
    guideBtnTop();
} );