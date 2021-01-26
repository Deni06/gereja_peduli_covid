<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <link rel="icon" href="<?php echo base_url('/assets/img/logo.png');?>" sizes="32x32" />
  <link rel="icon" href="<?php echo base_url('/assets/img/logo.png');?>" sizes="192x192" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('/assets/img/logo.png');?>" />
  <meta name="msapplication-TileImage" content="<?php echo base_url('/assets/img/logo.png');?>" />
  <title>Login - Gereja Peduli Covid</title>
  <!-- FONTS -->
  <link href= "<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <link href="<?php echo base_url('/assets/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700|Poppins:300,400,400i,600|Source+Sans+Pro:400,400i,600,700,900|Mukta:400,700,800|Oswald:400,600|Lato:400,400i,700|Roboto:300,400,500,700|Roboto+Slab:400,700|Playfair+Display:400,400i,700i,700|Catamaran:300,400,600,700|Merriweather:400,700|Montserrat:400,500,600|Nunito|Open+Sans:300,400,500,600|Caveat:400,700|Dancing+Script|Libre+Baskerville:400,700"
    rel="stylesheet">
  <!-- STYLES -->
  <!-- Main Style -->
  <link rel="stylesheet" id="style-main" href="<?php echo base_url('/assets/css/styles-main.css?v=1');?>">
  <link rel="stylesheet" id="swiper-main" href="<?php echo base_url('/assets/vendors/swiper/swiper.min.css');?>">
  <link rel="stylesheet" id="lity-main" href="<?php echo base_url('/assets/vendors/lity/lity.min.css');?>">
  <link rel="stylesheet" id="mediaelementplayer" href="<?php echo base_url('/assets/vendors/mediaelement/mediaelementplayer.min.css');?>">
  <link rel="stylesheet" id="range" href="<?php echo base_url('/assets/vendors/range/jquery.range.css');?>">
  <link rel="stylesheet" id="lightgallery" href="<?php echo base_url('/assets/vendors/lightgallery/lightgallery.min.css');?>">
  <link rel="stylesheet" id="style-link" href="<?php echo base_url('/assets/css/styles-9.css?v=32');?>">
  <!-- SCRIPTS -->
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-migrate-1.3.0.js" integrity="sha256-/Gj+NlY1u/J2UGzM/B2QrWR01trK8ZZqrD5BdqQUsac=" crossorigin="anonymous"></script>
<!-- Swiper -->
  <script src="<?php echo base_url('/assets/vendors/swiper/swiper.min.js');?>"></script>
  <!-- Isotope -->
  <script src="<?php echo base_url('/assets/vendors/isotope/isotope.pkgd.min.js');?>"></script>
  <!-- Images loaded library -->
  <script src="<?php echo base_url('/assets/vendors/lazyload/imagesloaded.pkgd.min.js');?>"></script>
  <!-- MediaElement js library (only for Aheto HTML) -->
  <script src="<?php echo base_url('/assets/vendors/mediaelement/mediaelement.min.js');?>"></script>
  <script src="<?php echo base_url('/assets/vendors/mediaelement/mediaelement-and-player.min.js');?>"></script>
  <!-- Typed animation text -->
  <script src="<?php echo base_url('/assets/vendors/typed/typed.min.js');?>"></script>
  <!-- Lity Lightbox -->
  <script src="<?php echo base_url('/assets/vendors/lity/lity.min.js');?>"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style-register.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/styling-compro.css');?>">

  <style>
    * {
        font-family: 'Montserrat' !important;
    }
  </style>
</head>

<body data-anm=".anm" class="saas">  
  <section class="aheto-banner aheto-banner--full-height d-flex aheto-banner--saas d-flex header-login" style="background-image: url('<?php echo base_url('/assets/img/backgrounds/gereja.jpg');?>');">
    <div class="container container-zero">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 login-height" style="background-color: white; padding: 6.2em 5% 5% 5%;">
          <div>
            <div class="aheto-heading t-left md-t-center aheto-heading--t-white">
              <h4 class="aheto-heading__title t-medium title-login">LOGIN KE AKUN <br> GEREJA PEDULI COVID ANDA</h1>
            </div>
          </div>
          <hr />
          <div class="margin-lg-20t">
            <form action="<?php echo base_url('/login/aksi_login');?>" id="msformleft" method="post">            
            <?php if($this->session->flashdata('error') != null ) {
                echo '<div class="alert alert-danger">
                <p style="color:#a94442;font-size:1.2em">'.$this->session->flashdata('error').'</p>
                </div>';
             } ?>
        
              <p class="input-label">Username</p>
              <input type="text" class="input-padding-10" name="username" placeholder="Masukan Username" required> <br>
              <p class="input-label">Password</p>
              <input type="password" class="input-padding-10" name="password" placeholder="Masukan Password" required><br>
              
              <input type="submit" value="LOGIN" class="aheto-btn   aheto-btn--alter  aheto-btn--shadow  grey-btn" style="width: 60%"><br>
              <input type="reset" onclick="location.href='<?php echo base_url();?>'" value="CANCEL" class="aheto-btn   aheto-btn--alter  aheto-btn--shadow  white-btn" style="width: 60%">
            </form>
          </div>
        </div>
        <div class="col-lg-6 col-md-0 col-sm-0 col-xs-0" >
          <div class="aheto-header-9__logo">
            <div class="logo" style="margin-right: -20%; margin-top: 5%"> 
              <a class="logo__link pull-right" href="<?php echo base_url('/');?>">
                <div class="logo__img-holder ">
                  <img class="logo__img" src="<?= base_url().'assets/images/organization/'.$kontak->logo?>" alt="Logo image" style="max-height: 100px">
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="aheto-footer aheto-footer-9" style="background-color: #424242">
    <div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12">
            <div class="aheto-footer-9__cr" style="margin-top: 20px; margin-bottom: 20px">
              <p class="aheto-footer-9__cr-text text-white copyright-p" style="text-align: center;">© 2019 CV. CIPTA AGUNG SEMESTA</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Magnific popup -->
  <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>  
  <script src="<?php echo base_url('/assets/vendors/magnific/jquery.magnific-popup.min.js');?>"></script>
  <!-- anm -->
  <script src="<?php echo base_url('/assets/vendors/animation/anm.min.js');?>"></script>
  <!-- Google maps -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARwCmK-LlGIH8Mv1ac4VyceMYUgg9vStM&amp;#038;&language=en"></script>
  <script src="<?php echo base_url('/assets/vendors/googlemap/google-maps.js?v=1');?>"></script>
  <!-- FullCalendar -->
  <!-- Parallax -->
  <script src="<?php echo base_url('/assets/vendors/parallax/parallax.min.js');?>"></script>
  <!-- asRange -->
  <script src="<?php echo base_url('/assets/vendors/range/jquery.range-min.js');?>"></script>
  <!-- lightgallery -->
  <script src="<?php echo base_url('/assets/vendors/lightgallery/lightgallery.min.js');?>"></script>
  <!-- Main script -->
  <script src="<?php echo base_url('/assets/vendors/script.js?v=1');?>"></script>
  <script src="<?php echo base_url('/assets/vendors/spectragram/spectragram.min.js');?>"></script>
  <script>
    $(document).ready(function() {
      jQuery.fn.spectragram.accessData = {
        accessToken: '4058508404.1677ed0.f87c0182df0d4512a9e01def0c53adb7'
      }

      $('.instafeed').spectragram('getUserFeed', {
        size: 'big',
        max: 6
      });
    });
  </script>
</body>

</html>
