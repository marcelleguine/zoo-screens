<?php
# cd ~/Documents/estudos/DCU/08-design-interacao/zoo-screens/screens
# php build.php
?>

<!DOCTYPE html>
<html>
	
	<head>
		<?php include("components/_head.php"); ?>
	</head>

	<body>

		<div class="wrapper">
			<div class="color-bar">
				<?php include("components/_color-bar.php") ?>
			</div><!--end color-bar-->

			<div id="regionalScreen">
				<ul class="carrosel">

					<!--SCREEN 1-->
					<li class="carrosel-item">
						
						<section class="animals-description">

							<section class="animal animal01">
								
								<div class="img-box">
									<img src="images/animal-elephant.png" width="90" height="83" title="Elefante" alt="Elefante">
								</div><!--end img-box-->
								
								<div class="animal-txt">
									<h1>Elefante</h1>
									<p>Elefante é o termo genérico e popular pelo qual são denominados os membros da família Elephantidae, de grande porte, do qual há três espécies no mundo atual.</p>
								</div><!--end animal-txt-->

							</section><!--end animal-->

							<section class="animal animal02">

								<div class="img-box">
									<img src="images/animal-monkey.png" width="70" height="83" title="Chimpanzé" alt="Chimpanzé">
								</div><!--end img-box-->
								
								<div class="animal-txt">
									<h1>Chimpanzé</h1>
									<p>O termo chimpanzé aplica-se aos primatas do gênero Pan, da família Hominidae, subfamília Homininae.</p>
								</div><!--end animal-txt-->

							</section><!--end animal-->

							<section class="animal animal03">
								
								<div class="img-box">
									<img src="images/animal-zebra.png" width="60" height="97" title="Zebra" alt="Zebra">
								</div><!--end img-box-->
								
								<div class="animal-txt">
									<h1>Zebra</h1>
									<p>As zebras são mamíferos, membros da mesma família dos cavalos, os equídeos, nativos da África central e do sul. </p>
								</div><!--end animal-txt-->

							</section><!--end animal-->

							<section class="animal animal04">

								<div class="img-box">
									<img src="images/animal-lion.png" width="71" height="83" title="Leão" alt="Leão">
								</div><!--end img-box-->

								<div class="animal-txt">
									<h1>Leão</h1>
									<p>O leão é uma espécie de mamífero carnívoro do gênero Panthera e da família Felidae.</p>
								</div><!--end animal-txt-->

							</section><!--end animal-->

						</section><!--end animals-description-->

					</li>

					<!--SCREEN 2-->
					<li class="carrosel-item">
						<section class="map-box">
							<img src="images/map.jpg" width="100%">
						</section><!--end map-box-->
					</li>
				</ul>
			</div><!--end mainScreen-->

			<section class="events-bar">
				<?php include("components/_events-bar.php") ?>
			</section><!--end events-bar-->
			
		</div><!--end wrapper-->
		
		<?php include("components/_footer.php"); ?>

	</body>
</html>