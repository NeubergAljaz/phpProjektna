

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
        <div class="w3-bar w3-white w3-padding w3-card " style="letter-spacing:4px;">
          <a href="glavna.php" class="w3-bar-item w3-button">Restavracija ChineseHerbalSuplements</a>
        
          <div class="w3-right w3-hide-small">
            <a href="glavna.php" class="w3-bar-item w3-button w3-animate-top">O nas</a>
            <a href="meni.php" class="w3-bar-item w3-button w3-animate-top">Meni</a>
            <?php
      include "../backend/Povezava.php";
if(isset($_SESSION["Ime"])) {
?>
 <a href="adminDodajanje.php" class="w3-bar-item w3-button w3-animate-top">Dodajte</a>
<?php
} 
?>
          </div>
        </div>
      </div>

<?php
include "../backend/Povezava.php";
if($_SESSION["Ime"]) {
?>





  <div class="w3-content w3-container w3-card-4 w3-animate-left" style="max-width:900px">
    <div class="w3-row w3-padding-64 w3-animate-left w3-center" >
        <div class="w3-row w3-padding-64 w3-animate-left" >
      
      <h1 class="w3-center">Pozdravljen/a <?php echo $_SESSION["Ime"]; ?></h1>
      
      <a>Ali se želite odjaviti?</a>
      <a href="../backend/odjava.php" class="w3-button w3-red w3-animate-zoom">Odjava</a>
      
        <div class="w3-center">
    
      </div>  
</div> 
        </div>
</div>

</div>
</div>

<?php
}else echo "<h1>Najprej se morate prijaviti!</h1>";
?>
  



<footer class="w3-center w3-light-grey w3-padding-32 w3-animate-bottom" >
    <div style="letter-spacing:4px;">
  <a>© Restavracija ChineseHerbalSuplements</a></p>
  </div>
</footer>

</body>
</html>
