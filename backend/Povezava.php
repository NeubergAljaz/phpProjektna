<?php
$db=mysqli_connect("localhost","root","","dsr");
if($db->connect_error){
  die("Neuspešna povezava".$db->connection_error);
}

?>
