<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Gereja Peduli Covid</title>

		<!-- Google font -->
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
		
		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css');?>"/>
		
		<link rel="stylesheet" href="<?php echo base_url('/assets/css/font-awesome.min.css');?>">		

		<link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/home/css/style.css');?>"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
				.button-nav, .button-nav button {
					height: 100%;
				}
			</style>

    </head>
	<body>
	
		<!-- Header -->
		<header id="header">						
			<!-- Center Header -->
			<div id="center-header">
				<div class="container">
					<div class="row header-image" style="margin: 0;display: flex;align-items: center;width: 100%">
							<div class="header-logo col-md-6" style="padding: 0">
									<a href="#" class="logo"><img src="<?=base_url().'./assets/images/organization/'.$organization->row()->logo?>"alt=""></a>
								</div>
								<div class="header-ads col-md-6" style="padding: 0;text-align: center">
									<h3 style="margin: 0;line-height: 1.2;"><em><?=$organization->row()->tagline?></em></h3>
								</div>
					</div>					
				</div>
			</div>
			<!-- /Center Header -->
			
			<!-- Nav Header -->
			<div id="nav-header">
				<div class="container nav-view" style="display: flex;height: 65px;align-items: center;">
					<nav id="main-nav" style="overflow: hidden;height: 100%;">
						<div class="nav-logo">
							<a href="#" class="logo"><img src="<?=base_url().'./assets/images/organization/'.$organization->row()->icon_logo?>" alt=""></a>
						</div>
						<ul class="main-nav nav navbar-nav">
							<li><a href="<?= site_url('home'); ?>">Beranda</a></li>
							<li><a href="<?=site_url('article/berita');?>">Berita</a></li>
							<li><a href="<?=site_url('article');?>">Artikel</a></li>
							<li><a href="<?=site_url('article/serba_serbi');?>">Serba - Serbi</a></li>							
							<li class="active"><a href="#">Donasi</a></li>
							<li><a href="<?= site_url('tentang_kami'); ?>">Tentang Kami</a></li>
						</ul>
					</nav>
					<div class="button-nav" style="margin-left: auto;">
						<button class="search-collapse-btn"><i class="fa fa-search"></i></button>
						<button class="nav-collapse-btn"><i class="fa fa-bars"></i></button>
						<div class="search-form">
							<form>
								<input class="input" type="text" name="search" placeholder="Search">
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /Nav Header -->
		</header>
		<!-- /Header -->					
		<!-- SECTION -->
		<div class="section top-header" style="padding-bottom: 20px;padding-top: 20px;">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">
					<?= $donasi->row()->description?>
					</div>					
					<!-- /Main Column -->					
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- Top Footer -->
			<div id="top-footer" class="section">
				<!-- CONTAINER -->
				<div class="container">
					<!-- ROW -->
					<div class="row">
						<!-- Column 1 -->
						<div class="col-md-4">
							<!-- footer about -->
							<div class="footer-widget about-widget">
								<div class="footer-logo">
									<a href="<?= site_url('home'); ?>" class="logo"><img src="<?=base_url().'./assets/images/organization/'.$organization->row()->icon_logo?>" alt=""></a>
									<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui.</p>
								</div>
							</div>
							<!-- /footer about -->											
						</div>
						<!-- /Column 1 -->												
					</div>
					<!-- /ROW -->
				</div>
				<!-- /CONTAINER -->
			</div>
			<!-- /Top Footer -->
			
			<!-- Bottom Footer -->
			<div id="bottom-footer" class="section">
				<!-- CONTAINER -->
				<div class="container">
					<!-- ROW -->
					<div class="row">
						<!-- footer links -->
						<div class="col-md-6 col-md-push-6">
							<ul class="footer-links">								
								<li><a href="#">Privacy</a></li>
							</ul>
						</div>
						<!-- /footer links -->
						
						<!-- footer copyright -->
						<div class="col-md-6 col-md-pull-6">
							<div class="footer-copyright">
								<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> CV. Cipta Agung Semesta
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
							</div>
						</div>
						<!-- /footer copyright -->
					</div>
					<!-- /ROW -->
				</div>
				<!-- /CONTAINER -->
			</div>
			<!-- /Bottom Footer -->
		</footer>
		<!-- /FOOTER -->
		
		<!-- Back to top -->
		<div id="back-to-top"></div>
		<!-- Back to top -->
		
		<!-- jQuery Plugins -->
		<script src="<?php echo base_url('/assets/home/js/jquery.min.js')?>"></script>				
		<script src="<?php echo base_url('/assets/js/bootstrap.min.js')?>"></script>		
		<script src="<?php echo base_url('/assets/home/js/owl.carousel.min.js')?>"></script>		
		<script src="<?php echo base_url('/assets/home/js/main.js')?>"></script>

	</body>
</html>
