function filtriranje() {
   
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("filtrirajPonudbo");
    filter = input.value.toUpperCase();
    table = document.getElementById("MeniPonudbe");
    tr = table.getElementsByTagName("tr");
  
    for (i = 0; i < tr.length; i++) {
      var  td = tr[i].getElementsByTagName("td")[0];
      var  td1 = tr[i].getElementsByTagName("td")[1];
      var  td2 = tr[i].getElementsByTagName("td")[2];
     
      if (td && td1 && td3) { 
    var  vrednost = td.textContent || td.innerText ;
    var vrednost1 = td1.textContent || td1.innerText ;
    var vrednost2 = td2.textContent || td2.innerText ;
      if (vrednost.toUpperCase().indexOf(filter) > -1 || vrednost1.toUpperCase().indexOf(filter) > -1 || vrednost2.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
     } else {
       tr[i].style.display = "none";
          }
      }
  }
}