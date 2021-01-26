

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
    <title>Edit Kontak - Gereja Peduli Covid</title> 
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
    <link rel="stylesheet" href="<?=base_url('assets/css/intlTelInput.css');?>">
    <link href="<?=base_url('assets/sweetalert-master/dist/sweetalert.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/trumbowyg/dist/ui/trumbowyg.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/trumbowyg/dist/plugins/colors/ui/trumbowyg.colors.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/trumbowyg/dist/plugins/specialchars/ui/trumbowyg.specialchars.min.css')?>">    
    <script src="<?=base_url('assets/plugins/pace/pace.min.js')?>"></script>
    <script src="<?=base_url('assets/sweetalert-master/dist/sweetalert.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery-3.4.1.min.js')?>"></script>
    <script src="<?=base_url('/assets/ckeditor/ckeditor.js');?>"></script>
    <script src="<?=base_url('assets/js/croppie.js')?>"></script>
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

  .trumbowyg-button-pane {
    z-index: 0;    
  }  

  .input-group {
    display: flex;
  }

  .iti {
    margin-bottom: 0;
  }

  #cropIconLogo div img {
    background-color: black;
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
                        <h3 class="panel-title"><b>EDIT MY CHURCH INFO</b></h3>
                    </div>
                    <div class="panel-body">
                    <form role="form" id="myForm" method="POST" action="<?php echo site_url('admin/contact/doedit'); ?>" enctype="multipart/form-data" onsubmit="return checkImage()">
                        <div class="row">
                <!-- body items -->

                <!-- <div class="col-md-12"> -->
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
                                        <label for="name"><b>Organization Name</b></label>
                                        <input type="text" class="form-control" name="organization_name" id="company_name" placeholder="Organization Name" value="<?php echo $kontak->organization_name;?>" maxlength="50" required>    
                                    </div>      

                                    <div class="form-group" style="margin-bottom:3%;">
                                        <label for="name"><b>Email Address</b></label>
                                        <input type="text" class="form-control" name="email" id="company_name" placeholder="Email Address" value="<?php echo $kontak->email;?>" maxlength="50" required>                                           
                                    </div>                                                                        
                                    <div class="form-group" style="margin-bottom:4%;">
                                        <label for="name"><b>Address</b></label>
                                        <div style="margin-bottom: 2%;">
                                          <a href="javascript:void(0)" class="btn btn-primary" onclick="add_attachment_element()"> Add More Address <i class="fa fa-plus" style="margin-left: 10px;"></i></a>
                                        </div>    
                                        <div id="list_address">
                                        <?php
                                        $display = "";
                                        if(count($list_address) == 1){
                                          $display = "display:none";
                                        }
                                         ?>
                                          <?php for ($i=0;$i < count($list_address);$i++) { ?>
                                            <div id="address_<?=$i?>" class="input-group" style="margin-bottom: 1%" >
  <input type="text" class="form-control" name="address[]" placeholder="Address" value="<?php echo $list_address[$i]->address;?>" maxlength="50" required>
  <div class="input-group-append delete_icon" style="<?=$display?>">
    <a href="javascript:void(0)" onclick="remove_attachment(<?=$i?>)" class="btn"><i class="fa fa-times" style="font-size: 1.5em;color: red;"></i></a>
  </div>
</div>                                          

                                        <?php } ?>                                        
                                        </div>                                                                            
                                    </div>                                                   

                                    <div class="form-group" style="margin-bottom:3%;">
                                        <label for="name"><b>Description Organization</b></label>
                                        <textarea class="form-control" name="description" id="description" placeholder="Description Organization" required><?php echo $kontak->description;?></textarea>                                        
                                    </div>

                                    <div class="form-group" style="margin-bottom:3%;">
                                        <label for="name"><b>Phone Number</b></label>
                                        <input id="phone" onkeypress='return isNumberKey(event)' class="form-control" name="phone_number" type="tel" required maxlength="30" value="<?php echo $kontak->phone_number;?>">                                        
                                    </div> 

                                    <div class="form-group" style="margin-bottom:3%;">
                                        <label for="name"><b>Tagline</b></label>
                                        <textarea class="form-control" name="tagline" id="working_hour" placeholder="Tagline" required><?php echo $kontak->tagline;?></textarea>
                                    </div>  

                                    <input type="hidden" name="isLogoImage" id="isLogoImage" value="1"> 
                                    <input type="hidden" name="logoBase64" id="logoBase64" value=""> 
                                    <input type="hidden" name="isIconLogoImage" id="isIconLogoImage" value="1"> 
                                    <input type="hidden" name="iconLogoBase64" id="iconLogoBase64" value=""> 

                                    <div class="form-group" style="margin-bottom:5%;">
                                        <label for="name"><b>Logo</b></label>
                                        <div class="image-upload-wrap" id="logo-upload-wrap" style="margin-top:1%;">
                                            <input class="file-upload-input" id="logo-upload-input" type='file' name="logo" onchange="readURLCrop(this, 'logo-upload-wrap', 'logo-upload-image', 'logo-upload-content', 'logo-title'); setVal()" accept="image/*"/>
                                            <input type="hidden"name="img_hid" id="img_hid">
                                            <div class="drag-text">
                                                <h3>Drag and drop a file or Click</h3>
                                            </div>
                                        </div>
                                        <div class="file-upload-content" id="logo-upload-content">
                                          <div id="fixLogo">
                                            <img class="file-upload-image" id="logo-upload-image" alt="your image" />
                                            <div class="image-title-wrap">
                                                <button style="font-family:montserrat;margin-bottom:2%" type="button" onclick="removeUpload('logo-upload-input', 'logo-upload-content', 'logo-upload-wrap')" class="remove-image">Remove <span class="image-title" id="logo-title">Uploaded Image</span></button>
                                                <button type="button" href="javascript:void(0)"  onclick="showCropLogo()" class="remove-image" style="background-color: #5cb85c;border-bottom: 4px solid #4cae4c">Crop Image </button>
                                            </div>
                                          </div>                                            
                                            
                                    </div>
                                  </div>

                                    <div class="form-group" style="margin-bottom:5%;">
                                        <label for="name" style="margin-bottom:2%"><b>Logo (With Transparent Background)</b></label>
                                        <div class="image-upload-wrap" id="icon-logo-upload-wrap" style="margin-top:1%;">
                                            <input class="file-upload-input" id="icon-logo-upload-input" type='file' name="icon_logo" onchange="readURLCrop(this, 'icon-logo-upload-wrap', 'icon-logo-upload-image', 'icon-logo-upload-content', 'icon-logo-title'); setVal()" accept="image/*"/>
                                            <input type="hidden"name="img_hid" id="img_hid">
                                            <div class="drag-text">
                                                <h3>Drag and drop a file or Click</h3>
                                            </div>
                                        </div>
                                        <div class="file-upload-content" id="icon-logo-upload-content">
                                            <img class="file-upload-image" id="icon-logo-upload-image" alt="your image" style="padding:2%;margin:20px;background-color:black"/>
                                            <div class="image-title-wrap">
                                                <button style="font-family:montserrat" type="button" onclick="removeUpload('icon-logo-upload-input', 'icon-logo-upload-content', 'icon-logo-upload-wrap')" class="remove-image">Remove <span class="image-title" id="icon-logo-title">Uploaded Image</span></button>
                                                <button type="button" href="javascript:void(0)"  onclick="showCropIconLogo()" class="remove-image" style="background-color: #5cb85c;border-bottom: 4px solid #4cae4c">Crop Image </button>
                                            </div>
                                                                                                                                                                                                                          
                                        </div>                                          
                                                                                                                                  
                                    </div>                                                                    
                                    
                                    <?= '<script>window.addEventListener("load", (event) => {
                getImageDetail("'.base_url().'assets/images/organization/'.$kontak->logo.'","logo-upload-image", "logo-upload-content", "logo-title", "logo-upload-wrap","'.base_url().'assets/images/organization/", "logo-upload-input");                
                getImageDetail("'.base_url().'assets/images/organization/'.$kontak->icon_logo.'","icon-logo-upload-image", "icon-logo-upload-content", "icon-logo-title", "icon-logo-upload-wrap","'.base_url().'assets/images/organization/", "icon-logo-upload-input");                
                }); </script>'; ?>                                
                                                                                                                                                                                                      
                                </div>
                                <div class="col-md-7">
                                    <div class="row">
                                    <button type="submit" name="submittodetail" style="background: #455a64; color:white;font-family:montserrat; margin-right: 20px" class="btn col-md-5">  SAVE  <i class="fa fa-save" ></i></button>
                                        <a style="border: 2px solid #455a64;font-family:montserrat" class="btn col-md-5" onclick="location.href='<?=site_url('admin/contact/')?>'">  CANCEL  <i class="fa fa-ban"></i></a>
                                    </div>                                    
                                </div>
                            </div>                                  

                             
                            <div>                                
                            </div>                            
                           
                        </div><!-- /..panel-body -->
                    </div><!-- /..panel panel-default -->
                </div>

            </div>
