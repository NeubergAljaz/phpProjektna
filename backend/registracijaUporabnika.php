<?php

include "Povezava.php";

$ime=$_GET["imeU"];
$priimek=$_GET["priimekU"];
$mail=$_GET["mailU"];
$uIme=$_GET["uporabniskoIme"];
$geslo=$_GET["gesloU"];
$tip=0;

/*
$options = [
    
    'cost' => 12 // the default cost is 10
];
$hash = password_hash($geslo, PASSWORD_DEFAULT, $options);
*/
$sql="INSERT INTO Uporabnik (Ime, Priimek, Mail,Uporabnisko_Ime,Geslo, Tip_Uporabnika)
VALUES ('$ime', '$priimek', '$mail','$uIme','$geslo','$tip')";

header("Location: http://localhost/DSR/frontend/login.php");

$rezultat=$db->query($sql);

?>