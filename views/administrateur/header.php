
<!DOCTYPE HTML>

<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->

<?php
	if (!empty($_POST['disconnected'])){
		$_SESSION['login'] = "";
		$_SESSION['pass'] = "";
	}
?>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Savory &mdash; Free Website Template, Free HTML5 Template by GetTemplates.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">



	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<!-- <div class="page-inner"> -->
	<div class="row">
		<nav class="gtco-nav" role="navigation" style="background-image: url(images/img_bg_1.jpg)">
			<div class="gtco-container">
				
				<div class="row">
					<div class="col-sm-4 col-xs-12">
						<div id="gtco-logo"><a href="home">FBMO <em>Vos Chaussures.</em></a></div>
					</div>
					<div class="col-xs-8 text-right menu-1">
						<ul>
							<li class="active"><a href="home">Menu</a></li>
							<li class="has-dropdown">
								<a href="services.html">par catégorie</a>
								<ul class="dropdown">
									<li><a href="#">Homme</a></li>
									<li><a href="#">Femme</a></li>
									<li><a href="#">Enfant</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Promotion</a></li>
							<li><?php 
							if(empty($_SESSION)) { echo "<li><a href=\"connect\">se connecter</a></a></li>" ;} ?>
							<?php if(empty($_SESSION)) { echo " <li><a href=\"register\">S'inscrire!</a></li>" ;} ?>
					<?php if(empty($_SESSION)) { echo "<li><a href=\"panier\">panier</a></li> ";} ?> 
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</div>
	<div class = "gtco-connected">
		<p style="color:green;"> Account : </p>
		<?php
		if(!empty($_SESSION)){
			echo $_SESSION['login'] ; } ?> <br />
			<?php if(!empty($_SESSION)){ echo $_SESSION['nom'] ; }?>
		<?php 	if(!empty($_SESSION)) { echo "<form id=\"myForm\" action=\"http://localhost/ProjetWebSecu/deco\"  method=\"POST\"> " ;} ?>
	<?php 	if(!empty($_SESSION)) { echo "<form id=\"myForm\" action=\"http://localhost/ProjetWebSecu/deco\"  method=\"POST\">  " ;}?>
		
			<?php 	if(!empty($_SESSION)) { echo "<button id=\"sub\"  type= \"submit\" name=\"submit\">seconnecter</button> " ; } ?>
		<?php 	if(!empty($_SESSION)) { echo "</form>"  ; }?>
		<a id="adminAccess"></a><!--<a id="adminAccess" href="administrateur">adminPage</a>-->
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<script src="js/moment.min.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>


	<!-- Main -->
	<script src="js/main.js"></script>
	<script src="js/header.js"></script>

	</body>
</html>

