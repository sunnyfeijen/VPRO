<?php
//echo "<script type='text/javascript' src='shopping_cart.js'></script>";
echo "<script type='text/javascript'>";

    echo "$(document).ready(function(){";
    echo "$('#shoppingbag').hide();";
    echo "$('#genderchange').hide();";
    echo "$('#skinchange').hide();";
    echo "$('#eyechange').hide();";
    echo "$('#hairchange').hide();";
    echo "$('#characterchange').hide();";

    echo "$('#gender_change').hide();";
    echo "$('#skin_change').hide();";
    echo "$('#eye_change').hide();";
    echo "$('#hair_change').hide();";
    echo "$('#character_change').hide();";


    echo "	var totale_kosten = 0;
    		var aantal_aanpassingen = 0;
            $('#aantalaanpassingen').html(aantal_aanpassingen);



            
            var gender_price = parseInt($('#gender_change').attr('alt'));
            var skintone_price = parseInt($('#skin_change').attr('alt'));
            var eye_price = parseInt($('#eye_change').attr('alt'));
            var hair_price = parseInt($('#hair_change').attr('alt'));
            var character_price = parseInt($('#character_change').attr('alt'));

            $('#gender_price').html(gender_price);
            $('#skintone_price').html(skintone_price);
            $('#eye_price').html(eye_price);
            $('#hair_price').html(hair_price);
            $('#character_price').html(character_price);

            
            $('.change').click(function(){
                $('#aantalaanpassingen').html(aantal_aanpassingen);
                var keuze = parseInt($(this).attr('alt'));
                var aanpassing = $(this).attr('id');

                if(aanpassing == 'gender_change'){
                    gender_change = 'geslacht';
                };
                if(aanpassing == 'skin_change'){
                    skin_change = 'huidskleur';
                };
                if(aanpassing == 'eye_change'){
                    eye_change = 'oogkleur';
                };
                if(aanpassing == 'hair_change'){
                    hair_change = 'haar';
                };
                if(aanpassing == 'character_change'){
                    character_change = 'karakter';
                };

                totale_kosten = totale_kosten + keuze;
                aantal_aanpassingen = aantal_aanpassingen + 1;
                
                $('.shopping_cart').trigger('click');

                
               
                return totale_kosten;
            	
            });";

	echo 	"$('.categories').click(function(){";
    echo    "$('#aantalaanpassingen').html(aantal_aanpassingen);";
	echo 	"$('.shopping_cart').removeClass('shopping_cart_selected');";
	echo "$('#shoppingbag').slideUp();";
    echo 	"});";

    	// echo "$('.categories').click(function(){"; 
    	// echo "if($('.categories').hasClass('selected_categorie')){";
    	// 	echo "console.log('selected_categorie');";
    	// 	echo "$('.shopping_cart').trigger('click');";
    	// 	echo "};";
    	// echo "});";

        echo "$('.shopping_cart').click(function(){"; 
        echo    "$('#aantalaanpassingen').html(aantal_aanpassingen);";
            echo "$('#aantalaanpassingen').html(aantal_aanpassingen);";
	        echo "if ($('.shopping_cart').hasClass('shopping_cart_selected')){";

	        echo "$(this).removeClass('shopping_cart_selected');";
            
	        echo "$('#shoppingbag').slideUp(300);";


	        //echo "removeShopClass();";
	        echo "return;";
	        echo "};";

		        // echo "else{";
		            echo "$('.shopping_cart').addClass('shopping_cart_selected');";
		            //echo "var kosten = '&#8364'+totale_kosten;";
		            echo "$('#aantal_aanpassingen').html(aantal_aanpassingen);";
                    
                        echo "if(gender_change == 'geslacht'){";
                        echo "$('#gender_change').hide();";
                        echo "$('#gender_change2').html(gender_change);";
                        echo "$('#genderchange').show();";
                        echo "};";

                        echo "if(skin_change == 'huidskleur'){";
                        echo "$('#skin_change').hide();";
                        echo "$('#skin_change2').html(skin_change);";
                        echo "$('#skinchange').show();";
                        echo "};";

                        echo "if(eye_change == 'oogkleur'){";
                        echo "$('#eye_change').hide();";
                        echo "$('#eye_change2').html(eye_change);";
                        echo "$('#eyechange').show();";
                        echo "};";

                        echo "if(hair_change == 'haar'){";
                        echo "$('#hair_change').hide();";
                        echo "$('#hair_change2').html(hair_change);";
                        echo "$('#hairchange').show();";
                        echo "};";

                        echo "if(character_change == 'karakter'){";
                        echo "$('#character_change').hide();";
                        echo "$('#character_change2').html(character_change);";
                        echo "$('#characterchange').show();";
                        echo "};";

		            echo "$('#totale_kosten').html(totale_kosten);";
		            
		            echo "console.log(totale_kosten);";
	        		echo "$('#shoppingbag').slideDown(300);";

		        //echo "};";

        echo "});";

                echo "$('.remove_change').click(function(){"; 
                echo    "$('#aantalaanpassingen').html(aantal_aanpassingen);";
                    echo "var li_div = '#'+$(this).attr('src');";
                    echo "$(li_div).hide();";
                    echo "var change = '#'+$(this).attr('alt');";
                    echo "var change_remove = $(this).attr('alt');";
                    echo "console.log(change_remove);";
                    

                    echo "
                    if(change_remove == 'gender_change'){

                    gender_change = 'false';
                    $('.gender').removeClass('selected');
                    $('.girl').css('background-image','url(img/baby/none)');
                    $('#boy').addClass('selected');
                    };
                    if(change_remove == 'skin_change'){

                        skin_change = 'false';
                        $('.baby').css('background-image','url(img/baby/".$baby_base.".jpg)');
                        $('.skintone').removeClass('selected');
                        var skintone = '".$skintone."';
                        $('#'+skintone).addClass('selected');
                    };
                    if(change_remove == 'eye_change'){
                        
                        eye_change = 'false';
                        $('.baby_eye').css('background-image','url(img/baby/".$eye.")');
                        $('.eye_color').removeClass('selected');
                        var eye_color = '".$eye_color."';
                        $('#'+eye_color).addClass('selected');
                    };
                    if(change_remove == 'hair_change'){
                        
                        hair_change = 'false';
                        $('.baby_hair').css('background-image','url(img/baby/".$hair.")');
                        $('.hair_color').removeClass('selected');
                        var hair_color = '".$hair_color."';
                        $('#'+hair_color).addClass('selected');
                        $('.hair_type').removeClass('selected');
                        var hair_type = '".$hair_type."';
                        $('#'+hair_type).addClass('selected');
                    };
                    if(change_remove == 'character_change'){
                        
                        character_change = 'false';
                        $('.character').removeClass('selected');
                    };";

                    echo "var prijs_remove = $(change).attr('alt');";
                    echo "totale_kosten = totale_kosten - prijs_remove;";
                    echo "aantal_aanpassingen = aantal_aanpassingen - 1;";

                    echo "$('#aantal_aanpassingen').html(aantal_aanpassingen);";
                    echo "$('#totale_kosten').html(totale_kosten);";

                   
                    echo "return totale_kosten;";
                    echo "return aantal_aanpassingen;";

                echo "});";

    echo "});";

