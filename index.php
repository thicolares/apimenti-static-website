<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<?php include 'assets/incs/head.php'; ?>
	</head>

 	<body>

    	<?php include 'assets/incs/navbar.php'; ?>


		<div id="hello">
		    <div class="container">
		    	<div class="row">
		    		<div class="col-lg-8 col-lg-offset-2 centered">
		    			<h1>APIMENTI</h1>
		    			<h2>
		    				Há 
		    				<?php
					          $foundingDate = new DateTime('2009-08-28');
					          $today        = new DateTime();
					          echo $today->format('Y') - $foundingDate->format('Y');
					        ?>
		    				anos tempeirando a internet
		    			</h2>
		    		</div><!-- /col-lg-8 -->
		    	</div><!-- /row -->
		    </div> <!-- /container -->
		</div><!-- /hello -->

		<div id="green">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 centered">
						<img src="assets/img/iphone.png" alt="">
					</div>

					<div class="col-lg-7 centered">
						<h3>“Falar é fácil. Mostre-me o código” ― Linus Torvalds</h3>
						<p>
							
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row mt centered grid">
				<h3>MOLHOS DE PIMENTA</h3>

				<div class="mt"></div>
				<div class="col-lg-4 product">
					<div class="product-logo centered">
						<a href="http://agilize.com.br" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Visitar o site da Agilize">
							<img src="assets/img/logo-agilize.png" alt="Agilize Contabilidade Online">
						</a>
					</div>
					<p>
						Escritório de contabilidade para micro e pequenas empresas, profissionais liberais e autônomos,  prestadores de serviço.
					</p>
					<p>
						<a href="http://agilize.com.br" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Visitar o site da Agilize">agilize.com.br</a>
					</p>
				</div>
				<div class="col-lg-4 product">
					<div class="product-logo centered">
						<a href="http://fazdelivery.com.br" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Visitar o site do fazDelivery">
							<img src="assets/img/logo-fazdelivery.png" alt="fazDelivery">
						</a>
					</div>
					<p>
						Todas as informações sobre delivery em um só lugar. Jogue fora seus ímãs e panfletos, conheça o fazDelivery.
					</p>
					<p>
						<a href="http://fazdelivery.com.br" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Visitar o site do fazDelivery">fazdelivery.com.br</a>
					</p>
				</div>
				<div class="col-lg-4 product">
					<div class="product-logo centered">
						<a href="s-engine" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Conheça nosso motor de busca">
							<img src="assets/img/logo-s-engine.png" alt="S-ENGINE motor de busca">
						</a>
					</div>
					<p>
						Todas as informações sobre delivery em um só lugar. Jogue fora seus ímãs e panfletos, conheça o fazDelivery.
					</p>
					<p>
						<a href="s-engine" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Conheça nosso motor de busca">apimenti.com.br/s-engine</a>
					</p>
				</div>
			</div>

			<div class="row mt centered">
				<div class="col-lg-12 mt">
					<h4>Estes são os negócios aos quais nos dedicamos atualmente.</h4>
				</div>
			</div>
		</div>

		<div id="skills">
			<div class="container">
				<div class="row centered">
					<h3>APIMENTI... DE APIMENTAR</h3>
					<div class="col-lg-10 col-lg-offset-1 mt">
						<p>
							Os sócios
							(
							<a href="http://afialho.com" target="_blank">Fialho</a>,
							<a href="http://about.me/jailson" target="_blank">Jailson</a>,
							<a href="https://www.facebook.com/rafael.a.silva.961556" target="_blank">Rafael</a>,
							<a href="http://colar.es/" target="_blank">Thiago</a>
							)
							fundaram a empresa com o propósito de levar o tempeiro baiano para internet.
						</p>
					</div>
				</div><!-- /row -->
			</div><!-- /container -->
		</div><!-- /skills -->

		<?php include 'assets/incs/social.php'; ?>

		<?php include 'assets/incs/footer.php'; ?>

	</body>

</html>