<?php

include "Povezava.php";

$naziv=$_GET["NazivP"];
$opis=$_GET["OpisP"];
$sestavine=$_GET["SestavineP"];
$kategorija=$_GET["KategorijaP"];
$cena=$_GET["CenaP"];
$slika=$_GET["SlikaP"];



$sql="INSERT INTO Ponudba (Naziv, Opis, Sestavine, FK_Kategorija, Cena, Slika)
VALUES ('$naziv', '$opis', '$sestavine','$kategorija', '$cena', '$slika')";

header("Location: http://localhost/DSR/frontend/meni.php");

$rezultat=$db->query($sql);

?>