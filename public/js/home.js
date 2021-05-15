$(document).ready(function() {
    $(".divNavOption").hover(function (){

        $(this).removeClass("divNavOptionUnfocused").addClass("divNavOptionFocused");
        $(this).find("h4").removeClass("textNavOptionUnfocused").addClass("textNavOptionFocused");
    },function(){
        $(this).removeClass("divNavOptionFocused").addClass("divNavOptionUnfocused");
        $(this).find("h4").removeClass("textNavOptionFocused").addClass("textNavOptionUnfocused");
    });
    
});
