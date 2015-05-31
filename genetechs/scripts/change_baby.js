$(document).ready(function(){
		// <?php
		// 	echo "var baby_base = '{$baby_base}';";
		// ?>
		var baby_base = <?php echo babybase ?>;
		$('.baby').css('background-image','url(../img/baby/'.baby_base.')');
		alert(baby_base);
	});