
<!DOCTYPE html>
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

<?php
session_start();

if(count($_POST)>0) {
  include "../backend/Povezava.php";
  
$result = mysqli_query($db,"SELECT * FROM Uporabnik WHERE Uporabnisko_Ime='" . $_POST["uIme"] . "' and geslo = '". $_POST["geslo"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["Id_Uporabnik"] = $row['Id_Uporabnik'];
$_SESSION["Ime"] = $row['Ime'];
} else {
$message = "Napačno uporabniško ime ali geslo!";
}
}
if(isset($_SESSION["Id_Uporabnik"])) {
header("Location:index.php");
}
?>

  <div class="w3-top">
    <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
      <a href="glavna.php" class="w3-bar-item w3-button">Restavracija ChineseHerbalSuplements</a>
     
      <div class="w3-right w3-hide-small">
        <a href="glavna.php" class="w3-bar-item w3-button w3-animate-top">O nas</a>
        <a href="meni.php" class="w3-bar-item w3-button w3-animate-top">Meni</a>
        
        
      </div>
    </div>
  </div>

  <div class="w3-content" style="max-width:900px">
       
      
    <form class="w3-container w3-card-4 w3-animate-left" action="" method="post" target="_blank">
    <div class="w3-row w3-padding-64 w3-animate-left" >
   
        <h1 class="w3-center">Prijava</h1><br>
      
        
       
           

          <p><input class="w3-input w3-padding-16" type="text" name="uIme" placeholder="Uporabniško ime" required name=""></p>
          
          <p><input class="w3-input w3-padding-16" type="password" name="geslo" placeholder="geslo" required name=""></p>
        
          <div class="w3-center">
          <p><input class="w3-button w3-green " name="prijava" type="submit" value="Prijavite se!"></p>
        </div>
        
    </form>
    
</div>


<div class="w3-row w3-padding-64" >
   
  <h4 class="w3-center w3-animate-zoom">Še nimate uporabniškega računa?</h4><br>

   
     <div class="w3-center">
      <a href="registracija.php" class="w3-button w3-green w3-animate-zoom">Registracija</a>
</div>


</div>

   
</div>


  



<footer class="w3-center w3-light-grey w3-padding-32 w3-animate-bottom" >
    <div style="letter-spacing:4px;">
  <a>© Restavracija ChineseHerbalSuplements</a></p>
  </div>
</footer>

</body>
</html>