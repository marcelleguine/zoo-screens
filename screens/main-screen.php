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

			<section class="welcome-box">
				<h1>Bem vindo ao</h1>
				<div class="logo-box">
					<img src="images/logo.png" width="171" height="154" title="Zoo" alt="Zoo">
					<h2>Buenos Aires</h2>
				</div><!--end logo-box-->
			</section><!--end welcome-box-->

			<section class="events-bar">
				<?php include("components/_events-bar.php") ?>
			</section><!--end events-bar-->
			
		</div><!--end wrapper-->
		
		<?php include("components/_footer.php"); ?>

	</body>
</html>