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
      <h3></h3>
          <div class='two_paragraphs'>
                <div class="textwrap">
                  <div class='paragraph'>
                    <h1>CONTACT</h1>
                  <p>
                      Wanneer u interesse heeft in onze diensten kunt u onderstaande gegevens raadplegen. We hopen snel met u in contact te komen.
                      <br><br>
                      GENETECHS
                      <br>
                      Van Speijkstraat 46
                      <br>
                      5612 GE Eindhoven
                      <br>
                      040 - 243 82 15
                      <br>
                      info@genetechs.nl
                  </p>
                </div>
                <div class='paragraph'>
                  <div class="left">
                    <h1>OPENINGSTIJDEN</h1>
                    <p>
                      Maandag:
                      <br>
                      Dinsdag:
                      <br>
                      Woensdag:
                      <br>
                      Donderdag:
                      <br>
                      Vrijdag:
                      <br>
                      Zaterdag:
                      <br>
                      Zondag:
                    </p>
                  </div>

                  <div class="right">
                    <p>
                      <br><br>
                      gesloten.
                      <br>
                      10:00 - 17:00.
                      <br>
                      10:00 - 17:00.
                      <br>
                      10:00 - 17:00.
                      <br>
                      10:00 - 20:00.
                      <br>
                      10:00 - 20:00.
                      <br>
                      gesloten.
                    </p>
                  </div>
            </div>
          </div>
      </div>
    </section>
</body>
</html>