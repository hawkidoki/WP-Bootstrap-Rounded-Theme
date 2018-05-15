jQuery(document).ready(function($){
    $("#dataTable").DataTable({
        //"bPaginate": false,
        "bLengthChange": false,
        //"bFilter": true,
        "bInfo": false,
        "searching": false,
        //"bAutoWidth": false
    });
    
    if($('.nav-link-collapse').length){
        $('.nav-link-collapse').each(function(){
            var href = $(this).attr('href');
            var submenu = $(this).next('ul.sub-menu');
            submenu.attr('id', href.replace('#', ''));
        });
    }
    
    if($('.current-menu-parent').length){
        $('.current-menu-parent').each(function(){
            var submenu = $(this).find('> ul.sub-menu');
            var link = $(this).find('> a');
            link.removeClass('collapsed');
            submenu.addClass('show');
        });
    }
    
});