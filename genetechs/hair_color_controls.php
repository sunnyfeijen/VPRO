<?php
	echo "<script type='text/javascript'>";
    echo "$(document).ready(function(){";
    echo "var hair_color = '".$hair_color."';";
    echo "console.log(hair_color);";
    echo "$('#'+hair_color).addClass('selected');";
    echo "});";
    echo "</script>";
	if($skintone == 'white'){
		  echo "<div class='all_choices'>
                    <div class='choice hair_color' id='blond_light' alt='hair_color'><div class='hair_blond_light fill'></div></div>
                    <div class='choice hair_color' id='blond_dark' alt='hair_color'><div class='hair_blond_dark fill'></div></div>
                    <div class='choice hair_color' id='ginger' alt='hair_color'><div class='hair_ginger fill'></div></div>
                    <div class='choice hair_color' id='brown' alt='hair_color'><div class='hair_brown fill'></div></div>
                    <div class='choice hair_color' id='black' alt='hair_color'><div class='hair_black fill'></div></div>
                </div>";
    }
    if($skintone == 'arabic'){
          echo "<div class='all_choices'>
                    <div class='choice hair_color' id='brown' alt='hair_color'><div class='hair_brown fill'></div></div>
                    <div class='choice hair_color' id='black' alt='hair_color'><div class='hair_black fill'></div></div>
                </div>";
    }
    if($skintone == 'asian'){
          echo "<div class='all_choices'>
                    <div class='choice hair_color' id='brown' alt='hair_color'><div class='hair_brown fill'></div></div>
                    <div class='choice hair_color' id='black' alt='hair_color'><div class='hair_black fill'></div></div>
                </div>";
    }
    if($skintone == 'olive'){
          echo "<div class='all_choices'>
                    <div class='choice hair_color' id='blond_light' alt='hair_color'><div class='hair_blond_light fill'></div></div>
                    <div class='choice hair_color' id='blond_dark' alt='hair_color'><div class='hair_blond_dark fill'></div></div>
                    <div class='choice hair_color' id='ginger' alt='hair_color'><div class='hair_ginger fill'></div></div>
                    <div class='choice hair_color' id='brown' alt='hair_color'><div class='hair_brown fill'></div></div>
                    <div class='choice hair_color' id='black' alt='hair_color'><div class='hair_black fill'></div></div>
                </div>";
    }
    if($skintone == 'brown'){
          echo "<div class='all_choices'>
                    <div class='choice hair_color' id='blond_light' alt='hair_color'><div class='hair_blond_light fill'></div></div>
                    <div class='choice hair_color' id='blond_dark' alt='hair_color'><div class='hair_blond_dark fill'></div></div>
                    <div class='choice hair_color' id='brown' alt='hair_color'><div class='hair_brown fill'></div></div>
                    <div class='choice hair_color' id='black' alt='hair_color'><div class='hair_black fill'></div></div>
                </div>";
    }
    if($skintone == 'black'){
    		echo "<div class='all_choices'>
                    <div class='choice hair_color' id='brown' alt='hair_color'><div class='hair_brown fill'></div></div>
                    <div class='choice hair_color' id='black' alt='hair_color'><div class='hair_black fill'></div></div>
                </div>";
    }
?>
				