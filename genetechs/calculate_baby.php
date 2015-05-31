<?php
     $gender = $_POST['gender'];
     $skintone = $_POST['skintone'];
     $baby_base = $skintone . '_' . $gender;
     $hair_color = $_POST['hair_color'];
     $hair_type = $_POST['hair_type'];
     $eye_color = $_POST['eye'];
     $eye = $baby_base . "_eyes_" . $_POST['eye'] . ".png";
     $hair = $baby_base . "_hair_" . $hair_color . "_" . $hair_type . ".png";

     $parent1_name = $_POST['parent1_name'];
     $parent1_day = $_POST['day1'];
     $parent1_month = $_POST['month1'];
     $parent1_year = $_POST['year1'];

     $parent2_name = $_POST['parent2_name'];
     $parent2_day = $_POST['day2'];
     $parent2_month = $_POST['month2'];
     $parent2_year = $_POST['year2'];

     $parent3_name = $_POST['parent3_name'];
     $parent3_day = $_POST['day3'];
     $parent3_month = $_POST['month3'];
     $parent3_year = $_POST['year3'];

     $parent4_name = $_POST['parent4_name'];
     $parent4_day = $_POST['day4'];
     $parent4_month = $_POST['month4'];
     $parent4_year = $_POST['year4'];

     include('calculate_horoscoop.php');

     // echo $parent1_horoscoop;
     // echo $parent2_horoscoop;
     // echo $parent3_horoscoop;
     // echo $parent4_horoscoop;

     $two_parents = 'false';
     $three_parents = 'false';
     $four_parents = 'false';

     if(isset($parent3_horoscoop)){
     	if(isset($parent4_horoscoop)){
     		$four_parents = 'true';
     	}
     	else{
     		$three_parents = 'true';
     	}
     }
     else{
     	$two_parents = 'true';
     }

     //echo $two_parents.$three_parents.$four_parents;

     $birth_day2 = $_POST['day2'];
     $birth_month2 = $_POST['month2'];
     $birth_year2 = $_POST['year2'];
?>