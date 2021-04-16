<?php
session_start();
unset($_SESSION["Id_Uporabnik"]);
unset($_SESSION["Ime"]);
header("Location:../frontend/login.php");
?>