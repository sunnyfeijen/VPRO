$(document).ready(function(){
            var totale_kosten = 0;
            //console.log(totale_kosten);
            console.log(totale_kosten);
            var gender_price = 1500;
            var skintone_price = 1000;
            var eye_price = 850;
            var hair_price = 1250;
            var character_price = 3450;
            
            $('.change').click(function(){
                var keuze = parseInt($(this).attr('alt'));
                //console.log(keuze);
                totale_kosten = totale_kosten + keuze;
                console.log(totale_kosten);
                return totale_kosten;
                
                // if(parent3_visible == false){
                //   $('#parent3').css('opacity','1');
                //   parent3_visible = true;
                // }
                // else if(parent3_visible == true){
                //   $('#parent4').css('opacity','1');
                // }
            })
        });