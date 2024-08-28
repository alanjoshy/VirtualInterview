<?php 
session_start();

$conn=mysqli_connect("localhost","root","","virtual_db");
if(!$conn){
	echo "database error";
}
?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Asesorar Education Category Bootstrap Responsive Website Template | Contact Us :: W3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Edulearn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<style>
	.content{
		
		margin-left:auto;
		margin-right:auto;
		width:200px;
		margin-top:10px;
		
	}
	.content select{
		background-color:#56b0f8;
		border:none;
		border-radius:3px;
		width:200px;
		height:50px;
		font-size:large;
		color:white;
		padding-left:30px;
		padding-right:auto;

	}
	.content select:hover{
		background-color:#2e7fc1;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  		z-index: 1;
	}
	input[type="submit"]{
		margin-left:50px;
		margin-top:10px;
		background-color:tomato;
		border:none;
		border-radius:3px;
		width:100px;
		height:50px;
		font-size:large;
		color:white;
		padding-left:10px;
		padding-right:auto;
	}
			#customers {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
			}

			#customers td, #customers th {
			border: 1px solid #ddd;
			padding: 8px;
			}

			#customers tr:nth-child(even){background-color: #f2f2f2;}

			#customers tr:hover {background-color: #ddd;}

			#customers th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #56b0f8;
			color: white;
			}
	</style>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<!-- Bootstrap-Core-Css -->
	<link rel="stylesheet" href="templates/css/bootstrap.css">
	<!-- Style-Css -->
	<link rel="stylesheet" href="templates/css/style.css" type="text/css" media="all" />
	<!-- Font-Awesome-Icons-Css -->
	<link rel="stylesheet" href="templates/css/fontawesome-all.css">
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //Web-Fonts -->
<script src="templates/js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script src="templates/js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- smooth scrolling -->
	<script src="templates/js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->

	<!-- move-top -->
	<script src="templates/js/move-top.js"></script>
	<!-- easing -->
	<script src="templates/js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="templates/js/edulearn.js"></script>

	<!-- //Js files --></head>

<body>
	<!-- header -->
	<header>
		<!-- top header -->
		<div class="top-head-w3ls py-2 bg-dark">
			<div class="container">
				<div class="row">
					<h1 class="text-capitalize text-white col-7">
						<i class="fas fa-book text-dark bg-white p-2 rounded-circle mr-3"></i>WELCOME TO ASESORAR</h1>
					<!-- social icons -->
					<div class="social-icons text-right col-5">
						<ul class="list-unstyled">
							<li>
								<a href="#" class="fab fa-facebook-f icon-border facebook rounded-circle"> </a>
							</li>
							<li class="mx-2">
								<a href="#" class="fab fa-twitter icon-border twitter rounded-circle"> </a>
							</li>
							<li>
								<a href="#" class="fab fa-google-plus-g icon-border googleplus rounded-circle"> </a>
							</li>
							<li class="ml-2">
								<a href="#" class="fas fa-rss icon-border rss rounded-circle"> </a>
							</li>
						</ul>
					</div>
					<!-- //social icons -->
				</div>
			</div>
		</div>
		<!-- //top header -->
		<!-- middle header -->
		<div class="middle-w3ls-nav py-2">
			<div class="container">
				<div class="row">
					<a class="logo font-italic font-weight-bold col-lg-4 text-lg-left text-center" href="index.html">ASESORAR</a>
					<div class="col-lg-8 right-info-agiles mt-lg-0 mt-sm-3 mt-1">
						<div class="row">
							<div class="col-sm-4 nav-middle">
								<i class="far fa-envelope-open text-center mr-md-4 mr-sm-2 mr-4"></i>
								<div class="agile-addresmk">
									<p>
										<span class="font-weight-bold text-dark">Mail Us</span>
										<a href="mailto:mail@example.com">asesorar@example.com</a>
									</p>
								</div>
							</div>
							<div class="col-sm-4 col-6 nav-middle mt-sm-0 mt-2">
								<i class="fas fa-phone-volume text-center mr-md-4 mr-sm-2 mr-4"></i>
								<div class="agile-addresmk">
									<p>
										<span class="font-weight-bold text-dark">Call Us</span>
										+1234-567-890
									</p>
								</div>
							</div>
							<a href="login.html" class="button-head-mow3 text-white">Login</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //middle header -->
	</header>
	<!-- //header -->

	<!-- banner -->
	<div class="banner-agile-2">
		<!-- navigation -->
		<div class="navigation-w3ls">
			<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-nav">
				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				 aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
					<ul class="navbar-nav justify-content-center">
						<li class="nav-item">
                       
							<a class="nav-link text-white" href="candidateeditprofile.php?id={$h}">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								JOB
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="viewcandidateapplications.php">Applications</a>
								<a class="dropdown-item" href="searchjob.php">search jobs</a>
								
							</div>
						</li>
					
						<li class="nav-item">
							<a class="nav-link text-white" href="view_responce.php">Recruit responce</a>
						</li>
					
						<!-- <li class="nav-item">
							<a class="nav-link text-white" href="changepassword.php">Change Password</a>
						</li> -->
						<li class="nav-item active">
							<a class="nav-link text-white" href="index.php">Logout</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- //navigation -->
	</div>
	<!-- breadcrumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
			<a href="index.php">Home</a></li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //banner -->