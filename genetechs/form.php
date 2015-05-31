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
        <script type="text/javascript">
          //Javascript Document
        $(document).ready(function(){
            $('#parent3').css('opacity','0');
            $('#parent4').css('opacity','0');

            var parent3_visible = false;
            var parent4_visible = false;
            $('#add_parent').click(function(){
                if(parent3_visible == false){
                  $('#parent3').css('opacity','1');
                  parent3_visible = true;
                }
                else if(parent3_visible == true){
                  $('#parent4').css('opacity','1');
                }
            })
        });
        </script>
        

    </head>
    <body>
        
        <form action='index.php' method='POST'>
            <div id='parent1'>
            <h1>parent 1</h1>
              <input type='text' name='parent1_name' required>
              <input type='number' name="day1" min="1" max="31" required>
              <input type='number' name="month1" min="1" max="12" required>
              <input type='number' name="year1" min="1900" max="2000" required>
            </div>
            <div id='parent2'>
            <h1>parent 2</h1>
              <input type='text' name='parent2_name' required>
              <input type='number' name="day2" min="1" max="31" required>
              <input type='number' name="month2" min="1" max="12" required>
              <input type='number' name="year2" min="1900" max="2000" required>
            </div>
            <a id='add_parent'>add parent</a>
            <div id='parent3'>
            <h1>parent 3</h1>
              <input type='text' name='parent3_name'>
              <input type='number' name="day3" min="1" max="31">
              <input type='number' name="month3" min="1" max="12">
              <input type='number' name="year3" min="1900" max="2000">
            </div>
            <div id='parent4'>
            <h1>parent 4</h1>
              <input type='text' name='parent4_name'>
              <input type='number' name="day4" min="1" max="31">
              <input type='number' name="month4" min="1" max="12">
              <input type='number' name="year4" min="1900" max="2000">
            </div>
            <select name="gender">
                  <option value="boy">boy</option>
                  <option value="girl">girl</option>
            </select>
            <select name="skintone">
                  <option value="white">white</option>
                  <option value="arabic">arabic</option>
                  <option value="olive">olive (kim cardashian)</option>
                  <option value="asian">asian</option>
                  <option value="brown">brown</option>
                  <option value="black">black</option>
            </select>
             <select name="hair_color">
                  <option value="blond_light">light blonde</option>
                  <option value="blond_dark">dark blonde</option>
                  <option value="ginger">ginger</option>
                  <option value="brown">brown</option>
                  <option value="black">black</option>
            </select>
            <select name="hair_type">
                  <option value="straight">straight</option>
                  <option value="wavy">wavy</option>
                  <option value="curly">curly</option>
                  <option value="afro">afro</option>
            </select>
            <select name="eye">
                  <option value="blue">blue</option>
                  <option value="gray">gray</option>
                  <option value="green">green</option>
                  <option value="brown_light">light brown</option>
                  <option value="brown_dark">dark brown</option>
            </select>
            <input type='submit' value='submit' name='submit'>
        </form>


    </body>
</html>




