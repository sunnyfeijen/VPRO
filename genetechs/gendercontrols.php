<?php

$foto_girl = $_POST['skintone']. "_girl.png";
echo "<script type='text/javascript'>";
    echo "$(document).ready(function(){";
        echo "$('#gender_change').hide();";



        echo "$('#girl').click(function(){";
            echo "$('#gender_change').hide();";
            echo "if($(this).attr('id') != '".$gender."'){";
                echo "$('#gender_change').show();";
            echo "};";
            echo "if($('#girl').hasClass('is_girl')){";
            echo "return;";
            echo "};";

            // echo "if ($('#girl').hasClass('choice'){"
            //     echo "console.log('hasclass');";
            
                echo "$('.girl').css('background-image','url(img/baby/".$foto_girl.")');";
                echo "$('#girl').addClass('is_girl');";
               
        echo "});";
        echo "$('#boy').click(function(){";
            echo "$('#gender_change').hide();";
            echo "if($(this).attr('id') != '".$gender."'){";
                echo "$('#gender_change').show();";
            echo "};";
            echo "if($('#girl').hasClass('is_girl')){";
            echo "$('.girl').css('background-image','url(img/baby/none)');";
            echo "$('#girl').removeClass('is_girl');";
            echo "};";

            // echo "if ($('#girl').hasClass('choice'){"
            //     echo "console.log('hasclass');";
            
                // echo "$('.girl').css('background-image','url(img/baby/".$foto_girl.")');";
                // echo "$('#girl').addClass('is_girl');";
               
        echo "});";
    echo "});";
    echo "</script>";

	if($gender == 'boy'){
		echo "<div class='all_choices'>";
                echo  "<div src='gender' id='girl' class='choice gendermale gender' alt='gender'><i class='fa fa-venus fa-3x'></i></div>";
                echo  "<div src='gender' id='boy' class='choice genderfemale gender selected' alt='gender'><i class='fa fa-mars fa-3x'></i></div>";
        echo "</div>";
    }
    if($gender == 'girl'){
    	echo "<div class='all_choices'>";
                echo  "<div id='girl' class='choice gendermale gender selected' alt='gender'><i class='fa fa-venus fa-3x'></i></div>";
                echo  "<div id='boy' class='choice genderfemale gender' alt='gender'><i class='fa fa-mars fa-3x'></i></div>";
        echo "</div>";
    }
?>