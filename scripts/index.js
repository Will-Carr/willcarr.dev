$(".link")
    .mouseenter(function() {
        $("#cur-page-carat").css({
            "top": "calc(" + ($(this).offset().top - $(window).scrollTop()) + "px + .5em - 1px)"
        });
    })
    .mouseleave(function(e) {
        $("#cur-page-carat").css({
            "top": ($(".active-page").offset().top - $(window).scrollTop())
        });
    });

$(window).on('resize', function() {
    $("#cur-page-carat").css({
        "top": ($(".active-page").offset().top - $(window).scrollTop())
    });
});

$(window).on("load", function() {
    $("#cur-page-carat").css({
        "top": ($(".active-page").offset().top - $(window).scrollTop()),
        "display": "block"
    });
})
