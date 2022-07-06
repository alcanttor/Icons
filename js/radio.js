$(document).ready(function () {

    $("li").children("label").each(function (index) {
        $(this).css("animation", "move-label 0.5s ease-in " + ((index + 1) / 2) + "s normal forwards 1");
    });    
    
    $("li").children("svg").each(function (index) {
        $(this).css("animation", "radio 0.5s ease-in " + ((index + 2) / 2) + "s normal forwards 1");
    });
    
});