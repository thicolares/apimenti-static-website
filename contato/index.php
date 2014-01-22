<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<meta property="og:image" content="../assets/img/share.png"/>
		<meta property="og:title" content="Apimenti - Coisas para internet"/>
		<meta property="og:site_name" content="Apimenti - Coisas para internet"/>
		<meta property="og:url" content="http://apimenti.com.br"/>
		<meta property="og:description" content=""/>

		<title>Apimenti - Coisas para internet</title>

		<link rel="icon" type="image/png" href="../assets/img/favicon.png">

		<!-- Bootstrap core CSS -->
		<link href="../assets/css/bootstrap.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="../assets/css/main.css" rel="stylesheet">
		<link href="../assets/css/custom.css" rel="stylesheet">
		<link href="../assets/css/font-awesome.min.css" rel="stylesheet">

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
		      <a class="navbar-brand" href="" data-toggle="tooltip" data-placement="right" title="Apimenti - Coisas para internet"><img src="../assets/img/logo-apimenti.png" alt="Apimenti - Coisas para internet" /></a>
		    </div>
		    <div class="navbar-collapse collapse">
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="../" data-toggle="tooltip" data-placement="bottom" title="Apimenti - Coisas para internet">Apimenti</a></li>
		        <li><a href="http://agilize.com.br" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Visitar o site da Agilize">Agilize</a></li>
		        <li><a href="http://fazdelivery.com.br" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Visitar o site do fazDelivery">fazDelivery</a></li>
		        <!-- <li><a href="s-engine" data-toggle="tooltip" data-placement="bottom" title="Conheça nosso motor de busca">S-ENGINE</a></li> -->
		        <li class="active"><a href="contato" data-toggle="tooltip" data-placement="bottom" title="Entre em contato conosco">Contato</a></li>
		      </ul>
		    </div><!--/.nav-collapse -->
		  </div>
		</div>

		<div class="container">
			<div class="row mt centered grid">
				<h3>ENTRE EM CONTATO CONOSCO</h3>
			</div>

			<div class="row mt centered">
				<div class="col-lg-12 mt">
					<form id="contactForm" class="form-vertical" method="post">
						<div class="control-group">
							<label class="control-label" for="txtName">nome</label>
							<div class="controls">
								<input type="text" name="txtName" id="txtName" autocomplete="off" class="input-xlarge" maxlength="150" />
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="txtEmail">e-mail</label>
							<div class="controls">
								<input type="text" name="txtEmail" id="txtEmail" autocomplete="off" class="input-xlarge" maxlength="150" />
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="txtMessage">mensagem</label>
							<div class="controls">
								<textarea name="txtMessage" id="txtMessage" class="input-xxlarge" cols="30" rows="6"></textarea>
							</div>
						</div>

						<div class="control-group">
							<div id="responseMsg"></div>
							<input id="btn-submit" type="submit" class="btn btn-warning" value="Enviar" />
						</div>
					</form>
				</div>
			</div>
		</div>

		<?php include '../assets/incs/social.php'; ?>

		<?php include '../assets/incs/footer.php'; ?>

	</body>

</html>