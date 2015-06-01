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
        $('#contact').addClass('selected');
    });

      function initialize() {
        var myLatlng = new google.maps.LatLng(51.4519841, 5.4680720000000065);
        var mapOptions = {
          zoom: 9,
          center: myLatlng
        }
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'TAC'
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

</header>
    <section class="contentwrap">
      <div id='fotoslide4'>
        <section id="map-canvas"></section>
      </div>
      <h3>Contact</h3>
          <div class='two_paragraphs'>
                <div class="textwrap">
                  <div class='paragraph'>
                  <p>Wij zijn Genetechs. Wanneer u graag een kind wilt, en zeker wilt zijn van bepaalde kenmerken, kunt u bij ons terecht. 
                    Wij filteren het DNA van uw kind zoals u dat wilt. Heeft uw partner die mooie blonde krullen die uw kind ook zou moeten hebben? 
                    Geen probleem, wij regelen het voor je!<br><br>Heeft u interesse?<br>Kijk dan bij onze producten en neem contact met ons op.</p>
                </div>
                <div class='paragraph'>
                  <p>Wij zijn Genetechs. Wanneer u graag een kind wilt, en zeker wilt zijn van bepaalde kenmerken, kunt u bij ons terecht. 
                    Wij filteren het DNA van uw kind zoals u dat wilt. Heeft uw partner die mooie blonde krullen die uw kind ook zou moeten hebben? 
                    Geen probleem, wij regelen het voor je!<br><br>Heeft u interesse?<br>Kijk dan bij onze producten en neem contact met ons op.</p>
            </div>
          </div>
      </div>
    </section>
</body>
</html>