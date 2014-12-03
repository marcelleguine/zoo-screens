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

			<section class="welcome-box" style="display:none;">
				<h1>Bem-vindo ao</h1>
				<div class="logo-box">
					<img src="images/logo.png" width="171" height="154" title="Zoo" alt="Zoo">
					<h2>Buenos Aires</h2>
				</div><!--end logo-box-->
			</section><!--end welcome-box-->

			<section class="photos-box" style="display:none;">
				
				<div class="description">
					<h1><span>Vida essa experiência</span></h1>
					<p>Tire suas fotos no <img src="images/logo.png" width="26" height="24" title="Zoo" alt="Zoo"><br>e compartilhe suas aventuras<br>nas redes sociais!</p>
				</div><!--end description-->

				<div class="photos-wall">
					<h2>#diadezoo</h2>
					<ul>
						<li>
							<img src="images/user01.jpg" width="120" height="120" title="Foto de @flavinhasantos" alt="Foto de @flavinhasantos">
							<span>@flavinhasantos</span>
						</li>
						<li>
							<img src="images/user02.jpg" width="120" height="120" title="Foto de @fabiocortes" alt="Foto de @fabiocortes">
							<span>@fabiocortes</span>
						</li>
						<li>
							<img src="images/user03.jpg" width="120" height="120" title="Foto de @katiafernandes" alt="Foto de @katiafernandes">
							<span>@katiafernandes</span>
						</li>
						<li>
							<img src="images/user04.jpg" width="120" height="120" title="Foto de @danielcastilha" alt="Foto de @danielcastilha">
							<span>@danielcastilha</span>
						</li>
						<li>
							<img src="images/user05.jpg" width="120" height="120" title="Foto de @mariafernanda" alt="Foto de @mariafernanda">
							<span>@mariafernanda</span>
						</li>
						<li>
							<img src="images/user06.jpg" width="120" height="120" title="Foto de @leticiapontes" alt="Foto de @leticiapontes">
							<span>@leticiapontes</span>
						</li>
					</ul>
				</div><!--end photos-wall-->
			</section><!--end photos-box-->

			<div class="map-box">
				<img src="images/map.jpg" width="100%">
			</div><!--end map-box-->

			<section class="events-bar">
				<?php include("components/_events-bar.php") ?>
			</section><!--end events-bar-->
			
		</div><!--end wrapper-->
		
		<?php include("components/_footer.php"); ?>

	</body>
</html>