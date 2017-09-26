$(".select2-multi").select2();


// slider

$('#myCarousel').carousel();
var winWidth = $(window).innerWidth();
$(window).resize(function () {

    if ($(window).innerWidth() < winWidth) {
        $('.carousel-inner>.item>img').css({
            'min-width': winWidth, 'width': winWidth
        });
    }
    else {
        winWidth = $(window).innerWidth();
        $('.carousel-inner>.item>img').css({
            'min-width': '', 'width': ''
        });
    }
});

// tinymce script

tinymce.init({
    selector:'textarea',
    plugins:'link media image',
    menubar:false


});

// var search_bar = $('#searching_for');
// search_bar.on('keypress',function (e) {
//     if(e.which == 13){
//         if(search_bar.val() != "")
//
//             window.location = "/search/"+encodeURIComponent(search_bar.val());
//     }
// });



