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

hr.zelen {
  border-top: 1px dotted green;
}

</style>
<body>

    <div class="w3-top">
        <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
          <a href="glavna.php" class="w3-bar-item w3-button">Restavracija ChineseHerbalSuplements</a>
         
          <div class="w3-right w3-hide-small">
            <a href="glavna.php" class="w3-bar-item w3-button w3-animate-top">O nas</a>
            <a href="meni.php" class="w3-bar-item w3-button w3-animate-top">Meni</a>
         
            
          </div>
        </div>
      </div>
      
    

    <div class="w3-content w3-animate-left" style="max-width:1100px">
       
      
        <form class="w3-container w3-card-4" action="../backend/registracijaUporabnika.php" oninput="result.value=!!gesloU.value&&(gesloU.value==gesloU2.value)?'Gesli se ujemata!':'Gesli se ne ujemata!'">
        <div class="w3-row w3-padding-64 " >
       
            <h1 class="w3-center">Registracija</h1><br>
          
           
                <p><input class="w3-input w3-padding-16" type="text" name="imeU" placeholder="Ime:" required name=""></p>
                <p><input class="w3-input w3-padding-16" type="text" name="priimekU" placeholder="Priimek:" required name=""></p>
                <p><input class="w3-input w3-padding-16" type="email" name="mailU" placeholder="Elektronski naslov:" required name=""></p>

              <p><input class="w3-input w3-padding-16" type="text" name="uporabniskoIme"placeholder="Uporabniško ime" required name=""></p>
              
              <hr class=zelen>
              
              <p><input class="w3-input w3-padding-16" type="password" name="gesloU" placeholder="geslo" required name=""></p>
              <p><input class="w3-input w3-padding-16" type="password" name="gesloU2" placeholder="Ponovno vpisite geslo" required name=""></p>
              <output name="result"></output>
              <div class="w3-center">
              <p><input type="submit" class="w3-btn w3-padding w3-green" style="width:120px" name="DodajU" value="Registriracija"></p>
              </div>
            
        </form>


        
    </div>
       
 </div>

     
       
      


     
       
      



  


<footer class="w3-center w3-light-grey w3-padding-32 w3-animate-bottom" >
    <div style="letter-spacing:4px;">
  <a>© Restavracija ChineseHerbalSuplements</a></p>
  </div>
</footer>

</body>
</html>