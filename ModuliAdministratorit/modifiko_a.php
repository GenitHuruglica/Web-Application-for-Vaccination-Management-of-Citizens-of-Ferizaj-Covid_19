<?php
	include("kontroll.php");	
?>

<?php
include_once("konfigurim.php");

if(isset($_POST['modifiko_a']))
{	
	$ID_Q = $_POST['ID_Q'];
	$Numri_Personal = $_POST['Numri_Personal'];
	$Emri = $_POST['Emri'];
	$Mbiemri = $_POST['Mbiemri'];	
	$Mosha = $_POST['Mosha'];	
	$Email = $_POST['Email'];
	$Tel = $_POST['Tel'];
	$ID_Vendbanimi = $_POST['ID_Vendbanimi'];
	$ID_Vaksina = $_POST['ID_Vaksina'];
	$ID_Faza = $_POST['ID_Faza'];
	
	
	
	if(empty($Numri_Personal) || empty($Emri) || empty($Mbiemri) || empty($Mosha) || empty($Email) || empty($Tel))
    {	
			
		if(empty($Numri_Personal)) {
			echo "<font color='red'>Fusha Numri_Personal eshte e zbrazet.</font><br/>";
		}
		
		if(empty($Emri)) {
			echo "<font color='red'>Fusha Emri eshte zbrazet.</font><br/>";
		}

		if(empty($Mbiemri)) {
			echo "<font color='red'>Fusha Mbiemri eshte e zbrazet.</font><br/>";
		}

		if(empty($Mosha)) {
			echo "<font color='red'>Fusha Mosha eshte e zbrazet.</font><br/>";
		}

		if(empty($Email)) {
			echo "<font color='red'>Fusha Email eshte e zbrazet.</font><br/>";
		}

		if(empty($Tel)) {echo "<font color='red'> Fusha Numri Telefonit eshte e zbrazet.</font><br/>";}
				
	} else {	
		
		$rezultati = mysqli_query($lidh,"UPDATE qytetaret SET Numri_Personal='$Numri_Personal',Emri='$Emri',Mbiemri='$Mbiemri',Mosha='$Mosha',Email='$Email',Tel='$Tel',ID_Vendbanimi='$ID_Vendbanimi',ID_Vaksina='$ID_Vaksina',ID_Faza='$ID_Faza'  WHERE ID_Q=$ID_Q");
		
		header("Location: ballina.php");
	}
}
?>
<?php
$ID_Q = $_GET['ID_Q'];

$rezultati = mysqli_query($lidh,"SELECT * FROM qytetaret WHERE ID_Q=$ID_Q");

while($res = mysqli_fetch_array($rezultati))
{
	$Numri_Personal = $res['Numri_Personal'];
	$Emri = $res['Emri'];
	$Mbiemri = $res['Mbiemri'];	
	$Mosha = $res['Mosha'];
	$Email = $res['Email'];
	$Tel = $res['Tel'];
	$ID_Vendbanimi = $res['ID_Vendbanimi'];
	$ID_Vaksina = $res['ID_Vaksina'];
	$ID_Faza = $res['ID_Faza'];
}
?>
<html>
	<head>
		<title>UMAUE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
		<header id="header">
				<div class="logo">UMVQF-C19 <i class="fa fa-hospital-o" style="font-size:24px;color:red"></i></div>
				<a href="#menu">Mënyt</a>
			</header>

		<!-- Nav -->
		

	    <?php include_once("meny.php"); ?>



		<!-- Banner -->
			
			

			

		<!-- Main -->
			<div id="main">

				<!-- Section -->
					
				<!-- Section -->
					

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<div class="box">
							<h3>SHTO TË DHËNAT E APLIKIMIT TE QYTETARIT PËR MODIFIKIM</h3>

										<form enctype="multipart/form-data" method="post" action="modifiko_a.php" name="form1" >

											<div class="col uniform">
												<div class="6u 12u$(xsmall)">
														<select name="ID_Vaksina" id="ID_Vaksina">
															<option selected="selected">Zgjedh Vaksinen</option>
															<?php
														$res=mysqli_query($lidh,"SELECT * FROM vaksina");
														while($rresht=$res->fetch_array())
														{
															?>
															<option value="<?php echo $rresht['ID_Vaksina']; ?>">
															<?php echo $rresht['Vaksina']; ?>
															</option>
															<?php
														}
														?>
														</select>
													</div>
													<br>
													<div class="6u 12u$(xsmall)">
														<select name="ID_Faza" id="ID_Faza">
															<option selected="selected">Zgjedh FAZEN E VAKSINES</option>
															<?php
														$res=mysqli_query($lidh,"SELECT * FROM faza_v");
														while($rresht=$res->fetch_array())
														{
															?>
															<option value="<?php echo $rresht['ID_Faza']; ?>">
															<?php echo $rresht['Faza']; ?>
															</option>
															<?php
														}
														?>
														</select>
													</div>
													<br>
												<div class="6u 12u$(xsmall)">
													<input type="text" name="Numri_Personal" id="Numri_Personal"  value="<?php echo $Numri_Personal;?>" placeholder="Numri Personal" required /> 
												</div>
												<br>
												<div class="6u$ 12u$(xsmall)">
													<input type="text" name="Emri" id="Emri"  value="<?php echo $Emri;?>" placeholder="Emri" required />
												</div>
											    <br>
											    <div class="6u$ 12u$(xsmall)">
													<input type="text" name="Mbiemri" id="Mbiemri" value="<?php echo $Mbiemri;?>" placeholder="Mbiemri" required />
												</div>
												<br>
												<div class="6u$ 12u$(xsmall)">
													<input type="text" name="Mosha" id="Mosha" value="<?php echo $Mosha;?>" placeholder="Mosha" required />
												</div>
												<br>
												<div class="6u$ 12u$(xsmall)">
													<input type="text" name="Email" id="Email" value="<?php echo $Email;?>" placeholder="Email" required />
												</div>
												<br>
												<div class="6u$ 12u$(xsmall)">
													<input type="text" name="Tel" id="Tel" value="<?php echo $Tel;?>" placeholder="Numri_Telefonit" required />
												</div>
												<br>
                                                <div class="6u 12u$(xsmall)">
												<select name="ID_Vendbanimi" id="ID_Vendbanimi">
													<option selected="selected">Zgjedh Vendbanimin</option>
															<?php
													$res=mysqli_query($lidh,"SELECT * FROM vendbanimi");
														while($rresht=$res->fetch_array())
														{
															?>
															<option value="<?php echo $rresht['ID_Vendbanimi']; ?>">
															<?php echo $rresht['Vendbanimi']; ?>
															</option>
															<?php
												     }
													 ?>
													</select>
													</div>
												
													<br>
												<div class="12u$">
													
														<input type="hidden" name="ID_Q"  value='<?php echo $_GET['ID_Q'];?>' />
														<input type="submit" name="modifiko_a"  value="Modifiko" />
													
												</div>
											</div>
						               </form>         
						</div>
					</section>

			</div>

		<!-- Footer -->
			<?php include_once("fundifaqes.php"); ?>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>