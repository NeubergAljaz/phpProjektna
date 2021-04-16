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

form.example input[type=text] {
  padding: 10px;
  font-size: 15px;
  border: 2px solid rgb(160, 160, 160);
  float: left;
  width: 80%;
  background: #f1f1f1;
}

footer {bottom:0;}
</style>
<body>



    <div class="w3-top">
        <div class="w3-bar w3-white w3-padding w3-card " style="letter-spacing:4px;">
          <a href="glavna.php" class="w3-bar-item w3-button">Restavracija ChineseHerbalSuplements</a>
        
          <div class="w3-right w3-hide-small">
            <a href="glavna.php" class="w3-bar-item w3-button w3-animate-top">O nas</a>
            
            <?php include "../backend/prijava_odjava.php";  ?>
            
          </div>
        </div>
      </div>

      
      
    
      <header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px">
        <div class="w3-center">
        <img class="w3-image w3-animate-right" src="slike//bannermeni3.png" alt="Hamburger Catering" width="700" height="500">
       </div>
       
      </header>

     


      <div class="w3-display-container w3-content w3-wide w3-animate-zoom" style="max-width:1600px;min-width:500px">
        <hr>
        <h2>Meni:</h2>
       
        <p>Za iskanje vpišite ključne besede na primer: Pizza 15$.
          <form class="example" action="/action_page.php">
            <input type="text" id="filtrirajPonudbo" placeholder="Vpisite kljucne besede:" onkeyup="filtriranje()">
            <br>
            
          </form>
        <table class="w3-table w3-bordered " id="MeniPonudbe">
          <tr>
            <th>Ponudba:</th>
            <th>Kategorija</th>
            <th>Cena</th>
          </tr>
<?php

include "../backend/Povezava.php";

$sql = "SELECT * FROM Ponudba INNER JOIN Kategorija ON Ponudba.FK_Kategorija = Kategorija.Id_Kategorija";
$rezultat =$db->query($sql);


if($rezultat->num_rows >0){
  while($row = $rezultat->fetch_assoc()){
   
  echo "<tr> <td><a href='ponudba.php?id={$row['Id_Ponudba']}'>".$row["Naziv"]."</td><td>".$row["Naziv_Kategorije"]."</td><td>".$row["Cena"]."€</td></tr>";  
  
}
echo"</table>";
}
else{
  echo "Ni rezultatov";
}
$db->close();
?>
        </table>
      </div> 


      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>



<footer class="w3-center w3-light-grey w3-padding-32 w3-animate-bottom" >
    <div style="letter-spacing:4px;">
  <a>© Restavracija ChineseHerbalSuplements</a></p>
  </div>
</footer>

</body>


<script>
  function filtriranje() {
    
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("filtrirajPonudbo");
    filter = input.value.toUpperCase();
    table = document.getElementById("MeniPonudbe");
    tr = table.getElementsByTagName("tr");
  
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      td1 = tr[i].getElementsByTagName("td")[1];
      td2 = tr[i].getElementsByTagName("td")[2];
     
      if (td&&td1&&td2) { 
        txtValue = td.textContent || td.innerText;
        txtValue1 = td1.textContent || td1.innerText;
        txtValue2 = td2.textContent || td2.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1||txtValue1.toUpperCase().indexOf(filter) > -1||txtValue2.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      
      }
    }
  }
  </script>
</html>