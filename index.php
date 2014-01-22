<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<meta property="og:image" content="assets/img/share.png"/>
		<meta property="og:title" content="Apimenti - Coisas para internet"/>
		<meta property="og:site_name" content="Apimenti - Coisas para internet"/>
		<meta property="og:url" content="http://apimenti.com.br"/>
		<meta property="og:description" content=""/>

		<title>Apimenti - Coisas para internet</title>

		<link rel="icon" type="image/png" href="assets/img/favicon.png">

		<!-- Bootstrap core CSS -->
		<link href="assets/css/bootstrap.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="assets/css/main.css" rel="stylesheet">
		<link href="assets/css/custom.css" rel="stylesheet">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet">

		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->

		<script type="text/javascript">
		$(function(){
		  $('a[data-toggle]').tooltip();
		})
		</script>
	</head>

 	<body>

    	<!-- Fixed navbar -->
		<div class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="" data-toggle="tooltip" data-placement="right" title="Apimenti - Coisas para internet"><img src="assets/img/logo-apimenti.png" alt="Apimenti - Coisas para internet" /></a>
		    </div>
		    <div class="navbar-collapse collapse">
		      <ul class="nav navbar-nav navbar-right">
		        <li class="active"><a href="" data-toggle="tooltip" data-placement="bottom" title="Apimenti - Coisas para internet">Apimenti</a></li>
		        <li><a href="http://agilize.com.br" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Visitar o site da Agilize">Agilize</a></li>
		        <li><a href="http://fazdelivery.com.br" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Visitar o site do fazDelivery">fazDelivery</a></li>
		        <!-- <li><a href="s-engine" data-toggle="tooltip" data-placement="bottom" title="Conheça nosso motor de busca">S-ENGINE</a></li> -->
		        <li><a href="contato" data-toggle="tooltip" data-placement="bottom" title="Entre em contato conosco">Contato</a></li>
		      </ul>
		    </div><!--/.nav-collapse -->
		  </div>
		</div>

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
						Junto ao fazDelivery, desenvolvemos um motor de busca. Implantamos uma busca rápida, eficiente e inteligente em seu projeto.
					</p>
					<p>
						<a href="contato" target="_blank" data-toggle="tooltip" data-placement="bottom" title="entre em contato">entre em contato</a>
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
							4 sócios
							(
							<a href="http://afialho.com" target="_blank">Fialho</a>,
							<a href="http://about.me/jailson" target="_blank">Jailson</a>,
							<a href="https://www.facebook.com/rafael.a.silva.961556" target="_blank">Rafael</a>,
							<a href="http://colar.es/" target="_blank">Thiago</a>
							)
							fundaram em 2009 a Apimenti, com a proposta de levar mais tempeiro para internet.
							Alguns frutos do nosso trabalho:
							<a href="http://gruponotavel.com.br" target="_blank">Portal do Grupo Notável</a>,
							<a href="http://www.ufba.br" target="_blank">Portal da UFBA</a>,
							<a href="http://fazdelivery.com.br" target="_blank">fazDelivery</a> (projeto de inovação aprovado no edital da <a href="http://www.fapesb.ba.gov.br/" target="_blank">FAPESB</a>)
						</p>
					</div>
				</div><!-- /row -->
			</div><!-- /container -->
		</div><!-- /skills -->

		<?php include 'assets/incs/social.php'; ?>

		<?php include 'assets/incs/footer.php'; ?>

	</body>

</html>