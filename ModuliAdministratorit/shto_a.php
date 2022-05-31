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


 require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/EXCEPTION.php';

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();

$mail->isSMTP();

$mail->Host = "smtp.gmail.com";

$mail->SMTPAuth = "true";

$mail->SMTPSecure = "tls";

$mail->Port = "587";

$mail->Username = "vaksina.c19@gmail.com";

$mail->Password = "Kosova.123";

$mail->Subject = "Vaksinimi i Qytetareve te Ferizait";

$mail->setFrom("vaksina.c19@gmail.com");

$mail->isHTML(true);

 if(isset($_POST['shto_a']))
{
$mail->Body = "	Përshëndetje z/znj ".$_POST['Emri']." ".$_POST['Mbiemri'].", <br> Me anë të kësaj e-mail ju njoftojm se aplikimi juaj për vaksinim është aprovuar. Për datën, kohën dhe lokacionin e vaksinimit do të informoheni me anë të numrit të telefonit. <br> Gjitha të mirat!";
}
 if(isset($_POST['shto_a']))
{
$mail->addAddress($_POST['Email']);
}
if ($mail->Send()) {
	echo "Ju do të pranoni një e-mail aprovimi. ";
}else{
	echo "error .. ";
}

$mail->smtpClose();


 if(isset($_POST['shto_a']))
{	
	$Emri = $_POST['Emri'];
	$Mbiemri = $_POST['Mbiemri'];
	$Numri_Personal = $_POST['Numri_Personal'];
	$Mosha = $_POST['Mosha'];
	$Email = $_POST['Email'];
	$Tel = $_POST['Tel'];
	$ID_Vaksina = $_POST['ID_Vaksina'];
	$ID_Vendbanimi = $_POST['ID_Vendbanimi'];
	$ID_Faza = $_POST['ID_Faza'];

	

	if(empty($Emri) || empty($Mbiemri) || empty($Numri_Personal) || empty($Mosha) || empty($Email) || empty($Tel))
	 {
		if(empty($Emri)) {echo "<font color='red'>Fusha Emri eshte e zbrazet.</font><br/>";}

		if(empty($Mbiemri)) {echo "<font color='red'> Fusha Mbiemri eshte e zbrazet.</font><br/>";}

		if(empty($Numri_Personal)) {echo "<font color='red'> Fusha Numri_Personal eshte e zbrazet.</font><br/>";}

		if(empty($Mosha)) {echo "<font color='red'> Fusha Mosha eshte e zbrazet.</font><br/>";}

		if(empty($Email)) {echo "<font color='red'> Fusha Email eshte e zbrazet.</font><br/>";}

		if(empty($Tel)) {echo "<font color='red'> Fusha Numri Telefonit eshte e zbrazet.</font><br/>";}
		
		echo "<br/><a href='javascript:self.history.back();'>Kthehu mbrapa</a>";

	 } 
		else 
	  { 	
		$rezultati = mysqli_query($lidh, "INSERT INTO qytetaret(Emri,Mbiemri,Numri_Personal,Mosha,Email,Tel,ID_Vaksina,ID_Vendbanimi,ID_Faza) VALUES('$Emri','$Mbiemri','$Numri_Personal','$Mosha','$Email','$Tel','$ID_Vaksina','$ID_Vendbanimi','$ID_Faza')");
		

		echo "<script>
         setTimeout(function(){
            window.location.href = 'shto_aplikim.php';
         }, 3000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 3 sekonda. <b></p>";
	
	  }

    
 }
 ?>

 </body>
</html>