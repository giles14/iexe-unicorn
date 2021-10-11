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
    // if($(window).width() > 960){
    //         $('.categoria-img').hover(makeBigger, returnToOriginalSize);

    //     function makeBigger() {
    //         $(this).css({height: '+=10%', width: '+=10%', marginTop:'-20px'});
    //     }
    //     function returnToOriginalSize() {
    //         $(this).css({height: "", width: "", marginTop:""});
    //     }
    // }
$('select#seleccionperiodo').change(function() {
    //var envio = 'https://' +  window.location.hostname + '/' + $(this).val();
    var limpio = $(this).val();
    limpio = limpio.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
    var envio = window.location.origin + '/category/' + limpio;
    window.location.href = envio;
});


});