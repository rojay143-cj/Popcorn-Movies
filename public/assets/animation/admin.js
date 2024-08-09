$(document).ready(function(){
    new DataTable('#example');
    new DataTable('#country');
    $('.dt-input').attr('placeholder','Type here...');

    setTimeout(function(){
        $('.alert').slideUp(200);
    },3000);
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
            $('.modal-add_country').fadeOut(150);
        }
    });
});

// SIDE-BAR OPTIONS
$(document).ready(function() {
    var TEAM = localStorage.getItem('TEAM') === 'true';
    var COUNTRY = localStorage.getItem('COUNTRY') === 'true';

    if (COUNTRY) {
        $('.COUNTRY').slideDown(0);
    } else {
        $('.COUNTRY').slideUp(0);
    }

    if (TEAM) {
        $('.TEAM').slideDown(0);
    } else {
        $('.TEAM').slideUp(0);
    }


    $('#COUNTRY').on('click', function() {
        $('.COUNTRY').each(function() {
            if ($(this).is(':visible')) {
                $(this).slideUp(300);
                localStorage.setItem('COUNTRY', 'false');
            } else {
                $(this).slideDown(200);
                localStorage.setItem('COUNTRY', 'true');
            }
        });
    });
    $('#PRODUCTION').on('click', function() {
        $('.TEAM').each(function() {
            if ($(this).is(':visible')) {
                $(this).slideUp(300);
                localStorage.setItem('TEAM', 'false');
            } else {
                $(this).slideDown(200);
                localStorage.setItem('TEAM', 'true');
            }
        });
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

// Add Production Modal
$(function(){
    const addrole = $('.btn-add_country');
    const exitAdd = $('.close-modal');
    const exitEdit = $('.close-editmodal');
    const exitdelete = $('.close-deletemodal');
    addrole.click(function(e){
        $('.modal-add_country').fadeIn(300);
        e.stopPropagation();
    });
    exitAdd.click(function(e){
        $('.modal-add_country').fadeOut(0);
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
    let btn_edit = $('button[class^="btn-edit_country_"]');
    let btn_delete = $('button[class^="btn-delete_country_"]');
    btn_edit.click(function(){
        let country_id = $(this).attr('class').split('_').pop();
        $('.modal-edit_country_'+country_id).fadeIn(200);
    });
    btn_delete.click(function(){
        let country_id = $(this).attr('class').split('_').pop();
        $('.modal-delete_country_'+country_id).fadeIn(200);
    })
});