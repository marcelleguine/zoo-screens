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

			<div class="iterative-table">

				<div class="iterative-table-itens">

					<a href="#zooIt" class="zooIt-button"></a>

			    <ul id="zooIt">
			      
			      <li class="item item01">
			      	<a id="zooIt-link01" class="zooIt-link" href="#"><span>História da espécie</span></a>
			      </li>

			      <li class="item item02">
			      	<a  id="zooIt-link02"class="zooIt-link" href="#"><span>Tempo Real</span></a>
			      </li>

			      <li class="item item03">
			      	<a  id="zooIt-link03"class="zooIt-link" href="#"><span>O que eles comem?</span></a>
			      </li>

			      <li class="item item04">
			      	<a  id="zooIt-link04"class="zooIt-link" href="#"><span>Conheça os tigres</span></a>
			      </li>

			      <li class="item item05">
			      	<a  id="zooIt-link05"class="zooIt-link" href="#"><span>Que som produzem?</span></a>
			      </li>

			    </ul>
				</div><!--end iterative-table-itens-->

				<div class="iterative-table-contents" style="display:none;">

					<div class="iterative-table-content iterative-table-content01" style="display:none;">
						<a class="closeItem" href="#"></a>
						<div class="iterative-table-content-inner">
							<?php include("toten/_animal-description.php"); ?>
						</div>
					</div><!--end iterative-table-content-->

					<div class="iterative-table-content iterative-table-content02" style="display:none;">
						<a class="closeItem" href="#"></a>
						<img src="images/tiger-name.png" width="155" height="121" alt="Tony" title="Tony">
					</div><!--end iterative-table-content-->

					<div class="iterative-table-content iterative-table-content03" style="display:none;">
						<a class="closeItem" href="#"></a>

						<div class="iterative-table-content-inner">
							<section class="animal-description">
								<img src="images/circle-tiger.png" width="122px" height="122px" title="Tigre" alt="Tigre">

								<h1>O que eles comem?</h1>

								<p>O tigre (Panthera tigris) é um mamífero da família dos felídeos. Já foi e é encontrado em diversos países da Ásia. Os tigres são predadores de topo. Dentre suas subespécies há o maior entre todos os felinos selvagens. São animais territoriais e solitários.</p>

								<p>É o felino com maior variação de tamanho do mundo, com o tigre-siberiano alcançando até 306 kg enquanto o tigre-de-bali alcançava no máximo 100 kg; tamanho comparável a suçuaranas e leopardos.</p>

								<p>Algumas estimativas sugerem que existem menos de 2.500 indivíduos reprodutores maduros, com nenhuma subpopulação com mais de 250 indivíduos reprodutores maduros. A população era estimada em 100.000 indivíduos no início do século XX. Em tempos atuais, entretanto, apenas cerca de 4.000 indivíduos sobrevivem, uma queda de 97%.</p>
							</section><!--end animal-description-->
						</div>
					</div><!--end iterative-table-content-->

					<div class="iterative-table-content iterative-table-content04" style="display:none;">
						<a class="closeItem" href="#"></a>
						<div class="iterative-table-content-inner">
													
							<section class="animal-description animals-about">
								<img src="images/circle-tiger.png" width="122px" height="122px" title="Tigre" alt="Tigre">
								<h1>Conheça os tigres</h1>
								<?php include("toten/_animals-about.php"); ?>
								<div class="clearfix"></div>
							</section><!--end animal-description-->

						</div>
					</div><!--end iterative-table-content-->

					<div class="iterative-table-content iterative-table-content05" style="display:none;">
						<a class="closeItem" href="#"></a>
						<div class="iterative-table-content-inner">
							<p><span>Conecte seu fone de ouvido</span></p>
						</div><!--end iterative-table-content-inner-->
					</div><!--end iterative-table-content-->

				</div><!--end iterative-table-contents-->

			</div><!--end iterative-table-->

		</div><!--end wrapper-->
		
		<?php include("components/_footer.php"); ?>

	</body>
</html>