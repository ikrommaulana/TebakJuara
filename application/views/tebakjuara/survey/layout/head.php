<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>uploads/logo/logo-fav.png">
	<link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/scrolling-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	body {
		color:#000;
		font-family: '"source_sans_proregular", Arial, Helvetica, Tahoma, sans-serif;
	}
	h1{
		color:#273d86;
	}
	.intro-section{
		background:none;
	}
	.navbar-default {
		background-color:#fff;
	}
	.navbar-default .navbar-nav>li>a {
		font-size:14px;
		color:#fff;
	}
	.navbar-default .navbar-nav>li>a:hover {
		color:#1c449c;
	}
	.top-nav-collapse {
		padding:20px 0;	
	}
	.red-text {
		color:red;
	}
	#bgfooter {
		background-image: url("http://www.mncplaymedia.com/assets/images/customBg2.png");
		background-size:     cover;                 
		background-repeat:   no-repeat;
		background-position: center center; 
	}
	.btn {
		background-color:#1c449c;
		border-color:#1c449c;
	}
	</style>
	<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script language='javascript'>
	function validAngka(a)
	{
		if(!/^[0-9.]+$/.test(a.value))
		{
		a.value = a.value.substring(0,a.value.length-1000);
		}
	}
	</script>
	<script>
        $(document).ready(function(){
            $("#provinsi").change(function (){
                var url = "<?php echo base_url(); ?>daftar/add_ajax_kab/"+$(this).val();
                $('#kabupaten').load(url);
                return false;
            })
   
	$("#kabupaten").change(function (){
                var url = "<?php echo base_url(); ?>daftar/add_ajax_kec/"+$(this).val();
                $('#kecamatan').load(url);
                return false;
            })
   
	$("#kecamatan").change(function (){
                var url = "<?php echo base_url(); ?>daftar/add_ajax_kel/"+$(this).val();
                $('#kelurahan').load(url);
                return false;
            })
			
		$("#langganan").change(function (){
                var url = "<?php echo base_url(); ?>daftar/add_ajax_data/"+$(this).val();
                $('#datapelanggan').load(url);
                return false;
            })
			
		$("#nextstep").click(function (){
                var url = "<?php echo base_url(); ?>daftar/next_step/";
                $('#datapelanggan').load(url);
                return false;
            })
        });
    </script>
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">