<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<title>Taman Kita</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Meta --> <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

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
				<li class="active">Daftar Aduan</li>
			</ul>
			
				
				<div class="page-header">
					<form action="" class="form-horizontal">
					<div>
						<h2 class="text-center ">
							Daftar Aduan
						</h2>
					</div>
					<div class="container ">
						<div class="row">
							<div class="span6 offset3">
									<label for="contact-name" class="control-label">Tampilan:</label>
									
									<div class="controls">
										<select  class = "form-control">
											<option value="one" class="value">Terbaru</option>
											<option value="one" class="value">Terurut Tanggal</option>
											<option value="one" class="value">Berdasarkan Kategori</option>
											<option value="one" class="value">Berdasarkan Lokasi</option>
										</select>
								</div>
							</div>
							
						</div>
						
					</div>
					
				</form>
			</div>
			

		</section>
		
		
		
		
		
		
		<!-- PAGE CONTENT -->
		<section>
			<div class="row c-product-showcase">
				<div class="span4">
					<a href="aduanSingle.php"><img src="img/custom/demo-1.jpg" alt="Demo" class="img-polaroid" /></a>
					
					<h4><a href="aduanSingle.php">12 Januari 2015</a></h4>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					
					<a href="aduanSingle.php" class="btn">Baca Selengkapnya <span class="icon-chevron-right"></span></a>
				</div>

				<div class="span4">
					<a href="aduanSingle.php"><img src="img/custom/demo-2.jpg" alt="Demo" class="img-polaroid" /></a>
					
					<h4><a href="aduanSingle.php">10 Januari 2015</a></h4>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					
					<a href="aduanSingle.php" class="btn">Baca Selengkapnya <span class="icon-chevron-right"></span></a>
				</div>

				<div class="span4">
					<a href="aduanSingle.php"><img src="img/custom/demo-3.jpg" alt="Demo" class="img-polaroid" /></a>
					
					<h4><a href="aduanSingle.php">24 Desember 2014</a></h4>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					
					<a href="aduanSingle.php" class="btn">Baca Selengkapnya <span class="icon-chevron-right"></span></a>
				</div>
			</div>

			<div class="row c-product-showcase">
				<div class="span4">
					<a href="aduanSingle.php"><img src="img/custom/demo-1.jpg" alt="Demo" class="img-polaroid" /></a>
					
					<h4><a href="aduanSingle.php">11 Oktober 2014</a></h4>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					
					<a href="aduanSingle.php" class="btn">Baca Selengkapnya <span class="icon-chevron-right"></span></a>
				</div>

				<div class="span4">
					<a href="aduanSingle.php"><img src="img/custom/demo-2.jpg" alt="Demo" class="img-polaroid" /></a>
					
					<h4><a href="aduanSingle.php">1 Agustus 2014</a></h4>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					
					<a href="aduanSingle.php" class="btn">Baca Selengkapnya <span class="icon-chevron-right"></span></a>
				</div>

				<div class="span4">
					<a href="aduanSingle.php"><img src="img/custom/demo-3.jpg" alt="Demo" class="img-polaroid" /></a>
					
					<h4><a href="aduanSingle.php">4 Juli 2014</a></h4>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					
					<a href="aduanSingle.php" class="btn">Baca Selengkapnya <span class="icon-chevron-right"></span></a>
				</div>
			</div>
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