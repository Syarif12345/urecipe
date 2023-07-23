<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700|Noto+Serif:400,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('') ?>css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('') ?>style.css" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('') ?>css/dark.css" type="text/css" />

	<link rel="stylesheet" href="<?= base_url('') ?>css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('') ?>css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('') ?>css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="<?= base_url('') ?>css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!--  Recipes Demo Specific Stylesheet -->
	<link rel="stylesheet" href="<?= base_url('') ?>css/colors.php?color=267DF4" type="text/css" /> <!-- Theme Color -->
	<link rel="stylesheet" href="<?= base_url('') ?>demos/recipes/css/fonts.css" type="text/css" /> <!-- Theme Font -->
	<link rel="stylesheet" href="<?= base_url('') ?>demos/recipes/recipes.css" type="text/css" /> <!-- Theme Custom CSS -->

	<!-- Document Title
	============================================= -->
	<title>Detail Recipe</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<!-- <header id="header" class="transparent-header" data-sticky-shrink="false">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row"> -->

						<!-- Logo
						============================================= -->
						<!-- <div id="logo">
							<a href="index.html" class="standard-logo"><img src="<?= base_url('') ?>demos/recipes/images/logo.png" alt="Canvas Logo"></a>
							<a href="index.html" class="retina-logo"><img src="<?= base_url('') ?>demos/recipes/images/logo@2x.png" alt="Canvas Logo"></a>
						</div>#logo end -->

						

					<!-- </div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header>#header end -->

		<!-- Page Title
		============================================= -->
		<section id="slider" class="slider-element dark parallax include-header" style="background: #111 url(<?= base_url('demos/recipes/images/recipe-single.jpg') ?>) center center / cover; padding: 230px 0;" data-0="background-position:0px -200px;" data-400="background-position:0px -100px;">

			<div class="container clearfix">
				<div class="mx-auto center" style="max-width: 800px">

				<?php foreach ($resep as $item) { ?>

					<h3 class="nott font-weight-bold mb-5 display-4" data-animate="zoomIn"><?php echo $item->nama_resep; ?></h3>

				<?php } ?>	
				</div>
				<div class="mx-auto center" style="max-width: 900px">
					<div class="slider-features" data-animate="zoomIn" data-delay="300">
						<ul class="list-unstyled row no-gutters align-items-center overflow-hidden col-mb-50 mt-5">
							<li class="col-12 col-lg text-center text-lg-right">
								<div class="grid-inner px-5">
									<img src="<?= base_url('') ?>demos/recipes/images/icons/level.svg" alt="Level" width="30">
									<?php foreach ($resep as $item) { ?>
										<h5 class="mb-0"><?php echo $item->level; ?></h5>
									<?php } ?>	
								</div>
							</li>

							<li class="col-12 col-lg text-center text-lg-left">
								<div class="grid-inner px-5">
									<img src="<?= base_url('') ?>demos/recipes/images/icons/timer.svg" alt="Timer" width="30">
									<?php foreach ($resep as $item) { ?>

									<h5 class="mb-0"><?php echo $item->waktu; ?> Mins</h5>
									<?php } ?>	

								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content" class="bg-light">
			<div class="content-wrap pt-0" style="overflow: visible;">
				<div class="container">

					<div class="card border-0 shadow-sm" style="top: -100px;">
						<div class="card-body px-4">
							<div class="row align-items-center justify-content-between py-3">
								<div class="col-12 col-xl">
									<div class="row justify-content-center col-mb-30">
										<div class="col-4 col-md">
											<h6 class="text-black-50 text-uppercase font-body font-weight-normal ls1 mb-1">Energy</h6>
											<h4 class="mb-0">2635</h4>
										</div>

										<div class="col-4 col-md">
											<h6 class="text-black-50 text-uppercase font-body font-weight-normal ls1 mb-1">Calories</h6>
											<h4 class="mb-0">700</h4>
										</div>

										<div class="col-4 col-md">
											<h6 class="text-black-50 text-uppercase font-body font-weight-normal ls1 mb-1">Sugar</h6>
											<h4 class="mb-0">12gm</h4>
										</div>

										<div class="col-4 col-md">
											<h6 class="text-black-50 text-uppercase font-body font-weight-normal ls1 mb-1">Fat</h6>
											<h4 class="mb-0">7gm</h4>
										</div>

										<div class="col-4 col-md">
											<h6 class="text-black-50 text-uppercase font-body font-weight-normal ls1 mb-1">Carbs</h6>
											<h4 class="mb-0">82gm</h4>
										</div>

										<div class="col-4 col-md">
											<h6 class="text-black-50 text-uppercase font-body font-weight-normal ls1 mb-1">Protein</h6>
											<h4 class="mb-0">26gm</h4>
										</div>
									</div>
								</div>

								<div class="col-12 text-center col-xl-auto mt-5 mt-xl-0">
									<a href="#" class="button button-circle m-0"><i class="icon-line-cloud-download"></i> Download</a>
								</div>	
							</div>

							<div class="line my-4"></div>

							<div class="row justify-content-between mt-5 mb-4 clearfix">
								<div class="col-lg-4">
									<div class="d-flex justify-content-between align-items-center mb-4">
										<h4 class="mb-0">Bahan-Bahan</h4>
										<a href="javascript:window.print()" id="print-button" class="social-icon si-small si-colored si-print" title="Print">
											<i class="icon-line-printer"></i>
											<i class="icon-line-printer"></i>
										</a>
									</div>
									<ul class="list-unstyled list-ingredients bg-light p-4">
										<?php foreach ($resep as $item) { 
											echo $item->bahan;	
										}
										?>
									</ul>
									<div class="line line-sm"></div>
									<h4>Share:</h4>
									<a href="#" class="social-icon si-small si-colored si-facebook" title="Facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon si-small si-colored si-twitter" title="Twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon si-small si-colored si-pinterest" title="Pinterest">
										<i class="icon-pinterest"></i>
										<i class="icon-pinterest"></i>
									</a>
									<a href="#" class="social-icon si-small si-colored si-instagram" title="Instagram">
										<i class="icon-instagram"></i>
										<i class="icon-instagram"></i>
									</a>
									<a href="#" class="social-icon si-small si-colored si-email3" title="Email">
										<i class="icon-email3"></i>
										<i class="icon-email3"></i>
									</a>
								</div>
								<div class="col-lg-8 mt-5 mt-lg-0">
									<!-- <h4>Video</h4>
									<div class="rounded position-relative dark mb-5" style="background: url('demos/recipes/images/recipe-week.jpg') no-repeat center center / cover; min-height: 300px">
										<a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe" class="play-video stretched-link">
											<i class="icon-play"></i>
										</a>
									</div> -->
									<h4>Langkah-Langkah</h4>
									<ol class="list-unstyled list-preparation">
									<?php foreach ($resep as $item) { 
											echo $item->langkah;	
										}
										?>
										
									</ol>
									

									<div class="line my-5"></div>

									
									<!-- Comments
									============================================= -->
									<div id="comments" class="clearfix">


										<div class="clear"></div>

										<!-- Comment Form
										============================================= -->
										<div id="respond">

											<h4>Komentar</h4>

											<form class="row" action="#" method="post" id="commentform">

												<div class="col-md-4 form-group">
													<label class="nott ls0 font-weight-normal" for="author">Nama</label>
													<input type="text" name="author" id="author" value="" size="22" tabindex="1" class="form-control form-control-pill" />
												</div>

												<div class="col-md-4 form-group">
													<label class="nott ls0 font-weight-normal" for="email">Email</label>
													<input type="text" name="email" id="email" value="" size="22" tabindex="2" class="form-control form-control-pill" />
												</div>

												<div class="col-md-4 form-group">
													<label class="nott ls0 font-weight-normal" for="rating">Penilaian</label>
													<div class="select-wrapper form-control-pill px-2">
														<select id="rating" name="rating" class="form-control border-0">
															<option value="" disabled selected>-- Select One --</option>
															<option value="1 Star">1 Bintang</option>
															<option value="2 Star">2 Bintang</option>
															<option value="3 Star">3 Bintang</option>
															<option value="4 Star">4 Bintang</option>
															<option value="5 Star">5 Bintang</option>
														</select>
													</div>
												</div>

												<div class="w-100"></div>

												<div class="col-12 form-group">
													<label class="nott ls0 font-weight-normal" for="comment">Komentar</label>
													<textarea name="comment" cols="58" rows="7" tabindex="4" class="form-control form-control-pill"></textarea>
												</div>

												<div class="col-12 form-group">
													<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-circle button-large mt-3">Kirim Ulasan</button>
												</div>

											</form>

										</div><!-- #respond end -->

									</div><!-- #comments end -->
								</div>
							</div>
						</div>
					</div>

					<!-- <h4>Related Posts:</h4>

					<div class="related-posts recipe-itmes">
						<div class="row no-gutters">

							<div class="col-md-3 col-sm-6 bg-white" style="border-left: 1px solid #EEE">
								<div class="card">
									<div class="card-body">
									<img src="demos/recipes/images/popular/7.png" alt="image">
										<div class="d-flex justify-content-between align-items-center mt-4 mb-2">
											<p class="card-author">By <a href="#">Bailey Wonger</a></p>
											<span class="badge badge-primary bg-color"><i class="icon-star3"></i> 4.5</span>
										</div>
										<h3 class="card-title"><a href="#" class="stretched-link">Baked Salmon with Sweet-Potatoes</a></h3>
										<h5 class="card-date"><i class="icon-line2-calendar"></i>Aug 12, 2021</h5>
									</div>
								</div>
							</div>

							 Item 8
							<div class="col-md-3 col-sm-6 bg-white">
								<div class="card">
									<div class="card-body">
									<img src="demos/recipes/images/popular/8.png" alt="image">
										<div class="d-flex justify-content-between align-items-center mt-4 mb-2">
											<p class="card-author">By <a href="#">Pelican Steve</a></p>
											<span class="badge badge-primary bg-color"><i class="icon-star3"></i> 4.2</span>
										</div>
										<h3 class="card-title"><a href="#" class="stretched-link">A Kollam Grilled Cheese with Vegetables</a></h3>
										<h5 class="card-date"><i class="icon-line2-calendar"></i>Aug 8, 2021</h5>
									</div>
								</div>
							</div>

							<!-- Item 5 -->
							<!-- <div class="col-md-3 col-sm-6 bg-white">
								<div class="card">
									<div class="card-body">
									<img src="demos/recipes/images/popular/5.png" alt="image">
										<div class="d-flex justify-content-between align-items-center mt-4 mb-2">
											<p class="card-author">By <a href="#">Norman Gordon</a></p>
											<span class="badge badge-primary bg-color"><i class="icon-star3"></i> 4.5</span>
										</div>
										<h3 class="card-title"><a href="#" class="stretched-link">Pumpkin Bars with Cream Cheese Frosting</a></h3>
										<h5 class="card-date"><i class="icon-line2-calendar"></i>Sep 18, 2021</h5>
									</div>
								</div>
							</div> -->

							<!-- Item 6 -->
							<!-- <div class="col-md-3 col-sm-6 bg-white">
								<div class="card">
									<div class="card-body">
									<img src="demos/recipes/images/popular/6.png" alt="image">
										<div class="d-flex justify-content-between align-items-center mt-4 mb-2">
											<p class="card-author">By <a href="#">Druid Wensleydale</a></p>
											<span class="badge badge-primary bg-color"><i class="icon-star3"></i> 4.0</span>
										</div>
										<h3 class="card-title"><a href="#" class="stretched-link">The Best Homemade Pizza Recipes</a></h3>
										<h5 class="card-date"><i class="icon-line2-calendar"></i>Sep 7, 2021</h5>
									</div> -->
								<!-- </div> -->
							<!-- </div> --> 

						</div>
					</div>

				</div>
			</div>
		</section><!-- #content end -->

		
	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="<?= base_url('') ?>js/jquery.js"></script>
	<script src="<?= base_url('') ?>js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="<?= base_url('') ?>js/functions.js"></script>

</body>
</html>