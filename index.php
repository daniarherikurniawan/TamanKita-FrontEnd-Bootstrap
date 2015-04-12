<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<title>Perizinan Terpadu</title>
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
						<li><a href="daftarAduan.php">Daftar Permohonan Izin</a></li>
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
	
	


	<!-- TamanKIta -->
	<section>
			 <div class="inline text-center" ><h3>TamanKita</h3></div>
		<div class="container">
			<div class="row-fluid">
				<div class="span1"></div>

				<div class="span10 carousel slide center" id="my-carousel">
					<div class="carousel-inner">
						<div class="item active">
							<img src="img/custom/taman15.jpg"  alt="Demo" />
						</div>

						<?php 
							$i;
							for($i = 1; $i < 15 ; $i++){
								echo "<div class=\"item \">";
								echo		"<img src=\"img/custom/taman".$i.".jpg\"  alt=\"Demo\"/>";
								echo  "</div>";
							} 
						?>
					</div>
					
					<a href="#my-carousel" class="carousel-control left" data-slide="prev">&lsaquo;</a>
					<a href="#my-carousel" class="carousel-control right" data-slide="next">&rsaquo;</a>
				</div>

				
				<div class="masthead span1"></div>
			</div>
		</div> <!-- end container -->
	</section>
	
	
	
	<!-- MODAL ADUAN FORM -->
	<div class="modal hide fade" id="modal-aduan-form">
		<div class="modal-header">
			<button class="close" data-dismiss="modal">&times;</button>
			<h3>Form Aduan</h3>
		</div>
		
		<div class="modal-body">
			<form action="" class="form-horizontal">
				<div>
					<h4 class="text-center text-info">
						Silahkan mengisi form aduan berikut.
					</h4>
				</div>
				<div class="control-group">
					<label for="contact-name" class="control-label">Taman:</label>
					
					<div class="controls">
						<select  class = "form-control">
							<option value="one" class="value">Taman1</option>
							<option value="one" class="value">Taman2</option>
							<option value="one" class="value">Taman3</option>
						</select>
					</div>
				</div>

				<div class="control-group">
					<label for="contact-name" class="control-label">Kategori:</label>
					
					<div class="controls">
						<select  class = "form-control">
							<option value="one" class="value">Keindahan</option>
							<option value="one" class="value">Keamanan</option>
							<option value="one" class="value">Kebersihan</option>
							<option value="one" class="value">Ketertiban</option>
						</select>
					</div>
				</div>

				<div class="control-group">
					<label for="contact-email" class="control-label">Email:</label>
					
					<div class="controls">
						<input type="email" id="contact-email" />
					</div>
				</div>

				<div class="control-group">
					<label for="contact-email" class="control-label">Foto:</label>
					
					<div class="controls">
						<input id="lefile" type="file" class="display:none"/>
						<!-- <a class="btn" onclick="$('input[id=lefile]').click();">Browse</a> -->

					</div>
				</div>

				<div class="control-group">
					<label for="contact-message" class="control-label">Deskripsi:</label>
					
					<div class="controls">
						<textarea name="contact-message" id="contact-message" cols="30" rows="5"></textarea>
					</div>
				</div>
				
				<div class="control-group">
					<div class="controls">
						<input type="submit" class="btn btn-primary" value="Kirim Aduan" />
					</div>
				</div>
			</form>
		</div>
		
		<div class="modal-footer">
			<a href="" data-dismiss="modal" class="btn">Cancel</a>
		</div>
	</div> <!-- end modal -->
	
	
	<div class="container">
		<!-- COMPANY INFO -->
		<section>
			<div class="row">
					<div class="">
					
					<p class="lead text-center">Adukan kepada kami jika Anda menemui permasalahan di taman-taman yang ada di Kota Bandung! </p>
				<!-- 	<a href=""><p><small>Baca selengkapnya tentang TamanKita &raquo;</small></a><small>Dinas Pemakaman dan Pertamanan Kota Bandung</small> -->
					<div class="container">
						<div class="row">
							<div class="text-center">
								<a href="" class="btn btn-info btn-large" data-toggle="modal" data-target="#modal-aduan-form">Adukan !</a>
								<a href="aduanSingle.php" class="btn btn-large">Pelajari TamanKita.com <span class="icon-chevron-right"></span></a>
							</div>
						</div>
					</div>
					
				</div>
				
				
			</div>
		</section>
		
		<hr />
		
		<h4>Visi & Misi</h4>
		<!-- TESTIMONIALS -->
		<div class="container">
			<div class="row">
				<div class=" span7 carousel slide" id="testimonials">
					
					<div class="carousel-inner">
						<div class="item active">
							<blockquote>
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas</p>
								<small>Visi</small>
							</blockquote>
						</div>

						<div class="item">
							<blockquote>
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas</p>
								<small>Misi</small>
							</blockquote>
						</div>

						<div class="item">
							<blockquote>
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas</p>
								<small>Misi</small>
							</blockquote>
						</div>
					</div>
					<ol class="carousel-indicators">
						<li data-target="#testimonials" data-slide-to="0" class="active"></li>
						<li data-target="#testimonials" data-slide-to="1"></li>
						<li data-target="#testimonials" data-slide-to="2"></li>
					</ol>
				
				</div> <!-- end carousel -->
		
				<div class="span5">
					<p class="well  lead text-center">Keindahan taman kita adalah tanggung jawab bersama.</p>

				</div>
			</div>
		</div>
		
		
		
		
		
	
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