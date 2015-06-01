<?php
		echo "<script type='text/javascript'>";
	    echo "$(document).ready(function(){";

	    echo "var skintone = '".$skintone."';";
	    echo "$('#'+skintone).addClass('selected');";
	    echo "$('.skintone').click(function(){
	    	$('#skin_change').show();
	    });";

	    echo "});";
	    echo "</script>";
		if($skintone == 'white'){
				echo "<div class='all_choices'>
                    <div class='choice skintone' alt='skintone' id='white_light'><div class='fill skintonewhitelight'></div></div>
                    <div class='choice skintone' alt='skintone' id='white'><div class='fill skintonewhite'></div></div>
                    <div class='choice skintone' alt='skintone' id='white_dark'><div class='fill skintonewhitedark'></div></div>
                	</div>";
        }
		if($skintone == 'arabic'){
							echo "<div class='all_choices'>
			                    <div class='choice skintone' alt='skintone' id='arabic_white'><div class='fill skintonearabicwhite'></div></div>
			                    <div class='choice skintone' alt='skintone' id='arabic'><div class='fill skintonearabic'></div></div>
			                    <div class='choice skintone' alt='skintone' id='arabic_yellow'><div class='fill skintonearabicyellow'></div></div>
			                	</div>";
			        }
		if($skintone == 'olive'){
							echo "<div class='all_choices'>
			                    <div class='choice skintone' alt='skintone' id='olive_light'><div class='fill skintoneolivelight'></div></div>
			                    <div class='choice skintone' alt='skintone' id='olive'><div class='fill skintoneolive'></div></div>
			                    <div class='choice skintone' alt='skintone' id='olive_dark'><div class='fill skintoneolivedark'></div></div>
			                	</div>";
			        }
		if($skintone == 'asian'){
							echo "<div class='all_choices'>
			                    <div class='choice skintone' alt='skintone' id='asian_white'><div class='fill skintoneasianwhite'></div></div>
			                    <div class='choice skintone' alt='skintone' id='asian'><div class='fill skintoneasian'></div></div>
			                	</div>";
			        }
        if($skintone == 'brown'){
				echo "<div class='all_choices'>
                    <div class='choice skintone' alt='skintone' id='brown_light'><div class='fill skintonebrownwhite'></div></div>
                    <div class='choice skintone' alt='skintone' id='brown'><div class='fill skintonebrownlight'></div></div>
                    <div class='choice skintone' alt='skintone' id='brown_black'><div class='fill skintonebrowndark'></div></div>
                	</div>";
        }
			        if($skintone == 'black'){
							echo "<div class='all_choices'>
			                    <div class='choice skintone' alt='skintone' id='black_light'><div class='fill skintoneblacklight'></div></div>
			                    <div class='choice skintone' alt='skintone' id='black'><div class='fill skintoneblack'></div></div>
			                    <div class='choice skintone' alt='skintone' id='black_dark'><div class='fill skintoneblackdark'></div></div>
			                	</div>";
			        }
?>