</form>
                    </div>
                </div>                

                <div class="modal" id="modalCropLogo">
          <div class="modal-dialog" style="width:400px">
            <div class="modal-content">
              <div class="modal-body" style="display: inline-block;">
                <div id="cropLogo" style="width:350px"></div>
              </div>
              <div class="modal-footer">
        <button type="button" id="crop-logo-result" class="btn btn-success">Crop Image</button>
      </div>
            </div>
          </div>
        </div>

        <div class="modal" id="modalCropIconLogo">
          <div class="modal-dialog" style="width:400px">
            <div class="modal-content">
              <div class="modal-body" style="display: inline-block;">
                <div id="cropIconLogo" style="width:350px"></div>
              </div>
              <div class="modal-footer">
        <button type="button" id="crop-icon-logo-result" class="btn btn-success">Crop Image</button>
      </div>
            </div>
          </div>
        </div>

                <!--===================================================-->
                <!--<!--End page content-->

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
<script src="<?php echo base_url('assets/js/register-form.js');?>"></script>
<!--DataTables Sample [ SAMPLE ]-->
<script src="<?=base_url('assets/js/demo/tables-datatables.js')?>"></script>
<script src="<?php echo base_url('/assets/js/biomp.js');?>"></script>
<script src="<?php echo base_url('/assets/js/intlTelInput.js');?>"></script>
<script src="<?=base_url('assets/trumbowyg/dist/trumbowyg.min.js')?>"></script>          
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/colors/trumbowyg.colors.min.js')?>"></script>
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/lineheight/trumbowyg.lineheight.min.js')?>"></script>
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/specialchars/trumbowyg.specialchars.min.js')?>"></script>
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/upload/trumbowyg.upload.min.js')?>"></script>
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/fontsize/trumbowyg.fontsize.min.js')?>"></script>          
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/resizimg/resizable-resolveconflict.min.js')?>"></script>          
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/resizimg/trumbowyg.resizimg.js')?>"></script>
          <script src="<?=base_url('assets/jquery-resizable/dist/jquery-resizable.min.js')?>"></script>          
