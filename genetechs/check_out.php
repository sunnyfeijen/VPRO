<?php
	echo "<script type='text/javascript'>";
    echo "$(document).ready(function(){";
     	echo "$('#checkout_screen').hide();";

						echo "$('#checkout_button').on('click', function(){
									console.log('kliktjekaud');
			        				$('#checkout_screen').show();
			        		});";

						// echo "$('#checkout_aantal_aanpassingen').html(checkout_aantal_aanpassingen);";
                    	echo "$('#checkout_totale_kosten').html(checkout_totale_kosten);";

       	echo "});";
    echo "</script>";
?>   
<section id='checkout_screen'>
	<p id='checkout_aantal_aanpassingen'></p>
	<p id='checkout_totale_kosten'></p>
		
</section>