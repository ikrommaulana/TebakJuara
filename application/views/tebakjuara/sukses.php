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
	.hover03 figure img {
		-webkit-transform: scale(1);
		transform: scale(1);
		-webkit-transition: .3s ease-in-out;
		transition: .3s ease-in-out;
	}
	.hover03 figure:hover img {
		-webkit-transform: scale(0.8);
		transform: scale(0.8);
	}
	.poin {
		padding-top:40px;
	}
	.poin h4 {
		font-size:60px;
		line-height:60px;
		text-align:center;
		color:#fff;
	}
	.poin p {
		text-align:center;
		color:#fff;
	}
	div.win{
		background-color:#3a003d;
	}
	div.draw{
		background-color:#ed0050;
	}
	div.lose{
		background-color:#00ff99;
	}
	div.total{
		background-color:444;
	}
</style>
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
    <div style="padding-top:30px">
		<div align="center" class="col-xs-0 col-sm-0 col-md-2"></div>
		<div align="center" class="col-xs-12 col-sm-9 col-md-8"><img src="<?php echo base_url();?>uploads/sukses-page.png" align="center" style="width:100%" /></div>
	</div>
    <div>  
		<div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;"><a href="<?php echo base_url();?>tebakjuara/home" class="btn btn-danger" role="button" style="width:50%;">Kembali</a></div>
	</div>
    <div>  
		<div class="col-xs-12 col-sm-12 col-md-12" style="padding-top:30px"><br/></div>
		</div>
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
