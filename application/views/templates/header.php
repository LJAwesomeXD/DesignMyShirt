<?php

?>

<html>
	<head>
		<title>DesignMyShirt</title>
		<link rel="stylesheet"  href="<?php echo base_url(); ?>assets/bootstrap.min.css">
		<script src="<?php echo base_url(); ?>assets/jquery.min.js"></script>
		<script src="http://hayageek.github.io/jQuery-Upload-File/4.0.10/jquery.uploadfile.min.js"></script>
		<script src="<?php echo base_url() ?>js/libs/chance.js"></script>
		<style type="text/css">

			.LogNReg {

				text-align: right;
				 margin: 15px 15px;

			}

		</style>
		</head>
		<body>
		<div class="LogNReg">
			<a href="<?php echo base_url(); ?>pages/signup_signin" class="btn btn-default">Sign In</a>
			<a href="<?php echo base_url(); ?>pages/signup_signin" class="btn btn-default">Sign Up</a>

		</div>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class ="navbar-header">
					<a class = "navbar-brand" href="<?php echo base_url(); ?>">DesignMyShirt</a>
				</div>
				<div id ="navbar">
					<ul class ="nav navbar-nav">


						<li><a href="<?php echo base_url(); ?>pages/startcontest">Start Shirt Design Contest</a></li>
						<li><a href="<?php echo base_url(); ?>pages/shirtdesigner">Shirt Designers</a></li>
						<li><a href="<?php echo base_url(); ?>pages/contest">Contest</a></li>
						<li><a href="<?php echo base_url(); ?>pages/marketplace">MarketPlace</a></li>


						</ul>
					</div>
				</div>
			</nav>



			<div class="container">
