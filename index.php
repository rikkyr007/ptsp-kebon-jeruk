<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>PTSP Kebon Jeruk - Beranda</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.php"><img src="img/logo-kcl.jpg" width="25" height="25"></img><span> PTSP KEBON JERUK</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> Hai, Admin!
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Pengaturan Akun</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profil</a></li>
								<li><a href="login.html"><i class="halflings-icon off"></i> Keluar</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="index.php"><i class="icon-home"></i><span class="hidden-tablet"> Beranda</span></a></li>	
						<li>
							<a class="dropmenu" href="#"><i class="icon-file-alt"></i><span class="hidden-tablet"> Log Book</span></a>
							<ul>
								<li><a class="submenu" href="index.php?page=penerimaanberkas">&emsp;<i class="icon-edit"></i><span class="hidden-tablet">Penerimaan</span></a></li>
								<li><a class="submenu" href="index.php?page=caridata">&emsp;<i class="icon-search"></i><span class="hidden-tablet"> Cari Berkas</span></a></li>
								<li><a class="submenu" href="index.php?page=cariberkasteknis">&emsp;<i class="icon-search"></i><span class="hidden-tablet"> Cari Berkas Teknisi</span></a></li>
								<li><a class="submenu" href="index.php?page=cariberkastu">&emsp;<i class="icon-search"></i><span class="hidden-tablet"> Cari Berkas TU</span></a></li>
							</ul>	
						</li>

						<li>
							<a class="dropmenu" href="#"><i class="icon-file-alt"></i><span class="hidden-tablet"> Konsultasi</span></a>
							<ul>
								<li><a class="submenu" href="index.php?page=konsultasi">&emsp;<i class="icon-edit"></i><span class="hidden-tablet">Input Data</span></a></li>
								<li><a class="submenu" href="#">&emsp;<i class="icon-search"></i><span class="hidden-tablet"> Cari Data</span></a></li>

							</ul>	
						</li>
						<li><a href="index.php?page=layanankecamatan"><i class="icon-file-alt"></i><span class="hidden-tablet"> Layanan</span></a></li>
						<li><a href="#"><i class="icon-file-alt"></i><span class="hidden-tablet"> Rekap Bulanan</span></a></li>

						<li>
							<a class="dropmenu" href="#"><i class="icon-file-alt"></i><span class="hidden-tablet"> Master Data</span></a>
							<ul>
								<li><a class="submenu" href="index.php?page=penerimaanberkas">&emsp;<i class="icon-edit"></i><span class="hidden-tablet">User CP</span></a></li>
								<li><a class="submenu" href="index.php?page=caridata">&emsp;<i class="icon-search"></i><span class="hidden-tablet">Base Izin</span></a></li>
							</ul>	
						</li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "page/halaman_utama.php";
				break;
			case 'penerimaanberkas':
				include "page/penerimaanberkas.php";
				break;
			case 'konsultasi':
				include "page/konsultasi.php";
				break;
            case 'caridata':
				include "page/tabel.php";
				break;
			case 'layanankecamatan':
				include "page/layanankecamatan.php";
				break;
			case 'cariberkasteknis':
				include "page/tabelteknisi.php";
				break;
			case 'cariberkastu':
				include "page/tabeltu.php";
				break;
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "page/halaman_utama.php";
	}
 
	 ?>
			
			
		




	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2018 <a href="#" alt="Mercubuana University">Mercubuana University.</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
