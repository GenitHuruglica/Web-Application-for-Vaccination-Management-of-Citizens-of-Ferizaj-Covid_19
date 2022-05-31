<?php
	include("kontroll.php");	
?>
<?php
include_once("konfigurim.php");

if(isset($_POST['modifiko_v']))
{	
	$ID_Vaksina = $_POST['ID_Vaksina'];
	
	$Vaksina=$_POST['Vaksina'];
	
	
	
	if(empty($Vaksina) ) {	
			
		if(empty($Vaksina)) {
			echo "<font color='red'>Fusha Vaksina eshte e zbrazet.</font><br/>";
		}
		
	
	} else {	
	
		$rezultati = mysqli_query($lidh,"UPDATE vaksina SET Vaksina='$Vaksina' WHERE ID_Vaksina=$ID_Vaksina");
		
		
		header("Location: ballina.php");
	}
}
?>

<?php

$ID_Vaksina = $_GET['ID_Vaksina'];


$rezultati = mysqli_query($lidh,"SELECT * FROM vaksina WHERE ID_Vaksina=$ID_Vaksina");

while($res = mysqli_fetch_array($rezultati))
{
	$Vaksina = $res['Vaksina'];
	
}
?>

<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
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
				  
			        
					<section class="wrapper style1">
						
						
					<form Kontinenti="form1" method="post" action="modifiko_v.php">
											<div class="col align-center">
												<h4>KËRKO TË DHËNAT E VAKSINËS PËR MODIFIKIM</h4>
												<hr/>
												<div class="12u$">
													<ul class="actions">
														<li><input type="text" name="Vaksina"  value='<?php echo $Vaksina;?>' placeholder="Vaksina"     required/></li>
														<li><input type="hidden" name="ID_Vaksina"  value='<?php echo $_GET['ID_Vaksina'];?>' placeholder="Vaksina" required/></li>
														<li><input type="submit" name="modifiko_v" value="Modifiko" /></li>
													</ul>
												</div>
											</div>
										</form>
										<hr/>


										<div class="table-wrapper">
											<table>
												<thead>
													<tr>
														<th>Vaksina</th>
														<th>Modifiko</th>
														
													</tr>
												</thead>
												<?php
                                                     if (!empty($_REQUEST['vaksina'])) {
                                                     $term = mysqli_real_escape_string
                                                     ($lidh,$_REQUEST['vaksina']);     
                                                     $sql = mysqli_query($lidh,
                                                     "SELECT * FROM vaksina 
                                                     WHERE Vaksina LIKE '%".$term."%'"); 
                                                     while($rresht = mysqli_fetch_array($sql)) { 		
		                                                  echo "<tr>";
		                                                  echo "<td>".$rresht['Vaksina']."</td>";
		                                                  echo "<td><a href=\"modifiko_v.php?ID_Vaksina=$rresht[ID_Vaksina]\" class='button' class='button primary'>
		                                                  Modifiko</a></td></tr>";		
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