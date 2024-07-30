// Genre's dropdown ->
$(function() {
    const genre = $('.movies-genre');
    
    $('.drp-genre').click(function(e) {
        e.stopPropagation();
        genre.slideToggle(300);
    });

    $(document).click(function(e) {
        if (!$(e.target).closest('.movies-genre').length) {
            genre.slideUp(0);
        }
    });

    genre.click(function(e) {
        e.stopPropagation();
    });
});

    // Side Bar Animation
    $(function(){
        var opensideBar;
        
        $('.open-side-bar').on('click', function() {
            opensideBar = $('#side-bar').removeClass('-left-96');
            $('#side-bar').addClass('duration-500 left-0');
        });
    
        $('.close-side-bar').on('click', function() {
            $('#side-bar').removeClass('duration-500 left-0');
            $('#side-bar').addClass('-left-96');
        });
        $(document).on('click', function(event) {
            if (!$(event.target).closest('#side-bar, .open-side-bar').length) {
                $('#side-bar').removeClass('duration-500 left-0');
                $('#side-bar').addClass('-left-96');
            }
        });
    });