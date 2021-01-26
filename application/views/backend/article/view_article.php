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
  <title>View Article - Gereja Peduli Covid</title> 
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
    .file-upload {
      background-color: #ffffff;
      width: 600px;
      margin: 0 auto;
      padding: 20px;
    }

    .file-upload-btn {
      width: 100%;
      margin: 0;
      color: #fff;
      background: #1FB264;
      border: none;
      padding: 10px;
      border-radius: 4px;
      border-bottom: 4px solid #15824B;
      transition: all .2s ease;
      outline: none;
      text-transform: uppercase;
      font-weight: 700;
    }

    .file-upload-btn:hover {
      background: #1AA059;
      color: #ffffff;
      transition: all .2s ease;
      cursor: pointer;
    }

    .file-upload-btn:active {
      border: 0;
      transition: all .2s ease;
    }

    .file-upload-content {
      display: none;
      text-align: center;
    }

    .file-upload-input {
      position: absolute;
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      outline: none;
      opacity: 0;
      cursor: pointer;
    }

    .image-upload-wrap {    
      border: 4px dashed #455a64;
      position: relative;
    }

    .image-dropping,
    .image-upload-wrap:hover {
      background-color: rgb(250, 250, 250);
      border: 4px dashed #ffffff;
    }

    .image-title-wrap {
      padding: 0 15px 15px 15px;
      color: #222;
    }

    .drag-text {
      text-align: center;
    }

    .drag-text h3 {
      font-weight: 100;
      text-transform: uppercase;
      color: rgb(15, 20, 18);
      padding: 60px 0;
    }

    .file-upload-image {
      max-height: 200px;
      max-width: 200px;
      margin: auto;
      padding: 20px;
    }

    .remove-image {
      width: 200px;
      margin: 0;
      color: #fff;
      background: #cd4535;
      border: none;
      padding: 10px;
      border-radius: 4px;
      border-bottom: 4px solid #b02818;
      transition: all .2s ease;
      outline: none;
      text-transform: uppercase;
      font-weight: 700;
    }

    .remove-image:hover {
      background: #c13b2a;
      color: #ffffff;
      transition: all .2s ease;
      cursor: pointer;
    }

    .remove-image:active {
      border: 0;
      transition: all .2s ease;
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
  </style>

</head>
<body>
  <div id="container" class="effect mainnav-lg">

    <!--NAVBAR-->
    <!--===================================================-->
    <?php
    $this->load->view('backend/layout/header');
    $article_access = $this->user_library->show_article_access();
                        if($article_access != null && $article_access != ""){                                                                        
                $edit_access = strpos($article_access, ';3;');                
                $delete_access = strpos($article_access, ';4;');                
                        }
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
                <b>View Article</b> 
              </div>
            </div>
            <div class="panel-body">
              <div class="panel panel-default">                
                <div class="panel-body">                                    
                <div class="row">
                    <div class="col-md-6" style="border-right: 2px solid #383838;">
                      <div style="margin-top: 10px">
                        <h5 style="font-weight: 800; font-size: 14px"> Article Title</h5>
                        <p style="font-size: 14px"><?php echo $article->row()->title;?></p>
                      </div>

                      <div style="margin-top: 30px">
                        <h5 style="font-weight: 800; font-size: 14px"> Type Article</h5>
                        <p style="font-size: 14px"><?php echo $article->row()->type_article_name;?></p>
                      </div>

                      <div style="margin-top: 30px">
                        <h5 style="font-weight: 800; font-size: 14px"> Media Type</h5>
                        <p style="font-size: 14px"><?php echo $article->row()->media_type_name;?></p>
                      </div>

                      <div style="margin-top: 30px">
                        <h5 style="font-weight: 800; font-size: 14px"> Created At</h5>
                        <p style="font-size: 14px"><?php echo $article->row()->created_at;?></p>
                      </div>
                      
                    </div>

                    <div class="col-md-6">                      
                      <div style="margin-top: 10px">
                        <h5 style="font-weight: 800; font-size: 14px"> Reviewed On</h5>
                        <p style="font-size: 14px"><?php echo ($article->row()->reviewed_at == '' ? '-' : $article->row()->reviewed_at) ;?></p>
                      </div>

                      <div style="margin-top: 30px">
                        <h5 style="font-weight: 800; font-size: 14px"> Reviewed By</h5>
                        <p style="font-size: 14px"><?php echo ($article->row()->reviewed_user == '' ? '-' : $article->row()->reviewed_user) ;?></p>
                      </div>

                      <div style="margin-top: 30px">
                        <h5 style="font-weight: 800; font-size: 14px"> Review Status</h5>
                        <?php
                        $status_review = "Pending";
                        $color = "#ebaa4b";
    if($article->row()->status_review == 1){
      $status_review = "Approved";
                        $color = "green";
    }else if($article->row()->status_review == 2){
      $status_review = "Declined";
                        $color = "red";
    }
                         ?>
                        <p style="font-size: 14px;color: <?=$color?>"><?php echo $status_review ;?></p>
                      </div>

                      <div style="margin-top: 30px">
                        <h5 style="font-weight: 800; font-size: 14px"> Article Topic</h5>
                        <?php
                        $tags_string = "";

                        for($i=0; $i < count($list_tags); $i++){
                          if($list_tags[$i]->tags_name != ""){
                            if($i > 0){
                              $tags_string .= ", ";
                            }
                            $tags_string .= $list_tags[$i]->tags_name;
                          }
                        }
                         ?>
                        <p style="font-size: 14px"><?php echo $tags_string ;?></p>
                      </div>
                      
                    </div>                    
                  </div>
                  <?php if($article->row()->status_review == 2){ ?>
                    <div style="margin-top: 30px">
                    <h5 style="font-weight: 800; font-size: 14px; "> Reason for Rejection</h5>
                    <p style="font-size: 14px;color: red"><?php echo $article->row()->reason_rejection ;?></p>
                  </div>                 
                  <?php } ?>                  
                   <div style="margin-top: 30px">
                    <h5 style="font-weight: 800; font-size: 14px; "> Article Thumbnail</h5>
                    <?php 
  $url = base_url().'assets/images/';  

  ?>
                    <img src="<?=$url.$article->row()->image?>" style="max-width:100%;" alt="">
                    <?php if($article->row()->caption != ""){ ?>
                      <div style="padding: 8px 10px 5px;">                    
              <span id="spanCaption" style="color:#929292;font-size:13px"><?=$article->row()->caption?></span>    
                        </div>                                            
                    <?php } ?>
                  </div>
                  <div style="margin-top: 30px">
                    <h5 style="font-weight: 800; font-size: 14px; "> Article Thumbnail Icon</h5>                    
                    <img src="<?=$url.$article->row()->image_icon?>" style="max-width:100%;" alt="">                    
                  </div> 
                  <div style="margin-top: 30px">
                    <h5 style="font-weight: 800; font-size: 14px; "> Article Content</h5>
                    <?php echo $article->row()->description ;?>
                  </div>                                   

                  <?php if($article->row()->media_type == 2) { ?>
                    <div style="margin-top: 30px">
                    <h5 style="font-weight: 800; font-size: 14px; "> Article Video</h5>
                    <video style="width:700px;height:400px" poster="<?=$url.$article->row()->image?>" controls>
                              <source src="<?= $url.$list_gallery->result()[0]->url ?>">
                            </video>
                            <?php if($list_gallery->result()[0]->caption != ""){ ?>
                      <div style="padding: 5px 10px;">                    
              <span id="spanCaption" style="color:#929292;font-size:13px"><?=$list_gallery->result()[0]->caption?></span>    
                        </div>                                            
                    <?php } ?>
                  </div>                 
                  <?php }else{ ?>
                    <div style="margin-top: 30px">                    
                    <?php if($list_gallery != FALSE){ ?>
                      <h5 style="font-weight: 800; font-size: 14px; "> Article Gallery</h5>
                      <?php for ($i=0; $i < count($list_gallery->result()) ; $i++) { ?>
                <div class="feature-img-thumb relative" style="margin-bottom: 15px;width: 800px">
              <div id="slider" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">                
              <?php for ($i=0; $i < count($list_gallery->result()) ; $i++) { 
                $active = "";
        if($i == 0){
          $active = "active";
        }
                ?>            
            <li data-target="#slider" data-slide-to="<?=$i?>" class="<?=$active?>"></li>
              <?php } ?>
          </ol>
          <div class="carousel-inner">            
      <?php for ($i=0; $i < count($list_gallery->result()) ; $i++) {
        $active = "";
        if($i == 0){
          $active = "active";
        }
       ?>            
        <div class="item <?=$active?>">
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
              <span id="spanCaptionGallery" style="color:#929292;font-size:13px"><?=$list_gallery->result()[0]->caption?></span>        
                        </div>                                            
                  </div>  
              <?php
              }
                    }
                  } ?>                  

                  <div style="margin-top: 4%">
                        <div class="row">
                          <div class="col-md-7 col">                                  
                            <a href="javascript:void(0)" onclick="location.assign('<?=site_url('admin/article/')?>')" name="submit" style="background: #455a64; color:white;font-family:montserrat;margin-right:2%" class="btn col-md-3"><i class="fa fa-chevron-left" style="margin-right: 6%;font-size:1em;font-weight:500px"></i>BACK</a>

                            <?php    
                if($edit_access !== false && $article->row()->created_by == $this->session->userdata('user_id')   && $article->row()->status_review != 1){
                ?>
            <a href="javascript:void(0)" onclick="location.href='<?=site_url('admin/article/edit/'.$article->row()->article_id)?>'" style="border: 2px solid #455a64;font-family:montserrat;margin-right:2%" class="btn col-md-3">EDIT<i class="fa fa-pencil" style="margin-left: 6%;font-size:1.2em"></i></a>
                <?php }
                if($delete_access !== false){
                  ?>
              <a style="border: 2px solid red;font-family:montserrat;color:red" class="btn col-md-3" onclick='delete_item("<?=$article->row()->article_id?>")'>DELETE<i class="fa fa-trash" style="margin-left: 6%;font-size:1.2em"></i></a>
                  <?php } ?>                                                        
                          </div>
                        </div>
                      </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!--===================================================-->
        <!--<!--End page content-->

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

    $(document).ready(function(){      

$("#slider").on('slid.bs.carousel', function (){      
  $("#spanCaptionGallery").text($("#slider .carousel-inner .active img").attr("alt"));
  });
});

</script>

</body>
</html>