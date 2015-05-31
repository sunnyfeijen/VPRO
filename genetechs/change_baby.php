<?php
	// include('calculate_baby.php');
	echo "<script type='text/javascript'>";
	echo "$(document).ready(function(){";
	echo "var babybase = '".$baby_base."';";
	echo "console.log(babybase);";
	echo "$('.baby').css('background-image','url(img/baby/".$baby_base.".jpg)');";
	echo "$('.baby_hair').css('background-image','url(img/baby/".$hair.")');";
	echo "$('.baby_eye').css('background-image','url(img/baby/".$eye.")');";



	
	echo "var skin_change = 'false';";
	echo "var eye_change = 'false';";
	echo "var hair_color_change = 'false';";
	echo "var hair_type_change = 'false';";
	// echo "var kleur;"
	//echo "var stijl;"

	// echo "var new_gender = '".$_POST['gender']."';";
	// $gender = "new_gender";

	echo "var new_hair_color = '".$_POST['hair_color']."';";
	echo "var new_hair_style = '".$_POST['hair_type']."';";

	echo "$('.choice').click(function(){";
	$hair_color = "new_hair_color";
	$hair_type = "new_hair_style";

			echo "if($(this).attr('alt')=='hair_color'){";
		    echo "new_hair_color = $(this).attr('id');";

		    echo "var stijl = ".$hair_type.";";
			//echo "alert(stijl);";

		    echo "$('.baby_hair').css('background-image','url(img/baby/".$skintone."_".$gender."_hair_'";
		    echo "+new_hair_color+";
		    
		    // echo "'_'";
		    // echo "+stijl+";
		    // echo "'.png)');";

			echo "'_".$_POST['hair_type'];
		    
		    echo ".png)');";

			echo "if($(this).attr('id')=='brown'){";
				echo "$('.warning').animate({
					left:'-800px'
				},300);";
                echo "$('.warning p').hide();";
				echo "$('.warning').animate({
					left:'0px'
				},800);";
				echo "$('#hair_brown_warning').show();";
			echo "}";
			

			//echo "console.log(".$hair_type.");";
			//echo "console.log(".$hair_color.");";
			echo "return new_hair_color;";


		    echo "}";

		    echo "if($(this).attr('alt')=='hair_type'){";
		    
			    echo "var new_hair_style = $(this).attr('id');";
				
				echo "var kleur = ".$hair_color.";";
				echo "console.log(kleur);";

				// echo "var stijl = ".$hair_type.";";
				// echo "console.log(stijl);";

			    echo "$('.baby_hair').css('background-image','url(img/baby/".$baby_base."_hair_'";
		    	echo "+kleur+";
		    	echo "'_'";
		    	echo "+new_hair_style+";
		    	echo "'.png)');";

				echo "if($(this).attr('id')=='afro'){";
				echo "$('.warning').animate({
					left:'-800px'
				},300);";
                echo "$('.warning p').hide();";
				echo "$('.warning').animate({
					left:'0px'
				},800);";
				echo "$('#hair_afro_warning').show();";
			echo "}";

				echo "return new_hair_style;";
				

		    echo "}";

			    echo "if($(this).attr('alt')=='eye'){";
				    echo "new_eye_color = $(this).attr('id');";
				    echo "$('.baby_eye').css('background-image','url(img/baby/".$baby_base."_eyes_'";
				    echo "+new_eye_color+";
				    echo "'.png)');";

				    echo "}";


				    		// echo "if($(this).attr('alt')=='skintone'){";
						    // echo "new_skintone = $(this).attr('id');";
						    // echo "$('.baby').css('background-image','url(img/baby/".$baby_base."_eyes_'";
						    // echo "+new_eye_color+";
						    // echo "'.png)');";

						    // echo "}";
				    		echo "if($(this).attr('alt')=='skintone'){";
				    		//echo "alert('10.000 euro erbij biatch');";
						    echo "new_skintone = $(this).attr('id');";
						    echo "console.log(new_skintone);";	
						    echo "console.log('url(img/baby/'+new_skintone+'_".$gender.".jpg)');";					    
						    echo "$('.baby').css('background-image','url(img/baby/'+new_skintone+'_".$gender.".jpg)');";


						    echo "}";


				    // 		echo "if($(this).attr('alt')=='gender'){";
				    // 			echo "console.log('gender aangeklikt');";
							 //    echo "new_gender = $(this).attr('id');";
							 //    echo "$('.baby').css('background-image','url(img/baby/".$skintone."_'";
							 //    echo "+new_gender+";
							 //    echo "'.jpg)');";

								// //$gender = "new_gender";
								// // echo "console.log(".$hair_color.");";
								// echo "var style = ".$hair_type.";";
								// echo "console.log(style);";
								
								// echo "$('.baby_hair').css('background-image','url(img/baby/".$skintone."_'";
								// echo "+new_gender+";
								// echo "'_hair_'";
							 //    echo "+kleur+";
					   //  		echo "'_'";
					   //  		echo "+style+";
					   //  		echo "'.png)');";

								// //echo "return new_gender;";

							 //    echo "}";
    echo "});";


	echo "});";
	echo "</script>";

?>
