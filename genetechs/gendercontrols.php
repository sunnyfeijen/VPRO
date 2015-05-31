<?php
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