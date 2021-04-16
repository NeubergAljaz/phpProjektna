<!DOCTYPE html>
<?php
session_start();
?>
<html>
<title>Restavracija</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
<body>




<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="glavna.php" class="w3-bar-item w3-button">Restavracija ChineseHerbalSuplements</a>
 
    
    <div class="w3-right w3-hide-small">
      <a href="meni.php" class="w3-bar-item w3-button w3-animate-top">Meni</a>
     
      <?php include "../backend/prijava_odjava.php";  ?>


      
    </div>
  </div>
</div>


<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" >
  <img class="w3-image w3-animate-right" src="slike/banner.png"  width="1600" height="700">
</header>


<div class="w3-content w3-animate-left" style="max-width:1100px">



  
  <hr>

  <div class="w3-row w3-padding-64">
    <div class="w3-col l6 w3-padding-large">
      <div class="w3-col l6 w3-padding-large" style="letter-spacing:4px;">
      
      <h1 class="w3-center">Naš meni</h1><br>
      
      <h4>Predjedi</h4>
      <p class="w3-text-grey">
<?php

include "../backend/Povezava.php";
include "../backend/glavna/predjedi.php";
?>
</p><br>
      
      
      <h4>Glavne jedi</h4>
      <p class="w3-text-grey">
      

      <?php

include "../backend/Povezava.php";
include "../backend/glavna/glavnaJed.php";

?>
      </p><br>
    
      <h4>Sladice</h4>
      <p class="w3-text-grey">
      
      <?php

include "../backend/Povezava.php";
include "../backend/glavna/sladice.php";

?>
      
      
      </p><br>
    
      <h4>Priloge</h4>
      <p class="w3-text-grey">
      
      <?php

include "../backend/Povezava.php";
include "../backend/glavna/priloga.php";
?>

      
      </p><br>
    
     
    </div>
  </div>
    <div class="w3-col l6 w3-padding-large">
      <img src="slike/hrana2.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
  </div>

  <hr>

  <div class="w3-row w3-padding-64" >
    <div class="w3-col l6 w3-padding-large">
        <img src="slike/lokacija1.png" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:50%">
    </div>
    <div class="w3-col l6 w3-padding-large" style="letter-spacing:4px;">
        
    <h1>Kontaktni podatki</h1><br>
    <p><h4>Lokacija:</h4></p>
    <p>Zgornji duplek 435d</p>
    <hr>
    <p><h4>Telefonska številka:</h4></p>
    <p>070665554</p>
    <hr>
    <p><h4>Elektronski naslov:</h4></p>
    <p>ChineseHerbalSuplements@gmail.com</p>
    <hr>
      </div>
      </div>
 
   
  </div>
  

</div>

<footer class="w3-center w3-light-grey w3-padding-32" >
    <div style="letter-spacing:4px;">
  <a>© Restavracija ChineseHerbalSuplements</a></p>
  </div>
</footer>

</body>
</html>