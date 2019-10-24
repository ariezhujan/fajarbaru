<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/admin/img/apple-icon.png') ?>">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/admin/img/favicon.ico') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>ADMIN FAJAR BARU TEKNIK MAKMUR</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <script src="<?php echo base_url('assets/admin/js/bootstrapAddform.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/jquery-1.11.1.min.js') ?>"></script>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
     <link href="<?php echo base_url() ?>/assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="<?php echo base_url('assets/admin/css/bootstrap.min.css') ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/admin/css/light-bootstrap-dashboard.css?v=2.0.0') ?>" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url('assets/datatables/DataTables-1.10.18/css/jquery.dataTables.min.css') ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/admin/css/demo.css') ?>" rel="stylesheet" />
    <script src="<?php echo base_url('assets/ckeditor/ckeditor.js') ?>"></script>
    
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="<?php echo base_url('assets/admin/img/sidebar-5.jpg') ?>">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo" style="background-color:rgb(0, 39, 114);">
                    <a href="javascript:;" class="simple-text">
                    <img style="width:20%" src="<?php echo base_url('assets/img/fileuser/logofajar.png'); ?>" alt="">
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item <?php if($this->uri->segment(2) == 'dashboard'){echo "active";}?>">
                        <a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item <?php if($this->uri->segment(2) == "user_profile"){echo "active";} ?>">
                        <a class="nav-link" href="<?php echo base_url('admin/user_profile') ?>">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class="nav-item <?php if($this->uri->segment(2) == "home_page"){echo "active";} ?>">
                        <a class="nav-link" href="<?php echo base_url('admin/home_page') ?>">
                            <i class="nc-icon nc-icon nc-paper-2"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="nav-item <?php if($this->uri->segment(2) == "about_page"){echo "active";} ?>">
                        <a class="nav-link" href="<?php echo base_url('admin/about_page') ?>">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>About Us</p>
                        </a>
                    </li>

                    <li class="nav-item <?php if($this->uri->segment(2) == "conveyor_page"){echo "active";} ?>">
                        <a class="nav-link" href="<?php echo base_url('admin/conveyor_page') ?>">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Conveyor</p>
                        </a>
                    </li>
                    <li class="nav-item <?php if($this->uri->segment(2) == "tangkimixer_page"){echo "active";} ?>">
                        <a class="nav-link" href="<?php echo base_url('admin/tangkimixer_page') ?>">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Tangki & Mixer</p>
                        </a>
                    </li>
                    <li class="nav-item <?php if($this->uri->segment(2) == "formulasi_page"){echo "active";} ?>">
                        <a class="nav-link" href="<?php echo base_url('admin/formulasi_page') ?>">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Formulasi</p>
                        </a>
                    </li>
                    <li class="nav-item <?php if($this->uri->segment(2) == "service_page"){echo "active";} ?>">
                        <a class="nav-link" href="<?php echo base_url('admin/service_page') ?>">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Service</p>
                        </a>
                    </li>
                    <li class="nav-item <?php if($this->uri->segment(2) == "contact_page"){echo "active";} ?>">
                        <a class="nav-link" href="<?php echo base_url('admin/contact_page') ?>">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Contact Us</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <p class="navbar-brand">FAJAR BARU TEKNIK MAKMUR</p>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <span class="nav-link"> <?php echo anchor('admin/auth/logout', lang('index_logout_link'))?>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="section">
                        <!-- Start Content -->
                            <?php $this->load->view($content); ?>
                        <!-- End Content -->
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="<?php echo base_url()?> ">fajarbaru.co.id</a>
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>

</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url('assets/admin/js/core/jquery.3.2.1.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/admin/js/core/popper.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/admin/js/core/bootstrap.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/datatables/DataTables-1.10.18/js/jquery.dataTables.min.js') ?>"></script>

<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?php echo base_url('assets/admin/js/plugins/bootstrap-switch.js') ?>"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="<?php echo base_url('assets/admin/js/plugins/chartist.min.js') ?>"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url('assets/admin/js/plugins/bootstrap-notify.js') ?>"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="<?php echo base_url('assets/admin/js/light-bootstrap-dashboard.js?v=2.0.0') ?>" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url('assets/admin/js/demo.js') ?>"></script>
<script type="text/javascript">
        $(document).ready( function () {
        $('#example').DataTable();
        });
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
