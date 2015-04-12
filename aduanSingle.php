<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<title>Taman Kita</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/bootstrap-responsive.css" />
	<link rel="stylesheet" href="css/custom.css" />

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a href="index.php" class="brand"><b>Home</b></a>
				
				<a data-toggle="collapse" data-target=".nav-collapse" class="btn btn-navbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				
				<div class="collapse nav-collapse">
					<form action="" class="navbar-search pull-right">
						<input type="text" class="search-query" placeholder="Temukan taman..." />
					</form>
				
					<ul class="nav pull-right">
						<li class="active"><a href="index.php"></a></li>
						<li><a href="daftarAduan.php">Daftar Aduan</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="" data-toggle="modal" data-target="#modal-login-form">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div> <!-- end navbar -->
	
	
	
	
	
	
	<!-- MODAL CONTACT FORM -->
	<div class="modal hide fade" id="modal-login-form">
		<div class="modal-header">
			<button class="close" data-dismiss="modal">&times;</button>
			<h3>Login</h3>
		</div>
		
		<div class="modal-body">
			<form action="" class="form-horizontal">
				<div>
					<h4 class="text-center text-warning">
						Hanya untuk administrator!
					</h4>
				</div>
				<div class="control-group">
					<label for="contact-name" class="control-label">Name:</label>
					
					<div class="controls">
						<input type="text" id="contact-name" />
					</div>
				</div>

				<div class="control-group">
					<label for="contact-password" class="control-label">Password:</label>
					
					<div class="controls">
						<input type="password" id="contact-password" />
					</div>
				</div>

				<div class="control-group">
					<div class="controls">
						<input type="submit" class="btn btn-primary" value="Login" />
						<a href="aduanSingle.php" class="btn ">Lupa Password</a>
					</div>
				</div>
			</form>
		</div>
		
		<div class="modal-footer">
			<a href="" data-dismiss="modal" class="btn">Cancel</a>
		</div>
	</div> <!-- end modal -->
	

	
	
	<div class="container">
		<!-- PAGE HEADER -->
		<section>
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a> <span class="divider">/</span></li>
				<li class="active">Aduan</li>
			</ul>
			
			<div class="page-header text-center">
				<h1>Taman Ganesha<p> <small>12 Januari 2015.</small></h1>
			</div>
		</section>
		
		

		
		
		<!-- PAGE CONTENT -->
		<section>
			<div class="row">
				<div class=" span6 text-center">
					<h4>Kebersihan</h4>
				</div>
			</div>
				
			<div class="row c-product-cta">
				<div class="span6">
					<p class="muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
					<p class="muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
				</div>
					
				<div class="span6">
					<img src="img/custom/Taman(1).jpg" alt="Demo Image" />
				</div>
			</div>
			
			<hr>
		</section>
		
		
		
		
		
		<!-- Q&A -->
		<section>
			<div class="row">
				<div class="">
					<h4>Tanggapan Dinas Pemakaman dan Pertamanan </h4>
				
					<div class="accordion" id="product-qa">
						<div class="accordion-group">
							<div class="accordion-heading">
								<a href="#collapse-1" data-parent="#product-qa" data-toggle="collapse" class="accordion-toggle">Lampu Mati</a>
							</div>
							
							<div class="accordion-body collapse in" id="collapse-1">
								<div class="accordion-inner">
									Kami akan segera menggantinya.
								</div>
							</div>
						</div>
			
						<div class="accordion-group">
							<div class="accordion-heading">
								<a href="#collapse-2" data-parent="#product-qa" data-toggle="collapse" class="accordion-toggle">Toilet bau</a>
							</div>
							
							<div class="accordion-body collapse" id="collapse-2">
								<div class="accordion-inner">
									Kami akan menambah petugas kebersihan.
								</div>
							</div>
						</div>
			
					</div>
				</div>
				
			</div>
			
			<hr />
			
			<ul class="pager">
				<li class="previous"><a href="#">&larr; Previous</a></li>
				<li class="next"><a href="#">Next &rarr;</a></li>
			</ul>
		</section>
	
	
	
	
		<!-- FOOTER -->
		<section>
			<div class="inline text-center"><h5> Hubungi kami <a href="">contact@pro-bdg.com</a></h5></div>
			
			<ul class="inline text-center">
				<li><strong>Follow Us On:</strong></li>
				<li><a href="">Twitter</a></li>
				<li><a href="">Facebook</a></li>
				<li><a href="">LinkedIn</a></li>
			</ul>
			
			<p class="text-center muted">&copy; Copyright 2015 Dinas Pertamanan dan Pemakaman Kota Bandung</p>
		</section>
	</div> <!-- end container -->
	

	<!-- JavaScript -->
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script>
		$(document).ready(function(){
			$('.carousel').carousel({
				interval: 5000
			});
		});
	</script>

</body>
</html>