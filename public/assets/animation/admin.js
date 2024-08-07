$(document).ready(function(){
    new DataTable('#example');
    $('.dt-input').attr('placeholder','Type here...');
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

$(function(){
    const addrole = $('.btn-add_role');
    const exit = $('.close-modal');
    addrole.click(function(e){
        $('.modal-add_role').fadeIn(300);
        e.stopPropagation();
    });
    exit.click(function(e){
        $('.modal-add_role').fadeOut(0);
        e.stopPropagation();
    });
});
$(function(){
    $(document).on('click',function(e){
        if(!$(e.target).closest('.modal-content').length){
            $('.modal-add_role').fadeOut(150);
        }
    });
});