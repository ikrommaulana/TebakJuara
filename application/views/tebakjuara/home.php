<!DOCTYPE html>
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $title; ?></title>

	<link rel="shortcut icon" href="<?php echo base_url(); ?>uploads/logo/logo-fav.png">
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/bootstrap-social.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<style>
	body{
		background-image: url("<?= site_url();?>uploads/background-tebakjuara-inside.jpg");
		background-size: cover;          
		background-repeat: no-repeat;     
		background-attachment:fixed;	       
		color:#000;
		font-family: 'Poppins', sans-serif;
	}
	nav.header-fix{
		background-image: url("<?= site_url();?>uploads/background-tebakjuara-header.png");
		background-size: 100% 140px;          
		background-repeat: no-repeat;     
		background-attachment:fixed;	
		height:140px;
	}
	ul.navbar-nav{
		font-weight:bold;
	}	
	div.diamond-logo{
		position:absolute;
		top:0;
		right:0;
	}
	.hover08 figure img {
		-webkit-filter: grayscale(100%);
		filter: grayscale(100%);
		-webkit-transition: .3s ease-in-out;
		transition: .3s ease-in-out;
	}
	.hover08 figure:hover img {
		-webkit-filter: grayscale(0);
		filter: grayscale(0);
	}
	.hover09 figure img {
		-webkit-filter: grayscale(100%);
		filter: grayscale(100%);
		-webkit-transition: .3s ease-in-out;
		transition: .3s ease-in-out;
	}
	img .locked{
		position:absolute;
		top:50px;
	}
</style>
	<script language='javascript'>
	function validAngka(a)
	{
		if(!/^[0-9.]+$/.test(a.value))
		{
		a.value = a.value.substring(0,a.value.length-1000);
		}
	}
	function startCalc(){
		interval = setInterval("calc()",1);
		}
	function calc(){
		one = document.autoSumForm.win.value;
		two = document.autoSumForm.draw.value;
		three = document.autoSumForm.lose.value;
		document.autoSumForm.jumlah.value = (one * 3) + (two * 1) + (three * 0);
		}
	function stopCalc(){
		clearInterval(interval);
		}
	</script>  
</head>

<body id="page-top" data-spy="scroll">
	 <!-- Navigation -->
    <nav class="navbar navbar-fixed-top header-fix" role="navigation" style="">
        <div class="container">
            <!--div class="navbar-header page-scroll" style="width:0">
                <a class="page-scroll" href="#page-top"><img src="http://www.mncplaymedia.com/uploads/logo-play-media.png" alt="Logo MNC Play" width="145px"/></a>
            </div>-->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
					<li>
                        <a class="page-scroll" href="http://www.beinsports.com/id/liga-primer/jadwal" target="_blank">Jadwal Pertandingan</a>
                    </li>
					<li>
                        <a class="page-scroll" href="http://microsite.mncplay.id/tebakjuara/tebak/tengahmusim">Hasil Tebakan</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url();?>tebakjuara/login/logout">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
			<div class="diamond-logo">
			<img src="<?php echo base_url();?>uploads/logo-diamond.png" width="175px"/>
			</div>
        </div>
        <!-- /.container -->
    </nav>
    <div style="padding-top:50px">
        <div align="center"><h3 style="color:#000;">Klub manakah yang akan menjadi juara <b>half season</b> dan <b>full season</b> Premier League 2017/2018?</h3><br/></div>
		<div class="col-xs-4 col-sm-3 col-md-12"></div>
		<div class="col-xs-0 col-sm-0 col-md-1"></div>
		<div class="col-xs-6 col-sm-6 col-md-5 col-lg-5 hover09" style="padding:0px;"><figure><a href="#"><img src="<?php echo base_url();?>uploads/1.png" width="100%"/><img src="<?php echo base_url();?>uploads/locked.png" width="20%" style="position: absolute;top:20%;left:50%;"/></a></figure></div>
		<div class="col-xs-6 col-sm-6 col-md-5 col-lg-5 hover08" style="padding:0px;"><figure><a href="<?php echo base_url();?>tebakjuara/tebak/akhirmusim" ><img src="<?php echo base_url();?>uploads/2.png" width="100%"/></a></figure></div>
		<div class="col-xs-0 col-sm-0 col-md-1"></div>
    </div>
    <div>  
		<div class="col-xs-12 col-sm-12 col-md-12" style="padding-top:10px"><br/></div>
	</div>
    <div>  
		<div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4" style="text-align:center;">
		<img src="<?php echo base_url();?>uploads/bein1.png" width="25%" style="margin:2 13px;">
		<img src="<?php echo base_url();?>uploads/bein2.png" width="25%" style="margin:2 13px;">
		<img src="<?php echo base_url();?>uploads/bein3.png" width="25%" style="margin:2 13px;">
		</div>
	</div>

    <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/chart-data.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/easypiechart.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/easypiechart-data.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
	<!-- Google Code for Premier League Campaign Conversion Page -->
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 874903023;
	var google_conversion_language = "en";
	var google_conversion_format = "3";
	var google_conversion_color = "ffffff";
	var google_conversion_label = "DoU6CLH4wHMQ7-uXoQM";
	var google_remarketing_only = false;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/874903023/?label=DoU6CLH4wHMQ7-uXoQM&amp;guid=ON&amp;script=0"/>
	</div>
	</noscript>

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
