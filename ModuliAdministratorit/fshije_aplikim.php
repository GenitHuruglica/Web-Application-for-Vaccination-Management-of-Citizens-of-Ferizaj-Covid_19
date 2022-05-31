<?php
	include("kontroll.php");	
?>
<?php
include_once("konfigurim.php");

$rezultati = mysqli_query($lidh,
"SELECT * FROM qytetaret ORDER BY ID_Q DESC");
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
			

				<!-- Section -->
				  <hr>
			        <div class="box">
					<section class="wrapper style1">
						
						
				                    	<form method="post" action="#">
											<div class="col align-center">
												
												<h4>KËRKO TË DHËNAT E APLIKIMIT TE QYTETARIT PËR FSHIRJE</h4>
												
												<div class="12u$">
													<ul class="actions">
														<li><input type="text" name="fshije_a"  value="" placeholder="Emri" /></li>
														<li><input type="submit" value="Kerko" /></li>
													</ul>
												</div>
											</div>
										</form>
										<hr/>


										<div class="table-wrapper">
											<table>
												<thead>
													<tr>
														<th>Numri_Personal</th>
														<th>Emri</th>
														<th>Mbiemri</th>
														<th>Mosha</th>
														<th>Email</th>
														<th>Numri_Telefonit</th>
														<th>Vendbanimi</th>
														<th>Vaksina</th>
														<th>Faza</th>
														<th>Data_Aplikimit</th>
														<th>Data_Vaksinimit</th>
														<th>Fshije</th>
													</tr>
												</thead>
												
<?php
	if (!empty($_REQUEST['fshije_a'])) {

	$term = mysqli_real_escape_string($lidh,$_REQUEST['fshije_a']);     

	$sql = mysqli_query($lidh,	
"SELECT
	s.ID_Q,
  s.Numri_Personal,
  s.Emri,
  s.Mbiemri,
  k.Vendbanimi,
  v.Vaksina,
  f.Faza,
  s.Mosha,
  s.Email,
  s.Tel,
  s.Data_A,
  s.Data_V

FROM
  qytetaret s
INNER JOIN
  vendbanimi k ON s.ID_Vendbanimi = k.ID_Vendbanimi
INNER JOIN
  vaksina v ON s.ID_Vaksina = v.ID_Vaksina
INNER JOIN
  faza_v f ON s.ID_Faza = f.ID_Faza  
WHERE
  s.Emri LIKE '%".$term."%'"
	); 

	while($rresht = mysqli_fetch_array($sql)) { 		
			echo "<tr>";
			echo "<td>".$rresht['Numri_Personal']."</td>";
			echo "<td>".$rresht['Emri']."</td>";
			echo "<td>".$rresht['Mbiemri']."</td>";
			echo "<td>".$rresht['Mosha']."</td>";
			echo "<td>".$rresht['Email']."</td>";
			echo "<td>".$rresht['Tel']."</td>";
			echo "<td>".$rresht['Vendbanimi']."</td>";	
			echo "<td>".$rresht['Vaksina']."</td>";	
			echo "<td>".$rresht['Faza']."</td>";
			echo "<td>".$rresht['Data_A']."</td>";
			echo "<td>".$rresht['Data_V']."</td>";
			
			
			
			echo "<td><a href=\"fshije_a.php?ID_Q=$rresht[ID_Q]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini qytetarin?')\" class='button' class='button primary'>Fshijë</a>
		</td></tr>";			
		}

	}

	?>
													
												
											</table>
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

