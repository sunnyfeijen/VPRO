//Javascript Document
$(document).ready(function(){
    
    $('.expandcontrols').hide();

    $('.categories').click(function(){
        $(".expandcontrols").removeClass('selected_categorie');
        $(this).addClass('selected_categorie');
        $(".expandcontrols").animate({
                right: "0%"
            });
        var url = $(this).attr('id');
        var box_to_open = url + 'controls';
        console.log(box_to_open);
        $('.' + box_to_open).css('display','block');
        
                $('.' + box_to_open).animate({
                    right: "250px"
                }, 500);
    })
});