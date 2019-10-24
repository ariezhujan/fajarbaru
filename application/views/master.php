
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
  
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>/assets/img/fileuser/logofajar.png">
  <link rel="icon" type="image/png" href="<?php echo base_url() ?>/assets/img/fileuser/logofajar.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  <?php 
     if(base_url()){
       echo "Home | Conveyor system, Tank & Mixer, Formulation system,Customized system"; 
     }
     elseif($this->uri->segment(1) == "home"){
       echo "Home | Conveyor system, Tank & Mixer, Formulation system,Customized system"; 
     }
     elseif($this->uri->segment(1) == "about"){
       echo "About us | Conveyor system, Tank & Mixer, Formulation system,Customized system";
     }
     elseif($this->uri->segment(1) == "conveyor"){
      echo "Conveyor | Conveyor system, Tank & Mixer, Formulation system,Customized system";
     }
     elseif($this->uri->segment(1) == "tangkimixer"){
      echo "Tank & Mixer | Conveyor system, Tank & Mixer, Formulation system,Customized system";
     }
     elseif($this->uri->segment(1) == "formulasi"){
      echo "Formulasi system | Conveyor system, Tank & Mixer, Formulation system,Customized system";
     }
     elseif($this->uri->segment(1) == "service"){
      echo "Service | Conveyor system, Tank & Mixer, Formulation system,Customized system";
     }
     elseif($this->uri->segment(1) == "contact"){
      echo "Contact us | Conveyor system, Tank & Mixer, Formulation system,Customized system";
     }
  ?>    
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <meta name="google-site-verification" content="qC3tbfGLe8eLeN8YqNvN1-3ri6FMrYGi-CtNTPGIASA" />
  <?php 
     if(base_url()){ ?>
      <meta name="keywords" content="conveyor system,conveyor terbaik, conveyor semarang">
      <meta name="description" content="PT.Fajar Baru Teknik Makmur bergerak di bidang industri perdagangan dan jasa dan mengkhususkan produk conveyor system, tank & mixer, formulation system, customize system, Alamat: Kawasan Industri Candi Blok 27 No. 5, Jl. Gatot Subroto, Ngaliyan, Kec. Ngaliyan, Kota Semarang, Jawa Tengah 50181">
      <meta property="fb:app_id" content="1059342214113009">
      <meta name="robots" content="noarchive">
      <meta name="subject" content="conveyor system">
      <meta property="og:title" content="Conveyor system, Tank & Mixer, Formulation system, Customize system" />
      <meta property="og:url" content="<?php echo base_url() ?>" />
      <meta property="og:image" content="<?php echo base_url('assets/img/fileuser/logofajar.png') ?>" />
      <meta property="og:image:type" content="image/png/jpeg" />
      <meta property="og:description" content="OPTIMAL SOLUTIONS TO OVERCOME TECHNICAL PROBLEMS" />
      <meta property="og:site_name" content="Fajar Baru Teknik Makmur" />
      <meta property="og:type" content="website" />
      <meta property="og:image:type" content="image/png/jpeg" />
      <meta property="og:image:width" content="640">
      <meta property="og:image:height" content="300"> 
     <?php } 
     elseif($this->uri->segment(1) == "home"){ ?>
       <meta name="keywords" content="fajar baru teknik makmur , conveyor system,conveyor terbaik, conveyor semarang">
      <meta name="description" content="PT.Fajar Baru Teknik Makmur bergerak di bidang industri perdagangan dan jasa dan mengkhususkan produk conveyor system, tank & mixer, formulation system, customize system, Alamat: Kawasan Industri Candi Blok 27 No. 5, Jl. Gatot Subroto, Ngaliyan, Kec. Ngaliyan, Kota Semarang, Jawa Tengah 50181">
      <meta property="fb:app_id" content="1059342214113009">
      <meta name="robots" content="noarchive">
      <meta name="subject" content="conveyor system">
      <meta property="og:title" content=" Conveyor system, Tank & Mixer, Formulation System, Customize system" />
      <meta property="og:url" content="<?php echo base_url('home') ?>" />
      <meta property="og:image" content="<?php echo base_url('assets/img/fileuser/logofajar.png') ?>" />
      <meta property="og:image:type" content="image/png/jpeg" />
      <meta property="og:description" content="OPTIMAL SOLUTIONS TO OVERCOME TECHNICAL PROBLEMS" />
      <meta property="og:site_name" content="Fajar Baru Teknik Makmur" />
      <meta property="og:type" content="website" />
      <meta property="og:image:type" content="image/png/jpeg" />
      <meta property="og:image:width" content="640">
      <meta property="og:image:height" content="300"> 
     <?php }
     elseif($this->uri->segment(1) == "about"){ ?>
      <meta name="keywords" content="fajar baru teknik makmur , conveyor system,conveyor terbaik, conveyor semarang">
      <meta name="description" content="PT.Fajar Baru Teknik Makmur bergerak di bidang industri perdagangan dan jasa dan mengkhususkan produk conveyor system, tank & mixer, formulation system, customize system, Alamat: Kawasan Industri Candi Blok 27 No. 5, Jl. Gatot Subroto, Ngaliyan, Kec. Ngaliyan, Kota Semarang, Jawa Tengah 50181">
      <meta property="fb:app_id" content="1059342214113009">
      <meta name="robots" content="noarchive">
      <meta name="subject" content="conveyor system">
      <meta property="og:title" content="Conveyor system, Tank & Mixer, Formulation system, Customize system" />
      <meta property="og:url" content="<?php echo base_url('about') ?>" />
      <meta property="og:image" content="<?php echo base_url('assets/img/fileuser/logofajar.png') ?>" />
      <meta property="og:image:type" content="image/png/jpeg" />
      <meta property="og:description" content="OPTIMAL SOLUTIONS TO OVERCOME TECHNICAL PROBLEMS" />
      <meta property="og:site_name" content="Fajar Baru Teknik Makmur" />
      <meta property="og:type" content="website" />
      <meta property="og:image:type" content="image/png/jpeg" />
      <meta property="og:image:width" content="400">
      <meta property="og:image:height" content="300">
     <?php }
     elseif($this->uri->segment(1) == "conveyor"){ ?>
      <meta name="keywords" content="fajar baru teknik makmur , conveyor system,conveyor terbaik, conveyor semarang">
      <meta name="description" content="conveyor system, Increase efficiency of order-fulfillment with the functionality of conveyor system. Conveyors are easily customized to meet your distribution needs.">
      <meta property="fb:app_id" content="1059342214113009">
      <meta name="robots" content="noarchive">
      <meta name="subject" content="Conveyor merupakan peralatan yang dapat bergerak digunakan sebagai alat angkut barang">
      <meta property="og:title" content="Conveyor system, Tank & Mixer, Formulation system, Customize system" />
      <meta property="og:url" content="<?php echo base_url('conveyor') ?>" />
      <meta property="og:image" content="<?php echo base_url('assets/img/fileuser/logofajar.png') ?>" />
      <meta property="og:image:type" content="image/png/jpeg" />
      <meta property="og:description" content="CONVEYOR SYSTEM  SOLUTIONS TO OVERCOME TECHNICAL PROBLEMS" />
      <meta property="og:site_name" content="Fajar Baru Teknik Makmur" />
      <meta property="og:type" content="website" />
      <meta property="og:image:type" content="image/png/jpeg" />
      <meta property="og:image:width" content="400">
      <meta property="og:image:height" content="300">
     <?php }
     elseif($this->uri->segment(1) == "tangkimixer"){
      echo "Tank & Mixer | Fajar Baru Teknik Makmur | Conveyor, Tank & Mixer, Formulation System,Customized system";
     }
     elseif($this->uri->segment(1) == "formulasi"){
      echo "Formulasi system | Fajar Baru Teknik Makmur | Conveyor, Tank & Mixer, Formulation System,Customized system";
     }
     elseif($this->uri->segment(1) == "service"){
      echo "Service | Fajar Baru Teknik Makmur | Conveyor, Tank & Mixer, Formulation System,Customized system";
     }
     elseif($this->uri->segment(1) == "contact"){
      echo "Contact us | Fajar Baru Teknik Makmur | Conveyor, Tank & Mixer, Formulation System,Customized system";
     }
  ?>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>/assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url() ?>/assets/css/style.css" rel="stylesheet" />
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
  </script>