<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      preferredCountries: ['ID', 'us'],
      separateDialCode: true,
      formatOnDisplay: false,
      customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
      return "Nomor Telepon Anda (" + selectedCountryPlaceholder + ")";
  },
      utilsScript: "<?php echo base_url('/assets/js/utils.js');?>",
    });        

    $('#description').trumbowyg({
              btns: [
        ['viewHTML'],
        ['undo', 'redo'], // Only supported in Blink browsers
        ['formatting'],
        ['bold', 'italic', 'underline', 'strikethrough'],
        // ['superscript', 'subscript'],
        // ['link'],
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
              name: 'folder', value: 'organization'
            }],
            urlPropertyName: 'url',                        
                    error: function (data) {                      
                      console.log(data);
                        alert("gambar melebihi 2 MB atau format gambar tidak disupport");
                    }
        }
    }              
            });

    function checkImage() {        
        var f = document.getElementsByTagName('form')[0];      
        var itiPhoneNumber = window.intlTelInputGlobals.getInstance(input);          
        var phone = itiPhoneNumber.getNumber();        
        $('#phone').val(phone);                            
        
        if(!itiPhoneNumber.isValidNumber()){                    
            swal("Sorry", "The Phone Number format you entered is incorrect", "error");                       
      return false;
     }else{
            newLogo = new Image();
      newLogo.src = $('#logo-upload-image').attr('src');       
      newLogo.onload = function() {                        
        if(this.width != 182 || this.height != 70){      
            swal("Maaf", "Logo yang anda pilih harus berukuran 182x70 px", "error");
            return false;
          }else{
            newIconLogo = new Image();
      newIconLogo.src = $('#icon-logo-upload-image').attr('src');       
      newIconLogo.onload = function() {                        
        if(this.width != 182 || this.height != 70){
            swal("Maaf", "Logo (transparent background) yang anda pilih harus berukuran 182x70 px", "error");
            return false;
          }else{
            showLoading();
        f.submit();
        return true;
          }                  
      };
          }  
      };      
     }                    
      return false;
    };

    function showLoading(){
      $('#modalLoading').modal('show');
      $('#modalLoading').data('bs.modal').options.backdrop = 'static';
      $('#description').data('trumbowyg').destroy();  
    };

    var tableindex = "<?=count($list_address)?>";
    
    function add_attachment_element(){
      $("#list_address").append('<div class="input-group" id="address_'+tableindex+'"  style="margin-bottom: 1%" ><input type="text" class="form-control" name="address[]" placeholder="Address" maxlength="50" required><div class="input-group-append  delete_icon"><a href="javascript:void(0)" onclick="remove_attachment('+tableindex+')" class="btn"><i class="fa fa-times" style="font-size: 1.5em;color: red"></i></a></div></div>');      
      tableindex++;
      $('.delete_icon').show();
    }

    function remove_attachment(index){      
      $('#address_'+index).remove();      
      if($('#list_address .input-group').length == 1){
        $('.delete_icon').hide();
      }
    }    

    uploadCropLogo = $('#cropLogo').croppie({
    enableExif: true,
    viewport: {
        width: 182,
        height: 70
    },
    boundary: {
        width: 275,
        height: 115
    }
});     

