$(document).ready(function() {
    $(".events .btn-link").click(function() {
        let card = $(this).parents(".card");
        $(card).find(".card-back").stop().fadeIn();
        $(card).find(".card-front").stop().fadeOut();
        $(card).addClass("flip");
    });
    $(".card").mouseleave(function() {
        $(this).find(".card-front").stop().fadeIn();
        $(this).find(".card-back").stop().fadeOut();
        $(this).removeClass("flip");
    });
});