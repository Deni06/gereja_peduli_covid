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
				#beritaLainnya article:last-child{
					margin-bottom: 25px;
				}
				.modal {
  position: fixed;
}
				.modal-body img {
	height: 100%;
	width: 100%;
}
.modal.and.carousel {
  position: fixed;
}
.carousel-inner .item img {
	height: 100%;
	width: 100%;	
}

#slider .carousel-inner .item img {
	height: 100%;
	width: 100%;	
	cursor: pointer;
}
body .modal-dialog {
    max-width: 100%;
    width: auto !important;
    display: inline-block;
}
.show-selected {  
  display: flex !important;
  justify-content: center;
  align-items: center;
}

			</style>

    </head>
	<body>
	<?php 
	$url = base_url().'assets/images/';	

	?>
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
							$url_back = "#";
							if($article->row()->type_article == 1){
								$url_back = site_url('article/berita');
								$berita_status = "active";								
							}else if($article->row()->type_article == 2){
								$url_back = site_url('article');
								$article_status = "active";								
							}else{
								$url_back = site_url('article/serba_serbi');
								$serbaserbi_status = "active";								
							} ?>
							<li><a href="<?= site_url('home'); ?>">Beranda</a></li>
							<li class="<?=$berita_status?>"><a href="<?= site_url('article/berita'); ?>">Berita</a></li>
							<li class="<?=$article_status?>"><a href="<?= site_url('article'); ?>">Artikel</a></li>
							<li class="<?=$serbaserbi_status?>"><a href="<?= site_url('article/serba_serbi'); ?>">Serba - Serbi</a></li>
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
		<div class="section" style="padding-bottom:0">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">

						<!-- breadcrumb -->
						<ul class="article-breadcrumb">
							<li><a href="<?=site_url('home')?>">Home</a></li>
							<li><a href="<?=$url_back?>"><?=$article->row()->type_article_name?></a></li>
							<li><?=$article->row()->title?></li>
						</ul>
						<!-- /breadcrumb -->
					
						<!-- ARTICLE POST -->
						<article class="article article-post" style="margin-bottom: 10px">							
						<?php 
						if($article->row()->media_type == 1) {
							if($list_gallery != FALSE){
								for ($i=0; $i < count($list_gallery->result()) ; $i++) { ?>
								<div class="feature-img-thumb relative" style="margin-bottom: 15px;">
							<div id="slider" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#slider" data-slide-to="0" class="active"></li>
							<?php for ($i=0; $i < count($list_gallery->result()) ; $i++) { ?>            
            <li data-target="#slider" data-slide-to="<?=$i+1?>"></li>			
							<?php } ?>
          </ol>
          <div class="carousel-inner">
            <div class="item active" data-toggle="modal" data-target="#lightbox" data-slide-to="0">
				<?php
				$first_image = base_url().'assets/images/'.$article->row()->image;
				if(!file_exists(getcwd().'/assets/images/'.$article->row()->image)){
					$first_image = base_url().'assets/img/no-photo.png';
				}
				 ?>
              <img src="<?=$first_image?>" alt="<?=$article->row()->caption?>">
			</div>
			<?php for ($i=0; $i < count($list_gallery->result()) ; $i++) {
				${"list_gallery" . $i} = base_url().'assets/images/'.$list_gallery->result()[$i]->url;
				if(!file_exists(getcwd().'/assets/images/'.$list_gallery->result()[$i]->url)){
					${"list_gallery" . $i} = base_url().'assets/img/no-photo.png';
				}
				 ?>            
				<div class="item" data-toggle="modal" data-target="#lightbox" data-slide-to="<?=$i+1?>">
              <img src="<?=${"list_gallery" . $i}?>" alt="<?=$list_gallery->result()[$i]->caption?>">
            </div>
							<?php } ?>                        
		  </div><!-- /.carousel-inner -->
		  <div class="owl-nav">
		  <a class="owl-prev" href="#slider" role="button" data-slide="prev">
            <span class="lnr fa fa-arrow-left"></span>
          </a>
          <a class="owl-next" href="#slider" role="button" data-slide="next">
            <span class="lnr fa fa-arrow-right"></span>
          </a>
		  </div>
          
							</div>						
							<div style="padding: 5px 10px;">										
							<span id="spanCaption" style="color:#929292;font-size:0.8em"><?=$article->row()->caption?></span>		
												</div>																						
									</div>	
							<?php
							}
						 }else {
							$one_image = base_url().'assets/images/'.$article->row()->image;
							if(!file_exists(getcwd().'/assets/images/'.$article->row()->image)){
								$one_image = base_url().'assets/img/no-photo.png';
							} ?>
								<div class="article-main-img" style="cursor:pointer">
                                        <img src="<?=$one_image?>" data-toggle="modal" data-target="#singlelightbox" alt="">
                                        <div style="padding: 5px 10px;">										
							<span style="color:#929292;font-size:0.8em"><?=$article->row()->caption?></span>		
												</div>																															
									</div>	
							<?php }
						}else{
							${"image_poster" . $article->row()->article_id} = base_url().'assets/images/'.$article->row()->image;
										if(!file_exists(getcwd().'/assets/images/'.$article->row()->image)){
											${"image_poster" . $article->row()->article_id} = base_url().'assets/img/play-button-detail.png';
										} ?>
							<div class="feature-img-thumb relative" style="margin-bottom: 15px;">
										<div class="video-box">
										<video class="img-fluid" id="videoPlay" style="width: 100%;height: auto;vertical-align: middle;" src="<?=$url.$list_gallery->result()[0]->url?>" poster="<?=${"image_poster" . $article->row()->article_id}?>" controls>                                                            
                                                          </video>
                                            </div>
                                            <div style="padding: 5px 10px;">										
							<span style="color:#929292;font-size:0.8em"><?=$list_gallery->result()[0]->caption?></span>		
												</div>																															
									</div>
						<?php 
						}						
									$font_awesome_article = "fa fa-camera";
									if($article->row()->media_type == 2){
										$font_awesome_article = "fa fa-video-camera";
									}
									 ?>
							<div class="article-body">
								<ul class="article-info">
									<li class="article-category" style="margin-right: -4px;text-transform:uppercase"><a href="<?=$url_back?>"><?=$article->row()->type_article_name?></a></li>
									<li class="article-type"><i class="<?=$font_awesome_article?>"></i></li>
								</ul>
								<h3 class="article-title" style="color: #2c2c2c"><?=$article->row()->title?></h3>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i> <?=$article->row()->reviewed_at?></li>
									<li><i class="fa fa-user"></i> <?=$article->row()->created_user?></li>
								</ul>
								<?=$article->row()->description?>
							</div>
						</article>
						<!-- /ARTICLE POST -->	
						<div class="widget-tags" style="margin-bottom: 30px;">
							<ul>
							<?php
							if ($list_tags != FALSE) {
								foreach($list_tags->result() as $row){
										if($row->tags_name != ""){ ?>
								<li style="margin-top: 5px;"><a href="#"><?=$row->tags_name?></a></li>											
																										
									<?php } } }?>
							</ul>
						</div>										
					</div>
					<!-- /Main Column -->										
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
		
		<?php
		if($list_article_terkait != FALSE){
			if (count($list_article_terkait->result()) > 0) { 
							
		 ?>
		<!-- SECTION -->
		<div class="section" style="padding-bottom: 0;padding-top: 0;">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title"><?=$article->row()->type_article_name?> Terkait</h2>
						</div>
						<!-- /section title -->
						
						<!-- row -->
						<div class="row" style="display:flex;flex-wrap:wrap">
										<?php										
											foreach($list_article_terkait->result() as $row){
												${"article_terkait" . $row->article_id} = base_url().'assets/images/'.$row->image;
										if(!file_exists(getcwd().'/assets/images/'.$row->image)){
											${"article_terkait" . $row->article_id} = base_url().'assets/img/no-photo-icon.png';
										}
																			 ?>																																										
																			 <!-- Column 1 -->
									<div class="col-md-4 col-sm-6">
										<!-- ARTICLE -->
										<article class="article widget-article">
											<div class="article-img">
												<a href="<?= site_url('article/detail/'.$row->article_id); ?>">
													<img src="<?=${"article_terkait" . $row->article_id}?>" alt="">
												</a>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="<?= site_url('article/detail/'.$row->article_id); ?>"><?=$row->title?></a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> <?=$row->reviewed_at?></li>													
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->	
										</div>
										<!-- /Column 1 -->	
									<?php } ?>																																					
								</div>
								<!-- /row -->
					</div>
					<!-- /Main Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
	<?php } }?>

		<!-- SECTION -->
		<?php if ($list_article != FALSE) {
			 ?>
			<div class="section" style="padding-top: 0;">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12" id="beritaLainnya">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title"><?=$article->row()->type_article_name?> Lainnya</h2>
						</div>
						<!-- /section title -->
						
						<!-- row -->
						<div class="row" style="display:flex;flex-wrap:wrap">
							<!-- Column 1 -->
							<?php
									foreach($list_article->result() as $row){ 
										${"list_article_image" . $row->article_id} = base_url().'assets/images/'.$row->image;
										if(!file_exists(getcwd().'/assets/images/'.$row->image)){
											${"list_article_image" . $row->article_id} = base_url().'assets/img/no-photo.png';
										}
										$font_awesome = "fa fa-camera";
									if($row->media_type == 2){
										$font_awesome = "fa fa-video-camera";
									}
									?>									
							<div class="col-md-3 col-sm-6 list-article">
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="<?= site_url('article/detail/'.$row->article_id); ?>">
											<img src="<?=${"list_article_image" . $row->article_id}?>" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="<?=$font_awesome?>"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="<?= site_url('article/detail/'.$row->article_id); ?>"><?=$row->title?></a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> <?=$row->reviewed_at?></li>
											<li><i class="fa fa-user"></i> <?=$row->created_user?></li>	
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>							
							<!-- /Column 1 -->
									<?php } ?>																							
						</div>
						<!-- /row -->
						<?php 
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
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->	
		<?php } ?>
		
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

