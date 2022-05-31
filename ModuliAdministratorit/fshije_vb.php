<?php
include("konfigurim.php");


$ID_Vendbanimi = $_GET['ID_Vendbanimi'];


$rezultati = mysqli_query($lidh,"DELETE FROM vendbanimi WHERE ID_Vendbanimi=$ID_Vendbanimi");

header("Location:ballina.php");
?>
