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
<title>Login Tebak Skor MNC Play</title>

	<link rel="shortcut icon" href="<?php echo base_url(); ?>uploads/logo/logo-fav.png">
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/bootstrap-social.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<style>
	body{
		background-image: url("<?= site_url();?>uploads/background-tebakjuara.jpg");
		background-size:     cover;   
		background-repeat: no-repeat;      
		background-attachment:fixed;		
		color:#000;
	}
	.navbar-default .navbar-nav>li>a{
		color:#203a85;
		font-weight:bold;
		text-transform: uppercase;
	}
	.navbar-default {
		border-color:none;
	}
	div.panel-body{
		background-color:#38013b;
		color:#fff;
	}
</style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation 
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="padding:10px;background-color:#00ff99;">
        <div class="container">
            <div class="navbar-header page-scroll" style="width:0">
                <a class="page-scroll" href="#page-top"><img src="http://www.mncplaymedia.com/uploads/logo-play-media.png" alt="Logo MNC Play" width="145px"/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling
            <div class="collapse navbar-collapse navbar-ex1-collapse pull-right">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section 
					<li>
                        <a class="page-scroll" href="<?php echo base_url();?>premier_league">Jadwal Pertandingan</a>
                    </li>
					<li>
                        <a class="page-scroll" href="<?php echo base_url();?>premier_league_result">Hasil Pertandingan</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Tebak Skor</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse
        </div>
        <!-- /.container 
    </nav-->
    <div>
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-3 col-md-offset-8" style="padding-top:30px">
            <div class="login-panel panel panel-default">
			<img src="<?= site_url();?>uploads/header-login.jpg" align="center" style=';' width="100%">
                <div class="panel-body">
                    <?php echo form_open('tebakjuara/login/dologin/'); ?>
                    <form role="form" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <input name="submit" value="Login" type="submit" class="btn btn-primary btn-block">
                            <a href="<?php echo base_url(); ?>tebakjuara/reg/" name="register" class="btn btn-default btn-block"/>Register</a>
							<div class="text-center text-error">
                                <?php echo $error; ?>
                            </div>
							<div class="text-center text-error" style="margin:10px 0;">
                                Or
                            </div>
							<!--a href="#" class="btn btn-block btn-social btn-facebook"><span class="fa fa-facebook"></span> Login with Facebook</a>
							-->
							<a href="<?php echo base_url(); ?>tebakjuara/twitter/auth/" class="btn btn-block btn-social btn-twitter"><span class="fa fa-twitter"></span> Login with Twitter</a>
							
                        </fieldset>
                    </form>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div><!-- /.col-->
		
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-3 col-md-offset-8">
            <div class="login-panel panel panel-default">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#myModal">
				  Peraturan Tebak Juara
				</button>

				<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document" style="width:90%;">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Syarat dan ketentuan Tebak Juara Premier League MNC Play</h4>
					  </div>
					  <div class="modal-body">
							<div style="text-align:center"></div>
							<ol style="font-family:Calibri;font-size:16px;">
							<br/>
							<li>Peserta harus <a href="<?php echo base_url(); ?>tebakjuara/reg/" >Daftar</a> dan <a href="<?php echo base_url(); ?>tebakjuara/login/" >Login</a> terlebih dahulu</li>
							<li>Peserta harus memiliki kartu identitas yang berlaku (KTP atau SIM) dan berdomisili di wilayah Indonesia.</li>
							<li>Peserta harus follow akun social media MNC Play : <a href="http://www.facebook.com/mncplayID/" target="_blank">Facebook</a>, <a href="http://www.twitter.com/mncplayID/" target="_blank">Twitter</a>, <a href="https://www.instagram.com/mncplayID/" target="_blank">Instagram</a>.</li>
							<li>Peserta menebak prediksi juara Premier League musim 2017/2018 dan jumlah poin akhir yang didapat ketika akhir musim.</li>
							<li>Jumlah poin akhir yang ditebak berdasarkan jumlah poin Menang, Kalah dan Seri.</li>
							<li>Pemenang adalah User yang prediksi juaranya tepat dan jumlah poin yang ditebak sesuai atau hampir mendekati sesuai dengan hasil akhir Premier League.</li>
							<li>Jika ada User yang tebakan poin dan klubnya sama, maka akan dilakukan pemilihan berdasarkan jumlah Menang, Kalah dan Seri yang sesuai dengan tim yang didapat ketika akhir musim Premier League.</li>
							<li>Peserta hanya bisa menebak prediksi 1 kali dengan 1 akun yang digunakan</li>
							<li>Periode tebak juara akan dimulai pertengahan Juli sampai dengan akhir September 2017.</li>
							<li>Pemenang akan mendapatkan hadiah: (Smartphone, Jersey, Action Camera).</li>
							<li>Pemenang akan diumumkan di Facebook Fanpage, Twitter dan Instagram MNC Play.</li>
							<li>Pemenang yang terpilih akan dinyatakan gugur jika terbukti melakukan kecurangan dalam menebak.</li>
							<li>Keputusan juri bersifat mutlak dan tidak dapat diganggu gugat.</li>

							</ol>
						</div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					  </div>
					</div>
				  </div>
				</div>
			</div>
		</div>
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