<?php if($article->row()->media_type == 1) { 
	$one_image = "";
	if(file_exists(getcwd().'/assets/images/'.$article->row()->real_image) && $article->row()->real_image != ""){
		$one_image = base_url().'/assets/images/'.$article->row()->real_image;
	}else if(file_exists(getcwd().'/assets/images/'.$article->row()->image) && $article->row()->image != ""){
		$one_image = base_url().'/assets/images/'.$article->row()->image;
	}else{
		$one_image = base_url().'assets/img/no-photo.png';
	}
	?>
	<div class="modal fade" id="singlelightbox">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
		<img src="<?=$one_image?>" alt="">
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class="modal fade and carousel slide" id="lightbox">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <ol class="carousel-indicators">
		  <li data-target="#lightbox" data-slide-to="0" class="active"></li>
		  <?php 
		  if($list_gallery != FALSE){
		  for ($i=0; $i < count($list_gallery->result()) ; $i++) { 
			  ?>            
            <li data-target="#lightbox" data-slide-to="<?=$i+1?>"></li>			
		  <?php } } ?>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
			  <img src="<?=$one_image?>" alt="">			  
			</div>
			<?php 
		  if($list_gallery != FALSE){
			foreach($list_gallery->result() as $row) {
				${"list_gallery_modal" . $row->article_id} = '';

				if(file_exists(getcwd().'/assets/images/'.$row->real_image_url) && $row->real_image_url != ""){
					${"list_gallery_modal" . $row->article_id} = base_url().'/assets/images/'.$row->real_image_url;
				}else if(file_exists(getcwd().'/assets/images/'.$row->url) && $row->url != ""){
					${"list_gallery_modal" . $row->article_id} = base_url().'/assets/images/'.$row->url;
				}else{
					${"list_gallery_modal" . $row->article_id} = base_url().'assets/img/no-photo.png';
				}

				 ?>            
            <div class="item">
              <img src="<?=${"list_gallery_modal" . $row->article_id}?>" alt="">
            </div>
		  <?php } } ?>
		  </div><!-- /.carousel-inner -->      
		  <div class="owl-nav">
		  <a class="owl-prev" href="#lightbox" role="button" data-slide="prev">
            <span class="lnr fa fa-arrow-left"></span>
          </a>
          <a class="owl-next" href="#lightbox" role="button" data-slide="next">
            <span class="lnr fa fa-arrow-right"></span>
          </a>
		  </div>    		  
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
	<?php }?>				
				
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