</head>

<body class="landing-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
    	<div class="navbar-translate">
        <a class="navbar-brand" href="#" rel="tooltip" title="" data-placement="bottom" target="_blank" data-original-title="Teknologi Inovatif dan Konsultatif">
          <img src="<?php echo base_url('assets/img/fileuser/logofajar.png'); ?>" alt="">&nbsp;<p>Fajar Baru Teknik Makmur</p>
        </a>
      </div>
      <div class="navbar-translate">
        <a class="navbar-brand" href="<?php echo base_url('home') ?>" rel="tooltip">
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="<?php echo base_url() ?>/assets/img/fileuser/blurred-image-1.jpg">
        <ul class="navbar-nav">
          <li class="nav-item  <?php if($this->uri->segment(1) == "home"){echo "active";} ?>">
            <a class="nav-link" href="<?php echo base_url('home') ?>">Home</a>
          </li>
          <li class="nav-item <?php if($this->uri->segment(1) == "about"){echo "active";} ?>">
            <a class="nav-link" href="<?php echo base_url('about') ?>">About Us</a>
          </li>
          <li class="nav-item dropdown <?php if(($this->uri->segment(1) == "conveyor") OR ($this->uri->segment(1) == "tangkimixer") OR ($this->uri->segment(1) == "formulasi") OR ($this->uri->segment(1) == "customized")){echo "active";} ?>">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-expanded="false">
              <i class="now-ui-icons design_app"></i>
              <span style="color:#ffffff;">Product</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
              <a class="dropdown-item <?php if($this->uri->segment(1) == "conveyor"){echo "active";} ?>" href="<?php echo base_url('conveyor') ?>">
                <div class="text-produk-drop"><i class="now-ui-icons objects_spaceship"></i></div>&nbsp; Conveyor System 
              </a>
              <a class="dropdown-item <?php if($this->uri->segment(1) == "tangkimixer"){echo "active";} ?>" href="<?php echo base_url('tangkimixer') ?>">
                <div class="text-produk-drop"><i class="now-ui-icons shopping_box"></i></div>&nbsp; Tank & Mixer
              </a>
              <a class="dropdown-item <?php if($this->uri->segment(1) == "formulasi"){echo "active";} ?>" href="<?php echo base_url('formulasi') ?>">
                <div class="text-produk-drop"><i class="now-ui-icons business_bulb-63"></i></div>&nbsp; Formulasi System
              </a>
              <!--<a class="dropdown-item <?php if($this->uri->segment(1) == "customized"){echo "active";} ?>" href="<?php echo base_url('customized') ?>">
                <div class="text-produk-drop"><i class="now-ui-icons design-2_ruler-pencil"></i></i></div>&nbsp; Customized system
              </a>-->
            </div>
          </li>
          <li class="nav-item <?php if($this->uri->segment(1) == "service"){echo "active";} ?>">
            <a class="nav-link" href="<?php echo base_url('service') ?>">Service</a>
          </li>
          <li class="nav-item <?php if($this->uri->segment(1) == "contact"){echo "active";} ?>">
            <a class="nav-link" href="<?php echo base_url('contact') ?>">Contact us</a>
          </li>
          <li class="nav-item">
            <div  class="" id="google_translate_element"></div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="content"><!--Start Content Template-->
      <?php $this->load->view($content); ?>
    </div><!--End Content Template-->

        <!-- Footer -->


    <footer class="footer footer-default">
      <div class=" container-fluid ">
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script> FAJAR BARU TEKNIK MAKMUR

        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script src="<?php echo base_url() ?>/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="<?php echo base_url() ?>/assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?php echo base_url() ?>/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="<?php echo base_url() ?>/assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url() ?>/assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
</body>

</html>