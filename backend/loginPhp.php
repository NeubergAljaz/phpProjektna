<?php
session_start();
$message="";
if(count($_POST)>0) {
  include "Povezava.php";
  
$result = mysqli_query($db,"SELECT * FROM Uporabnik WHERE Uporabnisko_Ime='" . $_POST["uIme"] . "' and geslo = '". $_POST["geslo"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["Id_Uporabnik"] = $row['Id_Uporabnik'];
$_SESSION["Ime"] = $row['Ime'];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["Id_Uporabnik"])) {
header("Location:../frontend/index.php");
}
?>