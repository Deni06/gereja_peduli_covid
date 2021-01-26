<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo base_url('/assets/img/logo.png');?>" sizes="32x32" />
  <link rel="icon" href="<?php echo base_url('/assets/img/logo.png');?>" sizes="192x192" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('/assets/img/logo.png');?>" />
  <meta name="msapplication-TileImage" content="<?php echo base_url('/assets/img/logo.png');?>" />
  <title>Review Article - Gereja Peduli Covid</title> 
  <link href= "<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href= "<?=base_url('assets/css/nifty.min.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/plugins/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/plugins/switchery/switchery.min.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/plugins/bootstrap-select/bootstrap-select.min.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/css/nifty-demo.min.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/plugins/pace/pace.min.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/plugins/datatables/media/css/dataTables.bootstrap.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/sweetalert-master/dist/sweetalert.css')?>" rel="stylesheet">
  <script src="<?=base_url('assets/plugins/pace/pace.min.js')?>"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="<?=base_url('assets/js/jquery-3.4.1.min.js')?>"></script>
  <script src="<?=base_url('/assets/ckeditor/ckeditor.js');?>"></script>
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

  <style>
    body{
      font-family: montserrat;
    }

    .article {
  position:relative;
  margin-bottom:30px;
}

.article .article-img > a {
  display:block;
}

.article .article-img > a:after {
  content:"";
  position:absolute;
  left:0;
  top:0;
  right:0;
  bottom:0;
  background: #222;
  opacity:0;
  -webkit-transition:0.2s opacity;
  transition:0.2s opacity;
}

.article:hover .article-img > a:after {
  opacity:0.3;
}

.article .article-img {
  position:relative;
  overflow:hidden;
  margin-bottom:15px;
}

.article .article-img img {
  width:100%;
  -webkit-transition:0.5s -webkit-transform;
  transition:0.5s -webkit-transform;
  transition:0.5s transform;
  transition:0.5s transform, 0.5s -webkit-transform;
}

.article:hover .article-img img {
  -webkit-transform:scale(1.1);
      -ms-transform:scale(1.1);
          transform:scale(1.1);
}

.article .article-img  .article-info {
  position:absolute;
  bottom:15px;
  left:15px;
  z-index:22;
}

.article .article-body .article-info {
  margin-bottom:15px;
}

.article .article-info li {
  display:inline-block;
  margin-right:-2px;
}

.article .article-info .article-type {
  width:30px;
  height: 30px;
  line-height: 30px;
  text-align:center;
  background: #222;
  color: #FFF;
  font-size: 12.5px;
}

.article .article-info .article-category > a {
  display:block;
  padding: 0px 15px;
  height: 30px;
  line-height: 30px;
  background: #EF233C;
  color: #FFF;
  text-transform: uppercase;
  font-size: 12.5px;
}

.article .article-info .article-category > a:hover {
  opacity:0.8;
}

.article .article-title {
  text-transform: uppercase;
  margin-top:0px;   
}

.article .article-title > a {
  font-weight:700;
  color: #2c2c2c;
}

.article .article-meta {
  margin-bottom: 10px;
  margin-top: 10px;
}

.article .article-meta li {
  display:inline-block;
  color:#DDD;
  font-weight:400;
  font-size:12.5px;
  text-transform:uppercase;
}

.article .article-meta li + li {
  margin-left:10px;
}

/*------------------------------------*\
  Thumb Article
\*------------------------------------*/
.article.thumb-article {
  margin-bottom:0px;
}

.article.thumb-article .article-img {
  margin-bottom:0px;
}

