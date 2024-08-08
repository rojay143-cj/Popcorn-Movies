$(document).ready(function(){
    new DataTable('#example');
    $('.dt-input').attr('placeholder','Type here...');
});
$(function () {
    $('.setting').on('click', function(e) {
        e.stopPropagation();
        $('.settings').toggle();
    });
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.settings').length) {
            $('.settings').fadeOut();
        }
        if (!$(e.target).closest('.modal-content').length) {
            $('.modal-add_role').fadeOut(150);
        }
    });
});
// Add Production Modal
$(function(){
    const addrole = $('.btn-add_role');
    const exitAdd = $('.close-modal');
    const exitEdit = $('.close-editmodal');
    const exitdelete = $('.close-deletemodal');
    addrole.click(function(e){
        $('.modal-add_role').fadeIn(300);
        e.stopPropagation();
    });
    exitAdd.click(function(e){
        $('.modal-add_role').fadeOut(0);
        e.stopPropagation();
    });
    exitEdit.click(function(){
        $('.closeedit').fadeOut(0);
    });
    exitdelete.click(function(){
        $('.closedelete').fadeOut(0);
    });
});

// Delete Production Modal & Edit modal
$(document).ready(function() {
    let btn_edit = $('button[class^="btn-edit_role_"]');
    let btn_delete = $('button[class^="btn-delete_role_"]');
    btn_edit.click(function(){
        let prod_id = $(this).attr('class').split('_').pop();
        $('.modal-edit_role_'+prod_id).fadeIn(200);
    });
    btn_delete.click(function(){
        let prod_id = $(this).attr('class').split('_').pop();
        $('.modal-delete_role_'+prod_id).fadeIn(200);
    })
});