<?php 
if($this->input->post('is_submitted')){   
        $pro_cat            = set_value('subcategory');     
        $cat_parent         = set_value('category');
}else{
        $pro_cat            = null;     
        $cat_parent         = null;
}
    
?>


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
    <title>Add Iklan - Gereja Digital</title>
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
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/croppie.css')?>">
    <script src="<?=base_url('assets/plugins/pace/pace.min.js')?>"></script>
    <script src="<?=base_url('assets/sweetalert-master/dist/sweetalert.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery-3.4.1.min.js')?>"></script>
    <script src="<?=base_url('assets/js/croppie.js')?>"></script>
    <link rel="stylesheet" href="<?=base_url('assets/trumbowyg/dist/ui/trumbowyg.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/trumbowyg/dist/plugins/colors/ui/trumbowyg.colors.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/trumbowyg/dist/plugins/specialchars/ui/trumbowyg.specialchars.min.css')?>">
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
      max-height: 500px;
      max-width: 500px;
      margin: auto;
      padding: 20px;
    }

    .remove-image {      
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

.cntr {
  position: absolute;
  top: calc(50% - 10px);
  left: 0;
  width: 100%;
  text-align: center;
}

c {
    font-size: 1.1em;
    font-weight: normal;
}

d {
    font-size: 1.3em;
    font-weight: bold;
}
hr{
    border: 0;
    margin: 0;
    height: 0.1vw;    
    background-color: #eee;
}
    </style>

</head>
<body>
<div id="container" class="effect mainnav-lg">

    <!--NAVBAR-->
    <!--===================================================-->
    <?php
    $this->load->view('backend/layout/header');
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
                        <h3 class="panel-title"><b>Add Iklan</b></h3>
                    </div>
                    <div class="panel-body">
                    <form role="form" method="POST" action="<?php echo site_url('admin/iklan/add'); ?>" onsubmit="return submitform()" enctype="multipart/form-data">
                        <div class="row">
                <!-- body items -->

                <div class="col-md-12">
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <?php 
                            if($this->session->flashdata('error') != null){
                              echo '<div class="alert alert-danger">
                              <p style="color:#ffffff;font-size:1.2em">'.$this->session->flashdata('error').'</p>
                              </div>';
                            }
                            if($this->session->flashdata('success') != null){
                              echo '<div class="alert alert-success">
                              <p style="color:#ffffff;font-size:1.2em">'.$this->session->flashdata('success').'</p>
                              </div>';
                            }
                          ?>
                            <div class="row">
                                 <div class="col-md-7">
                            <div class="form-group" style="margin-bottom:3%;">
                                <label for="city_code"><b>Posisi Iklan</b></label>
                                <select class="form-control" id="posisi_iklan" name="posisi_iklan" value="<?php echo $this->input->post('posisi_iklan'); ?>" required>
                                  <?php $value = $this->input->post('posisi_iklan');
                  $displayHome = "show";
                  $displayBerita = "show";
                  $displayArtikel = "show";
                  $displaySerbaSerbi = "show";

                  if($iklan != FALSE) {
                    foreach($iklan as $i){
                      if($i->ads_position == 1){
                        $displayHome = "";
                      }
                      if($i->ads_position == 2){
                        $displayBerita = "";
                      }
                      if($i->ads_position == 3){
                        $displayArtikel = "";
                      }
                      if($i->ads_position == 4){
                        $displaySerbaSerbi = "";
                      }
                    }
                  }
                  
                  $selectedHome = "";
                  $selectedBerita = "";
                  $selectedArtikel = "";
                  $selectedSerbaSerbi = "";
                  if($value == 1){
                    $selectedHome = "selected";
                  }else if($value == 2){
                    $selectedBerita = "selected";
                  }else if($value == 3){
                    $selectedArtikel = "selected";
                  }else if($value == 4) {
                    $selectedSerbaSerbi = "selected";
                  } ?>

                  <?php if($displayHome != "") { ?>
                    <option value="1" <?=$selectedHome?>>Home</option>
                  <?php } if ($displayBerita != "") { ?>
                    <option value="2" <?=$selectedBerita?>>Berita</option>
                    <?php } if ($displayArtikel != "") { ?>
                    <option value="3" <?=$selectedArtikel?>>Artikel</option>
                    <?php } if ($displaySerbaSerbi != "") { ?>
                    <option value="4" <?=$selectedSerbaSerbi?>>Serba - Serbi</option>
                  <?php } ?>                                                                     
            </select>
                                </div>   

                                <script>window.addEventListener("load", (event) => {
                if($('select[name=posisi_iklan] option').filter(':selected').val() == 1){
                  $("#gambar_ads").text("Upload Gambar Ads (*Ukuran 1153 X 454 px)");
                }else{
                  $("#gambar_ads").text("Upload Gambar Ads (*Ukuran 300 X 600 px)");
                }
                }); </script>

                                <input type="hidden" name="isImage" id="isImage" value="1"> 
                                    <input type="hidden" name="imageBase64" id="imageBase64" value=""> 

                                <div class="form-group" style="margin-bottom:5%;" id="image_upload">
                                        <label for="name" style="margin-bottom:2%"><b id="gambar_ads" >Upload Gambar Ads</b></label>
                                        <div class="image-upload-wrap" id="logo-upload-wrap">
                                            <input class="file-upload-input imagegereja" id="logo-upload-input" name="logo" type='file' onchange="readURLCrop(this, 'logo-upload-wrap', 'logo-upload-image', 'logo-upload-content', 'logo-title', 'logo-upload-input')" accept="image/*" name="imagegereja" />
                                                <div class="drag-text">
                                                    <h3 style="font-family:montserrat">Drag and drop a file or Click</h3>
                                                </div>
                                        </div>
                                        <div class="file-upload-content" id="logo-upload-content">
                                            <img class="file-upload-image" id="logo-upload-image" src="#" alt="your image" style="margin-bottom:2%"/>
                                                <div class="image-title-wrap">
                                                    <button type="button" onclick="removeUpload('logo-upload-input', 'logo-upload-content', 'logo-upload-wrap')" class="remove-image">Remove <span class="image-title" id="logo-title">Uploaded Image</span></button>

                                                    <button type="button" href="javascript:void(0)"  onclick="showCrop()" class="remove-image" style="background-color: #5cb85c;border-bottom: 4px solid #4cae4c;width:200px">Crop Image </button>
                                                </div>
                                        </div>                                    
                                    </div>                                                                                                                         

                                    <button type="submit" type="submit" style="background: #455a64; color:white;font-family:montserrat; margin-right: 20px" class="btn col-md-5">  SAVE  <i class="fa fa-save" ></i></button>
                                        <a style="border: 2px solid #455a64;font-family:montserrat" class="btn col-md-5" onclick="location.href='<?=site_url('admin/iklan/')?>'">  CANCEL  <i class="fa fa-ban"></i></a>
                            </div>                          
                           
                        </div><!-- /..panel-body -->
                    </div><!-- /..panel panel-default -->
                </div>

            </div>
</form>
                    </div>
                </div>
                <!--===================================================-->
                <!--<!--End page content-->

            </div>
        </div>        

        <div class="modal" id="modalCropHome">
          <div class="modal-dialog" style="width:1250px">
            <div class="modal-content">
              <div class="modal-body" style="display: inline-block;width: 100%;">
                <div id="upload-demo-home"></div>
              </div>
              <div class="modal-footer">
        <button type="button" href="javascript:void(0)" id="upload-result-home" class="btn btn-success">Crop Image</button>
      </div>
            </div>
          </div>
        </div>

        <div class="modal" id="modalCropArticle">
          <div class="modal-dialog" style="width:400px">
            <div class="modal-content">
              <div class="modal-body" style="display: inline-block;width: 100%;">
                <div id="upload-demo-article"></div>
              </div>
              <div class="modal-footer">
        <button type="button" href="javascript:void(0)" id="upload-result-article" class="btn btn-success">Crop Image</button>
      </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="modalLoading" role="dialog">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <div class="modal-body" style="text-align:center">
                      <p>Please wait while the data are being saved...</p>
                      <i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i>
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
<script src="<?php echo base_url('/assets/js/register-form.js');?>"></script>
<!--DataTables Sample [ SAMPLE ]-->
<script src="<?=base_url('assets/js/demo/tables-datatables.js')?>"></script>

<script src="<?=base_url('assets/trumbowyg/dist/trumbowyg.min.js')?>"></script>          
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/colors/trumbowyg.colors.min.js')?>"></script>
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/lineheight/trumbowyg.lineheight.min.js')?>"></script>
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/specialchars/trumbowyg.specialchars.min.js')?>"></script>
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/upload/trumbowyg.upload.min.js')?>"></script>
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/fontsize/trumbowyg.fontsize.min.js')?>"></script>          

<script>

    function submitform() {
      var f = document.getElementsByTagName('form')[0];      
        
            newLogo = new Image();
      newLogo.src = $('#logo-upload-image').attr('src');       
      newLogo.onload = function() {                        
        if($('select[name=posisi_iklan] option').filter(':selected').val() == 1){
          if(this.width != 1153 || this.height != 454){
            swal("Maaf", "Gambar Ads yang anda pilih harus berukuran 1153 X 454 px", "error");
            return true;
          }else{
            showLoading();
        f.submit();
        return true;
          }          
        }else {
          if(this.width != 300 || this.height != 600){
            swal("Maaf", "Gambar Ads yang anda pilih harus berukuran 300 X 600 px", "error");
            return false;
        }else{
            showLoading();
        f.submit();
        return true;
          }  
        }
      };           
      return false;
    }
    function showLoading(){
      $('#modalLoading').modal('show');
      $('#modalLoading').data('bs.modal').options.backdrop = 'static';
    };

    uploadCropHome = $('#upload-demo-home').croppie({
    enableExif: true,
    viewport: {
        width: 1153,
        height: 454        
    },
    boundary: {
        width: 1200,
        height: 500
    }
});

uploadCropArticle = $('#upload-demo-article').croppie({
    enableExif: true,
    viewport: {
        width: 300,
        height: 600
    },
    boundary: {
        width: 350,
        height: 650
    }
});

function showCrop(){        
      if($('select[name=posisi_iklan] option').filter(':selected').val() == 1){
        uploadCropHome.croppie('bind', {
        url: $('#logo-upload-image').attr('src')
      }).then(function(){
        console.log('jQuery bind complete');
      });   

      $('#modalCropHome').modal('show');
      }else{
        uploadCropArticle.croppie('bind', {
        url: $('#logo-upload-image').attr('src')
      }).then(function(){
        console.log('jQuery bind complete');
      });   

      $('#modalCropArticle').modal('show');
      }      
    }; 

    function readURLCrop(input, wrap, uploadimage, uploadcontent, imagetitle, idremove) {
  uploadwrap = wrap;
    if (input.files && input.files[0]) {
  
    var reader = new FileReader();
    
    console.log(input);
      reader.onload = function(e) {
        $('#'+wrap).hide();
  
        $('#'+uploadimage).attr('src', e.target.result);                
      
        $('#'+uploadcontent).show();
  
    $('#'+imagetitle).html(input.files[0].name);     

      };
        
    var image = input.files[0].size;
    console.log(image)
    if(image>2048000) //do something if file size more than 1 mb (1048576)
    {
      swal("Maaf,", "Maksimal ukuran image adalah 2MB", "error");
       removeUploadCrop(idremove, uploadcontent, wrap);     
    }
    
    reader.readAsDataURL(input.files[0]);    
  
    } else {
    removeUploadCrop(idremove, uploadcontent, wrap);
    }
  }

  function removeUploadCrop(uploadinput, uploadcontent, wrap, index=0) {
    $('#'+uploadinput).replaceWith($('#'+uploadinput).val(''));
    $('#'+uploadcontent).hide();

    $('#isImage').val('1');

  $('#'+wrap).show();  
  $("#"+uploadinput).attr( "required", true);
  uploadwrap = wrap;
  }            
  
  $('#upload-result-home').on('click', function (ev) {    
    uploadCropHome.croppie('result', {
    type: 'canvas',
    size: 'viewport'
  }).then(function (resp) {    
    $('#isImage').val('0');
     $('#imageBase64').val(resp);
    
     $('#logo-upload-image').attr('src', resp);     
     $('#modalCropHome').modal('hide');     
  });
});     

$('#posisi_iklan').on('change', function() {
  if(this.value == 1){
    $("#gambar_ads").text("Upload Gambar Ads (*Ukuran 1153 X 454 px)");
  }else{
    $("#gambar_ads").text("Upload Gambar Ads (*Ukuran 300 X 600 px)");
  }
});

$('#upload-result-article').on('click', function (ev) {    
    uploadCropArticle.croppie('result', {
    type: 'canvas',
    size: 'viewport'
  }).then(function (resp) {    
    $('#isImage').val('0');
     $('#imageBase64').val(resp);
    
     $('#logo-upload-image').attr('src', resp);     
     $('#modalCropArticle').modal('hide');     
  });
});    
    </script>

</body>
</html>