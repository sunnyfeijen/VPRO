<?php
	echo "<script type='text/javascript'>";
    echo "$(document).ready(function(){
        		$('.container').hide();
        		$('#background_dna').hide();


        		$('#download_dna').on('click', function(){
        		$('#background_dna').show();

        		$('#dna_scan_stripe_yellow').animate({
		            height:'-15px', bottom: '-10px'
		        },6000);

				$('#dna_scan_orange').delay(5500).animate({
		            opacity:'100'
		        },0);


				$('#dna_scan_stripe_orange').delay(5000).animate({
		            height:'-15px', opacity:'100', bottom: '-10px'
		        },6000);

				$('#dna_scan_blue_dark').delay(10500).animate({
		            opacity:'100'
		        },0);

				$('#dna_scan_stripe_blue_dark').delay(10000).animate({
		            height:'-15px', opacity:'100', bottom: '-10px'
		        },6000);

				$('#dna_scan_blue_light').delay(15500).animate({
		            opacity:'100'
		        },0);
	


				$('#dna_scan_stripe_blue_light').delay(15000).animate({
		            height:'-15px', opacity:'100', bottom: '-10px'
		        },6000);

				$('.dna_scan_stripes').delay(500).animate({
					border:'0px'
				})

				
				
				$('#dna_available').delay(21500).animate({
		            opacity:'100'
		        },1500);
				
						$('#first_loading').delay(23000).animate({
				            opacity:'0'
				        },100);
						$('#locus').delay(23000).animate({
				            opacity:'100'
				        },1500);

						$('#second_loading').delay(25000).animate({
			            opacity:'0'
				        },100);
						$('#chromosoom').delay(25000).animate({
				            opacity:'100'
				        },1500);

						$('#third_loading').delay(27000).animate({
				            opacity:'0'
				        },100);
						$('#dna_kenmerk').delay(27000).animate({
				            opacity:'100'
				        },1500);

						$('#fourth_loading').delay(29000).animate({
			            opacity:'0'
				        },100);
						$('#frequentie').delay(29000).animate({
				            opacity:'100'
				        },1500);

						$('#continue').delay(30000).animate({
				            opacity:'100'
				        },1000);

	
				});

        		$('#continue').on('click', function(){
        			$('.container').show();
        			$('#dna_scan').hide();

        		});
        	});";
    echo "</script>";
?>   
<section id='dna_scan'>
<a id='download_dna'>download DNA</a>
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
<img src='img/loading.gif' class='loading' id='first_loading'/>
<img src='img/loading.gif' class='loading' id='second_loading'/>
<img src='img/loading.gif' class='loading' id='third_loading'/>
<img src='img/loading.gif' class='loading' id='fourth_loading'/>
	<?php
		include('dna_tables.php');
	?>
</section>

<a id='continue'>continue</a>
</section>
</section>