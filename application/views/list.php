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
}
.modal {
  z-index: -1;
  display: flex !important;
  justify-content: center;
  align-items: center;
}

.modal-open .modal {
   z-index: 1050;
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
							$berita_status = "";
							$article_status = "";
							$serbaserbi_status = "";
							$berita_url = "#";
							$article_url = "#";
							$serbaserbi_url = "#";

							$url_image = base_url().'assets/images/';
							if($type_article == 1){
								$berita_status = "active";
								$article_url = site_url('article');
							$serbaserbi_url = site_url('article/serba_serbi');							
							}else if($type_article == 2){
								$article_status = "active";
								$berita_url = site_url('article/berita');
							$serbaserbi_url = site_url('article/serba_serbi');							
							}else{
								$serbaserbi_status = "active";
								$berita_url = site_url('article/berita');
							$article_url = site_url('article');							
							} ?>
							<li><a href="<?= site_url('home'); ?>">Beranda</a></li>
							<li class="<?=$berita_status?>"><a href="<?=$berita_url?>">Berita</a></li>
							<li class="<?=$article_status?>"><a href="<?=$article_url?>">Artikel</a></li>
							<li class="<?=$serbaserbi_status?>"><a href="<?=$serbaserbi_url?>">Serba - Serbi</a></li>
							<li><a href="<?= site_url('donasi'); ?>">Donasi</a></li>
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
					
		<div class="section top-header" style="padding-bottom: 0;padding-top: 20px;">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<?php if ($list_article != FALSE) {
						$first_image = base_url().'assets/images/'.$list_article->result()[0]->image;
						if(!file_exists(getcwd().'/assets/images/'.$list_article->result()[0]->image)){
							$first_image = base_url().'assets/img/no-photo.png';
						}
						 ?>
					<!-- Main Column -->
					<div class="col-md-8">
						<div class="popular-post-wrap" style="padding-bottom: 15px">								
								<div class="feature-post relative">
									<div class="feature-img relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="<?=$first_image?>" alt="">
									</div>
									<?php
									$font_awesome_newest_article = "fa fa-camera";
									if($list_article->result()[0]->media_type == 2){
										$font_awesome_newest_article = "fa fa-video-camera";
									}
									 ?>
									<div class="details">
										<ul class="tags">
                                            <li style="margin-right: -4px;text-transform:uppercase"><a href="#"><?=$type_article_name?></a></li>
                                            <li style="background-color: #222;width: 30px;text-align: center;padding-left: 0;padding-right: 0"><i class="<?=$font_awesome_newest_article?>"></i></li>
										</ul>
										<a href="<?= site_url('article/detail/'.$list_article->result()[0]->article_id); ?>">
											<h3 style="font-size: 24px"><?=$list_article->result()[0]->title?></h3>
										</a>
										<ul class="meta">	
											<li><a href="<?= site_url('article/detail/'.$list_article->result()[0]->article_id); ?>"><span class="lnr fa fa-clock-o"></span><?=$list_article->result()[0]->reviewed_at?></a></li>
											<li><a href="<?= site_url('article/detail/'.$list_article->result()[0]->article_id); ?>"><span class="lnr fa fa-user"></span><?=$list_article->result()[0]->created_user?></a></li>										
										</ul>
									</div>
								</div>

								<?php if (count($list_article->result()) > 1) {
									$total_article = 3;
									if (count($list_article->result()) < $total_article) {
										$total_article = count($list_article->result());
									}
								 ?>
									<div class="row mt-10 medium-gutters top-list" style="margin-bottom: 20px;">
									<?php for ($i=1; $i < $total_article ; $i++) {
										${"article_image" . $i} = base_url().'assets/images/'.$list_article->result()[$i]->image;
										if(!file_exists(getcwd().'/assets/images/'.$list_article->result()[$i]->image)){
											${"article_image" . $i} = base_url().'assets/img/no-photo.png';
										}
										
									$font_awesome = "fa fa-camera";
									if($list_article->result()[$i]->media_type == 2){
										$font_awesome = "fa fa-video-camera";
									}
									?> 
									<div class="col-md-6 detail-header">
										<div class="single-popular-post" style="position: relative;">
										<div class="feature-img-wrap relative">
											<div class="feature-img relative">
												<div class="overlay overlay-bg"></div>
												<img class="img-fluid" src="<?=${"article_image" . $i}?>" alt="">
											</div>											
										</div>
										<div class="top-post-details">
									<ul class="tags">
                                            <li style="margin-right: -4px;padding: 4px 0"><a href="#" style="padding: 0 20px;text-transform:uppercase"><?=$type_article_name?></a></li>
                                            <li style="background-color: #222;width: 30px;text-align: center;padding-left: 0;padding-right: 0"><i class="<?=$font_awesome?>"></i></li>
									</ul>
									<a href="<?= site_url('article/detail/'.$list_article->result()[$i]->article_id); ?>">
										<h4><?=$list_article->result()[$i]->title?></h4>
									</a>
									<ul class="meta">										
										<li><a href="<?= site_url('article/detail/'.$list_article->result()[$i]->article_id); ?>"><span class="lnr fa fa-clock-o"></span><?=$list_article->result()[$i]->reviewed_at?></a></li>						
										<li><a href="<?= site_url('article/detail/'.$list_article->result()[$i]->article_id); ?>"><span class="lnr fa fa-user"></span><?=$list_article->result()[$i]->created_user?></a></li>
									</ul>
								</div>
							</div>
									</div>	
									<?php } ?>								

								</div>									
								<?php } ?>
								
							</div>

							<!-- ARTICLE -->
							<?php 
							if (count($list_article->result()) > 3) { 
								for ($i=3; $i < count($list_article->result()) ; $i++) {
									${"article_image" . $i} = base_url().'assets/images/'.$list_article->result()[$i]->image;
										if(!file_exists(getcwd().'/assets/images/'.$list_article->result()[$i]->image)){
											${"article_image" . $i} = base_url().'assets/img/no-photo.png';
										}
									$font_awesome = "fa fa-camera";
									if($list_article->result()[$i]->media_type == 2){
										$font_awesome = "fa fa-video-camera";
									}
									?> 
						<article class="article row-article" style="margin-bottom: 25px">
							<div class="article-img" style="margin-right:0">
								<a href="<?= site_url('article/detail/'.$list_article->result()[$i]->article_id); ?>">
									<img src="<?=${"article_image" . $i}?>" alt="">
								</a>
							</div>
							<div class="article-body" style="width:50%;float:right;padding-left:30px">
								<ul class="article-info">
									<li class="article-category" style="margin-right: -4px"><a href="#"><?= $type_article_name?></a></li>
									<li class="article-type"><i class="<?= $font_awesome?>"></i></li>
								</ul>
								<h4 class="article-title"><a href="<?= site_url('article/detail/'.$list_article->result()[$i]->article_id); ?>"><?= $list_article->result()[$i]->title?></a></h4>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i> <?= $list_article->result()[$i]->reviewed_at?></li>
									<li><i class="fa fa-user"></i> <?= $list_article->result()[$i]->created_user?></li>
								</ul>
								<p><?php
								$short = substr(strip_tags(trim($list_article->result()[$i]->description)),0,145);
										if(strlen(trim($list_article->result()[$i]->description)) > 145){
											$short .= "...";
										}
										echo $short;
								?></p>
							</div>
						</article>
						<!-- /ARTICLE -->												
							<?php
							}	
							 }
							
									if($total_rows > 8){ ?>
										<div class="load-more" style="margin-bottom: 0;padding-bottom: 25px;">
                                <a href='javascript:void(0)' class="primary-btn" style="width: 100%">Load More</a>
                            </div>
									<?php }
									 ?>	
									 <input type="hidden" id="row" value="8">
            <input type="hidden" id="all" value="<?php echo $total_rows; ?>">							                        

					</div>
					<!-- /Main Column -->

					<?php if ($tags != FALSE || $article_populer != FALSE) { ?>
						<!-- Aside Column -->
					<div class="col-md-4">
						<!-- Ad widget -->
						<div class="how2 how2-cl4 flex-s-c" style="display: flex;align-items: center;margin-bottom: 15px;">
								<h4 class="f1-m-2 cl3 tab01-title" style="margin: 0;">
									TOPIK TERPOPULAR
								</h4>
						</div>
						<!-- /Ad widget -->
						
						<?php if ($tags != FALSE) { ?>
							<div style="padding-bottom: 45px;">
							<div class="flex-wr-s-s" style="margin: -5px;display: flex;flex-wrap: wrap;">
							<?php
									foreach($tags->result() as $row){ ?>
								<a href="#" class="flex-c-c size-h-2 bocl12 f1-s-1 cl8 trans-03 p-tb-5" style="margin: 5px;padding: 4px 20px 5px;border: 1px solid;border-radius: 20px;align-items: center;display: flex;">
									<?=$row->tags_name?>
								</a>
									<?php } ?>
							</div>
						</div>
						<?php } ?>											

						<?php if ($article_populer != FALSE) { ?>
							<div class="single-sidebar-widget most-popular-widget">
								<div class="how2 how2-cl4 flex-s-c" style="display: flex;align-items: center;margin-bottom: 20px;">
										<h3 class="f1-m-2 cl3 tab01-title" style="margin: 0;text-transform:uppercase">
											<?=$type_article_name?> TERPOPULAR
										</h3>
								</div>
								<?php
									foreach($article_populer->result() as $row){
										${"image_berita_populer" . $row->article_id} = base_url().'assets/images/'.$row->image_icon;
										if(!file_exists(getcwd().'/assets/images/'.$row->image_icon)){
											${"image_berita_populer" . $row->article_id} = base_url().'assets/img/no-photo-icon.png';
										}
										 ?>
										<div class="single-list flex-row d-flex" style="flex-direction: row;display: flex;">
									<div class="thumb">
										<img style="max-width:100px;" src="<?=${"image_berita_populer" . $row->article_id}?>" alt="">
									</div>									
									<div class="details">
										<a href="<?= site_url('article/detail/'.$row->article_id); ?>">
											<h6 style="font-size: 14px;margin: 0"><?=$row->title?></h6>
										</a>
										<ul class="meta">
											<li><a href="<?= site_url('article/detail/'.$row->article_id); ?>"><span class="lnr fa fa-clock-o"></span><?=$row->reviewed_at?></a></li>											
										</ul>
									</div>
								</div>
									<?php }
									 ?>									
							</div>
						<?php } ?>						

							<?php if($ads != FALSE){ 
								if(file_exists(getcwd().'/assets/images/ads/'.$ads->row()->url)){
								?>
								<div class="flex-c-s p-t-8" style="padding-bottom: 50px;display: flex;justify-content: center;">
							<a data-toggle="modal" data-target="#singlelightbox" style="cursor:pointer">
								<img class="max-w-full" src="<?=base_url().'assets/images/ads/'.$ads->row()->url?>" alt="" style="width:100%">
							</a>
						</div>
							<?php } } ?>							

					</div>
					<!-- /Aside Column -->	
					<?php } ?>
					
					<?php } ?>
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

		<?php if($ads != FALSE){
	$ads_image = "";
	if(file_exists(getcwd().'/assets/images/ads/'.$ads->row()->url_full) && $ads->row()->url_full != ""){
		$ads_image = base_url().'/assets/images/ads/'.$ads->row()->url_full;
	}else if(file_exists(getcwd().'/assets/images/ads/'.$ads->row()->url) && $ads->row()->url != ""){
		$ads_image = base_url().'/assets/images/ads/'.$ads->row()->url;
	}else{
		$ads_image = base_url().'assets/img/no-photo.png';
	}
	 ?>
		<div class="modal fade" id="singlelightbox">
    <div class="modal-dialog" role="document" style="max-width:100%;width:auto;display:inline-block">
      <div class="modal-content">
        <div class="modal-body">
		<img src="<?=$ads_image?>" alt="">
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<?php } ?>
		
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
