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
  <title>View User - Gereja Peduli Covid</title> 
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
  <script src="<?=base_url('assets/sweetalert-master/dist/sweetalert.min.js')?>"></script>
  <script src="<?=base_url('assets/js/jquery-3.4.1.min.js')?>"></script>
  <script src="<?=base_url('/assets/ckeditor/ckeditor.js');?>"></script>
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
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
  </style>

</head>
<body>
  <div id="container" class="effect mainnav-lg">

    <!--NAVBAR-->
    <!--===================================================-->
    <?php
    $this->load->view('backend/layout/header');
    $user_access = $this->user_library->show_user_access();
                        if($user_access != null && $user_access != ""){                                                        
                $add_access = strpos($user_access, ';2;');
                $edit_access = strpos($user_access, ';3;');
                $delete_access = strpos($user_access, ';4;');                
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
                <b>User View</b> 
              </div>
            </div>
            <div class="panel-body">
              <div class="panel panel-default">                
                <div class="panel-body">   
                <div class="row">
                    <div class="col-md-6" style="border-right: 2px solid #383838;">
                      <div style="margin-top: 10px">
                        <h5 style="font-weight: 800; font-size: 14px"> FullName</h5>
                        <p style="font-size: 14px"><?php echo $me['usr_fullname'];?></p>
                      </div>

                      <div style="margin-top: 30px">
                        <h5 style="font-weight: 800; font-size: 14px"> Email Address</h5>
                        <p style="font-size: 14px"><?php echo $me['usr_name'];?></p>
                      </div>

                      <div style="margin-top: 30px">
                        <h5 style="font-weight: 800; font-size: 14px"> Address</h5>
                        <p style="font-size: 14px"><?php echo $me['usr_address'];?></p>
                      </div>

                      <div style="margin-top: 30px">
                        <h5 style="font-weight: 800; font-size: 14px"> Phone Number</h5>
                        <p style="font-size: 14px"><?php echo $me['usr_phone'] ;?></p>
                      </div>                      
                    </div>

                    <div class="col-md-6">                      
                      <div style="margin-top: 20px">
                        <h5 style="font-weight: 800; font-size: 14px"> City</h5>
                        <p style="font-size: 14px"><?php echo $me['usr_city'] ;?></p>
                      </div>

                      <div style="margin-top: 20px">
                        <h5 style="font-weight: 800; font-size: 14px"> Zip Code</h5>
                        <p style="font-size: 14px"><?php echo $me['usr_zip'] ;?></p>
                      </div>

                      <div style="margin-top: 20px">
                        <h5 style="font-weight: 800; font-size: 14px"> City Code</h5>
                        <p style="font-size: 14px"><?php echo $me['usr_citycode'];?></p>
                      </div>

                      <div style="margin-top: 20px">
                        <h5 style="font-weight: 800; font-size: 14px"> User Group</h5>
                        <p style="font-size: 14px"><?php echo $me['gro_name'];?></p>
                      </div>                      
                    </div>
                  </div>                      

                      <div style="margin-top: 4%">
                        <div class="row">
                          <div class="col-md-7 col">                                  
                            <a href="javascript:void(0)" onclick="location.assign('<?=site_url('admin/user/')?>')" name="submit" style="background: #455a64; color:white;font-family:montserrat;margin-right:2%" class="btn col-md-3"><i class="fa fa-chevron-left" style="margin-right: 6%;font-size:1em;font-weight:500px"></i>BACK</a>

                            <?php    
                if($edit_access !== false){
                ?>
            <a href="javascript:void(0)" onclick="location.href='<?=site_url('admin/user/edit/'.$me['usr_id'])?>'" style="border: 2px solid #455a64;font-family:montserrat;margin-right:2%" class="btn col-md-3">EDIT<i class="fa fa-pencil" style="margin-left: 6%;font-size:1.2em"></i></a>
                <?php }
                if($delete_access !== false){
                  ?>
              <a style="border: 2px solid red;font-family:montserrat;color:red" class="btn col-md-3" onclick='delete_item("<?=$me['usr_id']?>")'>DELETE<i class="fa fa-trash" style="margin-left: 6%;font-size:1.2em"></i></a>
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

<script> 
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
              window.location.href = "<?php echo site_url('admin/User/remove/')?>/"+id;
            }
        });
    }
</script>

</body>
</html>