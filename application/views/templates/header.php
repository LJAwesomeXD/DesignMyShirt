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

			body
			{

			}

		</style>
		</head>
		<body>
		<div class="LogNReg">

			<?php
				/** shows/unshows logout/login button**/
				//if logged in
				if(isset($_SESSION["username"])): ?>
				<a href="<?php echo base_url(); ?>users/logout" class="btn btn-default">Logout</a>
			<?php else:  ?>
				<a href="<?php echo base_url(); ?>pages/auth" class="btn btn-default">Sign Up / Sign In</a>
			<?php endif ?>
		</div>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class ="navbar-header">
					<a class = "navbar-brand" href="<?php echo base_url(); ?>">DesignMyShirt</a>
				</div>
				<div id ="navbar">
					<ul class ="nav navbar-nav">
						<?php
							if(isset($_SESSION["username"])) :
						?>
							<li><a href="<?php echo base_url(); ?>contests/create">Start Shirt Design Contest</a></li>
						<?php
							endif
						?>
						<li><a href="<?php echo base_url(); ?>pages/designers">Shirt Designers</a></li>
						<li><a href="<?php echo base_url(); ?>contests/all">Contest</a></li>
						<li><a href="<?php echo base_url(); ?>pages/marketplace">MarketPlace</a></li>
					</ul>
				</div>
		</nav>



		<div class="container">
