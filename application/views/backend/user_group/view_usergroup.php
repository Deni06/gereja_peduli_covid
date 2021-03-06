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
  <title>View User Group - Gereja Peduli Covid</title> 
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
    .control-group {
  display: inline-block;  
  height: 210px;
  margin: 10px;
}
.control {  
  position: relative;
  padding-left: 30px;
  margin-bottom: 15px;
  cursor: pointer;
  font-size: 1.1em;
}
.control input {
  position: absolute;
  z-index: -1;
  opacity: 0;
}
.control__indicator {
  position: absolute;
  top: 2px;
  left: 0;
  height: 20px;
  width: 20px;
  background: #e6e6e6;
}
.control:hover input ~ .control__indicator,
.control input:focus ~ .control__indicator {
  background: #ccc;
}
.control input:checked ~ .control__indicator {
  background: #2aa1c0;
}
.control:hover input:not([disabled]):checked ~ .control__indicator,
.control input:checked:focus ~ .control__indicator {
  background: #0e647d;
}
.control input:disabled ~ .control__indicator {
  background: #e6e6e6;
  opacity: 0.6;
  pointer-events: none;
}
.control__indicator:after {
  content: '';
  position: absolute;
  display: none;
}
.control input:checked ~ .control__indicator:after {
  display: block;
}
.control--checkbox .control__indicator:after {
  left: 8px;
  top: 4px;
  width: 6px;
  height: 10px;
  border: solid #fff;
  border-width: 0 2px 2px 0;
  transform: rotate(45deg);
}
.control--checkbox input:disabled ~ .control__indicator:after {
  border-color: #7b7b7b;
}
label{
      font-size: 1.1em;
  }
  </style>

