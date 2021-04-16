
<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
<title>Restavracija</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<?php
include "../backend/Povezava.php";
$id = $_GET['id'];
$sql = "SELECT * FROM Ponudba WHERE Id_Ponudba='$id'";
$rezultat =$db->query($sql);
$row = $rezultat->fetch_assoc();

?>

<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
</head>
<body>

    <div class="w3-top">
        <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
          <a href="glavna.php" class="w3-bar-item w3-button">Restavracija ChineseHerbalSuplements</a>
       
          <div class="w3-right w3-hide-small">
     
     
     
     




            <a href="glavna.php" class="w3-bar-item w3-button w3-animate-top">O nas</a>
            <a href="meni.php" class="w3-bar-item w3-button w3-animate-top">Meni</a>
            <?php include "../backend/prijava_odjava.php";  ?>
            
       
          </div>
        </div>
      </div>
      
    
     

    
  <div class="w3-row w3-padding-64 w3-animate-left">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="slike/hrana/<?php echo $row['Slika']; ?>" style="width:700px;height:700" class="w3-round w3-image w3-opacity-min">
    </div>
    

    <div class="w3-col m6 w3-padding-large">
     
      <h1 class="w3-center"><?php echo $row['Naziv']   ?></h1><br>
      <h4 class="w3-center">Cena: <?php echo $row['Cena']   ?>€</h4>
      <hr>
      <h3>Sestavine:</h3>
      <h4 class="w3-text-grey"><?php echo $row['Sestavine']   ?></h4>
      <hr>
      <h3>Priloga:</h3>
      <h4 class="w3-text-grey">Riž ali praženi rezanci.</h4>
      <hr>
      <h3>Opis jedi:</h3>
      <h4 class="w3-text-grey"><?php echo $row['Opis']   ?></h4>
      
      
      
      
     
    </div>
  </div>




  <input type="submit" name="izbrisi" class="w3-button w3-red w3-animate-zoom" value = "Izbrisi">
  
  <hr>
  
  <?php

include "../backend/Povezava.php";
$id = $_GET['id'];
if (isset($_POST['izbrisi'])) {


// sql to delete a record
$sql = "DELETE FROM Ponudba WHERE Id_Ponudba='$id'";

if (mysqli_query($db, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($db);
}
}
mysqli_close($db);
?>


<footer class="w3-center w3-light-grey w3-padding-32 w3-animate-bottom" >
    <div style="letter-spacing:4px;">
  <a>© Restavracija ChineseHerbalSuplements</a></p>
  </div>
</footer>

</body>


</html>