echo "</script>";


	echo "<div class='shopping_cart' id='shoppingcart'>
	</div>
		<div class='aantal_circel'><p id='aantalaanpassingen'></p></div>
          <div id='shoppingbag'>
          <h2>winkelmand</h2>
          	<div class='shoppingbag_list'>
	          	
	          	<p>aantal aanpassingen</p><p id='aantal_aanpassingen'></p>
                <ul>
                    <div id='genderchange'><li id='gender_change2'></li><a class='remove_change' alt='gender_change' src='genderchange'></a><p id='gender_price' class='p_price'></p></div>
                    <div id='skinchange'><li id='skin_change2'></li><a class='remove_change' alt='skin_change' src='skinchange'></a><p id='skintone_price' class='p_price'></p></div>
                    <div id='eyechange'><li id='eye_change2'></li><a class='remove_change' alt='eye_change' src='eyechange'></a><p id='eye_price' class='p_price'></p></div>
                    <div id='hairchange'><li id='hair_change2'></li><a class='remove_change' alt='hair_change' src='hairchange'></a><p id='hair_price' class='p_price'></p></div>
                    <div id='characterchange'><li id='character_change2'></li><a class='remove_change' alt='character_change' src='characterchange'></a><p id='character_price' class='p_price'></p></div>
                </ul>
	        </div>

	        <div class='shoppingbag_list'>
	          	
	          	<p>totale kosten  &#8364</p><p id='totale_kosten'></p>
	        </div>
          	<div id='checkout_button'>
          		<p>check out</p>
          	</div>
          </div>";
?>