<script type="text/javascript">
var url = "<?=site_url('article/load_more_article_detail')?>";
			$(document).ready(function(){
    function alignModal(){
		$(".modal.fade.in").addClass( "show-selected" );
    }
    // Align modal when it is displayed
    $(".modal").on("shown.bs.modal", alignModal);
	
	$('.modal').on('hidden.bs.modal', function () {		
		$(".modal.fade").removeClass( "show-selected" );		
})
    // Align modal when user resize the window
    $(window).on("resize", function(){
        $(".modal:visible").each(alignModal);
    });   

	$('.load-more').click(function(){
	var row = Number($('#row').val());
	var allcount = Number($('#all').val());
	var rowperpage = 3;	

	if(row < allcount){		
		$("#row").val(row);

		$.ajax({
			url: url,
			type: 'post',
			data: {row:row, type:"<?=$article->row()->type_article?>", article_id:"<?=$article->row()->article_id?>"},
			dataType : 'json',
			beforeSend:function(){
				$(".load-more").text("Loading...");
			},
			success: function(response){				
				setTimeout(function() {										
					$(".list-article:last").after(response.html).show().fadeIn("slow");

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

$("#slider").on('slid.bs.carousel', function (){    	
	$("#spanCaption").text($("#slider .carousel-inner .active img").attr("alt"));
  });
});
		</script>		
	</body>
</html>
