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
						<?php include("toten/_animal-description.php"); ?>
					</li>

					<!--SCREEN 2-->
					<li class="carrosel-item">
						<section class="animals-about">
							<h1>Tigres</h1>
							
							<?php include("toten/_animals-about.php"); ?>
						</section><!--end animals-about-->
					</li>

					<!--SCREEN 3-->
					<li class="carrosel-item">
						<section class="tigers-names">
							<img src="images/tigers-names.jpg" width="100%">
						</section><!--end tigers-names-->
					</li>

				</ul>
			</div><!--end mainScreen-->

		</div><!--end wrapper-->
		
		<?php include("components/_footer.php"); ?>

	</body>
</html>