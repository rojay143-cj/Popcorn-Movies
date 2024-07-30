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
        if ($(window).width() > 768) {
            navBar.removeClass('hidden');
        }else{
            navBar.addClass('hidden');
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

    // Hide the nav-bar if I open the sidebar in bigger screen
});