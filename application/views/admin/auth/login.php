<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- LOGIN-->
    <!--===============================================================================================-->	
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/admin/login/images/icons/favicon.ico')?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/login/vendor/bootstrap/css/bootstrap.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/login/vendor/animate/animate.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/login/vendor/css-hamburgers/hamburgers.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/login/vendor/animsition/css/animsition.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/login/vendor/select2/select2.min.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/login/vendor/daterangepicker/daterangepicker.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/login/css/util.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/login/css/main.css')?>">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
        <span class="login100-form validate-form"><?php echo form_open("admin/auth/login");?>
        <span id="indfoMessage"><?php echo $message;?></span>
					<span class="login100-form-title p-b-34">
            <h1><?php echo lang('login_heading');?></h1>
            <p><?php echo lang('login_subheading');?></p>
					</span>
					
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
            <p><?php echo lang('login_identity_label', 'identity');?>
            <?php echo form_input($identity);?></p>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
            <p><?php echo lang('login_password_label', 'password');?>
            <?php echo form_input($password);?><input type="hidden" value="<?php echo date("Y-m-d H:i:s") ?>" name="tgl" placeholder="inpyt"></p>
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
            <p><?php echo lang('login_remember_label', 'remember');?>&nbsp;&nbsp;
            <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?></p>
          </div>

          <div class="container-login100-form-btn">
						<button class="login100-form-btn">
            <?php echo form_submit('submit');?>Sign in
						</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
						</span>

						<a href="#" class="txt2">
            <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
						</a>
					</div>
          <?php echo form_close();?>
          </span>

				<div class="login100-more" style="background-image: url('<?php echo base_url('assets/img/fileuser/contact.jpg')?>');"><img class="imgfajar" src="<?php echo base_url('assets/img/fileuser/logonamafajar.png')?>" alt=""></div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--LOGIN-->
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/admin/login/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/admin/login/vendor/animsition/js/animsition.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/admin/login/vendor/bootstrap/js/popper.js')?>"></script>
	<script src="<?php echo base_url('assets/admin/login/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/admin/login/vendor/select2/select2.min.js')?>"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/admin/login/vendor/daterangepicker/moment.min.js')?>"></script>
	<script src="<?php echo base_url('assets/admin/login/vendor/daterangepicker/daterangepicker.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/admin/login/vendor/countdowntime/countdowntime.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/admin/login/js/main.js')?>"></script>


</body>
</html>
