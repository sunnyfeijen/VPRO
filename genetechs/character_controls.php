<?php
	echo "<script type='text/javascript'>";
    echo "$(document).ready(function(){";

        echo "$('.character').click(function(){";  
        echo "var character = $(this).attr('alt');";
            echo "if ($('#'+character).hasClass('selected')){"; 
            echo "var character = $(this).attr('alt');";
            echo "console.log('has class');";
            echo "var character_id = '#'+character;";
            echo "console.log(character_id);";
            echo "$(character_id).removeClass('selected');";
            echo "return;";
            echo "}";

            echo "$('.character').click(function(){
            $('#character_change').show();
            });";


                //echo "else{"
                echo "var character = $(this).attr('alt');";
                //echo "console.log(character);";
                echo "$('#'+character).addClass('selected');";
                //echo "}";
        echo "});";
    echo "});";
    echo "</script>";


$array_parent1 = $parent1_horoscoop;
$array_parent2 = $parent2_horoscoop;
$array_parent3 = $parent3_horoscoop;
$array_parent4 = $parent4_horoscoop;


// $array = '$'.$parent1_horoscoop;


// $array = $steenbok;
$array_parent1_length = count($array_parent1);
$array_parent2_length = count($array_parent2);
$array_parent3_length = count($array_parent3);
$array_parent4_length = count($array_parent4);

//var_dump($array);

	if($two_parents == 'true'){
		    echo "<div class='all_choices character_choices'>";
                echo "<h4>".$parent1_name."</h4>";
                for($x = 0; $x < $array_parent1_length; $x++) {
                    echo "<div class='character_choice character'  id='".$array_parent1[$x]."' alt='".$array_parent1[$x]."'>";
            	    // echo "<input type='checkbox' value='".$array_parent1[$x]."'>".$array_parent1[$x];
                    echo "<p>".$array_parent1[$x]."</p>";
            	    echo "</div>";
                } 
                echo "<h4>".$parent2_name."</h4>";
                for($x = 0; $x < $array_parent2_length; $x++) {
                    echo "<div class='character_choice character'  id='".$array_parent2[$x]."' alt='".$array_parent2[$x]."'>";
                    // echo "<input type='checkbox' value='".$array_parent1[$x]."'>".$array_parent1[$x];
                    echo "<p>".$array_parent2[$x]."</p>";
                    echo "</div>";
                }   
	
            echo "</div>";
    }
    if($three_parents == 'true'){
    		echo "<div class='all_choices character_choices'>";
                echo "<h4>".$parent1_name."</h4>";
                for($x = 0; $x < $array_parent1_length; $x++) {
                    echo "<div class='character_choice character'  id='".$array_parent1[$x]."' alt='".$array_parent1[$x]."'>";
                    // echo "<input type='checkbox' value='".$array_parent1[$x]."'>".$array_parent1[$x];
                    echo "<p>".$array_parent1[$x]."</p>";
                    echo "</div>";
                } 
                echo "<h4>".$parent2_name."</h4>";
                for($x = 0; $x < $array_parent2_length; $x++) {
                    echo "<div class='character_choice character'  id='".$array_parent2[$x]."' alt='".$array_parent2[$x]."'>";
                    // echo "<input type='checkbox' value='".$array_parent1[$x]."'>".$array_parent1[$x];
                    echo "<p>".$array_parent2[$x]."</p>";
                    echo "</div>";
                } 
                echo "<h4>".$parent3_name."</h4>";
                for($x = 0; $x < $array_parent3_length; $x++) {
                    echo "<div class='character_choice character'  id='".$array_parent3[$x]."' alt='".$array_parent3[$x]."'>";
                    // echo "<input type='checkbox' value='".$array_parent1[$x]."'>".$array_parent1[$x];
                    echo "<p>".$array_parent3[$x]."</p>";
                    echo "</div>";
                }  
            echo "</div>";
    }
    if($four_parents == 'true'){
    		echo "<div class='all_choices character_choices'>";
                echo "<h4>".$parent1_name."</h4>";
                for($x = 0; $x < $array_parent1_length; $x++) {
                    echo "<div class='character_choice character'  id='".$array_parent1[$x]."' alt='".$array_parent1[$x]."'>";
                    // echo "<input type='checkbox' value='".$array_parent1[$x]."'>".$array_parent1[$x];
                    echo "<p>".$array_parent1[$x]."</p>";
                    echo "</div>";
                } 
                echo "<h4>".$parent2_name."</h4>";
                for($x = 0; $x < $array_parent2_length; $x++) {
                    echo "<div class='character_choice character'  id='".$array_parent2[$x]."' alt='".$array_parent2[$x]."'>";
                    // echo "<input type='checkbox' value='".$array_parent1[$x]."'>".$array_parent1[$x];
                    echo "<p>".$array_parent2[$x]."</p>";
                    echo "</div>";
                } 
                echo "<h4>".$parent3_name."</h4>";
                for($x = 0; $x < $array_parent3_length; $x++) {
                    echo "<div class='character_choice character'  id='".$array_parent3[$x]."' alt='".$array_parent3[$x]."'>";
                    // echo "<input type='checkbox' value='".$array_parent1[$x]."'>".$array_parent1[$x];
                    echo "<p>".$array_parent3[$x]."</p>";
                    echo "</div>";
                } 
                echo "<h4>".$parent4_name."</h4>";
                for($x = 0; $x < $array_parent4_length; $x++) {
                    echo "<div class='character_choice character'  id='".$array_parent4[$x]."' alt='".$array_parent4[$x]."'>";
                    // echo "<input type='checkbox' value='".$array_parent1[$x]."'>".$array_parent1[$x];
                    echo "<p>".$array_parent4[$x]."</p>";
                    echo "</div>";
                }   
            echo "</div>";
    }
?>