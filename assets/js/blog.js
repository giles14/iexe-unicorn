$(document).ready(function(){

    // $(".categoria-img").mouseenter(function(){
    //     $(this).fadeOut(300);

    // });
    // $(".categoria-img").mouseleave(function(){
    //         $(this).fadeIn(500);
    // });
    // $(".categoria-img").hover(function(){

    //     $(this).fadeOut(100);
    //     $(this).fadeIn(500);

    // });
    $('.categoria-img').hover(makeBigger, returnToOriginalSize);

function makeBigger() {
    $(this).css({height: '+=10%', width: '+=10%', marginTop:'-20px'});
}
function returnToOriginalSize() {
    $(this).css({height: "", width: "", marginTop:""});
}

});