</head>
<body>
  <div id="container" class="effect mainnav-lg">

    <!--NAVBAR-->
    <!--===================================================-->
    <?php
    $this->load->view('backend/layout/header');   
    
    $group_access = $this->user_library->show_user_group_access();
                        if($group_access != null && $group_access != ""){                                                        
                $add_access = strpos($group_access, ';2;');
                $edit_access = strpos($group_access, ';3;');
                $delete_access = strpos($group_access, ';4;');                
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
                <b>User Group View</b> 
              </div>
            </div>
            <div class="panel-body">
              <div class="panel panel-default">                
                <div class="panel-body">                  
                      <div>
                        <h5 style="font-weight: 800; font-size: 14px"> User Group Name</h5>
                        <p style="font-size: 14px"><?php echo $user_group['gro_name'];?></p>
                      </div>

                      <div style="margin-bottom:2.5%;margin-top:2.5%"><h4>Previledge</h4></div>                                                    
                      <div class="form-group">
		<label for="cat_name" class="col-md-2 control-label">Article</label>		
        <div class="form-group">    
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> View
    <input type="checkbox" name="articles[]" class="form-check-input my-check" id="article1" value="1" onclick="article_checkbox_robot(true)" <?php in_array ('1', $article) ? print "checked" : ""; ?> disabled>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> Add
    <input type="checkbox" name="articles[]" class="form-check-input my-check" id="article2" value="2" onclick="article_checkbox_robot()" <?php in_array ('2', $article) ? print "checked" : ""; ?> disabled>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> Edit
    <input type="checkbox" name="articles[]" class="form-check-input my-check" id="article3" value="3" onclick="article_checkbox_robot()" <?php in_array ('3', $article) ? print "checked" : ""; ?> disabled>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> Delete
    <input type="checkbox" name="articles[]" class="form-check-input my-check" id="article4" value="4" onclick="article_checkbox_robot()" <?php in_array ('4', $article) ? print "checked" : ""; ?> disabled>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox"><i class="input-helper"></i> Review
    <input type="checkbox" name="articles[]" class="form-check-input my-check" id="article5" value="5" onclick="article_checkbox_robot()" <?php in_array ('5', $article) ? print "checked" : ""; ?> disabled>
      <div class="control__indicator"></div>
    </label>
    </div>
	</div> 

                               <div class="form-group">
		<label for="cat_name" class="col-md-2 control-label">User</label>		
        <div class="form-group">    
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> View
    <input type="checkbox" name="users[]" class="form-check-input my-check" id="user1" value="1" onclick="user_checkbox_robot(true)" <?php in_array ('1', $user) ? print "checked" : ""; ?> disabled>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> Add
    <input type="checkbox" name="users[]" class="form-check-input my-check" id="user2" value="2" onclick="user_checkbox_robot()" <?php in_array ('2', $user) ? print "checked" : ""; ?> disabled>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> Edit
    <input type="checkbox" name="users[]" class="form-check-input my-check" id="user3" value="3" onclick="user_checkbox_robot()" <?php in_array ('3', $user) ? print "checked" : ""; ?> disabled>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox"><i class="input-helper"></i> Delete
    <input type="checkbox" name="users[]" class="form-check-input my-check" id="user4" value="4" onclick="user_checkbox_robot()" <?php in_array ('4', $user) ? print "checked" : ""; ?> disabled>
      <div class="control__indicator"></div>
    </label>
    </div>
	</div>	 

                                <div class="form-group">
		<label for="cat_name" class="col-md-2 control-label">User Group</label>		
        <div class="form-group">    
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> View
    <input type="checkbox" name="user_groups[]" class="form-check-input my-check" id="user_group1" value="1" onclick="user_group_checkbox_robot(true)" <?php in_array ('1', $user_group_access) ? print "checked" : ""; ?> disabled>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> Add
    <input type="checkbox" name="user_groups[]" class="form-check-input my-check" id="user_group2" value="2" onclick="user_group_checkbox_robot()" <?php in_array ('2', $user_group_access) ? print "checked" : ""; ?> disabled>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> Edit
    <input type="checkbox" name="user_groups[]" class="form-check-input my-check" id="user_group3" value="3" onclick="user_group_checkbox_robot()" <?php in_array ('3', $user_group_access) ? print "checked" : ""; ?> disabled>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox"><i class="input-helper"></i> Delete
    <input type="checkbox" name="user_groups[]" class="form-check-input my-check" id="user_group4" value="4" onclick="user_group_checkbox_robot()" <?php in_array ('4', $user_group_access) ? print "checked" : ""; ?> disabled>
      <div class="control__indicator"></div>
    </label>
    </div>
	</div>	  

                                <div class="form-group">
		<label for="cat_name" class="col-md-2 control-label">Donasi</label>		
        <div class="form-group">    
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> View
    <input type="checkbox" name="donations[]" class="form-check-input my-check" id="donasi1" value="1" onclick="donasi_checkbox_robot(true)" <?php in_array ('1', $donasi) ? print "checked" : ""; ?> disabled>
      <div class="control__indicator"></div>
    </label>    
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> Edit
    <input type="checkbox" name="donations[]" class="form-check-input my-check" id="donasi2" value="2" onclick="donasi_checkbox_robot()" <?php in_array ('2', $donasi) ? print "checked" : ""; ?> disabled>
      <div class="control__indicator"></div>
    </label>   
    </div>
	</div>	  

                                <div class="form-group">
		<label for="cat_name" class="col-md-2 control-label">Kontak Kami</label>		
        <div class="form-group">    
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> View
    <input type="checkbox" name="contacts[]" class="form-check-input my-check" id="contact1" value="1" onclick="kontak_kami_checkbox_robot(true)" <?php in_array ('1', $contact) ? print "checked" : ""; ?> disabled>
      <div class="control__indicator"></div>
    </label>    
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> Edit
    <input type="checkbox" name="contacts[]" class="form-check-input my-check" id="contact2" value="2" onclick="kontak_kami_checkbox_robot()" <?php in_array ('2', $contact) ? print "checked" : ""; ?> disabled>
      <div class="control__indicator"></div>
    </label>    
    </div>
	</div>	  

                                <div class="form-group">
		<label for="cat_name" class="col-md-2 control-label">Iklan</label>		
        <div class="form-group">    
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> View
    <input type="checkbox" name="ads[]" class="form-check-input my-check" id="ads1" value="1" onclick="ads_checkbox_robot(true)" <?php in_array ('1', $ads) ? print "checked" : ""; ?> disabled>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> Add
    <input type="checkbox" name="ads[]" class="form-check-input my-check" id="ads2" value="2" onclick="ads_checkbox_robot()" <?php in_array ('2', $ads) ? print "checked" : ""; ?> disabled>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> Edit
    <input type="checkbox" name="ads[]" class="form-check-input my-check" id="ads3" value="3" onclick="ads_checkbox_robot()" <?php in_array ('3', $ads) ? print "checked" : ""; ?> disabled>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox"><i class="input-helper"></i> Delete
    <input type="checkbox" name="ads[]" class="form-check-input my-check" id="ads4" value="4" onclick="ads_checkbox_robot()" <?php in_array ('4', $ads) ? print "checked" : ""; ?> disabled>
      <div class="control__indicator"></div>
    </label>
    </div>
	</div>

                      <div style="margin-top: 2.5%">
                        <div class="row">
                          <div class="col-md-7 col">                                  
                            <a href="javascript:void(0)" onclick="location.assign('<?=site_url('admin/user_group/')?>')" name="submit" style="background: #455a64; color:white;font-family:montserrat;margin-right:2%" class="btn col-md-3"><i class="fa fa-chevron-left" style="margin-right: 6%;font-size:1em;font-weight:500px"></i>BACK</a>
                            <?php    
                if($edit_access !== false){
                ?>
            <a href="javascript:void(0)" onclick="location.href='<?=site_url('admin/user_group/edit/'.$user_group['gro_id'])?>'" style="border: 2px solid #455a64;font-family:montserrat;margin-right:2%" class="btn col-md-3">EDIT<i class="fa fa-pencil" style="margin-left: 6%;font-size:1.2em"></i></a>
                <?php }
                if($delete_access !== false){
                  ?>
              <a style="border: 2px solid red;font-family:montserrat;color:red" class="btn col-md-3" onclick='delete_item("<?=$user_group['gro_id']?>")'>DELETE<i class="fa fa-trash" style="margin-left: 6%;font-size:1.2em"></i></a>
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
var link = "<?=base_url('admin/user_group/')?>";    
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
              window.location.href = "<?php echo site_url('admin/user_group/remove/')?>/"+id;                
            }
        });
    }
</script>

</body>
</html>