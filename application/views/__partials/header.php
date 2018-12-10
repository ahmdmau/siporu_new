<!doctype html>
<html lang="en">
<head>
<title><?php echo SITE_NAME .": ". ucfirst($this->uri->segment(1)) ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="<?php echo base_url('assets/user/css/style.css') ?> ">
<link rel="stylesheet" href="<?php echo base_url('assets/user/css/colors/blue.css') ?> ">

</head>
<body>
<div id="wrapper">

<header id="header-container" class="fullwidth <?php if (isset($this->session->userdata['logged_in'])) { echo 'dashboard-header not-sticky'; } ?> ">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="<?= base_url() ?>"><img src="<?php echo base_url('assets/user/images/logo.png') ?>" alt=""></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">

						<li><a href="<?php echo base_url() ?>" class="<?php if($this->uri->segment(1) == ''){echo 'current';} ?>">Beranda</a>
						</li>

						<li><a href="<?php echo base_url() . 'ukm' ?>" class="<?php if($this->uri->segment(1) == 'ukm'){echo 'current';} ?>">Ukm</a>
						</li>

						<li><a href="<?php echo base_url() . 'berita'?>" class="<?php if($this->uri->segment(1) == 'berita'){echo 'current';} ?>">Berita</a></li>

						<li><a href="<?php echo base_url() . 'event'?>">Event</a></li>
						<li><a href="<?php echo base_url() . 'kontak' ?>">Kontak</a></li>

					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


			<div class="right-side">
				
				<?php if (isset($this->session->userdata['logged_in'])) {
					$nama = ($this->session->userdata['logged_in']['nama_lengkap']);
					$email = ($this->session->userdata['logged_in']['email']);
					$id_pembeli = ($this->session->userdata['logged_in']['id_pembeli']);
					$gambar = ($this->session->userdata['logged_in']['gambar']);
					?>
					<div class="header-widget">
						<a href="<?php echo base_url('user/keranjang') ?>" class="log-in-button"><i class="icon-material-outline-shopping-cart"></i> 
						<?php echo $this->cart->total_items(); ?> Items</a>
					</div>
					<div class="header-widget">

					<!-- Messages -->
						<div class="header-notifications user-menu">
							<div class="header-notifications-trigger">
								<a href="#"><div class="user-avatar status-online"><img src="<?= base_url('upload/user/' . $gambar) ?>" alt=""></div></a>
							</div>

							<!-- Dropdown -->
							<div class="header-notifications-dropdown">

								<!-- User Status -->
								<div class="user-status">

									<!-- User Name / Avatar -->
									<div class="user-details">
										<div class="user-avatar status-online"><img src="<?= base_url('upload/user/' . $gambar) ?>" alt=""></div>
										<div class="user-name">
										<?php echo $nama; ?>
										</div>
									</div>
							</div>
							
							<ul class="user-menu-small-nav">
								<li><a href="<?= base_url('user/dashboard') ?>"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
								<li><a href="<?= base_url('user/setting') ?>"><i class="icon-material-outline-settings"></i> Settings</a></li>
								<li><a href="<?php echo base_url('user/logout') ?>"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
							</ul>

							</div>
						</div>

					</div>
				<?php } else { ?>
				<div class="header-widget">
					<a href="#sign-in-dialog" class="popup-with-zoom-anim log-in-button"><i class="icon-feather-log-in"></i> <span>Log In / Register</span></a>
				</div>
				<div class="header-widget" >
					<a href="<?= base_url('user_ukm')?>" class="log-in-button"><span>Daftarkan Ukm</span></a>
				</div>
				<?php } ?>

				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->

