$(".link")
.mouseenter(function(){
  $("#cur-page-carat").css({
    "top": "calc(" + $(this).offset().top + "px + .5em - 1px)"
  });
})
.mouseleave(function(e){
  $("#cur-page-carat").css({
    "top": $(".active-page").offset().top
  });
});

$(window).on("load", function(){
  $("#cur-page-carat").css({
    "top": $(".active-page").offset().top
  });
})
