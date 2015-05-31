//Javascript Document
$(document).ready(function(){

    $('.choice').click(function(){
        var control = '.'+$(this).attr('alt');
        
        $(control).removeClass('selected');
        $(this).addClass('selected');
    })
});