$(document).ready(function(){
    $('#ecuador').hover(function(){
        $('#mensaje-ecuador').show(500);
    } , function(){
        $('#mensaje-ecuador').hide(500);
    } );
    $('#colombia').hover(function(){
        //$('#mensaje-colombia').addClass('d-block');
        $('#mensaje-colombia').show(500);
    } , function(){
        //$('#mensaje-colombia').removeClass('d-block');
        $('#mensaje-colombia').hide(500);
    } );
    $('#guatemala').hover(function(){
        $('#mensaje-guatemala').show(500);
    } , function(){
        $('#mensaje-guatemala').hide(500);
    } );
    $('#mexico').hover(function(){
        $('#mensaje-mexico').show(500);
    } , function(){
        $('#mensaje-mexico').hide(500);
    } );
    $('#elSalvador').hover(function(){
        $('#mensaje-salvador').show(500);
    } , function(){
        $('#mensaje-salvador').hide(500);
    } );

    //Video youtube
    // Gets the video src from the data-src on each button

    var $videoSrc;  
    $('.video-btn').click(function() {
        $videoSrc = $(this).data( "src" );
    });
    console.log($videoSrc);

    
    
    // when the modal is opened autoplay it  
    $('#myModal').on('shown.bs.modal', function (e) {
        
    // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
    $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
    })
    


    // stop playing the youtube video when I close the modal
    $('#myModal').on('hide.bs.modal', function (e) {
        // a poor man's stop video
        $("#video").attr('src',$videoSrc); 
    })
});