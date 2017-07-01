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

.dropbtn {
    background-color: #fff;
    color: gray;
    padding: 16px;
    font-size: 16px;
    font-family: arial;
    border-radius: 5px;
    border: 1px solid gray;
    padding: 10px;
    width: fit-content;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #fff;
    color: skyblue;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #fff;
    min-width: 160px;
    overflow: auto;
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}



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
				<div class="dropdown">
<button onclick="myFunction()" class="dropbtn">My Profile</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#home">**action**</a>
    <a href="#about">**action**</a>
    <a href="#contact">**action**</a>
  </div>
</div>
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

		<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

		<div class="container">
