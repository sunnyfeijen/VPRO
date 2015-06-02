<!DOCTYPE html>

<html lang="en">
<?php
include 'build/head.php';
?>
<body>
<header>
	<?php
  		include 'build/navigatie.php';
  	?>

  	<script type="text/javascript">
  		$( document ).ready(function() {
  		 	$('nav a').removeClass('selected');
		    $('#home').addClass('selected');
		});
  	</script>

</header>
    <section class="contentwrap">
    	<div id='fotoslide1'></div>
    	<h3></h3>
        	<div class='two_paragraphs'>
                <div class="textwrap">
                	<div class='paragraph'>
			  			<h1 class="titel">Welkom</h1>
			            <p>Wij zijn Genetechs. Wij zorgen ervoor dat uw kind het DNA krijgt wat het verdient. Door onze innovatieve technieken zijn wij in staat om uw gewenste DNA te filteren. Uw kind zal precies zijn zoals u zich altijd heeft voorgesteld. Wilt u een kind met blauwe ogen? Of heeft uw partner die mooie blonde krullen die uw kind ook zou moeten hebben? Geen probleem, wij regelen het voor u!<br><br>
</p>
		            </div>
		            <div class='paragraph'>
			            <h1 class="titel">Interesse?</h1>
			            <p>Wilt u meer informatie over het proces? Kijk bij het kopje <a href="behandeling.php">behandeling</a>.<br>
							Wanneer u interesse heeft in een behandeling, kunt u contact met ons opnemen via de <a href="contact.php">contactpagina</a>.
						</p>
	  				</div>
	  			</div>
	  	</div>
    </section>
</body>
</html>
