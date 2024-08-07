$(document).ready(function(){
    new DataTable('#example');
});
$(function () {
    $('.setting').on('click',function(e){
        e.stopPropagation();
        $('.settings').toggle();
    });
    $(document).on('click',function(e){
        if(!$(e.target).closest('.settings').length){
            $('.settings').fadeOut();
        }
    });
});