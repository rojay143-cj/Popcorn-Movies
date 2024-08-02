// Genre's dropdown ->
$(function () {
    const genre = $(".movies-genre");
    const sideBar = $("#side-bar");

    $(".drp-genre").click(function (e) {
        e.stopPropagation();
        genre.slideToggle(300);
        
        if (sideBar.hasClass("left-0")) {
            sideBar.removeClass("duration-500 left-0").addClass("-left-96");
        }
    });

    $(document).click(function (e) {
        if (!$(e.target).closest(".movies-genre").length) {
            genre.slideUp(0);
        }
    });

    genre.click(function (e) {
        e.stopPropagation();
    });
});

// Side Bar Animation
$(function () {
    const sideBar = $("#side-bar");
    const navBar = $("#nav-bar");
    const opensidebar = $(".open-side-bar");
    function handleNavBarVisibility() {
        if ($(window).width() > 1024) {
            $('.logo').removeClass('translate-x-3');
        }else{
            navBar.addClass('hidden');
            $('.logo').addClass('translate-x-3');
        }
    }
    $(".open-side-bar").on("click", function () {
        sideBar.removeClass("-left-96").addClass("duration-500 left-0");
        handleNavBarVisibility();
    });
    $(".close-side-bar").on("click", function () {
        sideBar.removeClass("duration-500 left-0").addClass("-left-96");
        handleNavBarVisibility();
    });
    $(document).on("click", function (event) {
        if (!$(event.target).closest("#side-bar, .open-side-bar").length) {
            sideBar.removeClass("duration-500 left-0").addClass("-left-96");
            handleNavBarVisibility();
        }
    });
    $(window).on("resize", function () {
        handleNavBarVisibility();
    });
    handleNavBarVisibility();
});

// Sliding Banner Animation
$(document).ready(function () {
    const right = $('.right_');
    const left = $('.left_');
    const slides = $('.slider > div');
    let index = 0;
    let delay = 200;

    function SlideShow() {
        slides.hide().eq(index).show();
    }
    right.click(() => {
        index = (index + 1) % slides.length;
        SlideShow(index);
    });
    left.click(() => {
        index = (index - 1) % slides.length;
        SlideShow(index);
    })
});