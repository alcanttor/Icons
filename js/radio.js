$(document).ready(function () {

    $("li").children("label").each(function (index) {
        $(this).css("animation", "label-appear 0.5s ease-in " + ((index + 0.5) / 2) + "s normal forwards 1");
    });    
    
    $("li").children("svg").each(function (index) {
        $(this).css("animation", "draw-radio 0.5s ease-in " + ((index + 1) / 2) + "s normal forwards 1");
    });
    
    $("ul.rmradio").find("li").hover( function () {
        $("ul.rmradio").find(".rm-frontend-form-radio-hover").attr("opacity", "0");
        $(this).find("svg").children(".rm-frontend-form-radio-hover").attr("opacity", "0.2");
    });
    
    $("ul.rmradio").find("li").click( function () {
        $("ul.rmradio").find(".rm-frontend-form-radio-checked").attr("opacity", "0");
        $(this).find("input").prop("checked", true);
        $(this).find("svg").children(".rm-frontend-form-radio-checked").attr("opacity", "1");
    });
});