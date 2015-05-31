<?php
echo "<script type='text/javascript'>";

    echo "$(document).ready(function(){";

    	echo "function removeClasses(){";
		echo "$('.categories').removeClass('selected');";
		echo "console.log('remove classes');";
		echo "};";

        echo "$('.categories').click(function(){";  
        echo "removeClasses();";
        echo "var categorie = $(this).attr('alt');";

            echo "var categorie_id = '#'+categorie;";
           
            echo "$(categorie_id).addClass('selected');";
            //echo "return;";


                //echo "else{"
                //echo "var categorie = $(this).attr('alt');";
                //echo "console.log(character);";
                //echo "$('#'+categorie).addClass('selected');";
                //echo "}";
        echo "});";
    echo "});";
    echo "</script>";

	echo "<div class='boxes'>
                    <div id='gender' class='categories' alt='gender' src='categorie'><p>Gender</p></div>
                    <div id='skin' class='categories' alt='skin' src='categorie'><p>Skin</p></div>
                    <div id='eyes' class='categories' alt='eyes' src='categorie'><p>Eyes</p></div>
                    <div id='hair' class='categories' alt='hair' src='categorie'><p>Hair</p></div>
                    <div id='character' class='categories' alt='character' src='categorie'><p>Character</p></div>
                </div>";
?>