uploadCropIconLogo = $('#cropIconLogo').croppie({
    enableExif: true,
    viewport: {
        width: 182,
        height: 70
    },
    boundary: {
        width: 275,
        height: 107
    }
});  

function showCropLogo(){      
      uploadCropLogo.croppie('bind', {
        url: $('#logo-upload-image').attr('src')
      }).then(function(){
        console.log('jQuery bind complete');
      });   
      $('#modalCropLogo').modal('show');
    }; 

    function showCropIconLogo(){      
      uploadCropIconLogo.croppie('bind', {
        url: $('#icon-logo-upload-image').attr('src')
      }).then(function(){
        console.log('jQuery bind complete');
      });   
      $('#modalCropIconLogo').modal('show');
    }; 

    $('#crop-logo-result').on('click', function (ev) {
  uploadCropLogo.croppie('result', {
    type: 'canvas',
    size: 'viewport'
  }).then(function (resp) {     
    $('#logo-upload-image').attr('src', resp);
    $('#isLogoImage').val('0');
     $('#logoBase64').val(resp);
    $('#modalCropLogo').modal('hide');
  });
});

    $('#crop-icon-logo-result').on('click', function (ev) {
  uploadCropIconLogo.croppie('result', {
    type: 'canvas',
    size: 'viewport'
  }).then(function (resp) {    
     $('#icon-logo-upload-image').attr('src', resp);
     $('#isIconLogoImage').val('0');
     $('#iconLogoBase64').val(resp);
     $('#modalCropIconLogo').modal('hide');
  });
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
      };
        
    var image = input.files[0].size;
    console.log(image)
    if(image>2048000) //do something if file size more than 1 mb (1048576)
    {
      swal("Maaf,", "Maksimal ukuran image adalah 2MB", "error");
      return removeUpload(idremove, uploadcontent, wrap);     
    }
    
    reader.readAsDataURL(input.files[0]);

    if(uploadimage == 'logo-upload-image'){               
        $('#isLogoImage').val('1');
      }else if(uploadimage == 'icon-logo-upload-image'){               
        $('#isIconLogoImage').val('1');
      }      
  
    } else {
    removeUpload(idremove, uploadcontent, wrap);
    }
  }
        
</script>
<script src="<?php echo base_url('/assets/js/register-form.js');?>"></script>


</body>
</html>