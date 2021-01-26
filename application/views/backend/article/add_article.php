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
  <title>Add Article - Gereja Peduli Covids</title>
  <link href= "<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/croppie.css')?>">
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
  <script src="<?=base_url('assets/sweetalert-master/dist/sweetalert.min.js')?>"></script>
  <script src="<?=base_url('assets/js/jquery-3.4.1.min.js')?>"></script>
  <link rel="stylesheet" href="<?=base_url('assets/trumbowyg/dist/ui/trumbowyg.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/trumbowyg/dist/plugins/colors/ui/trumbowyg.colors.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/trumbowyg/dist/plugins/specialchars/ui/trumbowyg.specialchars.min.css')?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/home/css/amsify.suggestags.css')?>">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <script src="<?=base_url('assets/js/croppie.js')?>"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>     
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

    .radio {
      position: relative;
      cursor: pointer;
      line-height: 20px;
      font-size: 1em;
      margin: 15px;
    }
    .radio .label {
      position: relative;
      display: block;
      float: left;
      margin-right: 10px;
      width: 20px;
      height: 20px;
      border: 2px solid #c8ccd4;
      border-radius: 100%;
      -webkit-tap-highlight-color: transparent;
    }
    .radio .label:after {
      content: '';
      position: absolute;
      top: 3px;
      left: 3px;
      width: 10px;
      height: 10px;
      border-radius: 100%;
      background: #225cff;
      transform: scale(0);
      transition: all 0.2s ease;
      opacity: 0.08;
      pointer-events: none;
    }
    .radio:hover .label:after {
      transform: scale(3.6);
    }
    input[type="radio"]:checked + .label {
      border-color: #225cff;
    }
    input[type="radio"]:checked + .label:after {
      transform: scale(1);
      transition: all 0.2s cubic-bezier(0.35, 0.9, 0.4, 0.9);
      opacity: 1;
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
    .option-input {
      -webkit-appearance: none;
      -moz-appearance: none;
      -ms-appearance: none;
      -o-appearance: none;
      appearance: none;
      position: relative;
      top: 13.33333px;
      right: 0;
      bottom: 0;
      left: 0;
      height: 30px;
      width: 30px;
      transition: all 0.15s ease-out 0s;
      background: #cbd1d8;
      border: none;
      color: #fff;
      cursor: pointer;
      display: inline-block;
      margin-right: 0.5rem;
      outline: none;
      position: relative;      
    }
    .option-input:hover {
      background: #9faab7;
    }
    .option-input:checked {
      background: #40e0d0;
    }
    .option-input:checked::before {
      height: 30px;
      width: 30px;
      position: absolute;
      content: '✔';
      display: inline-block;
      font-size: 26.66667px;
      text-align: center;
      line-height: 30px;
    }
    .option-input:checked::after {
      -webkit-animation: click-wave 0.65s;
      -moz-animation: click-wave 0.65s;
      animation: click-wave 0.65s;
      background: #40e0d0;
      content: '';
      display: block;
      position: relative;      
    }    
    .trumbowyg-button-pane{
      z-index: 0 !important;
    }

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

.swal-text{
  text-align: center;  
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

        <script>
        var listTags = [];
        </script>

        <?php if($tags != FALSE) { 
            echo '
        <script>
        window.addEventListener("load", (event) => {  '; 

            foreach($tags->result() as $list_tags){
                echo '
                listTags.push("'.$list_tags->tags_name.'")
                ';
            }

         echo '
         amsifySuggestags = new AmsifySuggestags($("input[name=\'tags\']"));
         amsifySuggestags._settings({
            suggestions: listTags
        })
        amsifySuggestags._init();
         
          });
        </script>';
         } ?>            

        <div id="page-content">
          <div class="panel panel-primary"> 
            <div class="panel-heading" style="background: #455a64">
              <h3 class="panel-title"><b>Add Article</b></h3>
            </div>
            <div class="panel-body">
              <form role="form" method="POST" action="<?php echo site_url('admin/article/add'); ?>" onsubmit="return checkSize()" enctype="multipart/form-data">
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
                            <label for="name"><b>Article Title</b></label>
                            <input type="text" class="form-control" name="title" placeholder="Article Title" value="<?php echo $this->input->post('title'); ?>" required>
                          </div>

                            <div class="form-group" style="margin-bottom:3%;">
                                <label for="city_code"><b>Article Type</b></label>
                                <select class="form-control" name="article_type" value="<?php echo $this->input->post('article_type'); ?>" required>
                                
                                <?php
                                $value = $this->input->post('article_type');
                                $selectedBerita = "";
                                $selectedArticle = "";
                                $selectedSerbaSerbi = "";

                                if($value == 1){
                                  $selectedBerita = "selected";
                                }else if($value == 2){
                                    $selectedArticle = "selected";
                                }else if($value == 3){
                                    $selectedSerbaSerbi = "selected";
                                  }
                                 ?>
                                <option value="1" <?=$selectedBerita?>>Berita</option>
                                <option value="2" <?=$selectedArticle?>>Artikel</option>
                                <option value="3" <?=$selectedSerbaSerbi?>>Serba - Serbi</option>                
            </select>
                                </div> 

                          <div class="form-group" style="margin-bottom:3%;">
                            <label for="name"><b>Media Type</b></label>                                
                            <label for="opt1" class="radio">
                              <input type="radio" name="rdo" id="opt1" class="hidden" value="1" checked/>
                              <span class="label"></span>IMAGE
                            </label>
                            
                            <label for="opt2" class="radio">
                              <input type="radio" name="rdo" id="opt2" class="hidden" value="2"/>
                              <span class="label"></span>VIDEO
                            </label>                                                        
                            
                          </div>
                          <div class="form-group" style="margin-bottom:3%;">
                            <label for="name"><b>Article Content</b></label>                                                            
                            <textarea class="form-control" name="article_content" id="article_content" placeholder="Article Content" required><?php echo $this->input->post('article_content'); ?></textarea>                            
                          </div>

                          <input type="hidden" name="index_gallery" id="index_gallery"> 

                          <div class="form-group" style="margin-bottom:4%;">
                                        <label for="name"><b>Article Topic (*Jika topic lebih dari satu, pisahkan dengan tanda koma ",")</b></label>
                                        <input type="text" class="form-control" id="tags_value" name="tags" placeholder="Article Tags" value="<?php echo $this->input->post('tags'); ?>" required>                                                                                                   
                                    </div>

                                    <input type="hidden" name="isImage" id="isImage" value="1"> 
                                    <input type="hidden" name="imageBase64" id="imageBase64" value=""> 
                                    <input type="hidden" name="isIconImage" id="isIconImage" value="1"> 
                                    <input type="hidden" name="iconBase64" id="iconBase64" value=""> 

                          <div class="form-group" style="margin-bottom:3%;">
                            <label for="name"><b>Article Thumbnail</b></label>
                            <div class="image-upload-wrap" id="thumbnail-upload-wrap" style="margin-top:1%;">
                              <input class="file-upload-input" name="image" id="thumbnail-upload-input" type='file' onchange="readURLCrop(this, 'thumbnail-upload-wrap', 'thumbnail-upload-image', 'thumbnail-upload-content', 'thumbnail-title')" accept=".png,.jpg,.gif" required/>
                              <div class="drag-text">
                                <h3>Drag and drop a file or Click</h3>
                              </div>
                            </div>
                            <div class="file-upload-content" id="thumbnail-upload-content">
                              <img class="file-upload-image" id="thumbnail-upload-image" src="#" alt="your image" />
                              <div class="image-title-wrap">
                                <button style="font-family:montserrat" type="button" onclick="removeUploadCrop('thumbnail-upload-input', 'thumbnail-upload-content', 'thumbnail-upload-wrap')" class="remove-image">Remove <span class="image-title" id="thumbnail-title">Uploaded Image</span></button>
                                <button type="button" href="javascript:void(0)"  onclick="showCropThumbnail('thumbnail-upload-image')" class="remove-image" style="background-color: #5cb85c;border-bottom: 4px solid #4cae4c;width: 200px;">Crop Image </button>
                              </div>
                            </div> 

                            <textarea class="form-control" style="margin-top: 2%;" name="caption" placeholder="Thumbnail Caption"><?php echo $this->input->post('caption'); ?></textarea>   
                                                               
                          </div>

                          <div class="form-group" id="icon_thumbnail" style="margin-bottom:3%;display: none;">
                            <label for="name"><b>Article Icon Thumbnail</b></label>                            
                            <div class="file-upload-content" id="icon-thumbnail-upload-content" style="display: block;">
                              <img class="file-upload-image" id="icon-thumbnail-upload-image" src="#" alt="your image" />
                              <div class="image-title-wrap">                                
                                <button type="button" href="javascript:void(0)"  onclick="showCropIcon()" class="remove-image" style="background-color: #5cb85c;border-bottom: 4px solid #4cae4c;width: 200px;">Crop Image </button>
                              </div>
                            </div>                             
                                                               
                          </div>

                          <div class="form-group" id="gallery" style="margin-bottom:4%;">
                                        <label for="name"><b>Article Gallery</b></label>
                                        <div style="margin-bottom: 2%;">
                                          <a href="javascript:void(0)" class="btn btn-primary" onclick="add_gallery_element()"> Add More Gallery <i class="fa fa-plus" style="margin-left: 10px;"></i></a>
                                        </div>    
                            <div id="list_gallery">
                                                                                           
                                        </div>                                                                            
                                    </div> 

                          <div class="form-group" id="video" style="margin-bottom:3%;display: none;">
                            <label for="name"><b>Video File</b></label>                            
                            <input type="file" class="form-control" name="video" id="file_name" value="<?= set_value('pro_sku') ?>" accept=".mp4,.mkv,.wmv,.avi,.3gp">                    

                            <textarea class="form-control" style="margin-top: 2%;" name="caption_video" placeholder="Caption Video"><?php echo $this->input->post('caption_video'); ?></textarea>                                                                                                                     
                          </div>      
                          <button type="submit" style="background: #455a64; color:white;font-family:montserrat; margin-right: 20px" class="btn col-md-5">  SAVE  <i class="fa fa-save" ></i></button>
                                <a style="border: 2px solid #455a64;font-family:montserrat" class="btn col-md-5" onclick="location.href='<?=site_url('admin/article/')?>'">  CANCEL  <i class="fa fa-ban"></i></a>                    
                          
                                </div>
                              </div>                                                                                             

                            </div><!-- /..panel-body -->
                          </div><!-- /..panel panel-default -->
                        </div>

                      </div>
                      <?=form_close()?>
                    </div>
                  </div>
                  <!--===================================================-->
                  <!--<!--End page content-->

                </div>
              </div>

              <div class="modal" id="modalCropThumbnail">
          <div class="modal-dialog" style="width:900px;margin-top:0">
            <div class="modal-content">
              <div class="modal-body" style="display: inline-block;width:100%">
                <div id="cropThumbnail"></div>
              </div>
              <div class="modal-footer">
        <button type="button" href="javascript:void(0)"  onclick="" id="crop-thumbnail-result" class="btn btn-success">Crop Image</button>
      </div>
            </div>
          </div>
        </div>

        <div class="modal" id="modalCropIcon">
          <div class="modal-dialog" style="width:400px">
            <div class="modal-content">
              <div class="modal-body" style="display: inline-block;width: 100%;">
                <div id="cropIcon"></div>
              </div>
              <div class="modal-footer">
        <button type="button" id="crop-icon-result" class="btn btn-success">Crop Image</button>
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
          <script src="<?php echo base_url('/assets/js/register-form.js');?>"></script>
          <!--DataTables Sample [ SAMPLE ]-->
          <script src="<?=base_url('assets/js/demo/tables-datatables.js')?>"></script>
          
          <script src="<?=base_url('assets/trumbowyg/dist/trumbowyg.min.js')?>"></script>          
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/colors/trumbowyg.colors.min.js')?>"></script>
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/lineheight/trumbowyg.lineheight.min.js')?>"></script>
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/specialchars/trumbowyg.specialchars.min.js')?>"></script>
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/upload/trumbowyg.upload.min.js')?>"></script>
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/fontsize/trumbowyg.fontsize.min.js')?>"></script>
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/resizimg/resizable-resolveconflict.min.js')?>"></script>                    
          <script src="<?=base_url('assets/jquery-resizable/dist/jquery-resizable.min.js')?>"></script>
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/resizimg/trumbowyg.resizimg.min.js')?>"></script>          
          <script type="text/javascript" src="<?=base_url('assets/home/js/jquery.amsify.suggestags.js')?>"></script>
                      
          <script>                 

            var index_gallery = [];
            
            $('input[type=radio][name=rdo]').change(function() {
              if (this.value == '1' || this.value == '2') {                
                if(this.value == 1){                                      
                  $("#file_name").removeAttr("required");            
                    $('#video').hide();        
                    $('#gallery').show();
                    $('#list_gallery div div input[type="file"]').attr('required','true');
                }else {                        
                  $('#file_name').attr('required','true');            
                    $('#video').show();        
                    $('#gallery').hide();
                    $('#list_gallery div div input[type="file"]').removeAttr("required");
                }                
              }
            });

            function checkSize() {
              var f = document.getElementsByTagName('form')[0];

                if($('.amsify-suggestags-area div input').val() != ""){
                    amsifySuggestags.addTag($('.amsify-suggestags-area div input').val());
                }              

              if (!window.FileReader) {
                  alert("The file API isn't supported on this browser yet.");
              }       

              $('#index_gallery').val(index_gallery);      

                var pass = false;
                newLogo = new Image();
      newLogo.src = $('#thumbnail-upload-image').attr('src');       
      newLogo.onload = function() {                        
        if(this.width != 750 || this.height != 439){      
            swal("Maaf", "Artikel Thumbnail yang anda pilih harus berukuran 750x439 px", "error");
            return false;
          }else{
            newLogo = new Image();
          newLogo.src = $('#icon-thumbnail-upload-image').attr('src');       
      newLogo.onload = function() {                        
        if(this.width != 200 || this.height != 160){      
            swal("Maaf", "Logo Artikel Thumbnail yang anda pilih harus berukuran 200x160 px", "error");
            return false;
          }else{

            if($('input[name=rdo]:checked').val() == '2'){
                input = document.getElementById('file_name');
              file = input.files[0];
                if($("#file_name").val() == ''){
                  swal("Sorry,", "You haven't select a video to be uploaded", "error").then((value) => {
                    $("#file_name").focus();
                  });
                }
                else if(file.size > 2147483648){
                  swal("Sorry,", "The maximum upload video size is 2GB", "error").then((value) => {
                    $("#file_name").focus();
                  });
                }
                else {
                  showLoading();
                  $('#article_content').data('trumbowyg').destroy();  
                  f.submit();
                  return true;
                }  
              }else{
                if(index_gallery.length > 0){
                var check_gallery = 0;
          for (i = 0; i < index_gallery.length; i++){
            newLogo = new Image();
            newLogo.src = $('#thumbnail-upload-image-'+index_gallery[i]).attr('src');       
      newLogo.onload = function() {                        
        if(this.width != 750 || this.height != 439){      
            swal("Maaf", "Artikel Gallery yang anda pilih harus berukuran 750x439 px", "error");
            return false;
          }else{
            check_gallery += 1;
            if(check_gallery == index_gallery.length){
            showLoading();
            $('#article_content').data('trumbowyg').destroy();  
            f.submit();
                return true;
          }

          }
        }            
          }          

        }else{
          showLoading();
          $('#article_content').data('trumbowyg').destroy();  
          f.submit();
                return true;
        }
              }                        
          
          }
        }
        }
        }        

              return false;
            };

            function showLoading(){
              $('#modalLoading').modal('show');
              $('#modalLoading').data('bs.modal').options.backdrop = 'static';
            };

            uploadCropThumbnail = $('#cropThumbnail').croppie({
    enableExif: true,
    viewport: {
        width: 750,
        height: 439
    },
    boundary: {
        width: 850,
        height: 500
    }
});  

function showCropThumbnail(imageId, index=0){      
    uploadCropThumbnail.croppie('bind', {
        url: $('#'+imageId).attr('src')
      }).then(function(){
        console.log('jQuery bind complete');
      });   

      $('#crop-thumbnail-result').attr('onclick','cropResult("'+imageId+'", '+index+')');
      
      $('#modalCropThumbnail').modal('show');
    }; 

    function cropResult(imageId, index=0){      
        uploadCropThumbnail.croppie('result', {
    type: 'canvas',
    size: 'viewport'
  }).then(function (resp) {     
    $('#'+imageId).attr('src', resp);    
    if(index != 0){
      $('#isGalleryImage'+index).val('0');
     $('#galleryBase64'+index).val(resp);
    }else{
      $('#isImage').val('0');
     $('#imageBase64').val(resp);
    }    
    $('#modalCropThumbnail').modal('hide');
  });
    }; 

uploadCropIcon = $('#cropIcon').croppie({
    enableExif: true,
    viewport: {
        width: 200,
        height: 160
    },
    boundary: {
        width: 250,
        height: 200
    }
});

function showCropIcon(){      
    uploadCropIcon.croppie('bind', {
        url: $('#icon-thumbnail-upload-image').attr('src')
      }).then(function(){
        console.log('jQuery bind complete');
      });         
      $('#modalCropIcon').modal('show');
    }; 

    $('#crop-icon-result').on('click', function (ev) {
  uploadCropIcon.croppie('result', {
    type: 'canvas',
    size: 'viewport'
  }).then(function (resp) {    
    $('#isIconImage').val('0');
     $('#iconBase64').val(resp);

     $('#icon-thumbnail-upload-image').attr('src', resp);     
     $('#modalCropIcon').modal('hide');
  });
});

            $('#article_content').trumbowyg({
              btns: [
        ['viewHTML'],
        ['undo', 'redo'], // Only supported in Blink browsers
        ['formatting'],
        ['bold', 'italic', 'underline', 'strikethrough'],
        // ['superscript', 'subscript'],
        ['link'],
        ['insertImage'],
        ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
        ['unorderedList', 'orderedList'],
        ['horizontalRule'],
        ['removeformat'],
        ['fullscreen'],        
        ['foreColor', 'backColor'],
        ['lineheight'],
        // ['specialChars'],
        ['upload'],
        ['fontsize']
    ],
    plugins: {        
        upload: {
            serverPath: '<?php echo base_url(); ?>admin/imageupload',
            fileFieldName: 'imagewyg',
            headers: {
                'Authorization': 'Client-ID xxxxxxxxxxxx'
            },
            data: [{
              name: 'folder', value: 'article_content'
            }],
            urlPropertyName: 'url',                        
                    error: function (data) {                      
                      console.log(data);
                        alert("gambar melebihi 2 MB atau format gambar tidak disupport");
                    }
        }
    }              
            });

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

    if(uploadimage == 'thumbnail-upload-image'){               
        $('#icon-thumbnail-upload-image').attr('src', e.target.result);                
        $('#icon_thumbnail').show(); 
      }

      };
        
    var image = input.files[0].size;
    console.log(image)
    if(image>2048000) //do something if file size more than 1 mb (1048576)
    {
      swal("Maaf,", "Maksimal ukuran image adalah 2MB", "error");
      return removeUploadCrop(idremove, uploadcontent, wrap);     
    }
    
    reader.readAsDataURL(input.files[0]);    
  
    } else {
    removeUploadCrop(idremove, uploadcontent, wrap);
    }
  }

  function removeUploadCrop(uploadinput, uploadcontent, wrap, index=0) {
    $('#'+uploadinput).replaceWith($('#'+uploadinput).val(''));
    $('#'+uploadcontent).hide();
    if(uploadcontent == 'thumbnail-upload-content'){
    $('#isImage').val('1');
    $('#isIconImage').val('1');

        $('#icon_thumbnail').hide(); 
      }
  $('#'+wrap).show();
  if(index != 0){
    $('#isGalleryImage'+index).val('1');
  }
  $("#"+uploadinput).attr( "required", true);
  uploadwrap = wrap;
  }

  var tableindex = 1;

  function add_gallery_element(){
      $("#list_gallery").append('<div id="gallery_'+tableindex+'" style="border: 1px solid #ddd;padding: 15px; border-radius: 15px;margin-bottom: 3%"><input type="hidden" name="isGalleryImage'+tableindex+'" id="isGalleryImage'+tableindex+'" value="1"><input type="hidden" name="galleryBase64'+tableindex+'" id="galleryBase64'+tableindex+'" value=""> <div class="clearfix"><div style="float: right;font-size: 25px;margin-bottom: 5px"><a href="javascript:void(0)" onclick="remove_gallery('+tableindex+')"><i class="fa fa-trash" style="color: red"></i></a></div></div><div class="image-upload-wrap" id="thumbnail-upload-wrap-'+tableindex+'" style="margin-top:1%;"><input class="file-upload-input" name="gallery'+tableindex+'" id="thumbnail-upload-input-'+tableindex+'" type="file" onchange="readURLCrop(this, \'thumbnail-upload-wrap-'+tableindex+'\', \'thumbnail-upload-image-'+tableindex+'\', \'thumbnail-upload-content-'+tableindex+'\', \'thumbnail-title-'+tableindex+'\')" accept=".png,.jpg,.gif" required/><div class="drag-text"><h3>Drag and drop a file or Click</h3></div></div><div class="file-upload-content" id="thumbnail-upload-content-'+tableindex+'"><img style="padding-top:0" class="file-upload-image" id="thumbnail-upload-image-'+tableindex+'" src="#" alt="your image" /><div class="image-title-wrap" style="padding-bottom:8px"><button style="font-family:montserrat" type="button" onclick="removeUploadCrop(\'thumbnail-upload-input-'+tableindex+'\', \'thumbnail-upload-content-'+tableindex+'\', \'thumbnail-upload-wrap-'+tableindex+'\', '+tableindex+')" class="remove-image">Remove <span class="image-title" id="thumbnail-title-'+tableindex+'">Uploaded Image</span></button><button type="button" href="javascript:void(0)" onclick="showCropThumbnail(\'thumbnail-upload-image-'+tableindex+'\', '+tableindex+')" class="remove-image" style="background-color: #5cb85c;border-bottom: 4px solid #4cae4c;width: 200px;margin-left: 3px;">Crop Image </button></div></div><textarea class="form-control" style="margin-top: 2%;" name="gallery_caption'+tableindex+'" placeholder="Gallery Caption"></textarea></div>');      
      index_gallery.push(tableindex);
      window.scrollTo(0,document.body.scrollHeight);
      tableindex++;  
    }

    function remove_gallery(index){      
      $('#gallery_'+index).remove();

      const index_remove = index_gallery.indexOf(index);  
  if (index_remove !== -1) {    
    index_gallery.splice(index_remove, 1);
  }              
    }      
            
            </script>

          </body>
          </html>