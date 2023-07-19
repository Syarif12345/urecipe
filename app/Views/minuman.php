<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700|Open+Sans:400,600,700|Dancing+Script&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.css') ?>" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('style.css') ?>" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('css/dark.css') ?>" type="text/css" />

	<link rel="stylesheet" href="<?= base_url('css/font-icons.css') ?>" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('css/animate.css') ?>" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('css/magnific-popup.css') ?>" type="text/css" />

	<link rel="stylesheet" href="<?= base_url('css/custom.css') ?>" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Burger Demo Specific Stylesheet -->
	<link rel="stylesheet" href="<?= base_url('css/colors.php?color=FBAF32') ?>" type="text/css" /> <!-- Burger Theme Color -->
	<link rel="stylesheet" href="<?= base_url('demos/burger/css/fonts.css') ?>" type="text/css" /> <!-- Burger Theme Font -->
	<link rel="stylesheet" href="<?= base_url('demos/burger/burger.css') ?>" type="text/css" /> <!-- Burger Theme Custom CSS -->
	<!-- / -->

	<!-- Burger Document Title
	============================================= -->
	<title>URECIPE</title>

</head>

<body class="stretched">

	<div class="body-overlay"></div>

	<div id="side-panel" class="dark" style="background: #101010 url(<?php echo base_url('demos/burger/images/icon-bg-white.png') ?>) repeat center center;">

		<div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

		<div class="side-panel-wrap">

			<div class="widget">

				<h4 class="font-weight-bold">URECIPE</h4>
				<p>Bagikan ide resep kalian disini!!</p>
				
			</div>

			<div id="q-contact" class="widget quick-contact-widget form-widget">

				
				<div class="form-result"></div>
				<form id="quick-contact-form" name="quick-contact-form" action="include/form.php" method="post" class="quick-contact-form nobottommargin">
					<div class="form-process"></div>

					<input type="text" class="required not-dark mb-2 sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Nama Lengkap" />
					<input type="text" class="required not-dark mb-2 sm-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email" />
					<textarea class="required not-dark mb-2 sm-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Ide resep"></textarea>
					<input type="text" class="d-none" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
					<input type="hidden" name="prefix" value="quick-contact-form-">
					<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d nomargin" value="submit">Kirim Email</button>
				</form>

			</div>

		</div>

	</div>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

	<!-- Header
		============================================= -->
		<header id="<?php echo base_url() ?>header" class="transparent-header dark" data-sticky-class="dark-color" data-sticky-shrink-offset="0">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="<?= base_url('home') ?>" class="standard-logo" data-dark-logo="<?php echo base_url() ?>demos/burger/images/logo-dark.png" data-sticky-logo="<?php echo base_url() ?>demos/burger/images/logo-sticky.png"><img src="<?php echo base_url() ?>demos/burger/images/logo.png" alt="<?php echo base_url() ?>Canvas Logo"></a>
							<a href="index.html" class="retina-logo" data-dark-logo="<?php echo base_url() ?>demos/burger/images/logo-dark@2x.png" data-sticky-logo="<?php echo base_url() ?>demos/burger/images/logo-sticky@2x.png"><img src="<?php echo base_url() ?>demos/burger/images/logo@2x.png" alt="<?php echo base_url() ?>Canvas Logo"></a>
						</div><!-- #logo end -->

						<div class="header-misc">

							<div id="side-panel-trigger" class="side-panel-trigger"><a href="#"><i class="icon-ellipsis-v"></i></a></div>

						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="one-page-menu menu-container" data-easing="easeInOutExpo" data-speed="1250" data-offset="60">
								<li class="current menu-item"><a class="menu-link" href="#" data-href="#slider"><div>Beranda</div></a></li>
								<li class="menu-item"><a class="menu-link" href="<?= base_url('home/login') ?>"><div>Masuk</div></a></li>
								<li class="menu-item"><a class="menu-link" href="<?= base_url('home/about') ?>"><div>Tentang kami</div></a></li>
								</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->


		<!-- Content
		============================================= -->
		<section id="content" class="dark-color">
			<div style="position: absolute; top: -13px; left: 0; width: 100%;height: 30px; background: url('demos/burger/images/svg/brush.svg') no-repeat top center / 110% auto; z-index: 2;"></div>
			<div class="content-wrap p-0">

				<div id="story" class="page-section">
					

					<div class="section m-0 p-0">
						<div class="row align-items-stretch clearfix">
							

                        <?php foreach ($resep as $item) { ?>

                            <div class="item-categories overflow-hidden col-md-4 dark col-padding position-relative" style="background-color: #0A0A0A;">
								<div class="cat-img"><img  data-animate="fadeInRight" src="<?php echo base_url() ?>demos/burger/images/cat/5.png" alt="Category Image"></div>
								<div class="cat-text">
									<h2 class="font-weight-bold ls1 text-uppercase mb-5"><?php echo $item->nama_resep; ?></h2>
									<p class="mb-5"><?php echo $item->deskripsi_resep; ?></p>
									<td>
                
									<a href="<?= base_url('home/minuman') ?>">Lihat Selengkapnya</a>
								</div>
								
							</div>

                        <?php } ?>

						</div>
					</div>
					
				<div class="clear"></div>
				

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark noborder parallax pt-3" style="background-image: url('demos/burger/images/others/footer.png');"alt="" height="40" class="alignleft" style=" data-top-bottom="background-position:100% -500px" data-bottom-top="background-position: 100% -200px">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row col-mb-50">
						<div class="col-lg-8">

							<div class="widget">

								<img src="demos/burger/images/logo-sticky@2x.png" alt="" height="40" class="alignleft" style=" padding-right: 18px; border-right: 1px solid #4A4A4A;">

								<p>Semoga website ini bisa bermanfaat untuk teman-teman semuanya, tentu <strong>Kritik</strong> dan <strong>Saran</strong> dari teman-teman itu sangat berharga untuk kami kedepan nya.</p>

								<div class="line" style="margin: 30px 0;"></div>

								<div class="row col-mb-30">
									<div class="col-lg-6">
										<div class="widget">

											<div class="d-none d-lg-block"><div class="clear" style="padding-top: 10px;"></div></div>

											</div>

										</div>
									</div>

									<div class="col-lg-6">
										<div class="widget subscribe-widget">
											<h5><strong>Subscribe</strong> untuk mendukung URECIPE!!</h5>
											<div class="widget-subscribe-form-result"></div>
											<form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
												<div class="input-group mx-auto">
													<div class="input-group-prepend">
														<div class="input-group-text bg-white"><i class="icon-email2"></i></div>
													</div>
													<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email not-dark border-0" placeholder="Enter your Email">
													<div class="input-group-append">
														<button class="btn text-white bgcolor" type="submit">Subscribe</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>

							</div>

							<div class="line" style="margin: 30px 0;"></div>

							<div class="row col-mb-30">
								<div class="col-6 col-lg-4">
									<div class="widget">

										<h4 class="font-weight-bold">Halaman</h4>

										<ul class="list-unstyled ml-0">
											<li class="mb-2"><a class="text-white-50" href="#">Beranda</a></li>
											<li class="mb-2"><a class="text-white-50" href="#">Masuk</a></li>
											<li class="mb-2"><a class="text-white-50" href="#">Tentang kami</a></li>
											<li class="mb-2"><a class="text-white-50" href="#">Bagikan </a></li>
										</ul>

									</div>
								</div>
							</div>
								<div class="col-6 col-lg-4">
									<div class="widget">

										<h4 class="font-weight-bold">Kategori</h4>

										<ul class="list-unstyled ml-0">
											<li class="mb-2"><a class="text-white-50" href="#">Makanan</a></li>
											<li class="mb-2"><a class="text-white-50" href="#">Kue</a></li>
											<li class="mb-2"><a class="text-white-50" href="#">Minuman</a></li>
										</ul>

									</div>
								</div>
								
								</div>
							</div>

						</div>

						
					</div>

				</div><!-- .footer-widgets-wrap end -->
			</div>

			<
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="<?= base_url('js/jquery.js') ?>"></script>
	<script src="<?= base_url('js/plugins.min.js') ?>"></script>
	<script src="<?= base_url('demos/burger/js/hover-animate.js') ?>"></script>
	<script src="https://maps.google.com/maps/api/js?key=YOUR-API-KEY"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="<?= base_url('js/functions.js') ?>"></script>

</body>
</html>