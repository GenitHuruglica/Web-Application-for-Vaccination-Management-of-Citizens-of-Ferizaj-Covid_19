<html>
	<head>
		<title>UMAUE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
<?php

include_once("konfigurim.php");

if(isset($_POST['shto_v'])) {	
	$Vaksina = $_POST['Vaksina'];
	
		
	
	if(empty($Vaksina)) {			
		if(empty($Vaksina)) {echo "<font color='red'>Fusha Vaksina eshte e zbrazet.</font><br/>";}
		
		
		echo "<br/><a href='javascript:self.history.back();'>Kthehu mbrapa</a>";
	} else { 
		
	
		$rezultati = mysqli_query($lidh, "INSERT INTO vaksina(Vaksina) VALUES('$Vaksina')");
		
		echo "<script>
         setTimeout(function(){
            window.location.href = 'ballina.php';
         }, 3000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 3 sekonda. <b></p>";
	
	}
}
?>
</body>
</html>