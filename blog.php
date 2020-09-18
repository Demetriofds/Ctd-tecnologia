<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Blog da CTD Tecnologia</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="utf-8"> <!-- nova tag  -->
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="Blog da CTD Tecnologia e Consultoria TOTVS.">
		<meta name="copyright" content="© 2018 Thiago">
		<!-- <meta name="geo.region" content="BR-SP">
		<meta name="geo.country" content="Brasil"> -->
		<meta name="keywords" content="Blog da CTD Tecnologia ERP, TOTVS"/>

		<meta property="og:url" content="https://www.ctdtecnologia.com.br/"/>
		<meta property="og:type" content="website">
		<meta property="og:title" content="CTD Tecnologia - Sistemas ERP TOTVS Protheus">
		<meta property="og:description"  content="Blog da CTD Tecnologia"/>
		<meta property="og:image" content="https://www.ctdtecnologia.com.br/imagens/banner-servicos-erp-fundo.png"/>
		<meta property="og:site_name" content="CTD Tecnologia">
		<meta property="article:tag" content="Informações, Notícias, ERP, CRM, Legislação, tributação,"/>
		<meta property="fb:admins" content="thiago.dejesus.180410"/>

		<!-- //custom-theme -->
		<link rel="canonical" href="https://www.ctdtecnologia.com.br/"/>
		<link rel="shortcut icon" href="imagens/ctd-tecnologia-favicon.jpg" type="image/x-icon">
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/JiSlider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all">

		<!-- font-awesome-icons -->
		<link href="css/font-awesome.css" rel="stylesheet">
		<!-- //font-awesome-icons -->
		<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-MTJWQBF');</script>
		<!-- End Google Tag Manager -->
	</head>
	<body>
			<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MTJWQBF"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<!-- header -->
		<div class="banner-top">
			<!-- includes to topo -->
			<?php include_once('includes/topo-end-social.php'); ?>
			<div class="w3_navigation">
				<div class="container">
					<nav class="navbar navbar-default">
						<div class="navbar-header navbar-left">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<h1><a class="navbar-brand" href="index.php">CTD Tecnologia - blog</a></h1>
						</div>
						<!-- Menu -->
						<?php include_once('includes/menu.php'); ?>
					</nav>
				</div>
			</div>
		
			<!-- //header -->
			<div class="banner-topo-blog"></div>
			<!--breadcrumbs -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="index.php">Home</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Blog</li>
				</ol>
			</nav>
			<!-- //breadcrumbs -->
			<!-- about-page -->
			<div class="about">
				<div class="container">
					<div class="w3-heading-all">
						<h2>Informações ERP TOTVS</h2>
						<div class="clearfix"> </div>
						<section class="caixas">
							<div>
								<p>Aqui deixaremos você informado sobre atualizações de extrema relevância para o seu negócio</p>
							</div>
						</section>
					</div>

					<div class="clearfix"> </div>
					<Section class="caixas-blog ">
						<div class="alert alert-info" role="alert">
							<h2>Instrução Normativa</h2>
							<p>17/08/2020</p>
							<div class="more">
								<a href="blog/prorrogacao-de-prazo.php">Link</a>
							</div>
						</div>
						<div class="alert alert-info" role="alert">
							<h2>O que é ERP</h2>
							<p>16/09/2020</p>
							<div class="more">
								<a href="blog/o-que-e-erp.php">Link</a>
							</div>
						</div>
					</Section>
				</div>
			</div>
		</div>

		<?php include_once('includes/rodape.php'); ?>

		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

			<!-- js -->
		<script src="js/jquery-2.1.4.min.js"></script>
		<!-- js for Counter -->
		<script type="text/javascript" src="js/numscroller-1.0.js"></script>
		<!-- /js for Counter -->
		<script src="js/SmoothScroll.min.js"></script>
		<!-- start-smooth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>

		<!-- here stars scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear'
					};
				*/

				$().UItoTop({ easingType: 'easeOutQuart' });

				});
		</script>
		<!-- //here ends scrolling icon -->

		<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
	</body>
</html>