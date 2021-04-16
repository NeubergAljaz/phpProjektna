<?php




      include "../backend/Povezava.php";
if(isset($_SESSION["Ime"])) {
?>
 <a href="adminDodajanje.php" class="w3-bar-item w3-button w3-animate-top">Dodajte</a>
<?php
} 
?>  

<?php
      include "../backend/Povezava.php";
if(isset($_SESSION["Ime"])) {
?>
 <a href="login.php" class="w3-bar-item w3-button w3-animate-top">Odjava</a>
<?php
}else echo '<a href="login.php" class="w3-bar-item w3-button w3-animate-top">Prijava</a>'; ?>