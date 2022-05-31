<?php
include("konfigurim.php");


$ID_Vaksina = $_GET['ID_Vaksina'];


$rezultati = mysqli_query($lidh,"DELETE FROM vaksina WHERE ID_Vaksina=$ID_Vaksina");

header("Location:ballina.php");
?>
