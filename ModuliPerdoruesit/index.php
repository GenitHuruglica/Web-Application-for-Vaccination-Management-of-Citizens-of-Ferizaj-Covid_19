<?php include_once("konfigurim.php"); ?>
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
		<?php include_once("koka.php"); ?>

		<!-- Nav -->
		<?php include_once("meny.php"); ?>

		<!-- Banner -->
			

			

		<!-- Main -->
			
				<br>
				<header class="align-center">
							<h2>KUJDES! Mbaje distancën, mbrojë vetën dhe të tjerët.</h2>
				</header>
                
				<!-- Section -->
				<div class="box">
				<section class="wrapper style1">
						<div class="inner">
							<!-- 2 Columns -->
								<div class="flex flex-2">
									<div class="col col1">
										<br><br>
										<div class="image round fit">
											<a href="generic.html" class="link"><img src="images/c.jpg" alt="" /></a>
										</div>
									</div>
									<div class="col col2">
										<h3>Vaksinimi COVID-19 Ferizaj</h3>
										<p>COVID-19, shkurtimisht për "sëmundjen e koronavirusit 2019", është emri i sëmundjes së shkaktuar nga koronavirusi SARS-CoV-2.Ajo është përhapur kaq shpejt dhe në kaq shumë vende sa Organizata Botërore e Shëndetësisë e ka shpallur atë një pandemi (një term që tregon se ka prekur një popullsi të madhe, rajon, vend ose kontinent).</p>
										<p>Disa njerëz të infektuar me virus nuk kanë simptoma. Kur virusi shkakton simptoma, ato të zakonshmet përfshijnë ethe, dhimbje trupi, kollë të thatë, lodhje, të dridhura, dhimbje koke, dhimbje fyti, humbje të oreksit dhe humbje të nuhatjes. Në disa njerëz, COVID-19 shkakton simptoma më të rënda si ethe të larta, kollë të rëndë dhe gulçim, të cilat shpesh tregojnë pneumoni. </p>
										
									</div>
								</div>
						</div>
					</section>
				</div>
					<section class="wrapper style2">
						<div class="inner">
							<div class="flex flex-2">
								<div class="4u 12u$(medium)">
									<div class="box">
									<h3>A është e sigurt vaksina COVID-19 ?</h3>
									<p>PO, vaksina COVID-19 është e sigurt dhe efektive. Miliona njerëz në të gjith botën janë vaksinuar. Qendra për Kontrollin dhe Parandalimin e Sëmundjeve rekomandon që të merrni vaksinen sa më parë që ju jepet mundësia.</p>
								</div>
							</div>
								<div class="4u 12u$(medium)">
									<div class="box">
									<h3>Si të regjistrohem për vaksinim ?</h3>
									<p>Në këtë <a href="kerkese.php">link</a> mund të regjistroheni duke dhënë të dhënat personale, dhe pastaj pranoni një e-mail ku do informoheni për kohën dhe lokacionin për vaksinim.</p>.
								</div>
								</div>
								<div class="4u$ 12u$(medium)">
									<div class="box">
									<h3>Sa kushton vaksinimi COVID-19 ?</h3>
									
									<p>Asgjë, ju mund të vaksinoheni falas, vaksina COVID-19 është financuara nga Ministria e Shëndetësis. <br><br><br><br></p>
								</div>
								</div>
							</div>
						</div>
					</section>
                      <div class="box">
					<section class="wrapper style1">
						<div class="inner">
							
							<div class="align-center">
							<div class="box">
                                             
												<h2>LLOJET E VAKSINËS COVID-19</h2>
												<hr>
												<?php
            $rezultati = mysqli_query($lidh, "SELECT  Vaksina FROM vaksina s
ORDER BY ID_Vaksina DESC");
            while ($rresht = mysqli_fetch_assoc($rezultati)) {

              extract($rresht);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
												<ul class="alt">
													<li><h4><?php echo $Vaksina; ?></h4></li>
													<hr>
												</ul>
							
							 <?php } ?>
						</div>
						</div>
						</section>
					</div>
						
						<section class="wrapper style2">
							<div class="align-center">
								<h4>Për tu regjistruar për vaksinë COVID-19 mund të kyceni <a href="kerkese.php" class="button small">këtu.</a></h4>
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
