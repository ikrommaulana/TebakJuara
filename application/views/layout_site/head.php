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
		background-image: url("http://www.mncplaymedia.com/site/uploads/background_oldtrafford.jpg");
		background-size:     cover;                 
		background-repeat:   no-repeat;
		background-position: center center; 
		background-attachment: fixed;
		color:#000;
		font-family: 'Fjalla One', sans-serif;
	}
	h1{
		text-transform: uppercase;
	}
	.intro-section{
		background:none;
	}
	.navbar-default .navbar-nav>li>a{
		color:#273d86;
		font-weight:bold;
		text-transform: uppercase;
	}
	.navbar-default {
		background:none;
		border-color:none;
	}
	.red-text {
		color:red;
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
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">