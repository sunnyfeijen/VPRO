<?php
//echo "<script type='text/javascript' src='shopping_cart.js'></script>";
echo "<script type='text/javascript'>";

    echo "$(document).ready(function(){";
    echo "$('#shoppingbag').hide();";

    echo "	var totale_kosten = 0;
    		var aantal_aanpassingen = 0;
            $('#aantalaanpassingen').html(aantal_aanpassingen);

            
            var gender_price = 1500;
            var skintone_price = 1000;
            var eye_price = 850;
            var hair_price = 1250;
            var character_price = 3450;
            
            $('.change').click(function(){
                var keuze = parseInt($(this).attr('alt'));

                totale_kosten = totale_kosten + keuze;
                aantal_aanpassingen = aantal_aanpassingen + 1;
                
                $('.shopping_cart').trigger('click');

                return totale_kosten;
            	
            });";

	echo 	"$('.categories').click(function(){";
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
		            echo "$('#totale_kosten').html(totale_kosten);";
		            
		            echo "console.log(totale_kosten);";
	        		echo "$('#shoppingbag').slideDown(300);";

		        //echo "};";

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
	        </div>

	        <div class='shoppingbag_list'>
	          	
	          	<p>totale kosten  &#8364</p><p id='totale_kosten'></p>
	        </div>
          	<div id='checkout_button'>
          		<p>check out</p>
          	</div>
          </div>";
?>