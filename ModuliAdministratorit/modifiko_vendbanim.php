<?php
	include("kontroll.php");	
?>
<?php
include_once("konfigurim.php");
$rezultati = mysqli_query($lidh,
"SELECT * FROM vendbanimi ORDER BY ID_Vendbanimi DESC");
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
				  <hr>
			        <div class="box">
					<section class="wrapper style1">
						
						
					<form method="post" action="#">
											<div class="col align-center">
												<h4>KËRKO TË DHËNAT E VENDBANIMIT PËR MODIFIKIM</h4>
												
												<div class="12u$">
													<ul class="actions">
														<li><input type="text" name="vendbanimi" id="vendbanimi" value="" placeholder="Vendbanimi" /></li>
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
														<th>Vendbanimi</th>
														<th>Modifiko</th>
														
													</tr>
												</thead>
												<?php
                                                     if (!empty($_REQUEST['vendbanimi'])) {
                                                     $term = mysqli_real_escape_string
                                                     ($lidh,$_REQUEST['vendbanimi']);     
                                                     $sql = mysqli_query($lidh,
                                                     "SELECT * FROM vendbanimi 
                                                     WHERE Vendbanimi LIKE '%".$term."%'"); 
                                                     while($rresht = mysqli_fetch_array($sql)) { 		
		                                                  echo "<tr>";
		                                                  echo "<td>".$rresht['Vendbanimi']."</td>";
		                                                  echo "<td><a href=\"modifiko_vb.php?ID_Vendbanimi=$rresht[ID_Vendbanimi]\" class='button' class='button primary'>
		                                                  Modifiko</a></td></tr>";		
	}

}

?>
								
												
											</table>
										</div>
					</section>
					</div>
			
					

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