$(document).ready(function () {

    $("li").children("label").each(function (index) {
        $(this).css("animation", "move-label 0.5s ease-in " + ((index + 1) / 2) + "s normal forwards 1");
    });    
    
    $("li").children("svg").each(function (index) {
        $(this).css("animation", "radio 0.5s ease-in " + ((index + 2) / 2) + "s normal forwards 1");
    });
    
    $("ul.rmradio").find("label").click( function () {
        $("ul.rmradio").find(".radio_selected").attr("opacity", "0");
        $(this).siblings("input").prop("checked", true);
        $(this).siblings("svg").children(".radio_selected").attr("opacity", "1");
    });
});