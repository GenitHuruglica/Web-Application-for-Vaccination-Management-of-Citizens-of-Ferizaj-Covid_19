<?php
include("konfigurim.php");
$ID_Q = $_GET['ID_Q'];

$rezultati = mysqli_query($lidh,"DELETE FROM qytetaret WHERE ID_Q=$ID_Q");


header("Location:ballina.php");
?>

