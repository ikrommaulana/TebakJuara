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
	.modal-header{
		background-color:#ed0050;
		border-bottom:0px;
	}
	.modal-title{
		color:#fff;
	}
	.modal-body{
		background-color:#3a003d;
		color:#fff;
	}
	h4{
		color:#fff;
	}
	p{
		color:#fff;
	}
	.modal-footer{
		background-color:#01ff83;
		border-top:0px;
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
	</script>
	<script language="javascript">
	function checkform(evt){        
		var myForm = document.tebakform;
        var one = document.getElementById("win").value;
		var two = document.getElementById("draw").value;
		var three = document.getElementById("lose").value;
		var poin = one + two + three;
        var condition = true;
        if(myForm.win.value==""){
            alert("Masukkan jumlah menang."); 
            myForm.win.focus();
            condition = false;
        }
        if (myForm.draw.value==""){
            alert("Masukkan jumlah seri.");
            myForm.drawocus();
            condition = false;
        }
        if(myForm.lose.value==""){
            alert("Masukkan jumlah kalah.");
            myForm.lose.focus();
            condition = false;
        }
        if(poin != '19') {
			alert("Jumlah pertandingan harus 19.");
            condition = false;
		}
        if(condition){ condition =  confirm('Do you want to submit the form?'); }

        if(!condition) {
            if(evt.preventDefault) { event.preventDefault(); }    
            else if(evt.returnValue) { evt.returnValue = false; }    
            else { return false; }
        }
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
        <div align="center"><h3 style="color:#000;">Pilih klub yang akan menjadi juara <b>Mid Season</b> Premier League 2017/2018</h3><br/><br/></div>
		<div class="col-xs-4 col-sm-3 col-md-12"></div>
			<div class="col-md-1"></div>
			<?php foreach($first_club as $club){ ?>
			<div class="col-xs-4 col-sm-3 col-md-1 hover03"><figure><a href="#" data-toggle="modal" data-target="#myKlub<?= $club->id_club;?>"><img src="<?= $club->club_logo;?>" align="center" style='margin:10px;' width="100%"></a></figure></div>
			
    <!-- Modal -->
	<div class="modal fade" id="myKlub<?= $club->id_club;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="margin-top:100px;">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form class="form-inline" name="tebakform" onsubmit="return checkform(event)" method="post" action="<?php echo base_url();?>tebakjuara/tebak/save">
				<?php form_open(); ?>
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Lanjutkan Masukkan Poin</h4>
				</div>
				<div class="modal-body">
					<div style="text-align:center"></div>
					<h4>Anda memilih klub <b><?= $club->club_name;?></b>.</h4>
					<input type="hidden" name="klub" class="form-control" value="<?= $club->id_club;?>" />
					<input type="hidden" name="season" class="form-control" value="half" />
					<p>Masukkan jumlah <b>Menang</b> , <b>Seri</b> , dan <b>Kalah</b>.</p>
					<div class="form-group">
						<input type="text" name="win" id="win" class="form-control" placeholder="M" style="width:100px;height:70px;font-size:50px;" onkeyup="validAngka(this)"/> <b>-</b>
						<input type="text" name="draw" id="draw" class="form-control" placeholder="S"  style="width:100px;height:70px;font-size:50px;" onkeyup="validAngka(this)"/> <b>-</b>
						<input type="text" name="lose" id="lose" class="form-control" placeholder="K"  style="width:100px;height:70px;font-size:50px;" onkeyup="validAngka(this)"/>
						<br/><p style="font-style:italic;margin-top:10px;font-size:10px;">(Jumlah Pertandingan : 19 Pertandingan)</p>
						</div>
				</div>
				<div class="modal-footer">
					<input type="submit" name="submit" class="btn btn-primary" value="Submit">
				</div>
				<?php form_close(); ?>
				</form>
			</div>
		</div>
	</div>
			<?php } ?>
			<div class="col-md-1"></div>
		<div class="col-xs-4 col-sm-3 col-md-12"></div>
			<div class="col-md-1"></div>
			<?php foreach($last_club as $club){ ?>
			<div class="col-xs-4 col-sm-3 col-md-1 hover03"><figure><a href="#" data-toggle="modal" data-target="#myKlub<?= $club->id_club;?>"><img src="<?= $club->club_logo;?>" align="center" style='margin:10px;' width="100%"></a></figure></div>
			
    <!-- Modal -->
	<div class="modal fade" id="myKlub<?= $club->id_club;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="margin-top:100px;">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form class="form-inline" name="tebakform" onsubmit="return checkform(event)" method="post" action="<?php echo base_url();?>tebakjuara/tebak/save">
				<?php form_open(); ?>
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Lanjutkan Masukkan Poin</h4>
				</div>
				<div class="modal-body">
					<div style="text-align:center"></div>
					<h4>Anda memilih klub <b><?= $club->club_name;?></b>.</h4>
					<input type="hidden" name="klub" class="form-control" value="<?= $club->id_club;?>" />
					<input type="hidden" name="season" class="form-control" value="half" />
					<p>Masukkan jumlah <b>Menang</b> , <b>Seri</b> , dan <b>Kalah</b>.</p>
					<div class="form-group">
						<input type="text" name="win" id="win" class="form-control" placeholder="M" style="width:100px;height:70px;font-size:50px;" onkeyup="validAngka(this)"/> <b>-</b>
						<input type="text" name="draw" id="draw" class="form-control" placeholder="S"  style="width:100px;height:70px;font-size:50px;" onkeyup="validAngka(this)"/> <b>-</b>
						<input type="text" name="lose" id="lose" class="form-control" placeholder="K"  style="width:100px;height:70px;font-size:50px;" onkeyup="validAngka(this)"/>
						<br/><p style="font-style:italic;margin-top:10px;font-size:10px;">(Jumlah Pertandingan : 19 Pertandingan)</p>
						</div>
				</div>
				<div class="modal-footer">
					<input type="submit" name="submit" class="btn btn-primary" value="Submit">
				</div>
				<?php form_close(); ?>
				</form>
			</div>
		</div>
	</div>
			<?php } ?>
			<div class="col-md-1"></div>
	</div>
    <div>  
		<div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;padding-top:30px;"><br/></div>
		<div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;"><a href="<?php echo base_url();?>tebakjuara/home" class="btn btn-danger" role="button" style="width:50%;">Kembali</a></div>
	</div>
    <div>  
		<div class="col-xs-12 col-sm-12 col-md-12" style="padding-top:30px"><br/></div>
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
