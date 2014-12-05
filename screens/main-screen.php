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

			<div class="carrosel-box">
				<ul class="carrosel">

					<!--SCREEN 1-->
					<li class="carrosel-item">
						<section class="welcome-box">
							<h1>Bem-vindo ao</h1>
							<div class="logo-box">
								<img src="images/logo.png" width="171" height="154" title="Zoo" alt="Zoo">
								<h2>Buenos Aires</h2>
							</div><!--end logo-box-->
						</section><!--end welcome-box-->
					</li>

					<!--SCREEN 2-->
					<li class="carrosel-item">
						<section class="photos-box">
					
							<div class="description">
								<h1><span>Vida essa experiência</span></h1>
								<p>Tire suas fotos no <img src="images/logo.png" width="26" height="24" title="Zoo" alt="Zoo"><br>e compartilhe suas aventuras<br>nas redes sociais!</p>
							</div><!--end description-->

							<div class="photos-wall">
								<h2>#diadezoo</h2>
								<div class="photos-list">
									
									<div class="photos-list-item">
										<img src="images/user01.png" width="90" height="70" title="Foto de @flavinhasantos" alt="Foto de @flavinhasantos">
										<span>@flavinhasantos</span>
									</div>
									
									<div class="photos-list-item">
										<img src="images/user02.png" width="90" height="70" title="Foto de @fabiocortes" alt="Foto de @fabiocortes">
										<span>@fabiocortes</span>
									</div>
									
									<div class="photos-list-item">
										<img src="images/user03.png" width="90" height="70" title="Foto de @katiafernandes" alt="Foto de @katiafernandes">
										<span>@katiafernandes</span>
									</div>
									
									<div class="photos-list-item">
										<img src="images/user04.png" width="90" height="70" title="Foto de @danielcastilha" alt="Foto de @danielcastilha">
										<span>@danielcastilha</span>
									</div>
									
									<div class="photos-list-item">
										<img src="images/user05.png" width="90" height="70" title="Foto de @mariafernanda" alt="Foto de @mariafernanda">
										<span>@mariafernanda</span>
									</div>
									
									<div class="photos-list-item">
										<img src="images/user06.png" width="90" height="70" title="Foto de @leticiapontes" alt="Foto de @leticiapontes">
										<span>@leticiapontes</span>
									</div>
								</div><!--end photos-list-->
							</div><!--end photos-wall-->
						</section><!--end photos-box-->
					</li>

					<!--SCREEN 3-->
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