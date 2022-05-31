
<?php
	include("konfigurim.php");

?>
<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>UMVQF-C19</title>
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
							<h3>SHTO TË DHËNAT PËR REGJISTRIMN</h3>

										<form enctype="multipart/form-data" method="post" action="shto_q.php" >

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
															<option selected="selected">Zgjedh Fazën e Vaksinës</option>
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
													<input type="text" name="Numri_Personal" id="Numri_Personal" value="" maxlength="10" minlength="10" size="10" placeholder="Numri_Personal" />
												</div>
												<br>
												<div class="6u$ 12u$(xsmall)">
													<input type="text" name="Emri"  value="" placeholder="Emri" />
												</div>
											    <br>
											    <div class="6u$ 12u$(xsmall)">
													<input type="text" name="Mbiemri" value="" placeholder="Mbiemri" />
												</div>
												<br>
				                                 <div class="6u$ 12u$(xsmall)">
													<input  type="text" name="Mosha" value="" placeholder="Mosha" />
												</div>
												<br>
												 <div class="6u$ 12u$(xsmall)">
													<input type="text" name="Email" value="" placeholder="E-mail" />
												</div>
												<br>
												 <div class="6u$ 12u$(xsmall)">
													<input type="text" name="Tel" value="" placeholder="Numri Telefonit" />
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
												<div class="6u 12u$(xsmall)">
													<ul class="actions">
														<li><input type="submit" name="shto_q"  value="Shto" /></li>
													</ul>
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

















