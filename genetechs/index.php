<?php
    include('calculate_baby.php');
    include('warnings.php');

?>
<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Genetechs</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Stylesheets -->
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        
        <!-- Scripts -->
        <script type="text/javascript" src="scripts/jquery-1.11.3.min.js"></script>
        
        <script type="text/javascript" src="scripts/categories2.js"></script>
        <script type="text/javascript" src="change_controls.js"></script>
        
        <?php
            include('dna_scan.php');
        ?>
       
        
    </head>
    <body>

        <section class="container">

            <section class="baby">
            </section>
            <section class="baby_hair">
            </section>
            <section class="baby_eye">
            </section>
            <section class="girl">
            </section>
            
            
            <section class="controls">

                <?php
                    include('shoppingbag.php');
                ?>
                
               <!--  <?php
                    include('winkelmand.php');
                ?> -->
                <?php
                    include('boxes.php');
                ?>
                
               <!--  <button id="continue">Continue</button> -->
            </section>
            
            <section class="gendercontrols expandcontrols">
                <div class='control_title'>
                <h2>Gender</h2>
                <h3>Available DNA</h3>

                <div class='change' alt='2750' id='gender_change'></div>
                </div>
                <?php

                    include ('gendercontrols.php');
                ?>
                
            </section>
            
            <section class="skincontrols expandcontrols">
                <div class='control_title'>
                <h2>Skin tone</h2>
                <h3>Available DNA</h3><div class='change' alt='2000' id='skin_change'></div>
                </div>
                <?php
                    include ('skin_controls.php');
                ?>
            </section>
            
            <section class="eyescontrols expandcontrols">
                <div class='control_title'>
                <h2>Eye color</h2>
                <h3>Available DNA</h3><div class='change' alt='800' id='eye_change'></div>
                </div>
                <?php
                    include ('eyes_controls.php');
                ?>
                
            </section>
            
            <section class="haircontrols expandcontrols">
                <div class='control_title'>
                <h2>Hair types</h2>
                <h3>Available DNA</h3><div class='change' alt='1250' id='hair_change'></div>
                </div>
                <h4>Color</h4>
                
                <?php
                    include ('hair_color_controls.php');
                ?>
                <h4>Style</h4>
                <?php
                    include ('hair_type_controls.php');
                ?>
            </section>

            <section class="charactercontrols expandcontrols">
                <div class='control_title'>
                <h2>character</h2>
                <h3>Available DNA</h3><div class='change' alt='3125' id='character_change'></div>
                </div>
                <?php
                    include ('character_controls.php');
                ?>
                
            </section>

            <script type="text/javascript">
            $(document).ready(function(){

            $('.warning a').click(function(){
                $('.warning').animate({
                    left:'-800px'
                },300)
                $('.warning p').hide();
            })
});
            </script>

            <section class='warning'>
                <h1>warning</h1>
                <!-- <p id='gender_warning'>Gebruik van deze DNA string resulteerd in 33% meer kans op <i>huidkanker</i>.</p> -->
                <p id='skintone_white_light_warning'>Gebruik van deze DNA string resulteerd in 33% meer kans op <i>huidkanker</i>.</p>
                <p id='skintone_brown_light_warning'>Gebruik van deze DNA string resulteerd in 12% meer kans op <i>huidkanker</i>.</p>

                <p id='hair_brown_warning'>Het DNA uit deze DNA string is zwak. Gebruik van deze DNA string kan resulteren in <i>snelle vergrijzing</i>.</p>
                <p id='hair_ginger_warning'>Het DNA uit deze DNA string is zwak. Gebruik van deze DNA string kan resulteren in <i>snelle vergrijzing</i>.</p>
                <!-- <p id='hair_black_warning'>iel zwarte haren</p> -->
                <p id='hair_curly_warning'>In de benodigde DNA string zit een foutenmarge van 3.4%. Deze foutmarge kan resulteren in <i>haaruitval</i>.</p>
                <p id='hair_afro_warning'>In de benodigde DNA string zit een foutenmarge van 3.4%. Deze foutmarge kan resulteren in <i>haaruitval</i>.</p>

                <p id='black_eye_warning'>In de benodigde DNA string zit een foutenmarge van 1.6%. Deze foutmarge kan resulteren in <i>slechtziendheid</i>.</p>
                <a>x</a>
            </section>
        
        </section>


    </body>
</html>
<?php
            include('change_baby.php');

        ?>




