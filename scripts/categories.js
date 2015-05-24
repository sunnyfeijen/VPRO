//Javascript Document
$(document).ready(function(){
    
    var genderhidden = true;
    var skinhidden = true;
    var eyeshidden = true;
    var hairhidden = true;
    
    //gendercontrols
    $(document).on('click', '#gender', function(event) {
        if (genderhidden) {
            skinhidden = true;
            eyeshidden = true;
            hairhidden = true;
            $(".expandcontrols").animate({
                right: "0%"
            }, 500, function(){
                $(".gendercontrols").animate({
                    right: "288px"
                }, 500);
            });
        } else {
            $(".gendercontrols").animate({
                right: "0%"
            }, 500, function(){
            });
        }
        genderhidden = !genderhidden;
    });
    
    //skincontrols
    $(document).on('click', '#skin', function(event) {
        if (skinhidden) {
            genderhidden = true;
            eyeshidden = true;
            hairhidden = true;
            $(".expandcontrols").animate({
                right: "0%"
            }, 500, function(){
                $(".skincontrols").animate({
                    right: "288px"
                }, 500);
            });
        } else {
            $(".skincontrols").animate({
                right: "0%"
            }, 500, function(){
            });
        }
        skinhidden = !skinhidden;
    });
    
    //eyescontrols
    $(document).on('click', '#eyes', function(event) {
        if (eyeshidden) {
            skinhidden = true;
            genderhidden = true;
            hairhidden = true;
            $(".expandcontrols").animate({
                right: "0%"
            }, 500, function(){
                $(".eyescontrols").animate({
                    right: "288px"
                }, 500);
            });
        } else {
            $(".eyescontrols").animate({
                right: "0%"
            }, 500, function(){
            });
        }
        eyeshidden = !eyeshidden;
    });
    
    //haircontrols
    $(document).on('click', '#hair', function(event) {
        if (hairhidden) {
            skinhidden = true;
            eyeshidden = true;
            genderhidden = true;
            $(".expandcontrols").animate({
                right: "0%"
            }, 500, function(){
                $(".haircontrols").animate({
                    right: "288px"
                }, 500);
            });
        } else {
            $(".haircontrols").animate({
                right: "0%"
            }, 500, function(){
            });
        }
        hairhidden = !hairhidden;
    });
    
});