.article.thumb-article .article-img:after {
  content:"";
  position:absolute;
  left:0;
  top:0;
  right:0;
  bottom:0;
  background: -webkit-gradient(linear, left bottom, left top, from(#222), to(transparent));
  background: linear-gradient(to top, #222 0%, transparent 100%);
  opacity:0.5;
  -webkit-transition:0.2s opacity;
  transition:0.2s opacity;
}

.article.thumb-article:hover .article-img:after {
  opacity:1;
}

.article.thumb-article .article-body {
  position: absolute;
  bottom: 0;
  left:0;
  right:0;
  padding: 15px 5%;
  z-index:20;
}

.article.thumb-article .article-body .article-title > a {
  color:#FFF;
}

.article.thumb-article .article-body .article-title > a:hover {
  color: #DDD;
}

/*------------------------------------*\
  Widget Article
\*------------------------------------*/
.article.widget-article:after {
  content:"";
  display:block;
  clear:both;
}

.article.widget-article .article-img {
  float:left;
  width:80px;
  margin-right:15px;
  margin-bottom:0px;
}

.article.widget-article .article-title {
  font-size:15px;
}

/*------------------------------------*\
  Row Article
\*------------------------------------*/
.article.row-article:after {
  content:"";
  display:block;
  clear:both;
}

.article.row-article .article-img {
  width:50%;
  float:left;
  margin-right:30px;
  margin-bottom:0px;
}

@media only screen and (max-width: 767px) {
  .article.row-article .article-img {
    width:100%;
  }

  .top-list{
    margin-bottom: 0 !important;
  }
  
  .article.row-article .article-body p {
    display:none;
  }

  .header-image h3 {
    font-size: 14px;
  }

  .header-image .header-ads {
    padding-bottom: 20px !important;
  }
}

@media only screen and (max-width: 480px) {
  .article.row-article .article-img {
    float:none;
    margin-bottom:15px;
  }
}

/*-- article pagination --*/
.article-pagination {
  margin-top:30px;
  margin-bottom:30px;
}

.article-pagination ul li {
  display:inline-block;
}

.article-pagination ul li a {
  display:block;
  padding:6px 15px;
  color:#DDD;
  border:1px solid #DDD;
  font-size:12.5px;
}
.article-pagination ul li a:hover {
  color:#EF233C;
  border-color:#EF233C;
}

.article-pagination ul li.active a {
  background-color:#EF233C;
  border-color:#EF233C;
  color:#FFF;
}
    
    .article-post .article-main-img {
  margin-bottom:15px;
}

.article-post .article-main-img img {
  width:100%;
}

    label{
      font-size: 1.1em;
    }

    .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
    }

    .owl-nav .owl-prev {
  position: absolute;
  top: 45%;
  background: rgba(0, 0, 0, 0.5);
  padding: 10px 15px;
  border-top-right-radius: 25px;
  border-bottom-right-radius: 25px;
  border-radius-top-left: 24px;
  left: 0;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.owl-nav .owl-prev:hover {
  background: #fff;
}

.owl-nav .owl-prev:hover .lnr {
  color: #f6214b;
}

.owl-nav .owl-prev .lnr {
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  display: block;
  margin-top: 0px;
  color: #fff;
  font-weight: 700;
}

.owl-nav .owl-next {
  position: absolute;
  top: 45%;
  background: rgba(0, 0, 0, 0.5);
  padding: 10px 15px;
  border-top-left-radius: 25px;
  border-bottom-left-radius: 25px;
  border-radius-top-left: 24px;
  right: 0;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.owl-nav .owl-next:hover {
  background: #fff;
}

.owl-nav .owl-next:hover .lnr {
  color: #f6214b;
}

.owl-nav .owl-next .lnr {
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  margin-top: 0px;
  display: block;
  color: #fff;
  font-weight: 700;
}

.widget-tags ul li {
  display:inline-block;
  margin-top:5px;
}

.widget-tags ul li a {
  display: block;
  padding: 6px 15px;
  color: #DDD;
  border: 1px solid #DDD;
  font-size: 12.5px;
}

.widget-tags ul li a:hover {
  color:#EF233C;
  border-color:#EF233C;
}
  </style>

</head>
<body>
  <div id="container" class="effect mainnav-lg">

    <!--NAVBAR-->
    <!--===================================================-->
    <?php
    $this->load->view('backend/layout/header');       
    $url = base_url().'assets/images/';  
    ?>
    <!--===================================================-->
    <!--END NAVBAR-->

    <div class="boxed">

      <!--CONTENT CONTAINER-->
      <!--===================================================-->
      <div id="content-container">

        <div id="page-content">
          <div class="panel panel-primary"> 
            <div class="panel-heading" style="background: #455a64">
              <div class="panel-title">
                <b>Review Article</b> 
              </div>
            </div>
            <div class="panel-body" style="padding-top: 0">
              <div class="panel panel-default">                
                <div class="panel-body">                                    
                <div class="row">
                    <div class="col-md-12">
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
              <img style="width: 100%" src="<?=$url.$article->row()->image?>" alt="<?=$article->row()->caption?>">
      </div>
      <?php for ($i=0; $i < count($list_gallery->result()) ; $i++) { ?>            
        <div class="item" data-toggle="modal" data-target="#lightbox" data-slide-to="<?=$i+1?>">
              <img style="width: 100%" src="<?=$url.$list_gallery->result()[$i]->url?>" alt="<?=$list_gallery->result()[$i]->caption?>">
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
              <div style="padding: 8px 10px;">                    
              <span id="spanCaption" style="color:#929292;font-size:13px"><?=$article->row()->caption?></span>    
                        </div>                                            
                  </div>  
              <?php
              }
             }else { ?>
                <div class="article-main-img" style="cursor:pointer">
                                        <img style="width: 100%" src="<?=$url.$article->row()->image?>" data-toggle="modal" data-target="#singlelightbox" alt="">
                                        <div style="padding: 8px 10px;">                    
              <span style="color:#929292;font-size:13px"><?=$article->row()->caption?></span>   
                        </div>                                                              
                  </div>  
              <?php }
            }else{ ?>
              <div class="feature-img-thumb relative" style="margin-bottom: 15px;">
                    <div class="video-box">
                    <video class="img-fluid" id="videoPlay" style="width: 100%;height: auto;vertical-align: middle;" src="<?=$url.$list_gallery->result()[0]->url?>" poster="<?=$url.$article->row()->image?>" controls>                                                            
                                                          </video>
                                            </div>
                                            <div style="padding: 8px 10px;">                    
              <span style="color:#929292;font-size:13px"><?=$list_gallery->result()[0]->caption?></span>    
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
                <ul class="article-info" style="padding: 0">
                  <li class="article-category" style="margin-right: -4px;text-transform:uppercase"><a href="#"><?=$article->row()->type_article_name?></a></li>
                  <li class="article-type"><i class="<?=$font_awesome_article?>"></i></li>
                </ul>
                <h3 class="article-title" style="color: #2c2c2c"><?=$article->row()->title?></h3>
                <ul class="article-meta" style="padding: 0">
                  <li><i class="fa fa-clock-o"></i> <?=$article->row()->created_at?></li>
                  <li><i class="fa fa-user"></i> <?=$article->row()->created_user?></li>
                </ul>
                <?=$article->row()->description?>
              </div>
            </article>
            <!-- /ARTICLE POST -->  
            <div class="widget-tags" style="margin-bottom: 30px;">
              <ul style="padding: 0">
              <?php
                  foreach($list_tags as $row){
                    if($row->tags_name != ""){ ?>
                      <li><a href="#"><?=$row->tags_name?></a></li>                                     
                  <?php } } ?>
              </ul>
            </div>  
                    </div>                    
                  </div>                                                                                      
                  <form role="form" method="POST" action="<?php echo site_url('admin/article/review/'.$article->row()->article_id); ?>" onsubmit="return approve_article()">

                      <input type="hidden" name="status_review" value="1">
                        <div class="row">
                          <div class="col-md-7 col">                                  
                            <a href="javascript:void(0)" onclick="location.assign('<?=site_url('admin/article/')?>')" style="background: #455a64; color:white;font-family:montserrat;margin-right:2%" class="btn col-md-3"><i class="fa fa-chevron-left" style="margin-right: 6%;font-size:1em;font-weight:500px"></i>BACK</a>                                                                                  
                            <button type="submit" style="font-family:montserrat;margin-right:2%" class="btn btn-success col-md-3">APPROVE</button>                           
                            <a href="javascript:void(0)" onclick="checkImage()" style="font-family:montserrat;margin-right:2%" class="btn btn-danger col-md-3">DECLINE</a>

                          </div>
                        </div>
                      </form>

                </div>
              </div>

            </div>
          </div>
        </div>
        <!--===================================================-->
        <!--<!--End page content-->

        <div class="modal fade" id="declineModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Decline Article</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form role="form" id="form_decline" method="POST" action="<?php echo site_url('admin/article/review/'.$article->row()->article_id); ?>">
        <div class="modal-body">
          <div class="form-group">
            <label for="email1">Reason for Rejection</label>
            <textarea class="form-control" name="reason_rejection" placeholder="Reason Rejection" required><?php echo $this->input->post('reason_rejection'); ?></textarea>                          
            <input type="hidden" name="status_review" value="2">  
          </div>          
        </div>
        <div class="modal-footer border-top-0 d-flex justify-content-center">
          <button type="submit" class="btn btn-danger">Decline</button>
        </div>
      </form>
    </div>
  </div>
</div>

      </div>
    </div>
    <!--===================================================-->
    <!--END CONTENT CONTAINER-->

    <?php
    $this->load->view('backend/layout/sidebar');
    ?>

  </div>



  <!-- FOOTER -->
  <!--===================================================-->
  <?php
  $this->load->view('backend/layout/footer');
  ?>
  <!--===================================================-->
  <!-- END FOOTER -->


  <!-- SCROLL TOP BUTTON -->
  <!--===================================================-->
  <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
  <!--===================================================-->



</div>
<!--===================================================-->
<!-- END OF CONTAINER -->
<!--JAVASCRIPT-->
<!--=================================================-->




<!--BootstrapJS [ RECOMMENDED ]-->
<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>


<!--Fast Click [ OPTIONAL ]-->
<script src="<?=base_url('assets/plugins/fast-click/fastclick.min.js')?>"></script>


<!--Nifty Admin [ RECOMMENDED ]-->
<script src="<?=base_url('assets/js/nifty.min.js')?>"></script>


<!--Switchery [ OPTIONAL ]-->
<script src="<?=base_url('assets/plugins/switchery/switchery.min.js')?>"></script>


<!--Bootstrap Select [ OPTIONAL ]-->
<script src="<?=base_url('assets/plugins/bootstrap-select/bootstrap-select.min.js')?>"></script>
<!--Bootstrap Timepicker [ OPTIONAL ]-->
<script src="<?=base_url('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js')?>"></script>


<!--Bootstrap Datepicker [ OPTIONAL ]-->
<script src="<?=base_url('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js')?>"></script>

<!--Demo script [ DEMONSTRATION ]-->
<!--DataTables [ OPTIONAL ]-->
<script src="<?=base_url('assets/plugins/datatables/media/js/jquery.dataTables.js')?>"></script>
<script src="<?=base_url('assets/plugins/datatables/media/js/dataTables.bootstrap.js')?>"></script>
<script src="<?=base_url('assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js')?>"></script>
<!--Demo script [ DEMONSTRATION ]-->
<script src="<?=base_url('assets/js/demo/nifty-demo.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/register-form.js');?>"></script>
<!--DataTables Sample [ SAMPLE ]-->
<script src="<?=base_url('assets/js/demo/tables-datatables.js')?>"></script>

<script type="text/javascript">
  function delete_item(id){
        swal({
          title: "Are you sure?",
          text: "You can't undo this action.",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
              window.location.href = "<?php echo site_url('admin/article/remove/')?>/"+id;
            }
        });
    }

    function approve_article(){      
      var f = document.getElementsByTagName('form')[0];
        swal({
          title: "Are you sure to approve this article ?",
          text: "You can't undo this action.",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
              f.submit();
              return true;
            }
        });

        return false;
    }

    function checkImage() {                
        swal({
          title: "Are you sure to decline this article ?",
          text: "You can't undo this action.",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {              
              $('#declineModal').modal('show');
            }
        });                                                      
    };

    $(document).ready(function(){      

$("#slider").on('slid.bs.carousel', function (){      
  $("#spanCaption").text($("#slider .carousel-inner .active img").attr("alt"));
  });
});

</script>

</body>
</html>