<?php

$sql = "SELECT * FROM `Ponudba` WHERE `FK_Kategorija`=1";
$rezultat =$db->query($sql);


if($rezultat->num_rows >0){
  while($row = $rezultat->fetch_assoc()){
   
  echo "<a href='ponudba.php?id={$row['Id_Ponudba']}'>".$row["Naziv"].", ";  
}

echo"</table>";
}
else{
  echo "Ni rezultatov";
}
$db->close();
?>