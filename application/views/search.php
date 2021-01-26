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

				.article-img {
		width:35% !important;		
	}

				@media only screen and (max-width: 480px) {
	.article.row-article .article-body {
		float:none !important;
		margin-bottom:15px !important;		
	}
}

@media only screen and (max-width: 767px) {
	.article.row-article .article-body {
		width:100% !important;
		padding-left: 0 !important;
	}

	.article.row-article .article-img {
    width: 100% !important;
}
}

@media (min-width: 992px) {
.col-md-9 {
    width: 80%;
}
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
									<a href="<?= site_url('home'); ?>" class="logo"><img src="<?=base_url().'assets/images/organization/'.$organization->row()->logo?>"alt=""></a>
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
							<a href="<?= site_url('home'); ?>" class="logo"><img src="<?=base_url().'assets/images/organization/'.$organization->row()->icon_logo?>" alt=""></a>
						</div>
						<ul class="main-nav nav navbar-nav">
						<?php 							

							$url_image = "";
							if($type_article == 1){							
							$url_image = base_url().'assets/images/berita/';
							}else if($type_article == 2){								
							$url_image = base_url().'assets/images/article/';
							}else{								
							$url_image = base_url().'assets/images/serba_serbi/';
							} ?>

							<li class="nav-item active">
    <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Semua Rubrik</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Berita</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#references" role="tab" data-toggle="tab">Artikel</a>
  </li>													
  <li class="nav-item">
    <a class="nav-link" href="#references" role="tab" data-toggle="tab">Serba - Serbi</a>
  </li>													
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

		<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="profile">
  	<div class="section top-header" style="padding-bottom: 0;padding-top: 20px;">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row" style="display: flex;justify-content: center;">
					<!-- Main Column -->
					<div class="col-md-9">						

							<!-- ARTICLE -->
							<?php for ($i=1; $i < count($list_article) ; $i++) {
									$font_awesome = "fa fa-camera";
									if($list_article[$i]->media_type == 2){
										$font_awesome = "fa fa-video-camera";
									}
									?> 
						<article class="article row-article" style="margin-bottom: 25px">
							<div class="article-img" style="margin-right:0;">
								<a href="<?= site_url('article/detail/'.$list_article[$i]->article_id); ?>">
									<img src="<?=$url_image.$list_article[$i]->image?>" alt="">
								</a>
							</div>
							<div class="article-body" style="width:65%;float:right;padding-left:30px">
								<ul class="article-info">
									<li class="article-category" style="margin-right: -4px"><a href="#"><?= $type_article_name?></a></li>
									<li class="article-type"><i class="<?= $font_awesome?>"></i></li>
								</ul>
								<h4 style="line-height: 130%" class="article-title"><a href="<?= site_url('article/detail/'.$list_article[$i]->article_id); ?>"><?= $list_article[$i]->title?></a></h4>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i> <?= $list_article[$i]->created_at?></li>
									<li><i class="fa fa-user"></i> <?= $list_article[$i]->created_user?></li>
								</ul>								
							</div>
						</article>
						<!-- /ARTICLE -->												
							<?php
							}
								 ?>										

					</div>					
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
  </div>

  <div role="tabpanel" class="tab-pane fade" id="buzz">Ini Halaman Profile</div>
  <div role="tabpanel" class="tab-pane fade" id="references">Ini Halaman Setting</div>
</div>		

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
									<a href="<?= site_url('home'); ?>" class="logo"><img src="<?=base_url().'assets/images/organization/'.$organization->row()->icon_logo?>" alt=""></a>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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

		<script>
			var url = "<?=site_url('article/load_more_article')?>";
			$(document).ready(function(){

// Load more data
$('.load-more').click(function(){
	var row = Number($('#row').val());
	var allcount = Number($('#all').val());
	var rowperpage = 3;	

	if(row < allcount){		
		$("#row").val(row);

		$.ajax({
			url: url,
			type: 'post',
			data: {row:row, type:"<?=$type_article?>"},
			dataType : 'json',
			beforeSend:function(){
				$(".load-more").text("Loading...");
			},
			success: function(response){				
				setTimeout(function() {										
					$(".article:last").after(response.html).show().fadeIn("slow");

					var rowno = row + rowperpage;
					allcount = response.count_data;
					row = row + rowperpage;
					
					if(rowno > allcount){
						$('.load-more').hide();						
						$(".article:last").css("margin-bottom", "40px");
					}else{
						$(".load-more").html('<a href="javascript:void(0)" id="btn-load-more" class="primary-btn" style="width: 100%">Load More</a>');
					}
				}, 2000);

			}
		});
	}
});
});
		</script>
	</body>
</html>
