<?php
include('horoscoop_eigenschappen.php');

	if($parent3_day > 0){
     	$parent3 = true;
     	if($parent4_day > 0){
     		$parent4 = true;
     	}
     	else{
     		$parent4 = false;
     	}
     }
     else{
     	$parent3 = false;
     	$parent4 = false;
     }

	if($parent1_month==1){
     	if($parent1_day<20){
     		$parent1_horoscoop = $steenbok;
     	}
     	else{
     		$parent1_horoscoop = $waterman;
     	}
     }
     if($parent1_month==2){
     	if($parent1_day<19){
     		$parent1_horoscoop = $waterman;
     	}
     	else{
     		$parent1_horoscoop = $vissen;
     	}
     }
     if($parent1_month==3){
     	if($parent1_day<21){
     		$parent1_horoscoop = $vissen;
     	}
     	else{
     		$parent1_horoscoop = $ram;
     	}
     }
     if($parent1_month==4){
     	if($parent1_day<21){
     		$parent1_horoscoop = $ram;
     	}
     	else{
     		$parent1_horoscoop = $stier;
     	}
     }
     if($parent1_month==5){
     	if($parent1_day<22){
     		$parent1_horoscoop = $stier;
     	}
     	else{
     		$parent1_horoscoop = $tweelingen;
     	}
     }
     if($parent1_month==6){
     	if($parent1_day<22){
     		$parent1_horoscoop = $tweelingen;
     	}
     	else{
     		$parent1_horoscoop = $kreeft;
     	}
     }
     if($parent1_month==7){
     	if($parent1_day<23){
     		$parent1_horoscoop = $kreeft;
     	}
     	else{
     		$parent1_horoscoop = $leeuw;
     	}
     }
     if($parent1_month==8){
     	if($parent1_day<23){
     		$parent1_horoscoop = $leeuw;
     	}
     	else{
     		$parent1_horoscoop = $maagd;
     	}
     }
     if($parent1_month==9){
     	if($parent1_day<23){
     		$parent1_horoscoop = $maagd;
     	}
     	else{
     		$parent1_horoscoop = $weegschaal;
     	}
     }
     if($parent1_month==10){
     	if($parent1_day<23){
     		$parent1_horoscoop = $weegschaal;
     	}
     	else{
     		$parent1_horoscoop = $schorpioen;
     	}
     }
     if($parent1_month==11){
     	if($parent1_day<23){
     		$parent1_horoscoop = $schorpioen;
     	}
     	else{
     		$parent1_horoscoop = $boogschutter;
     	}
     }
     if($parent1_month==12){
     	if($parent1_day<21){
     		$parent1_horoscoop = $boogschutter;
     	}
     	else{
     		$parent1_horoscoop = $steenbok;
     	}
     }




     if($parent2_month==1){
     	if($parent2_day<20){
     		$parent2_horoscoop = $steenbok;
     	}
     	else{
     		$parent2_horoscoop = $waterman;
     	}
     }
     if($parent2_month==2){
     	if($parent2_day<19){
     		$parent2_horoscoop = $waterman;
     	}
     	else{
     		$parent2_horoscoop = $vissen;
     	}
     }
     if($parent2_month==3){
     	if($parent2_day<21){
     		$parent2_horoscoop = $vissen;
     	}
     	else{
     		$parent2_horoscoop = $ram;
     	}
     }
     if($parent2_month==4){
     	if($parent2_day<21){
     		$parent2_horoscoop = $ram;
     	}
     	else{
     		$parent2_horoscoop = $stier;
     	}
     }
     if($parent2_month==5){
     	if($parent2_day<22){
     		$parent2_horoscoop = $stier;
     	}
     	else{
     		$parent2_horoscoop = $tweelingen;
     	}
     }
     if($parent2_month==6){
     	if($parent2_day<22){
     		$parent2_horoscoop = $tweelingen;
     	}
     	else{
     		$parent2_horoscoop = $kreeft;
     	}
     }
     if($parent2_month==7){
     	if($parent2_day<23){
     		$parent2_horoscoop = $kreeft;
     	}
     	else{
     		$parent2_horoscoop = $leeuw;
     	}
     }
     if($parent2_month==8){
     	if($parent2_day<23){
     		$parent2_horoscoop = $leeuw;
     	}
     	else{
     		$parent2_horoscoop = $maagd;
     	}
     }
     if($parent2_month==9){
     	if($parent2_day<23){
     		$parent2_horoscoop = $maagd;
     	}
     	else{
     		$parent2_horoscoop = $weegschaal;
     	}
     }
     if($parent2_month==10){
     	if($parent2_day<23){
     		$parent2_horoscoop = $weegschaal;
     	}
     	else{
     		$parent2_horoscoop = $schorpioen;
     	}
     }
     if($parent2_month==11){
     	if($parent2_day<23){
     		$parent2_horoscoop = $schorpioen;
     	}
     	else{
     		$parent2_horoscoop = $boogschutter;
     	}
     }
     if($parent2_month==12){
     	if($parent2_day<21){
     		$parent2_horoscoop = $boogschutter;
     	}
     	else{
     		$parent2_horoscoop = $steenbok;
     	}
     }

     if($parent3 == true){
		     	if($parent3_month==1){
		     	if($parent3_day<20){
		     		$parent3_horoscoop = $steenbok;
		     	}
		     	else{
		     		$parent3_horoscoop = $waterman;
		     	}
		     }
		     if($parent3_month==2){
		     	if($parent3_day<19){
		     		$parent3_horoscoop = $waterman;
		     	}
		     	else{
		     		$parent3_horoscoop = $vissen;
		     	}
		     }
		     if($parent3_month==3){
		     	if($parent3_day<21){
		     		$parent3_horoscoop = $vissen;
		     	}
		     	else{
		     		$parent3_horoscoop = $ram;
		     	}
		     }
		     if($parent3_month==4){
		     	if($parent3_day<21){
		     		$parent3_horoscoop = $ram;
		     	}
		     	else{
		     		$parent3_horoscoop = $stier;
		     	}
		     }
		     if($parent3_month==5){
		     	if($parent3_day<22){
		     		$parent3_horoscoop = $stier;
		     	}
		     	else{
		     		$parent3_horoscoop = $tweelingen;
		     	}
		     }
		     if($parent3_month==6){
		     	if($parent3_day<22){
		     		$parent3_horoscoop = $tweelingen;
		     	}
		     	else{
		     		$parent3_horoscoop = $kreeft;
		     	}
		     }
		     if($parent3_month==7){
		     	if($parent3_day<23){
		     		$parent3_horoscoop = $kreeft;
		     	}
		     	else{
		     		$parent3_horoscoop = $leeuw;
		     	}
		     }
		     if($parent3_month==8){
		     	if($parent3_day<23){
		     		$parent3_horoscoop = $leeuw;
		     	}
		     	else{
		     		$parent3_horoscoop = $maagd;
		     	}
		     }
		     if($parent3_month==9){
		     	if($parent3_day<23){
		     		$parent3_horoscoop = $maagd;
		     	}
		     	else{
		     		$parent3_horoscoop = $weegschaal;
		     	}
		     }
		     if($parent3_month==10){
		     	if($parent3_day<23){
		     		$parent3_horoscoop = $weegschaal;
		     	}
		     	else{
		     		$parent3_horoscoop = $schorpioen;
		     	}
		     }
		     if($parent3_month==11){
		     	if($parent3_day<23){
		     		$parent3_horoscoop = $schorpioen;
		     	}
		     	else{
		     		$parent3_horoscoop = $boogschutter;
		     	}
		     }
		     if($parent3_month==12){
		     	if($parent3_day<21){
		     		$parent3_horoscoop = $boogschutter;
		     	}
		     	else{
		     		$parent3_horoscoop = $steenbok;
		     	}
		     }
     }


     	if($parent4 == true){
		     	if($parent4_month==1){
		     	if($parent4_day<20){
		     		$parent4_horoscoop = $steenbok;
		     	}
		     	else{
		     		$parent4_horoscoop = $waterman;
		     	}
		     }
		     if($parent4_month==2){
		     	if($parent4_day<19){
		     		$parent4_horoscoop = $waterman;
		     	}
		     	else{
		     		$parent4_horoscoop = $vissen;
		     	}
		     }
		     if($parent4_month==3){
		     	if($parent4_day<21){
		     		$parent4_horoscoop = $vissen;
		     	}
		     	else{
		     		$parent4_horoscoop = $ram;
		     	}
		     }
		     if($parent4_month==4){
		     	if($parent4_day<21){
		     		$parent4_horoscoop = $ram;
		     	}
		     	else{
		     		$parent4_horoscoop = $stier;
		     	}
		     }
		     if($parent4_month==5){
		     	if($parent4_day<22){
		     		$parent4_horoscoop = $stier;
		     	}
		     	else{
		     		$parent4_horoscoop = $tweelingen;
		     	}
		     }
		     if($parent4_month==6){
		     	if($parent4_day<22){
		     		$parent4_horoscoop = $tweelingen;
		     	}
		     	else{
		     		$parent4_horoscoop = $kreeft;
		     	}
		     }
		     if($parent4_month==7){
		     	if($parent4_day<23){
		     		$parent4_horoscoop = $kreeft;
		     	}
		     	else{
		     		$parent4_horoscoop = $leeuw;
		     	}
		     }
		     if($parent4_month==8){
		     	if($parent4_day<23){
		     		$parent4_horoscoop = $leeuw;
		     	}
		     	else{
		     		$parent4_horoscoop = $maagd;
		     	}
		     }
		     if($parent4_month==9){
		     	if($parent4_day<23){
		     		$parent4_horoscoop = $maagd;
		     	}
		     	else{
		     		$parent4_horoscoop = $weegschaal;
		     	}
		     }
		     if($parent4_month==10){
		     	if($parent4_day<23){
		     		$parent4_horoscoop = $weegschaal;
		     	}
		     	else{
		     		$parent4_horoscoop = $schorpioen;
		     	}
		     }
		     if($parent4_month==11){
		     	if($parent4_day<23){
		     		$parent4_horoscoop = $schorpioen;
		     	}
		     	else{
		     		$parent4_horoscoop = $boogschutter;
		     	}
		     }
		     if($parent4_month==12){
		     	if($parent4_day<21){
		     		$parent4_horoscoop = $boogschutter;
		     	}
		     	else{
		     		$parent4_horoscoop = $steenbok;
		     	}
		     }
     }

?>