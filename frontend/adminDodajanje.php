


<!DOCTYPE html>
<?php

include "../backend/Povezava.php";


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
            <a href="glavna.php" class="w3-bar-item w3-button w3-animate-top">O nas</a>
            <a href="meni.php" class="w3-bar-item w3-button w3-animate-top">Meni</a>
            <a href="login.php" class="w3-bar-item w3-button w3-animate-top">Prijava</a>
       
      
          </div>
        </div>
      </div>
      



  <div class="w3-content w3-animate-left" style="max-width:1100px">
    <div class="w3-row w3-padding-64 w3-animate-left" >

        <h2>Dodajanje ponudbe</h2>
    </div>
    <form class="w3-container w3-card-4"  action="../backend/dodajanjePonudbe.php">
    <br>
    <p>      
    <label class="w3-text-grey">Naziv ponudbe:</label>
    <input class="w3-input w3-border" name="NazivP" type="text" required>
    </p>
    <p>      
    <label class="w3-text-grey">Sestavine:</label>
    <textarea class="w3-input w3-border" name="SestavineP" type="text"></textarea>
    </p>
    <p>      
    <label class="w3-text-grey">Opis:</label>
    <textarea class="w3-input w3-border"name="OpisP" type="text"></textarea>
    </p>
    <p>      
        <label class="w3-text-grey">Cena:</label>
        <input class="w3-input w3-border"name="CenaP" type="number"></textarea>
        </p>
    <br>
    <p>      
        <label class="w3-text-grey">Kaegorija:</label>
        <input class="w3-input w3-border"name="KategorijaP" type="number"></textarea>
        </p>
        <p>      
        <label class="w3-text-grey">Slika:</label>
        <input class="w3-input w3-border"name="SlikaP" type="text"></textarea>
        </p>
    <br>
      
      <div class="w3-center">
      <p><input type="submit" class="w3-btn w3-padding w3-green" style="width:120px" name="DodajP" value="Dodajte"></p>
    </div>
    </form>
    <hr>
   
</div>

   
</div>


  



<footer class="w3-center w3-light-grey w3-padding-32 w3-animate-bottom" >
    <div style="letter-spacing:4px;">
  <a>© Restavracija ChineseHerbalSuplements</a></p>
  </div>
</footer>

</body>
</html>