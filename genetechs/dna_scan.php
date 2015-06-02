<?php
	echo "<script type='text/javascript'>";
    echo "$(document).ready(function(){
        		$('.container').hide();

        		$('#dna_scan_stripe_yellow').animate({
		            height:'-15px', bottom: '-10px'
		        },6000);

				$('#dna_scan_orange').delay(5000).animate({
		            opacity:'100'
		        },6000);


				$('#dna_scan_stripe_orange').delay(5000).animate({
		            height:'-15px', opacity:'100', bottom: '-10px'
		        },6000);

				$('#dna_scan_blue_dark').delay(10000).animate({
		            opacity:'100'
		        },6000);

				$('#dna_scan_stripe_blue_dark').delay(10000).animate({
		            height:'-15px', opacity:'100', bottom: '-10px'
		        },6000);

				$('#dna_scan_blue_light').delay(15000).animate({
		            opacity:'100'
		        },6000);

				$('#dna_scan_stripe_blue_light').delay(15000).animate({
		            height:'-15px', opacity:'100', bottom: '-10px'
		        },6000);

				$('#dna_available').delay(21500).animate({
		            opacity:'100'
		        },1500);

        		$('#continue').on('click', function(){
        			$('.container').show();
        		});
        	});";
    echo "</script>";
?>   
<section id='background_dna'>
<section id='dna_scan_yellow' class='dna_scan'>
</section>
<section id='dna_scan_orange' class='dna_scan'>
</section>
<section id='dna_scan_blue_dark' class='dna_scan'>
</section>
<section id='dna_scan_blue_light' class='dna_scan'>
</section>
<section id='dna_scan_stripe_yellow' class='dna_scan_stripes'>
	</section>
	<section id='dna_scan_stripe_orange' class='dna_scan_stripes'>
	</section>
	<section id='dna_scan_stripe_blue_dark' class='dna_scan_stripes'>
	</section>
	<section id='dna_scan_stripe_blue_light' class='dna_scan_stripes'>
	</section>
<section id='dna_available'>
<h1>Calculating available DNA</h1>
</section>

<a id='continue'>continue</a>
</section>