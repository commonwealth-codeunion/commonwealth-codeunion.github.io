$(document).ready(function () {
    $("#scrollToFeatures").click(function () {
        $('html, body').animate({
            scrollTop: $("#features").offset().top
        }, 1000);
    });
});

$(document).ready(function () {
    $("#scrollToFeature").click(function () {
        $('html, body').animate({
            scrollTop: $("#features").offset().top
        }, 1000);
    });
});

$(document).ready(function () {
    $("#scrollToHome").click(function () {
        $('html, body').animate({
            scrollTop: $("#home").offset().top
        }, 1000);
    });
});

$(document).ready(function () {
    $("#scrollToAbout").click(function () {
        $('html, body').animate({
            scrollTop: $("#about").offset().top
        }, 1000);
    });
});