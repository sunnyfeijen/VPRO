<?php
    echo "<script type='text/javascript'>";
    echo "$(document).ready(function(){";
    echo "var hair_type = '".$hair_type."';";
    echo "console.log(hair_type);";
    echo "$('#'+hair_type).addClass('selected');";
    echo "$('.hair_type').click(function(){
            $('#hair_change').show();
        });";
    echo "});";
    echo "</script>";
	if($skintone == 'white'){
          echo "<div class='all_choices hairtypechoice'>";
                    echo "<div class='hair_type_choice choice hairtype hair_type'  id='straight' alt='hair_type'>";
                    // echo "<input type='checkbox' value='".$array_parent1[$x]."'>".$array_parent1[$x];
                    echo "<p>straight</p>";
                    echo "</div>";
                    
                    echo "<div class='hair_type_choice choice hairtype hair_type'  id='curly' alt='hair_type'>";
                   
                    echo "<p>curly</p>";
                    echo "</div>"; 
            echo "</div>";
    }
    if($skintone == 'arabic'){
            echo "<div class='all_choices hairtypechoice'>
                    <div class='hair_type_choice choice hairtype hair_type' id='straight' alt='hair_type'>
                        <p>straight</p>
                    </div>
                    
                    <div class='hair_type_choice choice hairtype hair_type' id='curly'  alt='hair_type'>
                        <p>curly</p>
                    </div>
                    <div class='hair_type_choice choice hairtype hair_type' id='afro'  alt='hair_type'>
                        <p>afro</p>
                    </div>
                </div>";
    }
    if($skintone == 'asian'){
            echo "<div class='all_choices hairtypechoice'>
                    <div class='hair_type_choice choice hairtype hair_type' id='straight' alt='hair_type'>
                        <p>straight</p>
                    </div>
                    
                    <div class='hair_type_choice choice hairtype hair_type' id='curly'  alt='hair_type'>
                        <p>curly</p>
                    </div>
                </div>";
    }
    if($skintone == 'olive'){
            echo "<div class='all_choices hairtypechoice'>
                    <div class='hair_type_choice choice hairtype hair_type' id='straight' alt='hair_type'>
                        <p>straight</p>
                    </div>
                    
                    <div class='hair_type_choice choice hairtype hair_type' id='curly'  alt='hair_type'>
                        <p>curly</p>
                    </div>
                    <div class='hair_type_choice choice hairtype hair_type' id='afro'  alt='hair_type'>
                        <p>afro</p>
                    </div>
                </div>";
    }
    if($skintone == 'brown'){
        echo "<div class='all_choices hairtypechoice'>";
                    echo "<div class='hair_type_choice choice hairtype hair_type'  id='straight' alt='hair_type'>";
                    echo "<p>straight</p>";
                    echo "</div>";
                    
                    echo "<div class='hair_type_choice choice hairtype hair_type'  id='curly' alt='hair_type'>";
                    echo "<p>curly</p>";
                    echo "</div>"; 

                    echo "<div class='hair_type_choice choice hairtype hair_type'  id='afro' alt='hair_type'>";
                    echo "<p>afro</p>";
                    echo "</div>"; 
        echo "</div>";
            // echo "<div class='all_choices'>
            //         <div class='choice hairtype hair_type' id='straight' alt='hair_type'><div class='straight fill'>
            //             <p class='choice_description'>straight</p>
            //         </div></div>
                    
            //         <div class='choice hairtype hair_type' id='curly'  alt='hair_type'><div class='curly fill'>
            //             <p class='choice_description'>curly</p>
            //         </div></div>
            //         <div class='choice hairtype hair_type' id='afro'  alt='hair_type'><div class='afro fill'>
            //             <p class='choice_description'>afro</p>
            //         </div></div>
            //     </div>";
    }
    if($skintone == 'black'){
            echo "<div class='all_choices hairtypechoice'>
                    <div class='hair_type_choice choice hairtype hair_type' id='straight' alt='hair_type'>
                        <p>straight</p>
                    </div>
                    
                    <div class='hair_type_choice choice hairtype hair_type' id='curly'  alt='hair_type'>
                        <p class='choice_description'>curly</p>
                    </div>
                    <div class='hair_type_choice choice hairtype hair_type' id='afro'  alt='hair_type'>
                        <p class='choice_description'>afro</p>
                    </div>
                </div>";
    }
?>
				