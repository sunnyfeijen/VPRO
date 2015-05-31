//Javascript Document
$(document).ready(function(){
        

    $('.expandcontrols').hide();

    $('.shopping_cart').click(function(){
        
        $('.expandcontrols').animate({
            right:'0%'
        },500);
        
        $('.categories').removeClass('selected_categorie');
        $('.categories').removeClass('selected');
    })



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
                    right: "220px"
                }, 500);

                return box_to_open;
    })
});