<?php
    echo "<script type='text/javascript'>";
    echo "$(document).ready(function(){";

    echo "var eye_color = '".$eye_color."';";
    echo "$('#'+eye_color).addClass('selected');";
    echo "$('.eye').click(function(){
            $('#eye_change').show();
        });";
    echo "});";
    echo "</script>";
	if($skintone == 'white'){
		    echo "<div class='all_choices'>
                    <div class='choice eye'  id='blue' alt='eye'><div class='eyesblue fill'></div></div>
                    <div class='choice eye'  id='gray' alt='eye'><div class='eyesgray fill'></div></div>
                    <div class='choice eye'  id='green' alt='eye'><div class='eyesgreen fill'></div></div>
                    <div class='choice eye'  id='brown_light' alt='eye'><div class='eyeslightbrown fill'></div></div>
                    <div class='choice eye'  id='brown_dark' alt='eye'><div class='eyesdarkbrown fill'></div></div>
                </div>";
    }
    if($skintone == 'asian'){
            echo "<div class='all_choices'>
                    <div class='choice eye'  id='blue' alt='eye'><div class='eyesblue fill'></div></div>
                    <div class='choice eye'  id='gray' alt='eye'><div class='eyesgray fill'></div></div>
                    <div class='choice eye'  id='green' alt='eye'><div class='eyesgreen fill'></div></div>
                    <div class='choice eye'  id='brown_light' alt='eye'><div class='eyeslightbrown fill'></div></div>
                    <div class='choice eye'  id='brown_dark' alt='eye'><div class='eyesdarkbrown fill'></div></div>
                </div>";
    }
    if($skintone == 'arabic'){
            echo "<div class='all_choices'>
                    <div class='choice eye'  id='blue' alt='eye'><div class='eyesblue fill'></div></div>
                    <div class='choice eye'  id='gray' alt='eye'><div class='eyesgray fill'></div></div>
                    <div class='choice eye'  id='green' alt='eye'><div class='eyesgreen fill'></div></div>
                    <div class='choice eye'  id='brown_light' alt='eye'><div class='eyeslightbrown fill'></div></div>
                    <div class='choice eye'  id='brown_dark' alt='eye'><div class='eyesdarkbrown fill'></div></div>
                </div>";
    }
    if($skintone == 'olive'){
            echo "<div class='all_choices'>
                    <div class='choice eye'  id='blue' alt='eye'><div class='eyesblue fill'></div></div>
                    <div class='choice eye'  id='gray' alt='eye'><div class='eyesgray fill'></div></div>
                    <div class='choice eye'  id='green' alt='eye'><div class='eyesgreen fill'></div></div>
                    <div class='choice eye'  id='brown_light' alt='eye'><div class='eyeslightbrown fill'></div></div>
                    <div class='choice eye'  id='brown_dark' alt='eye'><div class='eyesdarkbrown fill'></div></div>
                </div>";
    }
    if($skintone == 'brown'){
            echo "<div class='all_choices'>
                    <div class='choice eye'  id='blue' alt='eye'><div class='eyesblue fill'></div></div>
                    <div class='choice eye'  id='gray' alt='eye'><div class='eyesgray fill'></div></div>
                    <div class='choice eye'  id='green' alt='eye'><div class='eyesgreen fill'></div></div>
                    <div class='choice eye'  id='brown_light' alt='eye'><div class='eyeslightbrown fill'></div></div>
                    <div class='choice eye'  id='brown_dark' alt='eye'><div class='eyesdarkbrown fill'></div></div>
                </div>";
    }
    if($skintone == 'black'){
    		echo "<div class='all_choices'>
                    <div class='choice eye'  id='blue' alt='eye'><div class='eyesblue fill'></div></div>
                    <div class='choice eye'  id='gray' alt='eye'><div class='eyesgray fill'></div></div>
                    <div class='choice eye'  id='green' alt='eye'><div class='eyesgreen fill'></div></div>
                    <div class='choice eye'  id='brown_light' alt='eye'><div class='eyeslightbrown fill'></div></div>
                    <div class='choice eye'  id='brown_dark' alt='eye'><div class='eyesdarkbrown fill'></div></div>
                </div>";
    }
?>
				