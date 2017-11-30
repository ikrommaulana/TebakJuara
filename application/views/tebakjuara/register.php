<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register</title>

	<link rel="shortcut icon" href="<?php echo base_url(); ?>uploads/logo/logo-fav.png">
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<style>
	body{
		background-image: url("<?= site_url();?>uploads/background-tebakjuara.jpg");
		background-size: cover;    
		background-repeat: no-repeat;      
		background-attachment: fixed;     
		color:#000;
	}
	div.panel-body{
		background-color:#38013b;
		color:#fff;
	}
	
</style>
</head>

<body>
    <div>
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-3 col-md-offset-8" style="padding-top:30px">
            <div class="login-panel panel panel-default">
			<img src="<?= site_url();?>uploads/header-login.jpg" align="center" style=';' width="100%">
                <div class="panel-body">
                    <?php echo form_open('tebakjuara/reg'); ?>
                    <form role="form" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Nama" name="name" type="text" autofocus="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Phone Number" name="phone" type="text" autofocus="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="email" type="text" autofocus="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Confirm Password" name="password_conf" type="password" value="">
                            </div>
							<input name="status" value="0" type="hidden">
                            <input name="register" value="Register" type="submit" class="btn btn-primary btn-block">
							<a href="<?php echo base_url(); ?>tebakjuara/login/" name="back" class="btn btn-default btn-block"/>Login</a>
                            <div class="text-center text-error">
								<p> <?php echo form_error('name'); ?> </p>  
								<p> <?php echo form_error('email'); ?> </p>
								<p> <?php echo form_error('username'); ?> </p>
								<p> <?php echo form_error('password'); ?> </p>
								<p> <?php echo form_error('password_conf'); ?> </p>
                            </div>
                        </fieldset>
                    </form>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->    
    
        

    <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/chart-data.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/easypiechart.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/easypiechart-data.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
    <script>
        !function ($) {
            $(document).on("click","ul.nav li.parent > a > span.icon", function(){        
                $(this).find('em:first').toggleClass("glyphicon-minus");      
            }); 
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function () {
          if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function () {
          if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })
    </script>   
</body>

</html>
